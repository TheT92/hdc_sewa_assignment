<?php
include("databaseVariables.php");
$conn = new PDO("mysql:host=$servername", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sql = "SELECT `id`,`class_name`,`class_intro`,`class_time`,`member_level`, `class_cover_img` FROM sewagroup.class";
$classList = $conn->query($sql);
return $classList;
