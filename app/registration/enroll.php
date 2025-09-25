<?php
// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Start a session (only if needed)
    session_start();

    // Include your database configuration file
    require_once '../conf/conf.php';

    // Get form data
    $userid = $_POST['userid'];
    $reg_grade = $_POST['reg_grade'];
    $select_grade = $_POST['select_grade'];
    $sec_uid = $_POST['sec_uid'];

    // Prepare and bind the main insert query
    $stmtEnroll = $conn->prepare("INSERT INTO tbl_std_enroll (userid, secuid, grade) VALUES (?, ?, ?)");
    $stmtEnroll->bind_param("sss", $userid, $sec_uid, $reg_grade); // Assuming userid, sec_uid, and reg_grade are string types

    // Execute the main insert query
    if ($stmtEnroll->execute()) {
        echo "successfully inrolled";

        // Prepare and bind the notification insert query
        $stmtNotif = $conn->prepare("INSERT INTO tbl_notif_std (userid, msg, msg_f, time) VALUES (?, ?, ?, ?)");
        $stmtNotif->bind_param("ssss", $userid, $msg, $msg_f, $time); // Assuming userid, msg, and msg_f are string types
        $msg = 'You have successfully enrolled!';
        date_default_timezone_set('Asia/Manila');
        $time =  date('H:i:s A', time());
        $msg_f = $_SESSION['sys_user_dir'];

        // Execute the notification insert query
        if ($stmtNotif->execute()) {
            // echo "Notification inserted successfully";
        } else {
            echo "Error inserting notification: " . $stmtNotif->error;
        }

        // Close the notification prepared statement
        $stmtNotif->close();
    } else {
        echo "Error inserting record: " . $stmtEnroll->error;
    }

    // Close the main prepared statement and the connection
    $stmtEnroll->close();
    $conn->close();
} else {
    echo "Form not submitted or invalid request.";
}
