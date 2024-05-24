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
$submitErr = "";

$class_cover_img = "";
$class_name = "";
$class_intro = "";


$id = isset($_GET['id']) ? $_GET['id'] : "";
if (!empty($id)) {
    
    $sql = "SELECT * FROM sewagroup.class c where c.id = $id";
    $result = $conn->query($sql);
    $row = $result->fetch(PDO::FETCH_ORI_NEXT);
    $class_cover_img = $row['class_cover_img'];
    $class_name = $row['class_name'];
    $class_intro = $row['class_intro'];
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $class_cover_img = isset($_POST['class_cover_img']) ? $_POST['class_cover_img'] : "";
    $class_name = isset($_POST['class_name']) ? $_POST['class_name'] : "";
    $class_intro = isset($_POST['class_intro']) ? $_POST['class_intro'] : "";
}
?>