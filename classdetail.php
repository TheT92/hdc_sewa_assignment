<!DOCTYPE html>
<html>

<head>
    <!-- set charset -->
    <meta charset="UTF-8" />
    <!-- set default scale -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- website icon -->
    <link rel="icon" href="./images/icon.jpg" type="image/x-icon" />
    <!-- bootstrap css -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- common app.css -->
    <link rel="stylesheet" href="css/app.css" />
    <!-- class detail page css -->
    <link rel="stylesheet" href="css/classdetail.css" />
    <!-- page title -->
    <title>Class Detail</title>
</head>

<body id="classdetail" class="page-container d-flex flex-column">
    <?php
    // import header
    include './app/views/header.php';
    // codes and methods about class detail 
    include ("./api/classdetail.php");
    // codes and methods about testimonial
    include ("./api/testimonial.php");
    ?>

    <section class="classdetail-wrapper w-100">
        <section class="introduction content-box p-4 mb-3">
            <!-- class name -->
            <p class="fs-1 lh-1 mb-5 text-center text-color-primary"><?php echo "$pname"; ?></p>
            <section class="content clearfix mb-5">
                <!-- class intro, image and detail -->
                <?php echo "<img src='$image' class='picture d-block float-end ms-4 mb-4' alt='...'>"; ?>
                <p class="fs-4 mb-2 text-color-primary">The Purpose Of The Course:</p>
                <p class="detail fs-5 mb-5"><?php echo "$description"; ?></p>
                <p class="fs-4 mb-2 text-color-primary">Course Introduction:</p>
                <p class="fs-5 mb-0"><?php echo "$classdetail"; ?></p>
            </section>

            <!-- if user hasn't booked class -->
            <?php if ($bookingState <= 0): ?>
                <!-- show join class button if user has authority -->
                <?php if ($myPriority >= $classPriority): ?>
                    <a href="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) . '?action=book&id=' . $classId; ?>"
                        class="join-btn heart-beat d-flex flex-column justify-content-center fw-medium text-center bg-color-primary text-white fs-5 text-decoration-none">JOIN<br />
                        CLASS</a>
                <?php else: ?>
                    <!-- otherwise tell user they can not book this class -->
                    <span
                        class="join-btn disabled mb-3 d-flex flex-column justify-content-center fw-medium text-center bg-secondary text-white fs-5">JOIN<br />
                        CLASS</span>
                    <p class="alert alert-warning alert-dismissible fade show mb-0" role="alert">
                        Sorry, your membership level does not support joining this class.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </p>
                <?php endif; ?>
            <?php else: ?>
                <!-- show alert if user has already booked this class -->
                <p class="alert alert-success alert-dismissible fade show mb-0" role="alert">
                    You have already booked this class.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </p>
            <?php endif; ?>
            <?php if (!empty($bookingError)): ?>
                <!-- show error message if exists -->
                <p class="error text-danger text-center mb-0"><?php echo $bookingError; ?></p>
            <?php endif; ?>
        </section>
        <!-- add testimonial area -->
        <section class="add-comment content-box p-4">
            <p class="fs-2 lh-1 mb-3 text-color-primary">Testimonials</p>
            <?php if ($bookingState > 0): ?>
                <!-- only users who have booked this class can leave testimonial -->
                <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) . '?id=' . $classId; ?>">
                    <section class="adding-area d-flex align-items-start">
                        <section class="flex-1 w-100">
                            <textarea id="content" name="content" class="form-control"
                                placeholder="Your opinion is important to us." required></textarea>
                            <span class="error text-danger"><?php echo $contentErr; ?></span>
                        </section>

                        <button type="submit"
                            class="fw-medium border-0 bg-color-primary text-white ms-2 fs-5 p-2 ps-5 pe-5">
                            Send</button>
                    </section>
                </form>
            <?php endif; ?>
        </section>
        <!-- comment list -->
        <section class="comment-list content-box p-4">
            <!-- use iterator to render comment list -->
            <?php
            while ($row = $commentList->fetch(PDO::FETCH_ASSOC)) {
                echo '<section class="comment-item d-flex pb-2 mb-4 border-bottom">';
                echo '<span class="user-img d-flex align-items-center justify-content-center me-4 fs-4 text-white" style="background-color:' . randomColor() . '">' . $row['firstname'][0] . '</span>';
                echo '<section class="flex-1 overflow-hidden">';
                echo '<p class="fs-5 text-color-primary mb-0">' . $row['firstname'] . ' ' . $row['surname'][0] . '****</p>';
                echo '<p class="fs-6 mb-2 text-secondary">' . $row['create_time'] . '</p>';
                echo '<p class="fs-5 mb-0">' . $row['content'] . '</p>';
                echo '</section></section>';
            }
            ?>
            <!-- if there is no comment about this class, show a tips -->
            <?php if ($commentList->rowCount() <= 0): ?>
                <section class="d-flex flex-column align-items-center justify-content-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" fill="#ccc" class="bi bi-chat-left"
                        viewBox="0 0 16 16">
                        <path
                            d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z" />
                    </svg>
                    <span class="text-secondary mt-2">No comments yet.</span>
                </section>
            <?php endif ?>
        </section>
    </section>
    <!-- import footer -->
    <?php include './app/views/footer.php' ?>
    <!-- bootstrap js -->
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>