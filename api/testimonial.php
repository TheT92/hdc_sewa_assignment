<?php
// get form data when sending post request
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $content = $_POST['content'];

    if (empty($content)) {
        $contentErr = 'comment can not be empty!';
    } else {
        // add testimonial into database
        $result = addTestimonial($content, $classId, $userId);
        if ($result) {
            // replace url
            header("Location: " . "classdetail.php?id=$classId");
            exit();
        } else {
            // show error message
            $contentErr = 'Comment failed, please try again later.';
        }
    }
}
// get class id from url
$classId = $_GET['id'];
include ("databaseVariables.php");
// get testimonals from database
$sql = "SELECT t.id, t.content, t.create_time, u.firstname, u.surname FROM sewagroup.testimonial t
    JOIN sewagroup.user u ON t.user_id = u.id WHERE t.class_id = '$classId' ORDER BY create_time DESC";
$commentList = $conn->query($sql);
return $commentList;
?>

<?php
function addTestimonial($content, $classId, $userId)
{
    include ("databaseVariables.php");
    // insert testimonals into database
    $sql = "INSERT into sewagroup.testimonial(`content`, `class_id`, `user_id`) VALUES (
                '$content', '$classId', '$userId')";
    $result = $conn->exec($sql);
    return $result;
}
?>