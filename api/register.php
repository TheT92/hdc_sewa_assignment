<?php
function registerAccount($firstname, $surname, $email, $psw, $memberLevel)
{
    include ("databaseVariables.php");
    $conn = new PDO("mysql:host=$servername", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT into sewagroup.user(`firstname`, `surname`, `email`, `password`, `member_level`) VALUES (
            '$firstname', '$surname', '$email', '$psw', $memberLevel)";
    $result = $conn->exec($sql);
    return $result;
};

function checkEmail($email)
{
    include ("databaseVariables.php");
    $conn = new PDO("mysql:host=$servername", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $query = "SELECT count(*) FROM sewagroup.user WHERE email = '$email'";
    $rows = $conn->query($query)->fetch();
    echo $rows[0] ."";
    return $rows[0];
};
