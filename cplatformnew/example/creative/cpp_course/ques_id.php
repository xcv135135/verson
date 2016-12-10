<?php
	require_once("configs/config.php");

	$_SESSION['Ques_id'] =  $_POST['Ques_id'];


$sql = "SELECT * FROM collection_question WHERE id = :id";
$rs = $db->prepare($sql,array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
$rs->bindParam(':id', $_SESSION['Ques_id'] );
$rs->execute();
$row = $rs -> fetch() ;

echo $row[2] ;

?>