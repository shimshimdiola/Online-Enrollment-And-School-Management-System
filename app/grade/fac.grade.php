<?php
$sql = "SELECT * FROM tbl_user WHERE userid = $userid";

$result = $conn->query($sql);

if ($result === false) {
    // Handle the SQL error if the query fails
    echo "MySQL Error: " . $conn->error;
} else {
    // Output the results
    if ($result->num_rows > 0) {
        // Fetch and display each row of data

        $data = $result->fetch_assoc();
        


    } else {
        echo "No results found.";
    }
}

// Close the connection

switch ($data['grade']) {
    case '7':
    case '8':
    case '9':
    case '10':
        include_once './input.junior.php';
        break;
    case '11':
        include_once './input.junior.php';
        break;
    case '12':
        include_once './input.junior.php';
        break;
    default:
        session_destroy();
        header('Location:' . Root_dir);
        exit;
}
?>