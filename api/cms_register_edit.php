<?php
    $action = isset($_GET['action']) ? $_GET['action'] : "";
    if($action == 'changeState') {
        $id = $_GET['id'];
        $val = $_GET['val'];
        if(isset($id) && isset($val) && ($val == 0 || $val == 1)) {
            $result = changeState($id, $val);
            if ($result) {
                header("Location: " . "register_edit.php");
                exit();
            } else {
                // show error message
                $updateErr = "operation failed, please try again later.";
            }
        }
    }
?>
<?php
function getRegisterUser()
{
    // get class id from url
    include ("databaseVariables.php");
    // get users from database
    $sql = "SELECT u.id, u.create_time, u.del_flag, u.email, u.member_level, u.firstname, u.surname FROM sewagroup.user u
    JOIN sewagroup.member_level m ON u.member_level = m.id ORDER BY create_time DESC";
    $registerUser = $conn->query($sql);
    return $registerUser;
}

function changeState($id, $val) {
     // get user id from url
     include ("databaseVariables.php");
     // get users from database
     $sql = "UPDATE sewagroup.user u SET `del_flag` = $val WHERE u.id = $id";
     $result = $conn->exec($sql);
     return $result;
}
?>