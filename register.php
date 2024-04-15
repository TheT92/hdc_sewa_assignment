<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/app.css" />
    <link rel="stylesheet" href="css/register.css" />
    <title>Register</title>
</head>

<body id="register" class="page-container d-flex flex-column justify-content-center">
    <?php
    session_start();
    if (isset($_SESSION["email"])) {
        header("Location: index.php");
        exit();
    }
    ?>
    <?php
    include ("./api/getMemberLevels.php");
    include ("./api/register.php");
    ?>
    <?php
    $emailErr = "";
    $firstnameErr = "";
    $surnameErr = "";
    $passwordErr = "";
    $repeatPasswordErr = "";
    $registerErr = "";
    $isValid = true;
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST['email'];
        $firstname = $_POST['firstname'];
        $surname = $_POST['surname'];
        $password = $_POST['password'];
        $repeatPassword = $_POST['repeatPassword'];
        $memberLevel = $_POST['memberLevel'];
        if (empty(($email))) {
            $isValid = false;
            $emailErr = 'Email address required.';
        }
        if (empty($firstname)) {
            $isValid = false;
            $firstnameErr = 'Firstname required.';
        }
        if (empty($surname)) {
            $isValid = false;
            $surnameErr = 'Surname required.';
        }
        if (empty($password)) {
            $isValid = false;
            $passwordErr = 'Password required.';
        }
        if (empty($repeatPassword)) {
            $isValid = false;
            $repeatPasswordErr = 'confirmation password required.';
        }
        if ($password != $repeatPassword) {
            $isValid = false;
            $passwordErr = 'Password and confirmation password are inconsistent.';
        }
        if ($isValid) {
            $result = registerAccount($firstname, $surname, $email, $password, $memberLevel);
            if ($result) {
                $email = $password = $repeatPassword = "";
                header("Location: " . "login.php");
                exit();
            } else {
                $registerErr = "Register failed, please try again later.";
            }
        }
    }
    ?>
    <nav class="navbar fixed-top bg-body-tertiary ps-4 pe-2">
        <a href="index.php">
            <p class="fs-4 mb-0 lh-1 fw-bold fst-italic logo"><span class="text-color-primary">O</span>utdoor </br> Club
            </p>
        </a>
        <span>
            <a href="login.php" class="p-2 ms-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" fill="currentColor" class="bi bi-person"
                    viewBox="0 0 16 16">
                    <path
                        d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z" />
                </svg>
            </a>
        </span>
    </nav>
    <section id="registerBox" class="p-4 w-100">
        <h2 class="fw-bold text-center lh-1 fst-italic mb-4 mt-0 logo"><span class="text-color-primary">O</span>utdoor
            </br> Club</h2>
        <h4 class="text-center">REGISTER</h4>
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <section class="mb-2">
                <label for="email" class="form-label">Email address</label>
                <input type="email" id="email" name="email" class="form-control" aria-describedby="emailHelp">
                <span id="emailHelp" class="form-text">We'll never share your email with anyone else.</span>
                <span class="error text-danger"><?php echo $emailErr; ?></span>
            </section>
            <section class="mb-2">
                <label for="firstname" class="form-label">Firstname</label>
                <input type="text" id="firstname" name="firstname" class="form-control">
                <span class="error text-danger"><?php echo $firstnameErr; ?></span>
            </section>
            <section class="mb-2">
                <label for="surname" class="form-label">Surname</label>
                <input type="text" id="surname" name="surname" class="form-control">
                <span class="error text-danger"><?php echo $surnameErr; ?></span>
            </section>
            <section class="mb-2">
                <label for="password" class="form-label">Password</label>
                <input type="password" id="password" name="password" class="form-control">
                <span class="error text-danger"><?php echo $passwordErr; ?></span>
            </section>
            <section class="mb-4">
                <label for="repeatPassword" class="form-label">Confirm Password</label>
                <input type="password" id="repeatPassword" name="repeatPassword" class="form-control">
                <span class="error text-danger"><?php echo $repeatPasswordErr; ?></span>
            </section>
            <section class="mb-4">
                <label for="memberLevel" class="form-label">Member Level</label><br />
                <?php
                while ($row = $memberLevelList->fetch(PDO::FETCH_ASSOC)) {
                    echo '<section class="d-flex mb-4"><input value="' . $row["id"] . '" class="form-check-input" type="radio" name="memberLevel" id="' . $row["name"] . '" checked>';
                    echo '<label class="form-check-label level-item p-3 ms-3" for="' . $row["name"] . '">';
                    echo '<h4 class="text-color-primary"><b>' . $row["name"] . '</b></h4>';
                    echo '<span>' . $row["desc"] . '</span><br/>';
                    echo '<span>' . $row["fee"] . '/ Per Month</span><br/>';
                    echo '</label></section>';
                }
                ?>
                <!-- <input value="level1" class="form-check-input" type="radio" name="memberLevel" id="memberLevel1"
                    checked>
                <label class="form-check-label ps-2" for="memberLevel1">
                    <h5>Public</h5>
                    <p>Free</p>
                </label>
                <br />
                <input value="level2" class="form-check-input" type="radio" name="memberLevel" id="memberLevel2">
                <label class="form-check-label ps-2" for="memberLevel2">
                    <h5>Prime</h5>
                    <p>€399/Per Month</p>
                </label> -->
            </section>
            <p class="error text-danger text-center"><?php echo $registerErr; ?></p>
            <button type="submit" class="btn btn-primary w-100 mb-3 bg-color-primary">REGISTER</button>
        </form>
    </section>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>

</html>