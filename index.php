<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/app.css" />
    <link rel="stylesheet" href="css/index.css" />
    <title>title</title>
</head>

<body id="index">
    <!-- <h1>
        <?php
        echo "Hello World!";
        ?>
    </h1> -->
    <div class="flow-container">
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
    </div>
    <div class="wrapper w-100">
        <ul class="title p-4">
            <li class="mb-4"><h1>&mdash; Biking</h1></li>
            <li class="mb-4"><h1>&mdash; Horsing</h1></li>
            <li class="mb-4"><h1>&mdash; Camping</h1></li>
            <li class="mb-4"><h1>&mdash; Climbing</h1></li>
            <li class="mb-4"><h1>&mdash; And ...?</h1></li>
            <li class="mb-4"><h1>Try what you never tried.</h1></li>
        </ul>
    </div>

    <nav class="navbar fixed-bottom bg-body-tertiary">
        <div class="container text-center">
            <div class="row w-100">
                <div class="col">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-list" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5" />
                    </svg><br />
                    <span>HOME</span>
                </div>
                <div class="col">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-clipboard-pulse" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M10 1.5a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5zm-5 0A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5v1A1.5 1.5 0 0 1 9.5 4h-3A1.5 1.5 0 0 1 5 2.5zm-2 0h1v1H3a1 1 0 0 0-1 1V14a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V3.5a1 1 0 0 0-1-1h-1v-1h1a2 2 0 0 1 2 2V14a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V3.5a2 2 0 0 1 2-2m6.979 3.856a.5.5 0 0 0-.968.04L7.92 10.49l-.94-3.135a.5.5 0 0 0-.895-.133L4.232 10H3.5a.5.5 0 0 0 0 1h1a.5.5 0 0 0 .416-.223l1.41-2.115 1.195 3.982a.5.5 0 0 0 .968-.04L9.58 7.51l.94 3.135A.5.5 0 0 0 11 11h1.5a.5.5 0 0 0 0-1h-1.128z" />
                    </svg><br />
                    <span>CLASSES</span>
                </div>
                <!-- <div class="col">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-chat-left-dots" viewBox="0 0 16 16">
                        <path
                            d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z" />
                        <path
                            d="M5 6a1 1 0 1 1-2 0 1 1 0 0 1 2 0m4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0m4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0" />
                    </svg><br />
                    <span>CONTACT US</span>
                </div> -->
                <div class="col">
                    <a href="login.php">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-box-arrow-in-up" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M3.5 10a.5.5 0 0 1-.5-.5v-8a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 .5.5v8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 0 0 1h1A1.5 1.5 0 0 0 14 9.5v-8A1.5 1.5 0 0 0 12.5 0h-9A1.5 1.5 0 0 0 2 1.5v8A1.5 1.5 0 0 0 3.5 11h1a.5.5 0 0 0 0-1z" />
                            <path fill-rule="evenodd"
                                d="M7.646 4.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V14.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708z" />
                        </svg><br />
                        <span>LOGIN</span>
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>