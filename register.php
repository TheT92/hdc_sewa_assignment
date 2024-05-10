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
    <!-- register page css -->
    <link rel="stylesheet" href="css/register.css" />
    <!-- page title -->
    <title>Register</title>
</head>

<body id="register" class="page-container d-flex flex-column">
    <!-- import header -->
    <?php include './app/views/header.php' ?>
    <?php
    // get member level list from database
    include ("./api/getMemberLevels.php");
    // import php codes and function for register page
    include ("./api/register.php");
    ?>
    <section class="register-wrapper d-flex justify-content-center align-items-center">
        <section id="registerBox" class="p-4 w-100 mt-5">
            <!-- logo -->
            <h2 class="fw-bold text-center lh-1 fst-italic mb-4 mt-0 logo"><span
                    class="text-color-primary">O</span>utdoor
                </br> Club</h2>
            <h4 class="text-center">REGISTER</h4>
            <!-- go to login -->
            <p class="text-end mt-3">Already rigistered? <a href="login.php" class="text-color-primary">Login</a></p>
            <!-- register form -->
            <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <section class="mb-2">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" id="email" name="email" class="form-control" aria-describedby="emailHelp" required>
                    <span id="emailHelp" class="form-text">We'll never share your email with anyone else.</span><br />
                    <span class="error text-danger"><?php echo $emailErr; ?></span>
                </section>
                <section class="mb-2">
                    <label for="firstname" class="form-label">Firstname</label>
                    <input type="text" id="firstname" name="firstname" class="form-control" required>
                    <span class="error text-danger"><?php echo $firstnameErr; ?></span>
                </section>
                <section class="mb-2">
                    <label for="surname" class="form-label">Surname</label>
                    <input type="text" id="surname" name="surname" class="form-control" required>
                    <span class="error text-danger"><?php echo $surnameErr; ?></span>
                </section>
                <section class="mb-2">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" id="password" name="password" class="form-control" required>
                    <span class="error text-danger"><?php echo $passwordErr; ?></span>
                </section>
                <section class="mb-4">
                    <label for="repeatPassword" class="form-label">Confirm Password</label>
                    <input type="password" id="repeatPassword" name="repeatPassword" class="form-control" required>
                    <span class="error text-danger"><?php echo $repeatPasswordErr; ?></span>
                </section>
                <section class="mb-4">
                    <!-- render all the member levels on page -->
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
                <!-- register error message -->
                <p class="error text-danger text-center"><?php echo $registerErr; ?></p>
                <button type="submit" class="btn btn-primary w-100 mb-3 bg-color-primary">REGISTER</button>
            </form>
        </section>
    </section>
    <!-- import footer -->
    <?php include './app/views/footer.php' ?>
</body>
<!-- import bootstrap js -->
<script src="js/bootstrap.bundle.min.js"></script>
</html>