<?php session_start(); ?>
<?php

include("mysql_connect.inc.php");


$userid = $_SESSION['username'];
//$record =  $_POST['record'];

$sql = "SELECT * FROM mindmap WHERE username = '$userid' ORDER BY rightnow DESC";
//$sql = " SELECT * FROM mmm where username = '$id'";
$data=mysql_query($sql);
//if(mysql_num_rows($data)>0)
//{
	
	$r = mysql_fetch_assoc($data);
	  
	  	echo $r['mindmap'];
	  
	 
//}

 
// else{

  //   echo $userid ;

 //   }
?>