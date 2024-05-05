<?php
function contactus($firstname, $surname, $email, $phoneno, $message)
{
    include ("databaseVariables.php");
    $conn = new PDO("mysql:host=$servername", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT into sewagroup.contact('firstname','surname','email','phoneno','message') VALUES (
        '$firstname', '$surname', '$email', '$phoneno', $message)";
    $result = $conn->exec($sql);
    return $result;
};
