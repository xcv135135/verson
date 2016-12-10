<?php
	require_once("configs/config.php");
	
	

	if($_REQUEST['account1']!=null){

		$sth = $db->prepare("select Password,email from user where name = :name");
		$sth->bindParam(':name', $_REQUEST['account1']);
		$sth->execute();
		$row = $sth->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_PRIOR);
		$send_mail = $row[1];

		if($row==null){
			echo 0; 
		}
		else{	

			$send_info= "親愛的使用者您好： <br/>
							　
							　您的密碼為： <b>  $row[0] </b>  <br/>

						線上C++練習團隊";


			require_once("./PHPMailer/class.phpmailer.php"); //匯入PHPMailer類別 

			$mail= new PHPMailer(); //建立新物件 
			$mail->IsSMTP(); //設定使用SMTP方式寄信 
			
			$mail->SMTPAuth = true; //設定SMTP需要驗證 
			$mail->SMTPSecure = "ssl"; // Gmail的SMTP主機需要使用SSL連線 
			$mail->Host = "smtp.gmail.com"; //Gamil的SMTP主機 
			$mail->Port = 465; //Gamil的SMTP主機的SMTP埠位為465埠。 
			$mail->CharSet = "utf-8"; //設定郵件編碼 

			$mail->Username = "oh791122@gmail.com"; //設定驗證帳號 
			$mail->Password = "yanjo32013"; //設定驗證密碼 

			$mail->From = $send_mail; //設定寄件者信箱 
			$mail->FromName = "線上C++練習團隊"; //設定寄件者姓名 

			$mail->Subject = "線上C++練習" ; //設定郵件標題 
			$mail->Body = $send_info; //設定郵件內容 
			$mail->IsHTML(true); //設定郵件內容為HTML 
			$mail->AddAddress($send_mail, "線上C++練習系統"); //設定收件者郵件及名稱 

			if(!$mail->Send()){
				echo "Mailer Error: " . $mail->ErrorInfo; 
			}else{
				echo "已將密碼寄至您的信箱。";
			}						
		}	
	}
	
?>