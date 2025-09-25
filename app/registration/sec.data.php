<?php

// Check if the 'grade' parameter is set in the GET request
if (isset($_GET['grade'])) {
    // Get the grade value from the GET request
    session_start();
require_once '../conf/conf.php';
    $grade = $_GET['grade'];

    // Perform any processing based on the grade value
    // For example, you can fetch data from a database or perform calculations

    // Here, we'll just return a simple response with the received grade value

// Construct and execute the SQL query
$sql = "SELECT * FROM tbl_sec_data WHERE secgrade = $grade";
$result = $conn->query($sql);

// Check if any rows were returned
if ($result->num_rows > 0) {
  // Output data of each row
  while($data = $result->fetch_assoc()) {
            echo '<option value="" >Select section</option>';
            echo '<option class=" text-capitalize " >' . $data['secname'] . '</option>';
  }
} else {
  echo "0 results";
}

// Close the connection
$conn->close();



    // for ($i=0; $i < $grade; $i++) {
    //     $rand = rand();
    //  echo   $response =  '<option>'. $rand.'</option>';
    // }

    // Send the response back to the client (JavaScript)
} else {
    // If 'grade' parameter is not set, return an error response
    echo "Error: Grade parameter is missing.";
}
