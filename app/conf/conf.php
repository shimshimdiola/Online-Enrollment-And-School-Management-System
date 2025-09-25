<?php

// base dir  192.168.254.169
define('Root_dir', 'http://localhost/SJNH_OEMS/');
// define('Root_dir', 'http://localhost/SJNH_OEMS/');
// define('Root_dir', 'http://10.5.4.166/SJNH_OEMS/');
// define('Root_dir', 'http://192.168.100.50/SJNH_OEMS/');
define('Document_dir', $_SERVER['DOCUMENT_ROOT']);
define('Base_dir', '/SJNH_OEMS/');

// echo Document_dir;
// END

//Tittle name
define('SYS_TITTLE', 'SJNHS-OEMS');

// page urls
define('Url_dir', Root_dir . 'app/');

// urls
define('Dashboard_dir', './dashboard/');
define('ADMIN_DASHBOARD', './admin.php');
define('STUDENT_DASHBOARD', './student.php');
define('FACULTY_DASHBOARD', './faculty.php');
define('REGISTRAR_DASHBOARD', './registrar.php');
define('Login_dir', Root_dir . 'app/');
// url master list
define('ADMIN_MASTER_LIST', './admin.php');
define('STUDENT_MASTER_LIST', './student.php');
define('FACULTY_MASTER_LIST', './faculty.php');
define('REGISTRAR_MASTER_LIST', './registrar.php');
// url managements
define('ADMIN_USER_MANAGEMENT', './admin.php');
// url log
define('ADMIN_LOG', './admin.php');
// url setting
define('ADMIN_SETTING', './admin.php');
define('REG_SETTING', './reg.php');
define('STD_SETTING', './std.php');
// url e-form
define('STD_EFORM', './std.form.php');
// url admission
define('REG_ADMISSION', './admission.php');
define('REG_REGISTRATION', './registration.php');
// url saloads
define('ADMIN_SAL', './sal.php');
define('REG_SAL', './sal.php');
// urls schedule
define('STD_SDHEDULE', './std.schedule.php');
// url document
define('STD_DOCUMENT', './std.doc.php');
// url notif
define('STD_NOTIF', './std.notif.php');
// url forms
define('STD_E_FORM', './e.form.php');
define('STD_137_FORM', './f.137.php');
define('STD_138_FORM', './f.138.php');
define('STD_moral_FORM', './g.moral.php');
define('STD_PSA_FORM', './psa.php');
define('STD_LOCK_FORM', './lock.docu.php');
// class schedule
define('CLASS_SCHEDULE', './class.schedule.php');
// urls grade
define('STD_GRADE', './std.grade.php');
define('FAC_GRADE', './fac.grade.php');




// url subject
define('REG_SUB', './std.fcty.sub.php');
// sort
define('SORT_ADMIT', Url_dir . 'admission/s.admission.php');
// documents path picker
define('DOCU_PICK', Url_dir . 'documents/uploads/');
// END

// modal enroll
define('MODAl_ENROLL', './modal.enroll.php');
/////////// components dir ADMIN_SETTING

define('Components_dir', Document_dir . Base_dir . 'app/components/');

switch ($_SESSION['sys_user_dir'] ?? null) {
  case 'admin':
    // User name 
    define('Sys_user', $_SESSION['full_name']);
    // end
    define('Top_bar', 'top-bar.php'); // Define the constant
    define('Side_bar', 'side-bar.php'); // Define the constant
    break; // Exit the switch statement
  case 'student':
    // User name 
    define('Sys_user', $_SESSION['full_name']);
    $userid = $_SESSION['userid'];
    // end
    define('Top_bar', 'std-top-bar.php'); // must change in temrm of needed
    define('Side_bar', 'std-side-bar.php'); // must change in temrm of needed
    break; // Exit the switch statement
  case 'faculty':
    // User name 
    define('Sys_user', $_SESSION['full_name']);
    $userid = $_SESSION['userid'];
    // end
    define('Top_bar', 'fac.top-bar.php'); // must change in temrm of needed
    define('Side_bar', 'fac.side-bar.php'); // must change in temrm of needed
    break; // Exit the switch statement
  case 'registrar':
    // User name 
    define('Sys_user', $_SESSION['full_name']);
    // end
    define('Top_bar', 'registrar_top-bar.php'); // must change in temrm of needed
    define('Side_bar', 'registrar-side-bar.php'); // must change in temrm of needed
    break; // Exit the switch statement
  default:
    session_destroy();
    header('location:' . Root_dir);
    exit; // Exit the process
}
// END
// DB



define('DB_SERVER', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'oems');
$conn = new mysqli(DB_SERVER, DB_USER, DB_PASS, DB_NAME) or die(mysqli_connect_error());


// END
