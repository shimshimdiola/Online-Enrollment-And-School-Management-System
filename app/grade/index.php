<?php
session_start();
require_once '../conf/conf.php';
$current_file = basename($_SERVER['PHP_SELF']);
if ($current_file == 'index.php') {
    define('ACTIVE_GRADE', 'active');
}
$Active_grade = defined('ACTIVE_GRADE') ? ACTIVE_GRADE : '';
// Set the system user directory
// $_SESSION['sys_user_dir'] = 'faculty';

// Check the system user directory and include the appropriate mas
switch ($_SESSION['sys_user_dir']) {
    case 'admin':
        include_once ADMIN_USER_MANAGEMENT;
        break;
    case 'student':
        include_once STD_GRADE;
        break;
    case 'faculty':
        include_once FAC_GRADE;
        break;
    case 'registrar':
        include_once REGISTRAR_MASTER_LIST;
        break;
    default:
        session_destroy();
        header('Location:' . Root_dir);
        exit;
}
