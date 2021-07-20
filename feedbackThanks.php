<!-- SESSION  -->
<?php
session_start();
if (!isset($_SESSION['items'])) {
    header('location:index.html?msg=session nhi mila!');
} else {
    $fullname = $_SESSION['items']['fullname'];
    $email = $_SESSION['items']['email'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="icon" href="img/logo/admec-fevicon-logo.png" type="image/png" sizes="any">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You</title>
    <!-- Links -->
    <link rel="stylesheet" href="bootstrap-5.0.0-beta1-dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <link rel="stylesheet" href="css/animate/animateBackground.css" />
</head>

<body class="cover">
    <!-- Header -->
    <header class="container-fluid p-3 text-center">
        <img src="img/logo/admec-logo-and-text-in-white-2.png" class="img-fluid" alt="ADMEC Multimedia india" />
        <!-- <h1 class="">Lets Make Our Training Better</h1> -->
    </header>

    <!-- Main  -->
    <main class="container divCenter text-center text-light">
        <h1 class="fw-bolder mb-3">
            Thank you <span class="text-decoration-underline text-uppercase"><?php echo $fullname; ?></span> for your valuable feedback
        </h1>
        <a href="index.html" class="btn btn-outline-light mb-3">Feedback Again</a>
        <p class="lead">
            <i class="fas fa-code"></i> with <i class="fas fa-heart"></i> by Sandeep Saini
        </p>
    </main>

    <!-- Scripts -->
    <script src="bootstrap-5.0.0-beta1-dist/js/bootstrap.bundle.min.js"></script>
    <script src="web.js"></script>
</body>

</html>

<?php
session_destroy();
?>