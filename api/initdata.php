<?php
$servername = "localhost";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$servername", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sqlScript = file_get_contents("./assets/init.sql");
    $conn->exec($sqlScript);
} catch (Exception $e) {
    error_log($e->getMessage());
    echo "". $e->getMessage() ."";
}
