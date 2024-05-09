<?php
    $classId=$_GET['id'];
    include ("databaseVariables.php");
    $conn = new PDO("mysql:host=$servername", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT t.id, t.content, t.create_time, u.firstname, u.surname FROM sewagroup.testimonial t
    JOIN sewagroup.user u ON t.user_id = u.id WHERE t.class_id = '$classId' ORDER BY create_time DESC";
    $commentList = $conn->query($sql);
    return $commentList;
?>

<?php
    function addTestimonial($content, $classId, $userId){
        include ("databaseVariables.php");
        $conn = new PDO("mysql:host=$servername", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT into sewagroup.testimonial(`content`, `class_id`, `user_id`) VALUES (
                '$content', '$classId', '$userId')";
        $result = $conn->exec($sql);
        return $result;
    }
?>