<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="icon" href="img/logo/admec-fevicon-logo.png" type="image/png" sizes="any">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Setting</title>
    <!-- Links -->
    <link rel="stylesheet" href="bootstrap-5.0.0-beta1-dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <link rel="stylesheet" href="css/style.css" />
</head>

<body class="displayArea">
    <!-- Head -->
    <?php include("./includes/header.php");  ?>
    <div class="content-container">
        <!-- This is Sidebar  -->
        <div class="left_panel">
            <?php include('./includes/sidenav.php') ?>
        </div>

        <!-- Content will Display Here -->
        <div class="right_panel bg-white">
            <main class="container-fluid">
                <h1>Setting</h1>
                <ol class="breadcrumb p-3 mb-4 rounded myLigthGrey">
                    <li class="breadcrumb-item active" aria-current="page">Setting</li>
                </ol>

                <!-- Setting Content -->
                <div class="row">
                    <div class="col-md-4">
                        <div class="card border-0 shadow">
                            <div class="card-body">
                                <img src="img/logo/admec-final-logo.jpg" class="card-img mb-4" alt="">
                                <p class="card-text">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Et voluptas, consectetur tempora nemo quibusdam quos.
                                    aut aliquid dolorum nostrum reprehenderit.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="card border-0 shadow">
                            <div class="card-body">
                                <!-- Name -->
                                <div class="row mb-3">
                                    <div class="col-sm-2">
                                        <p class="card-text">Name</p>
                                    </div>
                                    <div class="col-sm-10">
                                        <?php
                                        if (isset($_SESSION['userDetails'])) {
                                            echo "<p class='card-text fw-bold'>" . $_SESSION['userDetails']['userName'] . "</p>";
                                        } else {

                                            echo "<p class='card-text fw-bold'>Guest</p>";
                                        }
                                        ?>
                                    </div>
                                </div>

                                <!-- Email -->
                                <div class="row mb-3">
                                    <div class="col-sm-2">
                                        <p class="card-text">Email</p>
                                    </div>
                                    <div class="col-sm-10">
                                        <?php
                                        if (isset($_SESSION['userDetails'])) {
                                            echo "<p class='card-text fw-bold'>" . $_SESSION['userDetails']['email'] . "</p>";
                                        } else {

                                            echo "<p class='card-text fw-bold'>guest@email.com</p>";
                                        }
                                        ?>
                                    </div>
                                </div>

                                <!-- Phone -->
                                <div class="row mb-3">
                                    <div class="col-sm-2">
                                        <p class="card-text">Phone</p>
                                    </div>
                                    <div class="col-sm-10">
                                        <p class="card-text fw-bold">
                                            +91-9811 8181 22
                                        </p>
                                    </div>
                                </div>

                                <!-- About -->
                                <div class="row mb-3">
                                    <div class="col-sm-2">
                                        <p class="card-text">About</p>
                                    </div>
                                    <div class="col-sm-10">
                                        <p class="card-text fw-bold">
                                            Lorem ipsum dolor, sit amet consectetur adipisicing elit
                                            Explicabo iusto veniam assumenda, dolorem, praesentium iste quasi ullam dolorum.
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </main>
        </div>
    </div>

    <!-- Script -->
    <script src="bootstrap-5.0.0-beta1-dist/js/bootstrap.bundle.min.js"></script>
    <script async src="web.js"></script>

</body>

</html>