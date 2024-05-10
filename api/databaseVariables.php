<?php
// the variables for connecting database
$servername = "localhost";
$username = "root";
$password = "";

// link to database
$conn = new PDO("mysql:host=$servername", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);