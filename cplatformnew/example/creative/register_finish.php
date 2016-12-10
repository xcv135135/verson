<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("mysql_connect.inc.php");

$id = $_POST['id'];
$pw = $_POST['pw'];
$pw2 = $_POST['pw2'];
/* $telephone = $_POST['telephone'];
$address = $_POST['address']; */
$email = $_POST['email'];
$other = $_POST['other'];
//$class = $_POST['class'];
//判斷帳號密碼是否為空值
//確認密碼輸入的正確性
if($id != null && $pw != null && $pw2 != null && $pw == $pw2)
{
	$sql = " SELECT * FROM user where username = '$id'";
	$row = @mysql_fetch_row( mysql_query($sql) );
	if($row[1] == $id){
		echo "此帳號已申請";
		echo '<meta http-equiv=REFRESH CONTENT=1;url=register.php>';
         }
	else{
		//新增資料進資料庫語法
		$sql = "insert into user (username,password,email,other) values ('$id', '$pw','$email', '$other')";
		if(mysql_query($sql))
			 { 
             $_SESSION['username'] = $id;


             $sql = "SELECT * FROM user WHERE username = '$id'";
             $user_id = mysql_fetch_assoc(mysql_query($sql));
             

             $_SESSION['id'] = $user_id['no'];
             $_SESSION['logincheck']=true;

			 echo '註冊成功!';
			 echo '<meta http-equiv=REFRESH CONTENT=3;url=nestable.php>';
			
			 }
		else
		{
			 echo '新增失敗!';
			echo '<meta http-equiv=REFRESH CONTENT=1;url=index.php>';
    }    } 
}
else
{
    echo '請重新輸入';
      echo '<meta http-equiv=REFRESH CONTENT=2;url=register.php>';
}
?>