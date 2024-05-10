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
    <!-- login page css -->
    <link rel="stylesheet" href="css/login.css" />
    <!-- page title -->
    <title>Login</title>
</head>

<body id="login" class="page-container d-flex flex-column">
    <!-- import header -->
    <?php include './app/views/header.php' ?>
    <!-- import php codes and functions for login page -->
    <?php include ("./api/login.php") ?>
    <section class="login-wrapper d-flex justify-content-center align-items-center">
        <section id="loginBox" class="p-4 w-100 mt-5">
            <!-- logo -->
            <h2 class="fw-bold text-center lh-1 fst-italic mb-4 logo"><span class="text-color-primary">O</span>utdoor
                </br> Club</h2>
            <h4 class="text-center">MEMBER LOGIN</h4>
            <!-- login form -->
            <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <section class="mb-2">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" id="email" name="email" class="form-control" aria-describedby="emailHelp" required>
                    <span id="emailHelp" class="form-text">We'll never share your email with anyone else.</span><br />
                    <span class="error text-danger"><?php echo $emailErr; ?></span>
                </section>
                <section class="mb-2">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" id="password" name="password" class="form-control" required>
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
    <!-- import footer -->
    <?php include './app/views/footer.php' ?>
</body>
<!-- import bootstrap js -->
<script src="js/bootstrap.bundle.min.js" ></script>

</html>