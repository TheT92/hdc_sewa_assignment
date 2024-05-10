<?php
// connect to database
include("databaseVariables.php");

// get classes list from database and return
$sql = "SELECT `id`,`class_name`,`class_intro`,`class_time`,`member_level`, `class_cover_img` FROM sewagroup.class";
$classList = $conn->query($sql);
return $classList;
