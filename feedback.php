<!-- SESSION  -->
<?php
session_start();
if (!isset($_SESSION['items'])) {
    header('location:index.html?msg=session nhi mila!');
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="icon" href="img/logo/admec-fevicon-logo.png" type="image/png" sizes="any">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback</title>
    <!-- Links -->
    <link rel="stylesheet" href="bootstrap-5.0.0-beta1-dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css" />
</head>

<body class="cover">

    <!-- Be Expressive, Be Honest -->
    <!-- Header -->
    <header class="container-fluid p-3 text-center">
        <img src="img/logo/admec-logo-and-text-in-white-2.png" class="img-fluid" alt="ADMEC Multimedia india" />
        <!-- <h1 class="">Lets Make Our Training Better</h1> -->
    </header>

    <!-- Main Form -->
    <main class="container py-4 px-md-5">
        <div class="card myTransparent border-0 mx-auto shadow p-2 px-md-3" style="max-width: 40rem;">
            <div class="card-body">
                <h4 class="card-title mb-4 text-center">
                    <!-- Please help us to serve you better by taking a couple of minutes. -->
                    Great! Glad You are Participating in Feedback Drive!
                </h4>

                <!-- Feedback Form -->
                <form name="feedbackForm" action="process/feedbackProcess.php" method="POST">

                    <!-- Choose Teachers -->
                    <div class="mb-3">
                        <h4 for="" class="card-text text-primary">Teacher Name</h4>
                        <select class="form-select" name="teacherName" required>
                            <!-- Teachers Name Options -->
                            <option value="">Choose One</option>
                            <?php
                            $teacherName = array(
                                array('Mr. Ravi Bhaduria'),
                                array('Mr. Deepak Bhaduria'),
                                array('Mrs. Promila mam'),
                                array('Mr. Nishu sir'),
                                array('Mr. Manish kumar'),
                            );
                            foreach ($teacherName as $teacherName) :
                            ?>
                                <option value="<?php echo $teacherName[0]; ?>">
                                    <?php echo $teacherName[0]; ?>
                                </option>

                            <?php
                            endforeach;
                            ?>
                        </select>
                    </div>

                    <!-- Course Feedback -->
                    <div class="mb-3">
                        <!-- <h4 class="card-text text-primary mb-3">What did you like in the course ?</h4> -->
                        <h4 class="card-text text-primary mb-3">How satisfied were you with our course ?</h4>
                        <div class="row d-grid g-3 ">
                            <!-- course Feedback Options -->
                            <?php
                            $courseFeedback = array(
                                array('1', 'Excellent'),
                                array('2', 'Good'),
                                array('3', 'Neutral'),
                                array('4', 'Poor'),
                                array('5', 'Very Poor'),
                            );
                            foreach ($courseFeedback as $courseFeed) :
                            ?>
                                <div class="col-auto">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="courseRadio" value="<?php echo $courseFeed[1]; ?>" id="courseRadio<?php echo $courseFeed[0]; ?>" required>
                                        <label class="form-check-label" for="courseRadio<?php echo $courseFeed[0]; ?>">
                                            <?php echo $courseFeed[1]; ?>
                                        </label>
                                    </div>
                                </div>

                            <?php
                            endforeach;
                            ?>
                        </div>
                    </div>

                    <!-- Instructor Feedback -->
                    <div class="mb-3">
                        <h4 class="card-text text-primary mb-3">What did you like about the instructor ?</h4>
                        <div class="row d-grid g-3">
                            <?php
                            $instructorFeedback = array(
                                array('1', 'Excellent'),
                                array('2', 'Good'),
                                array('3', 'Neutral'),
                                array('4', 'Poor'),
                                array('5', 'Very Poor'),
                            );
                            foreach ($instructorFeedback as $instructorFeed) :
                            ?>
                                <div class="col-auto">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="instructorRadio" value="<?php echo $instructorFeed[1]; ?>" id="instructorRadio<?php echo $instructorFeed[0]; ?>" required>
                                        <label class="form-check-label" for="instructorRadio<?php echo $instructorFeed[0]; ?>">
                                            <?php echo $instructorFeed[1]; ?>
                                        </label>
                                    </div>

                                </div>
                            <?php
                            endforeach;
                            ?>
                        </div>
                    </div>

                    <!-- Improve Course Feedback -->
                    <div class="mb-3">
                        <h4 class="card-text text-primary mb-3">How could the course be improved ?</h4>
                        <div class="row d-flex g-3">
                            <?php
                            $improveCourseFeedback = array(
                                array('1', 'Real-world Application'),
                                array('2', 'Accent is hard to understad'),
                                array('3', 'Slow down pace'),
                                array('4', 'Speed down pace'),
                            );
                            foreach ($improveCourseFeedback as $improveCourseFeed) :
                            ?>
                                <div class="col-auto">
                                    <input type="checkbox" class="btn-check" name="courseCheck[]" value="<?php echo $improveCourseFeed[1]; ?>" id="btn-check<?php echo $improveCourseFeed[0]; ?>">
                                    <label class="btn btn-outline-dark rounded-pill" for="btn-check<?php echo $improveCourseFeed[0]; ?>">
                                        <?php echo $improveCourseFeed[1]; ?>
                                    </label>
                                </div>

                            <?php
                            endforeach;
                            ?>
                            <div class="col-auto">
                                <button type="button" class="btn btn-outline-dark rounded-pill" id="btn-check5"> I dont have any issue </button>
                            </div>
                        </div>
                    </div>

                    <!-- Spesific Feedback -->
                    <div class="mb-3">
                        <row class="col-auto">
                            <h4 class="card-text text-primary mb-3">If you have specific feedback, please write to us...</h4>
                            <div class="form-floating">
                                <textarea class="form-control" id="floatingTextarea2" name="spesificFeedback" placeholder="Additional comments" style="height: 100px"></textarea>
                                <label for="floatingTextarea2">Additional comments</label>
                            </div>
                        </row>
                    </div>

                    <!-- Submit Form -->
                    <div class="text-end">
                        <button type="submit" class="btn btn-primary text-uppercase w-100">Submit Feedback</button>
                    </div>
                </form>
            </div>
        </div>

    </main>

    <!-- Scripts -->
    <script src="bootstrap-5.0.0-beta1-dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-latest.js"></script>
    <script async src="web.js"></script>
</body>

</html>