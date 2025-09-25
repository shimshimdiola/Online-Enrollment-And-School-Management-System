<?php
session_start();
require_once '../conf/conf.php';
// Check if the form is submitted via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $sectionName = $_POST['sectionName'];
    $grade = $_POST['grade'];
    $data = $_POST['advicer'];
    $advicer = explode("/", $data);
     $advicer[0]; #fullname
     $advicer[1]; #uid
    $uniqueId = substr(str_shuffle("1234567890"), 0, 5);
    // SQL query to insert data into your database table
    $sql = "INSERT INTO tbl_sec_data (secuid, secname, secadvicer,adviceruid, secgrade) VALUES ('$uniqueId', '$sectionName', '$advicer[0]', '$advicer[1]', '$grade')";

    if ($conn->query($sql) === TRUE) {
        // Data inserted successfully
        echo "Data inserted successfully!";
    } else {
        // Error inserting data
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close connection
    $conn->close();
} else {
    // Redirect or display an error message if the form is not submitted via POST
    echo "Error: Form submission method not allowed.";
}
