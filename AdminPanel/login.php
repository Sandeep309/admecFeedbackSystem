<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="icon" href="img/logo/admec-fevicon-logo.png" type="image/png" sizes="any">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <!-- Css -->
    <link rel="stylesheet" href="bootstrap-5.0.0-beta1-dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css" />
</head>

<body style="background-color: #007bff;">

    <section class="container">
        <div class="card mx-auto border-0 shadow mt-5" style="max-width: 28rem;">
            <div class="card-header p-4 text-center">
                <h3 class="card-text fw-light">Login</h3>
            </div>
            <div class="card-body">
                <!-- Massage -->
                <?php
                if (isset($_SESSION['msgRed'])) {
                    echo "<p class='card-text text-danger'>" . $_SESSION['msgRed'] . "</p>";
                    unset($_SESSION['msgRed']);
                }
                ?>
                <?php
                if (isset($_SESSION['msgGreen'])) {
                    echo "<p class='card-text text-success'>" . $_SESSION['msgGreen'] . "</p>";
                    unset($_SESSION['msgGreen']);
                }
                ?>
                <form name="loginForm" action="./process/auth/loginprocess.php" method="post" onsubmit="return validateLoginForm()">
                    <!-- Email Feild -->
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="email" id="email" placeholder="name@example.com">
                        <label for="name">Email address</label>
                    </div>
                    <!-- Password Feild -->
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                        <label for="password">Password</label>
                    </div>
                    <!-- Show Password Check -->
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="showPassword">
                        <label class="form-check-label" for="rememberPassword">Show password</label>
                    </div>
                    <!-- Submit Button -->
                    <div class="mb-3 d-flex justify-content-between align-items-center">
                        <a href="#" class="small text-decoration-none">Forgot Password?</a>
                        <button type="submit" class="btn btn-primary">Login</button>
                    </div>
                </form>
            </div>
            <!-- GO To Register.php Link -->
            <div class="card-footer text-center">
                <a href="register.php" class="small text-decoration-none">Need an account? Sign up!</a>
            </div>
        </div>
    </section>

    <!-- Script -->
    <script src="bootstrap-5.0.0-beta1-dist/js/bootstrap.bundle.min.js"></script>
    <script src="webAuth.js"></script>
</body>

</html>