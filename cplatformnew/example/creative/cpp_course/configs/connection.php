<?php
	$db_host = "localhost";
	$db_name = "cpp";
	$user = "yencw";
	$password = "root";
	$dsn = "mysql:host=".$db_host.";dbname=".$db_name;
	$options = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
	
	$db = new PDO($dsn, $user, $password, $options);



	


	session_start();
?>
