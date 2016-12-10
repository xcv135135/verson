<?php
  header("Content-Type:text/html; charset=utf-8");


  require_once("configs/connection.php");

  require './libs/Smarty.class.php';

  $redir_page = "index.php";
  $is_login = false;

  
  if ( !empty($_SESSION['logincheck']) && $_SESSION['username'] != "" ) 
    $is_login = true;









//error handler function
function customError($errno, $errstr, $errfile, $errline)
 { 

 

$error_msg = "";
$error_msg .= "Custom error: [$errno] $errstr";
$error_msg .= "Error on line $errline in $errfile";
$error_msg .= "Ending Script";
  

 date_default_timezone_set('Asia/Taipei');
 $today = date("Y-m-d H:i:s"); 

  $db_host = "localhost";
	$db_name = "cpp";
	$user = "yencw";
	$password = "root";
	$dsn = "mysql:host=".$db_host.";dbname=".$db_name;
	$options = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
	
	$db = new PDO($dsn, $user, $password, $options);

  $str =  $db -> prepare("INSERT INTO error_handler (error_msg , user_id , time ) VALUES (:error_msg , :user_id , :time )");
  $str ->bindParam(":error_msg" , $error_msg );
  $str ->bindParam(":user_id" , $_SESSION['id'] );
  $str ->bindParam(":time" ,  $today );
  $str->execute();

  echo "如無回應，請重新嘗試。";

 }

//set error handler
set_error_handler("customError");




    
  //$smarty->force_compile = true;


?>
