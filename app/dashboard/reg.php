<?php
session_start();
// Include the database connection file
require_once '../conf/conf.php';

$sql = "SELECT COUNT(*) AS count
        FROM tbl_std_docu AS docu
        LEFT JOIN tbl_std_reg AS reg ON docu.userid = reg.userid
        WHERE reg.userid IS NULL;
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
?>


