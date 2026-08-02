<?php

header("Content-Type: application/json");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST["name"];
    $link = $_POST["link"];

    echo json_encode([$name, $link]);
} else {
    echo json_encode([
        "error" => "Invalid Request Method",
    ]);
}
