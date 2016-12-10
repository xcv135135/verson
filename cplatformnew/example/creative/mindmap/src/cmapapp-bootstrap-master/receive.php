<?php
//echo $_POST["text"];
include("mysql_connect.inc.php");
//$user = $_POST['user'];
$ideas = $_POST['text'];
$record = $_POST['record'];
//$username = $_SESSION['username'];
//$getpseudo = $_POST['getpseudo'];
$rightnow = get_Datetime_Now();
//echo $rightnow;
$success = "success";
$fail = "fail";
$sql = "insert into ideasvae (username,ideasave,record,rightnow) values ('s1','$ideas','$record','$rightnow')";

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