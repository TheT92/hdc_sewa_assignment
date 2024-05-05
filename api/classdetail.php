<?php
    $id=$_GET['id'];
    include ("databaseVariables.php");
    $conn = new PDO("mysql:host=$servername", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT * FROM sewagroup.classdetail where id=$id";
    $result = $conn->query($sql);
    return $result;
?>

