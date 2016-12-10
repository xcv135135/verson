<?php  session_start(); ?>

<?php
include("mysql_connect.inc.php");

$userid =  $_SESSION['username'];

$number = $_POST['testnumber'];

$query = "SELECT * FROM savepseudocode WHERE no = '$number'";
//echo $query;
$data=mysql_query($query);
$r = mysql_fetch_assoc($data);	  
echo $r['savepseudo'];

?>