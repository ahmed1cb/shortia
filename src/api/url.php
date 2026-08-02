<?php
include "../core/database.php";

header("Content-Type: application/json");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST["name"];
    $link = $_POST["link"];
    $token = uniqid("", true);

    $statement = $pdo->prepare(
        "INSERT INTO shorten_links (name , link , short_link) VALUES (:name,:link,:short_link)",
    );

    $data = [
        "name" => $name,
        "link" => $link,
        "short_link" => $link . $token, // Temporary
    ];

    $statement->execute($data);

    $idStatement = $pdo->prepare(
        "SELECT id FROM shorten_links WHERE name = :name AND link = :link AND short_link = :short_link ",
    );

    $idStatement->execute($data);

    $id = $idStatement->fetchObject()->id;

    $updateStatement = $pdo->prepare(
        "UPDATE  shorten_links SET short_link = :sl  WHERE id = :id",
    );

    $newLink = bin2hex($name . $id); // just a token here to refer to the link
    $updateStatement->execute([
        "id" => $id,
        "sl" => $newLink,
    ]);

    echo json_encode([
        "message" => "Success",
        "short_link_tok" => $newLink,
    ]);
} else {
    echo json_encode([
        "error" => "Invalid Request Method",
    ]);
}
