<?php
// Assuming you have established a database connection
session_start();
require_once '../conf/conf.php';

$query = "SELECT tbl_std_enroll.*, tbl_std_data.*, tbl_user.*, tbl_sec_data.*
          FROM tbl_std_enroll
          INNER JOIN tbl_std_data ON tbl_std_enroll.userid = tbl_std_data.userid
          INNER JOIN tbl_user ON tbl_std_enroll.userid = tbl_user.userid
          INNER JOIN tbl_sec_data ON tbl_std_enroll.secuid = tbl_sec_data.secuid";

$result = mysqli_query($conn, $query);

if ($result) {
    // Count the number of rows returned by the query
    $totalStudents = mysqli_num_rows($result);
    echo $totalStudents; // Send the total number of students as the response
} else {
    echo "Error executing the query: " . mysqli_error($connection);
}

// Close the database connection
mysqli_close($conn);
