<?php

$loginErr = "";
$emailErr = "";
$passwordErr = "";
$isValid = true;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];
    if (empty(($email))) {
        $isValid = false;
        $emailErr = 'Email address required.';
    }
    if (empty($password)) {
        $isValid = false;
        $passwordErr = 'Password required.';
    }
    if ($isValid) {
        $result = login($email, $password);
        $rowCount = $result->rowCount();
        if ($rowCount > 0) {
            $row = $result->fetch();
            $_SESSION['email'] = $email;
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['firstname'] = $row['firstname'];
            $_SESSION['levelName'] = $row['level_name'];
            $_SESSION['priority'] = $row['priority'];
            $email = $password = "";
            header("Location: " . "index.php");
            exit();
        } else {
            if ($rowCount == 0) {
                $loginErr = "email/password incorrect.";
            } else {
                $loginErr = "Login failed, please try again later.";
            }
        }
    }
}

function login($email, $psw)
{
    include ("databaseVariables.php");
    $conn = new PDO("mysql:host=$servername", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT u.*, m.name as level_name, m.priority FROM sewagroup.user u JOIN sewagroup.member_level m on u.member_level = m.id where u.email = '$email' and password = '$psw' and u.del_flag != 1";
    $result = $conn->query($sql);
    return $result;
};