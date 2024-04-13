<?php
$servername = "localhost";
$username = "root";
$password = "";

try {
    echo "1 \n";
    $conn = new PDO("mysql:host=$servername", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sqlScript = file_get_contents("./assets/init.sql");
    $conn->exec($sqlScript);
    echo "2 \n";
    // 执行查询语句
    $sql = "SELECT id, firstname, email FROM sewagroup.user";
    $result = $conn->query($sql);

    // 输出数据
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        echo "ID: " . $row["id"] . " - Name: " . $row["firstname"] . " - Email: " . $row["email"] . "<br>";
    }

    echo "success";
} catch (Exception $e) {
    echo "". $e->getMessage() ."";
}
