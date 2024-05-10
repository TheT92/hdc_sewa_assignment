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
    <!-- contact page css -->
    <link rel="stylesheet" href="css/contact.css" />
    <!-- page title -->
    <title>Contact Us</title>
</head>

<body id="contact" class="page-container d-flex flex-column justify-content-center">
    <!-- import header -->
    <?php include './app/views/header.php' ?>
    <!-- import php codes and functions of contact page -->
    <?php include './api/contactus.php' ?>
    <section class="flex-1 d-flex justify-content-center align-items-center">
        <section id="contactBox" class="p-4 w-100 mt-5">
            <h4 class="text-center">Contact Form</h4>
            <!-- form area -->
            <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <?php if ($action == 'success'): ?>
                    <!-- if send success, show notification and back to home page button -->
                    <p class="alert alert-success alert-dismissible fade show mb-3 mt-4" role="alert">
                        We've received your message and will contact you as soon as possible, thank you!
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </p>
                    <a href="index.php" class="btn btn-primary w-100 mb-2 bg-color-primary">BACK TO HOME PAGE</a>
                <?php else: ?>
                    <!-- text fields -->
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
                    </section>
                    <section class="mb-2">
                        <label for="phoneno" class="form-label">Phone Number</label>
                        <input type="text" id="phoneno" name="phoneno" class="form-control" required>
                        <span class="error text-danger"><?php echo $phonenoErr; ?></span>
                    </section>
                    <section class="mb-3">
                        <label for="message" class="form-label">Messsage</label>
                        <textarea id="message" name="message" class="form-control" required></textarea>
                        <span class="error text-danger"><?php echo $messageErr; ?></span>
                    </section>
                    <button type="submit" class="btn btn-primary w-100 mb-2 bg-color-primary">SEND</button>
                <?php endif ?>
            </form>
        </section>
    </section>
    <!-- import footer -->
    <?php include './app/views/footer.php' ?>
    <!-- import bootstrap js -->
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>