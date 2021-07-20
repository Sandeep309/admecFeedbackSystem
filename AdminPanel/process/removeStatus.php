<?php

include('databaseConnect.php');

if ($connect) {
    extract($_POST);

    $getId = $_GET['id'];
    $insertSql = "UPDATE studentfeedback SET status='0' WHERE id='$getId' ";
    mysqli_query($connect, $insertSql);
} else {
    mysqli_connect_error($connect);
}
