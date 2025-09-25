<?php
session_start();
require_once '../conf/conf.php';

// Check if the lock data is set to 1
if (isset($_POST['lock']) && $_POST['lock'] == 1) {
    // Assuming userid is available in your session or elsewhere

    // Update the database
    $sql = "UPDATE tbl_std_docu SET trg_lock = 1 WHERE userid = '$userid'";
    if ($conn->query($sql) === TRUE) {
        // Return a success response
        echo json_encode(array('success' => true, 'message' => 'Lock status updated successfully.'));
    } else {
        // Return an error response
        echo json_encode(array('success' => false, 'message' => 'Failed to update lock status: ' . $conn->error));
    }

    // Close connection
    $mysqli->close();
} else {
    // Handle invalid or missing lock status
    echo json_encode(array('success' => false, 'message' => 'Invalid lock status.'));
}
