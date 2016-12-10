<?php session_start(); ?>

<?php
include("mysql_connect.inc.php");
$user = $_SESSION['username'];
$mindmap = $_POST['mindmap'];
$success = "success";
$fail = "fail";
$sql = "insert into mindmap (username,mindmap) values ('$user','$mindmap')";

	if(mysql_query($sql))
			 { 
			
				echo $mindmap;
			 }
		else
			 echo $fail;



//判斷帳號密碼是否為空值
//確認密碼輸入的正確性
/* if($id != null && $pw != null && $pw2 != null && $pw == $pw2)
{
	$sql = " SELECT * FROM mmm where username = '$id'";
	$row = @mysql_fetch_row( mysql_query($sql) );
	if($row[1] == $id){
		echo "此帳號已申請";
		echo '<meta http-equiv=REFRESH CONTENT=1;url=register.php>';
         }
	else{
		//新增資料進資料庫語法
		$sql = "insert into mmm (username, password, telephone, address, other) values ('$id', '$pw', '$telephone', '$address', '$other')";
		if(mysql_query($sql))
			 { 
			 echo '註冊成功!';
			 echo '<meta http-equiv=REFRESH CONTENT=1;url=member.php>';
			 }
		else
			 echo '新增失敗!';
    }     
}
else
{
    echo '請重新輸入';
      echo '<meta http-equiv=REFRESH CONTENT=2;url=register.php>';
} */
?>