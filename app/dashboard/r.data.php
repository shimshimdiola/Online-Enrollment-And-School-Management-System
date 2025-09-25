<?php
// Your database connection code here

// Fetch data from your database (example)
session_start();
require_once '../conf/conf.php';

// Initialize variables to store counts
$totalStudents = 0;
$totalFaculty = 0;
$totalRegistrar = 0;

// Count where secgrade is 7
$sqlGrade7 = "SELECT COUNT(*) AS total_grade7 FROM tbl_sec_data WHERE secgrade = 7";
$resultGrade7 = $conn->query($sqlGrade7);
if ($resultGrade7->num_rows > 0) {
    $rowGrade7 = $resultGrade7->fetch_assoc();
    $grade7 = $rowGrade7['total_grade7'];
}

// Count where secgrade is 8
$sqlGrade8 = "SELECT COUNT(*) AS total_grade8 FROM tbl_sec_data WHERE secgrade = 8";
$resultGrade8 = $conn->query($sqlGrade8);
if ($resultGrade8->num_rows > 0) {
    $rowGrade8 = $resultGrade8->fetch_assoc();
    $grade8 = $rowGrade8['total_grade8'];
}

// Count where secgrade is 9
$sqlGrade9 = "SELECT COUNT(*) AS total_grade9 FROM tbl_sec_data WHERE secgrade = 9";
$resultGrade9 = $conn->query($sqlGrade9);
if ($resultGrade9->num_rows > 0) {
    $rowGrade9 = $resultGrade9->fetch_assoc();
    $grade9 = $rowGrade9['total_grade9'];
}

// Count where secgrade is 10
$sqlGrade10 = "SELECT COUNT(*) AS total_grade10 FROM tbl_sec_data WHERE secgrade = 10";
$resultGrade10 = $conn->query($sqlGrade10);
if ($resultGrade10->num_rows > 0) {
    $rowGrade10 = $resultGrade10->fetch_assoc();
    $grade10 = $rowGrade10['total_grade10'];
}

// Count where secgrade is 11
$sqlGrade11 = "SELECT COUNT(*) AS total_grade11 FROM tbl_sec_data WHERE secgrade = 11";
$resultGrade11 = $conn->query($sqlGrade11);
if ($resultGrade11->num_rows > 0) {
    $rowGrade11 = $resultGrade11->fetch_assoc();
    $grade11 = $rowGrade11['total_grade11'];
}

// Count where secgrade is 12
$sqlGrade12 = "SELECT COUNT(*) AS total_grade12 FROM tbl_sec_data WHERE secgrade = 12";
$resultGrade12 = $conn->query($sqlGrade12);
if ($resultGrade12->num_rows > 0) {
    $rowGrade12 = $resultGrade12->fetch_assoc();
    $grade12 = $rowGrade12['total_grade12'];
}

// Store data in an array
$data = [$grade7, $grade8, $grade9, $grade10, $grade11, $grade12];

// Echo data as JSON
echo json_encode($data);

// Close connection
$conn->close();
