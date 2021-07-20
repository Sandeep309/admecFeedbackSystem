<?php
include('databaseConnect.php');
if ($connect) {
    $resultArray = array();
    $getId = $_GET['id'];
    $sql = "SELECT * FROM studentfeedback WHERE id='$getId' LIMIT 1";
    $result = mysqli_query($connect, $sql);
    if (mysqli_num_rows($result) > 0) {
        while ($data = mysqli_fetch_assoc($result)) {
            array_push($resultArray, $data);
        }
    }
    header('content-type: application/json');
    echo json_encode($resultArray);
} else {
    mysqli_connect_error($connect);
}
