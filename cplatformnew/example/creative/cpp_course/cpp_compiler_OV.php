<?php

	require_once("configs/config.php");
	require_once("configs/config_header.php");


	$_SESSION['Ques_id'] = 0;
	

	if( !isset($_SESSION['hint']))
		$_SESSION['hint'] = 0;

	if( !isset($_SESSION['last_error_code']))
		$_SESSION['last_error_code'] = 0 ;






	$smarty->display('cpp_compiler_OV.tpl');

?>