<?php session_start(); ?>
<?php

include("mysql_connect.inc.php");


$userid =  $_SESSION['username'];

$sql = "SELECT * FROM ideasvae WHERE username = '$userid'";
//$sql = " SELECT * FROM mmm where username = '$id'";
$data=mysql_query($sql);
//if(mysql_num_rows($data)>0)
//{
	
	$r = mysql_fetch_assoc($data);
	  
	  	echo mysql_num_rows($data);
	  
	 
//}

 
// else{

  //   echo $userid ;

 //   }
?>