<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/app.css" />
    <link rel="stylesheet" href="css/contact.css" />
    <title>Contact Info</title>
</head>

<body id="contact" class="page-container d-flex flex-column justify-content-center">
    <?php include './app/views/header.php' ?>
    <?php
    $firstNameErr = "";
    $lastNameErr = "";
    $emailErr = "";
    $phonenoErr = "";
    $messageErr = "";
    $isValid = true;

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST['email'];
        $phoneno = $_POST['phoneno'];
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
                // ("Location: " . "contact.php");
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
                    <input type="firstname" id="firstname" name="firstname" class="form-control" required>
                </section>
                <section class="mb-2">
                    <label for="lastname" class="form-label">Last Name</label>
                    <input type="lastname" id="lastname" name="lastname" class="form-control" required>
                    
                </section>
                <section class="mb-2">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" id="email" name="email" class="form-control" aria-describedby="emailHelp">
                    <span class="error text-danger"><?php echo $emailErr; ?></span>

                    <section class="mb-2">
                        <label for="phoneno" class="form-label">Phone Number</label>
                        <input type="phoneno" id="phoneno" name="phoneno" class="form-control" required>
                        <span class="error text-danger"><?php echo $phonenoErr; ?></span>

                    </section>
                    <section class="mb-2">
                        <label for="message" class="form-label">Messsage</label>
                        <input type="message" id="message" name="message" class="form-control" required>
                        <span class="error text-danger"><?php echo $messageErr; ?></span>

                    </section>
                    <button type="submit" class="btn btn-primary w-100 mb-2 bg-color-primary">SEND</button>
                </section>
            </form>
        </section>
    </section>
    <?php include './app/views/footer.php' ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>