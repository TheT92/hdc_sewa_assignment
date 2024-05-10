<?php
function registerAccount($firstname, $surname, $email, $psw, $memberLevel)
{
    include ("databaseVariables.php");
    // create a new user account, save user data
    $sql = "INSERT into sewagroup.user(`firstname`, `surname`, `email`, `password`, `member_level`) VALUES (
            '$firstname', '$surname', '$email', '$psw', $memberLevel)";
    $result = $conn->exec($sql);
    return $result;
};

function checkEmail($email)
{
    include ("databaseVariables.php");
    // check in database if the email address already exists
    $query = "SELECT count(*) FROM sewagroup.user WHERE email = '$email'";
    $rows = $conn->query($query)->fetch();
    return $rows[0];
};
