<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="./images/icon.jpg" type="image/x-icon" />
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/app.css" />
    <link rel="stylesheet" href="css/class.css" />
    <title>Classes</title>
</head>

<body id="class" class="page-container">
    <!-- import header -->
    <?php include './app/views/header.php' ?>
    <!-- this php is for getting data from database -->
    <?php include "./api/class.php" ?>
    <!-- banner with background image -->
    <section class="banner"></section>
    <h1 class="new-class-title p-4 pb-0 fw-bold mb-0">CLASSES</h1>
    <!-- class list -->
    <section class="content-box p-4">
        <section class="row class-list">
            <!-- get data from database then use iterator to render them on page -->
            <?php
            while ($row = $classList->fetch(PDO::FETCH_ASSOC)) {
                echo '<section class="class-item d-flex col-12 col-sm-6 col-lg-6 col-xxl-4 mb-4">';
                echo '<section class="img overflow-hidden">';
                echo "<span class='img-inner' style='background-image:url(\"" . $row['class_cover_img'] . "\");'></span></section>";
                echo '<section class="class-detail border-color-primary bg-white flex-1 p-3 d-flex flex-column">';
                echo '<section class="flex-1 d-flex flex-column mb-2"><h5 class="class-name fs-5 text-color-primary">' . $row['class_name'] . '</h5>';
                echo '<span class="class-desc fs-6 overflow-hidden">' . $row['class_intro'];
                echo '</span></section><a href="classdetail.php?id=' . $row['id'] . '" class="class-link bg-white text-decoration-none w-100 d-block text-center p-2 text-color-primary">VIEW CLASS</a></section></section>';
            }

            ?>
        </section>
    </section>
    <!-- import footer -->
    <?php include './app/views/footer.php' ?>
    <!-- bootstrap framework js -->
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>