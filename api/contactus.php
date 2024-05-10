<?php
$firstNameErr = "";
$surnameErr = "";
$emailErr = "";
$phonenoErr = "";
$messageErr = "";
$isValid = true;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $phoneno = $_POST['phoneno'];
    $firstname = $_POST['firstname'];
    $surname = $_POST['surname'];
    $message = $_POST['message'];
    if (empty(($email))) {
        $isValid = false;
        $emailErr = 'Email address required.';
    }
    if (empty($phoneno)) {
        $isValid = false;
        $phonenoErr = 'Phone number required.';
    }
    if (empty($message)) {
        $isValid = false;
        $phonenoErr = 'Message required.';
    }
    if ($isValid) {
        $result = contactus($firstname, $surname, $email, $phoneno, $message);
        if ($result) {
            $email = $phoneno = $message = "";
            header("Location: " . "index.php");
            exit();
        } else {
            $contactErr = "Send messasge failed, please try again later.";
        }
    }
}
?>
<?php
// submit the 'contact us' from, save data
function contactus($firstname, $surname, $email, $phoneno, $message)
{
    // connect to database
    include ("databaseVariables.php");
    // insert into database
    $sql = "INSERT into sewagroup.contact(`firstname`,`surname`,`email`,`phoneno`,`message`) VALUES (
        '$firstname', '$surname', '$email', '$phoneno', '$message')";
    $result = $conn->exec($sql);
    return $result;
}
;
