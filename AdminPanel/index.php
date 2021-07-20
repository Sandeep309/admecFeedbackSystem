<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <link rel="icon" href="img/logo/admec-fevicon-logo.png" type="image/png" sizes="any">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Dashboard</title>
  <!-- Links -->
  <link rel="stylesheet" href="bootstrap-5.0.0-beta1-dist/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap5.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
  <link rel="stylesheet" href="css/style.css" />
</head>

<body class="displayArea">
  <!-- Head -->
  <?php include('./includes/header.php') ?>

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
          <button type="button" class="btn btn-outline-dark" data-bs-dismiss="modal" data-bs-toggle="tooltip" data-bs-placement="top" title="Close">Close</button>
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
        <h1>Dashboard</h1>
        <!-- Sub-Heading -->
        <ol class="breadcrumb p-3 mb-4 rounded myLigthGrey">
          <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
        </ol>

        <!-- Cards Row -->
        <div class="row mb-3">
          <!-- Total Student -->
          <div class="col-md-6 col-lg-3 mb-3">
            <div class="card cardBlue text-light bg-primary border-0 shadow-sm curserPoint">
              <div class="card-body">
                <?php
                include('process/databaseConnect.php');
                if ($connect) {
                  $fetchTotalStudentSql = "SELECT COUNT(DISTINCT fullname) FROM studentfeedback";
                  $result = mysqli_query($connect, $fetchTotalStudentSql);
                  $row = mysqli_fetch_array($result);
                  $totalStudent = $row[0];
                } else {
                  mysqli_connect($connect);
                }
                mysqli_close($connect);

                ?>
                <div class="d-flex justify-content-between align-items-center">
                  <h3 class="card-title">Students</h3>
                  <h2 class="card-text"><?php echo $totalStudent; ?></h2>
                </div>
              </div>
              <div class="card-footer d-flex justify-content-between align-items-center">
                <a class="text-light stretched-link text-decoration-none" href="allStudents.php">
                  View Details
                </a>
                <div class="text-white">
                  <i class="fas fa-chevron-right"></i>
                </div>
              </div>
            </div>
          </div>
          <!-- Total Fedback -->
          <div class="col-md-6 col-lg-3 mb-3">
            <div class="card cardYellow text-light bg-warning border-0 shadow-sm curserPoint">
              <div class="card-body">
                <?php
                include('process/databaseConnect.php');
                if ($connect) {
                  $fetchTotalFeedbackSql = "SELECT COUNT(*) FROM studentfeedback";
                  $result = mysqli_query($connect, $fetchTotalFeedbackSql);
                  $row = mysqli_fetch_array($result);
                  $totalFeedback = $row[0];
                } else {
                  mysqli_connect($connect);
                }
                mysqli_close($connect);

                ?>

                <div class="d-flex justify-content-between align-items-center">
                  <h3 class="card-title">Feedbacks</h3>
                  <h2 class="card-text"><?php echo $totalFeedback; ?></h2>
                </div>
              </div>
              <div class="card-footer d-flex justify-content-between align-items-center">
                <a class="text-light stretched-link text-decoration-none" href="allFeedback.php">
                  View Details
                </a>
                <div class="text-white">
                  <i class="fas fa-chevron-right"></i>
                </div>
              </div>
            </div>
          </div>
          <!-- Total Positive -->
          <div class="col-md-6 col-lg-3 mb-3">
            <div class="card cardGreen text-light bg-success border-0 shadow-sm curserPoint">
              <div class="card-body">
                <?php
                include('process/databaseConnect.php');
                if ($connect) {
                  $fetchTotalPositiveSql = "SELECT COUNT(coursesatisfaction) FROM studentfeedback
                   WHERE coursesatisfaction LIKE 'g%' OR coursesatisfaction LIKE 'e%'";
                  $result = mysqli_query($connect, $fetchTotalPositiveSql);
                  $row = mysqli_fetch_array($result);
                  $totalPostiveFeedback = $row[0];
                } else {
                  mysqli_connect($connect);
                }
                mysqli_close($connect);

                ?>

                <div class="d-flex justify-content-between align-items-center">
                  <h3 class="card-tile">Positive</h3>
                  <h2 class="card-text"><?php echo $totalPostiveFeedback; ?></h2>
                </div>
              </div>
              <div class="card-footer d-flex justify-content-between align-items-center">
                <a class="text-light stretched-link text-decoration-none" href="positiveFeedback.php">
                  View Details
                </a>
                <div class="text-white">
                  <i class="fas fa-chevron-right"></i>
                </div>
              </div>
            </div>
          </div>
          <!-- Total Negetive -->
          <div class="col-md-6 col-lg-3 mb-3">
            <div class="card cardRed text-light bg-danger border-0 shadow-sm curserPoint">
              <div class="card-body">
                <?php
                include('process/databaseConnect.php');
                if ($connect) {
                  $fetchTotalNegativeSql = "SELECT COUNT(coursesatisfaction) FROM studentfeedback
                   WHERE coursesatisfaction LIKE 'p%' OR coursesatisfaction LIKE 'v%'";
                  $result = mysqli_query($connect, $fetchTotalNegativeSql);
                  $row = mysqli_fetch_array($result);
                  $totalNegativeFeedback = $row[0];
                } else {
                  mysqli_connect($connect);
                }
                mysqli_close($connect);

                ?>
                <div class="d-flex justify-content-between align-items-center">
                  <h3 class="card-tile">Negative</h3>
                  <h2 class="card-text"><?php echo $totalNegativeFeedback; ?></h2>
                </div>
              </div>
              <div class="card-footer d-flex justify-content-between align-items-center">
                <a class="text-light stretched-link text-decoration-none" href="negativeFeedaback.php">
                  View Details
                </a>
                <div class="text-white">
                  <i class="fas fa-chevron-right"></i>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Tables Row -->
        <div class="card border-0 shadow mb-5">
          <div class="card-header"> <i class="fas fa-table me-2"></i>Recent Feedback</div>
          <div class="card-body">

            <div class="table-responsive">
              <table id="studentTable" class="table table-striped table-hover" style="width: 100%;">
                <thead>
                  <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Student Id</th>
                    <th>Email</th>
                    <th>Phone No:</th>
                    <th>Date</th>
                    <th>View</th>
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
  <script src="web.js"></script>
</body>

</html>