<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="./images/icon.jpg" type="image/x-icon" />
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/app.css" />
    <link rel="stylesheet" href="css/index.css" />
    <title>Home</title>
</head>

<body id="index" class="page-container d-flex flex-column">
    <?php require './api/initdata.php' ?>
    <?php include './app/views/header.php' ?>
    <section class="banner w-100">
        <div id="swiper" class="carousel slide carousel-fade swiper w-100 h-100" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item w-100 h-100 active" data-bs-interval="8000">
                    <span class="d-block w-100 h-100 img" style="background-image: url('./images/img1.jpg');"></span>
                </div>
                <div class="carousel-item w-100 h-100" data-bs-interval="8000">
                    <span class="d-block w-100 h-100 img" style="background-image: url('./images/img2.jpg');"></span>
                </div>
                <div class="carousel-item w-100 h-100" data-bs-interval="8000">
                    <span class="d-block w-100 h-100 img" style="background-image: url('./images/img3.jpg');"></span>
                </div>
                <div class="carousel-item w-100 h-100" data-bs-interval="8000">
                    <span class="d-block w-100 h-100 img" style="background-image: url('./images/img4.jpg');"></span>
                </div>
                <div class="carousel-item w-100 h-100" data-bs-interval="8000">
                    <span class="d-block w-100 h-100 img" style="background-image: url('./images/img5.jpg');"></span>
                </div>
                <div class="carousel-item w-100 h-100" data-bs-interval="8000">
                    <span class="d-block w-100 h-100 img" style="background-image: url('./images/img6.jpg');"></span>
                </div>
                <div class="carousel-item w-100 h-100" data-bs-interval="8000">
                    <span class="d-block w-100 h-100 img" style="background-image: url('./images/img7.jpg');"></span>
                </div>
                <div class="carousel-item w-100 h-100" data-bs-interval="8000">
                    <span class="d-block w-100 h-100 img" style="background-image: url('./images/img8.jpg');"></span>
                </div>
                <div class="carousel-item w-100 h-100" data-bs-interval="8000">
                    <span class="d-block w-100 h-100 img" style="background-image: url('./images/img9.jpg');"></span>
                </div>
                <div class="carousel-item w-100 h-100" data-bs-interval="8000">
                    <span class="d-block w-100 h-100 img" style="background-image: url('./images/img10.jpg');"></span>
                </div>
                <div class="carousel-item w-100 h-100" data-bs-interval="8000">
                    <span class="d-block w-100 h-100 img" style="background-image: url('./images/img11.jpg');"></span>
                </div>
            </div>
            <button style="z-index:10;" class="carousel-control-prev" type="button" data-bs-target="#swiper"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button style="z-index:10;" class="carousel-control-next" type="button" data-bs-target="#swiper"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>
    <section class="wrapper w-100">
        <section class="flow-container">
            <img src="./images/img1.jpg" class="d-block w-100 flow-img" alt="...">
            <img src="./images/img2.jpg" class="d-block w-100 flow-img" alt="...">
            <img src="./images/img3.jpg" class="d-block w-100 flow-img" alt="...">
            <img src="./images/img4.jpg" class="d-block w-100 flow-img" alt="...">
            <img src="./images/img5.jpg" class="d-block w-100 flow-img" alt="...">
            <img src="./images/img6.jpg" class="d-block w-100 flow-img" alt="...">
            <img src="./images/img7.jpg" class="d-block w-100 flow-img" alt="...">
            <img src="./images/img9.jpg" class="d-block w-100 flow-img" alt="...">
            <img src="./images/img10.jpg" class="d-block w-100 flow-img" alt="...">
            <img src="./images/img8.jpg" class="d-block w-100 flow-img" alt="...">
            <img src="./images/img11.jpg" class="d-block w-100 flow-img" alt="...">
        </section>
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
            <section class="row class-list">
                <section class="class-wrap col-6 col-sm-4 col-lg-4 col-xxl-3 mb-4">
                    <section class="class-item">
                        <section class="img overflow-hidden">
                            <span class="img-inner" style="background-image: url('./images/img10.jpg');"></span>
                        </section>
                        <section class="class-detail p-3 d-flex flex-column align-items-center justify-content-center">
                            <p class="class-name mb-0 mt-0 fs-5 text-white">Golf</p>
                            <span class="class-desc fs-6 overflow-hidden text-white">Under the guidance of
                                professional and
                                experienced
                                coaches, 3 times a week.</span>
                        </section>
                    </section>
                    <a href="register.php"
                        class="class-link bg-white text-decoration-none w-100 d-block text-center p-4 pt-2 pb-2 text-color-primary">VIEW
                        CLASS</a>
                </section>
                <section class="class-wrap col-6 col-sm-4 col-lg-4 col-xxl-3 mb-4">
                    <section class="class-item">
                        <section class="img overflow-hidden">
                            <span class="img-inner" style="background-image: url('./images/img3.jpg');"></span>
                        </section>
                        <section class="class-detail p-3 d-flex flex-column align-items-center justify-content-center">
                            <p class="class-name mb-0 mt-0 fs-5 text-white">Golf</p>
                            <span class="class-desc fs-6 overflow-hidden text-white">Under the guidance of
                                professional and
                                experienced
                                coaches, 3 times a week.</span>
                        </section>
                    </section>
                    <a href="register.php"
                        class="class-link bg-white text-decoration-none w-100 d-block text-center p-4 pt-2 pb-2 text-color-primary">VIEW
                        CLASS</a>
                </section>
                <section class="class-wrap col-6 col-sm-4 col-lg-4 col-xxl-3 mb-4">
                    <section class="class-item">
                        <section class="img overflow-hidden">
                            <span class="img-inner" style="background-image: url('./images/img8.jpg');"></span>
                        </section>
                        <section class="class-detail p-3 d-flex flex-column align-items-center justify-content-center">
                            <p class="class-name mb-0 mt-0 fs-5 text-white">Golf</p>
                            <span class="class-desc fs-6 overflow-hidden text-white">Under the guidance of
                                professional and
                                experienced
                                coaches, 3 times a week.</span>
                        </section>
                    </section>
                    <a href="register.php"
                        class="class-link bg-white text-decoration-none w-100 d-block text-center p-4 pt-2 pb-2 text-color-primary">VIEW
                        CLASS</a>
                </section>
                <section class="class-wrap col-6 col-sm-4 col-lg-4 col-xxl-3 mb-4">
                    <section class="class-item">
                        <section class="img overflow-hidden">
                            <span class="img-inner" style="background-image: url('./images/img4.jpg');"></span>
                        </section>
                        <section class="class-detail p-3 d-flex flex-column align-items-center justify-content-center">
                            <p class="class-name mb-0 mt-0 fs-5 text-white">Golf</p>
                            <span class="class-desc fs-6 overflow-hidden text-white">Under the guidance of
                                professional and
                                experienced
                                coaches, 3 times a week.</span>
                        </section>
                    </section>
                    <a href="register.php"
                        class="class-link bg-white text-decoration-none w-100 d-block text-center p-4 pt-2 pb-2 text-color-primary">VIEW
                        CLASS</a>
                </section>
            </section>
        </section>
        <section class="content-box special-offers p-4">
            <p class="special-offers-title text-color-primary fs-1 d-flex justify-content-between mb-3">
                SPECIAL OFFERS
            </p>
            <section class="special-list d-flex">
                <section class="special-item v-item d-flex flex-column overflow-hidden me-4">
                    <section class="d-block img" style="background-image: url('./images/img1.jpg');">
                        <section class="info p-3 d-flex align-items-center justify-content-center flex-column">
                            <p class="fs-4 mb-2">Camping</p>
                            <span class="desc fs-6 overflow-hidden">2 days and 1 night of wild camping, we provide tents
                                and other basic equipments.</span>
                        </section>
                    </section>
                    <a class="item-link d-flex p-4 align-items-center justify-content-center bg-color-primary" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                            class="bi bi-arrow-right-circle" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8m15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0M4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5z" />
                        </svg>
                    </a>
                </section>
                <section class="flex-1 d-flex flex-column">
                    <section class="flex-1 special-item d-flex overflow-hidden mb-4">
                        <section class="d-block img" style="background-image: url('./images/img9.jpg');">
                            <section class="info p-3 d-flex align-items-center justify-content-center flex-column">
                                <p class="fs-4 mb-1">Boating</p>
                                <span class="desc fs-6 overflow-hidden">2 days and 1 night of wild camping, we provide
                                    tents
                                    and other basic equipments.</span>
                            </section>
                        </section>
                        <a class="item-link d-flex p-4 align-items-center justify-content-center bg-color-primary"
                            href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                                class="bi bi-arrow-right-circle" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8m15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0M4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5z" />
                            </svg>
                        </a>
                    </section>
                    <section class="flex-1 special-item d-flex overflow-hidden">
                        <section class="d-block img" style="background-image: url('./images/img8.jpg');">
                            <section class="info p-3 d-flex align-items-center justify-content-center flex-column">
                                <p class="fs-4 mb-1">Biking</p>
                                <span class="desc fs-6 overflow-hidden">2 days and 1 night of wild camping, we provide
                                    tents
                                    and other basic equipments.</span>
                            </section>
                        </section>
                        <a class="item-link d-flex p-4 align-items-center justify-content-center bg-color-primary"
                            href="#">
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
        <section class="content-box membership p-4">
            <p class="text-center mb-4 fs-1 text-white">MEMBERSHIP</p>
            <div class="d-flex member-list justify-content-center">
                <section class="d-flex flex-1 flex-column me-4 mb-4 p-0 member-item text-center overflow-hidden">
                    <section class="flex-1 info-wrap">
                        <section class="member-detail bg-color-primary p-4">
                            <h4 class="mb-5 pb-3 member-name text-white">Public</h4>
                            <h1 class="mb-0 text-white">€ 0.00</h1>
                            <h5 class="mb-0 text-white">Per Month</h5>
                        </section>
                        <p class="member-desc mb-0 overflow-hidden p-4 pt-3 pb-3">No membership fee member, all classes
                            need
                            be
                            purchased at the original
                            price.
                        </p>
                    </section>
                    <section class="p-3">
                        <a href="register.php"
                            class="join-now text-decoration-none badge rounded-pill text-color-primary p-3 box-shadow-primary">JOIN
                            NOW</a>
                    </section>
                </section>
                <section class="d-flex flex-1 flex-column me-4 mb-4 p-0 member-item text-center overflow-hidden">
                    <section class="flex-1 info-wrap">
                        <section class="member-detail bg-color-primary p-4">
                            <h4 class="mb-5 pb-3 member-name text-white">Middle</h4>
                            <h1 class="mb-0 text-white">€ 299.99</h1>
                            <h5 class="mb-0 text-white">Per Month</h5>
                        </section>
                        <p class="member-desc mb-0 overflow-hidden p-4 pt-3 pb-3">Middle level member, you can
                            participate in
                            some
                            courses for free, and pay a 30% discount on other courses.
                        </p>
                    </section>
                    <section class="p-3">
                        <a href="register.php"
                            class="join-now text-decoration-none badge rounded-pill text-color-primary p-3 box-shadow-primary">JOIN
                            NOW</a>
                    </section>
                </section>

                <section class="d-flex flex-1 flex-column mb-4 p-0 member-item text-center overflow-hidden">
                    <section class="flex-1 info-wrap">
                        <section class="member-detail bg-color-primary p-4">
                            <h4 class="mb-5 pb-3 member-name text-white">Prime</h4>
                            <h1 class="mb-0 text-white">€ 999.99</h1>
                            <h5 class="mb-0 text-white">Per Month</h5>
                        </section>
                        <p class="member-desc mb-0 overflow-hidden p-4 pt-3 pb-3">Prime level member, You can
                            participate in
                            all
                            courses without paying additional course fees (excluding self-paid equipment, etc.).
                        </p>
                    </section>
                    <section class="p-3">
                        <a href="register.php"
                            class="join-now text-decoration-none badge rounded-pill text-color-primary p-3 box-shadow-primary">JOIN
                            NOW</a>
                    </section>
                </section>
            </div>
            <section class="flow-container">
                <img src="./images/img4.jpg" class="d-block w-100 flow-img" alt="...">
                <img src="./images/img1.jpg" class="d-block w-100 flow-img" alt="...">
                <img src="./images/img11.jpg" class="d-block w-100 flow-img" alt="...">
                <img src="./images/img3.jpg" class="d-block w-100 flow-img" alt="...">
                <img src="./images/img6.jpg" class="d-block w-100 flow-img" alt="...">
                <img src="./images/img10.jpg" class="d-block w-100 flow-img" alt="...">
                <img src="./images/img8.jpg" class="d-block w-100 flow-img" alt="...">
                <img src="./images/img5.jpg" class="d-block w-100 flow-img" alt="...">

                <img src="./images/img7.jpg" class="d-block w-100 flow-img" alt="...">
                <img src="./images/img2.jpg" class="d-block w-100 flow-img" alt="...">
                <img src="./images/img9.jpg" class="d-block w-100 flow-img" alt="...">
                <img src="./images/img1.jpg" class="d-block w-100 flow-img" alt="...">
                <img src="./images/img8.jpg" class="d-block w-100 flow-img" alt="...">
                <img src="./images/img6.jpg" class="d-block w-100 flow-img" alt="...">

                <img src="./images/img7.jpg" class="d-block w-100 flow-img" alt="...">
                <img src="./images/img2.jpg" class="d-block w-100 flow-img" alt="...">

                <img src="./images/img9.jpg" class="d-block w-100 flow-img" alt="...">
            </section>
        </section>
    </section>
    <?php include './app/views/footer.php' ?>
    <script src="js/bootstrap.bundle.min.js" ></script>
</body>

</html>