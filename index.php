<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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
            <img src="./images/img8.jpg" class="d-block w-100 flow-img" alt="...">
            <img src="./images/img7.jpg" class="d-block w-100 flow-img" alt="...">
            <img src="./images/img9.jpg" class="d-block w-100 flow-img" alt="...">
            <img src="./images/img10.jpg" class="d-block w-100 flow-img" alt="...">
            <img src="./images/img11.jpg" class="d-block w-100 flow-img" alt="...">
            <img src="./images/img1.jpg" class="d-block w-100 flow-img" alt="...">
            <img src="./images/img2.jpg" class="d-block w-100 flow-img" alt="...">
            <img src="./images/img3.jpg" class="d-block w-100 flow-img" alt="...">
            <img src="./images/img4.jpg" class="d-block w-100 flow-img" alt="...">
            <img src="./images/img5.jpg" class="d-block w-100 flow-img" alt="...">
            <img src="./images/img6.jpg" class="d-block w-100 flow-img" alt="...">
            <img src="./images/img8.jpg" class="d-block w-100 flow-img" alt="...">
        </section>
        <section class="introduction slide-up d-flex align-items-center justify-content-center p-4">
            <p class="fs-1 mb-0 lh-1 fw-bold fst-italic me-5 text-center"><span
                    class="text-color-primary">O</span>utdoor </br> Club
            </p>
            <section class="flex-1">
                <p class="fs-1 mb-3 text-color-primary"><b>Welcome to the Outdoor Club!</b></p>
                <p>We are a club focusing on outdoor sports/adventures. Our story started in April 2024. Tian Chen, Xin
                    Xie, and YiXin Luo are our three founders, they brought this wonderful idea and established this
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
        <section class="new-classes p-4">
            <p class="new-class-title fs-1 d-flex align-items-center justify-content-between mb-3">
                NEW CLASSES
                <span
                    class="badge border-color-primary rounded-pill p-2 ps-3 pe-3 fs-6 text-bg-info d-flex align-items-center justify-content-center text-bg-light text-color-primary fw-medium">
                    VIEW ALL
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                        class="bi bi-arrow-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8" />
                    </svg>
                </span>
            </p>
            <section class="class-card-list">
                <section class="class-item align-items-center d-flex w-100 overflow-hidden mb-4">
                    <span class="d-block img" style="background-image: url('./images/img10.jpg');"></span>
                    <section class="flex-1 ps-4 pe-4">
                        <p class="class-name mb-1 fs-2 text-color-primary">Golf</p>
                        <span class="class-desc fs-5 overflow-hidden">Under the guidance of professional and
                            experienced
                            coaches, 3 times a week.</span>
                        <a href="register.php"><button type="button"
                                class="btn btn-sm btn-primary mb-2 bg-color-primary">VIEW CLASS</button></a>
                    </section>
                </section>
                <section class="class-item align-items-center reverse d-flex w-100 overflow-hidden mb-4">
                    <span class="d-block img" style="background-image: url('./images/img3.jpg');"></span>
                    <section class="flex-1 ps-4 pe-4">
                        <p class="class-name mb-1 fs-2 text-color-primary">Climbing</p>
                        <span class="class-desc fs-5 overflow-hidden">Under the guidance of professional and
                            experienced
                            coaches, 3 times a week.</span>
                        <a href="register.php"><button type="button"
                                class="btn btn-sm btn-primary mb-2 bg-color-primary">VIEW CLASS</button></a>
                    </section>
                </section>
                <section class="class-item align-items-center d-flex w-100 overflow-hidden mb-4">
                    <span class="d-block img" style="background-image: url('./images/img8.jpg');"></span>
                    <section class="flex-1 ps-4 pe-4">
                        <p class="class-name mb-1 fs-2 text-color-primary">Biking</p>
                        <span class="class-desc fs-5 overflow-hidden">Under the guidance of professional and
                            experienced
                            coaches, 3 times a week.</span>
                        <a href="register.php"><button type="button"
                                class="btn btn-sm btn-primary mb-2 bg-color-primary">VIEW CLASS</button></a>
                    </section>
                </section>
                <section class="class-item align-items-center reverse d-flex w-100 overflow-hidden mb-4">
                    <span class="d-block img" style="background-image: url('./images/img4.jpg');"></span>
                    <section class="flex-1 ps-4 pe-4">
                        <p class="class-name mb-1 fs-2 text-color-primary">Camping</p>
                        <span class="class-desc fs-5 overflow-hidden">Under the guidance of professional and
                            experienced
                            coaches, 3 times a week.</span>
                        <a href="register.php"><button type="button"
                                class="btn btn-sm btn-primary mb-2 bg-color-primary">VIEW CLASS</button></a>
                    </section>
                </section>
            </section>
        </section>
        <section class="special-offers p-4">
            <p class="special-offers-title fs-1 d-flex justify-content-between mb-3">
                SPECIAL OFFERS
            </p>
            <section class="special-list d-flex">
                <section class="special-item v-item d-flex flex-column overflow-hidden me-2">
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
                    <section class="flex-1 special-item d-flex overflow-hidden mb-2">
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
        <section class="membership p-4 bg-color-primary">
            <h3 class="text-center mb-4">MEMBERSHIP</h3>
            <div class="row">
                <div class="col-12 col-sm-12 col-md-4 mb-4">
                    <section class="member-item text-center overflow-hidden">
                        <section class="member-detail bg-color-primary p-4">
                            <h3 class="mb-5 pb-3 member-name text-white">Public</h3>
                            <h1 class="mb-0 text-white">€ 0.00</h1>
                            <h5 class="mb-4 text-white">Per Month</h5>
                        </section>
                        <section class="p-4">
                            <p class="member-desc mb-4 overflow-hidden">No membership fee member, all classes need be
                                purchased at the original
                                price.
                            </p>
                            <a href="#"
                                class="join-now badge rounded-pill text-color-primary p-3 box-shadow-primary">JOIN
                                NOW</a>
                        </section>
                    </section>
                </div>
                <div class="col-12 col-sm-12 col-md-4 mb-4">
                    <section class="member-item text-center overflow-hidden">
                        <section class="member-detail bg-color-primary p-4">
                            <h3 class="mb-5 pb-3 member-name text-white">Middle</h3>
                            <h1 class="mb-0 text-white">€ 299.99</h1>
                            <h5 class="mb-4 text-white">Per Month</h5>
                        </section>
                        <section class="p-4">
                            <p class="member-desc mb-4 overflow-hidden">Middle level member, you can participate in some
                                courses for free, and pay a 30% discount on other courses.
                            </p>
                            <a href="#"
                                class="join-now badge rounded-pill text-color-primary p-3 box-shadow-primary">JOIN
                                NOW</a>
                        </section>
                    </section>
                </div>
                <div class="col-12 col-sm-12 col-md-4 mb-4">
                    <section class="member-item text-center overflow-hidden">
                        <section class="member-detail bg-color-primary p-4">
                            <h3 class="mb-5 pb-3 member-name text-white">Prime</h3>
                            <h1 class="mb-0 text-white">€ 999.99</h1>
                            <h5 class="mb-4 text-white">Per Month</h5>
                        </section>
                        <section class="p-4">
                            <p class="member-desc mb-4 overflow-hidden">Prime level member, You can participate in all
                                courses without paying additional course fees (excluding self-paid equipment, etc.).
                            </p>
                            <a href="#"
                                class="join-now badge rounded-pill text-color-primary p-3 box-shadow-primary">JOIN
                                NOW</a>
                        </section>
                    </section>
                </div>
            </div>
        </section>
    </section>
    <?php include './app/views/footer.php' ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>