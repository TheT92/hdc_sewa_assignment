<?php
// error messages show on each field
$emailErr = "";
$firstnameErr = "";
$surnameErr = "";
$passwordErr = "";
$repeatPasswordErr = "";
$registerErr = "";
$isValid = true;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // get form data
    $email = $_POST['email'];
    $firstname = $_POST['firstname'];
    $surname = $_POST['surname'];
    $password = $_POST['password'];
    $repeatPassword = $_POST['repeatPassword'];
    $memberLevel = $_POST['memberLevel'];
    // validation and error messages
    if (empty(($email))) {
        $isValid = false;
        $emailErr = 'Email address required.';
    }
    if (empty($firstname)) {
        $isValid = false;
        $firstnameErr = 'Firstname required.';
    }
    if (empty($surname)) {
        $isValid = false;
        $surnameErr = 'Surname required.';
    }
    if (empty($password)) {
        $isValid = false;
        $passwordErr = 'Password required.';
    }
    if (empty($repeatPassword)) {
        $isValid = false;
        $repeatPasswordErr = 'confirmation password required.';
    }
    if ($password != $repeatPassword) {
        $isValid = false;
        $passwordErr = 'Password and confirmation password are inconsistent.';
    }
    if (checkEmail($email) > 0) {
        $isValid = false;
        $emailErr = 'Email address already exists!';
    }
    if ($isValid) {
        // if pass validation, do register
        $result = registerAccount($firstname, $surname, $email, $password, $memberLevel);
        if ($result) {
            // jump to login success
            $email = $password = $repeatPassword = "";
            header("Location: " . "login.php");
            exit();
        } else {
            // show error message
            $registerErr = "Register failed, please try again later.";
        }
    }
}

// save register data into database
function registerAccount($firstname, $surname, $email, $psw, $memberLevel)
{
    include ("databaseVariables.php");
    // create a new user account, save user data
    $sql = "INSERT into sewagroup.user(`firstname`, `surname`, `email`, `password`, `member_level`) VALUES (
            '$firstname', '$surname', '$email', '$psw', $memberLevel)";
    $result = $conn->exec($sql);
    return $result;
}
;

// check if the email has been used
function checkEmail($email)
{
    include ("databaseVariables.php");
    // check in database if the email address already exists
    $query = "SELECT count(*) FROM sewagroup.user WHERE email = '$email'";
    $rows = $conn->query($query)->fetch();
    return $rows[0];
}
;
