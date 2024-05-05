<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/app.css" />
    <link rel="stylesheet" href="css/class.css" />
    <title>Classes</title>
</head>

<body id="class" class="page-container">
    <?php include './app/views/header.php' ?>
    <?php include "./api/class.php" ?>
    <section class="banner"></section>
    <section class="new-classes p-4 pb-2">
        <h3 class="new-clas-title d-flex align-items-center justify-content-between mb-3 fw-bold text-color-primary">
            CLASSES
        </h3>
        <section class="row class-list">
            <?php
            while ($row = $classList->fetch(PDO::FETCH_ASSOC)) {
                echo '<section class="class-wrap col-12 col-sm-6 col-lg-3 col-xxl-3 mb-4">';
                echo '<section class="class-item">';
                echo '<a class="text-decoration-none" href=#>';
                echo '<section class="img overflow-hidden">';
                echo "<span class='img-inner' style='background-image:url(\"images/img10.jpg\");'></span></section>";
                echo '<section class="class-detail p-3 d-flex flex-column align-items-center">';
                echo '<h5 class="class-name mb-3 mt-0 fs-5 text-white text-center">' . $row['class_name'] . '</h5>';
                echo '<span class="class-desc fs-6 overflow-hidden text-white text-center">' . $row['class_intro'];
                echo '<span></section></a></section></section>';
            }

            ?>

        </section>
    </section>
    <?php include './app/views/footer.php' ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>