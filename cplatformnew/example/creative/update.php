<html>
   <head>
      <meta charset="UTF-8">
	 <title>Creative Website Template</title>
	 <link rel="stylesheet" href="css/style.css" type="text/css">
   </head>
   <body>

     <div id="header">
		<div>
			<!----- <div id="logo">
				<a href="index.html"><img src="images/logo2.png" alt="LOGO"></a>
			</div>
			<ul id="navigation">
			<li>
			<img src="images/nknu.png" alt="LOGO">	
			</li>
			<img src="images/ncku2_60x50.png" alt="LOGO">	
			<li>
			</li>
			</ul> 
		</div>!------>
	</div>
	<div id="contents">
			        <div>
				   <div class="body">
				  <?php session_start(); ?>
                  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
                  <?php
                     include("mysql_connect.inc.php");
                    if($_SESSION['username'] != null)
                {
                      //將$_SESSION['username']丟給$id
                      //這樣在下SQL語法時才可以給搜尋的值
                     $id = $_SESSION['username'];
                    //若以下$id直接用$_SESSION['username']將無法使用
                   $sql = "SELECT * FROM mmm where username='$id'";
                   $result = mysql_query($sql);
                   $row = mysql_fetch_row($result);
                   echo "<form name=\"form\" method=\"post\" action=\"update_finish.php\">";
                   echo "帳號：<input type=\"text\" name=\"id\" value=\"$row[1]\" />(此項目無法修改) <br>";
                   echo "密碼：<input type=\"password\" name=\"pw\" value=\"$row[2]\" /> <br>";
                   echo "再一次輸入密碼：<input type=\"password\" name=\"pw2\" value=\"$row[2]\" /> <br>";
                   echo "信箱：<input type=\"text\" name=\"email\" value=\"$row[3]\" /> <br>";
                   echo "備註：<textarea name=\"other\" cols=\"45\" rows=\"5\">$row[5]</textarea> <br>";
                   echo "<input type=\"submit\" name=\"button\" value=\"確定\" />";
                   echo "</form>";
                  }
               else
             {
                echo '您無權限觀看此頁面!';
                echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
             }
             ?>
				</div>
			</div>			
			</div>		
					
	
	<div id="footer", style="text-align:center">
		
				
			
	</div>		   
   </body>
</html>