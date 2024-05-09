<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="./images/icon.jpg" type="image/x-icon" />
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="css/app.css" />
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
        <script src="js/bootstrap.bundle.min.js" ></script>

    </body>
</html>