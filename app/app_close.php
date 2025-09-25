<?php
session_start();
require_once './conf/conf.php';
session_destroy();
header('Location:'.Root_dir);
exit;

?>