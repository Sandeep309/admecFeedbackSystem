<nav class="nav flex-column bd-highlight">

    <div class="nav-item">
        <p class="text-muted fw-bold mb-0 pt-4 px-3">CORE</p>
        <a class="nav-link" href="index.php">
            <i class="fas fa-chart-pie me-2"></i>Dashboard
        </a>
    </div>

    <div class="nav-item">
        <p class="text-muted fw-bold mb-0 pt-4 px-3">INTERFACE</p>

        <!-- Accordian -->
        <a class="nav-link d-flex justify-content-between align-items-center sideAccordion">
            <div class=""><i class="fas fa-columns me-2"></i>Manage Feedback</div>
            <i class="fas fa-chevron-right fa-xs accArrow"></i>
        </a>
        <div class="panel">
            <!-- Manage Feedback -->
            <a class="nav-link" href="manage.php">
                <i class="fas fa-address-book me-2"></i>Manage
                <sup>
                    <?php
                    include('process/databaseConnect.php');
                    if ($connect) {
                        $fetchTotalStudentSql = "SELECT COUNT(fullname) FROM studentfeedback WHERE status = '0' && bin = '0'";
                        $result = mysqli_query($connect, $fetchTotalStudentSql);
                        $row = mysqli_fetch_array($result);
                        $totalManage = $row[0];
                    } else {
                        mysqli_connect($connect);
                    }
                    mysqli_close($connect);

                    ?>
                    <span class="badge bg-secondary"><?php echo $totalManage; ?></span>
                </sup>
            </a>
            <!-- All Students -->
            <a class="nav-link" href="allStudents.php">
                <i class="fas fa-user-friends me-2"></i>All Students
                <sup>
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
                    <span class="badge bg-primary"><?php echo $totalStudent; ?></span>
                </sup>
            </a>
            <!-- All Feedback -->
            <a class="nav-link" href="allFeedback.php">
                <i class="fas fa-comment me-2"></i>All Feedback
                <sup>
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
                    <span class="badge bg-warning text-dark"><?php echo $totalFeedback; ?></span>
                </sup>
            </a>
            <!-- Positive Feedback -->
            <a class="nav-link" href="positiveFeedback.php">
                <i class="fas fa-smile-beam me-2"></i>All Positive
                <sup>
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
                    <span class="badge bg-success"><?php echo $totalPostiveFeedback; ?></span>
                </sup>
            </a>
            <!-- negative Feedback -->
            <a class="nav-link" href="negativeFeedaback.php">
                <i class="fas fa-frown me-2"></i>All Negative
                <sup>
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
                    <span class="badge bg-danger"><?php echo $totalNegativeFeedback; ?></span>
                </sup>
            </a>
        </div>
        <a class="nav-link" href="importantFeedback.php">
            <i class="fas fa-star me-2"></i>Imp. Feedback
        </a>
        <a class="nav-link" href="mailLogs.php">
            <i class="fas fa-inbox me-2"></i>Mail Logs
        </a>
        <a class="nav-link" href="recyleBin.php">
            <i class="fas fa-trash-restore me-2"></i>Recyle Bin
        </a>
    </div>
</nav>