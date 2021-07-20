<?php
if ($_SERVER['REQUEST_METHOD'] === "POST") {
    extract($_POST);
    include('../databaseConnect.php');

    if ($connect) {

        // All Regex Patterns
        $emailPattern = "/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:.[a-zA-Z0-9-]+)*$/";
        $passwordPattern = "/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/"; /* Minimum eight characters, at least one letter and one number: */

        if (
            filter_var($email, FILTER_VALIDATE_EMAIL)
            && preg_match($passwordPattern, $password)
        ) {
            $sql = "SELECT * FROM users WHERE email='$email' && password='$password'";
            $result = mysqli_query($connect, $sql);
            if (mysqli_num_rows($result) == 1) {
                while ($data = mysqli_fetch_assoc($result)) :
                    session_start();
                    $_SESSION['userDetails'] = array();
                    $_SESSION['userDetails'] = array('userName' => $data['name'], 'email' => $data['email']);
                endwhile;
                header('location:../../index.php');
            } else {
                session_start();
                $_SESSION["msgRed"] = "Wrong detail !";
                header('location:../../login.php');
            }
        } else {
            echo  mysqli_error($connect);
        }
    } else {
        echo mysqli_connect_error($connect);
    }
    mysqli_close($connect);
}
