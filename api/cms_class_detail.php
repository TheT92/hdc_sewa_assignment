<?php
include("databaseVariables.php");
$images = [
    './images/img1.jpg',
    './images/img2.jpg',
    './images/img3.jpg',
    './images/img4.jpg',
    './images/img5.jpg',
    './images/img6.jpg',
    './images/img7.jpg',
    './images/img8.jpg',
    './images/img9.jpg',
    './images/img10.jpg',
    './images/img11.jpg',
    './images/GolfForLadies.jpg',
];
$nameErr = "";
$introErr = "";
$desErr = "";
$detailErr = "";
$submitErr = "";

$class_cover_img = "";
$class_name = "";
$class_intro = "";
$class_des = "";
$class_detail = "";


$id = isset($_GET['id']) ? $_GET['id'] : "";
if (!empty($id)) {
    
    $sql = "SELECT c.*, cd.* FROM sewagroup.class c INNER JOIN sewagroup.classdetail cd ON c.id = cd.class_id";
    $result = $conn->query($sql);
    $row = $result->fetch(PDO::FETCH_ORI_NEXT);
    $class_cover_img = $row['class_cover_img'];
    $class_name = $row['class_name'];
    $class_intro = $row['class_intro'];
    $class_des = $row['description'];
    $class_detail = $row['class_detail'];
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $class_cover_img = isset($_POST['class_cover_img']) ? $_POST['class_cover_img'] : "";
    $class_name = isset($_POST['class_name']) ? $_POST['class_name'] : "";
    $class_intro = isset($_POST['class_intro']) ? $_POST['class_intro'] : "";
    $class_des = isset($_POST['description']) ? $_POST['description'] : "";
    $class_detail = isset($_POST['class_detail']) ? $_POST['class_detail'] : "";

    if(!empty($id)){
        $result = updateClass($class_cover_img, $class_name, $class_intro, $class_des, $class_detail);
        if ($result) {
            // replace url
            header("Location: " . "class_detail.php?id=$id");
            exit();
        }
        else{
            $nameErr = 'Error';
        }
    }else{
        $result = addClass($class_cover_img, $class_name, $class_intro, $class_des, $class_detail);
        if ($result) {
            // replace url
            header("Location: " . "class_detail.php?id=$id");
            exit();
        }
        else{
            $nameErr = 'Error';
        }
    }
}
?>

<?php
function updateClass($class_cover_img, $class_name, $class_intro, $class_des, $class_detail)
{
    include ("databaseVariables.php");
    $classId = $_GET['id'];
    $sql = "UPDATE sewagroup.class SET class_cover_img = '$class_cover_img', class_name = '$class_name', class_intro = '$class_intro' WHERE id = '$classId'";
    $row = $conn->$query($sql)->fetch();
    $sqldetail = "UPDATE sewagroup.classdetail SET description = '$class_des', class_detail = '$class_detail' WHERE id = '$classId'";
    $result = $conn->exec($sqldetail);
    return $result;
}
?>

<?php
function addClass($class_cover_img, $class_name, $class_intro, $class_des, $class_detail)
{
    include ("databaseVariables.php");
    $sql = "INSERT INTO sewagroup.class('class_cover_img', 'class_name', 'class_intro') VALUES ('$class_cover_img', '$class_name', '$class_intro')";
    $row = $conn->$query($sql)->fetch();
    $sqldetail = "INSERT INTO sewagroup.classdetail('description', 'class_detail') VALUES ('$class_des', '$class_detail')";
    $result = $conn->exec($sqldetail);
    return $result;
}
?>
