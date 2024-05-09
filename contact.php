<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="./images/icon.jpg" type="image/x-icon" />
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/app.css" />
    <link rel="stylesheet" href="css/contact.css" />
    <title>Contact Info</title>
</head>

<body id="contact" class="page-container d-flex flex-column justify-content-center">
    <?php include './app/views/header.php' ?>
    <?php include './api/contactus.php' ?>
    <?php
    $firstNameErr = "";
    $surnameErr = "";
    $emailErr = "";
    $phonenoErr = "";
    $messageErr = "";
    $isValid = true;

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST['email'];
        $phoneno = $_POST['phoneno'];
        $firstname = $_POST['firstname'];
        $surname = $_POST['surname'];
        $message = $_POST['message'];
        if (empty(($email))) {
            $isValid = false;
            $emailErr = 'Email address required.';
        }
        if (empty($phoneno)) {
            $isValid = false;
            $phonenoErr = 'Phone number required.';
        }
        if (empty($message)) {
            $isValid = false;
            $phonenoErr = 'Message required.';
        }
        if ($isValid) {
            $result = contactus($firstname, $surname, $email, $phoneno, $message);
            if ($result) {
                $email = $phoneno = $message = "";
                header("Location: " . "index.php");
                exit();
            } else {
                $contactErr = "Send messasge failed, please try again later.";
            }
        }
    }
    ?>
    <section class="flex-1 d-flex justify-content-center align-items-center">
        <section id="contactBox" class="p-4 w-100 mt-5">
            <h4 class="text-center">Contact Form</h4>
            <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <section class="mb-2">
                    <label for="firstname" class="form-label">First Name</label>
                    <input type="text" id="firstname" name="firstname" class="form-control" required>
                </section>
                <section class="mb-2">
                    <label for="surname" class="form-label">Last Name</label>
                    <input type="text" id="surname" name="surname" class="form-control" required>

                </section>
                <section class="mb-2">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" id="email" name="email" class="form-control" aria-describedby="emailHelp">
                    <span class="error text-danger"><?php echo $emailErr; ?></span>

                    <section class="mb-2">
                        <label for="phoneno" class="form-label">Phone Number</label>
                        <input type="text" id="phoneno" name="phoneno" class="form-control" required>
                        <span class="error text-danger"><?php echo $phonenoErr; ?></span>

                    </section>
                    <section class="mb-3">
                        <label for="message" class="form-label">Messsage</label>
                        <textarea  id="message" name="message" class="form-control" required></textarea>
                        <span class="error text-danger"><?php echo $messageErr; ?></span>

                    </section>
                    <button type="submit" class="btn btn-primary w-100 mb-2 bg-color-primary">SEND</button>
                </section>
            </form>
        </section>
    </section>
    <?php include './app/views/footer.php' ?>
    <script src="js/bootstrap.bundle.min.js" ></script>
</body>

</html>