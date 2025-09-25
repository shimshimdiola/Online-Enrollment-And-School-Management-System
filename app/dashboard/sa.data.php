<?php
// Your database connection code here

session_start();
require_once '../conf/conf.php';

// Initialize variables to store counts
$totalStudents = 0;
$totalFaculty = 0;
$totalRegistrar = 0;

// Count where utype is 'student'
$sqlGrade7 = "SELECT COUNT(*) AS total_students FROM tbl_user WHERE utype = 'student'";
$resultGrade7 = $conn->query($sqlGrade7);
if ($resultGrade7->num_rows > 0) {
    $rowGrade7 = $resultGrade7->fetch_assoc();
    $totalStudents = $rowGrade7['total_students'];
}

// Count where utype is 'faculty'
$sqlGrade8 = "SELECT COUNT(*) AS total_faculty FROM tbl_user WHERE utype = 'faculty'";
$resultGrade8 = $conn->query($sqlGrade8);
if ($resultGrade8->num_rows > 0) {
    $rowGrade8 = $resultGrade8->fetch_assoc();
    $totalFaculty = $rowGrade8['total_faculty'];
}

// Count where utype is 'registrar'
$sqlGrade9 = "SELECT COUNT(*) AS total_registrar FROM tbl_user WHERE utype = 'registrar'";
$resultGrade9 = $conn->query($sqlGrade9);
if ($resultGrade9->num_rows > 0) {
    $rowGrade9 = $resultGrade9->fetch_assoc();
    $totalRegistrar = $rowGrade9['total_registrar'];
}

// Store data in an array
$data = [$totalStudents, $totalFaculty, $totalRegistrar];

// Echo data as JSON
echo json_encode($data);

// Close connection
$conn->close();
