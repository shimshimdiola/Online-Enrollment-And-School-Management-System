<?php
session_start();
require_once '../conf/conf.php';
$current_file = basename($_SERVER['PHP_SELF']);
if ($current_file == 'index.php') {
    define('CLASS_SCHED', 'active');
}
$class_sched = defined('CLASS_SCHED') ? CLASS_SCHED: '';
// Set the system user directory
// $_SESSION['sys_user_dir'] = 'faculty';

// Check the system user directory and include the appropriate mas
switch ($_SESSION['sys_user_dir']) {
    case 'admin':
        include_once ADMIN_SETTING;
        break;
    case 'student':
        include_once STD_SETTING;
        break;
    case 'faculty':
        include_once CLASS_SCHEDULE;
        break;
    case 'registrar':
        include_once REG_SETTING;
        break;
    default:
        session_destroy();
        header('Location:' . Root_dir);
        exit;
}
