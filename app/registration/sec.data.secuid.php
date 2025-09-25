<?php

// Check if the 'grade' parameter is set in the GET request
if (isset($_GET['section'])) {
    // Get the grade value from the GET request
    session_start();
    require_once '../conf/conf.php';
    $section = $_GET['section'];
    // Construct and execute the SQL query
    $sql = "SELECT * FROM tbl_sec_data WHERE secname = '$section'";
    $result = $conn->query($sql);

    // Check if any rows were returned
    if ($result->num_rows > 0) {
        // Output data of each row
        while ($data = $result->fetch_assoc()) {
            echo  $data['secuid'] ;
        }
    } else {
        echo "0 results";
    }
    $conn->close();
} else {
    // If 'grade' parameter is not set, return an error response
    echo "Error: Grade parameter is missing.";
}
