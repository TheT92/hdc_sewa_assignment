<?php include '../api/cms_login.php';?>
<section class="login-wrapper">
    <section id="loginBox" class="p-4 w-100 mt-5">
        <h1 class="text-center fw-bold mb-0 lh-1 text-color-primary">CMS</h1>
        <h3 class="text-center">LOGIN</h3>
        <!-- login form -->
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <section class="mb-2">
                <label for="account" class="form-label">Account</label>
                <input type="text" id="account" name="account" class="form-control" required>
                <span class="error text-danger"><?php echo $accountErr; ?></span>
            </section>
            <section class="mb-4">
                <label for="password" class="form-label">Password</label>
                <input type="password" id="password" name="password" class="form-control" required>
                <span class="error text-danger"><?php echo $passwordErr; ?></span>
            </section>
            <button type="submit" class="btn btn-primary w-100 mb-2 bg-color-primary">SUBMIT</button>
        </form>
    </section>
</section>