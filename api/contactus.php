<?php
// error messages
$firstNameErr = "";
$surnameErr = "";
$emailErr = "";
$phonenoErr = "";
$messageErr = "";
$isValid = true;
// get action from url
$action = isset($_GET['action']) ? $_GET['action'] : "";

// handle form submition
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // get form data
    $email = $_POST['email'];
    $phoneno = $_POST['phoneno'];
    $firstname = $_POST['firstname'];
    $surname = $_POST['surname'];
    $message = $_POST['message'];
    // validation
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
            // success, jump to self, add action=success
            $email = $phoneno = $message = "";
            header("Location: " . "contact.php?action=success");
            exit();
        } else {
            // fail, show error message
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
    $sql = "";
    // if logged in, add user_id
    if(isset($_SESSION['user_id'])) {
        $userId = $_SESSION['user_id'];
        $sql = "INSERT into sewagroup.contact(`firstname`,`surname`,`email`,`phoneno`,`message`, `user_id`) VALUES (
            '$firstname', '$surname', '$email', '$phoneno', '$message', $userId)";
    } else {
        $sql = "INSERT into sewagroup.contact(`firstname`,`surname`,`email`,`phoneno`,`message`) VALUES (
            '$firstname', '$surname', '$email', '$phoneno', '$message')";
    }
    echo $sql;
    $result = $conn->exec($sql);
    return $result;
}
;
