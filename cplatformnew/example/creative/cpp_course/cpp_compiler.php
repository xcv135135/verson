<?php
require_once("configs/config.php");
require_once("configs/config_header.php");



	
	/*

	$course= $_GET['course'];
	$num = $_GET['Qes'];

	$smarty->assign("choice_Qestion_id", $num);

	$smarty->assign("choice_course_page", $course);


	$sql = "SELECT * FROM question WHERE course = :course AND num = :num  ";

 	$rs = $db->prepare($sql,array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
 	$rs->bindParam(':course', $course );
 	$rs->bindParam(':num', $num );
 	$rs->execute();
 	$row = $rs -> fetch() ;

 	$smarty -> assign( "qestion_describe" , $row[3] );

*/
	


 $smarty->display('cpp_compiler.tpl');

?>