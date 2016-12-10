<?php
	require_once("configs/config.php");

	$SE1 = $_POST['user_SE1'];
	$SE2 = $_POST['user_SE2'];
	$submit_code_id = $_POST['submit_code_id'];
	$first_error_code = $_POST['error_code'];



	//echo  $SE1. "  " . $SE2 ."   ".  $submit_code_id . "  ".$first_error_code ;

	date_default_timezone_set('Asia/Taipei');
    $today = date("Y-m-d H:i:s"); 

	$sth = $db->prepare("INSERT INTO collection_se (submit_code_id, se1, se2, error_code, time) VALUES (:submit_code_id, :se1, :se2, :error_code,  :time)");
	$sth->bindParam(':submit_code_id' , $submit_code_id );
	$sth->bindParam(':se1', $SE1	);
	$sth->bindParam(':se2', $SE2	);
	$sth->bindParam(':error_code', $first_error_code );

	$sth->bindParam(':time', $today	);

	echo $sth->execute() ;


	
	//header( "Location: cpp_compiler_OV.php?");

?>