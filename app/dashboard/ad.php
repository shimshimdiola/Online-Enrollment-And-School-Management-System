<?php

session_start();
// Include the database connection file
require_once '../conf/conf.php';

// Initialize count variable
$count = 0;

// Prepare the SQL query with a prepared statement
$sql = "SELECT COUNT(*) AS count FROM tbl_std_reg AS reg
        LEFT JOIN tbl_std_enroll AS enroll ON reg.userid = enroll.userid
        WHERE enroll.userid IS NULL";

$stmt = $conn->prepare($sql);
if ($stmt) {
    // Execute the prepared statement
    $stmt->execute();

    // Bind the result variables
    $stmt->bind_result($count);

    // Fetch the result
    $stmt->fetch();

    // Close the statement
    $stmt->close();
}

// Return the count as the response
echo $count;

// Close the connection
$conn->close();
