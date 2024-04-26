<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="css/app.css" />
        <link rel="stylesheet" href="css/classes.css" />
        <title>Classes</title>
    </head>

    <body id="classes" class="page-container">
        <?php session_start(); ?>
        <?php include './api/initdata.php' ?>
        <nav class="navbar fixed-top bg-body-tertiary ps-4 pe-2">
            <p class="fs-4 mb-0 lh-1 fw-bold fst-italic logo"><span class="text-color-primary">O</span>utdoor </br> Club</p>
            <span>
                <a class="p-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor"
                        class="bi bi-clipboard-pulse" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M10 1.5a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5zm-5 0A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5v1A1.5 1.5 0 0 1 9.5 4h-3A1.5 1.5 0 0 1 5 2.5zm-2 0h1v1H3a1 1 0 0 0-1 1V14a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V3.5a1 1 0 0 0-1-1h-1v-1h1a2 2 0 0 1 2 2V14a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V3.5a2 2 0 0 1 2-2m6.979 3.856a.5.5 0 0 0-.968.04L7.92 10.49l-.94-3.135a.5.5 0 0 0-.895-.133L4.232 10H3.5a.5.5 0 0 0 0 1h1a.5.5 0 0 0 .416-.223l1.41-2.115 1.195 3.982a.5.5 0 0 0 .968-.04L9.58 7.51l.94 3.135A.5.5 0 0 0 11 11h1.5a.5.5 0 0 0 0-1h-1.128z" />
                    </svg>
                </a>
                <a href="login.php" class="p-2 ms-3 me-2">
                    <?php
                    if (isset($_SESSION["email"])) {
                        echo '<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
                    </svg>';
                    } else {
                        echo '<svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0z"/>
                        <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708z"/>
                    </svg>';
                    }
                    ?>

                </a>
            </span>
        </nav>
        
        <section class="wrapper w-100">
            <section class="new-classes p-4 pb-2">
                <h3 class="new-clas-title d-flex align-items-center justify-content-between mb-3 fw-bold">
                    CLASSES
                </h3>
                <section class="class-list">
                    <section class="class-item overflow-hidden mb-3">
                        <a href="login.php">
                            <img class="img" src="./images/img12.jpg" width="28" />
                            <section class="class-info p-2">
                                <h5 class="mb-1 text-color-primary fw-bold">Golf For Ladies</h5>
                                <span class="class-desc overflow-hidden lh-sm">
                                Getting into golf via a Women’s Get Into Golf (GIG) program has been a positive way for thousands of women to learn the sport in a supported environment.
                                Supported learning, skill development, and social interaction.    
                                Check with local golf clubs hosting Get Into Golf programs in 2024.
                                On-course guidance alongside continual range training for ongoing assessment and development.
                                Players play individually to build skills and find their playing style.</span>
                            </section>
                        </a>
                    </section>
                    <section class="class-item overflow-hidden mb-3">
                        <a href="login.php">
                            <img class="img" src="./images/img13.jpeg" />
                            <section class="class-info p-2">
                                <h5 class="mb-1 text-color-primary fw-bold">Teen Golf Course</h5>
                                <span class="class-desc overflow-hidden lh-sm">
                                    If you’re between the ages of 7 - 13, then junior golf classes and camps are perfect for you.
                                    These programs are usually aimed at children who are at the beginning of their golf journey.
                                    The Outdoor Golf offers weekly classes for young golfers and runs various camps throughout the year.
                                    These activities include a mixture of team-based games and individual tuition to help develop golf skills.
                                </span>
                            </section>
                        </a>
                    </section>
                    <section class="class-item overflow-hidden mb-3">
                        <a href="login.php">
                            <img class="img" src="./images/img13.jpg" />
                            <section class="class-info p-2">
                                <h5 class="mb-1 text-color-primary fw-bold">Challenge Walk</h5>
                                <span class="class-desc overflow-hidden lh-sm">
                                This year will mark the 20th anniversary of the event and it will no doubt be an historic occasion.
                                The Challenge walk will be held on Saturday June 29th.
                                This year, in addition to the self-navigated, we are offering the option of a shorter route as part of a guided group.
                                Participants will receive a certificate, gift and a hot meal afterwards.
                                Full Walk Challenge: 31 km 1700 m ascent (self-navigated)
                                Shorter Walk Challenge: 18 km 1200 m ascent (guided)
                                </span>
                            </section>
                        </a>
                    </section>
                    <section class="class-item overflow-hidden mb-3">
                        <a href="login.php">
                            <img class="img" src="./images/img10.jpg" />
                            <section class="class-info p-2">
                                <h5 class="mb-1 text-color-primary fw-bold">Boating</h5>
                                <span class="class-desc overflow-hidden lh-sm">Under the guidance of professional and
                                    experienced
                                    coaches, 3 times a week</span>
                            </section>
                        </a>
                    </section>
                    <section class="class-item overflow-hidden mb-3">
                        <a href="login.php">
                            <img class="img" src="./images/img10.jpg" />
                            <section class="class-info p-2">
                                <h5 class="mb-1 text-color-primary fw-bold">Golf</h5>
                                <span class="class-desc overflow-hidden lh-sm">Under the guidance of professional and
                                    experienced
                                    coaches, 3 times a week</span>
                            </section>
                        </a>
                    </section>
                    <section class="class-item overflow-hidden mb-3">
                        <a href="login.php">
                            <img class="img" src="./images/img8.jpg" />
                            <section class="class-info p-2">
                                <h5 class="mb-1 text-color-primary fw-bold">Biking</h5>
                                <span class="class-desc overflow-hidden lh-sm">Under the guidance of professional and
                                    experienced
                                    coaches, 3 times a week</span>
                            </section>
                        </a>
                    </section>
                    <section class="class-item overflow-hidden mb-3">
                        <a href="login.php">
                            <img class="img" src="./images/img3.jpg" />
                            <section class="class-info p-2">
                                <h5 class="mb-1 text-color-primary fw-bold">Climbing</h5>
                                <span class="class-desc overflow-hidden lh-sm">Under the guidance of professional and
                                    experienced
                                    coaches, 3 times a week</span>
                            </section>
                        </a>
                    </section>
                    <section class="class-item overflow-hidden mb-3">
                        <a href="login.php">
                            <img class="img" src="./images/img4.jpg" />
                            <section class="class-info p-2">
                                <h5 class="mb-1 text-color-primary fw-bold">Camping</h5>
                                <span class="class-desc overflow-hidden lh-sm">Under the guidance of professional and
                                    experienced
                                    coaches, 3 times a week</span>
                            </section>
                        </a>
                    </section>
                </section>
            </section>
        </section>
    </body>
</html>