<?php
	require_once("configs/config.php");

 	$code_str = $_POST["code_str"];
	date_default_timezone_set('Asia/Taipei');
    $current_time = date("Y-m-d H:i:s");


	$sth = $db->prepare("INSERT INTO collection_submit_ans (user_id , ques , code , time )VALUES (:user_id , :ques , :code , :time )");
	$sth->bindParam(':user_id', $_SESSION['id'] );
	$sth->bindParam(':ques', $_SESSION['Ques_id'] );	
	$sth->bindParam(':code', $code_str );
	$sth->bindParam(':time',  $current_time   );

	echo $sth->execute();




	//echo "程式碼提交成功!";
			
		



?>
