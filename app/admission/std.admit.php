<?php
// Check if the request is a POST request
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Check if the studentId parameter is set
    if (isset($_POST["studentId"])) {
        session_start();
        require_once '../conf/conf.php';

        // Insert into tbl_std_reg
        $stmtReg = $conn->prepare("INSERT INTO tbl_std_reg (userid) VALUES (?)");
        $stmtReg->bind_param("s", $studentId); // Assuming studentId is a string type
        $studentId = $_POST["studentId"];
        $stmtReg->execute();

        // Insert into tbl_std_notif
        $stmtNotif = $conn->prepare("INSERT INTO tbl_notif_std (userid, msg, msg_f, time) VALUES (?, ?, ?, ?)");
        $stmtNotif->bind_param("ssss", $studentId, $msg, $msg_f, $time); // Assuming studentId and msg are string types
        $studentId = $_POST["studentId"];
        $msg = 'You have been successfully admitted !';
        $msg_f = $_SESSION['sys_user_dir'];
        date_default_timezone_set('Asia/Manila');
        $time =  date('H:i:s A', time());
        $stmtNotif->execute();

        // Check for errors and send response
        if ($stmtReg && $stmtNotif) {
            echo "Data inserted successfully!";
        } else {
            http_response_code(500); // Internal Server Error
            echo "Error: Unable to insert data.";
        }

        // Close statements and database connection
        $stmtReg->close();
        $stmtNotif->close();
        $conn->close();
    } else {
        // Send an error response if studentId parameter is not set
        http_response_code(400); // Bad Request
        echo "Error: Missing studentId parameter.";
    }
} else {
    // Send an error response if the request method is not POST
    http_response_code(405); // Method Not Allowed
    echo "Error: Only POST requests are allowed.";
}
