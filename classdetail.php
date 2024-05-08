<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="css/app.css" />
        <link rel="stylesheet" href="css/classdetail.css" />
        <title>Class Detail</title>
    </head>

    <body id="classdetail" class="page-container d-flex flex-column">
        <?php include './app/views/header.php' ?>
        <?php 
        include ("./api/classdetail.php");
        include ("./api/testimonial.php");
        ?>
        <?php
            $id=$_GET['id'];
            $row = $result->fetch(PDO::FETCH_ORI_NEXT);
            $image = $row['class_image'];
            $description = $row['description'];
            $pname = $row['page_name'];
            $classdetail = $row['class_detail'];

            $contentErr = "";
            $hasWrote = true;
            
            if(isset($_SESSION['class_id']) && isset($_SESSION['user_id'])){
                
                $userid = $_SESSION['user_id'];
            }
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                $content = $_POST['content'];
                
                if(empty($content)){
                    $hasWrote = false;
                    $contentErr = 'It can not be empty!';
                }

                if($hasWrote){
                    $test = addTestimonial($content, $id, 1);
                    header("Location: " . "classdetail.php?id=$id");
                    exit();
                }
            }
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
                        <p class="detail fs-5 mb-0 lh-1 fst-italic me-0 text-left p-1"><?php echo "$description";?></p>
                        <p class="fs-4 mb-0 text-color-primary p-1"><b>Course Introduction:</b></p>
                        <p class="fs-5 mb-0 lh-1 fst-italic me-0 text-left p-1">
                            <?php echo "$classdetail";?>
                        </p>
                        <a href=" " class="badge fw-medium rounded-pill bg-color-primary fs-5 mt-4 mb-3 p-4 text-decoration-none">Join Us</a>
                    </section>
                </section>
            </section>

            <section class="contentbody">
                <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]).'?id='.$id; ?>">
                    <label for="content" class="form-label">Please Write Testimonial About Us Class:</label>
                    <input type="text" id="content" name="content" class="form-control">
                    <span class="error text-danger"><?php echo $contentErr; ?></span>
                    <button type="submit" class="btn fw-medium rounded-pill bg-color-primary fs-5 mt-4 mb-3 p-4"> Send</button>
                </form>
            </section>

            <section class="testimonial align-items-center justify-content-left p-4 d-flex gap-4">
                <?php
                    while ($row = $testList->fetch(PDO::FETCH_ASSOC)) {
                        echo '<section class="testcontent col-12 col-sm-6 col-lg-3 col-xxl-3 mb-4 p-3">';
                        echo '<section class="test">';
                        echo '<p class="fs-5 mb-0 p-1">'. $row['firstname'] .' '. $row['surname'] . '</p>';
                        echo '<p class="fs-15 mb-0 p-1">'. $row['create_time'] .'</p>';
                        echo '<p class="fs-5 mb-0 p-1">'. $row['content'] .'</p>';
                        echo '</section></section>';
                    }
                ?>
            </section>
            
        </section>        

        <?php include './app/views/footer.php' ?>
        <script src="js/bootstrap.bundle.min.js" ></script>
    </body>
</html>