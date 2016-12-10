<?php
include("mysql_connect.inc.php");
$pseudo = $_POST['pseudo'];
//echo $pseudo;
//$ideas = $_POST['text'];
//$record = $_POST['record'];
$user = $_SESSION['username'];
$rightnow = get_Datetime_Now();
$success = "success";
$fail = "fail";
$sql = "insert into savepseudocode (username,rightnow,savepseudo) values ('$user','$rightnow','$pseudo')";

	if(mysql_query($sql))
			 { 
			
				//echo "success";
			 }
		else
			 echo $fail;

function get_Datetime_Now() {
    //$tz_object = new DateTimeZone('Brazil/East');
    //date_default_timezone_set('Brazil/East');
    //$datetime = new DateTime();
    //$datetime->setTimezone($tz_object);
    date_default_timezone_set('Asia/Taipei');
    return  date("Y-m-d H:i:s");
}

?>