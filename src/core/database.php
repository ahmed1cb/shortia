<?php

$conf = include __DIR__ . "/../configs/database.php";

$host = $conf["host"];
$user = $conf["user"];
$passsword = $conf["pass"];
$dbname = $conf["dbname"];
$dsn = "mysql:host=$host;dbname=$dbname";
try {
  $pdo = new PDO($dsn, $user, $passsword);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
  die("App Error Please Try Again Later");
}
