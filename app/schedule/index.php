<?php
session_start();
require_once '../conf/conf.php';
$current_file = basename($_SERVER['PHP_SELF']);
if ($current_file == 'index.php') {
    define('STD_SDHEDULE_ACTIVE', 'active');
}
$std_schedule_active = defined('STD_SDHEDULE_ACTIVE') ? STD_SDHEDULE_ACTIVE : '';

// Set the system user directory
// $_SESSION['sys_user_dir'] = 'faculty';

// Check the system user directory and include the appropriate dashboard
switch ($_SESSION['sys_user_dir']) {
    case 'admin':
        include_once ADMIN_SAL;
        break;
    case 'student':
        include_once STD_SDHEDULE;
        break;
    case 'faculty':
        include_once FACULTY_DASHBOARD;
        break;
    case 'registrar':
        include_once REG_SAL;
        break;
    default:
        session_destroy();
        header('Location:' . Root_dir);
        exit;
}
