<?php
session_start();
require_once '../conf/conf.php';
// Assuming $userid is properly sanitized to prevent SQL injection

$sql = "SELECT COUNT(DISTINCT tbl_load_data.sub) AS subject_count
        FROM tbl_std_enroll
        JOIN tbl_load_data ON tbl_std_enroll.secuid = tbl_load_data.secuid
        JOIN tbl_sec_data ON tbl_std_enroll.secuid = tbl_sec_data.secuid
        WHERE tbl_std_enroll.userid = '$userid'";

// Assuming you are using a database connection object like $conn
$result = $conn->query($sql);

if ($result && $result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $subjectCount = $row['subject_count'];
    echo $subjectCount;
} else {
    echo "";
}

// Close the database connection after use if needed
