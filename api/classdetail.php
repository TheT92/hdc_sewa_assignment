<?php
// connect to database
include ("databaseVariables.php");

$classId = $_GET['id'];


// get class detail and return
$sql = "SELECT d.*, c.member_level, m.priority FROM sewagroup.classdetail d join sewagroup.class c on d.class_id = c.id join sewagroup.member_level m on c.member_level = m.id where d.id=$classId and d.del_flag != 1";
$result = $conn->query($sql);

// get user member level priority from session
$myPriority = isset($_SESSION['priority']) ? $_SESSION['priority'] : 0;
$userId = $_SESSION['user_id'];
$action = isset($_GET['action']) ? $_GET['action'] : "";
$row = $result->fetch(PDO::FETCH_ORI_NEXT);
// get fields of class detail
$image = $row['class_image'];
$description = $row['description'];
$pname = $row['page_name'];
$classdetail = $row['class_detail'];
$bookingState = checkBookState($userId, $classId);
$classPriority = $row['priority'];

$bookingError = "";
$contentErr = "";

// book class
if ($action == 'book' && $bookingState <= 0) {
    $result = bookClass($userId, $classId);
    if ($result) {
        // book success, remove action from url
        header("Location: " . "classdetail.php?id=" . $classId);
        exit();
    } else {
        // otherwise show error message
        $bookingError = "Book failed, please try again later.";
    }
}

// check if the logged in user has booked this class
function checkBookState($userId, $classId)
{
    include ("databaseVariables.php");
    $query = "SELECT count(*) FROM sewagroup.class_booking WHERE user_id = $userId AND class_id = $classId";
    $rows = $conn->query($query)->fetch();
    return $rows[0];
}

// book class for user
function bookClass($userId, $classId)
{
    include ("databaseVariables.php");
    $sql = "INSERT into sewagroup.class_booking(`user_id`, `class_id`) VALUES (
            $userId, $classId)";
    $res = $conn->exec($sql);
    return $res;
}

// generate a random background color for comment avatars
function randomColor()
{
    $chars = ['3', '4', '5', '6', '7', '8', '9', 'a', 'b', 'c', 'd', 'e'];
    $color = '#';
    for ($i = 0; $i < 6; $i++) {
        $ran = mt_rand(0, 11);
        $color = $color . $chars[$ran];
    }
    return $color;
}
?>