<?php
session_start();
require_once '../conf/conf.php';
// echo $userid;
$sql = "SELECT DISTINCT tbl_grade_data.*, tbl_load_data.*
        FROM tbl_grade_data 
        JOIN tbl_load_data  ON tbl_load_data.loaduid = tbl_grade_data.subuid
        WHERE tbl_grade_data.userid = '$userid'";

$result = $conn->query($sql);
$totalGwa = 0;
if ($result === false) {
    echo "Error executing query: " . $conn->error;
} else {
    if ($result->num_rows > 0) {
        $totalGwa = 0;
        $countGwa = 0;

        while ($data = $result->fetch_assoc()) {
            $gwa = $data['gwa'];
            // Add the value of $gwa to the total
            $totalGwa += $gwa;
            // Increment the counter for each 'gwa' value fetched
            $countGwa++;
        }

        // Check if there are any 'gwa' values to avoid division by zero
        if ($countGwa > 0) {
            // Calculate and display the average
            $averageGwa = $totalGwa / $countGwa;
            echo $averageGwa;
        } else {
            echo "No 'gwa' values found.";
        }
    } else {
        echo '0';
    }
}


// Close the database connection after use if needed
