<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shortia The URL Shortener</title>
    <link rel="stylesheet" href="/src/styles/output.css">
    <link rel="stylesheet" href="/src/styles/main.css">
</head>
<body>

<?php
$currentPath = $_SERVER["REQUEST_URI"];

if ($currentPath == "/") {
    header("Location: /pages/url");
    exit();
}

include "src/components/header.php";
?>


<main class="content">
        <?php
        $allowedToInclude = ["/pages/url", "/pages/qrcode"];

        if (in_array($currentPath, $allowedToInclude)) {
            include "src$currentPath.php";
        }
    ?>
</main>

</body>
</html>
