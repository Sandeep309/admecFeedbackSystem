<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="icon" href="img/logo/admec-fevicon-logo.png" type="image/png" sizes="any">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <!-- Css -->
    <link rel="stylesheet" href="bootstrap-5.0.0-beta1-dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css" />
</head>

<body style="background-color: #007bff;">

    <section class="container">
        <div class="card mx-auto border-0 shadow mt-5" style="max-width: 28rem;">
            <div class="card-header p-4 text-center">
                <h3 class="card-text fw-light">Register</h3>
            </div>
            <div class="card-body">
                <form name="registerForm" action="./process/auth/registerprocess.php" method="POST" onsubmit="return validateRegisterForm()">
                    <!-- Name Feild -->
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="name" id="name" placeholder="Enter full name" required>
                        <label for="floatingInput">Full Name</label>
                    </div>
                    <!-- Email feild -->
                    <div class="mb-3">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="email" id="email" placeholder="Enter email address" required>
                            <label for="floatingPassword">Email</label>
                        </div>
                    </div>
                    <!-- Password Feild -->
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" name="password" id="password" placeholder="Enter password" required>
                        <label for="floatingInput">Password</label>
                    </div>
                    <!-- Show Password Check -->
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="showPassword">
                        <label class="form-check-label" for="rememberPassword">Show password</label>
                    </div>
                    <!-- Submit Button -->
                    <div class="mt-4">
                        <button type="submit" class="btn btn-success w-100">Create Account</button>
                    </div>

                    <hr class="mt-4">
                    <div class="mt-4 text-center">
                        <a href="index.php" class="btn btn-primary w-50">Login as Guest</a>
                    </div>
                </form>
            </div>
            <!-- Go To Login.php Link -->
            <div class="card-footer text-center">
                <a href="login.php" class="small text-decoration-none">Have an account? Go To Login</a>
            </div>
        </div>
    </section>

    <!-- Script -->
    <script src="bootstrap-5.0.0-beta1-dist/js/bootstrap.bundle.min.js"></script>
    <script src="webAuth.js"></script>
</body>

</html>