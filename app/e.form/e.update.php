<?php
session_start();
require_once '../conf/conf.php';

// define('DB_SERVER', 'localhost');
// define('DB_USER', 'root');
// define('DB_PASS', '');
// define('DB_NAME', 'oems');

// $conn = new mysqli(DB_SERVER, DB_USER, DB_PASS, DB_NAME) or die(mysqli_connect_error());
// session_start();
// define('Sys_user', $_SESSION['full_name']);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
     $lrn = $_POST['lrn'] ?? '';
    $etype = $_POST['etype'] ?? '';
    $glevel = $_POST['glevel'] ?? '';
    $fname = $_POST['fname'] ?? '';
    $lname = $_POST['lname'] ?? '';
    $mname = $_POST['mname'] ?? '';
    $bdate = $_POST['bdate'] ?? '';
    $bplace = $_POST['bplace'] ?? '';
    $sex = $_POST['sex'] ?? '';
    $cstatus = $_POST['cstatus'] ?? '';
    $ipa = $_POST['ipa'] ?? 'N/A';
    $tod = $_POST['tod'] ?? 'N/A';
    $psno = $_POST['psno'] ?? 'N/A';
    $citizenship = $_POST['citizenship'] ?? '';
    $brgy = $_POST['brgy'] ?? '';
    $cmpc = $_POST['cmpc'] ?? '';
    $zcode = $_POST['zcode'] ?? '';
    $email = $_POST['email'] ?? '';
    $mnumber = $_POST['mnumber'] ?? '';
    // father details
    $f_ln = $_POST['f_ln'] ?? '';
    $f_fn = $_POST['f_fn'] ?? '';
    $f_mn = $_POST['f_mn'] ?? '';
    // mother details
    $m_ln = $_POST['m_ln'] ?? '';
    $m_fn = $_POST['m_fn'] ?? '';
    $m_mn = $_POST['m_mn'] ?? '';

    $balik_aral = $_POST['balik_aral'] ?? ''; //balik-aral
    $std_req1 = $_POST['std_req1'] ?? ''; // Last Grade Level Completed
    $std_req2 = $_POST['std_req2'] ?? ''; //Last School Year Completed
    $std_req3 = $_POST['std_req3'] ?? ''; // School Name
    $std_req4 = $_POST['std_req4'] ?? ''; // School ID
    $std_req5 = $_POST['std_req5'] ?? ''; //School Address

    $senoir_high = $_POST['senoir_high'] ?? ''; //senior high
    $sem = $_POST['sem'] ?? '';
    $track = $_POST['track'] ?? '';
    $strand = $_POST['strand'] ?? '';

//   echo  $userid = $_SESSION['userid'];

    $sql = "UPDATE tbl_std_data
        SET
          lrn = '$lrn',
          fname = '$fname',
          lname = '$lname',
          mname = '$mname',
          bdate = '$bdate',
          etype = '$etype',
          glevel = '$glevel',
          bplace = '$bplace',
          sex = '$sex',
          cstatus = '$cstatus',
          ipa = '$ipa',
          tod = '$tod',
          psno = '$psno',
          citizenship = '$citizenship',
          brgy = '$brgy',
          cmpc = '$cmpc',
          zcode = '$zcode',
          email = '$email',
          mnumber = '$mnumber',
          f_ln = '$f_ln',
          f_fn = '$f_fn',
          f_mn = '$f_mn',
          m_ln = '$m_ln',
          m_fn = '$m_fn',
          m_mn = '$m_mn',
          balik_aral = '$balik_aral',
          std_req1 = '$std_req1',
          std_req2 = '$std_req2',
          std_req3 = '$std_req3',
          std_req4 = '$std_req4',
          std_req5 = '$std_req5',
          shigh = '$senoir_high',
          sem = '$sem',
          track = '$track',
          strand = '$strand'
        WHERE
          userid = '$userid'";


     
    // Execute the query
    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }

    // Close the connection
    $conn->close();













}
