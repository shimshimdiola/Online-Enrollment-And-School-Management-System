<?php
// Check if the request is a POST request
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $idnumber = $_POST['idnumber'];
  $userid = rand(10000, 99999);
  // $username = $_POST['username'];
  $password = $_POST['password'];

  // hash pass
  $hashed_password = password_hash($password, PASSWORD_DEFAULT);
  // end hash
  $ip = $_SERVER['SERVER_ADDR'];

  // Get the form data
  $lname = $_POST['lname'];
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $mname = $_POST['mname'];
  $bdate = $_POST['bdate'];
  $etype = $_POST['etype'];
  $genroll = $_POST['genroll'];

  // fullname
  $fullname = $lname . ', ' . $fname . ' ' . $mname[0] . '.';



  // Your database connection code here (e.g., using MySQLi or PDO)
  // Example MySQLi code to insert data into a table
  $mysqli = new mysqli("localhost", "root", "", "oems");
  if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
  }


  ##### Query ####
  $sql_user = "INSERT INTO tbl_user (userid, fullname, username, password, hash, ipadd, utype) VALUES ('$userid', '$fullname', '$idnumber', '$password', '$hashed_password', '$ip', 'student')";
  if ($mysqli->query($sql_user) === TRUE) {
    $sql_std_data = "INSERT INTO tbl_std_data (userid, fname, lname, mname, bdate, etype, genroll) VALUES ('$userid', '$fname', '$lname', '$mname', '$bdate', '$etype', '$genroll')";
    if ($mysqli->query($sql_std_data) === TRUE) {
      echo "Data saved successfully!";
    } else {
      echo "Error: " . $sql_std_data . "<br>" . $mysqli->error;
    }
  } else {
    echo "Error: " . $sql_user . "<br>" . $mysqli->error;
  }





  $mysqli->close();
}
