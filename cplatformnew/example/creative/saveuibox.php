<?php session_start(); ?>
<?php
include("mysql_connect.inc.php");
//$pseudo = $_POST['pseudo'];
$uibox = $_POST['ol'];
//echo $pseudo;
//$ideas = $_POST['text'];
//$record = $_POST['record'];
$user = $_SESSION['username'];
$rightnow = get_Datetime_Now();
$success = "success";
$fail = "fail";
$sql = "insert into uiboxsave (username,rightnow,uibox) values ('$user','$rightnow','$uibox')";
$result = "SELECT * FROM uiboxsave WHERE username = '$user' AND rightnow = '$rightnow'";
	if(mysql_query($sql))
			 { 
			    $data=mysql_query($result);
	            $r = mysql_fetch_assoc($data);
	            //$_SEESION['number'] = $r['no'];
	  	        echo $r['no'];
	  	        //echo $result;
	  
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