<?php
session_start();
require_once '../conf/conf.php';


if ($_FILES["file"]["error"] == UPLOAD_ERR_OK) {
    $uploadDir = './uploads/';
    $tmpName = $_FILES["file"]["tmp_name"];
    $originalFileName = $_FILES["file"]["name"];
    $fileName = uniqid() . '_enrollmentform.' . pathinfo($originalFileName, PATHINFO_EXTENSION);

    $uploadPath = $uploadDir . $fileName;

    if (move_uploaded_file($tmpName, $uploadPath)) {
        echo $uploadPath;

        // Prepare and bind


        // Prepare and bind the INSERT query
        $stmt = $conn->prepare("INSERT INTO tbl_std_docu (userid, eform, trg_admit) VALUES (?, ?, ?)");
        $stmt->bind_param("isi", $userid_val, $eform, $trg_admit);

        // Set values
        $eform = $fileName;
        $trg_admit = 1;
        $userid_val = $userid;

        // Execute statement
        $stmt->execute();

        // Close statement and connection
        $stmt->close();
        $conn->close();
    } else {
        http_response_code(500);
        echo "Error uploading file.";
    }
} else {
    http_response_code(400);
    echo "File upload error: " . $_FILES["file"]["error"];
}
