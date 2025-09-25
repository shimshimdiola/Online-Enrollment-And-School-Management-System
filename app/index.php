<?php
session_start();
require_once './conf/conf.php';
// Set the system user directory
// $_SESSION['sys_user_dir'] = 'faculty';

// Check the system user directory and include the appropriate dashboard
switch ($_SESSION['sys_user_dir']) {
    case 'admin':
        header('location:'.Dashboard_dir);
        break;
    case 'student':
        header('location:'.Dashboard_dir);
        break;
    case 'faculty':
        header('location:'.Dashboard_dir);
        break;
        case 'registrar':
        header('location:'.Dashboard_dir);
        break;
    default:
        session_destroy();
        header('Location:'.Root_dir);
        exit;
}
?>