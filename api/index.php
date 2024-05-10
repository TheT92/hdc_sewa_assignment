<?php
// use image flow as background of banner on mobile mode
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

// use image flow as background for membership block
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

// get new class list from database and show on index page.
function getNewClasses()
{
    // connect to database
    include ("databaseVariables.php");
    // select class_ids from table
    $sql = "SELECT `class_ids` FROM sewagroup.page WHERE type = 'new_classes' and del_flag != 1";
    $rows = $conn->query($sql)->fetch();
    $ids = $rows[0];
    // search class table where id in class_ids
    $listSql = "SELECT * FROM sewagroup.class WHERE id in ($ids) and del_flag != 1";
    $newClasses = $conn->query($listSql);
    return $newClasses;
}

// get special offer list from database and show on index page.
function getSpecialOffers()
{
    // connect to database
    include ("databaseVariables.php");
    // select class_ids from table
    $sql = "SELECT `class_ids` FROM sewagroup.page WHERE type = 'special_offers' and del_flag != 1";
    $rows = $conn->query($sql)->fetch();
    $ids = $rows[0];
    // search class table where id in class_ids
    $listSql = "SELECT * FROM sewagroup.class WHERE id in ($ids) and del_flag != 1";
    $specialOffers = $conn->query($listSql);
    return $specialOffers;
}