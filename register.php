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

<body id="register" class="page-container d-flex flex-column">
    <?php include './app/views/header.php' ?>
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
    <section class="register-wrapper d-flex justify-content-center align-items-center">
        <section id="registerBox" class="p-4 w-100 mt-5">
            <h2 class="fw-bold text-center lh-1 fst-italic mb-4 mt-0 logo"><span
                    class="text-color-primary">O</span>utdoor
                </br> Club</h2>
            <h4 class="text-center">REGISTER</h4>
            <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <section class="mb-2">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" id="email" name="email" class="form-control" aria-describedby="emailHelp">
                    <span id="emailHelp" class="form-text">We'll never share your email with anyone else.</span><br />
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
                        echo '<p class="text-color-primary d-flex justify-content-between"><b class="fs-5">' . $row["name"] . '</b><span class="text-end"><b class="fs-1">€' . number_format($row["fee"], 2) . '</b><br/>Per Month</span></p>';
                        echo '<span>' . $row["desc"] . '</span><br/>';
                        echo '</label></section>';
                    }
                    ?>
                </section>
                <p class="error text-danger text-center"><?php echo $registerErr; ?></p>
                <button type="submit" class="btn btn-primary w-100 mb-3 bg-color-primary">REGISTER</button>
            </form>
        </section>
    </section>
    <?php include './app/views/footer.php' ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>

</html>