<?php
$CMS_ACCOUNT = "admin";
$CMS_PSW = "admin";
$accountErr = "";
$passwordErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $account = isset($_POST['account']) ? $_POST['account'] : "";
    $password = isset($_POST['password']) ? $_POST['password'] : "";
    if($account != $CMS_ACCOUNT) {
        $accountErr = "Incorrect account!";
        return;
    }
    if($password != $CMS_PSW) {
        $passwordErr = "Incorrect password!";
        return;
    }
    $_SESSION['cms_login'] = true;
    header("Location: " . "index_edit.php");
}
?>