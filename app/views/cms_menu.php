<?php
// get current url
$current_path = $_SERVER['REQUEST_URI'];
$route = parse_url($current_path, PHP_URL_PATH);
$urls = array("index_edit.php", "registration_edit.php", "class_detail_edit.php", "testimonial_edit.php", "contact_us_edit.php");
$pages = array("Index Edit", "Registration Edit", "Class Edit", "Testimonial Edit", "contact Us Edit");
?>

<section class="cms-menu fixed-top">
    <nav class="nav nav-pills nav-fill flex-column">
        <?php for ($i = 0; $i < count($urls); $i++): ?>
            <a class="nav-link text-white <?php echo str_ends_with($route, $urls[$i]) ? 'active' : '' ?>" href="<?php echo $urls[$i]; ?>">
                <?php echo $pages[$i]; ?>
            </a>
        <?php endfor ?>
    </nav>
</section>