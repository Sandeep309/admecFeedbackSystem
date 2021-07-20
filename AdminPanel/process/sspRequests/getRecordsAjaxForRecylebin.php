<?php
// include('databaseConnect.php');

/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * Easy set variables
 */
// SQL server connection information
include('./dbDetails.php');

// DB table to use
$table = 'studentfeedback';

// Table's primary key
$primaryKey = 'id';
$columns = array(
    array('db' => 'id', 'dt' => 0),
    array('db' => 'fullname', 'dt' => 1),
    array('db' => 'studentid', 'dt' => 2),
    array('db' => 'email', 'dt' => 3),
    array('db' => 'phonenumber', 'dt' => 4),
    array(
        'db' => 'date',
        'dt' => 5,
        'formatter' => function ($date) {
            return date('d M Y, h:i a', strtotime($date));
        }
    ),
);


$extraCondition = "bin = '1'"; //You SQL where condition

require('./ssp.class.php');

echo json_encode(
    SSP::simple($_GET, $sql_details, $table, $primaryKey, $columns, $extraCondition)
);
