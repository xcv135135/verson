<?php session_start(); ?>
<?php

include("mysql_connect.inc.php");


$userid = $_SESSION['username'];
$record =  $_POST['record'];

$sql = "SELECT * FROM ideasvae WHERE username = '$userid' AND record = '$record'";
//$sql = " SELECT * FROM mmm where username = '$id'";
$data=mysql_query($sql);
//if(mysql_num_rows($data)>0)
//{
	
	$r = mysql_fetch_assoc($data);
	  
	  	echo $r['ideasave'];
	  
	 
//}

 
// else{

  //   echo $userid ;

 //   }
?>