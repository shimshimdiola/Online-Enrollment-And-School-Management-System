<?php
// Assume you have a database connection named $dbConnection
// session_start();
require_once '../conf/conf.php';
// Query to fetch notification count from your database
// Count unread notifications
$query = "SELECT COUNT(*) AS unread_count FROM tbl_notif_std WHERE status = '0'";
$result = $conn->query($query);

if ($result === false) {
    // Query execution failed, handle the error
    echo "Error executing query: " . $conn->error;
} else {
    $row = $result->fetch_assoc();
    $unreadCount = $row['unread_count'];
}

// Close connection
$conn->close();
?>
