<?php
session_start();
require_once '../conf/conf.php';
$e = $_POST['e'];
$i = $_POST['i'];
$emp = '';
if (isset($e) && ($e == 'eform' || $e == 'f137' || $e == 'f138' || $e == 'gmoral' || $e == 'psa')) {

    $sql = "UPDATE tbl_std_docu SET $e = ? WHERE userid = ?"; // Replace 'your_table_name' and 'column_name' with your actual table and column names
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("si", $emp, $i); // 'si' indicates the data types of the parameters (string, integer)

    // Step 3: Execute the Update Statement
    if ($stmt->execute()) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }

    // Close statement and connection
    $stmt->close();
    $conn->close();
} else {
    echo 'not set';
}
