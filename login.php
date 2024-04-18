<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/app.css" />
    <link rel="stylesheet" href="css/login.css" />
    <title>Login</title>
</head>

<body id="login" class="page-container d-flex flex-column">
    <?php include './app/views/header.php' ?>
    <?php
    include ("./api/login.php");
    ?>
    <?php
    $loginErr = "";
    $emailErr = "";
    $passwordErr = "";
    $isValid = true;
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST['email'];
        $password = $_POST['password'];
        if (empty(($email))) {
            $isValid = false;
            $emailErr = 'Email address required.';
        }
        if (empty($password)) {
            $isValid = false;
            $passwordErr = 'Password required.';
        }
        if ($isValid) {
            $result = login($email, $password);
            $rowCount = $result->rowCount();
            if ($rowCount > 0) {
                $_SESSION['email'] = $email;
                $email = $password = "";
                header("Location: " . "index.php");
                exit();
            } else {
                if ($rowCount == 0) {
                    $loginErr = "email/password incorrect.";
                } else {
                    $loginErr = "Login failed, please try again later.";
                }
            }
        }
    }
    ?>
    <section class="login-wrapper d-flex justify-content-center align-items-center">
        <section id="loginBox" class="p-4 w-100 mt-5">
            <h2 class="fw-bold text-center lh-1 fst-italic mb-4 logo"><span class="text-color-primary">O</span>utdoor
                </br> Club</h2>
            <h4 class="text-center">MEMBER LOGIN</h4>
            <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <section class="mb-2">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" id="email" name="email" class="form-control" aria-describedby="emailHelp">
                    <span id="emailHelp" class="form-text">We'll never share your email with anyone else.</span><br />
                    <span class="error text-danger"><?php echo $emailErr; ?></span>
                </section>
                <section class="mb-2">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" id="password" name="password" class="form-control">
                    <span class="error text-danger"><?php echo $passwordErr; ?></span>
                </section>
                <p class="error text-danger text-center"><?php echo $loginErr; ?></p>
                <button type="submit" class="btn btn-primary w-100 mb-2 bg-color-primary">SUBMIT</button>
            </form>
            <p><a href="#" class="link-primary text-color-primary">Forgot your password?</a></p>
            <p class="text-center mt-4 mb-1">NOT A MEMBER?</p>
            <a href="register.php"><button type="button"
                    class="btn btn-outline-primary btn-plain-primary w-100 mb-3">REGISTER</button></a>
        </section>
    </section>
    <?php include './app/views/footer.php' ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>

</html>