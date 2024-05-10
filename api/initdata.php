<?php
include("databaseVariables.php");

try {
    // execute sql script when enter the index page, inject test data.
    $sqlScript = file_get_contents("./assets/init.sql");
    $conn->exec($sqlScript);
} catch (Exception $e) {
    error_log($e->getMessage());
    echo "". $e->getMessage() ."";
}
