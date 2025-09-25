<?php
session_start();
require_once '../conf/conf.php'; // Include your database configuration file

// Check if the form is submitted via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST['name'];
    $position = $_POST['position'];
    $grade = $_POST['grade'];
    $password = $_POST['password'];
    $username = $_POST['username'];

    // Hash the password
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    // user id
    $uniqueId = substr(str_shuffle("1234567890"), 0, 5);
    echo $uniqueId;
    // SQL query to insert data
    $sql = "INSERT INTO tbl_user (fullname, userid, username, password, hash, utype, grade) VALUES ('$name', '$uniqueId', '$username', '$password', '$hashedPassword', '$position', '$grade')";

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
