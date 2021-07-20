<?php
if ($_SERVER['REQUEST_METHOD'] === "POST") {
    extract($_POST);
    include('../databaseConnect.php');

    if ($connect) {

        // All Regex Patterns
        $fullNamePattern = "/^[a-z]([-']?[a-z]+)*( [a-z]([-']?[a-z]+)*)+$/";
        $emailPattern = "/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:.[a-zA-Z0-9-]+)*$/";
        $passwordPattern = "/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/"; /* Minimum eight characters, at least one letter and one number: */

        if (
            preg_match($fullNamePattern, $name)
            && filter_var($email, FILTER_VALIDATE_EMAIL)
            && preg_match($passwordPattern, $password)
        ) {
            $sql = "SELECT * FROM users WHERE email='$email' && password='$password'";
            $result = mysqli_query($connect, $sql);
            if (mysqli_num_rows($result) == 1) {
                // echo "User Already Exits";
                session_start();
                $_SESSION["msgRed"] = "User Already Exits";
                header('location:../../login.php');
            } else {
                $regester = "INSERT INTO users(name,email,password)
                values('$name','$email','$password')";
                mysqli_query($connect, $regester);
                session_start();
                $_SESSION["msgGreen"] = "Account created sucessfully";
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
