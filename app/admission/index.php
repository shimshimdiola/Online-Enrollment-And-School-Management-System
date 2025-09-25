<?php
session_start();
require_once '../conf/conf.php';
$current_file = basename($_SERVER['PHP_SELF']);
if ($current_file == 'index.php') {
    define('ADMISSION_ACTIVE', 'active');
}
$Admission_active = defined('ADMISSION_ACTIVE') ? ADMISSION_ACTIVE : '';

// Set the system user directory
// $_SESSION['sys_user_dir'] = 'faculty';

// Check the system user directory and include the appropriate dashboard
switch ($_SESSION['sys_user_dir']) {
    case 'admin':
        include_once REG_ADMISSION;
        break;
    case 'student': 
        include_once STUDENT_DASHBOARD;
        break;
    case 'faculty':
        include_once FACULTY_DASHBOARD;
        break;
    case 'registrar':
        include_once REG_ADMISSION;
        break;
    default:
        session_destroy();
        header('Location:' . Root_dir);
        exit;
}
