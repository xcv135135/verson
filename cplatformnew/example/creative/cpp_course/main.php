<?php
require_once("configs/config.php");
require_once("configs/config_header.php");



//$_SESSION['error_tag'] = false;

$_SESSION['hint'] = 0;

$_SESSION['last_error_code'] = 0 ;
//$smarty->force_compile = true;

$smarty->display('main.tpl');
?>