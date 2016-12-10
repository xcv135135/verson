<?php
	//$lifetime =  time() + 60 * 2;
	//session_set_cookie_params($lifetime);

	require_once("configs/config.php");
	
	if( ($_POST['account1'] != null)&&($_POST['pw'] != null) )
	{
		
		$username = $_POST['account1'];
			 
		$sth = $db->prepare("select * from user where name = :name and password = :pass");
		$sth->bindParam(':name', $username);
		$sth->bindParam(':pass', $_POST['pw'] );
		$sth->execute();
		
		$result = $sth->fetch(PDO::FETCH_ASSOC);
		
		if ( $result ) {
		
			$_SESSION['username']=$username;
			$_SESSION['logincheck']=true;

			$sth = $db->prepare("select id from user where name = :name");
			$sth->bindParam(':name', $username );
			$sth->execute();

			$_SESSION['id']= $sth->fetchColumn();
			
			$_SESSION['Ques_id'] = 0;
			//echo $userid;
			//echo $username;

			

			header("Location: main.php");
		}
		else {
			echo "<script>";
			echo "alert(\"帳號密碼欄位有誤!!!\");";
			echo "</script>"; 
		}
	}
	echo "<script>location.href=\"index.php\";</script>";

	//header("Location: index.php");
	
	
?>