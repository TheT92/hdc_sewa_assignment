<?php
    $id=$_GET['id'];
    include ("databaseVariables.php");
    $conn = new PDO("mysql:host=$servername", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT t.id, t.content, t.create_time, u.firstname, u.surname FROM sewagroup.testimonial t
    JOIN sewagroup.user u ON t.user_id = u.id WHERE t.class_id = '$id'";
    $testList = $conn->query($sql);
    return $testList;
?>

<?php
    function addTestimonial($content, $classid, $userid){
        include ("databaseVariables.php");
        $conn = new PDO("mysql:host=$servername", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT into sewagroup.testimonial(`content`, `class_id`, `user_id`) VALUES (
                '$content', '$classid', '$userid')";
        $inserttest = $conn->exec($sql);
        return $result;
    }
?>