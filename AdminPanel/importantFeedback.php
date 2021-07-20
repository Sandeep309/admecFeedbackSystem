<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <link rel="icon" href="img/logo/admec-fevicon-logo.png" type="image/png" sizes="any">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Important Feedback</title>
    <!-- Links -->
    <link rel="stylesheet" href="bootstrap-5.0.0-beta1-dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <link rel="stylesheet" href="css/style.css" />
</head>

<body class="displayArea">
    <!-- Head -->
    <?php include("./includes/header.php");  ?>

    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Feedback Detail</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Student Details -->
                    <div class="card border-0 shadow-sm mb-3">
                        <div class="card-body">
                            <h5 class="card-title mb-3 fw-bold">Profile</h5>
                            <!-- Name -->
                            <div class="row mb-3">
                                <div class="col-sm-4">
                                    <p class="card-text">Student Name</p>
                                </div>
                                <div class="col-sm-8">
                                    <p class="card-text fw-bold text-capitalize" id="studentName"></p>
                                </div>
                            </div>
                            <!-- Id -->
                            <div class="row mb-3">
                                <div class="col-sm-4">
                                    <p class="card-text">Student Id</p>
                                </div>
                                <div class="col-sm-8">
                                    <p class="card-text fw-bold" id="studentId"></p>
                                </div>
                            </div>
                            <!-- Email -->
                            <div class="row mb-3">
                                <div class="col-sm-4">
                                    <p class="card-text">Student Email</p>
                                </div>
                                <div class="col-sm-8">
                                    <p class="card-text fw-bold" id="studentEmail"></p>
                                </div>
                            </div>
                            <!-- Phone Number -->
                            <div class="row mb-3">
                                <div class="col-sm-4">
                                    <p class="card-text">Phone Number</p>
                                </div>
                                <div class="col-sm-8">
                                    <p class="card-text fw-bold" id="studentPhone"></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Feedback Details -->
                    <div class="card border-0 shadow-sm mb-3">
                        <div class="card-body">
                            <h5 class="card-title mb-3 fw-bold">Feedback</h5>
                            <!-- Teacher Name -->
                            <div class="row mb-3">
                                <div class="col-sm-4">
                                    <p class="card-text">Teacher Name</p>
                                </div>
                                <div class="col-sm-8">
                                    <p class="card-text fw-bold text-capitalize" id="teacherName"></p>
                                </div>
                            </div>
                            <!-- Course Rating -->
                            <div class="row mb-3">
                                <div class="col-sm-4">
                                    <p class="card-text">Course Rating</p>
                                </div>
                                <div class="col-sm-8">
                                    <p class="card-text fw-bold" id="courseRating"></p>
                                </div>
                            </div>
                            <!-- Instructer Rating -->
                            <div class="row mb-3">
                                <div class="col-sm-4">
                                    <p class="card-text">Instructer Rating</p>
                                </div>
                                <div class="col-sm-8">
                                    <p class="card-text fw-bold" id="instructerRating"></p>
                                </div>
                            </div>
                            <!-- Course Improvements -->
                            <div class="row mb-3">
                                <div class="col-sm-4">
                                    <p class="card-text">Improvements</p>
                                </div>
                                <div class="col-sm-8">
                                    <p class="card-text fw-bold" id="improvement"></p>
                                </div>
                            </div>
                            <!-- Suggestion -->
                            <div class="row mb-3">
                                <div class="col-sm-4">
                                    <p class="card-text">Additional</p>
                                </div>
                                <div class="col-sm-8">
                                    <p class="card-text fw-bold" id="additional"></p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer d-flex justify-content-between">
                    <!-- <small class="card-text">Created 6 fab 2021, 01:49 pm</small> -->
                    <small class="card-text" id="feedbackTime"></small>
                    <div class="">
                        <button type="button" class="btn btn-warning modalId statusRemove" data-status-id="">
                            <i class=" fas fa-star"></i>
                        </button>
                        <?php
                        if (isset($_SESSION['userDetails']) && $_SESSION['userDetails']['userName'] == 'admin admec') {

                        ?>
                            <button type="button" class="btn btn-danger modalId binTrigger" data-bin-id="">
                                <i class="fas fa-trash"></i>
                            </button>

                        <?php
                        };
                        ?>
                        <button type="button" class="btn btn-outline-dark" data-bs-dismiss="modal" data-bs-toggle="tooltip" data-bs-placement="top" title="Close">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="content-container">
        <!-- This is Sidebar  -->
        <div class="left_panel">
            <?php include('./includes/sidenav.php') ?>
        </div>

        <!-- Content will Display Here -->
        <div class="right_panel bg-white">
            <main class="container-fluid alParent">
                <!-- Heading -->
                <h1>Important Feedback</h1>
                <!-- Sub-Heading -->
                <ol class="breadcrumb p-3 mb-4 rounded myLigthGrey">
                    <li class="breadcrumb-item active" aria-current="page">Important Feedback</li>
                </ol>

                <!-- Feedback Tables Row -->
                <div class="card border-0 shadow mb-5">
                    <div class="card-header">
                        <i class="fas fa-table me-2"></i>Important Feedback
                    </div>
                    <div class="card-body">

                        <div class="table-responsive">
                            <table id="impFeedbackTable" class="table table-striped table-hover" style="width: 100%;">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>Student Id</th>
                                        <th>Email</th>
                                        <th>Phone No:</th>
                                        <th>Date</th>
                                        <th>View</th>
                                        <th>Imp</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>

                                <tfoot>
                                    <tr>
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>Student Id</th>
                                        <th>Email</th>
                                        <th>Phone No:</th>
                                        <th>Date</th>
                                        <th>View</th>
                                        <th>Imp</th>
                                        <th>Delete</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>

                    </div>
                </div>
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