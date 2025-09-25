<?php
session_start();
require_once '../conf/conf.php';
 $subuid = $_POST['subuid'];
 $userid = $_POST['userid'] ;
 $first_q = $_POST['fi_quarter'];
 $second_q = $_POST['se_quarter'];
 $mid_term = $_POST['mi_avg'];
 $third_q = $_POST['th_quarter'];
 $fourth_q = $_POST['fo_quarter'];
 $final = $_POST['fi_avg'];
 $gwa = $_POST['gwa'];


// Check if userid exists in the database
$check_sql = "SELECT * FROM tbl_grade_data WHERE userid = '$userid' AND subuid = '$subuid'";
$result = $conn->query($check_sql); 

if ($result->num_rows > 0) {
        // Update values in the database
        $update_sql = "UPDATE tbl_grade_data SET subuid = '$subuid', first = '$first_q', second = '$second_q', midterm = '$mid_term', third = '$third_q', fourth = '$fourth_q', final = '$final', gwa = '$gwa' WHERE userid = '$userid' AND subuid = '$subuid'";

        if ($conn->query($update_sql) === TRUE) {
                echo "Record updated successfully";
        } else {
                echo "Error updating record: " . $conn->error;
        }
} else {
        // Insert new record into the database
        $insert_sql = "INSERT INTO tbl_grade_data (subuid, userid, first, second, midterm, third, fourth, final, gwa) VALUES ('$subuid', '$userid', '$first_q', '$second_q', '$mid_term', '$third_q', '$fourth_q', '$final', '$gwa')";

        if ($conn->query($insert_sql) === TRUE) {
                echo "New record inserted successfully";
        } else {
                echo "Error inserting record: " . $conn->error;
        }
}

$conn->close();
?>