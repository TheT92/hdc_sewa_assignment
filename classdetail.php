<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="css/app.css" />
        <link rel="stylesheet" href="css/classdetail.css" />
        <title>Biking</title>
    </head>

    <body id="classdetail" class="page-container d-flex flex-column">
        <?php include './app/views/header.php' ?>
        <?php 
        include ("./api/classdetail.php");
        ?>
        <?php
            $id=$_GET['id'];
            $row = $result->fetch(PDO::FETCH_ORI_NEXT);
            $image = $row['class_image'];
            $description = $row['description'];
            $pname = $row['page_name'];
            $classdetail = $row['class_detail'];
        ?>

        <section class="classdetail-wrapper w-100">
            <section class="introduction align-items-center justify-content-left p-4">
                <p class="fs-1 mb-0 lh-1 fw-bold fst-italic me-5 text-center">
                    <span class="text-color-primary"><?php echo "$pname";?></span>
                </p>

                <section class="content d-flex align-items-center justify-content-left mt-4">
                    <?php echo "<img src='$image' class='picture d-block w-60 flow-img' alt='...'>";?>
                    <section class="p-4">
                        <p class="fs-4 mb-0 text-color-primary p-1"><b>The Purpose Of The Course:</b></p>
                        <p class="fs-5 mb-0 lh-1 fst-italic me-0 text-left p-1">
                            <?php echo "$description";?>
                        </p>
                        <p class="fs-4 mb-0 text-color-primary p-1"><b>Course Introduction:</b></p>
                        <p class="fs-5 mb-0 lh-1 fst-italic me-0 text-left p-1">
                            <?php echo "$classdetail";?>
                        </p>
                    </section>
                </section>
            </section>


        </section>        

        <?php include './app/views/footer.php' ?>
        <script src="js/bootstrap.bundle.min.js" ></script>

    </body>
</html>