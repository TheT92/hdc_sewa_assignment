<?php
$flowImgs = [
    './images/img1.jpg',
    './images/img2.jpg',
    './images/img3.jpg',
    './images/img4.jpg',
    './images/img5.jpg',
    './images/img6.jpg',
    './images/img7.jpg',
    './images/img9.jpg',
    './images/img10.jpg',
    './images/img8.jpg',
    './images/img11.jpg'
];

$flowImgsBottom = [
    './images/img4.jpg',
    './images/img1.jpg',
    './images/img11.jpg',
    './images/img3.jpg',
    './images/img6.jpg',
    './images/img10.jpg',
    './images/img8.jpg',
    './images/img5.jpg',
    './images/img7.jpg',
    './images/img2.jpg',
    './images/img9.jpg',
    './images/img1.jpg',
    './images/img8.jpg',
    './images/img6.jpg',
    './images/img7.jpg',
    './images/img2.jpg',
    './images/img9.jpg',
];
function getNewClasses()
{
    include ("databaseVariables.php");
    $conn = new PDO("mysql:host=$servername", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT `class_ids` FROM sewagroup.page WHERE type = 'new_classes' and del_flag != 1";
    $rows = $conn->query($sql)->fetch();
    $ids = $rows[0];
    $listSql = "SELECT * FROM sewagroup.class WHERE id in ($ids) and del_flag != 1";
    $newClasses = $conn->query($listSql);
    return $newClasses;
}

function getSpecialOffers()
{
    include ("databaseVariables.php");
    $conn = new PDO("mysql:host=$servername", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT `class_ids` FROM sewagroup.page WHERE type = 'special_offers' and del_flag != 1";
    $rows = $conn->query($sql)->fetch();
    $ids = $rows[0];
    $listSql = "SELECT * FROM sewagroup.class WHERE id in ($ids) and del_flag != 1";
    $specialOffers = $conn->query($listSql);
    return $specialOffers;
}