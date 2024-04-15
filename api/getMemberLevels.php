<?php
include("databaseVariables.php");
$conn = new PDO("mysql:host=$servername", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sql = "SELECT `id`, `name`, `fee`, `priority`, `desc`, `create_time` FROM sewagroup.member_level";
$memberLevelList = $conn->query($sql);
return $memberLevelList;

