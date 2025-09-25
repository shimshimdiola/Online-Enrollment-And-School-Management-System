<?php
session_start();
require_once '../conf/conf.php';


if ($_FILES["file"]["error"] == UPLOAD_ERR_OK) {
    $uploadDir = './uploads/';
    $tmpName = $_FILES["file"]["tmp_name"];
    $originalFileName = $_FILES["file"]["name"];
    $fileName = uniqid() . '_form137.' . pathinfo($originalFileName, PATHINFO_EXTENSION);
    $uploadPath = $uploadDir . $fileName;

    if (move_uploaded_file($tmpName, $uploadPath)) {
        echo $uploadPath;

        // Prepare and bind

        $stmt = $conn->prepare("UPDATE tbl_std_docu SET f137 = ? WHERE userid = ?");
        $stmt->bind_param("si", $imageData, $userid_val);

        // Set values
        $imageData = $fileName;
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
