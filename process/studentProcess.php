
<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    // Connection from admecFeedbackDatabase
    $connect = mysqli_connect('localhost', 'root', '', 'admecfeedbackdb')
        or die('ERROR<br><h2>' . mysqli_connect_error() . '</h2>');

    if ($connect) {
        extract($_POST);

        // All Regex Patterns
        $fullNamePattern = "/^[a-z]([-']?[a-z]+)*( [a-z]([-']?[a-z]+)*)+$/";
        $studentIdPattern = "/^[a-zA-Z]{2}\/[a-zA-Z]{2}\/[a-zA-Z]{2,}\/[0-9-]{5}\/[0-9]{2}$/";
        $emailPattern = "/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:.[a-zA-Z0-9-]+)*$/";
        $phoneNumberPattern = "/^([0|\+[0-9]{1,5})?([7-9][0-9]{9})$/";

        if (
            preg_match($fullNamePattern, $fullName)
            && preg_match($studentIdPattern, $studentId)
            && filter_var($email, FILTER_VALIDATE_EMAIL)
            && preg_match($phoneNumberPattern, $phoneNumber)
        ) {
            $insertSql = "INSERT INTO studentfeedback(fullname,studentid,email,phonenumber)
            VALUES('$fullName','$studentId','$email','$phoneNumber')";

            if (mysqli_query($connect, $insertSql)) {

                $_SESSION['items'] = array('fullname' => $fullName, 'email' => $email);
                header("location:../feedback.php");
            } else {
                echo  mysqli_error($connect);
            }
        } else {
            echo  mysqli_error($connect);
        }
    } else {
        echo mysqli_connect_error($connect);
    }
    mysqli_close($connect);
} else {
    header("location:../index.html?msg=Something went wrong !");
}
