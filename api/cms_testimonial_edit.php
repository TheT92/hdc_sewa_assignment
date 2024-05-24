<?php
    $action = isset($_GET['action']) ? $_GET['action'] : "";
    if($action == 'changeState') {
        $id = $_GET['id'];
        $val = $_GET['val'];
        if(isset($id) && isset($val) && ($val == 0 || $val == 1)) {
            $result = changeState($id, $val);
            if ($result) {
                header("Location: " . "testimonial_edit.php");
                exit();
            } else {
                // show error message
                $updateErr = "operation failed, please try again later.";
            }
        }
    }
?>
<?php
function getCommentList()
{
    // get class id from url
    include ("databaseVariables.php");
    // get testimonals from database
    $sql = "SELECT t.id, t.content, t.create_time, t.del_flag, c.class_name, u.firstname, u.surname FROM sewagroup.testimonial t
    JOIN sewagroup.user u ON t.user_id = u.id JOIN sewagroup.class c ON t.class_id = c.id ORDER BY create_time DESC";
    $commentList = $conn->query($sql);
    return $commentList;
}

function changeState($id, $val) {
     // get class id from url
     include ("databaseVariables.php");
     // get testimonals from database
     $sql = "UPDATE sewagroup.testimonial t SET `del_flag` = $val WHERE t.id = $id";
     $result = $conn->exec($sql);
     return $result;
}
?>