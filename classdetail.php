<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="css/app.css" />
        <link rel="stylesheet" href="css/index.css" />
        <link rel="stylesheet" href="css/classdetail.css" />
        <title>Biking</title>
    </head>

    <body id="index" class="page-container d-flex flex-column">
        <?php include './app/views/header.php' ?>
        <?php 
        include ("./api/classdetail.php");
        ?>
        <?php
            $id=$_GET['id'];
            $row = $result->fetch(PDO::FETCH_ORI_NEXT);
            $image = $row['class_image'];
            echo "<img src = '$image' alt=''>";
        ?>
        

        <?php include './app/views/footer.php' ?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

    </body>
</html>