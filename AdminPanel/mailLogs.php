<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <link rel="icon" href="img/logo/admec-fevicon-logo.png" type="image/png" sizes="any">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Mail Logs</title>
    <!-- Links -->
    <link rel="stylesheet" href="bootstrap-5.0.0-beta1-dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap5.min.css">
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
            <main class="container-fluid alParent">
                <!-- Heading -->
                <h1>Mail Logs</h1>
                <!-- Sub-Heading -->
                <ol class="breadcrumb p-3 mb-4 rounded myLigthGrey">
                    <li class="breadcrumb-item active" aria-current="page">Mail Logs</li>
                </ol>

                <!-- Mail Code -->

                <p class="h2 text-center">Coming Soon !</p>

            </main>
        </div>
    </div>

    <!-- Script -->
    <?php
    if (isset($_SESSION['userDetails']) && $_SESSION['userDetails']['userName'] == 'admin admec') {
        $session_value = $_SESSION['userDetails']['userName'];
        // echo "<h1 class='card-title'>" . $session_value . "</h1>";
    }
    ?>
    <script type="text/javascript">
        const sessionValue = '<?php if (isset($session_value)) echo $session_value; ?>';
        var sessionVar = sessionValue ? sessionValue : 'null';
    </script>
    <script src="bootstrap-5.0.0-beta1-dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-latest.js"></script>
    <script src="jquery/jquery-dateformat.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap5.min.js"></script>
    <script async src="web.js"></script>

</body>

</html>