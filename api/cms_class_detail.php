<?php
$images = [
    './images/img1.jpg',
    './images/img2.jpg',
    './images/img3.jpg',
    './images/img4.jpg',
    './images/img5.jpg',
    './images/img6.jpg',
    './images/img7.jpg',
    './images/img8.jpg',
    './images/img9.jpg',
    './images/img10.jpg',
    './images/img11.jpg',
    './images/GolfForLadies.jpg',
];
$nameErr = "";
$introErr = "";
$desErr = "";
$detailErr = "";
$submitErr = "";

$class_cover_img = "";
$class_name = "";
$member_level = 0;
$class_intro = "";
$description = "";
$class_detail = "";


$id = isset($_GET['id']) ? $_GET['id'] : "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $class_cover_img = isset($_POST['class_cover_img']) ? $_POST['class_cover_img'] : "";
    $class_name = isset($_POST['class_name']) ? $_POST['class_name'] : "";
    $class_intro = isset($_POST['class_intro']) ? $_POST['class_intro'] : "";
    $description = isset($_POST['description']) ? $_POST['description'] : "";
    $class_detail = isset($_POST['class_detail']) ? $_POST['class_detail'] : "";
    $member_level = isset($_POST['member_level']) ? $_POST['member_level'] : "";

    if (!empty($id)) {
        $result = updateClass($class_cover_img, $class_name, $class_intro, $description, $class_detail, $member_level);
        if ($result >= 0) {
            // replace url
            header("Location: " . "class_detail.php?id=$id");
            exit();
        } else {
            $nameErr = 'Error';
        }
    } else {
        $result = addClass($class_cover_img, $class_name, $class_intro, $description, $class_detail, $member_level);
        if ($result) {
            // replace url
            header("Location: " . "class_detail.php?id=$id");
            exit();
        } else {
            $nameErr = 'Error';
        }
    }
} else if (!empty($id)) {
    getClassDetail($id);
}
?>
<?php
function getClassDetail($id)
{
    include ("databaseVariables.php");
    $sql = "SELECT c.*, cd.* FROM sewagroup.class c INNER JOIN sewagroup.classdetail cd ON c.id = cd.class_id WHERE c.id = $id";
    $result = $conn->query($sql);
    $row = $result->fetch(PDO::FETCH_ORI_NEXT);
    global $class_cover_img;
    global $class_name;
    global $class_intro;
    global $description;
    global $class_detail;
    global $member_level;
    $class_cover_img = $row['class_cover_img'];
    $class_name = $row['class_name'];
    $class_intro = $row['class_intro'];
    $description = $row['description'];
    $class_detail = $row['class_detail'];
    $member_level = $row['member_level'];
}
?>
<?php
function updateClass($class_cover_img, $class_name, $class_intro, $description, $class_detail, $member_level)
{
    include ("databaseVariables.php");
    $classId = $_GET['id'];
    $sql = "UPDATE sewagroup.class c SET c.class_cover_img = '$class_cover_img', c.class_name = '$class_name', c.class_intro = '$class_intro', c.member_level = $member_level WHERE c.id = $classId";
    $result = $conn->exec($sql);
    $sqldetail = "UPDATE sewagroup.classdetail c SET c.description = '$description', c.class_detail = '$class_detail' WHERE c.id = $classId";
    $result = $conn->exec($sqldetail);
    return $result;
}
?>

<?php
function addClass($class_cover_img, $class_name, $class_intro, $description, $class_detail, $member_level)
{
    include ("databaseVariables.php");
    // $sql = "INSERT INTO sewagroup.class(`class_cover_img`, `class_name`, `class_intro`) VALUES ('$class_cover_img', '$class_name', '$class_intro')";
    // $result = $conn->exec($sql);

    // $sqldetail = "INSERT INTO sewagroup.classdetail(`description`, `class_detail`) VALUES ('$description', '$class_detail')";
    // $result = $conn->exec($sqldetail);
    // return $result;

    try {
        // 开始事务
        $conn->beginTransaction();
        $sql = "INSERT INTO sewagroup.class(`class_cover_img`, `class_name`, `class_intro`, `member_level`) VALUES ('$class_cover_img', '$class_name', '$class_intro', $member_level)";
        $result = $conn->exec($sql);

        // 获取生成的 class 表的 id
        $classId = $conn->lastInsertId();

        // 向 class_detail 表插入数据
        $sqldetail = "INSERT INTO sewagroup.classdetail(`description`, `class_detail`, `class_id`) VALUES ('$description', '$class_detail', $classId)";
        $result = $conn->exec($sqldetail);

        // 提交事务
        $conn->commit();
        return $result;

    } catch (Exception $e) {
        // 如果发生错误，回滚事务
        $conn->rollBack();
        echo "Failed to insert data: " . $e->getMessage();
    }
}
?>