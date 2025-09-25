<?php
session_start();
require_once '../conf/conf.php';
$current_file = basename($_SERVER['PHP_SELF']);
if ($current_file == 'index.php') {
    define('ACTIVE_MASTER_LIST', 'active');
}
$Active_Master_List = defined('ACTIVE_MASTER_LIST') ? ACTIVE_MASTER_LIST: '';
// Set the system user directory
// $_SESSION['sys_user_dir'] = 'faculty';

// Check the system user directory and include the appropriate mas
switch ($_SESSION['sys_user_dir']) {
case 'admin':
include_once ADMIN_MASTER_LIST;
break;
case 'student':
include_once STUDENT_MASTER_LIST;
break;
case 'faculty':
include_once FACULTY_MASTER_LIST;
break;
case 'registrar':
include_once REGISTRAR_MASTER_LIST;
break;
default:
session_destroy();
header('Location:'.Root_dir);
exit;
}
?>