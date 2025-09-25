<?php
session_start();
require_once '../conf/conf.php';
$subject = $_POST['subject'];
$grade = $_POST['grade'];
$uniqueId = substr(str_shuffle("1234567890"), 0, 5);

$sql = "INSERT INTO tbl_sub_data (subuid, sub, subg) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);

// Bind parameters to the statement
$stmt->bind_param("isi", $uniqueId, $subject, $grade);

// Execute the statement
$stmt->execute();

// Check if the insertion was successful
if ($stmt->affected_rows > 0) {
    echo "Record inserted successfully.";
} else {
    echo "Error inserting record: " . $conn->error;
}

// Close the statement and connection
$stmt->close();
$conn->close();
