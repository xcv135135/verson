<?php
include("mysql_connect.inc.php");
$pseudo ="test";

date_default_timezone_set('Asia/Taipei');
$rightnow =  date("Y-m-d H:i:s");
 
$sql = "insert into savepseudocode (username,rightnow,savepseudo) values ('s1','$rightnow','$pseudo')";

if(mysql_query($sql))
	echo "yes";
else
	 echo "fail";


?>