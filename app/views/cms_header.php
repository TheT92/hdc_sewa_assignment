<?php if (session_status() === PHP_SESSION_NONE) {
    session_start();
} ?>

<?php
// get current url
$current_path = $_SERVER['REQUEST_URI'];
$route = parse_url($current_path, PHP_URL_PATH);
?>
<?php
// logout and remove session
if (str_ends_with($route, 'cms/login.php') && isset($_GET['action']) && $_GET['action'] == 'logout') {
    session_unset();
}
// if logged in, forbid user to visit login and register page
if (str_ends_with($route, 'cms/login.php')) {
    if (isset($_SESSION["cms_login"])) {
        header("Location: index_edit.php");
        exit();
    }
}
if (!str_ends_with($route, 'cms/login.php') && !isset($_SESSION["cms_login"])) {
    header("Location: login.php");
    exit();
}
?>

<nav class="navbar fixed-top ps-4 pe-4 text-color-black">
    <!-- logo -->
    <a href="index_edit.php" class="text-decoration-none d-inline-flex">
        <p class="fs-4 mb-0 lh-1 fw-bold fst-italic logo"><span class="text-color-primary">O</span>utdoor </br> Club</p>
        <h1 class="fw-bold fst-italic ms-2">CMS</h1>
    </a>
    <span class="d-flex align-items-center">
        <?php if (isset($_SESSION["cms_login"])): ?>
            <span class="pe-2">Hello Admin,</span>
            <a href="login.php?action=logout" type="button"
                class="btn btn-sm text-white btn-danger text-decoration-none">Logout</button></a>
        <?php endif ?>
    </span>
</nav>