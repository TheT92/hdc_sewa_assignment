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
    <!-- index page css -->
    <link rel="stylesheet" href="css/index.css" />
    <!-- page title -->
    <title>Home</title>
</head>

<body id="index" class="page-container d-flex flex-column">
    <!-- init database and tables -->
    <?php require './api/initdata.php' ?>
    <!-- import header -->
    <?php include './app/views/header.php' ?>
    <!-- get member level list, show at the bottom of index page -->
    <?php include './api/getMemberLevels.php' ?>
    <!-- import php codes and functions for index page -->
    <?php
    include './api/index.php';
    // get new classes and special offers
    $newClasses = getNewClasses();
    $specialOffers = getSpecialOffers();
    ?>
    <section class="banner w-100">
        <!-- swiper, will hide in mobile mode -->
        <!-- store image path in php file, use iterator to render swiper -->
        <?php if (count($swiperImgs) > 0): ?>
            <section id="swiper" class="carousel slide carousel-fade swiper w-100 h-100" data-bs-ride="carousel">
                <section class="carousel-inner">
                    <?php
                    for ($i = 0; $i < count($swiperImgs); $i++) {
                        if ($i == 0) {
                            echo '<section class="carousel-item w-100 h-100 active" data-bs-interval="8000">';
                        } else {
                            echo '<section class="carousel-item w-100 h-100" data-bs-interval="8000">';
                        }
                        echo "<span class='d-block w-100 h-100 img' style='background-image:url(\"" . $swiperImgs[$i] . "\");'></span></section>";
                    }
                    ?>
                </section>
                <!-- prev button -->
                <button style="z-index:10;" class="carousel-control-prev" type="button" data-bs-target="#swiper"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <!-- next button -->
                <button style="z-index:10;" class="carousel-control-next" type="button" data-bs-target="#swiper"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </section>
        <?php endif ?>

    </section>
    <!-- content wrapper -->
    <section class="wrapper w-100">
        <!-- image flow, will show under mobile mode, as a background of introduction -->
        <section class="flow-container">
            <?php
            for ($i = 0; $i < count($flowImgs); $i++) {
                echo "<img src='" . $flowImgs[$i] . "' class='d-block w-100 flow-img'>";
            }
            ?>
        </section>
        <!-- project introduction -->
        <section class="content-box introduction slide-up d-flex align-items-center justify-content-center p-4">
            <p class="fs-1 mb-0 lh-1 fw-bold fst-italic me-5 text-center introduction-title"><span
                    class="text-color-primary">O</span>utdoor </br> Club
            </p>
            <section class="flex-1">
                <p class="fs-1 mb-3 text-color-primary"><b>Welcome to the Outdoor Club!</b></p>
                <p>We are a club focusing on outdoor sports/adventures. Our story started in April 2024. Tian Chen, Xin
                    Xie, and Yixin Luo are our three founders, they brought this wonderful idea and established this
                    club. Our activities including but are not limited to: mountaineering, camping, equestrian, golf,
                    skiing, outdoor adventure, diving, etc. All outdoor activities you have thought of and unexpected
                    can be found here.</p>
                <p>All our coaches and staff are certified and experienced. If you want to participate in certain
                    activities with certain risks, including but not limited to: diving, outdoor adventure, etc., we
                    will purchase additional accident insurance for you to ensure Your safety is guaranteed to the
                    greatest extent.</p>
                <p><b>You are always welcome to join our club!</b></p>
            </section>
        </section>
        <section class="content-box new-classes p-4">
            <!-- new classes -->
            <p class="new-class-title text-color-primary fs-1 d-flex align-items-center justify-content-between mb-3">
                NEW CLASSES
                <a href="class.php"
                    class="badge text-decoration-none border-color-primary rounded-pill p-2 ps-3 pe-3 fs-6 text-bg-info d-flex align-items-center justify-content-center text-bg-light text-color-primary fw-medium">
                    VIEW ALL
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                        class="bi bi-arrow-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8" />
                    </svg>
                </a>
            </p>
            <!-- get new classes list from database, render on page -->
            <section class="row class-list">
                <?php
                while ($row = $newClasses->fetch(PDO::FETCH_ASSOC)) {
                    echo '<section class="class-wrap col-6 col-sm-4 col-lg-4 col-xxl-3 mb-4">';
                    echo '<section class="class-item">';
                    echo '<section class="img overflow-hidden">';
                    echo "<span class='img-inner' style='background-image:url(\"" . $row['class_cover_img'] . "\");'></span>";
                    echo '</section>';
                    echo '<section class="class-detail p-3 d-flex flex-column align-items-center justify-content-center">';
                    echo '<p class="class-name mb-0 mt-0 fs-5 text-white">' . $row['class_name'] . '</p>';
                    echo '<span class="class-desc fs-6 overflow-hidden text-white">' . $row['class_intro'] . '</span>';
                    echo '</section></section>';
                    echo '<a href="classdetail.php?id=' . $row['id'] . '" class="class-link bg-white text-decoration-none w-100 d-block text-center p-4 pt-2 pb-2 text-color-primary">VIEW CLASS</a>';
                    echo '</section>';

                }
                ?>
            </section>
        </section>
        <!-- special offers -->
        <section class="content-box special-offers p-4">
            <p class="special-offers-title text-color-primary fs-1 d-flex justify-content-between mb-3">
                SPECIAL OFFERS
            </p>
            <!-- get new special offers from database, render on page -->
            <section class="special-list d-flex">
                <?php $special = $specialOffers->fetch(PDO::FETCH_ASSOC); ?>
                <!-- first special item -->
                <section class="special-item v-item d-flex flex-column overflow-hidden me-4">
                    <section class="d-block img"
                        style="background-image: url('<?php echo $special['class_cover_img'] ?>');">
                        <section class="info p-3 d-flex align-items-center justify-content-center flex-column">
                            <p class="fs-4 mb-2"><?php echo $special['class_name'] ?></p>
                            <span class="desc fs-6 overflow-hidden"><?php echo $special['class_intro'] ?></span>
                        </section>
                    </section>
                    <a class="item-link d-flex p-4 align-items-center justify-content-center bg-color-primary"
                        href="classdetail.php?id=<?php echo $special['id'] ?>">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                            class="bi bi-arrow-right-circle" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8m15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0M4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5z" />
                        </svg>
                    </a>
                </section>
                <section class="flex-1 d-flex flex-column">
                    <?php $special = $specialOffers->fetch(PDO::FETCH_ASSOC); ?>
                    <!-- sesond special item -->
                    <section class="flex-1 special-item d-flex overflow-hidden mb-4">
                        <section class="d-block img"
                            style="background-image: url('<?php echo $special['class_cover_img'] ?>');">
                            <section class="info p-3 d-flex align-items-center justify-content-center flex-column">
                                <p class="fs-4 mb-1"><?php echo $special['class_name'] ?></p>
                                <span class="desc fs-6 overflow-hidden"><?php echo $special['class_intro'] ?></span>
                            </section>
                        </section>
                        <a class="item-link d-flex p-4 align-items-center justify-content-center bg-color-primary"
                            href="classdetail.php?id=<?php echo $special['id'] ?>">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                                class="bi bi-arrow-right-circle" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8m15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0M4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5z" />
                            </svg>
                        </a>
                    </section>
                    <?php $special = $specialOffers->fetch(PDO::FETCH_ASSOC); ?>
                    <!-- third special item -->
                    <section class="flex-1 special-item d-flex overflow-hidden">
                        <section class="d-block img"
                            style="background-image: url('<?php echo $special['class_cover_img'] ?>');">
                            <section class="info p-3 d-flex align-items-center justify-content-center flex-column">
                                <p class="fs-4 mb-1"><?php echo $special['class_name'] ?></p>
                                <span class="desc fs-6 overflow-hidden"><?php echo $special['class_intro'] ?></span>
                            </section>
                        </section>
                        <a class="item-link d-flex p-4 align-items-center justify-content-center bg-color-primary"
                            href="classdetail.php?id=<?php echo $special['id'] ?>">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                                class="bi bi-arrow-right-circle" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8m15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0M4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5z" />
                            </svg>
                        </a>
                    </section>
                </section>
            </section>
        </section>
        <!-- membership area -->
        <section class="content-box membership p-4">
            <p class="text-center mb-4 fs-1 text-white">MEMBERSHIP</p>
            <!-- get membership list and render on page -->
            <section class="d-flex member-list justify-content-center">
                <?php
                while ($row = $memberLevelList->fetch(PDO::FETCH_ASSOC)) {
                    echo '<section class="d-flex flex-1 flex-column me-4 mb-4 p-0 member-item text-center overflow-hidden">';
                    echo '<section class="flex-1 info-wrap">';
                    echo '<section class="member-detail bg-color-primary p-4">';
                    echo '<h4 class="mb-5 pb-3 member-name text-white">' . $row["name"] . '</h4>';
                    echo '<h1 class="mb-0 text-white">€ ' . number_format($row["fee"], 2) . '</h1>';
                    echo '<h5 class="mb-0 text-white">Per Month</h5>';
                    echo '</section>';
                    echo '<p class="member-desc mb-0 overflow-hidden p-4 pt-3 pb-3">' . $row["desc"] . '</p>';
                    echo '</section>';
                    if (!isset($_SESSION["email"])) {
                        echo '<section class="p-3">';
                        echo '<a href="register.php" class="join-now text-decoration-none badge rounded-pill text-color-primary p-3 box-shadow-primary">JOIN NOW</a>';
                        echo '</section>';
                    }
                    echo '</section>';

                }
                ?>
            </section>
            <!-- use a image flow as background of membership area -->
            <section class="flow-container">
                <?php
                for ($i = 0; $i < count($flowImgsBottom); $i++) {
                    echo "<img src='" . $flowImgsBottom[$i] . "' class='d-block w-100 flow-img'>";
                }
                ?>
            </section>
        </section>
    </section>
    <!-- import footer -->
    <?php include './app/views/footer.php' ?>
    <!-- import bootstrap js -->
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>