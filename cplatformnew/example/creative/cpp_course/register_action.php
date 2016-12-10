<?php
	require_once("configs/config.php");
	
	$name= $_POST['name1'];
	$password= $_POST['password1'];
	$password2= $_POST['password2'];

	$send_mail= $_POST['mail1'];
	
	



	if( $name != null){


		$sth = $db->prepare("select * from user where name = :name limit 1");
		$sth->bindParam(':name', $name);
		$sth->execute();
		$result = $sth->fetch(PDO::FETCH_ASSOC);
		
		if ($result) {
			echo "<script>";
			echo "alert(\"此帳號有重複!!!\");";
			echo "</script>"; 
			echo "<script>location.href=\"register.php\";</script>";

		} else {


			if( $password != $password2){
				echo "<script>";
				echo "alert(\"密碼不一致!!\");";
				echo "</script>"; 
				echo "<script>location.href=\"register.php\";</script>";
			}
			else{
				$sth = $db->prepare("INSERT INTO user (name, password, email) VALUES (:name, :password, :email)");
				$sth->bindParam(':name', $_POST['name1'] );
				$sth->bindParam(':password',  $_POST['password1'] );	
				$sth->bindParam(':email', $_POST['mail1'] );
				$sth->execute();				
				
				if( !is_dir( "user\\". $name ) ){
					//system("mkdir(user\\". $_SESSION['username'] . "777)" );
					mkdir( "user\\". $name , 777 );
				}
				
				session_destroy();

				echo "<script>";
				echo "alert(\"申請完畢!!!\");";
				echo "</script>"; 
				echo "<script>location.href=\"index.php\";</script>";				
			}


			
		}
	}



?>