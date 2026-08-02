<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shortia The URL Shortener</title>
    <link rel="stylesheet" href="/src/styles/output.css">
    <link rel="stylesheet" href="/src/styles/main.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body class="flex min-h-screen flex-col">

<?php
$currentPath = $_SERVER["REQUEST_URI"];

if (isset($_GET["s"])) {
    include "src/core/database.php";

    $targetStatement = $pdo->prepare(
        "SELECT link FROM shorten_links WHERE short_link = :sl",
    );

    $targetStatement->execute(["sl" => $_GET["s"]]);

    $obj = $targetStatement->fetchObject();

    if ($obj) {
        $link = $obj->link;

        header("Location: $link");
        exit();
    }
}

if ($currentPath == "/") {
    header("Location: /pages/url");
    exit();
}
include "src/components/header.php";
?>


<main class="content flex-1">
        <?php
        $allowedToInclude = ["/pages/url", "/pages/qrcode"];

        if (in_array($currentPath, $allowedToInclude)) {
            include "src$currentPath.php";
        }
        ?>
</main>

<?php include "src/components/footer.php"; ?>

</body>
</html>
