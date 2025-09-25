<?php
session_start();
require_once '../conf/conf.php';


$current_file = basename($_SERVER['PHP_SELF']);
if ($current_file == 'index.php') {
    define('ACTIVE_NOTIF_STD', 'active');
}
$active_std_notif = defined('ACTIVE_NOTIF_STD') ? ACTIVE_NOTIF_STD: '';
// Set the system user directory
// $_SESSION['sys_user_dir'] = 'faculty';

// Check the system user directory and include the appropriate mas
switch ($_SESSION['sys_user_dir']) {
    case 'admin':
        include_once ADMIN_SETTING;
        break;
    case 'student':
        include_once STD_NOTIF;
        break;
    case 'faculty':
        include_once FACULTY_MASTER_LIST;
        break;
    case 'registrar':
        include_once REG_SETTING;
        break;
    default:
        session_destroy();
        header('Location:' . Root_dir);
        exit;
}
