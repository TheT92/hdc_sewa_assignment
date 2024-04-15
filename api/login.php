<?php
function login($email, $psw)
{
    include ("databaseVariables.php");
    $conn = new PDO("mysql:host=$servername", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT * FROM sewagroup.user where email = '$email' and password = '$psw' and del_flag != 1";
    $result = $conn->query($sql);
    return $result;
};
