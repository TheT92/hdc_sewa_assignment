<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $action = isset($_GET['action']) ? $_GET['action'] : "";
    if($action=='addNew') {
        $newClassId = isset($_POST['newClassId']) ? $_POST['newClassId'] : "";
        $originIds = isset($_POST['originIds']) ? $_POST['originIds'] : "";
        if(!empty($newClassId)) {
            updateNewClasses(empty($originIds) ? $newClassId : ($originIds.','.$newClassId));
        }
    } else if($action=='addSpecial') {
        $newSpecialId = isset($_POST['newSpecialId']) ? $_POST['newSpecialId'] : "";
        $originIds = isset($_POST['originIds']) ? $_POST['originIds'] : "";
        if(!empty($newSpecialId)) {
            updateSpecialClasses(empty($originIds) ? $newSpecialId : ($originIds.','.$newSpecialId));
        }
    }
} else if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $action = isset($_GET['action']) ? $_GET['action'] : "";
    $ids = isset($_GET['ids']) ? $_GET['ids'] : "";
    if ($action == 'deleteNew') {
        updateNewClasses($ids);
    } else if($action == 'deleteSpecial') {
        updateSpecialClasses($ids);
    }
}

$newIds = "";
$specialIds = "";

// get new class list from database and show on index page.
function getNewClasses()
{
    // connect to database
    include ("databaseVariables.php");
    // select class_ids from table
    $sql = "SELECT `class_ids` FROM sewagroup.page WHERE type = 'new_classes' and del_flag != 1";
    $rows = $conn->query($sql)->fetch();
    global $newIds;
    $newIds = $rows[0];
    // search class table where id in class_ids
    if(empty($newIds)) {
        $listSql = "SELECT * FROM sewagroup.class WHERE id in ('') and del_flag != 1";
    } else {
        $listSql = "SELECT * FROM sewagroup.class WHERE id in ($newIds) and del_flag != 1";
    }
    
    $newClasses = $conn->query($listSql);
    return $newClasses;
}

function getExcludeNewClasses()
{
    // connect to database
    include ("databaseVariables.php");
    // search class table where id in class_ids
    global $newIds;
    if(empty($newIds)) {
        $listSql = "SELECT * FROM sewagroup.class WHERE id not in ('') and del_flag != 1";
    } else {
        $listSql = "SELECT * FROM sewagroup.class WHERE id not in ($newIds) and del_flag != 1";
    }
    
    $excludeNewClasses = $conn->query($listSql);
    return $excludeNewClasses;
}

// add or remove class from new classes list
function updateNewClasses($ids) {
    // connect to database
    include ("databaseVariables.php");
    // select class_ids from table
    $sql = "UPDATE sewagroup.page p SET `class_ids` = '$ids' WHERE type = 'new_classes' and del_flag != 1";
    $result = $conn->exec($sql);
    if ($result) {
        header("Location: " . "index_edit.php");
        exit();
    } else {
        // show error message
        $updateErr = "operation failed, please try again later.";
    }
}

function getExcludeNewIds($id)
{
    global $newIds;
    $newString = str_replace(" ", "", $newIds);
    $partToRemove = "$id,";
    $newString = str_replace($partToRemove, "", $newString);
    $partToRemove = ",$id";
    $newString = str_replace($partToRemove, "", $newString);
    $partToRemove = "$id";
    $newString = str_replace($partToRemove, "", $newString);
    
    return $newString;
}

// get special offer list from database and show on index page.
function getSpecialOffers()
{
    // connect to database
    include ("databaseVariables.php");
    // select class_ids from table
    $sql = "SELECT `class_ids` FROM sewagroup.page WHERE type = 'special_offers' and del_flag != 1";
    $rows = $conn->query($sql)->fetch();
    global $specialIds;
    $specialIds = $rows[0];
    // search class table where id in class_ids
    if(empty($specialIds)) {
        $listSql = "SELECT * FROM sewagroup.class WHERE id in ('') and del_flag != 1";
    } else {
        $listSql = "SELECT * FROM sewagroup.class WHERE id in ($specialIds) and del_flag != 1";
    }
    $specialOffers = $conn->query($listSql);
    return $specialOffers;
}


function getExcludeSpecialClasses()
{
    // connect to database
    include ("databaseVariables.php");
    // search class table where id in class_ids
    global $specialIds;
    if(empty($specialIds)) {
        $listSql = "SELECT * FROM sewagroup.class WHERE id not in ('') and del_flag != 1";
    } else {
        $listSql = "SELECT * FROM sewagroup.class WHERE id not in ($specialIds) and del_flag != 1";
    }
    $excludeNewClasses = $conn->query($listSql);
    return $excludeNewClasses;
}

// add or remove class from special offer classes list
function updateSpecialClasses($ids) {
    // connect to database
    include ("databaseVariables.php");
    // select class_ids from table
    $sql = "UPDATE sewagroup.page p SET `class_ids` = '$ids' WHERE type = 'special_offers' and del_flag != 1";
    $result = $conn->exec($sql);
    if ($result) {
        header("Location: " . "index_edit.php");
        exit();
    } else {
        // show error message
        $updateErr = "operation failed, please try again later.";
    }
}

function getExcludeSpecialIds($id)
{
    global $specialIds;
    $newString = str_replace(" ", "", $specialIds);
    $partToRemove = "$id,";
    $newString = str_replace($partToRemove, "", $newString);
    $partToRemove = ",$id";
    $newString = str_replace($partToRemove, "", $newString);
    $partToRemove = "$id";
    $newString = str_replace($partToRemove, "", $newString);
    
    return $newString;
}