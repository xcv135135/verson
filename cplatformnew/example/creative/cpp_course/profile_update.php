<?php
	require_once("configs/config.php");


	$sth = $db->prepare("update user set password = :password, email = :mail where id = :id ");
	$sth->bindParam(':id', $_SESSION['id']);
	$sth->bindParam(':password', $_POST['password']    );
	$sth->bindParam(':mail',  $_POST['mail'] );
	$sth->execute();

	header("Location: Profile.php");

?>