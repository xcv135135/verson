
<html>
   <head>
      <meta charset="UTF-8">
	 <title>member page</title>
	 
   </head>
   <body>

     <div id="header">
		<div>
			<div id="logo">	
			</div>
			<ul id="navigation">
			</ul>
		</div>
	</div>
	<div id="contents">
			        <div>
				   <div class="body",align="center" >
				   <?php
                      session_start(); 
                      include("mysql_connect.inc.php");
					  echo 'hi, 學生 ' ; 
				      echo $_SESSION['username'];
					  echo '<br>'; 
                      /* echo '<a href="logout.php" color=blue>登出</a>  <br><br>'; */
                      //此判斷為判定觀看此頁有沒有權限
                     //說不定是路人或不相關的使用者
                      //因此要給予排除
                    if($_SESSION['username'] != null)
                  {                   
					 /* echo '<a href="register.php">新增</a>    '; */
                     echo '<a href="update.php">修改</a>    ';
                     echo '<a href="delete.php">刪除</a>  <br><br>';
		            /*  echo '10秒鐘後將自動載入功能頁面';
					 echo '<a href="index2.php">若無反應請按此處</a> ';
					 echo '<meta http-equiv=REFRESH CONTENT=10;url=index2.php>'; */
		                      //將資料庫裡的所有會員資料顯示在畫面上
                     //$sql = "SELECT * FROM mmm";
                     //$result = mysql_query($sql);
                    //while($row = mysql_fetch_row($result))
                        //{
                         //echo "$row[0], 名字(帳號)：$row[1], 電話：$row[3], 地址：$row[4], 備註：$row[5]<br>";
                        //}
                      }
                   else
                {
                     echo '您無權限觀看此頁面!';
                     echo '<meta http-equiv=REFRESH CONTENT=10;url=index.html>';
                 }
                ?>
				</div>
			</div>	
			<div id="footer", style="text-align:center">
		
				
			
	</div>		   
			</div>		
					
	
	
   </body>
</html>