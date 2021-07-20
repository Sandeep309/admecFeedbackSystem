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

<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Connection from admecFeedbackDatabase
    $connect = mysqli_connect('localhost', 'root', '', 'admecfeedbackdb')
        or die('ERROR<br><h2>' . mysqli_connect_error() . '</h2>');

    if ($connect) {
        extract($_POST);
        if (!empty($courseCheck)) {
            $selectedCheck = "";
            foreach ($courseCheck as $selected) {
                $selectedCheck .= $selected . ",";
            }
            $selectedCheckValue = $selectedCheck;
        } else {
            $defaultValue = "I dont have any issue";
            $selectedCheckValue = $defaultValue;
        }
        // Fetching Student Current Id
        $sql = "SELECT * FROM studentfeedback ORDER BY id DESC LIMIT 1";
        $result = mysqli_query($connect, $sql);
        if (mysqli_num_rows($result) == 1) {
            while ($data = mysqli_fetch_assoc($result)) :
                $id = $data['id'];
            endwhile;
        }

        // Update Student Feedback Data
        $insertMoreSql = "UPDATE studentfeedback SET teachername='$teacherName',
         coursesatisfaction='$courseRadio', instructersatisfaction='$instructorRadio',
         courseimprovement='$selectedCheckValue', specificfeedback='$spesificFeedback'
         WHERE id = '$id'";

        if (mysqli_query($connect, $insertMoreSql)) {
            header("location:../feedbackThanks.php");
        } else {
            echo  mysqli_error($connect);
        }
    } else {
        echo mysqli_connect_error($connect);
    }
    mysqli_close($connect);
} else {
    header("location:../feedback.php?msg=Something went wrong !");
}
