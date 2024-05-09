<?php if (session_status() === PHP_SESSION_NONE) {
    session_start();
} ?>
<?php
$current_path = $_SERVER['REQUEST_URI'];
$route = parse_url($current_path, PHP_URL_PATH);
?>
<?php
if (str_ends_with($route, '/login.php') && isset($_GET['action']) && $_GET['action'] == 'logout') {
    session_unset();
}
if (str_ends_with($route, '/login.php') || str_ends_with($route, '/register.php')) {
    if (isset($_SESSION["email"])) {
        header("Location: index.php");
        exit();
    }
}
if(str_ends_with($route, '/classdetail.php') && !isset($_SESSION["email"])) {
    header("Location: login.php");
    exit();
}
?>
<nav class="navbar fixed-top bg-body-tertiary ps-4 pe-2 text-color-black">
    <a href="index.php" class="text-decoration-none">
        <p class="fs-4 mb-0 lh-1 fw-bold fst-italic logo"><span class="text-color-primary">O</span>utdoor </br> Club</p>
    </a>
    <span class="d-flex">
        <?php
        if (str_ends_with($route, '/') || str_ends_with($route, 'index.php')) {
            echo '<a href="class.php" class="p-2 d-flex align-items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor"
                    class="bi bi-clipboard-pulse" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M10 1.5a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5zm-5 0A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5v1A1.5 1.5 0 0 1 9.5 4h-3A1.5 1.5 0 0 1 5 2.5zm-2 0h1v1H3a1 1 0 0 0-1 1V14a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V3.5a1 1 0 0 0-1-1h-1v-1h1a2 2 0 0 1 2 2V14a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V3.5a2 2 0 0 1 2-2m6.979 3.856a.5.5 0 0 0-.968.04L7.92 10.49l-.94-3.135a.5.5 0 0 0-.895-.133L4.232 10H3.5a.5.5 0 0 0 0 1h1a.5.5 0 0 0 .416-.223l1.41-2.115 1.195 3.982a.5.5 0 0 0 .968-.04L9.58 7.51l.94 3.135A.5.5 0 0 0 11 11h1.5a.5.5 0 0 0 0-1h-1.128z" />
                </svg>
                <span class="ms-1 link-text fs-5 fw-light">CLASSES</span>
            </a>';
        } else {
            echo '<a href="index.php" class="p-2 pe-3 d-flex align-items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
                    <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293zM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5z"/>
                </svg>
                <span class="ms-1 link-text fs-5 fw-light">HOME</span>
            </a>';
        }
        ?>

        <?php
        if (!str_ends_with($route, 'login.php')) {
            if (isset($_SESSION["email"])) {
                echo '<section class="dropdown d-flex align-items-center p-2 pe-3">
                
                <span class="ms-1 fs-5 fw-light d-flex align-items-center dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
                    </svg>  
                    <span class="ms-1 link-text fs-5 fw-light">ACCOUNT</span>
                </span>
                <ul class="dropdown-menu dropdown-menu-end p-2">';
                if (isset($_SESSION['firstname'])) {
                    echo '<li>Hello, ' . $_SESSION['firstname'] . '</li>';
                }
                echo '<li><a href="login.php?action=logout" type="button" class="btn btn-sm text-white btn-danger w-100 mt-4 text-decoration-none">Logout</button></a>';
            } else {
                echo '<a href="login.php" class="p-2 ms-3 me-2 d-flex align-items-center">';
                echo '<svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0z"/>
                <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708z"/>
                </svg><span class="ms-1 link-text fs-5 fw-light">LOGIN</span></a>';
            }
        }
        ?>
    </span>
</nav>