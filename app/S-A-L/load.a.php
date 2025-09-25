<?php



session_start();
require_once '../conf/conf.php';
// Check if the form is submitted via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data

    $sub = explode('/', $subject = $_POST['subject']);
    $sub[0]; #subject name
    $sub[1]; #subject uid
    $fac =  explode('/', $subject = $_POST['faculty']);
    $fac[0]; #faculty name
    $fac[1]; #faculty uid
    $time_s = $_POST['start'];
    $time_e = $_POST['end'];
    $secuid = $_POST['secuid'];

    $daysArray = [];
    $daysOfWeek = ['mon', 'tue', 'wed', 'thu', 'fri'];

    foreach ($daysOfWeek as $day) {
        switch ($day) {
            case 'mon':
            case 'tue':
            case 'wed':
            case 'thu':
            case 'fri':
                if (!empty($_POST[$day])) {
                    $daysArray[] = $_POST[$day];
                }
                break;
            default:
                // Handle unexpected day (optional)
                break;
        }
    }

    $days = implode('/', $daysArray);

    // echo "Selected days: $days";






    $uniqueId = substr(str_shuffle("1234567890"), 0, 5);
    // SQL query to insert data into your database table
    $sql = "INSERT INTO tbl_load_data (secuid, loaduid, sub,subuid, fac, facuid, cstart, cend, days) VALUES 
                                      ('$secuid', '$uniqueId', '$sub[0]', '$sub[1]', '$fac[0]', '$fac[1]', '$time_s', '$time_e', '$days')";

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
