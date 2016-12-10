<?php
require_once("configs/config.php");
require_once("configs/config_header.php");

	$sql='select * from user where id = :id';
	$sth = $db->prepare($sql,array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
	$sth->bindParam(':id', $_SESSION['id'] );
	$sth->execute();
	$row = $sth->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_LAST);


	$smarty -> assign("name",$row[1]);
	$smarty -> assign("pw", $row[2]);
	$smarty -> assign("mail",$row[3]);



 	$smarty->display('Profile.tpl');

?>