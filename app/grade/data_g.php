<?php echo $uid = $_GET['uid'];
session_start();
require_once '../conf/conf.php';


// Fetch data from the 'users' table
$sql = "SELECT * FROM tbl_grade_data WHERE userid = '$userid'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Start HTML table
    

    // Output data in table rows
    while ($row = $result->fetch_assoc()) {
     echo   $row['first'];
    }

    // Close HTML table
    echo "</table>";
} else {
    // If no data is found
    echo "No data found";
}




?>


