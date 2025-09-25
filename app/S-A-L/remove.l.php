<?php
// Check if the request method is POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the uid parameter is set
    if (isset($_POST["uid"])) {
        // Assuming you have a database connection, you can perform the deletion here
        // Replace this with your actual database connection code
        session_start();
        require_once '../conf/conf.php';
        // Escape the uid to prevent SQL injection
        $uid = $conn->real_escape_string($_POST["uid"]);
        echo $uid;

        // SQL to delete a record based on the uid
        $sql = "DELETE FROM tbl_load_data WHERE loaduid = '$uid'";

        if ($conn->query($sql) === TRUE) {
            // If deletion is successful, return a success message
            echo "Student deleted successfully!";
        } else {
            // If there is an error in the deletion process, return an error message
            echo "Error deleting student: " . $conn->error;
        }

        $conn->close();
    } else {
        // If uid parameter is not set, return an error message
        echo "Student ID not provided!";
    }
} else {
    // If the request method is not POST, return an error message
    echo "Invalid request method!";
}
