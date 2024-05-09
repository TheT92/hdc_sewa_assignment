<?php
$classId = $_GET['id'];
include ("databaseVariables.php");
$conn = new PDO("mysql:host=$servername", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "SELECT * FROM sewagroup.classdetail where id=$classId";
$result = $conn->query($sql);
return $result;
?>

<?php
function checkBookState($userId, $classId)
{
    include ("databaseVariables.php");
    $conn = new PDO("mysql:host=$servername", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $query = "SELECT count(*) FROM sewagroup.class_booking WHERE user_id = $userId AND class_id = $classId";
    $rows = $conn->query($query)->fetch();
    return $rows[0];
}

function bookClass($userId, $classId) {
    include ("databaseVariables.php");
    $conn = new PDO("mysql:host=$servername", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT into sewagroup.class_booking(`user_id`, `class_id`) VALUES (
            $userId, $classId)";
    $res = $conn->exec($sql);
    return $res;
}
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