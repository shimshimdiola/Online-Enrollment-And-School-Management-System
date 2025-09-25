<?php
session_start();
require_once '../conf/conf.php';
// Query to select data where facuid = $userid
$sql = "SELECT * FROM tbl_load_data WHERE facuid = $userid";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $uniqueSubs = array(); // Array to store unique "sub" values
    // Loop through each row
    while ($row = $result->fetch_assoc()) {
        $sub = $row["sub"];
        // Check if the "sub" value is not already in the array
        if (!in_array($sub, $uniqueSubs)) {
            $uniqueSubs[] = $sub; // Add the unique "sub" value to the array
        }
    }
    // Count the number of unique "sub" values
    $numUniqueSubs = count($uniqueSubs);
    echo $numUniqueSubs;
} else {
    echo "0 results";
}
$conn->close();
