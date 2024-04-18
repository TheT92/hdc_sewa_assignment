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
    <?php include './api/initdata.php' ?>
    <?php include './app/views/header.php' ?>
    <section class="pc-bg bg-color-primary w-100 justify-content-end position-absolute">
        <div class="carousel slide carousel-fade swiper" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item w-100 h-100 active" data-bs-interval="8000">
                    <span class="d-block w-100 h-100 img" style="background-image: url('./images/img10.jpg');"></span>
                </div>
                <div class="carousel-item w-100 h-100" data-bs-interval="8000">
                    <span class="d-block w-100 h-100 img" style="background-image: url('./images/img3.jpg');"></span>
                </div>
                <div class="carousel-item w-100 h-100" data-bs-interval="8000">
                    <span class="d-block w-100 h-100 img" style="background-image: url('./images/img6.jpg');"></span>
                </div>
                <div class="carousel-item w-100 h-100" data-bs-interval="8000">
                    <span class="d-block w-100 h-100 img" style="background-image: url('./images/img5.jpg');"></span>
                </div>
                <div class="carousel-item w-100 h-100" data-bs-interval="8000">
                    <span class="d-block w-100 h-100 img" style="background-image: url('./images/img8.jpg');"></span>
                </div>
            </div>
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
        <ul class="title p-4 mb-0 d-inline-flex flex-column justify-content-between">
            <li class="mb-2">
                <h3>&mdash; Biking</h3>
            </li>
            <li class="mb-2">
                <h3>&mdash; Horsing</h3>
            </li>
            <li class="mb-2">
                <h3>&mdash; Camping</h3>
            </li>
            <li class="mb-2">
                <h3>&mdash; Climbing</h3>
            </li>
            <li class="mb-2">
                <h3>&mdash; And ...?</h3>
            </li>
            <li class="mb-2">
                <h3>Try what you never tried.</h3>
            </li>
        </ul>
        <section class="new-classes p-4 pb-2">
            <h3 class="new-clas-title d-flex align-items-center justify-content-between mb-3 fw-bold">
                NEW CLASSES
                <span
                    class="badge rounded-pill text-bg-info d-flex justify-content-center text-bg-light text-color-primary fw-medium">
                    VIEW ALL
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-arrow-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8" />
                    </svg>
                </span>
            </h3>
            <section class="class-list">
                <section class="class-item overflow-hidden mb-3">
                    <img class="img" src="./images/img10.jpg" />
                    <section class="class-info p-2">
                        <h5 class="mb-1 text-color-primary fw-bold">Golf</h5>
                        <span class="class-desc overflow-hidden lh-sm">Under the guidance of professional and
                            experienced
                            coaches, 3 times a week</span>
                    </section>
                </section>
                <section class="class-item overflow-hidden mb-3">
                    <img class="img" src="./images/img3.jpg" />
                    <section class="class-info p-2">
                        <h5 class="mb-1 text-color-primary fw-bold">Climbing</h5>
                        <span class="class-desc overflow-hidden lh-sm">Under the guidance of professional and
                            experienced
                            coaches, 3 times a week</span>
                    </section>
                </section>
                <section class="class-item overflow-hidden mb-3">
                    <img class="img" src="./images/img8.jpg" />
                    <section class="class-info p-2">
                        <h5 class="mb-1 text-color-primary fw-bold">Biking</h5>
                        <span class="class-desc overflow-hidden lh-sm">Under the guidance of professional and
                            experienced
                            coaches, 3 times a week</span>
                    </section>
                </section>
                <section class="class-item overflow-hidden mb-3">
                    <img class="img" src="./images/img4.jpg" />
                    <section class="class-info p-2">
                        <h5 class="mb-1 text-color-primary fw-bold">Camping</h5>
                        <span class="class-desc overflow-hidden lh-sm">Under the guidance of professional and
                            experienced
                            coaches, 3 times a week</span>
                    </section>
                </section>
            </section>
        </section>
        <section class="special-offers p-4">
            <h3 class="special-offers-title d-flex justify-content-between mb-3 fw-bold">
                SPECIAL OFFERS
            </h3>
            <section class="row gx-3 gy-3">
                <section class="col-12 col-sm-12 col-md-3">
                    <section class="special-item bg-color-primary">
                        <span class="d-block img" style="background-image: url('./images/img1.jpg');"></span>
                        <section class="p-2">
                            <h5 class="mb-1 fw-bold">Camping</h5>
                            <span class="desc lh-sm overflow-hidden">2 days and 1 night of wild camping, we provide
                                tents and
                                other basic equipments.</span>
                        </section>
                    </section>
                </section>
                <section class="col-12 col-sm-12 col-md-3">
                    <section class="special-item bg-color-primary">
                        <span class="d-block img" style="background-image: url('./images/img9.jpg');"></span>
                        <section class="p-2">
                            <h5 class="mb-1 fw-bold">Boating</h5>
                            <span class="desc lh-sm overflow-hidden">2 days and 1 night of wild camping, we provide
                                tents and
                                other basic equipments.</span>
                        </section>
                    </section>
                </section>
                <section class="col-12 col-sm-12 col-md-3">
                    <section class="special-item bg-color-primary">
                        <span class="d-block img" style="background-image: url('./images/img8.jpg');"></span>
                        <section class="p-2">
                            <h5 class="mb-1 fw-bold">Camping</h5>
                            <span class="desc lh-sm overflow-hidden">2 days and 1 night of wild camping, we provide
                                tents and
                                other basic equipments.</span>
                        </section>
                    </section>
                </section>
            </section>
        </section>
    </section>
    <?php include './app/views/footer.php' ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>