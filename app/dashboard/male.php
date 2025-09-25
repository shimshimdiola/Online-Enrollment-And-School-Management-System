<?php
session_start();
// Include the database connection file
require_once '../conf/conf.php';

// Your SQL query to fetch data count (e.g., count of users)
$sql = "SELECT COUNT(*) AS count
FROM tbl_std_data
WHERE sex = 'male';
";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $data = $result->fetch_assoc();
    $count = $data['count'];
    echo $count; // Return the count as the response
} else {
    echo "0"; // If no data found, return 0
}

// Close the connection
$conn->close();
