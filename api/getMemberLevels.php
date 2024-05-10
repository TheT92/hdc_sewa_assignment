<?php
// connect to database
include("databaseVariables.php");
// get member level details from database
$sql = "SELECT `id`, `name`, `fee`, `priority`, `desc`, `create_time` FROM sewagroup.member_level";
$memberLevelList = $conn->query($sql);
return $memberLevelList;

