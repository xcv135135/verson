<?php
	require_once("configs/config.php");
	session_destroy();
	
	header("Location: index.php");
	headers_sent();
?>