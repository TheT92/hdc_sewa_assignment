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
function getClassList()
{
    // get class id from url
    include ("databaseVariables.php");
    // get testimonals from database
    $sql = "SELECT `id`,`class_name`,`class_intro`,`class_time`,`member_level`, `class_cover_img` FROM sewagroup.class c";
    $classes = $conn->query($sql);
    return $classes;
}

function getClassDetailList()
{
    // get class id from url
    include ("databaseVariables.php");
    // get testimonals from database
    $sql = "SELECT `id`,`class_id`,`page_name`,`class_image`,`description`, `class_detail` FROM sewagroup.classdetail cd";
    $classdetail = $conn->query($sql);
    return $classdetail;
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