<?php session_start(); 
if($_SESSION['student_id'] == Null)
{
	//echo "不正常進入網頁，請重新登入！";
	//echo '<meta http-equiv=REFRESH CONTENT=1;url="http://140.116.39.112/VT/index.php">';
}
	

	$my_month= date('m',(time()+8*3600));
	$my_date= date('d',(time()+8*3600));
	$my_hour= date('H',(time()+8*3600));
	$my_min= date('i',(time()+8*3600));
	$my_sec= date('s',(time()+8*3600));
						
	//date('Y,m,d,H,i,s',(time()+8*3600));



?>
<title>物件導向課後教材</title>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<body bgcolor="#336699" text="#ffffff" link="#000000" alink="#000000" vlink="#FFFFFF" >

<center>
<font face="Verdana, Helvetica, sans-serif" size=3>
<a id = "t_title"><b>[繼承]</b></a>
</font>
<p>


<table border=0 cellpadding=5 cellspacing=0 width=85% height=85%>
  <tr>
    <td width=25% bgcolor="#99bbcc" align=left>

	<font face="Arial, sans-serif" size=2 color="#000000">	
	
	<input type="button" onclick="self.location.href='logout.php'" value="登出">	




<div id="Left_TITLE">
<!--<a id = "title_0"><h2>[繼承]</h2></a>-->
<ol>
<li id="title_1">[<u onclick="ClcikTo_p2()">為什麼要使用物件導向程式設計？</u>]<br><br><br>
<li id="title_2">[<u onclick="ClcikTo_p3()">什麼是物件與類別？</u>]<br><br><br>
<li id="title_3">[<u onclick="ClcikTo_p4()">類別的定義方法</u>]<br><br><br>
<li id="title_4">[<u onclick="ClcikTo_p5()">成員的存取：「私有區與公有區」</u>]<br><br><br>

<li id="title_5"><u onclick="ClcikTo_p6()">[<u >繼承</u>]</u><br><br><br>
<li id="title_6">[<u onclick="ClcikTo_p7()">程式範例</u>]<br><br><br>
</ol>

</div>
	</font>

 <br><br><br><br><br><br><br><br><br>
現在時間：
<script src="embed.js"></script>
<script type="text/javascript" language="JavaScript">
obj=new Object;obj.clockfile="5005-black.swf";obj.TimeZone="CCT";obj.width=120;obj.height=40;obj.wmode="transparent";showClock(obj);</script>

    </td>
    <td bgcolor="#ffffff"  valign=top >

	
	<font face="Arial, sans-serif" size=2 color="#000000">
				
		<div id="flashContent" > 
		
					
					
			<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="700" height="525" id="P6" align="middle">
				<param name="movie" value="p1.swf" />
				<param name="quality" value="high" />
				<param name="bgcolor" value="#ffffff" />
				<param name="play" value="true" />
				<param name="loop" value="true" />
				<param name="wmode" value="window" />
				<param name="scale" value="showall" />
				<param name="menu" value="true" />
				<param name="devicefont" value="false" />
				<param name="salign" value="" />
				<param name="allowScriptAccess" value="sameDomain" />
				<!--[if !IE]>-->
				<object type="application/x-shockwave-flash" data="p1.swf" width="700" height="525">
					<param id="swff2" name="movie" value="p1.swf" />
					<param name="quality" value="high" />
					<param name="bgcolor" value="#ffffff" />
					<param name="play" value="true" />
					<param name="loop" value="true" />
					<param name="wmode" value="window" />
					<param name="scale" value="showall" />
					<param name="menu" value="true" />
					<param name="devicefont" value="false" />
					<param name="salign" value="" />
					<param name="allowScriptAccess" value="sameDomain" />
				<!--<![endif]-->
					<a href="http://www.adobe.com/go/getflash">
						<img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="取得 Adobe Flash 播放程式" />
					</a>
				<!--[if !IE]>-->
				</object>
				<!--<![endif]-->
			</object>
		</div>
		
		
			<!-- SwfObject -->
			<script type="text/javascript" src="swfobject.js"></script>
			
			<!-- SwfObject + Dewplayer -->
			<script type="text/javascript">
			var flashvars = {
			  mp3: "mp3/test1.mp3"
			};
			var params = {
			  wmode: "transparent"
			};
			var attributes = {
			  id: "dewplayer"
			};
			swfobject.embedSWF("dewplayer.swf", "dewplayer_content", "200", "20", "9.0.0", false, flashvars, params, attributes);
			</script>
		
		<div id="flash_mp3">
			<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash">
			<param name="movie" value="dewplayer.swf" />
			<!--<param name="flashvars" value="mp3=mp/P2_0.mp3&javascript=on  &amp;autostart=1" />-->
			<param name="wmode" value="transparent" />
			</object>
		
		</div>
		
	


	
	</font>    
	<br>

 <input type="button" onclick="Previous_Page( )" value="上一頁"> &nbsp&nbsp&nbsp;
 <input id="Next" type="button" onclick="Next_Page( )" value="下一頁">	&nbsp&nbsp&nbsp;
 <input id="Replay" type="button" onclick="RePlay_mp3()" value="重播？" disabled="disabled">

 &nbsp&nbsp&nbsp &nbsp&nbsp&nbsp  &nbsp&nbsp&nbsp  &nbsp&nbsp&nbsp &nbsp&nbsp&nbsp;


<script src="embed.js"></script>
<script type="text/javascript" language="JavaScript">

obj=new Object;
obj.clockfile="9002j-orange.swf";
obj.TimeZone="CCT";
obj.width=432;
obj.height=27;
obj.From="2012,"+<?=$my_month?>+","+<?=$my_date?>+","+<?=$my_hour?>+","+<?=$my_min?>+","+<?=$my_sec?>;
obj.Title="%E6%82%A8%E4%BD%BF%E7%94%A8%E4%BA%86%E5%A4%9A%E4%B9%85%3A";obj.wmode="transparent";showClock(obj);

</script>



 
 
</td>


</table>





 <script type="text/javascript" src="jquery-1.4.2.js"></script>
 <script type="text/javascript" src="json2.js"></script>
 <script language="JavaScript" type="text/JavaScript"> 

 var page=1;  
 var turn=0;

 var page_flag = new Array(60);  //定義page flag，當第i個page還尚未讀過，flag為0
								 //若已經讀取過，flag為1
 for(i=2;i<=59;i++)		//將page_flag陣列全部初始值為0，未讀取
 {
	page_flag[i] = 0;
 }
 page_flag[1] = 1; //登入頁面就直接顯示page 1 ，所以直接定義page 1為已讀取。

 
 
 function LeftTitle_change_p1()
 {
				//左邊標題區的變化，完整版
				document.getElementById('t_title').innerHTML='<b>[物件與類別]</b>';
			  	document.getElementById('title_1').innerHTML='[<u onclick="ClcikTo_p2()">為什麼要使用物件導向程式設計？</u>]<br><br><br>';
				document.getElementById('title_2').innerHTML='[<u onclick="ClcikTo_p3()">什麼是物件與類別？</u>]<br><br><br>';
				document.getElementById('title_3').innerHTML='[<u onclick="ClcikTo_p4()">類別的定義方法</u>]<br><br><br>';
				document.getElementById('title_4').innerHTML='[<u onclick="ClcikTo_p5()">成員的存取：「私有區與公有區」</u>]<br><br><br>';	
				document.getElementById('title_5').innerHTML='[<u onclick="ClcikTo_p6()">繼承</u>]<br><br><br>';
				document.getElementById('title_6').innerHTML='[<u onclick="ClcikTo_p7()">程式範例</u>]<br><br><br>';	
 /*
  		// 如果flag 1~20皆舉旗了，就顯示完整功能的「左標題區」
		if(page_flag[1] ==1 && page_flag[2] ==1 &&
		   page_flag[3] ==1 && page_flag[4] ==1 &&
		   page_flag[5] ==1 && page_flag[6] ==1 &&
		   page_flag[7] ==1 && page_flag[8] ==1 &&
		   page_flag[9] ==1 && page_flag[10] ==1 &&
		   page_flag[11] ==1 && page_flag[12] ==1 &&
		   page_flag[13] ==1 && page_flag[14] ==1 &&
		   page_flag[15] ==1 && page_flag[16] ==1 &&
		   page_flag[17] ==1 && page_flag[18] ==1 &&
		   page_flag[19] ==1 && page_flag[20] ==1 	   )
		   {
				//左邊標題區的變化，完整版
				document.getElementById('t_title').innerHTML='<b>[物件與類別]</b>';
			  	document.getElementById('title_1').innerHTML='[<u onclick="ClcikTo_p2()">為什麼要使用物件導向程式設計？</u>]<br><br><br>';
				document.getElementById('title_2').innerHTML='[<u onclick="ClcikTo_p3()">什麼是物件與類別？</u>]<br><br><br>';
				document.getElementById('title_3').innerHTML='[<u onclick="ClcikTo_p4()">類別的定義方法</u>]<br><br><br>';
				document.getElementById('title_4').innerHTML='[<u onclick="ClcikTo_p5()">成員的存取：「私有區與公有區」</u>]<br><br><br>';	
				document.getElementById('title_5').innerHTML='[<u onclick="ClcikTo_p6()">繼承</u>]<br><br><br>';
				document.getElementById('title_6').innerHTML='[<u onclick="ClcikTo_p7()">程式範例</u>]<br><br><br>';				
			}
		// 如果flag 1~14皆舉旗了，就顯示 缺少click to p5功能的「左標題區」			
		else if(page_flag[1] ==1 && page_flag[2] ==1 &&
				page_flag[3] ==1 && page_flag[4] ==1 &&
		        page_flag[5] ==1 && page_flag[6] ==1 &&
				page_flag[7] ==1 && page_flag[8] ==1 &&
				page_flag[9] ==1 && page_flag[10] ==1 &&
				page_flag[11] ==1 && page_flag[12] ==1 &&
				page_flag[13] ==1 && page_flag[14] ==1      )
			{
				//左邊標題區的變化，p5不能按
			  	document.getElementById('title_1').innerHTML='[<u onclick="ClcikTo_p2()">為什麼要使用物件導向程式設計？</u>]<br><br><br>';
				document.getElementById('title_2').innerHTML='[<u onclick="ClcikTo_p3()">什麼是物件與類別？</u>]<br><br><br>';
				document.getElementById('title_3').innerHTML='[<u onclick="ClcikTo_p4()">類別的定義方法</u>]<br><br><br>';
				document.getElementById('title_4').innerHTML='[<u >成員的存取：「私有區與公有區」</u>]<br><br><br>';	
			}
		// 如果flag 1~6皆舉旗了，就顯示 缺少click to p4 與 click to p5功能的「左標題區」			
		else if(page_flag[1] ==1 && page_flag[2] ==1 &&
				page_flag[3] ==1 && page_flag[4] ==1 &&
		        page_flag[5] ==1 && page_flag[6] ==1        )
			{
				//左邊標題區的變化，p4與p5不能按
			  	document.getElementById('title_1').innerHTML='[<u onclick="ClcikTo_p2()">為什麼要使用物件導向程式設計？</u>]<br><br><br>';
				document.getElementById('title_2').innerHTML='[<u onclick="ClcikTo_p3()">什麼是物件與類別？</u>]<br><br><br>';
				document.getElementById('title_3').innerHTML='[<u >類別的定義方法</u>]<br><br><br>';
				document.getElementById('title_4').innerHTML='[<u >成員的存取：「私有區與公有區」</u>]<br><br><br>';
			}
		//上列三種情形皆不成立，就僅顯示click to p2 功能的「左標題區」
		else
			{
				//左邊標題區的變化，p3、p4與p5不能按
			  	document.getElementById('title_1').innerHTML='[<u onclick="ClcikTo_p2()">為什麼要使用物件導向程式設計？</u>]<br><br><br>';
				document.getElementById('title_2').innerHTML='[<u >什麼是物件與類別？</u>]<br><br><br>';
				document.getElementById('title_3').innerHTML='[<u >類別的定義方法</u>]<br><br><br>';
				document.getElementById('title_4').innerHTML='[<u >成員的存取：「私有區與公有區」</u>]<br><br><br>';
			}
			
			*/
 }
 
 
 function LeftTitle_change_p2()
 {
				//左邊標題區的變化，完整版
				document.getElementById('t_title').innerHTML='<b>[物件與類別]</b>';
			  	document.getElementById('title_1').innerHTML='[<u onclick="ClcikTo_p2()"><b>為什麼要使用物件導向程式設計？</b></u>]<br><br><br>';
				document.getElementById('title_2').innerHTML='[<u onclick="ClcikTo_p3()">什麼是物件與類別？</u>]<br><br><br>';
				document.getElementById('title_3').innerHTML='[<u onclick="ClcikTo_p4()">類別的定義方法</u>]<br><br><br>';
				document.getElementById('title_4').innerHTML='[<u onclick="ClcikTo_p5()">成員的存取：「私有區與公有區」</u>]<br><br><br>';	
				document.getElementById('title_5').innerHTML='[<u onclick="ClcikTo_p6()">繼承</u>]<br><br><br>';
				document.getElementById('title_6').innerHTML='[<u onclick="ClcikTo_p7()">程式範例</u>]<br><br><br>';
 /*
 		// 如果flag 1~20皆舉旗了，就顯示完整功能的「左標題區」
		if(page_flag[1] ==1 && page_flag[2] ==1 &&
		   page_flag[3] ==1 && page_flag[4] ==1 &&
		   page_flag[5] ==1 && page_flag[6] ==1 &&
		   page_flag[7] ==1 && page_flag[8] ==1 &&
		   page_flag[9] ==1 && page_flag[10] ==1 &&
		   page_flag[11] ==1 && page_flag[12] ==1 &&
		   page_flag[13] ==1 && page_flag[14] ==1 &&
		   page_flag[15] ==1 && page_flag[16] ==1 &&
		   page_flag[17] ==1 && page_flag[18] ==1 &&
		   page_flag[19] ==1 && page_flag[20] ==1 	   )
		   {
				//左邊標題區的變化，完整版
				document.getElementById('t_title').innerHTML='<b>[物件與類別]</b>';
			  	document.getElementById('title_1').innerHTML='[<u onclick="ClcikTo_p2()"><b>為什麼要使用物件導向程式設計？</b></u>]<br><br><br>';
				document.getElementById('title_2').innerHTML='[<u onclick="ClcikTo_p3()">什麼是物件與類別？</u>]<br><br><br>';
				document.getElementById('title_3').innerHTML='[<u onclick="ClcikTo_p4()">類別的定義方法</u>]<br><br><br>';
				document.getElementById('title_4').innerHTML='[<u onclick="ClcikTo_p5()">成員的存取：「私有區與公有區」</u>]<br><br><br>';	
				document.getElementById('title_5').innerHTML='[<u onclick="ClcikTo_p6()">繼承</u>]<br><br><br>';
				document.getElementById('title_6').innerHTML='[<u onclick="ClcikTo_p7()">程式範例</u>]<br><br><br>';
			}
		// 如果flag 1~14皆舉旗了，就顯示 缺少click to p5功能的「左標題區」			
		else if(page_flag[1] ==1 && page_flag[2] ==1 &&
				page_flag[3] ==1 && page_flag[4] ==1 &&
		        page_flag[5] ==1 && page_flag[6] ==1 &&
				page_flag[7] ==1 && page_flag[8] ==1 &&
				page_flag[9] ==1 && page_flag[10] ==1 &&
				page_flag[11] ==1 && page_flag[12] ==1 &&
				page_flag[13] ==1 && page_flag[14] ==1      )
			{
				//左邊標題區的變化，p5不能按
			  	document.getElementById('title_1').innerHTML='[<u onclick="ClcikTo_p2()"><b>為什麼要使用物件導向程式設計？</b></u>]<br><br><br>';
				document.getElementById('title_2').innerHTML='[<u onclick="ClcikTo_p3()">什麼是物件與類別？</u>]<br><br><br>';
				document.getElementById('title_3').innerHTML='[<u onclick="ClcikTo_p4()">類別的定義方法</u>]<br><br><br>';
				document.getElementById('title_4').innerHTML='[<u >成員的存取：「私有區與公有區」</u>]<br><br><br>';	
			}
		// 如果flag 1~6皆舉旗了，就顯示 缺少click to p4 與 click to p5功能的「左標題區」			
		else if(page_flag[1] ==1 && page_flag[2] ==1 &&
				page_flag[3] ==1 && page_flag[4] ==1 &&
		        page_flag[5] ==1 && page_flag[6] ==1        )
			{
				//左邊標題區的變化，p4與p5不能按
			  	document.getElementById('title_1').innerHTML='[<u onclick="ClcikTo_p2()"><b>為什麼要使用物件導向程式設計？</b></u>]<br><br><br>';
				document.getElementById('title_2').innerHTML='[<u onclick="ClcikTo_p3()">什麼是物件與類別？</u>]<br><br><br>';
				document.getElementById('title_3').innerHTML='[<u >類別的定義方法</u>]<br><br><br>';
				document.getElementById('title_4').innerHTML='[<u >成員的存取：「私有區與公有區」</u>]<br><br><br>';
			}
		//上列三種情形皆不成立，就僅顯示click to p2 功能的「左標題區」
		else
			{
				//左邊標題區的變化，p3、p4與p5不能按
			  	document.getElementById('title_1').innerHTML='[<u onclick="ClcikTo_p2()"><b>為什麼要使用物件導向程式設計？</b></u>]<br><br><br>';
				document.getElementById('title_2').innerHTML='[<u >什麼是物件與類別？</u>]<br><br><br>';
				document.getElementById('title_3').innerHTML='[<u >類別的定義方法</u>]<br><br><br>';
				document.getElementById('title_4').innerHTML='[<u >成員的存取：「私有區與公有區」</u>]<br><br><br>';
			}
 */
 }
 
  function LeftTitle_change_p3()
 {
				//左邊標題區的變化，完整版
				document.getElementById('t_title').innerHTML='<b>[物件與類別]</b>';
			  	document.getElementById('title_1').innerHTML='[<u onclick="ClcikTo_p2()">為什麼要使用物件導向程式設計？</u>]<br><br><br>';
				document.getElementById('title_2').innerHTML='[<u onclick="ClcikTo_p3()"><b>什麼是物件與類別？</b></u>]<br><br><br>';
				document.getElementById('title_3').innerHTML='[<u onclick="ClcikTo_p4()">類別的定義方法</u>]<br><br><br>';
				document.getElementById('title_4').innerHTML='[<u onclick="ClcikTo_p5()">成員的存取：「私有區與公有區」</u>]<br><br><br>';	
				document.getElementById('title_5').innerHTML='[<u onclick="ClcikTo_p6()">繼承</u>]<br><br><br>';
				document.getElementById('title_6').innerHTML='[<u onclick="ClcikTo_p7()">程式範例</u>]<br><br><br>';
/*
 		// 如果flag 1~20皆舉旗了，就顯示完整功能的「左標題區」
		if(page_flag[1] ==1 && page_flag[2] ==1 &&
		   page_flag[3] ==1 && page_flag[4] ==1 &&
		   page_flag[5] ==1 && page_flag[6] ==1 &&
		   page_flag[7] ==1 && page_flag[8] ==1 &&
		   page_flag[9] ==1 && page_flag[10] ==1 &&
		   page_flag[11] ==1 && page_flag[12] ==1 &&
		   page_flag[13] ==1 && page_flag[14] ==1 &&
		   page_flag[15] ==1 && page_flag[16] ==1 &&
		   page_flag[17] ==1 && page_flag[18] ==1 &&
		   page_flag[19] ==1 && page_flag[20] ==1 	   )
		   {
				//左邊標題區的變化，完整版
				document.getElementById('t_title').innerHTML='<b>[物件與類別]</b>';
			  	document.getElementById('title_1').innerHTML='[<u onclick="ClcikTo_p2()">為什麼要使用物件導向程式設計？</u>]<br><br><br>';
				document.getElementById('title_2').innerHTML='[<u onclick="ClcikTo_p3()"><b>什麼是物件與類別？</b></u>]<br><br><br>';
				document.getElementById('title_3').innerHTML='[<u onclick="ClcikTo_p4()">類別的定義方法</u>]<br><br><br>';
				document.getElementById('title_4').innerHTML='[<u onclick="ClcikTo_p5()">成員的存取：「私有區與公有區」</u>]<br><br><br>';	
				document.getElementById('title_5').innerHTML='[<u onclick="ClcikTo_p6()">繼承</u>]<br><br><br>';
				document.getElementById('title_6').innerHTML='[<u onclick="ClcikTo_p7()">程式範例</u>]<br><br><br>';
			}
		// 如果flag 1~14皆舉旗了，就顯示 缺少click to p5功能的「左標題區」			
		else if(page_flag[1] ==1 && page_flag[2] ==1 &&
				page_flag[3] ==1 && page_flag[4] ==1 &&
		        page_flag[5] ==1 && page_flag[6] ==1 &&
				page_flag[7] ==1 && page_flag[8] ==1 &&
				page_flag[9] ==1 && page_flag[10] ==1 &&
				page_flag[11] ==1 && page_flag[12] ==1 &&
				page_flag[13] ==1 && page_flag[14] ==1      )
			{
				//左邊標題區的變化，p5不能按
			  	document.getElementById('title_1').innerHTML='[<u onclick="ClcikTo_p2()">為什麼要使用物件導向程式設計？</u>]<br><br><br>';
				document.getElementById('title_2').innerHTML='[<u onclick="ClcikTo_p3()"><b>什麼是物件與類別？</b></u>]<br><br><br>';
				document.getElementById('title_3').innerHTML='[<u onclick="ClcikTo_p4()">類別的定義方法</u>]<br><br><br>';
				document.getElementById('title_4').innerHTML='[<u >成員的存取：「私有區與公有區」</u>]<br><br><br>';	
			}
		// 如果flag 1~6皆舉旗了，就顯示 缺少click to p4 與 click to p5功能的「左標題區」			
		else if(page_flag[1] ==1 && page_flag[2] ==1 &&
				page_flag[3] ==1 && page_flag[4] ==1 &&
		        page_flag[5] ==1 && page_flag[6] ==1        )
			{
				//左邊標題區的變化，p4與p5不能按
			  	document.getElementById('title_1').innerHTML='[<u onclick="ClcikTo_p2()">為什麼要使用物件導向程式設計？</u>]<br><br><br>';
				document.getElementById('title_2').innerHTML='[<u onclick="ClcikTo_p3()"><b>什麼是物件與類別？</b></u>]<br><br><br>';
				document.getElementById('title_3').innerHTML='[<u >類別的定義方法</u>]<br><br><br>';
				document.getElementById('title_4').innerHTML='[<u >成員的存取：「私有區與公有區」</u>]<br><br><br>';
			}
		else 
		{
			alert("Error of LeftTitle_change_p3");
		}
 */
 }
 
 
  function LeftTitle_change_p4()
 {
				//左邊標題區的變化，完整版
				document.getElementById('t_title').innerHTML='<b>[物件與類別]</b>';
			  	document.getElementById('title_1').innerHTML='[<u onclick="ClcikTo_p2()">為什麼要使用物件導向程式設計？</u>]<br><br><br>';
				document.getElementById('title_2').innerHTML='[<u onclick="ClcikTo_p3()">什麼是物件與類別？</u>]<br><br><br>';
				document.getElementById('title_3').innerHTML='[<u onclick="ClcikTo_p4()"><b>類別的定義方法</b></u>]<br><br><br>';
				document.getElementById('title_4').innerHTML='[<u onclick="ClcikTo_p5()">成員的存取：「私有區與公有區」</u>]<br><br><br>';	
				document.getElementById('title_5').innerHTML='[<u onclick="ClcikTo_p6()">繼承</u>]<br><br><br>';
				document.getElementById('title_6').innerHTML='[<u onclick="ClcikTo_p7()">程式範例</u>]<br><br><br>';
 /*
 		// 如果flag 1~20皆舉旗了，就顯示完整功能的「左標題區」
		if(page_flag[1] ==1 && page_flag[2] ==1 &&
		   page_flag[3] ==1 && page_flag[4] ==1 &&
		   page_flag[5] ==1 && page_flag[6] ==1 &&
		   page_flag[7] ==1 && page_flag[8] ==1 &&
		   page_flag[9] ==1 && page_flag[10] ==1 &&
		   page_flag[11] ==1 && page_flag[12] ==1 &&
		   page_flag[13] ==1 && page_flag[14] ==1 &&
		   page_flag[15] ==1 && page_flag[16] ==1 &&
		   page_flag[17] ==1 && page_flag[18] ==1 &&
		   page_flag[19] ==1 && page_flag[20] ==1 	   )
		   {
				//左邊標題區的變化，完整版
				document.getElementById('t_title').innerHTML='<b>[物件與類別]</b>';
			  	document.getElementById('title_1').innerHTML='[<u onclick="ClcikTo_p2()">為什麼要使用物件導向程式設計？</u>]<br><br><br>';
				document.getElementById('title_2').innerHTML='[<u onclick="ClcikTo_p3()">什麼是物件與類別？</u>]<br><br><br>';
				document.getElementById('title_3').innerHTML='[<u onclick="ClcikTo_p4()"><b>類別的定義方法</b></u>]<br><br><br>';
				document.getElementById('title_4').innerHTML='[<u onclick="ClcikTo_p5()">成員的存取：「私有區與公有區」</u>]<br><br><br>';	
				document.getElementById('title_5').innerHTML='[<u onclick="ClcikTo_p6()">繼承</u>]<br><br><br>';
				document.getElementById('title_6').innerHTML='[<u onclick="ClcikTo_p7()">程式範例</u>]<br><br><br>';
			}
		// 如果flag 1~14皆舉旗了，就顯示 缺少click to p5功能的「左標題區」			
		else if(page_flag[1] ==1 && page_flag[2] ==1 &&
				page_flag[3] ==1 && page_flag[4] ==1 &&
		        page_flag[5] ==1 && page_flag[6] ==1 &&
				page_flag[7] ==1 && page_flag[8] ==1 &&
				page_flag[9] ==1 && page_flag[10] ==1 &&
				page_flag[11] ==1 && page_flag[12] ==1 &&
				page_flag[13] ==1 && page_flag[14] ==1      )
			{
				//左邊標題區的變化，p5不能按
			  	document.getElementById('title_1').innerHTML='[<u onclick="ClcikTo_p2()">為什麼要使用物件導向程式設計？</u>]<br><br><br>';
				document.getElementById('title_2').innerHTML='[<u onclick="ClcikTo_p3()">什麼是物件與類別？</u>]<br><br><br>';
				document.getElementById('title_3').innerHTML='[<u onclick="ClcikTo_p4()"><b>類別的定義方法</b></u>]<br><br><br>';
				document.getElementById('title_4').innerHTML='[<u >成員的存取：「私有區與公有區」</u>]<br><br><br>';	
			}
		else 
		{
			alert("Error of LeftTitle_change_p4");
		}
 */
 }
 
  function LeftTitle_change_p5()
 {
				//左邊標題區的變化，完整版
				document.getElementById('t_title').innerHTML='<b>[物件與類別]</b>';
			  	document.getElementById('title_1').innerHTML='[<u onclick="ClcikTo_p2()">為什麼要使用物件導向程式設計？</u>]<br><br><br>';
				document.getElementById('title_2').innerHTML='[<u onclick="ClcikTo_p3()">什麼是物件與類別？</u>]<br><br><br>';
				document.getElementById('title_3').innerHTML='[<u onclick="ClcikTo_p4()">類別的定義方法</u>]<br><br><br>';
				document.getElementById('title_4').innerHTML='[<u onclick="ClcikTo_p5()"><b>成員的存取：「私有區與公有區」</b></u>]<br><br><br>';	
				document.getElementById('title_5').innerHTML='[<u onclick="ClcikTo_p6()">繼承</u>]<br><br><br>';
				document.getElementById('title_6').innerHTML='[<u onclick="ClcikTo_p7()">程式範例</u>]<br><br><br>';	
			
 /*
 		// 如果flag 1~20皆舉旗了，就顯示完整功能的「左標題區」
		if(page_flag[1] ==1 && page_flag[2] ==1 &&
		   page_flag[3] ==1 && page_flag[4] ==1 &&
		   page_flag[5] ==1 && page_flag[6] ==1 &&
		   page_flag[7] ==1 && page_flag[8] ==1 &&
		   page_flag[9] ==1 && page_flag[10] ==1 &&
		   page_flag[11] ==1 && page_flag[12] ==1 &&
		   page_flag[13] ==1 && page_flag[14] ==1 &&
		   page_flag[15] ==1 && page_flag[16] ==1 &&
		   page_flag[17] ==1 && page_flag[18] ==1 &&
		   page_flag[19] ==1 && page_flag[20] ==1 	   )
		   {
				//左邊標題區的變化，完整版
				document.getElementById('t_title').innerHTML='<b>[物件與類別]</b>';
			  	document.getElementById('title_1').innerHTML='[<u onclick="ClcikTo_p2()">為什麼要使用物件導向程式設計？</u>]<br><br><br>';
				document.getElementById('title_2').innerHTML='[<u onclick="ClcikTo_p3()">什麼是物件與類別？</u>]<br><br><br>';
				document.getElementById('title_3').innerHTML='[<u onclick="ClcikTo_p4()">類別的定義方法</u>]<br><br><br>';
				document.getElementById('title_4').innerHTML='[<u onclick="ClcikTo_p5()"><b>成員的存取：「私有區與公有區」</b></u>]<br><br><br>';	
				document.getElementById('title_5').innerHTML='[<u onclick="ClcikTo_p6()">繼承</u>]<br><br><br>';
				document.getElementById('title_6').innerHTML='[<u onclick="ClcikTo_p7()">程式範例</u>]<br><br><br>';	
			}
		else 
		{
			alert("Error of LeftTitle_change_p5");
		}
 */
 } 
 
 function LeftTitle_change_p6() 
 {
 
					document.getElementById('t_title').innerHTML='<b>[繼承]</b>';
					document.getElementById('title_1').innerHTML='[<u onclick="ClcikTo_p2()">為什麼要使用物件導向程式設計？</u>]<br><br><br>';
					document.getElementById('title_2').innerHTML='[<u onclick="ClcikTo_p3()">什麼是物件與類別？</u>]<br><br><br>';
					document.getElementById('title_3').innerHTML='[<u onclick="ClcikTo_p4()">類別的定義方法</u>]<br><br><br>';
					document.getElementById('title_4').innerHTML='[<u onclick="ClcikTo_p5()">成員的存取：「私有區與公有區」</u>]<br><br><br>';
					document.getElementById('title_5').innerHTML='[<u onclick="ClcikTo_p6()"><b>繼承</b></u>]<br><br><br>';
					document.getElementById('title_6').innerHTML='[<u onclick="ClcikTo_p7()">程式範例</u>]<br><br><br>';		
				
 /*
			if(page_flag[29] ==1 && page_flag[48] ==1 &&
				page_flag[30] ==1 && page_flag[47] ==1 &&
				page_flag[31] ==1 && page_flag[46] ==1 &&
				page_flag[32] ==1 && page_flag[45] ==1 &&
				page_flag[33] ==1 && page_flag[44] ==1 &&
				page_flag[34] ==1 && page_flag[43] ==1 &&
				page_flag[35] ==1 && page_flag[42] ==1 &&
				page_flag[36] ==1 && page_flag[41] ==1 &&
				page_flag[37] ==1 && page_flag[40] ==1 &&
				page_flag[38] ==1 && page_flag[39] ==1 &&
				page_flag[49] ==1 && page_flag[50] ==1 &&
				page_flag[51] ==1 && page_flag[52] ==1 &&
				page_flag[53] ==1 && page_flag[54] ==1 &&
				page_flag[55] ==1 && page_flag[56] ==1 )
			{
				if( page==1 || page==2 || page==3 ||
					page==4 || page==5 || page==6 ||	
					page==7 || page==8 || page==9 ||
					page==10 || page==11 || page==12 ||
					page==13 || page==14 || page==15 ||
					page==16 || page==17 || page==18 ||
					page==19 || page==20 || page==21 ||
					page==22 || page==23 || page==24 ||
					page==25 || page==26 || page==27 || page ==28	)
				{
					document.getElementById('t_title').innerHTML='<b>[繼承]</b>';
					document.getElementById('title_1').innerHTML='[<u onclick="ClcikTo_p2()">為什麼要使用物件導向程式設計？</u>]<br><br><br>';
					document.getElementById('title_2').innerHTML='[<u onclick="ClcikTo_p3()">什麼是物件與類別？</u>]<br><br><br>';
					document.getElementById('title_3').innerHTML='[<u onclick="ClcikTo_p4()">類別的定義方法</u>]<br><br><br>';
					document.getElementById('title_4').innerHTML='[<u onclick="ClcikTo_p5()">成員的存取：「私有區與公有區」</u>]<br><br><br>';
					document.getElementById('title_5').innerHTML='[<u onclick="ClcikTo_p6()"><b>繼承</b></u>]<br><br><br>';
					document.getElementById('title_6').innerHTML='[<u onclick="ClcikTo_p7()">程式範例</u>]<br><br><br>';		
				}		
				else
				{
				document.getElementById('title_5').innerHTML='[<u onclick="ClcikTo_p6()"><b>繼承</b></u>]<br><br><br>';
				document.getElementById('title_6').innerHTML='[<u onclick="ClcikTo_p7()">程式範例</u>]<br><br><br>';		
				}   
			}
		   
		   else 
		   {
		   		document.getElementById('title_5').innerHTML='[<u onclick="ClcikTo_p6()"><b>繼承</b></u>]<br><br><br>';
				document.getElementById('title_6').innerHTML='[程式範例]<br><br><br>';
		   }
		   */
 }
 
 function LeftTitle_change_p7()
 {
					document.getElementById('t_title').innerHTML='<b>[繼承]</b>';
					document.getElementById('title_1').innerHTML='[<u onclick="ClcikTo_p2()">為什麼要使用物件導向程式設計？</u>]<br><br><br>';
					document.getElementById('title_2').innerHTML='[<u onclick="ClcikTo_p3()">什麼是物件與類別？</u>]<br><br><br>';
					document.getElementById('title_3').innerHTML='[<u onclick="ClcikTo_p4()">類別的定義方法</u>]<br><br><br>';
					document.getElementById('title_4').innerHTML='[<u onclick="ClcikTo_p5()">成員的存取：「私有區與公有區」</u>]<br><br><br>';
					document.getElementById('title_5').innerHTML='[<u onclick="ClcikTo_p6()">繼承</u>]<br><br><br>';
					document.getElementById('title_6').innerHTML='[<u onclick="ClcikTo_p7()"><b>程式範例</b></u>]<br><br><br>';		
				
 /*
		if(page_flag[29] ==1 && page_flag[48] ==1 &&
		   page_flag[30] ==1 && page_flag[47] ==1 &&
		   page_flag[31] ==1 && page_flag[46] ==1 &&
		   page_flag[32] ==1 && page_flag[45] ==1 &&
		   page_flag[33] ==1 && page_flag[44] ==1 &&
		   page_flag[34] ==1 && page_flag[43] ==1 &&
		   page_flag[35] ==1 && page_flag[42] ==1 &&
		   page_flag[36] ==1 && page_flag[41] ==1 &&
		   page_flag[37] ==1 && page_flag[40] ==1 &&
		   page_flag[38] ==1 && page_flag[39] ==1 &&
		   page_flag[49] ==1 && page_flag[50] ==1 &&
		   page_flag[51] ==1 && page_flag[52] ==1 &&
		   page_flag[53] ==1 && page_flag[54] ==1 &&
		   page_flag[55] ==1 && page_flag[56] ==1 && page_flag[57] ==1 && page_flag[58] ==1 && page_flag[59] ==1)
		   {
				if( page==1 || page==2 || page==3 ||
					page==4 || page==5 || page==6 ||	
					page==7 || page==8 || page==9 ||
					page==10 || page==11 || page==12 ||
					page==13 || page==14 || page==15 ||
					page==16 || page==17 || page==18 ||
					page==19 || page==20 || page==21 ||
					page==22 || page==23 || page==24 ||
					page==25 || page==26 || page==27 || page ==28
				)
				{
					document.getElementById('t_title').innerHTML='<b>[繼承]</b>';
					document.getElementById('title_1').innerHTML='[<u onclick="ClcikTo_p2()">為什麼要使用物件導向程式設計？</u>]<br><br><br>';
					document.getElementById('title_2').innerHTML='[<u onclick="ClcikTo_p3()">什麼是物件與類別？</u>]<br><br><br>';
					document.getElementById('title_3').innerHTML='[<u onclick="ClcikTo_p4()">類別的定義方法</u>]<br><br><br>';
					document.getElementById('title_4').innerHTML='[<u onclick="ClcikTo_p5()">成員的存取：「私有區與公有區」</u>]<br><br><br>';
					document.getElementById('title_5').innerHTML='[<u onclick="ClcikTo_p6()">繼承</u>]<br><br><br>';
					document.getElementById('title_6').innerHTML='[<u onclick="ClcikTo_p7()"><b>程式範例</b></u>]<br><br><br>';		
				}		
				else
				{
					document.getElementById('title_5').innerHTML='[<u onclick="ClcikTo_p6()">繼承</u>]<br><br><br>';
					document.getElementById('title_6').innerHTML='[<u onclick="ClcikTo_p7()"><b>程式範例</b></u>]<br><br><br>';				
				}
		   }
  		// 如果flag 29~59皆舉旗了，就顯示完整功能的「左標題區」
		else if(page_flag[29] ==1 && page_flag[48] ==1 &&
		   page_flag[30] ==1 && page_flag[47] ==1 &&
		   page_flag[31] ==1 && page_flag[46] ==1 &&
		   page_flag[32] ==1 && page_flag[45] ==1 &&
		   page_flag[33] ==1 && page_flag[44] ==1 &&
		   page_flag[34] ==1 && page_flag[43] ==1 &&
		   page_flag[35] ==1 && page_flag[42] ==1 &&
		   page_flag[36] ==1 && page_flag[41] ==1 &&
		   page_flag[37] ==1 && page_flag[40] ==1 &&
		   page_flag[38] ==1 && page_flag[39] ==1 &&
		   page_flag[49] ==1 && page_flag[50] ==1 &&
		   page_flag[51] ==1 && page_flag[52] ==1 &&
		   page_flag[53] ==1 && page_flag[54] ==1 &&
		   page_flag[55] ==1 && page_flag[56] ==1 	   
		   )
		   {
				//左邊標題區的變化，完整版
				document.getElementById('title_5').innerHTML='[<u onclick="ClcikTo_p6()">繼承</u>]<br><br><br>';
				document.getElementById('title_6').innerHTML='[<u onclick="ClcikTo_p7()"><b>程式範例</b></u>]<br><br><br>';	
			}
		else 
		{
			alert("Error of LeftTitle_change_p7");
		}
*/
 }
 
 function LeftTitle_change()
 {

	//左邊標題區的變，教材結束，切換成完整版
	document.getElementById('Left_TITLE').innerHTML='<ol><li id="title_1">[<u onclick="ClcikTo_p2()">為什麼要使用物件導向程式設計？</u>]<br><br><br><li id="title_2">[<u onclick="ClcikTo_p3()">什麼是物件與類別？</u>]<br><br><br><li id="title_3">[<u onclick="ClcikTo_p4()">類別的定義方法</u>]<br><br><br><li id="title_4">[<u onclick="ClcikTo_p5()">成員的存取：「私有區與公有區」</u>]<br><br><br><li id="title_5">[<u onclick="ClcikTo_p6()">繼承</u>]<br><br><br><li id="title_6">[<u onclick="ClcikTo_p7()">程式範例</u>]<br><br><br></ol>';			
		   
 }
 

 
 function ClcikTo_p2()
{  	
	if(page==2)
	{
		alert("已經在該頁了");
	}
	else
	{
		turn =2;
		
		//左標題區，變換
		LeftTitle_change_p2();
			
		// 按鈕「下一頁」與「重播」，在第一次執行到該page時不能使用
		if(page_flag[2]==0)  //第一次閱讀該頁
		{
			Button_disable();		
			setTimeout('Button_enable()',  mp3_Time[2] );
			//語音撥放器  autostart = 1
			document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P2_0.mp3&javascript=on  &amp;autostart=1" /><param name="wmode" value="transparent" /></object>';
		
		}
		else
		{
			Button_enable();
			//語音撥放器  autostart = 0
			document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P2_0.mp3&javascript=on  &amp;autostart=0" /><param name="wmode" value="transparent" /></object>';
			
		}

			
		//右框swf變換成p2
	  	document.getElementById('flashContent').innerHTML='<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="700" height="525" id="p2" align="middle"><param name="movie" value="p2.swf" />				<param name="quality" value="high" />				<param name="bgcolor" value="#ffffff" />				<param name="play" value="true" />				<param name="loop" value="true" />				<param name="wmode" value="window" />				<param name="scale" value="showall" />				<param name="menu" value="true" />				<param name="devicefont" value="false" />				<param name="salign" value="" />				<param name="allowScriptAccess" value="sameDomain" />				<object type="application/x-shockwave-flash" data="p2.swf" width="700" height="525">					<param id="swff2" name="movie" value="p2.swf" />					<param name="quality" value="high" />					<param name="bgcolor" value="#ffffff" />					<param name="play" value="true" />					<param name="loop" value="true" />					<param name="wmode" value="window" />					<param name="scale" value="showall" />					<param name="menu" value="true" />					<param name="devicefont" value="false" />					<param name="salign" value="" />					<param name="allowScriptAccess" value="sameDomain" />									<a href="http://www.adobe.com/go/getflash">						<img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="取得 Adobe Flash 播放程式" />					</a></object></object>';

	
		
		//右框的swf切換 & 寫入資料庫
			$.post("SQL_page_change.php",
			  {	
				sql:turn	   			   		   
			  },
			  function (msg){}
					);
		turn = 0;	
		page = 2;
			
		page_flag[2]=1;  //表示page 2已經讀過。
	}
}

 
 

 
function ClcikTo_p3()
{
	if(page==7)
	{
		alert("已經在該頁了");
	}
	else
	{
		turn = 3;

		LeftTitle_change_p3();		
		
		// 按鈕「下一頁」與「重播」，在第一次執行到該page時不能使用
		if(page_flag[7]==0)  //第一次閱讀該頁
		{
			Button_disable();		
			setTimeout('Button_enable()',  mp3_Time[7] );
			//語音撥放器  autostart = 1
			document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P2_0.mp3&javascript=on  &amp;autostart=1" /><param name="wmode" value="transparent" /></object>';
		
		}
		else
		{
			Button_enable();
			//語音撥放器  autostart = 0
			document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P2_0.mp3&javascript=on  &amp;autostart=0" /><param name="wmode" value="transparent" /></object>';
			
		}
			
		//右框swf變換成p3	
		document.getElementById('flashContent').innerHTML='<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="700" height="525" id="p3" align="middle">	<param name="movie" value="p3.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" /><param name="wmode" value="window" /><param name="scale" value="showall" /><param name="menu" value="true" /><param name="devicefont" value="false" /><param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><object type="application/x-shockwave-flash" data="p3.swf" width="700" height="525"><param name="movie" value="p3.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" />	<param name="wmode" value="window" /><param name="scale" value="showall" />	<param name="menu" value="true" /><param name="devicefont" value="false" />	<param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><a href="http://www.adobe.com/go/getflash"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="取得 Adobe Flash 播放程式" /></a></object></object>';

	

			
		//右框的swf切換 & 寫入資料庫
			$.post("SQL_page_change.php",
			  {	
				sql:turn	   			   		   
			  },
			  function (msg){}
					);
		turn = 0;		
		page = 7;
			
		page_flag[7]=1;  //表示page 7  (p3)  已經讀過。
	}	
	

}
 
function ClcikTo_p4()
{
	if(page==15)
	{
		alert("已經在該頁了");
	}
	else
	{
		turn = 4;

		LeftTitle_change_p4();
		
		// 按鈕「下一頁」與「重播」，在第一次執行到該page時不能使用
		if(page_flag[15]==0)  //第一次閱讀該頁
		{
			Button_disable();		
			setTimeout('Button_enable()',  mp3_Time[15] );
			//語音撥放器  autostart = 1
			document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P2_0.mp3&javascript=on  &amp;autostart=1" /><param name="wmode" value="transparent" /></object>';
		
		}
		else
		{
			Button_enable();
			//語音撥放器  autostart = 0
			document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P2_0.mp3&javascript=on  &amp;autostart=0" /><param name="wmode" value="transparent" /></object>';
			
		}
		
		//右框swf變換成p4	
		document.getElementById('flashContent').innerHTML='<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="700" height="525" id="p4" align="middle">	<param name="movie" value="p4.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" /><param name="wmode" value="window" /><param name="scale" value="showall" /><param name="menu" value="true" /><param name="devicefont" value="false" /><param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><object type="application/x-shockwave-flash" data="p4.swf" width="700" height="525"><param name="movie" value="p4.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" />	<param name="wmode" value="window" /><param name="scale" value="showall" />	<param name="menu" value="true" /><param name="devicefont" value="false" />	<param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><a href="http://www.adobe.com/go/getflash"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="取得 Adobe Flash 播放程式" /></a></object></object>';
		

		//右框的swf切換 & 寫入資料庫
			$.post("SQL_page_change.php",
			  {	
				sql:turn	   			   		   
			  },
			  function (msg){}
					);
		turn = 0;		
		page = 15;
		
		page_flag[15]=1;  //表示page 15  (p3)  已經讀過。
	}
}

function ClcikTo_p5()
{	
	if(page==21)
	{
		alert("已經在該頁了");
	}
	else
	{
		turn =5;

		LeftTitle_change_p5();
		
		if(page_flag[21]==0)  //第一次閱讀該頁
		{
			Button_disable();		
			setTimeout('Button_enable()',  mp3_Time[21] );
			//語音撥放器  autostart = 1
			document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P2_0.mp3&javascript=on  &amp;autostart=1" /><param name="wmode" value="transparent" /></object>';
		
		}
		else
		{
			Button_enable();
			//語音撥放器  autostart = 0
			document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P2_0.mp3&javascript=on  &amp;autostart=0" /><param name="wmode" value="transparent" /></object>';
			
		}	
		
		
		//右框swf變換成p5
		document.getElementById('flashContent').innerHTML='<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="700" height="525" id="p5" align="middle">	<param name="movie" value="p5.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" /><param name="wmode" value="window" /><param name="scale" value="showall" /><param name="menu" value="true" /><param name="devicefont" value="false" /><param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><object type="application/x-shockwave-flash" data="p5.swf" width="700" height="525"><param name="movie" value="p5.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" />	<param name="wmode" value="window" /><param name="scale" value="showall" />	<param name="menu" value="true" /><param name="devicefont" value="false" />	<param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><a href="http://www.adobe.com/go/getflash"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="取得 Adobe Flash 播放程式" /></a></object></object>';
		
	
		
		//右框的swf切換 & 寫入資料庫
			$.post("SQL_page_change.php",
			  {	
				sql:turn	   			   		   
			  },
			  function (msg){}
					);	
		turn = 0;		
		page = 21;	
		page_flag[21]=1;  //表示page 21  (p3)  已經讀過。
	}
}
 
 function ClcikTo_p6()
{  	
	if(page==29)
	{
		alert("已經在該頁了");
	}
	else
	{
		turn =6;
		
		//左標題區，變換
		LeftTitle_change_p6();
			
		// 按鈕「下一頁」與「重播」，在第一次執行到該page時不能使用
		if(page_flag[29]==0)  //第一次閱讀該頁
		{
			Button_disable();		
			setTimeout('Button_enable()',  mp3_Time[29] );
			//語音撥放器  autostart = 1
			document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P6.mp3&javascript=on  &amp;autostart=1" /><param name="wmode" value="transparent" /></object>';
		
		}
		else
		{
			Button_enable();
			//語音撥放器  autostart = 0
			document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P6.mp3&javascript=on  &amp;autostart=0" /><param name="wmode" value="transparent" /></object>';
			
		}

			
		//右框swf變換成 P6
	  	document.getElementById('flashContent').innerHTML='<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="700" height="525" id="P6" align="middle"><param name="movie" value="P6.swf" />				<param name="quality" value="high" />				<param name="bgcolor" value="#ffffff" />				<param name="play" value="true" />				<param name="loop" value="true" />				<param name="wmode" value="window" />				<param name="scale" value="showall" />				<param name="menu" value="true" />				<param name="devicefont" value="false" />				<param name="salign" value="" />				<param name="allowScriptAccess" value="sameDomain" />				<object type="application/x-shockwave-flash" data="P6.swf" width="700" height="525">					<param id="swff2" name="movie" value="P6.swf" />					<param name="quality" value="high" />					<param name="bgcolor" value="#ffffff" />					<param name="play" value="true" />					<param name="loop" value="true" />					<param name="wmode" value="window" />					<param name="scale" value="showall" />					<param name="menu" value="true" />					<param name="devicefont" value="false" />					<param name="salign" value="" />					<param name="allowScriptAccess" value="sameDomain" />									<a href="http://www.adobe.com/go/getflash">						<img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="取得 Adobe Flash 播放程式" />					</a></object></object>';

	
		
		//右框的swf切換 & 寫入資料庫
			$.post("SQL_page_change.php",{sql:turn }, function (msg){});

		turn = 0;	
		page = 29;
			
		page_flag[29]=1;  //表示page 29已經讀過。
	}
} 
 
  function ClcikTo_p7()
{  	
	if(page==57)
	{
		alert("已經在該頁了");
	}
	else
	{
		turn =7;
		
		//左標題區，變換
		LeftTitle_change_p7();
			
		// 按鈕「下一頁」與「重播」，在第一次執行到該page時不能使用
		if(page_flag[57]==0)  //第一次閱讀該頁
		{
			Button_disable();		
			setTimeout('Button_enable()',  mp3_Time[57] );
			//語音撥放器  autostart = 1
			document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P7.mp3&javascript=on  &amp;autostart=1" /><param name="wmode" value="transparent" /></object>';
		
		}
		else
		{
			Button_enable();
			//語音撥放器  autostart = 0
			document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P7.mp3&javascript=on  &amp;autostart=0" /><param name="wmode" value="transparent" /></object>';
			
		}

			
		//右框swf變換成 P7
	   	document.getElementById('flashContent').innerHTML="<div class=WordSection1 style=\'layout-grid:18.0pt ; OVERFLOW: scroll;  HEIGHT: 535px; layout-grid:18.0pt\'  class=\"Section1\"><table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0 style=\'border-collapse:collapse;border:none;mso-border-alt:solid windowtext .5pt; mso-yfti-tbllook:1184;mso-padding-alt:0cm 5.4pt 0cm 5.4pt\'> <tr style=\'mso-yfti-irow:0;mso-yfti-firstrow:yes;mso-yfti-lastrow:yes\'><td width=54 valign=top style=\'width:40.85pt;border:solid windowtext 1.0pt;  mso-border-alt:solid windowtext .5pt;background:#B8CCE4;mso-background-themecolor:  accent1;mso-background-themetint:102;padding:0cm 5.4pt 0cm 5.4pt\'>  <p class=MsoNormal><b style=\'mso-bidi-font-weight:normal\'><span lang=EN-US  style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";mso-bidi-font-family:  \"Courier New\"\'>1<o:p></o:p></span></b></p>  <p class=MsoNormal><b style=\'mso-bidi-font-weight:normal\'><span lang=EN-US  style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";mso-bidi-font-family:  \"Courier New\"\'>2<o:p></o:p></span></b></p>  <p class=MsoNormal><b style=\'mso-bidi-font-weight:normal\'><span lang=EN-US  style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";mso-bidi-font-family:  \"Courier New\"\'>3<o:p></o:p></span></b></p>  <p class=MsoNormal><b style=\'mso-bidi-font-weight:normal\'><span lang=EN-US  style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";mso-bidi-font-family:  \"Courier New\"\'>4<o:p></o:p></span></b></p>  <p class=MsoNormal><b style=\'mso-bidi-font-weight:normal\'><span lang=EN-US  style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";mso-bidi-font-family:  \"Courier New\"\'>5<o:p></o:p></span></b></p>  <p class=MsoNormal><b style=\'mso-bidi-font-weight:normal\'><span lang=EN-US  style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";mso-bidi-font-family:  \"Courier New\"\'>6<o:p></o:p></span></b></p>  <p class=MsoNormal><b style=\'mso-bidi-font-weight:normal\'><span lang=EN-US  style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";mso-bidi-font-family:  \"Courier New\"\'>7<o:p></o:p></span></b></p>  <p class=MsoNormal><b style=\'mso-bidi-font-weight:normal\'><span lang=EN-US  style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";mso-bidi-font-family:  \"Courier New\"\'>8<o:p></o:p></span></b></p>  <p class=MsoNormal><b style=\'mso-bidi-font-weight:normal\'><span lang=EN-US  style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";mso-bidi-font-family:  \"Courier New\"\'>9<o:p></o:p></span></b></p>  <p class=MsoNormal><b style=\'mso-bidi-font-weight:normal\'><span lang=EN-US  style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";mso-bidi-font-family:  \"Courier New\"\'>10<o:p></o:p></span></b></p>  <p class=MsoNormal><b style=\'mso-bidi-font-weight:normal\'><span lang=EN-US  style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";mso-bidi-font-family:  \"Courier New\"\'>11<o:p></o:p></span></b></p>  <p class=MsoNormal><b style=\'mso-bidi-font-weight:normal\'><span lang=EN-US  style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";mso-bidi-font-family:  \"Courier New\"\'>12<o:p></o:p></span></b></p>  <p class=MsoNormal><b style=\'mso-bidi-font-weight:normal\'><span lang=EN-US  style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";mso-bidi-font-family:  \"Courier New\"\'>13<o:p></o:p></span></b></p>  <p class=MsoNormal><b style=\'mso-bidi-font-weight:normal\'><span lang=EN-US  style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";mso-bidi-font-family:  \"Courier New\"\'>14<o:p></o:p></span></b></p>  <p class=MsoNormal><b style=\'mso-bidi-font-weight:normal\'><span lang=EN-US  style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";mso-bidi-font-family:  \"Courier New\"\'>15<o:p></o:p></span></b></p>  <p class=MsoNormal><b style=\'mso-bidi-font-weight:normal\'><span lang=EN-US  style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";mso-bidi-font-family:  \"Courier New\"\'>16<o:p></o:p></span></b></p>  <p class=MsoNormal><b style=\'mso-bidi-font-weight:normal\'><span lang=EN-US  style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";mso-bidi-font-family:  \"Courier New\"\'>17<o:p></o:p></span></b></p>  <p class=MsoNormal><b style=\'mso-bidi-font-weight:normal\'><span lang=EN-US  style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";mso-bidi-font-family:  \"Courier New\"\'>18<o:p></o:p></span></b></p>  <p class=MsoNormal><b style=\'mso-bidi-font-weight:normal\'><span lang=EN-US  style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";mso-bidi-font-family:  \"Courier New\"\'>19<o:p></o:p></span></b></p>  <p class=MsoNormal><b style=\'mso-bidi-font-weight:normal\'><span lang=EN-US  style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";mso-bidi-font-family:  \"Courier New\"\'>20<o:p></o:p></span></b></p>  <p class=MsoNormal><b style=\'mso-bidi-font-weight:normal\'><span lang=EN-US  style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";mso-bidi-font-family:  \"Courier New\"\'>21<o:p></o:p></span></b></p>  <p class=MsoNormal><b style=\'mso-bidi-font-weight:normal\'><span lang=EN-US  style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";mso-bidi-font-family:  \"Courier New\"\'>22<o:p></o:p></span></b></p>  <p class=MsoNormal><b style=\'mso-bidi-font-weight:normal\'><span lang=EN-US  style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";mso-bidi-font-family:  \"Courier New\"\'>23<o:p></o:p></span></b></p>  <p class=MsoNormal><b style=\'mso-bidi-font-weight:normal\'><span lang=EN-US  style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";mso-bidi-font-family:  \"Courier New\"\'>24<o:p></o:p></span></b></p>  <p class=MsoNormal><b style=\'mso-bidi-font-weight:normal\'><span lang=EN-US  style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";mso-bidi-font-family:  \"Courier New\"\'>25<o:p></o:p></span></b></p></td><td width=503 valign=top style=\'width:377.25pt;border:solid windowtext 1.0pt;  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt\'>  <p class=MsoNormal style=\'text-indent:5.0pt;background:white\'><b><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  mso-bidi-font-family:\"Courier New\";color:#9BBB59;mso-themecolor:accent3\'>// </span></b><b><span  style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";mso-bidi-font-family:  \"Courier New\";color:#404040;mso-themecolor:text1;mso-themetint:191;  mso-style-textfill-fill-color:#404040;mso-style-textfill-fill-themecolor:  text1;mso-style-textfill-fill-alpha:100.0%;mso-style-textfill-fill-colortransforms:  \"lumm=75000 lumo=25000\";background:yellow;mso-highlight:yellow\'>「<span  lang=EN-US>Point</span>」類別的定義</span></b><span lang=EN-US style=\'font-size:  10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";mso-bidi-font-family:\"Courier New\"\'><o:p></o:p></span></p>  <p class=MsoNormal style=\'text-indent:5.0pt;background:white\'><b><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  mso-bidi-font-family:\"Courier New\";color:#9BBB59;mso-themecolor:accent3\'>//  Point class definition represents an x-y coordinate pair.</span></b><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  mso-bidi-font-family:\"Courier New\";color:#9BBB59;mso-themecolor:accent3\'><o:p></o:p></span></p>  <p class=MsoNormal style=\'text-indent:5.0pt;background:white\'><b><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  mso-bidi-font-family:\"Courier New\";color:#790029\'>#<span class=SpellE>ifndef</span>  POINT_H</span></b><span lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  mso-bidi-font-family:\"Courier New\";color:#7F7F7F;mso-themecolor:text1;  mso-themetint:128;mso-style-textfill-fill-color:#7F7F7F;mso-style-textfill-fill-themecolor:  text1;mso-style-textfill-fill-alpha:100.0%;mso-style-textfill-fill-colortransforms:  \"lumm=50000 lumo=50000\"\'><o:p></o:p></span></p>  <p class=MsoNormal style=\'text-indent:5.0pt;background:white\'><b><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  mso-bidi-font-family:\"Courier New\";color:#790029\'>#define POINT_H<o:p></o:p></span></b></p>  <p class=MsoNormal style=\'text-indent:5.0pt;background:white\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  mso-bidi-font-family:\"Courier New\"\'><o:p>&nbsp;</o:p></span></p>  <p class=MsoNormal style=\'text-indent:5.0pt;background:white\'><b><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  mso-bidi-font-family:\"Courier New\";color:#790029\'>class Point { </span></b><b><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  mso-bidi-font-family:\"Courier New\";color:#9BBB59;mso-themecolor:accent3\'>//</span></b><b><span  style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";mso-bidi-font-family:  \"Courier New\";color:#404040;mso-themecolor:text1;mso-themetint:191;  mso-style-textfill-fill-color:#404040;mso-style-textfill-fill-themecolor:  text1;mso-style-textfill-fill-alpha:100.0%;mso-style-textfill-fill-colortransforms:  \"lumm=75000 lumo=25000\";background:yellow;mso-highlight:yellow\'>定義「<span  lang=EN-US>Point</span>」類別，此為基礎類別</span></b><b><span lang=EN-US  style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";mso-bidi-font-family:  \"Courier New\";color:#404040;mso-themecolor:text1;mso-themetint:191;  mso-style-textfill-fill-color:#404040;mso-style-textfill-fill-themecolor:  text1;mso-style-textfill-fill-alpha:100.0%;mso-style-textfill-fill-colortransforms:  \"lumm=75000 lumo=25000\"\'><o:p></o:p></span></b></p>  <p class=MsoNormal style=\'text-indent:5.0pt;background:white\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  mso-bidi-font-family:\"Courier New\"\'><o:p>&nbsp;</o:p></span></p>  <p class=MsoNormal style=\'text-indent:5.0pt;background:white\'><b><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  mso-bidi-font-family:\"Courier New\";color:#790029\'>public: </span></b><b><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  mso-bidi-font-family:\"Courier New\";color:#9BBB59;mso-themecolor:accent3\'>//</span></b><b><span  style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";mso-bidi-font-family:  \"Courier New\";color:#404040;mso-themecolor:text1;mso-themetint:191;  mso-style-textfill-fill-color:#404040;mso-style-textfill-fill-themecolor:  text1;mso-style-textfill-fill-alpha:100.0%;mso-style-textfill-fill-colortransforms:  \"lumm=75000 lumo=25000\";background:yellow;mso-highlight:yellow\'>宣告公有區成員</span></b><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  mso-bidi-font-family:\"Courier New\"\'><o:p></o:p></span></p>  <p class=MsoNormal style=\'text-indent:40.0pt;mso-char-indent-count:4.0;  background:white\'><b><span lang=EN-US style=\'font-size:10.0pt;font-family:  \"微軟正黑體\",\"sans-serif\";mso-bidi-font-family:\"Courier New\";color:#790029\'>Point(  <span class=SpellE>int</span> = 0, <span class=SpellE>int</span> = 0 ); </span></b><b><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  mso-bidi-font-family:\"Courier New\";color:#9BBB59;mso-themecolor:accent3\'>//</span></b><b><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  mso-bidi-font-family:\"Courier New\";color:#404040;mso-themecolor:text1;  mso-themetint:191;mso-style-textfill-fill-color:#404040;mso-style-textfill-fill-themecolor:  text1;mso-style-textfill-fill-alpha:100.0%;mso-style-textfill-fill-colortransforms:  \"lumm=75000 lumo=25000\";background:yellow;mso-highlight:yellow\'>(</span></b><b><span  style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";mso-bidi-font-family:  \"Courier New\";color:#404040;mso-themecolor:text1;mso-themetint:191;  mso-style-textfill-fill-color:#404040;mso-style-textfill-fill-themecolor:  text1;mso-style-textfill-fill-alpha:100.0%;mso-style-textfill-fill-colortransforms:  \"lumm=75000 lumo=25000\";background:yellow;mso-highlight:yellow\'>預設<span  lang=EN-US>)</span>建構子初始化</span></b><span lang=EN-US style=\'font-size:10.0pt;  font-family:\"微軟正黑體\",\"sans-serif\";mso-bidi-font-family:\"Courier New\"\'><o:p></o:p></span></p>  <p class=MsoNormal style=\'text-indent:5.0pt;background:white\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  mso-bidi-font-family:\"Courier New\"\'><o:p>&nbsp;</o:p></span></p>  <p class=MsoNormal style=\'text-indent:5.0pt;background:white\'><b><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  mso-bidi-font-family:\"Courier New\";color:#790029\'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  void <span class=SpellE>setX</span>( <span class=SpellE>int</span>  );&nbsp;&nbsp;&nbsp; </span></b><b><span lang=EN-US style=\'font-size:10.0pt;  font-family:\"微軟正黑體\",\"sans-serif\";mso-bidi-font-family:\"Courier New\";  color:#9BBB59;mso-themecolor:accent3\'>// </span></b><b><span  style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";mso-bidi-font-family:  \"Courier New\";color:#9BBB59;mso-themecolor:accent3\'>設定<span lang=EN-US>x</span>軸座標  </span></b><span lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  mso-bidi-font-family:\"Courier New\"\'><o:p></o:p></span></p>  <p class=MsoNormal style=\'text-indent:5.0pt;background:white\'><b><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  mso-bidi-font-family:\"Courier New\";color:#790029\'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <span class=SpellE>int</span> <span class=SpellE>getX</span>() <span  class=SpellE>const</span>;&nbsp;&nbsp;&nbsp; </span></b><b><span lang=EN-US  style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";mso-bidi-font-family:  \"Courier New\";color:#9BBB59;mso-themecolor:accent3\'>// return x from  coordinate pair </span></b><span lang=EN-US style=\'font-size:10.0pt;  font-family:\"微軟正黑體\",\"sans-serif\";mso-bidi-font-family:\"Courier New\"\'><o:p></o:p></span></p>  <p class=MsoNormal style=\'text-indent:5.0pt;background:white\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  mso-bidi-font-family:\"Courier New\"\'><o:p>&nbsp;</o:p></span></p>  <p class=MsoNormal style=\'text-indent:5.0pt;background:white\'><b><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  mso-bidi-font-family:\"Courier New\";color:#790029\'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  void <span class=SpellE>setY</span>( <span class=SpellE>int</span>  );&nbsp;&nbsp;&nbsp; </span></b><b><span lang=EN-US style=\'font-size:10.0pt;  font-family:\"微軟正黑體\",\"sans-serif\";mso-bidi-font-family:\"Courier New\";  color:#9BBB59;mso-themecolor:accent3\'>// </span></b><b><span  style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";mso-bidi-font-family:  \"Courier New\";color:#9BBB59;mso-themecolor:accent3\'>設定<span lang=EN-US>y</span>軸座標</span></b><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  mso-bidi-font-family:\"Courier New\"\'><o:p></o:p></span></p>  <p class=MsoNormal style=\'text-indent:5.0pt;background:white\'><b><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  mso-bidi-font-family:\"Courier New\";color:#790029\'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <span class=SpellE>int</span> <span class=SpellE>getY</span>() <span  class=SpellE>const</span>;&nbsp;&nbsp;&nbsp; </span></b><b><span lang=EN-US  style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";mso-bidi-font-family:  \"Courier New\";color:#9BBB59;mso-themecolor:accent3\'>// return y from  coordinate pair </span></b><span lang=EN-US style=\'font-size:10.0pt;  font-family:\"微軟正黑體\",\"sans-serif\";mso-bidi-font-family:\"Courier New\"\'><o:p></o:p></span></p>  <p class=MsoNormal style=\'text-indent:5.0pt;background:white\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  mso-bidi-font-family:\"Courier New\"\'><o:p>&nbsp;</o:p></span></p>  <p class=MsoNormal style=\'text-indent:5.0pt;background:white\'><b><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  mso-bidi-font-family:\"Courier New\";color:#790029\'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  void print() <span class=SpellE>const</span>;&nbsp; </span></b><b><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  mso-bidi-font-family:\"Courier New\";color:#9BBB59;mso-themecolor:accent3\'>//  output Point object </span></b><span lang=EN-US style=\'font-size:10.0pt;  font-family:\"微軟正黑體\",\"sans-serif\";mso-bidi-font-family:\"Courier New\"\'><o:p></o:p></span></p>  <p class=MsoNormal style=\'text-indent:5.0pt;background:white\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  mso-bidi-font-family:\"Courier New\"\'><o:p>&nbsp;</o:p></span></p>  <p class=MsoNormal style=\'text-indent:5.0pt;background:white\'><b><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  mso-bidi-font-family:\"Courier New\";color:#790029\'>protected: </span></b><b><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  mso-bidi-font-family:\"Courier New\";color:#9BBB59;mso-themecolor:accent3\'>//</span></b><b><span  style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";mso-bidi-font-family:  \"Courier New\";color:#404040;mso-themecolor:text1;mso-themetint:191;  mso-style-textfill-fill-color:#404040;mso-style-textfill-fill-themecolor:  text1;mso-style-textfill-fill-alpha:100.0%;mso-style-textfill-fill-colortransforms:  \"lumm=75000 lumo=25000\";background:yellow;mso-highlight:yellow\'>宣告保護區成員</span></b><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  mso-bidi-font-family:\"Courier New\"\'><o:p></o:p></span></p>  <p class=MsoNormal style=\'text-indent:5.0pt;background:white\'><b><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  mso-bidi-font-family:\"Courier New\";color:#790029\'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <span class=SpellE>int</span> x;&nbsp; </span></b><b><span lang=EN-US  style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";mso-bidi-font-family:  \"Courier New\";color:#9BBB59;mso-themecolor:accent3\'>// x part of coordinate  pair</span></b><span lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  mso-bidi-font-family:\"Courier New\"\'><o:p></o:p></span></p>  <p class=MsoNormal style=\'text-indent:5.0pt;background:white\'><b><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  mso-bidi-font-family:\"Courier New\";color:#790029\'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <span class=SpellE>int</span> y;&nbsp; </span></b><b><span lang=EN-US  style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";mso-bidi-font-family:  \"Courier New\";color:#9BBB59;mso-themecolor:accent3\'>// y part of coordinate  pair</span></b><span lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  mso-bidi-font-family:\"Courier New\"\'><o:p></o:p></span></p>  <p class=MsoNormal style=\'text-indent:5.0pt;background:white\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  mso-bidi-font-family:\"Courier New\"\'><o:p>&nbsp;</o:p></span></p>  <p class=MsoNormal style=\'text-indent:5.0pt;background:white\'><b><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  mso-bidi-font-family:\"Courier New\";color:#790029\'>}; </span></b><b><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  mso-bidi-font-family:\"Courier New\";color:#9BBB59;mso-themecolor:accent3\'>//  end class Point</span></b><b><span lang=EN-US style=\'font-size:10.0pt;  font-family:\"微軟正黑體\",\"sans-serif\";mso-bidi-font-family:\"Courier New\";  color:#790029\'> </span></b><span lang=EN-US style=\'font-size:10.0pt;  font-family:\"微軟正黑體\",\"sans-serif\";mso-bidi-font-family:\"Courier New\"\'><o:p></o:p></span></p>  <p class=MsoNormal style=\'text-indent:5.0pt;background:white\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  mso-bidi-font-family:\"Courier New\"\'><o:p>&nbsp;</o:p></span></p>  <p class=MsoNormal><b><span lang=EN-US style=\'font-size:10.0pt;font-family:  \"微軟正黑體\",\"sans-serif\";mso-bidi-font-family:\"Courier New\";color:#790029\'>#<span  class=SpellE>endif</span><o:p></o:p></span></b></p>  </td></tr></table><p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p><table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0 style=\'border-collapse:collapse;border:none;mso-border-alt:solid windowtext .5pt; mso-yfti-tbllook:1184;mso-padding-alt:0cm 5.4pt 0cm 5.4pt\'> <tr style=\'mso-yfti-irow:0;mso-yfti-firstrow:yes;mso-yfti-lastrow:yes\'>  <td width=54 valign=top style=\'width:40.85pt;border:solid windowtext 1.0pt;  mso-border-alt:solid windowtext .5pt;background:#B8CCE4;mso-background-themecolor:  accent1;mso-background-themetint:102;padding:0cm 5.4pt 0cm 5.4pt\'>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>1<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>2<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>3<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>4<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>5<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>6<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>7<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>8<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>9<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>10<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>11<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>12<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>13<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>14<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>15<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>16<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>17<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>18<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>19<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>20<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>21<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>22<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>23<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>24<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>25<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>26<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>27<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>28<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>29<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>30<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>31<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>32<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>33<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>34<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>35<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>36<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>37<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>38<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>39<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>40<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>41<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>42<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>43<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>44<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>45<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>46<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>47<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>48<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>49<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>50<o:p></o:p></span></b></p></td><td width=503 valign=top style=\'width:377.25pt;border:solid windowtext 1.0pt;  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt\'>  <p class=MsoNoSpacing><b><span lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:  11.0pt;font-family:\"微軟正黑體\",\"sans-serif\";color:#9BBB59;mso-themecolor:accent3\'>//  Point.cpp </span></b><b style=\'mso-bidi-font-weight:normal\'><span lang=EN-US  style=\'font-size:10.0pt;mso-bidi-font-size:12.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:#9BBB59;mso-themecolor:accent3\'><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b><span lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:  11.0pt;font-family:\"微軟正黑體\",\"sans-serif\";color:#9BBB59;mso-themecolor:accent3\'>//  </span></b><b><span style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;  font-family:\"微軟正黑體\",\"sans-serif\";color:#9BBB59;mso-themecolor:accent3\'>定義「<span  lang=EN-US>Point</span>」類別的成員函數 </span></b><b style=\'mso-bidi-font-weight:  normal\'><span lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;  font-family:\"微軟正黑體\",\"sans-serif\";color:#9BBB59;mso-themecolor:accent3\'><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b><span lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:  11.0pt;font-family:\"微軟正黑體\",\"sans-serif\";color:#790029\'>#include &lt;<span  class=SpellE>iostream</span>&gt;&nbsp; </span></b><b style=\'mso-bidi-font-weight:  normal\'><span lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;  font-family:\"微軟正黑體\",\"sans-serif\"\'><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'><o:p>&nbsp;</o:p></span></b></p>  <p class=MsoNoSpacing><b><span lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:  11.0pt;font-family:\"微軟正黑體\",\"sans-serif\";color:#790029\'>using <span  class=SpellE>std</span>::<span class=SpellE>cout</span>; </span></b><b  style=\'mso-bidi-font-weight:normal\'><span lang=EN-US style=\'font-size:10.0pt;  mso-bidi-font-size:11.0pt;font-family:\"微軟正黑體\",\"sans-serif\"\'><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'><o:p>&nbsp;</o:p></span></b></p>  <p class=MsoNoSpacing><b><span lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:  11.0pt;font-family:\"微軟正黑體\",\"sans-serif\";color:#790029\'>#include &quot;<span  class=SpellE>Point.h</span>&quot;&nbsp;&nbsp;</span></b><b><span lang=EN-US  style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:#9BBB59;mso-themecolor:accent3\'>//</span></b><b><span style=\'font-size:  10.0pt;mso-bidi-font-size:11.0pt;font-family:\"微軟正黑體\",\"sans-serif\";color:#9BBB59;  mso-themecolor:accent3\'>引用先前定義過的類別「<span lang=EN-US>Point</span>」</span></b><b><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\";color:#790029\'><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b><span lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:  11.0pt;font-family:\"微軟正黑體\",\"sans-serif\";color:#9BBB59;mso-themecolor:accent3\'>//</span></b><b><span  style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:#404040;mso-themecolor:text1;mso-themetint:191;mso-style-textfill-fill-color:  #404040;mso-style-textfill-fill-themecolor:text1;mso-style-textfill-fill-alpha:  100.0%;mso-style-textfill-fill-colortransforms:\"lumm=75000 lumo=25000\";  background:yellow;mso-highlight:yellow\'>建構子定義，其中 “<span lang=EN-US>::</span>”為  <i style=\'mso-bidi-font-style:normal\'><span lang=EN-US>resolution scope  operator</span></i></span></b><b><i style=\'mso-bidi-font-style:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\";color:#790029\'><o:p></o:p></span></i></b></p>  <p class=MsoNoSpacing><b><span lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:  11.0pt;font-family:\"微軟正黑體\",\"sans-serif\";color:#9BBB59;mso-themecolor:accent3\'>//</span></b><b><span  style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:#404040;mso-themecolor:text1;mso-themetint:191;mso-style-textfill-fill-color:  #404040;mso-style-textfill-fill-themecolor:text1;mso-style-textfill-fill-alpha:  100.0%;mso-style-textfill-fill-colortransforms:\"lumm=75000 lumo=25000\";  background:yellow;mso-highlight:yellow\'>當我們需要在類別外定義成員之內容時，必須使用 “<span  lang=EN-US>::</span>”。</span></b><b style=\'mso-bidi-font-weight:normal\'><span  style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:#404040;mso-themecolor:text1;mso-themetint:191;mso-style-textfill-fill-color:  #404040;mso-style-textfill-fill-themecolor:text1;mso-style-textfill-fill-alpha:  100.0%;mso-style-textfill-fill-colortransforms:\"lumm=75000 lumo=25000\"\'> </span></b><b  style=\'mso-bidi-font-weight:normal\'><span lang=EN-US style=\'font-size:10.0pt;  mso-bidi-font-size:11.0pt;font-family:\"微軟正黑體\",\"sans-serif\"\'><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b><span lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:  11.0pt;font-family:\"微軟正黑體\",\"sans-serif\";color:#790029\'>Point::Point( <span  class=SpellE>int</span> <span class=SpellE>xValue</span>, <span class=SpellE>int</span>  <span class=SpellE>yValue</span> ) </span></b><b style=\'mso-bidi-font-weight:  normal\'><span lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;  font-family:\"微軟正黑體\",\"sans-serif\"\'><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b><span lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:  11.0pt;font-family:\"微軟正黑體\",\"sans-serif\";color:#790029\'>{ </span></b><b  style=\'mso-bidi-font-weight:normal\'><span lang=EN-US style=\'font-size:10.0pt;  mso-bidi-font-size:11.0pt;font-family:\"微軟正黑體\",\"sans-serif\"\'><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b><span lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:  11.0pt;font-family:\"微軟正黑體\",\"sans-serif\";color:#790029\'>&nbsp;&nbsp; x = <span  class=SpellE>xValue</span>; </span></b><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b><span lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:  11.0pt;font-family:\"微軟正黑體\",\"sans-serif\";color:#790029\'>&nbsp;&nbsp; y = <span  class=SpellE>yValue</span>; <o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b><span lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:  11.0pt;font-family:\"微軟正黑體\",\"sans-serif\";color:#9BBB59;mso-themecolor:accent3\'>//</span></b><b><span  style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:#404040;mso-themecolor:text1;mso-themetint:191;mso-style-textfill-fill-color:  #404040;mso-style-textfill-fill-themecolor:text1;mso-style-textfill-fill-alpha:  100.0%;mso-style-textfill-fill-colortransforms:\"lumm=75000 lumo=25000\";  background:yellow;mso-highlight:yellow\'>保護區成員，在類別當中就像私有區成員，存取只能透過類別的成員函數</span></b><b  style=\'mso-bidi-font-weight:normal\'><span lang=EN-US style=\'font-size:10.0pt;  mso-bidi-font-size:11.0pt;font-family:\"微軟正黑體\",\"sans-serif\"\'><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b><span lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:  11.0pt;font-family:\"微軟正黑體\",\"sans-serif\";color:#790029\'>}</span></b><b><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\";color:#9BBB59;mso-themecolor:accent3\'> // end Point  constructor</span></b><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'><o:p>&nbsp;</o:p></span></b></p>  <p class=MsoNoSpacing><b><span lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:  11.0pt;font-family:\"微軟正黑體\",\"sans-serif\";color:#790029\'>// set x in coordinate  pair</span></b><b style=\'mso-bidi-font-weight:normal\'><span lang=EN-US  style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:\"微軟正黑體\",\"sans-serif\"\'><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b><span lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:  11.0pt;font-family:\"微軟正黑體\",\"sans-serif\";color:#790029\'>void Point::<span  class=SpellE>setX</span>( <span class=SpellE>int</span> <span class=SpellE>xValue</span>  )</span></b><b style=\'mso-bidi-font-weight:normal\'><span lang=EN-US  style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:\"微軟正黑體\",\"sans-serif\"\'><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b><span lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:  11.0pt;font-family:\"微軟正黑體\",\"sans-serif\";color:#790029\'>{</span></b><b  style=\'mso-bidi-font-weight:normal\'><span lang=EN-US style=\'font-size:10.0pt;  mso-bidi-font-size:11.0pt;font-family:\"微軟正黑體\",\"sans-serif\"\'><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b><span lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:  11.0pt;font-family:\"微軟正黑體\",\"sans-serif\";color:#790029\'>&nbsp;&nbsp; x = <span  class=SpellE>xValue</span>; </span></b><b><span lang=EN-US style=\'font-size:  10.0pt;mso-bidi-font-size:11.0pt;font-family:\"微軟正黑體\",\"sans-serif\";color:#9BBB59;  mso-themecolor:accent3\'>// no need for validation</span></b><b  style=\'mso-bidi-font-weight:normal\'><span lang=EN-US style=\'font-size:10.0pt;  mso-bidi-font-size:11.0pt;font-family:\"微軟正黑體\",\"sans-serif\"\'><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'><o:p>&nbsp;</o:p></span></b></p>  <p class=MsoNoSpacing><b><span lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:  11.0pt;font-family:\"微軟正黑體\",\"sans-serif\";color:#790029\'>} </span></b><b><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\";color:#9BBB59;mso-themecolor:accent3\'>// end function <span  class=SpellE>setX</span></span></b><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b><span lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:  11.0pt;font-family:\"微軟正黑體\",\"sans-serif\";color:#790029\'><o:p>&nbsp;</o:p></span></b></p>  <p class=MsoNoSpacing><b><span lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:  11.0pt;font-family:\"微軟正黑體\",\"sans-serif\";color:#9BBB59;mso-themecolor:accent3\'>//  return x from coordinate pair</span></b><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\";color:#9BBB59;mso-themecolor:accent3\'><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><span class=SpellE><b><span lang=EN-US  style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:#790029\'>int</span></b></span><b><span lang=EN-US style=\'font-size:  10.0pt;mso-bidi-font-size:11.0pt;font-family:\"微軟正黑體\",\"sans-serif\";color:#790029\'>  Point::<span class=SpellE>getX</span>() <span class=SpellE>const</span> </span></b><b  style=\'mso-bidi-font-weight:normal\'><span lang=EN-US style=\'font-size:10.0pt;  mso-bidi-font-size:11.0pt;font-family:\"微軟正黑體\",\"sans-serif\"\'><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b><span lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:  11.0pt;font-family:\"微軟正黑體\",\"sans-serif\";color:#790029\'>{ </span></b><b  style=\'mso-bidi-font-weight:normal\'><span lang=EN-US style=\'font-size:10.0pt;  mso-bidi-font-size:11.0pt;font-family:\"微軟正黑體\",\"sans-serif\"\'><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b><span lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:  11.0pt;font-family:\"微軟正黑體\",\"sans-serif\";color:#790029\'>&nbsp;&nbsp; return x;  </span></b><b style=\'mso-bidi-font-weight:normal\'><span lang=EN-US  style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:\"微軟正黑體\",\"sans-serif\"\'><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'><o:p>&nbsp;</o:p></span></b></p>  <p class=MsoNoSpacing><b><span lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:  11.0pt;font-family:\"微軟正黑體\",\"sans-serif\";color:#790029\'>} </span></b><b><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\";color:#9BBB59;mso-themecolor:accent3\'>// end function <span  class=SpellE>getX</span></span></b><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'><o:p>&nbsp;</o:p></span></b></p>  <p class=MsoNoSpacing><b><span lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:  11.0pt;font-family:\"微軟正黑體\",\"sans-serif\";color:#9BBB59;mso-themecolor:accent3\'>//  set y in coordinate pair</span></b><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\";color:#9BBB59;mso-themecolor:accent3\'><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b><span lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:  11.0pt;font-family:\"微軟正黑體\",\"sans-serif\";color:#790029\'>void Point::<span  class=SpellE>setY</span>( <span class=SpellE>int</span> <span class=SpellE>yValue</span>  ) </span></b><b style=\'mso-bidi-font-weight:normal\'><span lang=EN-US  style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:\"微軟正黑體\",\"sans-serif\"\'><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b><span lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:  11.0pt;font-family:\"微軟正黑體\",\"sans-serif\";color:#790029\'>{ </span></b><b  style=\'mso-bidi-font-weight:normal\'><span lang=EN-US style=\'font-size:10.0pt;  mso-bidi-font-size:11.0pt;font-family:\"微軟正黑體\",\"sans-serif\"\'><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b><span lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:  11.0pt;font-family:\"微軟正黑體\",\"sans-serif\";color:#790029\'>&nbsp;&nbsp; y = <span  class=SpellE>yValue</span>; </span></b><b><span lang=EN-US style=\'font-size:  10.0pt;mso-bidi-font-size:11.0pt;font-family:\"微軟正黑體\",\"sans-serif\";color:#9BBB59;  mso-themecolor:accent3\'>// no need for validation</span></b><b  style=\'mso-bidi-font-weight:normal\'><span lang=EN-US style=\'font-size:10.0pt;  mso-bidi-font-size:11.0pt;font-family:\"微軟正黑體\",\"sans-serif\"\'><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'><o:p>&nbsp;</o:p></span></b></p>  <p class=MsoNoSpacing><b><span lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:  11.0pt;font-family:\"微軟正黑體\",\"sans-serif\";color:#790029\'>} </span></b><b><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\";color:#9BBB59;mso-themecolor:accent3\'>// end function <span  class=SpellE>setY</span></span></b><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'><o:p>&nbsp;</o:p></span></b></p>  <p class=MsoNoSpacing><b><span lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:  11.0pt;font-family:\"微軟正黑體\",\"sans-serif\";color:#9BBB59;mso-themecolor:accent3\'>//  return y from coordinate pair</span></b><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\";color:#9BBB59;mso-themecolor:accent3\'><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><span class=SpellE><b><span lang=EN-US  style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:#790029\'>int</span></b></span><b><span lang=EN-US style=\'font-size:  10.0pt;mso-bidi-font-size:11.0pt;font-family:\"微軟正黑體\",\"sans-serif\";color:#790029\'>  Point::<span class=SpellE>getY</span>() <span class=SpellE>const</span></span></b><b  style=\'mso-bidi-font-weight:normal\'><span lang=EN-US style=\'font-size:10.0pt;  mso-bidi-font-size:11.0pt;font-family:\"微軟正黑體\",\"sans-serif\"\'><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b><span lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:  11.0pt;font-family:\"微軟正黑體\",\"sans-serif\";color:#790029\'>{ </span></b><b  style=\'mso-bidi-font-weight:normal\'><span lang=EN-US style=\'font-size:10.0pt;  mso-bidi-font-size:11.0pt;font-family:\"微軟正黑體\",\"sans-serif\"\'><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b><span lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:  11.0pt;font-family:\"微軟正黑體\",\"sans-serif\";color:#790029\'>&nbsp;&nbsp; return y;</span></b><b  style=\'mso-bidi-font-weight:normal\'><span lang=EN-US style=\'font-size:10.0pt;  mso-bidi-font-size:11.0pt;font-family:\"微軟正黑體\",\"sans-serif\"\'><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'><o:p>&nbsp;</o:p></span></b></p>  <p class=MsoNoSpacing><b><span lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:  11.0pt;font-family:\"微軟正黑體\",\"sans-serif\";color:#790029\'>} </span></b><b><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\";color:#9BBB59;mso-themecolor:accent3\'>// end function <span  class=SpellE>getY</span></span></b><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'><o:p>&nbsp;</o:p></span></b></p>  <p class=MsoNoSpacing><b><span lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:  11.0pt;font-family:\"微軟正黑體\",\"sans-serif\";color:#9BBB59;mso-themecolor:accent3\'>//  output Point object</span></b><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\";color:#9BBB59;mso-themecolor:accent3\'><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b><span lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:  11.0pt;font-family:\"微軟正黑體\",\"sans-serif\";color:#790029\'>void Point::print() <span  class=SpellE>const</span> </span></b><b><span lang=EN-US style=\'font-size:  10.0pt;mso-bidi-font-size:11.0pt;font-family:\"微軟正黑體\",\"sans-serif\";color:#9BBB59;  mso-themecolor:accent3\'>//</span></b><b><span style=\'font-size:10.0pt;  mso-bidi-font-size:11.0pt;font-family:\"微軟正黑體\",\"sans-serif\";color:#9BBB59;  mso-themecolor:accent3\'>印出「<span lang=EN-US>Point</span>」物件的成員函數</span></b><b  style=\'mso-bidi-font-weight:normal\'><span lang=EN-US style=\'font-size:10.0pt;  mso-bidi-font-size:11.0pt;font-family:\"微軟正黑體\",\"sans-serif\"\'><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b><span lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:  11.0pt;font-family:\"微軟正黑體\",\"sans-serif\";color:#790029\'>{ </span></b><b  style=\'mso-bidi-font-weight:normal\'><span lang=EN-US style=\'font-size:10.0pt;  mso-bidi-font-size:11.0pt;font-family:\"微軟正黑體\",\"sans-serif\"\'><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b><span lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:  11.0pt;font-family:\"微軟正黑體\",\"sans-serif\";color:#790029\'>&nbsp;&nbsp; <span  class=SpellE>cout</span> &lt;&lt; \'[\' &lt;&lt; x &lt;&lt; &quot;, &quot;  &lt;&lt; y &lt;&lt; \']\'; </span></b><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'><o:p>&nbsp;</o:p></span></b></p>  <p class=MsoNoSpacing><b><span lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:  11.0pt;font-family:\"微軟正黑體\",\"sans-serif\";color:#790029\'>} </span></b><b><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\";color:#9BBB59;mso-themecolor:accent3\'>// end function  print</span></b><b style=\'mso-bidi-font-weight:normal\'><span lang=EN-US  style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:\"微軟正黑體\",\"sans-serif\"\'><o:p></o:p></span></b></p></td></tr></table></div>";
	
		
		//右框的swf切換 & 寫入資料庫
			$.post("SQL_page_change.php",{sql:turn }, function (msg){});

		turn = 0;	
		page = 57;
			
		page_flag[57]=1;  //表示page 57已經讀過。
	}
} 
 
 
 
 //定義mp3檔總共多長，秒
 
/* 
 var mp3_Time = new Array(); 


 mp3_Time[2]= 32*1000; // p2
 mp3_Time[3]= 36*1000; 
 mp3_Time[4]= 40*1000;
 mp3_Time[5]= 27*1000;
 mp3_Time[6]= 17*1000;//還沒放
 
 mp3_Time[7]= 21*1000; //p3
 mp3_Time[8]= 9*1000;
 mp3_Time[9]= 4*1000;
 mp3_Time[10]= 14*1000;
 mp3_Time[11]= 9*1000;
 mp3_Time[12]= 23*1000;
 mp3_Time[13]= 28*1000;
 mp3_Time[14]= 16*1000;
 
 mp3_Time[15]= 16*1000; //p4
 mp3_Time[16]= 2*1000;
 mp3_Time[17]= 6*1000;
 mp3_Time[18]= 10*1000;
 mp3_Time[19]= 7*1000;
 mp3_Time[20]= 37*1000;
 
 mp3_Time[21]= 32*1000; //p5
 mp3_Time[22]= 31*1000;
 mp3_Time[23]= 20*1000;
 mp3_Time[24]= 11*1000;
 mp3_Time[25]= 27*1000;
 mp3_Time[26]= 19*1000;
 mp3_Time[27]= 17*1000;
 mp3_Time[28]= 11*1000;
 
   mp3_Time[29]= 7*1000;
  mp3_Time[30]= 12*1000;
  mp3_Time[31]= 18*1000;
  mp3_Time[32]= 13*1000;
  mp3_Time[33]= 34*1000;
  mp3_Time[34]= 40*1000;
  mp3_Time[35]= 16*1000;
  mp3_Time[36]= 11*1000;
  mp3_Time[37]= 4*1000;
  mp3_Time[38]= 8*1000;
  mp3_Time[39]= 12*1000;
  mp3_Time[40]= 7*1000;
  mp3_Time[41]= 13*1000;
  mp3_Time[42]= 28*1000;
  mp3_Time[43]= 19*1000;
  mp3_Time[44]= 39*1000;
  mp3_Time[45]= 24*1000;
  mp3_Time[46]= 29*1000;
  mp3_Time[47]= 21*1000;
  mp3_Time[48]= 34*1000;
  mp3_Time[49]= 25*1000;
  mp3_Time[50]= 78*1000;
  mp3_Time[51]= 3*1000;
  mp3_Time[52]= 22*1000;
  mp3_Time[53]= 40*1000;
  mp3_Time[54]= 19*1000;
  mp3_Time[55]= 25*1000;
  mp3_Time[56]= 23*1000;
  mp3_Time[57]= 7*1000; 
 */
 
 //測試用
 var mp3_Time = new Array(); 
 mp3_Time[2]= 1*1000; 
 mp3_Time[3]= 1*1000; 
 mp3_Time[4]= 1*1000;
 mp3_Time[5]= 1*1000;
 mp3_Time[6]= 1*1000;//還沒放
 
 mp3_Time[7]= 1*1000; 
 mp3_Time[8]= 1*1000;
 mp3_Time[9]= 1*1000;
 mp3_Time[10]= 1*1000;
 mp3_Time[11]= 1*1000;
 mp3_Time[12]= 1*1000;
 mp3_Time[13]= 1*1000;
 mp3_Time[14]= 1*1000;
 
 mp3_Time[15]= 1*1000; 
 mp3_Time[16]= 1*1000;
 mp3_Time[17]= 1*1000;
 mp3_Time[18]= 1*1000;
 mp3_Time[19]= 1*1000;
 mp3_Time[20]= 1*1000;
 
 mp3_Time[21]= 1*1000; 
 mp3_Time[22]= 1*1000;
 mp3_Time[23]= 1*1000;
 mp3_Time[24]= 1*1000;
 mp3_Time[25]= 1*1000;
 mp3_Time[26]= 1*1000;
 mp3_Time[27]= 1*1000;
 mp3_Time[28]= 1*1000;
 
  mp3_Time[29]= 1*1000;
  mp3_Time[30]= 1*1000;
  mp3_Time[31]= 1*1000;
  mp3_Time[32]= 1*1000;
  mp3_Time[33]= 1*1000;
  mp3_Time[34]= 1*1000;
  mp3_Time[35]= 1*1000;
  mp3_Time[36]= 1*1000;
  mp3_Time[37]= 1*1000;
  mp3_Time[38]= 1*1000;
  mp3_Time[39]= 1*1000;
  mp3_Time[40]= 1*1000;
  mp3_Time[41]= 1*1000;
  mp3_Time[42]= 1*1000;
  mp3_Time[43]= 1*1000;
  mp3_Time[44]= 1*1000;
  mp3_Time[45]= 1*1000;
  mp3_Time[46]= 1*1000;
  mp3_Time[47]= 1*1000;
  mp3_Time[48]= 1*1000;
  mp3_Time[49]= 1*1000;
  mp3_Time[50]= 1*1000;
  mp3_Time[51]= 1*1000;
  mp3_Time[52]= 1*1000;
  mp3_Time[53]= 1*1000;
  mp3_Time[54]= 1*1000;
  mp3_Time[55]= 1*1000;
  mp3_Time[56]= 1*1000;
  mp3_Time[57]= 1*1000; 

 
 
 function Next_Page( )
 {
  switch(page){
  case 1: //目前在p1頁，下一頁前往p2
  
		if(page_flag[2]==0)  //第一次閱讀該頁
		{
			Button_disable();		
			setTimeout('Button_enable()',  mp3_Time[2] );
			//語音撥放器  autostart = 1
			document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P2_0.mp3&javascript=on  &amp;autostart=1" /><param name="wmode" value="transparent" /></object>';
		
		}
		else
		{
			Button_enable();
			//語音撥放器  autostart = 0
			document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P2_0.mp3&javascript=on  &amp;autostart=0" /><param name="wmode" value="transparent" /></object>';
			
		}
  
	  	//左邊標題區的變化
		LeftTitle_change_p2();
		
	 	//右框swf變換成p2 
	  	document.getElementById('flashContent').innerHTML='<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="700" height="525" id="p2" align="middle"><param name="movie" value="p2.swf" />				<param name="quality" value="high" />				<param name="bgcolor" value="#ffffff" />				<param name="play" value="true" />				<param name="loop" value="true" />				<param name="wmode" value="window" />				<param name="scale" value="showall" />				<param name="menu" value="true" />				<param name="devicefont" value="false" />				<param name="salign" value="" />				<param name="allowScriptAccess" value="sameDomain" />				<object type="application/x-shockwave-flash" data="p2.swf" width="700" height="525">					<param id="swff2" name="movie" value="p2.swf" />					<param name="quality" value="high" />					<param name="bgcolor" value="#ffffff" />					<param name="play" value="true" />					<param name="loop" value="true" />					<param name="wmode" value="window" />					<param name="scale" value="showall" />					<param name="menu" value="true" />					<param name="devicefont" value="false" />					<param name="salign" value="" />					<param name="allowScriptAccess" value="sameDomain" />									<a href="http://www.adobe.com/go/getflash">						<img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="取得 Adobe Flash 播放程式" />					</a></object></object>';
		
	
		
		
		$.post("SQL_next_page.php",
			  {	
				sql:page	   
					   		   
			  },
			  function (msg){

				  });
		
		page=page+1;
		page_flag[2]=1;

	break;
	
  case 2: //目前在p2頁，下一頁前往p2_1
		if(page_flag[3]==0)  //第一次閱讀該頁
		{
			Button_disable();		
			setTimeout('Button_enable()',  mp3_Time[3] );
			//語音撥放器  autostart = 1
			document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P2_1.mp3&javascript=on  &amp;autostart=1" /><param name="wmode" value="transparent" /></object>';
		
		}
		else
		{
			Button_enable();
			//語音撥放器  autostart = 0
			document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P2_1.mp3&javascript=on  &amp;autostart=0" /><param name="wmode" value="transparent" /></object>';
			
		}
  
		//右框swf變換成p2_1
		document.getElementById('flashContent').innerHTML='<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="700" height="525" id="p2_1" align="middle">	<param name="movie" value="p2_1.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" /><param name="wmode" value="window" /><param name="scale" value="showall" /><param name="menu" value="true" /><param name="devicefont" value="false" /><param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><object type="application/x-shockwave-flash" data="p2_1.swf" width="700" height="525"><param name="movie" value="p2_1.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" />	<param name="wmode" value="window" /><param name="scale" value="showall" />	<param name="menu" value="true" /><param name="devicefont" value="false" />	<param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><a href="http://www.adobe.com/go/getflash"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="取得 Adobe Flash 播放程式" /></a></object></object>';

		
		$.post("SQL_next_page.php",
			  {	
				sql:page	   
					   		   
			  },
			  function (msg){

				  });

	   	page=page+1;
		page_flag[3]=1;
		
   break;
   
  case 3:  //目前在p2_1頁，下一頁前往p2_2
		if(page_flag[4]==0)  //第一次閱讀該頁
		{
			Button_disable();		
			setTimeout('Button_enable()',  mp3_Time[4] );
			//語音撥放器  autostart = 1
			document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P2_2.mp3&javascript=on  &amp;autostart=1" /><param name="wmode" value="transparent" /></object>';
		
		}
		else
		{
			Button_enable();
			//語音撥放器  autostart = 0
			document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P2_2.mp3&javascript=on  &amp;autostart=0" /><param name="wmode" value="transparent" /></object>';
			
		}
 
		document.getElementById('flashContent').innerHTML='<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="700" height="525" id="p2_2" align="middle">	<param name="movie" value="p2_2.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" /><param name="wmode" value="window" /><param name="scale" value="showall" /><param name="menu" value="true" /><param name="devicefont" value="false" /><param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><object type="application/x-shockwave-flash" data="p2_2.swf" width="700" height="525"><param name="movie" value="p2_2.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" />	<param name="wmode" value="window" /><param name="scale" value="showall" />	<param name="menu" value="true" /><param name="devicefont" value="false" />	<param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><a href="http://www.adobe.com/go/getflash"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="取得 Adobe Flash 播放程式" /></a></object></object>';

		
		
		$.post("SQL_next_page.php", {	sql:page },
					function (msg){   }
			   );

	   	page=page+1;
		page_flag[4]=1;

   break;
   
   case 4:  //目前在p2_2頁，下一頁前往p2_3
		if(page_flag[5]==0)  //第一次閱讀該頁
		{
			Button_disable();		
			setTimeout('Button_enable()',  mp3_Time[5] );
			//語音撥放器  autostart = 1
			document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P2_3.mp3&javascript=on  &amp;autostart=1" /><param name="wmode" value="transparent" /></object>';
		
		}
		else
		{
			Button_enable();
			//語音撥放器  autostart = 0
			document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P2_3.mp3&javascript=on  &amp;autostart=0" /><param name="wmode" value="transparent" /></object>';
			
		}   
		
		
	  	document.getElementById('flashContent').innerHTML='<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="700" height="525" id="p2_3" align="middle">	<param name="movie" value="p2_3.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" /><param name="wmode" value="window" /><param name="scale" value="showall" /><param name="menu" value="true" /><param name="devicefont" value="false" /><param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><object type="application/x-shockwave-flash" data="p2_3.swf" width="700" height="525"><param name="movie" value="p2_3.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" />	<param name="wmode" value="window" /><param name="scale" value="showall" />	<param name="menu" value="true" /><param name="devicefont" value="false" />	<param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><a href="http://www.adobe.com/go/getflash"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="取得 Adobe Flash 播放程式" /></a></object></object>';

		

		$.post("SQL_next_page.php", {	sql:page },
					function (msg){  }
			   );
	   	page=page+1;
		page_flag[5]=1;		
   break;
   
   case 5: //目前在p2_3頁，下一頁前往p2_4
		if(page_flag[6]==0)  //第一次閱讀該頁
		{
			Button_disable();		
			setTimeout('Button_enable()',  mp3_Time[6] );
			//語音撥放器  autostart = 1
			document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P2_4.mp3&javascript=on  &amp;autostart=1" /><param name="wmode" value="transparent" /></object>';
		
		}
		else
		{
			Button_enable();
			//語音撥放器  autostart = 0
			document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P2_4.mp3&javascript=on  &amp;autostart=0" /><param name="wmode" value="transparent" /></object>';
			
		}
   
	   	document.getElementById('flashContent').innerHTML='<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="700" height="525" id="p2_4" align="middle">	<param name="movie" value="p2_4.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" /><param name="wmode" value="window" /><param name="scale" value="showall" /><param name="menu" value="true" /><param name="devicefont" value="false" /><param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><object type="application/x-shockwave-flash" data="p2_4.swf" width="700" height="525"><param name="movie" value="p2_4.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" />	<param name="wmode" value="window" /><param name="scale" value="showall" />	<param name="menu" value="true" /><param name="devicefont" value="false" />	<param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><a href="http://www.adobe.com/go/getflash"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="取得 Adobe Flash 播放程式" /></a></object></object>';
	
		
		$.post("SQL_next_page.php", {	sql:page },
					function (msg){ }
			   );
	   	page=page+1;
		page_flag[6]=1;		
		
	break;
	
	case 6:  //目前在p2_4頁，下一頁前往p3
		if(page_flag[7]==0)  //第一次閱讀該頁
		{
			Button_disable();		
			setTimeout('Button_enable()',  mp3_Time[7] );
			//語音撥放器  autostart = 1
			document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P3_0.mp3&javascript=on  &amp;autostart=1" /><param name="wmode" value="transparent" /></object>';
		
		}
		else
		{
			Button_enable();
			//語音撥放器  autostart = 0
			document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P3_0.mp3&javascript=on  &amp;autostart=0" /><param name="wmode" value="transparent" /></object>';
			
		} 
	
		 //左邊標題區的變化
		LeftTitle_change_p3();
		 
		 
		 
	 	//右框swf變換成p3	
	   	document.getElementById('flashContent').innerHTML='<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="700" height="525" id="p3" align="middle">	<param name="movie" value="p3.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" /><param name="wmode" value="window" /><param name="scale" value="showall" /><param name="menu" value="true" /><param name="devicefont" value="false" /><param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><object type="application/x-shockwave-flash" data="p3.swf" width="700" height="525"><param name="movie" value="p3.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" />	<param name="wmode" value="window" /><param name="scale" value="showall" />	<param name="menu" value="true" /><param name="devicefont" value="false" />	<param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><a href="http://www.adobe.com/go/getflash"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="取得 Adobe Flash 播放程式" /></a></object></object>';

		
		$.post("SQL_next_page.php", {	sql:page },
					function (msg){ }
			   );
	   	page=page+1; 
		page_flag[7]=1;		
	break;
	
	
	case 7:  //目前在p3頁，下一頁前往p3_1
		if(page_flag[8]==0)  //第一次閱讀該頁
		{
			Button_disable();		
			setTimeout('Button_enable()',  mp3_Time[8] );
			//語音撥放器  autostart = 1
			document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P3_1.mp3&javascript=on  &amp;autostart=1" /><param name="wmode" value="transparent" /></object>';
		
		}
		else
		{
			Button_enable();
			//語音撥放器  autostart = 0
			document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P3_1.mp3&javascript=on  &amp;autostart=0" /><param name="wmode" value="transparent" /></object>';
			
		} 
	
	   	document.getElementById('flashContent').innerHTML='<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="700" height="525" id="p3_1" align="middle">	<param name="movie" value="p3_1.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" /><param name="wmode" value="window" /><param name="scale" value="showall" /><param name="menu" value="true" /><param name="devicefont" value="false" /><param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><object type="application/x-shockwave-flash" data="p3_1.swf" width="700" height="525"><param name="movie" value="p3_1.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" />	<param name="wmode" value="window" /><param name="scale" value="showall" />	<param name="menu" value="true" /><param name="devicefont" value="false" />	<param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><a href="http://www.adobe.com/go/getflash"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="取得 Adobe Flash 播放程式" /></a></object></object>';

		
		$.post("SQL_next_page.php", {	sql:page },
					function (msg){ }
				);
		page=page+1;
		page_flag[8]=1;		
	break;
   
   
  	case 8:  //目前在p3_1頁，下一頁前往p3_2
		if(page_flag[9]==0)  //第一次閱讀該頁
		{
			Button_disable();		
			setTimeout('Button_enable()',  mp3_Time[9] );
			//語音撥放器  autostart = 1
			document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P3_2.mp3&javascript=on  &amp;autostart=1" /><param name="wmode" value="transparent" /></object>';
		
		}
		else
		{
			Button_enable();
			//語音撥放器  autostart = 0
			document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P3_2.mp3&javascript=on  &amp;autostart=0" /><param name="wmode" value="transparent" /></object>';
			
		} 
	
	   	document.getElementById('flashContent').innerHTML='<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="700" height="525" id="p3_2" align="middle">	<param name="movie" value="p3_2.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" /><param name="wmode" value="window" /><param name="scale" value="showall" /><param name="menu" value="true" /><param name="devicefont" value="false" /><param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><object type="application/x-shockwave-flash" data="p3_2.swf" width="700" height="525"><param name="movie" value="p3_2.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" />	<param name="wmode" value="window" /><param name="scale" value="showall" />	<param name="menu" value="true" /><param name="devicefont" value="false" />	<param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><a href="http://www.adobe.com/go/getflash"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="取得 Adobe Flash 播放程式" /></a></object></object>';

		
		$.post("SQL_next_page.php", {	sql:page },
					function (msg){ }
				);
		page=page+1;
		page_flag[9]=1;		
	break; 
   

  	case 9:  //目前在p3_2頁，下一頁前往p3_3
		if(page_flag[10]==0)  //第一次閱讀該頁
		{
			Button_disable();		
			setTimeout('Button_enable()',  mp3_Time[10] );
			//語音撥放器  autostart = 1
			document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P3_3.mp3&javascript=on  &amp;autostart=1" /><param name="wmode" value="transparent" /></object>';
		
		}
		else
		{
			Button_enable();
			//語音撥放器  autostart = 0
			document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P3_3.mp3&javascript=on  &amp;autostart=0" /><param name="wmode" value="transparent" /></object>';
			
		} 
		
	   	document.getElementById('flashContent').innerHTML='<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="700" height="525" id="p3_3" align="middle">	<param name="movie" value="p3_3.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" /><param name="wmode" value="window" /><param name="scale" value="showall" /><param name="menu" value="true" /><param name="devicefont" value="false" /><param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><object type="application/x-shockwave-flash" data="p3_3.swf" width="700" height="525"><param name="movie" value="p3_3.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" />	<param name="wmode" value="window" /><param name="scale" value="showall" />	<param name="menu" value="true" /><param name="devicefont" value="false" />	<param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><a href="http://www.adobe.com/go/getflash"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="取得 Adobe Flash 播放程式" /></a></object></object>';

		
		$.post("SQL_next_page.php", {	sql:page },
					function (msg){ }
				);
		page=page+1; 
		page_flag[10]=1;		
	break;    
   
   
  	case 10:  //目前在p3_3頁，下一頁前往p3_4
		if(page_flag[11]==0)  //第一次閱讀該頁
		{
			Button_disable();		
			setTimeout('Button_enable()',  mp3_Time[11] );
			//語音撥放器  autostart = 1
			document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P3_4.mp3&javascript=on  &amp;autostart=1" /><param name="wmode" value="transparent" /></object>';
		
		}
		else
		{
			Button_enable();
			//語音撥放器  autostart = 0
			document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P3_4.mp3&javascript=on  &amp;autostart=0" /><param name="wmode" value="transparent" /></object>';
			
		} 
	
	   	document.getElementById('flashContent').innerHTML='<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="700" height="525" id="p3_4" align="middle">	<param name="movie" value="p3_4.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" /><param name="wmode" value="window" /><param name="scale" value="showall" /><param name="menu" value="true" /><param name="devicefont" value="false" /><param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><object type="application/x-shockwave-flash" data="p3_4.swf" width="700" height="525"><param name="movie" value="p3_4.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" />	<param name="wmode" value="window" /><param name="scale" value="showall" />	<param name="menu" value="true" /><param name="devicefont" value="false" />	<param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><a href="http://www.adobe.com/go/getflash"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="取得 Adobe Flash 播放程式" /></a></object></object>';

		
		$.post("SQL_next_page.php", {	sql:page },
					function (msg){ }
				);
		page=page+1;
		page_flag[11]=1;		
	break;      


  	case 11:  //目前在p3_4頁，下一頁前往p3_5
		if(page_flag[12]==0)  //第一次閱讀該頁
		{
			Button_disable();		
			setTimeout('Button_enable()',  mp3_Time[12] );
			//語音撥放器  autostart = 1
			document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P3_5.mp3&javascript=on  &amp;autostart=1" /><param name="wmode" value="transparent" /></object>';
		
		}
		else
		{
			Button_enable();
			//語音撥放器  autostart = 0
			document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P3_5.mp3&javascript=on  &amp;autostart=0" /><param name="wmode" value="transparent" /></object>';
			
		} 
	
	   	document.getElementById('flashContent').innerHTML='<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="700" height="525" id="p3_5" align="middle">	<param name="movie" value="p3_5.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" /><param name="wmode" value="window" /><param name="scale" value="showall" /><param name="menu" value="true" /><param name="devicefont" value="false" /><param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><object type="application/x-shockwave-flash" data="p3_5.swf" width="700" height="525"><param name="movie" value="p3_5.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" />	<param name="wmode" value="window" /><param name="scale" value="showall" />	<param name="menu" value="true" /><param name="devicefont" value="false" />	<param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><a href="http://www.adobe.com/go/getflash"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="取得 Adobe Flash 播放程式" /></a></object></object>';

		
		$.post("SQL_next_page.php", {	sql:page },
					function (msg){ }
				);
		page=page+1;
		page_flag[12]=1;		
	break;      	

  	case 12:  //目前在p3_5頁，下一頁前往p3_6
		if(page_flag[13]==0)  //第一次閱讀該頁
		{
			Button_disable();		
			setTimeout('Button_enable()',  mp3_Time[13] );
			//語音撥放器  autostart = 1
			document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P3_6.mp3&javascript=on  &amp;autostart=1" /><param name="wmode" value="transparent" /></object>';
		
		}
		else
		{
			Button_enable();
			//語音撥放器  autostart = 0
			document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P3_6.mp3&javascript=on  &amp;autostart=0" /><param name="wmode" value="transparent" /></object>';
			
		} 
		
	   	document.getElementById('flashContent').innerHTML='<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="700" height="525" id="p3_6" align="middle">	<param name="movie" value="p3_6.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" /><param name="wmode" value="window" /><param name="scale" value="showall" /><param name="menu" value="true" /><param name="devicefont" value="false" /><param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><object type="application/x-shockwave-flash" data="p3_6.swf" width="700" height="525"><param name="movie" value="p3_6.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" />	<param name="wmode" value="window" /><param name="scale" value="showall" />	<param name="menu" value="true" /><param name="devicefont" value="false" />	<param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><a href="http://www.adobe.com/go/getflash"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="取得 Adobe Flash 播放程式" /></a></object></object>';

		
		$.post("SQL_next_page.php", {	sql:page },
					function (msg){ }
				);
		page=page+1; 
		page_flag[13]=1;		
	break;      	
	
	
  	case 13:  //目前在p3_6頁，下一頁前往p3_7
		if(page_flag[14]==0)  //第一次閱讀該頁
		{
			Button_disable();		
			setTimeout('Button_enable()',  mp3_Time[14] );
			//語音撥放器  autostart = 1
			document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P3_7.mp3&javascript=on  &amp;autostart=1" /><param name="wmode" value="transparent" /></object>';
		
		}
		else
		{
			Button_enable();
			//語音撥放器  autostart = 0
			document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P3_7.mp3&javascript=on  &amp;autostart=0" /><param name="wmode" value="transparent" /></object>';
			
		} 
		
	   	document.getElementById('flashContent').innerHTML='<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="700" height="525" id="p3_7" align="middle">	<param name="movie" value="p3_7.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" /><param name="wmode" value="window" /><param name="scale" value="showall" /><param name="menu" value="true" /><param name="devicefont" value="false" /><param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><object type="application/x-shockwave-flash" data="p3_7.swf" width="700" height="525"><param name="movie" value="p3_7.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" />	<param name="wmode" value="window" /><param name="scale" value="showall" />	<param name="menu" value="true" /><param name="devicefont" value="false" />	<param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><a href="http://www.adobe.com/go/getflash"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="取得 Adobe Flash 播放程式" /></a></object></object>';

		
		$.post("SQL_next_page.php", {	sql:page },
					function (msg){ }
				);
		page=page+1;
		page_flag[14]=1;		
	break;   	
	
  
   	case 14:  //目前在p3_7頁，下一頁前往p4
		if(page_flag[15]==0)  //第一次閱讀該頁
		{
			Button_disable();		
			setTimeout('Button_enable()',  mp3_Time[15] );
			//語音撥放器  autostart = 1
			document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P4_0.mp3&javascript=on  &amp;autostart=1" /><param name="wmode" value="transparent" /></object>';
		
		}
		else
		{
			Button_enable();
			//語音撥放器  autostart = 0
			document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P4_0.mp3&javascript=on  &amp;autostart=0" /><param name="wmode" value="transparent" /></object>';
			
		} 
	
		//左邊標題區的變化
		LeftTitle_change_p4();
		
		
	 	//右框swf變換成p4		
	   	document.getElementById('flashContent').innerHTML='<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="700" height="525" id="p4" align="middle">	<param name="movie" value="p4.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" /><param name="wmode" value="window" /><param name="scale" value="showall" /><param name="menu" value="true" /><param name="devicefont" value="false" /><param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><object type="application/x-shockwave-flash" data="p4.swf" width="700" height="525"><param name="movie" value="p4.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" />	<param name="wmode" value="window" /><param name="scale" value="showall" />	<param name="menu" value="true" /><param name="devicefont" value="false" />	<param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><a href="http://www.adobe.com/go/getflash"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="取得 Adobe Flash 播放程式" /></a></object></object>';

		
		$.post("SQL_next_page.php", {	sql:page },
					function (msg){ }
				);
		page=page+1;
		page_flag[15]=1;		
	break;   	 
	
	
	case 15:  //目前在p4頁，下一頁前往p4_1
		if(page_flag[16]==0)  //第一次閱讀該頁
		{
			Button_disable();		
			setTimeout('Button_enable()',  mp3_Time[16] );
			//語音撥放器  autostart = 1
			document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P4_1.mp3&javascript=on  &amp;autostart=1" /><param name="wmode" value="transparent" /></object>';
		
		}
		else
		{
			Button_enable();
			//語音撥放器  autostart = 0
			document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P4_1.mp3&javascript=on  &amp;autostart=0" /><param name="wmode" value="transparent" /></object>';
			
		} 
	   	document.getElementById('flashContent').innerHTML='<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="700" height="525" id="p4_1" align="middle">	<param name="movie" value="p4_1.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" /><param name="wmode" value="window" /><param name="scale" value="showall" /><param name="menu" value="true" /><param name="devicefont" value="false" /><param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><object type="application/x-shockwave-flash" data="p4_1.swf" width="700" height="525"><param name="movie" value="p4_1.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" />	<param name="wmode" value="window" /><param name="scale" value="showall" />	<param name="menu" value="true" /><param name="devicefont" value="false" />	<param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><a href="http://www.adobe.com/go/getflash"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="取得 Adobe Flash 播放程式" /></a></object></object>';

		
		$.post("SQL_next_page.php", {	sql:page },
					function (msg){ }
				);	
		page++;
		page_flag[16]=1;
	
	break;
	

	case 16:  //目前在p4_1頁，下一頁前往p4_2
		if(page_flag[17]==0)  //第一次閱讀該頁
		{
			Button_disable();		
			setTimeout('Button_enable()',  mp3_Time[17] );
			//語音撥放器  autostart = 1
			document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P4_2.mp3&javascript=on  &amp;autostart=1" /><param name="wmode" value="transparent" /></object>';
		
		}
		else
		{
			Button_enable();
			//語音撥放器  autostart = 0
			document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P4_2.mp3&javascript=on  &amp;autostart=0" /><param name="wmode" value="transparent" /></object>';
			
		} 
	
	   	document.getElementById('flashContent').innerHTML='<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="700" height="525" id="p4_2" align="middle">	<param name="movie" value="p4_2.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" /><param name="wmode" value="window" /><param name="scale" value="showall" /><param name="menu" value="true" /><param name="devicefont" value="false" /><param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><object type="application/x-shockwave-flash" data="p4_2.swf" width="700" height="525"><param name="movie" value="p4_2.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" />	<param name="wmode" value="window" /><param name="scale" value="showall" />	<param name="menu" value="true" /><param name="devicefont" value="false" />	<param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><a href="http://www.adobe.com/go/getflash"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="取得 Adobe Flash 播放程式" /></a></object></object>';

		

		$.post("SQL_next_page.php", {	sql:page },
					function (msg){ }
				);	
		page++;	
		page_flag[17]=1;
	
	break;
	

	case 17:  //目前在p4_2頁，下一頁前往p4_3
		if(page_flag[18]==0)  //第一次閱讀該頁
		{
			Button_disable();		
			setTimeout('Button_enable()',  mp3_Time[18] );
			//語音撥放器  autostart = 1
			document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P4_3.mp3&javascript=on  &amp;autostart=1" /><param name="wmode" value="transparent" /></object>';
		
		}
		else
		{
			Button_enable();
			//語音撥放器  autostart = 0
			document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P4_3.mp3&javascript=on  &amp;autostart=0" /><param name="wmode" value="transparent" /></object>';
			
		} 
	
	   	document.getElementById('flashContent').innerHTML='<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="700" height="525" id="p4_3" align="middle">	<param name="movie" value="p4_3.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" /><param name="wmode" value="window" /><param name="scale" value="showall" /><param name="menu" value="true" /><param name="devicefont" value="false" /><param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><object type="application/x-shockwave-flash" data="p4_3.swf" width="700" height="525"><param name="movie" value="p4_3.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" />	<param name="wmode" value="window" /><param name="scale" value="showall" />	<param name="menu" value="true" /><param name="devicefont" value="false" />	<param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><a href="http://www.adobe.com/go/getflash"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="取得 Adobe Flash 播放程式" /></a></object></object>';

		
		$.post("SQL_next_page.php", {	sql:page },
					function (msg){ }
				);	
		page++;
		page_flag[18]=1;
	
	break;
	
	
	case 18:  //目前在p4_3頁，下一頁前往p4_4
		if(page_flag[19]==0)  //第一次閱讀該頁
		{
			Button_disable();		
			setTimeout('Button_enable()',  mp3_Time[19] );
			//語音撥放器  autostart = 1
			document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P4_4.mp3&javascript=on  &amp;autostart=1" /><param name="wmode" value="transparent" /></object>';
		
		}
		else
		{
			Button_enable();
			//語音撥放器  autostart = 0
			document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P4_4.mp3&javascript=on  &amp;autostart=0" /><param name="wmode" value="transparent" /></object>';
			
		} 
	
	   	document.getElementById('flashContent').innerHTML='<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="700" height="525" id="p4_4" align="middle">	<param name="movie" value="p4_4.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" /><param name="wmode" value="window" /><param name="scale" value="showall" /><param name="menu" value="true" /><param name="devicefont" value="false" /><param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><object type="application/x-shockwave-flash" data="p4_4.swf" width="700" height="525"><param name="movie" value="p4_4.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" />	<param name="wmode" value="window" /><param name="scale" value="showall" />	<param name="menu" value="true" /><param name="devicefont" value="false" />	<param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><a href="http://www.adobe.com/go/getflash"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="取得 Adobe Flash 播放程式" /></a></object></object>';

		
		$.post("SQL_next_page.php", {	sql:page },
					function (msg){ }
				);	
		page++;		
		page_flag[19]=1;
	
	break;	
	
	

	case 19:  //目前在p4_4頁，下一頁前往p4_5
		if(page_flag[20]==0)  //第一次閱讀該頁
		{
			Button_disable();		
			setTimeout('Button_enable()',  mp3_Time[20] );
			//語音撥放器  autostart = 1
			document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P4_5.mp3&javascript=on  &amp;autostart=1" /><param name="wmode" value="transparent" /></object>';
		
		}
		else
		{
			Button_enable();
			//語音撥放器  autostart = 0
			document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P4_5.mp3&javascript=on  &amp;autostart=0" /><param name="wmode" value="transparent" /></object>';
			
		} 
	
	   	document.getElementById('flashContent').innerHTML='<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="700" height="525" id="p4_5" align="middle">	<param name="movie" value="p4_5.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" /><param name="wmode" value="window" /><param name="scale" value="showall" /><param name="menu" value="true" /><param name="devicefont" value="false" /><param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><object type="application/x-shockwave-flash" data="p4_5.swf" width="700" height="525"><param name="movie" value="p4_5.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" />	<param name="wmode" value="window" /><param name="scale" value="showall" />	<param name="menu" value="true" /><param name="devicefont" value="false" />	<param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><a href="http://www.adobe.com/go/getflash"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="取得 Adobe Flash 播放程式" /></a></object></object>';

		

		$.post("SQL_next_page.php", {	sql:page },
					function (msg){ }
				);	
		page++;
		page_flag[20]=1;
	
	break;			
  
	case 20:  //目前在p4_5頁，下一頁前往p5
		if(page_flag[21]==0)  //第一次閱讀該頁
		{
			Button_disable();		
			setTimeout('Button_enable()',  mp3_Time[21] );
			//語音撥放器  autostart = 1
			document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P5_0.mp3&javascript=on  &amp;autostart=1" /><param name="wmode" value="transparent" /></object>';
		
		}
		else
		{
			Button_enable();
			//語音撥放器  autostart = 0
			document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P5_0.mp3&javascript=on  &amp;autostart=0" /><param name="wmode" value="transparent" /></object>';
			
		} 
	
		//左邊標題區的變化
		LeftTitle_change_p5();
		
		document.getElementById('flashContent').innerHTML='<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="700" height="525" id="p5" align="middle">	<param name="movie" value="p5.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" /><param name="wmode" value="window" /><param name="scale" value="showall" /><param name="menu" value="true" /><param name="devicefont" value="false" /><param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><object type="application/x-shockwave-flash" data="p5.swf" width="700" height="525"><param name="movie" value="p5.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" />	<param name="wmode" value="window" /><param name="scale" value="showall" />	<param name="menu" value="true" /><param name="devicefont" value="false" />	<param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><a href="http://www.adobe.com/go/getflash"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="取得 Adobe Flash 播放程式" /></a></object></object>';
		

		
		$.post("SQL_next_page.php", {	sql:page },
					function (msg){ }
				);	
		page++;
		page_flag[21]=1;
	
	break;			
  
 
	case 21:  //目前在p5頁，下一頁前往p5_1
		if(page_flag[22]==0)  //第一次閱讀該頁
		{
			Button_disable();		
			setTimeout('Button_enable()',  mp3_Time[22] );
			//語音撥放器  autostart = 1
			document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P5_1.mp3&javascript=on  &amp;autostart=1" /><param name="wmode" value="transparent" /></object>';
		
		}
		else
		{
			Button_enable();
			//語音撥放器  autostart = 0
			document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P5_1.mp3&javascript=on  &amp;autostart=0" /><param name="wmode" value="transparent" /></object>';
			
		} 
	
	   	document.getElementById('flashContent').innerHTML='<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="700" height="525" id="p5_1" align="middle">	<param name="movie" value="p5_1.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" /><param name="wmode" value="window" /><param name="scale" value="showall" /><param name="menu" value="true" /><param name="devicefont" value="false" /><param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><object type="application/x-shockwave-flash" data="p5_1.swf" width="700" height="525"><param name="movie" value="p5_1.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" />	<param name="wmode" value="window" /><param name="scale" value="showall" />	<param name="menu" value="true" /><param name="devicefont" value="false" />	<param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><a href="http://www.adobe.com/go/getflash"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="取得 Adobe Flash 播放程式" /></a></object></object>';

		
		$.post("SQL_next_page.php", {	sql:page },
					function (msg){ }
				);	
		page++;
		page_flag[22]=1;
	
	break;
 
 
 	case 22:  //目前在p5_1頁，下一頁前往p5_2
		if(page_flag[23]==0)  //第一次閱讀該頁
		{
			Button_disable();		
			setTimeout('Button_enable()',  mp3_Time[23] );
			//語音撥放器  autostart = 1
			document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P5_2.mp3&javascript=on  &amp;autostart=1" /><param name="wmode" value="transparent" /></object>';
		
		}
		else
		{
			Button_enable();
			//語音撥放器  autostart = 0
			document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P5_2.mp3&javascript=on  &amp;autostart=0" /><param name="wmode" value="transparent" /></object>';
			
		} 
	
	   	document.getElementById('flashContent').innerHTML='<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="700" height="525" id="p5_2" align="middle">	<param name="movie" value="p5_2.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" /><param name="wmode" value="window" /><param name="scale" value="showall" /><param name="menu" value="true" /><param name="devicefont" value="false" /><param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><object type="application/x-shockwave-flash" data="p5_2.swf" width="700" height="525"><param name="movie" value="p5_2.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" />	<param name="wmode" value="window" /><param name="scale" value="showall" />	<param name="menu" value="true" /><param name="devicefont" value="false" />	<param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><a href="http://www.adobe.com/go/getflash"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="取得 Adobe Flash 播放程式" /></a></object></object>';

		
		$.post("SQL_next_page.php", {	sql:page },
					function (msg){ }
				);	
		page++;
		page_flag[23]=1;
	
	break;
 
 
  	case 23:  //目前在p5_2頁，下一頁前往p5_3
		if(page_flag[24]==0)  //第一次閱讀該頁
		{
			Button_disable();		
			setTimeout('Button_enable()',  mp3_Time[24] );
			//語音撥放器  autostart = 1
			document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P5_3.mp3&javascript=on  &amp;autostart=1" /><param name="wmode" value="transparent" /></object>';
		
		}
		else
		{
			Button_enable();
			//語音撥放器  autostart = 0
			document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P5_3.mp3&javascript=on  &amp;autostart=0" /><param name="wmode" value="transparent" /></object>';
			
		} 
	
	   	document.getElementById('flashContent').innerHTML='<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="700" height="525" id="p5_3" align="middle">	<param name="movie" value="p5_3.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" /><param name="wmode" value="window" /><param name="scale" value="showall" /><param name="menu" value="true" /><param name="devicefont" value="false" /><param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><object type="application/x-shockwave-flash" data="p5_3.swf" width="700" height="525"><param name="movie" value="p5_3.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" />	<param name="wmode" value="window" /><param name="scale" value="showall" />	<param name="menu" value="true" /><param name="devicefont" value="false" />	<param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><a href="http://www.adobe.com/go/getflash"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="取得 Adobe Flash 播放程式" /></a></object></object>';

		
		$.post("SQL_next_page.php", {	sql:page },
					function (msg){ }
				);	
		page++;
		page_flag[24]=1;
	
	break;
 
 
   	case 24:  //目前在p5_3頁，下一頁前往p5_4
		if(page_flag[25]==0)  //第一次閱讀該頁
		{
			Button_disable();		
			setTimeout('Button_enable()',  mp3_Time[25] );
			//語音撥放器  autostart = 1
			document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P5_4.mp3&javascript=on  &amp;autostart=1" /><param name="wmode" value="transparent" /></object>';
		
		}
		else
		{
			Button_enable();
			//語音撥放器  autostart = 0
			document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P5_4.mp3&javascript=on  &amp;autostart=0" /><param name="wmode" value="transparent" /></object>';
			
		} 
	
	   	document.getElementById('flashContent').innerHTML='<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="700" height="525" id="p5_4" align="middle">	<param name="movie" value="p5_4.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" /><param name="wmode" value="window" /><param name="scale" value="showall" /><param name="menu" value="true" /><param name="devicefont" value="false" /><param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><object type="application/x-shockwave-flash" data="p5_4.swf" width="700" height="525"><param name="movie" value="p5_4.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" />	<param name="wmode" value="window" /><param name="scale" value="showall" />	<param name="menu" value="true" /><param name="devicefont" value="false" />	<param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><a href="http://www.adobe.com/go/getflash"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="取得 Adobe Flash 播放程式" /></a></object></object>';

		
		
		$.post("SQL_next_page.php", {	sql:page },
					function (msg){ }
				);	
		page++;
		page_flag[25]=1;
	
	break;
 
 
	case 25:  //目前在p5_4頁，下一頁前往p5_5
		if(page_flag[26]==0)  //第一次閱讀該頁
		{
			Button_disable();		
			setTimeout('Button_enable()',  mp3_Time[26] );
			//語音撥放器  autostart = 1
			document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P5_5.mp3&javascript=on  &amp;autostart=1" /><param name="wmode" value="transparent" /></object>';
		
		}
		else
		{
			Button_enable();
			//語音撥放器  autostart = 0
			document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P5_5.mp3&javascript=on  &amp;autostart=0" /><param name="wmode" value="transparent" /></object>';
			
		} 
		
	
	   	document.getElementById('flashContent').innerHTML='<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="700" height="525" id="p5_5" align="middle">	<param name="movie" value="p5_5.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" /><param name="wmode" value="window" /><param name="scale" value="showall" /><param name="menu" value="true" /><param name="devicefont" value="false" /><param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><object type="application/x-shockwave-flash" data="p5_5.swf" width="700" height="525"><param name="movie" value="p5_5.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" />	<param name="wmode" value="window" /><param name="scale" value="showall" />	<param name="menu" value="true" /><param name="devicefont" value="false" />	<param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><a href="http://www.adobe.com/go/getflash"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="取得 Adobe Flash 播放程式" /></a></object></object>';

		
		$.post("SQL_next_page.php", {	sql:page },
					function (msg){ }
				);	
		page++;
		page_flag[26]=1;	
	break;
 
 
 	case 26:  //目前在p5_5頁，下一頁前往p5_6
		if(page_flag[27]==0)  //第一次閱讀該頁
		{
			Button_disable();		
			setTimeout('Button_enable()',  mp3_Time[27] );
			//語音撥放器  autostart = 1
			document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P5_6.mp3&javascript=on  &amp;autostart=1" /><param name="wmode" value="transparent" /></object>';
		
		}
		else
		{
			Button_enable();
			//語音撥放器  autostart = 0
			document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P5_6.mp3&javascript=on  &amp;autostart=0" /><param name="wmode" value="transparent" /></object>';
			
		} 
	
	   	document.getElementById('flashContent').innerHTML='<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="700" height="525" id="p5_6" align="middle">	<param name="movie" value="p5_6.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" /><param name="wmode" value="window" /><param name="scale" value="showall" /><param name="menu" value="true" /><param name="devicefont" value="false" /><param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><object type="application/x-shockwave-flash" data="p5_6.swf" width="700" height="525"><param name="movie" value="p5_6.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" />	<param name="wmode" value="window" /><param name="scale" value="showall" />	<param name="menu" value="true" /><param name="devicefont" value="false" />	<param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><a href="http://www.adobe.com/go/getflash"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="取得 Adobe Flash 播放程式" /></a></object></object>';

		
		$.post("SQL_next_page.php", {	sql:page },
					function (msg){ }
				);	
		page++;
		page_flag[27]=1;	
	break;
 
 
  	case 27:  //目前在p5_6頁，下一頁前往p5_7
		if(page_flag[28]==0)  //第一次閱讀該頁
		{
			Button_disable();		
			setTimeout('Button_enable()',  mp3_Time[28] );
			//語音撥放器  autostart = 1
			document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P5_7.mp3&javascript=on  &amp;autostart=1" /><param name="wmode" value="transparent" /></object>';
		
		}
		else
		{
			Button_enable();
			//語音撥放器  autostart = 0
			document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P5_7.mp3&javascript=on  &amp;autostart=0" /><param name="wmode" value="transparent" /></object>';
			
		} 
	
	   	document.getElementById('flashContent').innerHTML='<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="700" height="525" id="p5_7" align="middle">	<param name="movie" value="p5_7.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" /><param name="wmode" value="window" /><param name="scale" value="showall" /><param name="menu" value="true" /><param name="devicefont" value="false" /><param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><object type="application/x-shockwave-flash" data="p5_7.swf" width="700" height="525"><param name="movie" value="p5_7.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" />	<param name="wmode" value="window" /><param name="scale" value="showall" />	<param name="menu" value="true" /><param name="devicefont" value="false" />	<param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><a href="http://www.adobe.com/go/getflash"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="取得 Adobe Flash 播放程式" /></a></object></object>';

		
		$.post("SQL_next_page.php", {	sql:page },
					function (msg){ }
				);	
		page++;
		page_flag[28]=1;	
	break;
	
    case 28:  //目前在 p5_7 頁

		if(page_flag[29]==0)  //第一次閱讀該頁
		{
			Button_disable();		
			setTimeout('Button_enable()',  mp3_Time[29] );
			//語音撥放器  autostart = 1
			document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P6.mp3&javascript=on  &amp;autostart=1" /><param name="wmode" value="transparent" /></object>';
		
		}
		else
		{
			Button_enable();
			//語音撥放器  autostart = 0
			document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P6.mp3&javascript=on  &amp;autostart=0" /><param name="wmode" value="transparent" /></object>';
			
		} 
	
	   	document.getElementById('flashContent').innerHTML='<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="700" height="525" id="P6" align="middle">	<param name="movie" value="P6.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" /><param name="wmode" value="window" /><param name="scale" value="showall" /><param name="menu" value="true" /><param name="devicefont" value="false" /><param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><object type="application/x-shockwave-flash" data="P6.swf" width="700" height="525"><param name="movie" value="P6.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" />	<param name="wmode" value="window" /><param name="scale" value="showall" />	<param name="menu" value="true" /><param name="devicefont" value="false" />	<param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><a href="http://www.adobe.com/go/getflash"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="取得 Adobe Flash 播放程式" /></a></object></object>';

		
		$.post("SQL_next_page.php", {	sql:page },
					function (msg){ }
				);	
		page++;
		page_flag[29]=1;		
	
	break;	
	
	
 //----------------------------------------------------------------------------[繼承] 從這裡開始---------------------------------------------------------------------------------------------

	case 29:	//目前在 P6 繼承首頁，下一頁前往 P6_1
		if(page_flag[30]==0)  //第一次閱讀該頁
		{
			Button_disable();		
			setTimeout('Button_enable()',  mp3_Time[30] );
			//語音撥放器  autostart = 1
			document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P6_1.mp3&javascript=on  &amp;autostart=1" /><param name="wmode" value="transparent" /></object>';
		
		}
		else
		{
			Button_enable();
			//語音撥放器  autostart = 0
			document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P6_1.mp3&javascript=on  &amp;autostart=0" /><param name="wmode" value="transparent" /></object>';
			
		} 

	
	   	document.getElementById('flashContent').innerHTML='<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="700" height="525" id="P6_1" align="middle">	<param name="movie" value="P6_1.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" /><param name="wmode" value="window" /><param name="scale" value="showall" /><param name="menu" value="true" /><param name="devicefont" value="false" /><param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><object type="application/x-shockwave-flash" data="P6_1.swf" width="700" height="525"><param name="movie" value="P6_1.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" />	<param name="wmode" value="window" /><param name="scale" value="showall" />	<param name="menu" value="true" /><param name="devicefont" value="false" />	<param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><a href="http://www.adobe.com/go/getflash"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="取得 Adobe Flash 播放程式" /></a></object></object>';

		
		$.post("SQL_next_page.php", {	sql:page },
					function (msg){ }
				);	
		page++;
		page_flag[30]=1;	
	break;	

	case 30:	//目前在 P6_1 ，下一頁前往 P6_2
		if(page_flag[31]==0)  //第一次閱讀該頁
		{
			Button_disable();		
			setTimeout('Button_enable()',  mp3_Time[31] );
			//語音撥放器  autostart = 1
			document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P6_2.mp3&javascript=on  &amp;autostart=1" /><param name="wmode" value="transparent" /></object>';
		
		}
		else
		{
			Button_enable();
			//語音撥放器  autostart = 0
			document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P6_2.mp3&javascript=on  &amp;autostart=0" /><param name="wmode" value="transparent" /></object>';
			
		} 
	
	   	document.getElementById('flashContent').innerHTML='<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="700" height="525" id="P6_2" align="middle">	<param name="movie" value="P6_2.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" /><param name="wmode" value="window" /><param name="scale" value="showall" /><param name="menu" value="true" /><param name="devicefont" value="false" /><param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><object type="application/x-shockwave-flash" data="P6_2.swf" width="700" height="525"><param name="movie" value="P6_2.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" />	<param name="wmode" value="window" /><param name="scale" value="showall" />	<param name="menu" value="true" /><param name="devicefont" value="false" />	<param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><a href="http://www.adobe.com/go/getflash"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="取得 Adobe Flash 播放程式" /></a></object></object>';

		
		$.post("SQL_next_page.php", {	sql:page },
					function (msg){ }
				);	
		page++;
		page_flag[31]=1;	
	break;		
	
	case 31:	//目前在 P6_2 ，下一頁前往 P6_3
		if(page_flag[32]==0)  //第一次閱讀該頁
		{
			Button_disable();		
			setTimeout('Button_enable()',  mp3_Time[32] );
			//語音撥放器  autostart = 1
			document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P6_3.mp3&javascript=on  &amp;autostart=1" /><param name="wmode" value="transparent" /></object>';
		
		}
		else
		{
			Button_enable();
			//語音撥放器  autostart = 0
			document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P6_3.mp3&javascript=on  &amp;autostart=0" /><param name="wmode" value="transparent" /></object>';
			
		} 
	
	   	document.getElementById('flashContent').innerHTML='<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="700" height="525" id="P6_3" align="middle">	<param name="movie" value="P6_3.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" /><param name="wmode" value="window" /><param name="scale" value="showall" /><param name="menu" value="true" /><param name="devicefont" value="false" /><param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><object type="application/x-shockwave-flash" data="P6_3.swf" width="700" height="525"><param name="movie" value="P6_3.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" />	<param name="wmode" value="window" /><param name="scale" value="showall" />	<param name="menu" value="true" /><param name="devicefont" value="false" />	<param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><a href="http://www.adobe.com/go/getflash"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="取得 Adobe Flash 播放程式" /></a></object></object>';

		
		$.post("SQL_next_page.php", {	sql:page },
					function (msg){ }
				);	
		page++;
		page_flag[32]=1;	
	break;	

	case 32:	//目前在 P6_3 ，下一頁前往 P6_4
		if(page_flag[33]==0)  //第一次閱讀該頁
		{
			Button_disable();		
			setTimeout('Button_enable()',  mp3_Time[33] );
			//語音撥放器  autostart = 1
			document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P6_4.mp3&javascript=on  &amp;autostart=1" /><param name="wmode" value="transparent" /></object>';
		
		}
		else
		{
			Button_enable();
			//語音撥放器  autostart = 0
			document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P6_4.mp3&javascript=on  &amp;autostart=0" /><param name="wmode" value="transparent" /></object>';
			
		} 
	
	   	document.getElementById('flashContent').innerHTML='<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="700" height="525" id="P6_4" align="middle">	<param name="movie" value="P6_4.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" /><param name="wmode" value="window" /><param name="scale" value="showall" /><param name="menu" value="true" /><param name="devicefont" value="false" /><param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><object type="application/x-shockwave-flash" data="P6_4.swf" width="700" height="525"><param name="movie" value="P6_4.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" />	<param name="wmode" value="window" /><param name="scale" value="showall" />	<param name="menu" value="true" /><param name="devicefont" value="false" />	<param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><a href="http://www.adobe.com/go/getflash"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="取得 Adobe Flash 播放程式" /></a></object></object>';

		
		$.post("SQL_next_page.php", {	sql:page },
					function (msg){ }
				);	
		page++;
		page_flag[33]=1;	
	break;	

	case 33:	//目前在 P6_4 ，下一頁前往 P6_5
		if(page_flag[34]==0)  //第一次閱讀該頁
		{
			Button_disable();		
			setTimeout('Button_enable()',  mp3_Time[34] );
			//語音撥放器  autostart = 1
			document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P6_5.mp3&javascript=on  &amp;autostart=1" /><param name="wmode" value="transparent" /></object>';
		
		}
		else
		{
			Button_enable();
			//語音撥放器  autostart = 0
			document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P6_5.mp3&javascript=on  &amp;autostart=0" /><param name="wmode" value="transparent" /></object>';
			
		} 
	
	   	document.getElementById('flashContent').innerHTML='<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="700" height="525" id="P6_5" align="middle">	<param name="movie" value="P6_5.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" /><param name="wmode" value="window" /><param name="scale" value="showall" /><param name="menu" value="true" /><param name="devicefont" value="false" /><param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><object type="application/x-shockwave-flash" data="P6_5.swf" width="700" height="525"><param name="movie" value="P6_5.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" />	<param name="wmode" value="window" /><param name="scale" value="showall" />	<param name="menu" value="true" /><param name="devicefont" value="false" />	<param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><a href="http://www.adobe.com/go/getflash"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="取得 Adobe Flash 播放程式" /></a></object></object>';

		
		$.post("SQL_next_page.php", {	sql:page },
					function (msg){ }
				);	
		page++;
		page_flag[34]=1;	
	break;	

	case 34:	//目前在 P6_5 ，下一頁前往 P6_6
		if(page_flag[35]==0)  //第一次閱讀該頁
		{
			Button_disable();		
			setTimeout('Button_enable()',  mp3_Time[35] );
			//語音撥放器  autostart = 1
			document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P6_6.mp3&javascript=on  &amp;autostart=1" /><param name="wmode" value="transparent" /></object>';
		
		}
		else
		{
			Button_enable();
			//語音撥放器  autostart = 0
			document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P6_6.mp3&javascript=on  &amp;autostart=0" /><param name="wmode" value="transparent" /></object>';
			
		} 
	
	   	document.getElementById('flashContent').innerHTML='<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="700" height="525" id="P6_6" align="middle">	<param name="movie" value="P6_6.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" /><param name="wmode" value="window" /><param name="scale" value="showall" /><param name="menu" value="true" /><param name="devicefont" value="false" /><param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><object type="application/x-shockwave-flash" data="P6_6.swf" width="700" height="525"><param name="movie" value="P6_6.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" />	<param name="wmode" value="window" /><param name="scale" value="showall" />	<param name="menu" value="true" /><param name="devicefont" value="false" />	<param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><a href="http://www.adobe.com/go/getflash"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="取得 Adobe Flash 播放程式" /></a></object></object>';

		
		$.post("SQL_next_page.php", {	sql:page },
					function (msg){ }
				);	
		page++;
		page_flag[35]=1;	
	break;	

	case 35:	//目前在 P6_6 ，下一頁前往 P6_7
		if(page_flag[36]==0)  //第一次閱讀該頁
		{
			Button_disable();		
			setTimeout('Button_enable()',  mp3_Time[36] );
			//語音撥放器  autostart = 1
			document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P6_7.mp3&javascript=on  &amp;autostart=1" /><param name="wmode" value="transparent" /></object>';
		
		}
		else
		{
			Button_enable();
			//語音撥放器  autostart = 0
			document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P6_7.mp3&javascript=on  &amp;autostart=0" /><param name="wmode" value="transparent" /></object>';
			
		} 
	
	   	document.getElementById('flashContent').innerHTML='<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="700" height="525" id="P6_7" align="middle">	<param name="movie" value="P6_7.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" /><param name="wmode" value="window" /><param name="scale" value="showall" /><param name="menu" value="true" /><param name="devicefont" value="false" /><param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><object type="application/x-shockwave-flash" data="P6_7.swf" width="700" height="525"><param name="movie" value="P6_7.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" />	<param name="wmode" value="window" /><param name="scale" value="showall" />	<param name="menu" value="true" /><param name="devicefont" value="false" />	<param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><a href="http://www.adobe.com/go/getflash"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="取得 Adobe Flash 播放程式" /></a></object></object>';

		
		$.post("SQL_next_page.php", {	sql:page },
					function (msg){ }
				);	
		page++;
		page_flag[36]=1;	
	break;	

	case 36:	//目前在 P6_7 ，下一頁前往 P6_8
		if(page_flag[37]==0)  //第一次閱讀該頁
		{
			Button_disable();		
			setTimeout('Button_enable()',  mp3_Time[37] );
			//語音撥放器  autostart = 1
			document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P6_8.mp3&javascript=on  &amp;autostart=1" /><param name="wmode" value="transparent" /></object>';
		
		}
		else
		{
			Button_enable();
			//語音撥放器  autostart = 0
			document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P6_8.mp3&javascript=on  &amp;autostart=0" /><param name="wmode" value="transparent" /></object>';
			
		} 
	
	   	document.getElementById('flashContent').innerHTML='<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="700" height="525" id="P6_8" align="middle">	<param name="movie" value="P6_8.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" /><param name="wmode" value="window" /><param name="scale" value="showall" /><param name="menu" value="true" /><param name="devicefont" value="false" /><param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><object type="application/x-shockwave-flash" data="P6_8.swf" width="700" height="525"><param name="movie" value="P6_8.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" />	<param name="wmode" value="window" /><param name="scale" value="showall" />	<param name="menu" value="true" /><param name="devicefont" value="false" />	<param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><a href="http://www.adobe.com/go/getflash"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="取得 Adobe Flash 播放程式" /></a></object></object>';

		
		$.post("SQL_next_page.php", {	sql:page },
					function (msg){ }
				);	
		page++;
		page_flag[37]=1;	
	break;	

	case 37:	//目前在 P6_8 ，下一頁前往 P6_9
		if(page_flag[38]==0)  //第一次閱讀該頁
		{
			Button_disable();		
			setTimeout('Button_enable()',  mp3_Time[38] );
			//語音撥放器  autostart = 1
			document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P6_9.mp3&javascript=on  &amp;autostart=1" /><param name="wmode" value="transparent" /></object>';
		
		}
		else
		{
			Button_enable();
			//語音撥放器  autostart = 0
			document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P6_9.mp3&javascript=on  &amp;autostart=0" /><param name="wmode" value="transparent" /></object>';
			
		} 
	
	   	document.getElementById('flashContent').innerHTML='<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="700" height="525" id="P6_9" align="middle">	<param name="movie" value="P6_9.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" /><param name="wmode" value="window" /><param name="scale" value="showall" /><param name="menu" value="true" /><param name="devicefont" value="false" /><param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><object type="application/x-shockwave-flash" data="P6_9.swf" width="700" height="525"><param name="movie" value="P6_9.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" />	<param name="wmode" value="window" /><param name="scale" value="showall" />	<param name="menu" value="true" /><param name="devicefont" value="false" />	<param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><a href="http://www.adobe.com/go/getflash"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="取得 Adobe Flash 播放程式" /></a></object></object>';

		
		$.post("SQL_next_page.php", {	sql:page },
					function (msg){ }
				);	
		page++;
		page_flag[38]=1;	
	break;	

	case 38:	//目前在 P6_9 ，下一頁前往 P6_10
		if(page_flag[39]==0)  //第一次閱讀該頁
		{
			Button_disable();		
			setTimeout('Button_enable()',  mp3_Time[39] );
			//語音撥放器  autostart = 1
			document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P6_10.mp3&javascript=on  &amp;autostart=1" /><param name="wmode" value="transparent" /></object>';
		
		}
		else
		{
			Button_enable();
			//語音撥放器  autostart = 0
			document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P6_10.mp3&javascript=on  &amp;autostart=0" /><param name="wmode" value="transparent" /></object>';
			
		} 
	
	   	document.getElementById('flashContent').innerHTML='<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="700" height="525" id="P6_10" align="middle">	<param name="movie" value="P6_10.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" /><param name="wmode" value="window" /><param name="scale" value="showall" /><param name="menu" value="true" /><param name="devicefont" value="false" /><param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><object type="application/x-shockwave-flash" data="P6_10.swf" width="700" height="525"><param name="movie" value="P6_10.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" />	<param name="wmode" value="window" /><param name="scale" value="showall" />	<param name="menu" value="true" /><param name="devicefont" value="false" />	<param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><a href="http://www.adobe.com/go/getflash"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="取得 Adobe Flash 播放程式" /></a></object></object>';

		
		$.post("SQL_next_page.php", {	sql:page },
					function (msg){ }
				);	
		page++;
		page_flag[39]=1;	
	break;	

	case 39:	//目前在 P6_10 ，下一頁前往 P6_11
		if(page_flag[40]==0)  //第一次閱讀該頁
		{
			Button_disable();		
			setTimeout('Button_enable()',  mp3_Time[40] );
			//語音撥放器  autostart = 1
			document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P6_11.mp3&javascript=on  &amp;autostart=1" /><param name="wmode" value="transparent" /></object>';
		
		}
		else
		{
			Button_enable();
			//語音撥放器  autostart = 0
			document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P6_11.mp3&javascript=on  &amp;autostart=0" /><param name="wmode" value="transparent" /></object>';
			
		} 
	
	   	document.getElementById('flashContent').innerHTML='<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="700" height="525" id="P6_11" align="middle">	<param name="movie" value="P6_11.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" /><param name="wmode" value="window" /><param name="scale" value="showall" /><param name="menu" value="true" /><param name="devicefont" value="false" /><param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><object type="application/x-shockwave-flash" data="P6_11.swf" width="700" height="525"><param name="movie" value="P6_11.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" />	<param name="wmode" value="window" /><param name="scale" value="showall" />	<param name="menu" value="true" /><param name="devicefont" value="false" />	<param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><a href="http://www.adobe.com/go/getflash"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="取得 Adobe Flash 播放程式" /></a></object></object>';

		
		$.post("SQL_next_page.php", {	sql:page },
					function (msg){ }
				);	
		page++;
		page_flag[40]=1;	
	break;	

	case 40:	//目前在 P6_11 ，下一頁前往 P6_12
		if(page_flag[41]==0)  //第一次閱讀該頁
		{
			Button_disable();		
			setTimeout('Button_enable()',  mp3_Time[41] );
			//語音撥放器  autostart = 1
			document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P6_12.mp3&javascript=on  &amp;autostart=1" /><param name="wmode" value="transparent" /></object>';
		
		}
		else
		{
			Button_enable();
			//語音撥放器  autostart = 0
			document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P6_12.mp3&javascript=on  &amp;autostart=0" /><param name="wmode" value="transparent" /></object>';
			
		} 
	
	   	document.getElementById('flashContent').innerHTML='<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="700" height="525" id="P6_12" align="middle">	<param name="movie" value="P6_12.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" /><param name="wmode" value="window" /><param name="scale" value="showall" /><param name="menu" value="true" /><param name="devicefont" value="false" /><param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><object type="application/x-shockwave-flash" data="P6_12.swf" width="700" height="525"><param name="movie" value="P6_12.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" />	<param name="wmode" value="window" /><param name="scale" value="showall" />	<param name="menu" value="true" /><param name="devicefont" value="false" />	<param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><a href="http://www.adobe.com/go/getflash"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="取得 Adobe Flash 播放程式" /></a></object></object>';

		
		$.post("SQL_next_page.php", {	sql:page },
					function (msg){ }
				);	
		page++;
		page_flag[41]=1;	
	break;	

	case 41:	//目前在 P6_12 ，下一頁前往 P6_13
		if(page_flag[42]==0)  //第一次閱讀該頁
		{
			Button_disable();		
			setTimeout('Button_enable()',  mp3_Time[42] );
			//語音撥放器  autostart = 1
			document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P6_13.mp3&javascript=on  &amp;autostart=1" /><param name="wmode" value="transparent" /></object>';
		
		}
		else
		{
			Button_enable();
			//語音撥放器  autostart = 0
			document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P6_13.mp3&javascript=on  &amp;autostart=0" /><param name="wmode" value="transparent" /></object>';
			
		} 
	
	   	document.getElementById('flashContent').innerHTML='<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="700" height="525" id="P6_13" align="middle">	<param name="movie" value="P6_13.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" /><param name="wmode" value="window" /><param name="scale" value="showall" /><param name="menu" value="true" /><param name="devicefont" value="false" /><param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><object type="application/x-shockwave-flash" data="P6_13.swf" width="700" height="525"><param name="movie" value="P6_13.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" />	<param name="wmode" value="window" /><param name="scale" value="showall" />	<param name="menu" value="true" /><param name="devicefont" value="false" />	<param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><a href="http://www.adobe.com/go/getflash"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="取得 Adobe Flash 播放程式" /></a></object></object>';

		
		$.post("SQL_next_page.php", {	sql:page },
					function (msg){ }
				);	
		page++;
		page_flag[42]=1;	
	break;	

	case 42:	//目前在 P6_13 ，下一頁前往 P6_14
		if(page_flag[43]==0)  //第一次閱讀該頁
		{
			Button_disable();		
			setTimeout('Button_enable()',  mp3_Time[43] );
			//語音撥放器  autostart = 1
			document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P6_14.mp3&javascript=on  &amp;autostart=1" /><param name="wmode" value="transparent" /></object>';
		
		}
		else
		{
			Button_enable();
			//語音撥放器  autostart = 0
			document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P6_14.mp3&javascript=on  &amp;autostart=0" /><param name="wmode" value="transparent" /></object>';
			
		} 
	
	   	document.getElementById('flashContent').innerHTML='<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="700" height="525" id="P6_14" align="middle">	<param name="movie" value="P6_14.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" /><param name="wmode" value="window" /><param name="scale" value="showall" /><param name="menu" value="true" /><param name="devicefont" value="false" /><param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><object type="application/x-shockwave-flash" data="P6_14.swf" width="700" height="525"><param name="movie" value="P6_14.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" />	<param name="wmode" value="window" /><param name="scale" value="showall" />	<param name="menu" value="true" /><param name="devicefont" value="false" />	<param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><a href="http://www.adobe.com/go/getflash"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="取得 Adobe Flash 播放程式" /></a></object></object>';

		
		$.post("SQL_next_page.php", {	sql:page },
					function (msg){ }
				);	
		page++;
		page_flag[43]=1;	
	break;		


	case 43:	//目前在P6_14  ，下一頁前往 P6_15
		if(page_flag[44]==0)  //第一次閱讀該頁
		{
			Button_disable();		
			setTimeout('Button_enable()',  mp3_Time[44] );
			//語音撥放器  autostart = 1
			document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P6_15.mp3&javascript=on  &amp;autostart=1" /><param name="wmode" value="transparent" /></object>';
		
		}
		else
		{
			Button_enable();
			//語音撥放器  autostart = 0
			document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P6_15.mp3&javascript=on  &amp;autostart=0" /><param name="wmode" value="transparent" /></object>';
			
		} 
	
	   	document.getElementById('flashContent').innerHTML='<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="700" height="525" id="P6_15" align="middle">	<param name="movie" value="P6_15.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" /><param name="wmode" value="window" /><param name="scale" value="showall" /><param name="menu" value="true" /><param name="devicefont" value="false" /><param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><object type="application/x-shockwave-flash" data="P6_15.swf" width="700" height="525"><param name="movie" value="P6_15.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" />	<param name="wmode" value="window" /><param name="scale" value="showall" />	<param name="menu" value="true" /><param name="devicefont" value="false" />	<param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><a href="http://www.adobe.com/go/getflash"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="取得 Adobe Flash 播放程式" /></a></object></object>';

		
		$.post("SQL_next_page.php", {	sql:page },
					function (msg){ }
				);	
		page++;
		page_flag[44]=1;	
	break;		
	
	case 44:	//目前在P6_15  ，下一頁前往 P6_16
		if(page_flag[45]==0)  //第一次閱讀該頁
		{
			Button_disable();		
			setTimeout('Button_enable()',  mp3_Time[44] );
			//語音撥放器  autostart = 1
			document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P6_16.mp3&javascript=on  &amp;autostart=1" /><param name="wmode" value="transparent" /></object>';
		
		}
		else
		{
			Button_enable();
			//語音撥放器  autostart = 0
			document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P6_16.mp3&javascript=on  &amp;autostart=0" /><param name="wmode" value="transparent" /></object>';
			
		} 
	
	   	document.getElementById('flashContent').innerHTML='<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="700" height="525" id="P6_16" align="middle">	<param name="movie" value="P6_16.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" /><param name="wmode" value="window" /><param name="scale" value="showall" /><param name="menu" value="true" /><param name="devicefont" value="false" /><param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><object type="application/x-shockwave-flash" data="P6_16.swf" width="700" height="525"><param name="movie" value="P6_16.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" />	<param name="wmode" value="window" /><param name="scale" value="showall" />	<param name="menu" value="true" /><param name="devicefont" value="false" />	<param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><a href="http://www.adobe.com/go/getflash"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="取得 Adobe Flash 播放程式" /></a></object></object>';

		
		$.post("SQL_next_page.php", {	sql:page },
					function (msg){ }
				);	
		page++;
		page_flag[45]=1;	
	break;	
	
 	case 45:	//目前在P6_16  ，下一頁前往 P6_17
		if(page_flag[46]==0)  //第一次閱讀該頁
		{
			Button_disable();		
			setTimeout('Button_enable()',  mp3_Time[46] );
			//語音撥放器  autostart = 1
			document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P6_17.mp3&javascript=on  &amp;autostart=1" /><param name="wmode" value="transparent" /></object>';
		
		}
		else
		{
			Button_enable();
			//語音撥放器  autostart = 0
			document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P6_17.mp3&javascript=on  &amp;autostart=0" /><param name="wmode" value="transparent" /></object>';
			
		} 
	
	   	document.getElementById('flashContent').innerHTML='<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="700" height="525" id="P6_17" align="middle">	<param name="movie" value="P6_17.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" /><param name="wmode" value="window" /><param name="scale" value="showall" /><param name="menu" value="true" /><param name="devicefont" value="false" /><param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><object type="application/x-shockwave-flash" data="P6_17.swf" width="700" height="525"><param name="movie" value="P6_17.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" />	<param name="wmode" value="window" /><param name="scale" value="showall" />	<param name="menu" value="true" /><param name="devicefont" value="false" />	<param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><a href="http://www.adobe.com/go/getflash"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="取得 Adobe Flash 播放程式" /></a></object></object>';

		
		$.post("SQL_next_page.php", {	sql:page },
					function (msg){ }
				);	
		page++;
		page_flag[46]=1;	
	break;	

	case 46:	//目前在P6_17  ，下一頁前往 P6_18
		if(page_flag[47]==0)  //第一次閱讀該頁
		{
			Button_disable();		
			setTimeout('Button_enable()',  mp3_Time[47] );
			//語音撥放器  autostart = 1
			document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P6_18.mp3&javascript=on  &amp;autostart=1" /><param name="wmode" value="transparent" /></object>';
		
		}
		else
		{
			Button_enable();
			//語音撥放器  autostart = 0
			document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P6_18.mp3&javascript=on  &amp;autostart=0" /><param name="wmode" value="transparent" /></object>';
			
		} 
	
	   	document.getElementById('flashContent').innerHTML='<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="700" height="525" id="P6_18" align="middle">	<param name="movie" value="P6_18.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" /><param name="wmode" value="window" /><param name="scale" value="showall" /><param name="menu" value="true" /><param name="devicefont" value="false" /><param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><object type="application/x-shockwave-flash" data="P6_18.swf" width="700" height="525"><param name="movie" value="P6_18.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" />	<param name="wmode" value="window" /><param name="scale" value="showall" />	<param name="menu" value="true" /><param name="devicefont" value="false" />	<param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><a href="http://www.adobe.com/go/getflash"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="取得 Adobe Flash 播放程式" /></a></object></object>';

		
		$.post("SQL_next_page.php", {	sql:page },
					function (msg){ }
				);	
		page++;
		page_flag[47]=1;	
	break;	

	case 47:	//目前在P6_18  ，下一頁前往 P6_19
		if(page_flag[48]==0)  //第一次閱讀該頁
		{
			Button_disable();		
			setTimeout('Button_enable()',  mp3_Time[48] );
			//語音撥放器  autostart = 1
			document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P6_19.mp3&javascript=on  &amp;autostart=1" /><param name="wmode" value="transparent" /></object>';
		
		}
		else
		{
			Button_enable();
			//語音撥放器  autostart = 0
			document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P6_19.mp3&javascript=on  &amp;autostart=0" /><param name="wmode" value="transparent" /></object>';
			
		} 
	
	   	document.getElementById('flashContent').innerHTML='<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="700" height="525" id="P6_19" align="middle">	<param name="movie" value="P6_19.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" /><param name="wmode" value="window" /><param name="scale" value="showall" /><param name="menu" value="true" /><param name="devicefont" value="false" /><param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><object type="application/x-shockwave-flash" data="P6_19.swf" width="700" height="525"><param name="movie" value="P6_19.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" />	<param name="wmode" value="window" /><param name="scale" value="showall" />	<param name="menu" value="true" /><param name="devicefont" value="false" />	<param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><a href="http://www.adobe.com/go/getflash"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="取得 Adobe Flash 播放程式" /></a></object></object>';

		
		$.post("SQL_next_page.php", {	sql:page },
					function (msg){ }
				);	
		page++;
		page_flag[48]=1;	
	break;	

	case 48:	//目前在P6_19  ，下一頁前往 P6_20
		if(page_flag[49]==0)  //第一次閱讀該頁
		{
			Button_disable();		
			setTimeout('Button_enable()',  mp3_Time[49] );
			//語音撥放器  autostart = 1
			document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P6_20.mp3&javascript=on  &amp;autostart=1" /><param name="wmode" value="transparent" /></object>';
		
		}
		else
		{
			Button_enable();
			//語音撥放器  autostart = 0
			document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P6_20.mp3&javascript=on  &amp;autostart=0" /><param name="wmode" value="transparent" /></object>';
			
		} 
	
	   	document.getElementById('flashContent').innerHTML='<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="700" height="525" id="P6_20" align="middle">	<param name="movie" value="P6_20.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" /><param name="wmode" value="window" /><param name="scale" value="showall" /><param name="menu" value="true" /><param name="devicefont" value="false" /><param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><object type="application/x-shockwave-flash" data="P6_20.swf" width="700" height="525"><param name="movie" value="P6_20.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" />	<param name="wmode" value="window" /><param name="scale" value="showall" />	<param name="menu" value="true" /><param name="devicefont" value="false" />	<param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><a href="http://www.adobe.com/go/getflash"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="取得 Adobe Flash 播放程式" /></a></object></object>';

		
		$.post("SQL_next_page.php", {	sql:page },
					function (msg){ }
				);	
		page++;
		page_flag[49]=1;	
	break;	
	
	case 49:	//目前在P6_20  ，下一頁前往 P6_21
		if(page_flag[50]==0)  //第一次閱讀該頁
		{
			Button_disable();		
			setTimeout('Button_enable()',  mp3_Time[50] );
			//語音撥放器  autostart = 1
			document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P6_21.mp3&javascript=on  &amp;autostart=1" /><param name="wmode" value="transparent" /></object>';
		
		}
		else
		{
			Button_enable();
			//語音撥放器  autostart = 0
			document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P6_21.mp3&javascript=on  &amp;autostart=0" /><param name="wmode" value="transparent" /></object>';
			
		} 
	
	   	document.getElementById('flashContent').innerHTML='<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="700" height="525" id="P6_21" align="middle">	<param name="movie" value="P6_21.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" /><param name="wmode" value="window" /><param name="scale" value="showall" /><param name="menu" value="true" /><param name="devicefont" value="false" /><param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><object type="application/x-shockwave-flash" data="P6_21.swf" width="700" height="525"><param name="movie" value="P6_21.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" />	<param name="wmode" value="window" /><param name="scale" value="showall" />	<param name="menu" value="true" /><param name="devicefont" value="false" />	<param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><a href="http://www.adobe.com/go/getflash"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="取得 Adobe Flash 播放程式" /></a></object></object>';

		
		$.post("SQL_next_page.php", {	sql:page },
					function (msg){ }
				);	
		page++;
		page_flag[50]=1;	
	break;	
	
	case 50:	//目前在 P6_21 ，下一頁前往 P6_22
		if(page_flag[51]==0)  //第一次閱讀該頁
		{
			Button_disable();		
			setTimeout('Button_enable()',  mp3_Time[51] );
			//語音撥放器  autostart = 1
			document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P6_22.mp3&javascript=on  &amp;autostart=1" /><param name="wmode" value="transparent" /></object>';
		
		}
		else
		{
			Button_enable();
			//語音撥放器  autostart = 0
			document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P6_22.mp3&javascript=on  &amp;autostart=0" /><param name="wmode" value="transparent" /></object>';
			
		} 
	
	   	document.getElementById('flashContent').innerHTML='<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="700" height="525" id="P6_22" align="middle">	<param name="movie" value="P6_22.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" /><param name="wmode" value="window" /><param name="scale" value="showall" /><param name="menu" value="true" /><param name="devicefont" value="false" /><param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><object type="application/x-shockwave-flash" data="P6_22.swf" width="700" height="525"><param name="movie" value="P6_22.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" />	<param name="wmode" value="window" /><param name="scale" value="showall" />	<param name="menu" value="true" /><param name="devicefont" value="false" />	<param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><a href="http://www.adobe.com/go/getflash"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="取得 Adobe Flash 播放程式" /></a></object></object>';

		
		$.post("SQL_next_page.php", {	sql:page },
					function (msg){ }
				);	
		page++;
		page_flag[51]=1;	
	break;	
	
	case 51:	//目前在 P6_22 ，下一頁前往 P6_23
		if(page_flag[52]==0)  //第一次閱讀該頁
		{
			Button_disable();		
			setTimeout('Button_enable()',  mp3_Time[52] );
			//語音撥放器  autostart = 1
			document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P6_23.mp3&javascript=on  &amp;autostart=1" /><param name="wmode" value="transparent" /></object>';
		
		}
		else
		{
			Button_enable();
			//語音撥放器  autostart = 0
			document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P6_23.mp3&javascript=on  &amp;autostart=0" /><param name="wmode" value="transparent" /></object>';
			
		} 
	
	   	document.getElementById('flashContent').innerHTML='<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="700" height="525" id="P6_23" align="middle">	<param name="movie" value="P6_23.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" /><param name="wmode" value="window" /><param name="scale" value="showall" /><param name="menu" value="true" /><param name="devicefont" value="false" /><param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><object type="application/x-shockwave-flash" data="P6_23.swf" width="700" height="525"><param name="movie" value="P6_23.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" />	<param name="wmode" value="window" /><param name="scale" value="showall" />	<param name="menu" value="true" /><param name="devicefont" value="false" />	<param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><a href="http://www.adobe.com/go/getflash"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="取得 Adobe Flash 播放程式" /></a></object></object>';

		
		$.post("SQL_next_page.php", {	sql:page },
					function (msg){ }
				);	
		page++;
		page_flag[52]=1;	
	break;	
	
	case 52:	//目前在P6_23  ，下一頁前往 P6_24
		if(page_flag[53]==0)  //第一次閱讀該頁
		{
			Button_disable();		
			setTimeout('Button_enable()',  mp3_Time[53] );
			//語音撥放器  autostart = 1
			document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P6_24.mp3&javascript=on  &amp;autostart=1" /><param name="wmode" value="transparent" /></object>';
		
		}
		else
		{
			Button_enable();
			//語音撥放器  autostart = 0
			document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P6_24.mp3&javascript=on  &amp;autostart=0" /><param name="wmode" value="transparent" /></object>';
			
		} 
	
	   	document.getElementById('flashContent').innerHTML='<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="700" height="525" id="P6_24" align="middle">	<param name="movie" value="P6_24.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" /><param name="wmode" value="window" /><param name="scale" value="showall" /><param name="menu" value="true" /><param name="devicefont" value="false" /><param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><object type="application/x-shockwave-flash" data="P6_24.swf" width="700" height="525"><param name="movie" value="P6_24.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" />	<param name="wmode" value="window" /><param name="scale" value="showall" />	<param name="menu" value="true" /><param name="devicefont" value="false" />	<param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><a href="http://www.adobe.com/go/getflash"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="取得 Adobe Flash 播放程式" /></a></object></object>';

		
		$.post("SQL_next_page.php", {	sql:page },
					function (msg){ }
				);	
		page++;
		page_flag[53]=1;	
	break;	
	
	case 53:	//目前在 P6_24 ，下一頁前往 P6_25
		if(page_flag[54]==0)  //第一次閱讀該頁
		{
			Button_disable();		
			setTimeout('Button_enable()',  mp3_Time[54] );
			//語音撥放器  autostart = 1
			document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P6_25.mp3&javascript=on  &amp;autostart=1" /><param name="wmode" value="transparent" /></object>';
		
		}
		else
		{
			Button_enable();
			//語音撥放器  autostart = 0
			document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P6_25.mp3&javascript=on  &amp;autostart=0" /><param name="wmode" value="transparent" /></object>';
			
		} 
	
	   	document.getElementById('flashContent').innerHTML='<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="700" height="525" id="P6_25" align="middle">	<param name="movie" value="P6_25.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" /><param name="wmode" value="window" /><param name="scale" value="showall" /><param name="menu" value="true" /><param name="devicefont" value="false" /><param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><object type="application/x-shockwave-flash" data="P6_25.swf" width="700" height="525"><param name="movie" value="P6_25.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" />	<param name="wmode" value="window" /><param name="scale" value="showall" />	<param name="menu" value="true" /><param name="devicefont" value="false" />	<param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><a href="http://www.adobe.com/go/getflash"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="取得 Adobe Flash 播放程式" /></a></object></object>';

		
		$.post("SQL_next_page.php", {	sql:page },
					function (msg){ }
				);	
		page++;
		page_flag[54]=1;	
	break;	
	
	case 54:	//目前在 P6_25 ，下一頁前往 P6_26
		if(page_flag[55]==0)  //第一次閱讀該頁
		{
			Button_disable();		
			setTimeout('Button_enable()',  mp3_Time[55] );
			//語音撥放器  autostart = 1
			document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P6_26.mp3&javascript=on  &amp;autostart=1" /><param name="wmode" value="transparent" /></object>';
		
		}
		else
		{
			Button_enable();
			//語音撥放器  autostart = 0
			document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P6_26.mp3&javascript=on  &amp;autostart=0" /><param name="wmode" value="transparent" /></object>';
			
		} 
	
	   	document.getElementById('flashContent').innerHTML='<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="700" height="525" id="P6_26" align="middle">	<param name="movie" value="P6_26.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" /><param name="wmode" value="window" /><param name="scale" value="showall" /><param name="menu" value="true" /><param name="devicefont" value="false" /><param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><object type="application/x-shockwave-flash" data="P6_26.swf" width="700" height="525"><param name="movie" value="P6_26.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" />	<param name="wmode" value="window" /><param name="scale" value="showall" />	<param name="menu" value="true" /><param name="devicefont" value="false" />	<param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><a href="http://www.adobe.com/go/getflash"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="取得 Adobe Flash 播放程式" /></a></object></object>';

		
		$.post("SQL_next_page.php", {	sql:page },
					function (msg){ }
				);	
		page++;
		page_flag[55]=1;	
	break;	

	
	case 55:	//目前在 P6_26 ，下一頁前往 P6_27
		if(page_flag[56]==0)  //第一次閱讀該頁
		{
			Button_disable();		
			setTimeout('Button_enable()',  mp3_Time[56] );
			//語音撥放器  autostart = 1
			document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P6_27.mp3&javascript=on  &amp;autostart=1" /><param name="wmode" value="transparent" /></object>';
		
		}
		else
		{
			Button_enable();
			//語音撥放器  autostart = 0
			document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P6_27.mp3&javascript=on  &amp;autostart=0" /><param name="wmode" value="transparent" /></object>';
			
		} 
	
	   	document.getElementById('flashContent').innerHTML='<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="700" height="525" id="P6_27" align="middle">	<param name="movie" value="P6_27.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" /><param name="wmode" value="window" /><param name="scale" value="showall" /><param name="menu" value="true" /><param name="devicefont" value="false" /><param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><object type="application/x-shockwave-flash" data="P6_27.swf" width="700" height="525"><param name="movie" value="P6_27.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" />	<param name="wmode" value="window" /><param name="scale" value="showall" />	<param name="menu" value="true" /><param name="devicefont" value="false" />	<param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><a href="http://www.adobe.com/go/getflash"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="取得 Adobe Flash 播放程式" /></a></object></object>';

		
		$.post("SQL_next_page.php", {	sql:page },
					function (msg){ }
				);	
		page++;
		page_flag[56]=1;	
	break;	


	case 56:	//目前在 P6_27 ，下一頁前往 P7  _1
		if(page_flag[57]==0)  //第一次閱讀該頁
		{
			Button_disable();		
			setTimeout('Button_enable()',  mp3_Time[57] );
			//語音撥放器  autostart = 1
			document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P7.mp3&javascript=on  &amp;autostart=1" /><param name="wmode" value="transparent" /></object>';
		
		}
		else
		{
			Button_enable();
			//語音撥放器  autostart = 0
			document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P7.mp3&javascript=on  &amp;autostart=0" /><param name="wmode" value="transparent" /></object>';
			
		} 

		//左邊標題區的變化
		LeftTitle_change_p7();		

	   	document.getElementById('flashContent').innerHTML="<div class=WordSection1 style=\'layout-grid:18.0pt ; OVERFLOW: scroll;  HEIGHT: 525px; layout-grid:18.0pt\'  class=\"Section1\"><table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0 style=\'border-collapse:collapse;border:none;mso-border-alt:solid windowtext .5pt; mso-yfti-tbllook:1184;mso-padding-alt:0cm 5.4pt 0cm 5.4pt\'> <tr style=\'mso-yfti-irow:0;mso-yfti-firstrow:yes;mso-yfti-lastrow:yes\'><td width=54 valign=top style=\'width:40.85pt;border:solid windowtext 1.0pt;  mso-border-alt:solid windowtext .5pt;background:#B8CCE4;mso-background-themecolor:  accent1;mso-background-themetint:102;padding:0cm 5.4pt 0cm 5.4pt\'>  <p class=MsoNormal><b style=\'mso-bidi-font-weight:normal\'><span lang=EN-US  style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";mso-bidi-font-family:  \"Courier New\"\'>1<o:p></o:p></span></b></p>  <p class=MsoNormal><b style=\'mso-bidi-font-weight:normal\'><span lang=EN-US  style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";mso-bidi-font-family:  \"Courier New\"\'>2<o:p></o:p></span></b></p>  <p class=MsoNormal><b style=\'mso-bidi-font-weight:normal\'><span lang=EN-US  style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";mso-bidi-font-family:  \"Courier New\"\'>3<o:p></o:p></span></b></p>  <p class=MsoNormal><b style=\'mso-bidi-font-weight:normal\'><span lang=EN-US  style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";mso-bidi-font-family:  \"Courier New\"\'>4<o:p></o:p></span></b></p>  <p class=MsoNormal><b style=\'mso-bidi-font-weight:normal\'><span lang=EN-US  style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";mso-bidi-font-family:  \"Courier New\"\'>5<o:p></o:p></span></b></p>  <p class=MsoNormal><b style=\'mso-bidi-font-weight:normal\'><span lang=EN-US  style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";mso-bidi-font-family:  \"Courier New\"\'>6<o:p></o:p></span></b></p>  <p class=MsoNormal><b style=\'mso-bidi-font-weight:normal\'><span lang=EN-US  style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";mso-bidi-font-family:  \"Courier New\"\'>7<o:p></o:p></span></b></p>  <p class=MsoNormal><b style=\'mso-bidi-font-weight:normal\'><span lang=EN-US  style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";mso-bidi-font-family:  \"Courier New\"\'>8<o:p></o:p></span></b></p>  <p class=MsoNormal><b style=\'mso-bidi-font-weight:normal\'><span lang=EN-US  style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";mso-bidi-font-family:  \"Courier New\"\'>9<o:p></o:p></span></b></p>  <p class=MsoNormal><b style=\'mso-bidi-font-weight:normal\'><span lang=EN-US  style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";mso-bidi-font-family:  \"Courier New\"\'>10<o:p></o:p></span></b></p>  <p class=MsoNormal><b style=\'mso-bidi-font-weight:normal\'><span lang=EN-US  style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";mso-bidi-font-family:  \"Courier New\"\'>11<o:p></o:p></span></b></p>  <p class=MsoNormal><b style=\'mso-bidi-font-weight:normal\'><span lang=EN-US  style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";mso-bidi-font-family:  \"Courier New\"\'>12<o:p></o:p></span></b></p>  <p class=MsoNormal><b style=\'mso-bidi-font-weight:normal\'><span lang=EN-US  style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";mso-bidi-font-family:  \"Courier New\"\'>13<o:p></o:p></span></b></p>  <p class=MsoNormal><b style=\'mso-bidi-font-weight:normal\'><span lang=EN-US  style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";mso-bidi-font-family:  \"Courier New\"\'>14<o:p></o:p></span></b></p>  <p class=MsoNormal><b style=\'mso-bidi-font-weight:normal\'><span lang=EN-US  style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";mso-bidi-font-family:  \"Courier New\"\'>15<o:p></o:p></span></b></p>  <p class=MsoNormal><b style=\'mso-bidi-font-weight:normal\'><span lang=EN-US  style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";mso-bidi-font-family:  \"Courier New\"\'>16<o:p></o:p></span></b></p>  <p class=MsoNormal><b style=\'mso-bidi-font-weight:normal\'><span lang=EN-US  style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";mso-bidi-font-family:  \"Courier New\"\'>17<o:p></o:p></span></b></p>  <p class=MsoNormal><b style=\'mso-bidi-font-weight:normal\'><span lang=EN-US  style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";mso-bidi-font-family:  \"Courier New\"\'>18<o:p></o:p></span></b></p>  <p class=MsoNormal><b style=\'mso-bidi-font-weight:normal\'><span lang=EN-US  style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";mso-bidi-font-family:  \"Courier New\"\'>19<o:p></o:p></span></b></p>  <p class=MsoNormal><b style=\'mso-bidi-font-weight:normal\'><span lang=EN-US  style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";mso-bidi-font-family:  \"Courier New\"\'>20<o:p></o:p></span></b></p>  <p class=MsoNormal><b style=\'mso-bidi-font-weight:normal\'><span lang=EN-US  style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";mso-bidi-font-family:  \"Courier New\"\'>21<o:p></o:p></span></b></p>  <p class=MsoNormal><b style=\'mso-bidi-font-weight:normal\'><span lang=EN-US  style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";mso-bidi-font-family:  \"Courier New\"\'>22<o:p></o:p></span></b></p>  <p class=MsoNormal><b style=\'mso-bidi-font-weight:normal\'><span lang=EN-US  style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";mso-bidi-font-family:  \"Courier New\"\'>23<o:p></o:p></span></b></p>  <p class=MsoNormal><b style=\'mso-bidi-font-weight:normal\'><span lang=EN-US  style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";mso-bidi-font-family:  \"Courier New\"\'>24<o:p></o:p></span></b></p>  <p class=MsoNormal><b style=\'mso-bidi-font-weight:normal\'><span lang=EN-US  style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";mso-bidi-font-family:  \"Courier New\"\'>25<o:p></o:p></span></b></p></td><td width=503 valign=top style=\'width:377.25pt;border:solid windowtext 1.0pt;  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt\'>  <p class=MsoNormal style=\'text-indent:5.0pt;background:white\'><b><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  mso-bidi-font-family:\"Courier New\";color:#9BBB59;mso-themecolor:accent3\'>// </span></b><b><span  style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";mso-bidi-font-family:  \"Courier New\";color:#404040;mso-themecolor:text1;mso-themetint:191;  mso-style-textfill-fill-color:#404040;mso-style-textfill-fill-themecolor:  text1;mso-style-textfill-fill-alpha:100.0%;mso-style-textfill-fill-colortransforms:  \"lumm=75000 lumo=25000\";background:yellow;mso-highlight:yellow\'>「<span  lang=EN-US>Point</span>」類別的定義</span></b><span lang=EN-US style=\'font-size:  10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";mso-bidi-font-family:\"Courier New\"\'><o:p></o:p></span></p>  <p class=MsoNormal style=\'text-indent:5.0pt;background:white\'><b><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  mso-bidi-font-family:\"Courier New\";color:#9BBB59;mso-themecolor:accent3\'>//  Point class definition represents an x-y coordinate pair.</span></b><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  mso-bidi-font-family:\"Courier New\";color:#9BBB59;mso-themecolor:accent3\'><o:p></o:p></span></p>  <p class=MsoNormal style=\'text-indent:5.0pt;background:white\'><b><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  mso-bidi-font-family:\"Courier New\";color:#790029\'>#<span class=SpellE>ifndef</span>  POINT_H</span></b><span lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  mso-bidi-font-family:\"Courier New\";color:#7F7F7F;mso-themecolor:text1;  mso-themetint:128;mso-style-textfill-fill-color:#7F7F7F;mso-style-textfill-fill-themecolor:  text1;mso-style-textfill-fill-alpha:100.0%;mso-style-textfill-fill-colortransforms:  \"lumm=50000 lumo=50000\"\'><o:p></o:p></span></p>  <p class=MsoNormal style=\'text-indent:5.0pt;background:white\'><b><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  mso-bidi-font-family:\"Courier New\";color:#790029\'>#define POINT_H<o:p></o:p></span></b></p>  <p class=MsoNormal style=\'text-indent:5.0pt;background:white\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  mso-bidi-font-family:\"Courier New\"\'><o:p>&nbsp;</o:p></span></p>  <p class=MsoNormal style=\'text-indent:5.0pt;background:white\'><b><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  mso-bidi-font-family:\"Courier New\";color:#790029\'>class Point { </span></b><b><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  mso-bidi-font-family:\"Courier New\";color:#9BBB59;mso-themecolor:accent3\'>//</span></b><b><span  style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";mso-bidi-font-family:  \"Courier New\";color:#404040;mso-themecolor:text1;mso-themetint:191;  mso-style-textfill-fill-color:#404040;mso-style-textfill-fill-themecolor:  text1;mso-style-textfill-fill-alpha:100.0%;mso-style-textfill-fill-colortransforms:  \"lumm=75000 lumo=25000\";background:yellow;mso-highlight:yellow\'>定義「<span  lang=EN-US>Point</span>」類別，此為基礎類別</span></b><b><span lang=EN-US  style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";mso-bidi-font-family:  \"Courier New\";color:#404040;mso-themecolor:text1;mso-themetint:191;  mso-style-textfill-fill-color:#404040;mso-style-textfill-fill-themecolor:  text1;mso-style-textfill-fill-alpha:100.0%;mso-style-textfill-fill-colortransforms:  \"lumm=75000 lumo=25000\"\'><o:p></o:p></span></b></p>  <p class=MsoNormal style=\'text-indent:5.0pt;background:white\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  mso-bidi-font-family:\"Courier New\"\'><o:p>&nbsp;</o:p></span></p>  <p class=MsoNormal style=\'text-indent:5.0pt;background:white\'><b><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  mso-bidi-font-family:\"Courier New\";color:#790029\'>public: </span></b><b><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  mso-bidi-font-family:\"Courier New\";color:#9BBB59;mso-themecolor:accent3\'>//</span></b><b><span  style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";mso-bidi-font-family:  \"Courier New\";color:#404040;mso-themecolor:text1;mso-themetint:191;  mso-style-textfill-fill-color:#404040;mso-style-textfill-fill-themecolor:  text1;mso-style-textfill-fill-alpha:100.0%;mso-style-textfill-fill-colortransforms:  \"lumm=75000 lumo=25000\";background:yellow;mso-highlight:yellow\'>宣告公有區成員</span></b><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  mso-bidi-font-family:\"Courier New\"\'><o:p></o:p></span></p>  <p class=MsoNormal style=\'text-indent:40.0pt;mso-char-indent-count:4.0;  background:white\'><b><span lang=EN-US style=\'font-size:10.0pt;font-family:  \"微軟正黑體\",\"sans-serif\";mso-bidi-font-family:\"Courier New\";color:#790029\'>Point(  <span class=SpellE>int</span> = 0, <span class=SpellE>int</span> = 0 ); </span></b><b><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  mso-bidi-font-family:\"Courier New\";color:#9BBB59;mso-themecolor:accent3\'>//</span></b><b><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  mso-bidi-font-family:\"Courier New\";color:#404040;mso-themecolor:text1;  mso-themetint:191;mso-style-textfill-fill-color:#404040;mso-style-textfill-fill-themecolor:  text1;mso-style-textfill-fill-alpha:100.0%;mso-style-textfill-fill-colortransforms:  \"lumm=75000 lumo=25000\";background:yellow;mso-highlight:yellow\'>(</span></b><b><span  style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";mso-bidi-font-family:  \"Courier New\";color:#404040;mso-themecolor:text1;mso-themetint:191;  mso-style-textfill-fill-color:#404040;mso-style-textfill-fill-themecolor:  text1;mso-style-textfill-fill-alpha:100.0%;mso-style-textfill-fill-colortransforms:  \"lumm=75000 lumo=25000\";background:yellow;mso-highlight:yellow\'>預設<span  lang=EN-US>)</span>建構子初始化</span></b><span lang=EN-US style=\'font-size:10.0pt;  font-family:\"微軟正黑體\",\"sans-serif\";mso-bidi-font-family:\"Courier New\"\'><o:p></o:p></span></p>  <p class=MsoNormal style=\'text-indent:5.0pt;background:white\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  mso-bidi-font-family:\"Courier New\"\'><o:p>&nbsp;</o:p></span></p>  <p class=MsoNormal style=\'text-indent:5.0pt;background:white\'><b><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  mso-bidi-font-family:\"Courier New\";color:#790029\'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  void <span class=SpellE>setX</span>( <span class=SpellE>int</span>  );&nbsp;&nbsp;&nbsp; </span></b><b><span lang=EN-US style=\'font-size:10.0pt;  font-family:\"微軟正黑體\",\"sans-serif\";mso-bidi-font-family:\"Courier New\";  color:#9BBB59;mso-themecolor:accent3\'>// </span></b><b><span  style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";mso-bidi-font-family:  \"Courier New\";color:#9BBB59;mso-themecolor:accent3\'>設定<span lang=EN-US>x</span>軸座標  </span></b><span lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  mso-bidi-font-family:\"Courier New\"\'><o:p></o:p></span></p>  <p class=MsoNormal style=\'text-indent:5.0pt;background:white\'><b><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  mso-bidi-font-family:\"Courier New\";color:#790029\'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <span class=SpellE>int</span> <span class=SpellE>getX</span>() <span  class=SpellE>const</span>;&nbsp;&nbsp;&nbsp; </span></b><b><span lang=EN-US  style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";mso-bidi-font-family:  \"Courier New\";color:#9BBB59;mso-themecolor:accent3\'>// return x from  coordinate pair </span></b><span lang=EN-US style=\'font-size:10.0pt;  font-family:\"微軟正黑體\",\"sans-serif\";mso-bidi-font-family:\"Courier New\"\'><o:p></o:p></span></p>  <p class=MsoNormal style=\'text-indent:5.0pt;background:white\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  mso-bidi-font-family:\"Courier New\"\'><o:p>&nbsp;</o:p></span></p>  <p class=MsoNormal style=\'text-indent:5.0pt;background:white\'><b><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  mso-bidi-font-family:\"Courier New\";color:#790029\'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  void <span class=SpellE>setY</span>( <span class=SpellE>int</span>  );&nbsp;&nbsp;&nbsp; </span></b><b><span lang=EN-US style=\'font-size:10.0pt;  font-family:\"微軟正黑體\",\"sans-serif\";mso-bidi-font-family:\"Courier New\";  color:#9BBB59;mso-themecolor:accent3\'>// </span></b><b><span  style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";mso-bidi-font-family:  \"Courier New\";color:#9BBB59;mso-themecolor:accent3\'>設定<span lang=EN-US>y</span>軸座標</span></b><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  mso-bidi-font-family:\"Courier New\"\'><o:p></o:p></span></p>  <p class=MsoNormal style=\'text-indent:5.0pt;background:white\'><b><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  mso-bidi-font-family:\"Courier New\";color:#790029\'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <span class=SpellE>int</span> <span class=SpellE>getY</span>() <span  class=SpellE>const</span>;&nbsp;&nbsp;&nbsp; </span></b><b><span lang=EN-US  style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";mso-bidi-font-family:  \"Courier New\";color:#9BBB59;mso-themecolor:accent3\'>// return y from  coordinate pair </span></b><span lang=EN-US style=\'font-size:10.0pt;  font-family:\"微軟正黑體\",\"sans-serif\";mso-bidi-font-family:\"Courier New\"\'><o:p></o:p></span></p>  <p class=MsoNormal style=\'text-indent:5.0pt;background:white\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  mso-bidi-font-family:\"Courier New\"\'><o:p>&nbsp;</o:p></span></p>  <p class=MsoNormal style=\'text-indent:5.0pt;background:white\'><b><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  mso-bidi-font-family:\"Courier New\";color:#790029\'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  void print() <span class=SpellE>const</span>;&nbsp; </span></b><b><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  mso-bidi-font-family:\"Courier New\";color:#9BBB59;mso-themecolor:accent3\'>//  output Point object </span></b><span lang=EN-US style=\'font-size:10.0pt;  font-family:\"微軟正黑體\",\"sans-serif\";mso-bidi-font-family:\"Courier New\"\'><o:p></o:p></span></p>  <p class=MsoNormal style=\'text-indent:5.0pt;background:white\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  mso-bidi-font-family:\"Courier New\"\'><o:p>&nbsp;</o:p></span></p>  <p class=MsoNormal style=\'text-indent:5.0pt;background:white\'><b><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  mso-bidi-font-family:\"Courier New\";color:#790029\'>protected: </span></b><b><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  mso-bidi-font-family:\"Courier New\";color:#9BBB59;mso-themecolor:accent3\'>//</span></b><b><span  style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";mso-bidi-font-family:  \"Courier New\";color:#404040;mso-themecolor:text1;mso-themetint:191;  mso-style-textfill-fill-color:#404040;mso-style-textfill-fill-themecolor:  text1;mso-style-textfill-fill-alpha:100.0%;mso-style-textfill-fill-colortransforms:  \"lumm=75000 lumo=25000\";background:yellow;mso-highlight:yellow\'>宣告保護區成員</span></b><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  mso-bidi-font-family:\"Courier New\"\'><o:p></o:p></span></p>  <p class=MsoNormal style=\'text-indent:5.0pt;background:white\'><b><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  mso-bidi-font-family:\"Courier New\";color:#790029\'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <span class=SpellE>int</span> x;&nbsp; </span></b><b><span lang=EN-US  style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";mso-bidi-font-family:  \"Courier New\";color:#9BBB59;mso-themecolor:accent3\'>// x part of coordinate  pair</span></b><span lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  mso-bidi-font-family:\"Courier New\"\'><o:p></o:p></span></p>  <p class=MsoNormal style=\'text-indent:5.0pt;background:white\'><b><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  mso-bidi-font-family:\"Courier New\";color:#790029\'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <span class=SpellE>int</span> y;&nbsp; </span></b><b><span lang=EN-US  style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";mso-bidi-font-family:  \"Courier New\";color:#9BBB59;mso-themecolor:accent3\'>// y part of coordinate  pair</span></b><span lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  mso-bidi-font-family:\"Courier New\"\'><o:p></o:p></span></p>  <p class=MsoNormal style=\'text-indent:5.0pt;background:white\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  mso-bidi-font-family:\"Courier New\"\'><o:p>&nbsp;</o:p></span></p>  <p class=MsoNormal style=\'text-indent:5.0pt;background:white\'><b><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  mso-bidi-font-family:\"Courier New\";color:#790029\'>}; </span></b><b><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  mso-bidi-font-family:\"Courier New\";color:#9BBB59;mso-themecolor:accent3\'>//  end class Point</span></b><b><span lang=EN-US style=\'font-size:10.0pt;  font-family:\"微軟正黑體\",\"sans-serif\";mso-bidi-font-family:\"Courier New\";  color:#790029\'> </span></b><span lang=EN-US style=\'font-size:10.0pt;  font-family:\"微軟正黑體\",\"sans-serif\";mso-bidi-font-family:\"Courier New\"\'><o:p></o:p></span></p>  <p class=MsoNormal style=\'text-indent:5.0pt;background:white\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  mso-bidi-font-family:\"Courier New\"\'><o:p>&nbsp;</o:p></span></p>  <p class=MsoNormal><b><span lang=EN-US style=\'font-size:10.0pt;font-family:  \"微軟正黑體\",\"sans-serif\";mso-bidi-font-family:\"Courier New\";color:#790029\'>#<span  class=SpellE>endif</span><o:p></o:p></span></b></p>  </td></tr></table><p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p><table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0 style=\'border-collapse:collapse;border:none;mso-border-alt:solid windowtext .5pt; mso-yfti-tbllook:1184;mso-padding-alt:0cm 5.4pt 0cm 5.4pt\'> <tr style=\'mso-yfti-irow:0;mso-yfti-firstrow:yes;mso-yfti-lastrow:yes\'>  <td width=54 valign=top style=\'width:40.85pt;border:solid windowtext 1.0pt;  mso-border-alt:solid windowtext .5pt;background:#B8CCE4;mso-background-themecolor:  accent1;mso-background-themetint:102;padding:0cm 5.4pt 0cm 5.4pt\'>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>1<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>2<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>3<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>4<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>5<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>6<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>7<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>8<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>9<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>10<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>11<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>12<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>13<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>14<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>15<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>16<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>17<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>18<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>19<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>20<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>21<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>22<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>23<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>24<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>25<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>26<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>27<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>28<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>29<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>30<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>31<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>32<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>33<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>34<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>35<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>36<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>37<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>38<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>39<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>40<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>41<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>42<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>43<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>44<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>45<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>46<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>47<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>48<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>49<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>50<o:p></o:p></span></b></p></td><td width=503 valign=top style=\'width:377.25pt;border:solid windowtext 1.0pt;  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt\'>  <p class=MsoNoSpacing><b><span lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:  11.0pt;font-family:\"微軟正黑體\",\"sans-serif\";color:#9BBB59;mso-themecolor:accent3\'>//  Point.cpp </span></b><b style=\'mso-bidi-font-weight:normal\'><span lang=EN-US  style=\'font-size:10.0pt;mso-bidi-font-size:12.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:#9BBB59;mso-themecolor:accent3\'><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b><span lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:  11.0pt;font-family:\"微軟正黑體\",\"sans-serif\";color:#9BBB59;mso-themecolor:accent3\'>//  </span></b><b><span style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;  font-family:\"微軟正黑體\",\"sans-serif\";color:#9BBB59;mso-themecolor:accent3\'>定義「<span  lang=EN-US>Point</span>」類別的成員函數 </span></b><b style=\'mso-bidi-font-weight:  normal\'><span lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;  font-family:\"微軟正黑體\",\"sans-serif\";color:#9BBB59;mso-themecolor:accent3\'><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b><span lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:  11.0pt;font-family:\"微軟正黑體\",\"sans-serif\";color:#790029\'>#include &lt;<span  class=SpellE>iostream</span>&gt;&nbsp; </span></b><b style=\'mso-bidi-font-weight:  normal\'><span lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;  font-family:\"微軟正黑體\",\"sans-serif\"\'><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'><o:p>&nbsp;</o:p></span></b></p>  <p class=MsoNoSpacing><b><span lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:  11.0pt;font-family:\"微軟正黑體\",\"sans-serif\";color:#790029\'>using <span  class=SpellE>std</span>::<span class=SpellE>cout</span>; </span></b><b  style=\'mso-bidi-font-weight:normal\'><span lang=EN-US style=\'font-size:10.0pt;  mso-bidi-font-size:11.0pt;font-family:\"微軟正黑體\",\"sans-serif\"\'><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'><o:p>&nbsp;</o:p></span></b></p>  <p class=MsoNoSpacing><b><span lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:  11.0pt;font-family:\"微軟正黑體\",\"sans-serif\";color:#790029\'>#include &quot;<span  class=SpellE>Point.h</span>&quot;&nbsp;&nbsp;</span></b><b><span lang=EN-US  style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:#9BBB59;mso-themecolor:accent3\'>//</span></b><b><span style=\'font-size:  10.0pt;mso-bidi-font-size:11.0pt;font-family:\"微軟正黑體\",\"sans-serif\";color:#9BBB59;  mso-themecolor:accent3\'>引用先前定義過的類別「<span lang=EN-US>Point</span>」</span></b><b><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\";color:#790029\'><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b><span lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:  11.0pt;font-family:\"微軟正黑體\",\"sans-serif\";color:#9BBB59;mso-themecolor:accent3\'>//</span></b><b><span  style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:#404040;mso-themecolor:text1;mso-themetint:191;mso-style-textfill-fill-color:  #404040;mso-style-textfill-fill-themecolor:text1;mso-style-textfill-fill-alpha:  100.0%;mso-style-textfill-fill-colortransforms:\"lumm=75000 lumo=25000\";  background:yellow;mso-highlight:yellow\'>建構子定義，其中 “<span lang=EN-US>::</span>”為  <i style=\'mso-bidi-font-style:normal\'><span lang=EN-US>resolution scope  operator</span></i></span></b><b><i style=\'mso-bidi-font-style:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\";color:#790029\'><o:p></o:p></span></i></b></p>  <p class=MsoNoSpacing><b><span lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:  11.0pt;font-family:\"微軟正黑體\",\"sans-serif\";color:#9BBB59;mso-themecolor:accent3\'>//</span></b><b><span  style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:#404040;mso-themecolor:text1;mso-themetint:191;mso-style-textfill-fill-color:  #404040;mso-style-textfill-fill-themecolor:text1;mso-style-textfill-fill-alpha:  100.0%;mso-style-textfill-fill-colortransforms:\"lumm=75000 lumo=25000\";  background:yellow;mso-highlight:yellow\'>當我們需要在類別外定義成員之內容時，必須使用 “<span  lang=EN-US>::</span>”。</span></b><b style=\'mso-bidi-font-weight:normal\'><span  style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:#404040;mso-themecolor:text1;mso-themetint:191;mso-style-textfill-fill-color:  #404040;mso-style-textfill-fill-themecolor:text1;mso-style-textfill-fill-alpha:  100.0%;mso-style-textfill-fill-colortransforms:\"lumm=75000 lumo=25000\"\'> </span></b><b  style=\'mso-bidi-font-weight:normal\'><span lang=EN-US style=\'font-size:10.0pt;  mso-bidi-font-size:11.0pt;font-family:\"微軟正黑體\",\"sans-serif\"\'><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b><span lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:  11.0pt;font-family:\"微軟正黑體\",\"sans-serif\";color:#790029\'>Point::Point( <span  class=SpellE>int</span> <span class=SpellE>xValue</span>, <span class=SpellE>int</span>  <span class=SpellE>yValue</span> ) </span></b><b style=\'mso-bidi-font-weight:  normal\'><span lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;  font-family:\"微軟正黑體\",\"sans-serif\"\'><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b><span lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:  11.0pt;font-family:\"微軟正黑體\",\"sans-serif\";color:#790029\'>{ </span></b><b  style=\'mso-bidi-font-weight:normal\'><span lang=EN-US style=\'font-size:10.0pt;  mso-bidi-font-size:11.0pt;font-family:\"微軟正黑體\",\"sans-serif\"\'><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b><span lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:  11.0pt;font-family:\"微軟正黑體\",\"sans-serif\";color:#790029\'>&nbsp;&nbsp; x = <span  class=SpellE>xValue</span>; </span></b><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b><span lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:  11.0pt;font-family:\"微軟正黑體\",\"sans-serif\";color:#790029\'>&nbsp;&nbsp; y = <span  class=SpellE>yValue</span>; <o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b><span lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:  11.0pt;font-family:\"微軟正黑體\",\"sans-serif\";color:#9BBB59;mso-themecolor:accent3\'>//</span></b><b><span  style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:#404040;mso-themecolor:text1;mso-themetint:191;mso-style-textfill-fill-color:  #404040;mso-style-textfill-fill-themecolor:text1;mso-style-textfill-fill-alpha:  100.0%;mso-style-textfill-fill-colortransforms:\"lumm=75000 lumo=25000\";  background:yellow;mso-highlight:yellow\'>保護區成員，在類別當中就像私有區成員，存取只能透過類別的成員函數</span></b><b  style=\'mso-bidi-font-weight:normal\'><span lang=EN-US style=\'font-size:10.0pt;  mso-bidi-font-size:11.0pt;font-family:\"微軟正黑體\",\"sans-serif\"\'><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b><span lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:  11.0pt;font-family:\"微軟正黑體\",\"sans-serif\";color:#790029\'>}</span></b><b><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\";color:#9BBB59;mso-themecolor:accent3\'> // end Point  constructor</span></b><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'><o:p>&nbsp;</o:p></span></b></p>  <p class=MsoNoSpacing><b><span lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:  11.0pt;font-family:\"微軟正黑體\",\"sans-serif\";color:#790029\'>// set x in coordinate  pair</span></b><b style=\'mso-bidi-font-weight:normal\'><span lang=EN-US  style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:\"微軟正黑體\",\"sans-serif\"\'><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b><span lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:  11.0pt;font-family:\"微軟正黑體\",\"sans-serif\";color:#790029\'>void Point::<span  class=SpellE>setX</span>( <span class=SpellE>int</span> <span class=SpellE>xValue</span>  )</span></b><b style=\'mso-bidi-font-weight:normal\'><span lang=EN-US  style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:\"微軟正黑體\",\"sans-serif\"\'><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b><span lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:  11.0pt;font-family:\"微軟正黑體\",\"sans-serif\";color:#790029\'>{</span></b><b  style=\'mso-bidi-font-weight:normal\'><span lang=EN-US style=\'font-size:10.0pt;  mso-bidi-font-size:11.0pt;font-family:\"微軟正黑體\",\"sans-serif\"\'><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b><span lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:  11.0pt;font-family:\"微軟正黑體\",\"sans-serif\";color:#790029\'>&nbsp;&nbsp; x = <span  class=SpellE>xValue</span>; </span></b><b><span lang=EN-US style=\'font-size:  10.0pt;mso-bidi-font-size:11.0pt;font-family:\"微軟正黑體\",\"sans-serif\";color:#9BBB59;  mso-themecolor:accent3\'>// no need for validation</span></b><b  style=\'mso-bidi-font-weight:normal\'><span lang=EN-US style=\'font-size:10.0pt;  mso-bidi-font-size:11.0pt;font-family:\"微軟正黑體\",\"sans-serif\"\'><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'><o:p>&nbsp;</o:p></span></b></p>  <p class=MsoNoSpacing><b><span lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:  11.0pt;font-family:\"微軟正黑體\",\"sans-serif\";color:#790029\'>} </span></b><b><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\";color:#9BBB59;mso-themecolor:accent3\'>// end function <span  class=SpellE>setX</span></span></b><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b><span lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:  11.0pt;font-family:\"微軟正黑體\",\"sans-serif\";color:#790029\'><o:p>&nbsp;</o:p></span></b></p>  <p class=MsoNoSpacing><b><span lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:  11.0pt;font-family:\"微軟正黑體\",\"sans-serif\";color:#9BBB59;mso-themecolor:accent3\'>//  return x from coordinate pair</span></b><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\";color:#9BBB59;mso-themecolor:accent3\'><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><span class=SpellE><b><span lang=EN-US  style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:#790029\'>int</span></b></span><b><span lang=EN-US style=\'font-size:  10.0pt;mso-bidi-font-size:11.0pt;font-family:\"微軟正黑體\",\"sans-serif\";color:#790029\'>  Point::<span class=SpellE>getX</span>() <span class=SpellE>const</span> </span></b><b  style=\'mso-bidi-font-weight:normal\'><span lang=EN-US style=\'font-size:10.0pt;  mso-bidi-font-size:11.0pt;font-family:\"微軟正黑體\",\"sans-serif\"\'><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b><span lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:  11.0pt;font-family:\"微軟正黑體\",\"sans-serif\";color:#790029\'>{ </span></b><b  style=\'mso-bidi-font-weight:normal\'><span lang=EN-US style=\'font-size:10.0pt;  mso-bidi-font-size:11.0pt;font-family:\"微軟正黑體\",\"sans-serif\"\'><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b><span lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:  11.0pt;font-family:\"微軟正黑體\",\"sans-serif\";color:#790029\'>&nbsp;&nbsp; return x;  </span></b><b style=\'mso-bidi-font-weight:normal\'><span lang=EN-US  style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:\"微軟正黑體\",\"sans-serif\"\'><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'><o:p>&nbsp;</o:p></span></b></p>  <p class=MsoNoSpacing><b><span lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:  11.0pt;font-family:\"微軟正黑體\",\"sans-serif\";color:#790029\'>} </span></b><b><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\";color:#9BBB59;mso-themecolor:accent3\'>// end function <span  class=SpellE>getX</span></span></b><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'><o:p>&nbsp;</o:p></span></b></p>  <p class=MsoNoSpacing><b><span lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:  11.0pt;font-family:\"微軟正黑體\",\"sans-serif\";color:#9BBB59;mso-themecolor:accent3\'>//  set y in coordinate pair</span></b><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\";color:#9BBB59;mso-themecolor:accent3\'><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b><span lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:  11.0pt;font-family:\"微軟正黑體\",\"sans-serif\";color:#790029\'>void Point::<span  class=SpellE>setY</span>( <span class=SpellE>int</span> <span class=SpellE>yValue</span>  ) </span></b><b style=\'mso-bidi-font-weight:normal\'><span lang=EN-US  style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:\"微軟正黑體\",\"sans-serif\"\'><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b><span lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:  11.0pt;font-family:\"微軟正黑體\",\"sans-serif\";color:#790029\'>{ </span></b><b  style=\'mso-bidi-font-weight:normal\'><span lang=EN-US style=\'font-size:10.0pt;  mso-bidi-font-size:11.0pt;font-family:\"微軟正黑體\",\"sans-serif\"\'><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b><span lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:  11.0pt;font-family:\"微軟正黑體\",\"sans-serif\";color:#790029\'>&nbsp;&nbsp; y = <span  class=SpellE>yValue</span>; </span></b><b><span lang=EN-US style=\'font-size:  10.0pt;mso-bidi-font-size:11.0pt;font-family:\"微軟正黑體\",\"sans-serif\";color:#9BBB59;  mso-themecolor:accent3\'>// no need for validation</span></b><b  style=\'mso-bidi-font-weight:normal\'><span lang=EN-US style=\'font-size:10.0pt;  mso-bidi-font-size:11.0pt;font-family:\"微軟正黑體\",\"sans-serif\"\'><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'><o:p>&nbsp;</o:p></span></b></p>  <p class=MsoNoSpacing><b><span lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:  11.0pt;font-family:\"微軟正黑體\",\"sans-serif\";color:#790029\'>} </span></b><b><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\";color:#9BBB59;mso-themecolor:accent3\'>// end function <span  class=SpellE>setY</span></span></b><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'><o:p>&nbsp;</o:p></span></b></p>  <p class=MsoNoSpacing><b><span lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:  11.0pt;font-family:\"微軟正黑體\",\"sans-serif\";color:#9BBB59;mso-themecolor:accent3\'>//  return y from coordinate pair</span></b><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\";color:#9BBB59;mso-themecolor:accent3\'><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><span class=SpellE><b><span lang=EN-US  style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:#790029\'>int</span></b></span><b><span lang=EN-US style=\'font-size:  10.0pt;mso-bidi-font-size:11.0pt;font-family:\"微軟正黑體\",\"sans-serif\";color:#790029\'>  Point::<span class=SpellE>getY</span>() <span class=SpellE>const</span></span></b><b  style=\'mso-bidi-font-weight:normal\'><span lang=EN-US style=\'font-size:10.0pt;  mso-bidi-font-size:11.0pt;font-family:\"微軟正黑體\",\"sans-serif\"\'><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b><span lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:  11.0pt;font-family:\"微軟正黑體\",\"sans-serif\";color:#790029\'>{ </span></b><b  style=\'mso-bidi-font-weight:normal\'><span lang=EN-US style=\'font-size:10.0pt;  mso-bidi-font-size:11.0pt;font-family:\"微軟正黑體\",\"sans-serif\"\'><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b><span lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:  11.0pt;font-family:\"微軟正黑體\",\"sans-serif\";color:#790029\'>&nbsp;&nbsp; return y;</span></b><b  style=\'mso-bidi-font-weight:normal\'><span lang=EN-US style=\'font-size:10.0pt;  mso-bidi-font-size:11.0pt;font-family:\"微軟正黑體\",\"sans-serif\"\'><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'><o:p>&nbsp;</o:p></span></b></p>  <p class=MsoNoSpacing><b><span lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:  11.0pt;font-family:\"微軟正黑體\",\"sans-serif\";color:#790029\'>} </span></b><b><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\";color:#9BBB59;mso-themecolor:accent3\'>// end function <span  class=SpellE>getY</span></span></b><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'><o:p>&nbsp;</o:p></span></b></p>  <p class=MsoNoSpacing><b><span lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:  11.0pt;font-family:\"微軟正黑體\",\"sans-serif\";color:#9BBB59;mso-themecolor:accent3\'>//  output Point object</span></b><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\";color:#9BBB59;mso-themecolor:accent3\'><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b><span lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:  11.0pt;font-family:\"微軟正黑體\",\"sans-serif\";color:#790029\'>void Point::print() <span  class=SpellE>const</span> </span></b><b><span lang=EN-US style=\'font-size:  10.0pt;mso-bidi-font-size:11.0pt;font-family:\"微軟正黑體\",\"sans-serif\";color:#9BBB59;  mso-themecolor:accent3\'>//</span></b><b><span style=\'font-size:10.0pt;  mso-bidi-font-size:11.0pt;font-family:\"微軟正黑體\",\"sans-serif\";color:#9BBB59;  mso-themecolor:accent3\'>印出「<span lang=EN-US>Point</span>」物件的成員函數</span></b><b  style=\'mso-bidi-font-weight:normal\'><span lang=EN-US style=\'font-size:10.0pt;  mso-bidi-font-size:11.0pt;font-family:\"微軟正黑體\",\"sans-serif\"\'><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b><span lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:  11.0pt;font-family:\"微軟正黑體\",\"sans-serif\";color:#790029\'>{ </span></b><b  style=\'mso-bidi-font-weight:normal\'><span lang=EN-US style=\'font-size:10.0pt;  mso-bidi-font-size:11.0pt;font-family:\"微軟正黑體\",\"sans-serif\"\'><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b><span lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:  11.0pt;font-family:\"微軟正黑體\",\"sans-serif\";color:#790029\'>&nbsp;&nbsp; <span  class=SpellE>cout</span> &lt;&lt; \'[\' &lt;&lt; x &lt;&lt; &quot;, &quot;  &lt;&lt; y &lt;&lt; \']\'; </span></b><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'><o:p>&nbsp;</o:p></span></b></p>  <p class=MsoNoSpacing><b><span lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:  11.0pt;font-family:\"微軟正黑體\",\"sans-serif\";color:#790029\'>} </span></b><b><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\";color:#9BBB59;mso-themecolor:accent3\'>// end function  print</span></b><b style=\'mso-bidi-font-weight:normal\'><span lang=EN-US  style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:\"微軟正黑體\",\"sans-serif\"\'><o:p></o:p></span></b></p></td></tr></table></div>";


		
		$.post("SQL_next_page.php", {	sql:page },
					function (msg){ }
				);	
		page++;
		page_flag[57]=1;	
	break;		
	
	case 57:	//目前在 P7  _1 ，下一頁前往 7  _2
	   	document.getElementById('flashContent').innerHTML='<div class=WordSection1 style=\'layout-grid:18.0pt ; OVERFLOW: scroll;  HEIGHT: 525px; layout-grid:18.0pt\'  class=\"Section1\"><table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0 style=\'border-collapse:collapse;border:none;mso-border-alt:solid windowtext .5pt; mso-yfti-tbllook:1184;mso-padding-alt:0cm 5.4pt 0cm 5.4pt\'> <tr style=\'mso-yfti-irow:0;mso-yfti-firstrow:yes;mso-yfti-lastrow:yes\'>  <td width=54 valign=top style=\'width:40.85pt;border:solid windowtext 1.0pt;  mso-border-alt:solid windowtext .5pt;background:#B8CCE4;mso-background-themecolor:  accent1;mso-background-themetint:102;padding:0cm 5.4pt 0cm 5.4pt\'>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\"\'>1<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\"\'>2<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\"\'>3<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\"\'>4<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\"\'>5<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\"\'>6<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\"\'>7<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\"\'>8<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\"\'>9<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\"\'>10<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\"\'>11<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\"\'>12<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\"\'>13<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\"\'>14<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\"\'>15<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\"\'>16<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\"\'>17<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\"\'>18<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\"\'>19<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\"\'>20<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\"\'>21<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\"\'>22<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\"\'>23<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\"\'>24<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\"\'>25<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\"\'>26<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\"\'>27<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\"\'>28<o:p></o:p></span></b></p>  </td>  <td width=503 valign=top style=\'width:377.25pt;border:solid windowtext 1.0pt;  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt\'>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:#9BBB59;mso-themecolor:accent3;background:white\'>// <span class=SpellE>circle.h</span></span></b><b  style=\'mso-bidi-font-weight:normal\'><span style=\'font-size:10.0pt;font-family:  \"微軟正黑體\",\"sans-serif\";color:#0D0D0D;mso-themecolor:text1;mso-themetint:242;  mso-style-textfill-fill-color:#0D0D0D;mso-style-textfill-fill-themecolor:  text1;mso-style-textfill-fill-alpha:100.0%;mso-style-textfill-fill-colortransforms:  \"lumm=95000 lumo=5000\";background:yellow\'>衍生類別「<span lang=EN-US>Circle</span>」的類別定義</span></b><b  style=\'mso-bidi-font-weight:normal\'><span lang=EN-US style=\'font-size:10.0pt;  font-family:\"微軟正黑體\",\"sans-serif\"\'><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:#9BBB59;mso-themecolor:accent3;background:white\'>// </span></b><b  style=\'mso-bidi-font-weight:normal\'><span lang=EN-US style=\'font-size:10.0pt;  font-family:\"微軟正黑體\",\"sans-serif\";color:#0D0D0D;mso-themecolor:text1;  mso-themetint:242;mso-style-textfill-fill-color:#0D0D0D;mso-style-textfill-fill-themecolor:  text1;mso-style-textfill-fill-alpha:100.0%;mso-style-textfill-fill-colortransforms:  \"lumm=95000 lumo=5000\";background:yellow;mso-highlight:yellow;mso-shading:  white\'>Circle</span></b><b style=\'mso-bidi-font-weight:normal\'><span  style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";color:#0D0D0D;  mso-themecolor:text1;mso-themetint:242;mso-style-textfill-fill-color:#0D0D0D;  mso-style-textfill-fill-themecolor:text1;mso-style-textfill-fill-alpha:100.0%;  mso-style-textfill-fill-colortransforms:\"lumm=95000 lumo=5000\";background:  yellow;mso-highlight:yellow;mso-shading:white\'>類別除了包含圓心<span lang=EN-US>(x</span>軸<span  lang=EN-US>, y</span>軸<span lang=EN-US>)</span>座標之外，多增加了半徑</span></b><b  style=\'mso-bidi-font-weight:normal\'><span lang=EN-US style=\'font-size:10.0pt;  font-family:\"微軟正黑體\",\"sans-serif\"\'><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:#790029;background:white\'>#<span class=SpellE>ifndef</span> CIRCLE_H </span></b><b  style=\'mso-bidi-font-weight:normal\'><span lang=EN-US style=\'font-size:10.0pt;  font-family:\"微軟正黑體\",\"sans-serif\"\'><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:#790029;background:white\'>#define CIRCLE_H </span></b><b  style=\'mso-bidi-font-weight:normal\'><span lang=EN-US style=\'font-size:10.0pt;  font-family:\"微軟正黑體\",\"sans-serif\"\'><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\"\'><o:p>&nbsp;</o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:#790029;background:white\'>#include &quot;<span class=SpellE>Point.h</span>&quot;&nbsp;  </span></b><b style=\'mso-bidi-font-weight:normal\'><span lang=EN-US  style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\"\'><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:#9BBB59;mso-themecolor:accent3;background:white\'>//</span></b><b  style=\'mso-bidi-font-weight:normal\'><span style=\'font-size:10.0pt;font-family:  \"微軟正黑體\",\"sans-serif\";color:#0D0D0D;mso-themecolor:text1;mso-themetint:242;  mso-style-textfill-fill-color:#0D0D0D;mso-style-textfill-fill-themecolor:  text1;mso-style-textfill-fill-alpha:100.0%;mso-style-textfill-fill-colortransforms:  \"lumm=95000 lumo=5000\";background:yellow\'>類別「圓」 繼承自類別「點」<span lang=EN-US>(Point</span></span></b><b  style=\'mso-bidi-font-weight:normal\'><span lang=EN-US style=\'font-size:10.0pt;  font-family:\"微軟正黑體\",\"sans-serif\";color:black;background:yellow\'>)</span></b><b  style=\'mso-bidi-font-weight:normal\'><span lang=EN-US style=\'font-size:10.0pt;  font-family:\"微軟正黑體\",\"sans-serif\"\'><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:#790029;background:white\'>class Circle : public Point { </span></b><b  style=\'mso-bidi-font-weight:normal\'><span lang=EN-US style=\'font-size:10.0pt;  font-family:\"微軟正黑體\",\"sans-serif\"\'><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\"\'><o:p>&nbsp;</o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:#790029;background:white\'>public: </span></b><b style=\'mso-bidi-font-weight:  normal\'><span lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\"\'><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:#790029;background:white\'>&nbsp;&nbsp;&nbsp; </span></b><b  style=\'mso-bidi-font-weight:normal\'><span lang=EN-US style=\'font-size:10.0pt;  font-family:\"微軟正黑體\",\"sans-serif\";color:#9BBB59;mso-themecolor:accent3;  background:white\'>// default constructor</span></b><b style=\'mso-bidi-font-weight:  normal\'><span lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:#790029;background:white\'> </span></b><b style=\'mso-bidi-font-weight:  normal\'><span lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\"\'><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:#790029;background:white\'>&nbsp;&nbsp;&nbsp; Circle( <span  class=SpellE>int</span> = 0, <span class=SpellE>int</span> = 0, double = 0.0  );&nbsp; </span></b><b style=\'mso-bidi-font-weight:normal\'><span lang=EN-US  style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\"\'><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:#790029;background:white\'><span  style=\'mso-spacerun:yes\'>&nbsp;</span>&nbsp;&nbsp;&nbsp;</span></b><b  style=\'mso-bidi-font-weight:normal\'><span lang=EN-US style=\'font-size:10.0pt;  font-family:\"微軟正黑體\",\"sans-serif\";color:#9BBB59;mso-themecolor:accent3;  background:white\'>//</span></b><b style=\'mso-bidi-font-weight:normal\'><span  style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";color:#0D0D0D;  mso-themecolor:text1;mso-themetint:242;mso-style-textfill-fill-color:#0D0D0D;  mso-style-textfill-fill-themecolor:text1;mso-style-textfill-fill-alpha:100.0%;  mso-style-textfill-fill-colortransforms:\"lumm=95000 lumo=5000\";background:  yellow;mso-highlight:yellow;mso-shading:white\'>衍生類別「<span lang=EN-US>Circle</span>」繼承基礎類別「<span  lang=EN-US>Point</span>」的所有成員，並且</span></b><b style=\'mso-bidi-font-weight:  normal\'><span lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\"\'><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:#790029;background:white\'><span style=\'mso-spacerun:yes\'>&nbsp;&nbsp;  </span></span></b><b style=\'mso-bidi-font-weight:normal\'><span lang=EN-US  style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";color:#9BBB59;  mso-themecolor:accent3;background:white\'>//</span></b><b style=\'mso-bidi-font-weight:  normal\'><span style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:#0D0D0D;mso-themecolor:text1;mso-themetint:242;mso-style-textfill-fill-color:  #0D0D0D;mso-style-textfill-fill-themecolor:text1;mso-style-textfill-fill-alpha:  100.0%;mso-style-textfill-fill-colortransforms:\"lumm=95000 lumo=5000\";  background:yellow;mso-highlight:yellow;mso-shading:white\'>另外新增成員「<span  class=SpellE><span lang=EN-US>setRadius</span></span><span lang=EN-US>()</span>」、「<span  class=SpellE><span lang=EN-US>getRadius</span></span><span lang=EN-US>()</span>」及「<span  lang=EN-US>radius</span>」</span></b><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:#0D0D0D;mso-themecolor:text1;mso-themetint:242;mso-style-textfill-fill-color:  #0D0D0D;mso-style-textfill-fill-themecolor:text1;mso-style-textfill-fill-alpha:  100.0%;mso-style-textfill-fill-colortransforms:\"lumm=95000 lumo=5000\";  background:white\'><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:#790029;background:white\'>&nbsp;&nbsp;&nbsp; void <span class=SpellE>setRadius</span>(  double );&nbsp;&nbsp;<span style=\'mso-spacerun:yes\'>&nbsp;&nbsp;&nbsp;  </span></span></b><b style=\'mso-bidi-font-weight:normal\'><span lang=EN-US  style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";color:#9BBB59;  mso-themecolor:accent3;background:white\'>// set radius</span></b><b  style=\'mso-bidi-font-weight:normal\'><span lang=EN-US style=\'font-size:10.0pt;  font-family:\"微軟正黑體\",\"sans-serif\"\'><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:#790029;background:white\'><span  style=\'mso-spacerun:yes\'>&nbsp;</span>&nbsp;&nbsp;&nbsp;double <span  class=SpellE>getRadius</span>() <span class=SpellE>const</span>;&nbsp;&nbsp;<span  style=\'mso-spacerun:yes\'>&nbsp;&nbsp; </span></span></b><b style=\'mso-bidi-font-weight:  normal\'><span lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:#9BBB59;mso-themecolor:accent3;background:white\'>// return radius</span></b><b  style=\'mso-bidi-font-weight:normal\'><span lang=EN-US style=\'font-size:10.0pt;  font-family:\"微軟正黑體\",\"sans-serif\"\'><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:#790029;background:white\'>&nbsp;&nbsp;&nbsp; double <span class=SpellE>getDiameter</span>()  <span class=SpellE>const</span>;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span  style=\'mso-spacerun:yes\'>&nbsp;&nbsp; </span></span></b><b style=\'mso-bidi-font-weight:  normal\'><span lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:#9BBB59;mso-themecolor:accent3;background:white\'>// return diameter</span></b><b  style=\'mso-bidi-font-weight:normal\'><span lang=EN-US style=\'font-size:10.0pt;  font-family:\"微軟正黑體\",\"sans-serif\"\'><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:#790029;background:white\'>&nbsp;&nbsp;&nbsp; double <span class=SpellE>getCircumference</span>()  <span class=SpellE>const</span>;&nbsp; </span></b><b style=\'mso-bidi-font-weight:  normal\'><span lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:#9BBB59;mso-themecolor:accent3;background:white\'>// return  circumference</span></b><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\"\'><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:#790029;background:white\'>&nbsp;&nbsp;&nbsp; double <span class=SpellE>getArea</span>()  <span class=SpellE>const</span>;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span  style=\'mso-spacerun:yes\'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></b><b  style=\'mso-bidi-font-weight:normal\'><span lang=EN-US style=\'font-size:10.0pt;  font-family:\"微軟正黑體\",\"sans-serif\";color:#9BBB59;mso-themecolor:accent3;  background:white\'>// return area</span></b><b style=\'mso-bidi-font-weight:  normal\'><span lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\"\'><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:#790029;background:white\'><span  style=\'mso-spacerun:yes\'>&nbsp;</span>&nbsp;&nbsp;&nbsp;</span></b><b  style=\'mso-bidi-font-weight:normal\'><span lang=EN-US style=\'font-size:10.0pt;  font-family:\"微軟正黑體\",\"sans-serif\";color:#9BBB59;mso-themecolor:accent3;  background:white\'>//</span></b><b style=\'mso-bidi-font-weight:normal\'><span  style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";color:#0D0D0D;  mso-themecolor:text1;mso-themetint:242;mso-style-textfill-fill-color:#0D0D0D;  mso-style-textfill-fill-themecolor:text1;mso-style-textfill-fill-alpha:100.0%;  mso-style-textfill-fill-colortransforms:\"lumm=95000 lumo=5000\";background:  yellow;mso-highlight:yellow;mso-shading:white\'>並且將基礎類別成員<span lang=EN-US>print()</span>，修改以符合<span  lang=EN-US>Circle</span>類別使用</span></b><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\"\'><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:#790029;background:white\'>&nbsp;&nbsp;&nbsp; void print() <span  class=SpellE>const</span>;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></b><b  style=\'mso-bidi-font-weight:normal\'><span lang=EN-US style=\'font-size:10.0pt;  font-family:\"微軟正黑體\",\"sans-serif\";color:#9BBB59;mso-themecolor:accent3;  background:white\'>// output Circle object</span></b><b style=\'mso-bidi-font-weight:  normal\'><span lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\"\'><o:p></o:p></span></b></p>  <p class=MsoNoSpacing style=\'line-height:115%\'><b style=\'mso-bidi-font-weight:  normal\'><span lang=EN-US style=\'font-size:10.0pt;line-height:115%;font-family:  \"微軟正黑體\",\"sans-serif\"\'><o:p>&nbsp;</o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:#790029;background:white\'>private: </span></b><b style=\'mso-bidi-font-weight:  normal\'><span lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:#9BBB59;mso-themecolor:accent3;background:white\'>//</span></b><b  style=\'mso-bidi-font-weight:normal\'><span style=\'font-size:10.0pt;font-family:  \"微軟正黑體\",\"sans-serif\";color:#0D0D0D;mso-themecolor:text1;mso-themetint:242;  mso-style-textfill-fill-color:#0D0D0D;mso-style-textfill-fill-themecolor:  text1;mso-style-textfill-fill-alpha:100.0%;mso-style-textfill-fill-colortransforms:  \"lumm=95000 lumo=5000\";background:yellow;mso-highlight:yellow;mso-shading:  white\'>宣告私有區成員</span></b><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\"\'><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:#790029;background:white\'>&nbsp;&nbsp;&nbsp; double radius;&nbsp; </span></b><b  style=\'mso-bidi-font-weight:normal\'><span lang=EN-US style=\'font-size:10.0pt;  font-family:\"微軟正黑體\",\"sans-serif\";color:#9BBB59;mso-themecolor:accent3;  background:white\'>// Circle\'s radius</span></b><b style=\'mso-bidi-font-weight:  normal\'><span lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\"\'><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\"\'><o:p>&nbsp;</o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:#790029;background:white\'>}; </span></b><b style=\'mso-bidi-font-weight:  normal\'><span lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:#9BBB59;mso-themecolor:accent3;background:white\'>// end class Circle</span></b><b  style=\'mso-bidi-font-weight:normal\'><span lang=EN-US style=\'font-size:10.0pt;  font-family:\"微軟正黑體\",\"sans-serif\"\'><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\"\'><o:p>&nbsp;</o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:#790029;background:white\'>#<span class=SpellE>endif</span></span></b><b  style=\'mso-bidi-font-weight:normal\'><span lang=EN-US style=\'font-size:10.0pt;  font-family:\"微軟正黑體\",\"sans-serif\"\'><o:p></o:p></span></b></p>  </td> </tr></table><p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p><table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0 style=\'border-collapse:collapse;border:none;mso-border-alt:solid windowtext .5pt; mso-yfti-tbllook:1184;mso-padding-alt:0cm 5.4pt 0cm 5.4pt\'> <tr style=\'mso-yfti-irow:0;mso-yfti-firstrow:yes;mso-yfti-lastrow:yes\'>  <td width=54 valign=top style=\'width:40.85pt;border:solid windowtext 1.0pt;  mso-border-alt:solid windowtext .5pt;background:#B8CCE4;mso-background-themecolor:  accent1;mso-background-themetint:102;padding:0cm 5.4pt 0cm 5.4pt\'>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>1<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>2<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>3<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>4<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>5<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>6<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>7<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>8<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>9<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>10<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>11<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>12<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>13<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>14<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>15<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>16<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>17<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>18<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>19<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>20<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><spanlang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>21<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>22<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>23<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>24<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>25<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>26<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>27<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>28<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>29<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>30<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>31<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>32<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>33<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>34<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>35<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>36<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>37<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>38<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>39<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>40<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>41<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>42<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>43<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>44<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>45<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>46<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>47<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>48<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>49<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>50<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>51<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>52<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>53<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>54<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>55<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>56<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>57<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>58<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>59<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>60<o:p></o:p></span></b></p>  </td>  <td width=503 valign=top style=\'width:377.25pt;border:solid windowtext 1.0pt;  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt\'>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:#9BBB59;mso-themecolor:accent3\'>// circle.cpp<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:#9BBB59;mso-themecolor:accent3\'>// Circle class member-function  definitions.<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:maroon\'>#include &lt;<span class=SpellE>iostream</span>&gt;<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:maroon\'>&nbsp;<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:maroon\'>using <span class=SpellE>std</span>::<span class=SpellE>cout</span>;<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:#9BBB59;mso-themecolor:accent3\'>//</span></b><b style=\'mso-bidi-font-weight:  normal\'><span lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:maroon\'> </span></b><b style=\'mso-bidi-font-weight:normal\'><span  style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";color:#404040;  mso-themecolor:text1;mso-themetint:191;mso-style-textfill-fill-color:#404040;  mso-style-textfill-fill-themecolor:text1;mso-style-textfill-fill-alpha:100.0%;  mso-style-textfill-fill-colortransforms:\"lumm=75000 lumo=25000\";background:  yellow\'>使用類別<span lang=EN-US>circle</span>的標頭檔</span></b><b style=\'mso-bidi-font-weight:  normal\'><span lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:maroon\'><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:maroon\'>#include &quot;<span class=SpellE>circle.h</span>&quot;&nbsp;&nbsp;  </span></b><b style=\'mso-bidi-font-weight:normal\'><span lang=EN-US  style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";color:#9BBB59;  mso-themecolor:accent3\'>// Circle class definition</span></b><b  style=\'mso-bidi-font-weight:normal\'><span lang=EN-US style=\'font-size:10.0pt;  font-family:\"微軟正黑體\",\"sans-serif\";color:maroon\'><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:maroon\'><span style=\'mso-spacerun:yes\'>&nbsp;</span><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:#9BBB59;mso-themecolor:accent3\'>// default constructor<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:maroon\'>Circle::Circle( <span class=SpellE>int</span> <span  class=SpellE>xValue</span>, <span class=SpellE>int</span> <span class=SpellE>yValue</span>,  double <span class=SpellE>radiusValue</span> )<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:maroon\'>{ <o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:maroon\'><span style=\'mso-spacerun:yes\'>&nbsp;&nbsp;&nbsp;&nbsp;  </span>x = <span class=SpellE>xValue</span>;<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:maroon\'><span style=\'mso-spacerun:yes\'>&nbsp; </span><span  style=\'mso-spacerun:yes\'>&nbsp;&nbsp;&nbsp;</span>y = <span class=SpellE>yValue</span>;<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:maroon\'><span style=\'mso-spacerun:yes\'>&nbsp;&nbsp;&nbsp;&nbsp; </span><span  class=SpellE>setRadius</span>( <span class=SpellE>radiusValue</span> );<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:maroon\'>} </span></b><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:#9BBB59;mso-themecolor:accent3\'>// end Circle constructor</span></b><b  style=\'mso-bidi-font-weight:normal\'><span lang=EN-US style=\'font-size:10.0pt;  font-family:\"微軟正黑體\",\"sans-serif\";color:maroon\'><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:maroon\'><o:p>&nbsp;</o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:#9BBB59;mso-themecolor:accent3\'>// set radius<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:maroon\'>void Circle::<span class=SpellE>setRadius</span>( double <span  class=SpellE>radiusValue</span> )<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:maroon\'>{<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:maroon\'><span style=\'mso-spacerun:yes\'>&nbsp;&nbsp;&nbsp;&nbsp;  </span>radius = ( <span class=SpellE>radiusValue</span> &lt; 0.0 ? 0.0 : <span  class=SpellE>radiusValue</span> );<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:maroon\'><o:p>&nbsp;</o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:maroon\'>} </span></b><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:#9BBB59;mso-themecolor:accent3\'>// end function <span class=SpellE>setRadius</span></span></b><b  style=\'mso-bidi-font-weight:normal\'><span lang=EN-US style=\'font-size:10.0pt;  font-family:\"微軟正黑體\",\"sans-serif\";color:maroon\'><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:maroon\'><o:p>&nbsp;</o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:#9BBB59;mso-themecolor:accent3\'>// return radius<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:maroon\'>double Circle::<span class=SpellE>getRadius</span>() <span  class=SpellE>const</span><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:maroon\'>{<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:maroon\'><span style=\'mso-spacerun:yes\'>&nbsp;&nbsp;&nbsp;&nbsp;  </span>return radius;<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:maroon\'><o:p>&nbsp;</o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:maroon\'>} </span></b><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:#9BBB59;mso-themecolor:accent3\'>// end function <span class=SpellE>getRadius</span></span></b><b  style=\'mso-bidi-font-weight:normal\'><span lang=EN-US style=\'font-size:10.0pt;  font-family:\"微軟正黑體\",\"sans-serif\";color:maroon\'><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:maroon\'><o:p>&nbsp;</o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:#9BBB59;mso-themecolor:accent3\'>// calculate and return diameter</span></b><b  style=\'mso-bidi-font-weight:normal\'><span lang=EN-US style=\'font-size:10.0pt;  font-family:\"微軟正黑體\",\"sans-serif\";color:maroon\'><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:maroon\'>double Circle::<span class=SpellE>getDiameter</span>() <span  class=SpellE>const</span><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:maroon\'>{<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:maroon\'><span style=\'mso-spacerun:yes\'>&nbsp;&nbsp;&nbsp;&nbsp;  </span>return 2 * radius;<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:maroon\'><o:p>&nbsp;</o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:maroon\'>} </span></b><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:#9BBB59;mso-themecolor:accent3\'>// end function <span class=SpellE>getDiameter</span></span></b><b  style=\'mso-bidi-font-weight:normal\'><span lang=EN-US style=\'font-size:10.0pt;  font-family:\"微軟正黑體\",\"sans-serif\";color:maroon\'><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:maroon\'><o:p>&nbsp;</o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:#9BBB59;mso-themecolor:accent3\'>// calculate and return circumference<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:maroon\'>double Circle::<span class=SpellE>getCircumference</span>() <span  class=SpellE>const</span><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:maroon\'>{<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:maroon\'><span style=\'mso-spacerun:yes\'>&nbsp;&nbsp;&nbsp;&nbsp;  </span>return 3.14159 * <span class=SpellE>getDiameter</span>();<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:maroon\'><o:p>&nbsp;</o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:maroon\'>} </span></b><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:#9BBB59;mso-themecolor:accent3\'>// end function <span class=SpellE>getCircumference</span></span></b><b  style=\'mso-bidi-font-weight:normal\'><span lang=EN-US style=\'font-size:10.0pt;  font-family:\"微軟正黑體\",\"sans-serif\";color:maroon\'><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:maroon\'><o:p>&nbsp;</o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:#9BBB59;mso-themecolor:accent3\'>// calculate and return area<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:maroon\'>double Circle::<span class=SpellE>getArea</span>() <span  class=SpellE>const</span><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:maroon\'>{<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:maroon\'><span style=\'mso-spacerun:yes\'>&nbsp;&nbsp;&nbsp;&nbsp;  </span>return 3.14159 * radius * radius;<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:maroon\'><o:p>&nbsp;</o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:maroon\'>} </span></b><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:#9BBB59;mso-themecolor:accent3\'>// end function <span class=SpellE>getArea</span></span></b><b  style=\'mso-bidi-font-weight:normal\'><span lang=EN-US style=\'font-size:10.0pt;  font-family:\"微軟正黑體\",\"sans-serif\";color:maroon\'><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:maroon\'><o:p>&nbsp;</o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:#9BBB59;mso-themecolor:accent3\'>// output Circle object<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:maroon\'>void Circle::print() <span class=SpellE>const</span><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:maroon\'>{<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:maroon\'><span style=\'mso-spacerun:yes\'>&nbsp;&nbsp;&nbsp;&nbsp; </span><span  class=SpellE>cout</span> &lt;&lt; &quot;Center = [&quot; &lt;&lt; x &lt;&lt;  &quot;, &quot; &lt;&lt; y &lt;&lt; \']\'<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:maroon\'><span  style=\'mso-spacerun:yes\'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  </span>&lt;&lt; &quot;; Radius = &quot; &lt;&lt; radius; <o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:#404040;mso-themecolor:text1;mso-themetint:191;mso-style-textfill-fill-color:  #404040;mso-style-textfill-fill-themecolor:text1;mso-style-textfill-fill-alpha:  100.0%;mso-style-textfill-fill-colortransforms:\"lumm=75000 lumo=25000\"\'><span  style=\'mso-spacerun:yes\'>&nbsp;&nbsp;&nbsp;&nbsp; </span></span></b><b  style=\'mso-bidi-font-weight:normal\'><span lang=EN-US style=\'font-size:10.0pt;  font-family:\"微軟正黑體\",\"sans-serif\";color:#9BBB59;mso-themecolor:accent3\'>//</span></b><b  style=\'mso-bidi-font-weight:normal\'><span style=\'font-size:10.0pt;font-family:  \"微軟正黑體\",\"sans-serif\";color:#404040;mso-themecolor:text1;mso-themetint:191;  mso-style-textfill-fill-color:#404040;mso-style-textfill-fill-themecolor:  text1;mso-style-textfill-fill-alpha:100.0%;mso-style-textfill-fill-colortransforms:  \"lumm=75000 lumo=25000\";background:yellow;mso-highlight:yellow\'>基礎類別中的保留區成員“<span  lang=EN-US>x</span>”、“<span lang=EN-US>y</span>”，可讓衍生類別的成員函數存取。</span></b><b  style=\'mso-bidi-font-weight:normal\'><span lang=EN-US style=\'font-size:10.0pt;  font-family:\"微軟正黑體\",\"sans-serif\";color:#404040;mso-themecolor:text1;  mso-themetint:191;mso-style-textfill-fill-color:#404040;mso-style-textfill-fill-themecolor:  text1;mso-style-textfill-fill-alpha:100.0%;mso-style-textfill-fill-colortransforms:  \"lumm=75000 lumo=25000\"\'><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:#404040;mso-themecolor:text1;mso-themetint:191;mso-style-textfill-fill-color:  #404040;mso-style-textfill-fill-themecolor:text1;mso-style-textfill-fill-alpha:  100.0%;mso-style-textfill-fill-colortransforms:\"lumm=75000 lumo=25000\"\'><span  style=\'mso-spacerun:yes\'>&nbsp;&nbsp;&nbsp;&nbsp; </span></span></b><b  style=\'mso-bidi-font-weight:normal\'><span lang=EN-US style=\'font-size:10.0pt;  font-family:\"微軟正黑體\",\"sans-serif\";color:#9BBB59;mso-themecolor:accent3\'>//</span></b><b  style=\'mso-bidi-font-weight:normal\'><span style=\'font-size:10.0pt;font-family:  \"微軟正黑體\",\"sans-serif\";color:#404040;mso-themecolor:text1;mso-themetint:191;  mso-style-textfill-fill-color:#404040;mso-style-textfill-fill-themecolor:  text1;mso-style-textfill-fill-alpha:100.0%;mso-style-textfill-fill-colortransforms:  \"lumm=75000 lumo=25000\";background:yellow;mso-highlight:yellow\'>若“<span  lang=EN-US>x</span>”、“<span lang=EN-US>y</span>”宣告為私有區成員，衍生類別<span  lang=EN-US>Circle</span>就存取<span class=GramE>不</span>到了。</span></b><b  style=\'mso-bidi-font-weight:normal\'><span lang=EN-US style=\'font-size:10.0pt;  font-family:\"微軟正黑體\",\"sans-serif\";color:#404040;mso-themecolor:text1;  mso-themetint:191;mso-style-textfill-fill-color:#404040;mso-style-textfill-fill-themecolor:  text1;mso-style-textfill-fill-alpha:100.0%;mso-style-textfill-fill-colortransforms:  \"lumm=75000 lumo=25000\";background:yellow\'><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:maroon\'><o:p>&nbsp;</o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:maroon\'>} </span></b><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:#9BBB59;mso-themecolor:accent3\'>// end function print</span></b><b  style=\'mso-bidi-font-weight:normal\'><span lang=EN-US style=\'font-size:10.0pt;  font-family:\"微軟正黑體\",\"sans-serif\";color:maroon\'> <o:p></o:p></span></b></p>  </td> </tr></table></div>';
	
	
		$.post("SQL_next_page.php", {	sql:page },function (msg){ });	
		page++;
		page_flag[58]=1;	
	break;	
	
	case 58:	//目前在 P7  _2 ，下一頁前往 7  _3


	document.getElementById('flashContent').innerHTML='<div class=WordSection1 style=\'layout-grid:18.0pt ; OVERFLOW: scroll;  HEIGHT: 525px; layout-grid:18.0pt\'  class=\"Section1\"><table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0 style=\'border-collapse:collapse;border:none;mso-border-alt:solid windowtext .5pt; mso-yfti-tbllook:1184;mso-padding-alt:0cm 5.4pt 0cm 5.4pt\'> <tr style=\'mso-yfti-irow:0;mso-yfti-firstrow:yes;mso-yfti-lastrow:yes\'>  <td width=54 valign=top style=\'width:40.85pt;border:solid windowtext 1.0pt;  mso-border-alt:solid windowtext .5pt;background:#B8CCE4;mso-background-themecolor:  accent1;mso-background-themetint:102;padding:0cm 5.4pt 0cm 5.4pt\'>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \\"微軟正黑體\",\"sans-serif\"\'>1<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>2<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>3<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>4<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>5<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>6<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>7<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>8<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>9<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>10<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>11<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>12<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>13<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>14<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>15<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>16<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>17<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>18<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>19<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>20<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>21<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>22<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>23<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>24<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>25<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>26<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>27<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>28<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>29<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>30<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>31<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>32<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>33<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>34<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>35<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>36<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>37<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>38<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>39<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>40<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>41<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>42<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>43<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>44<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>45<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>46<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>47<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>48<o:p></o:p></span></b></p>  </td>  <td width=503 valign=top style=\'width:377.25pt;border:solid windowtext 1.0pt;  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt\'>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:#9BBB59;mso-themecolor:accent3\'>// circletest3.cpp<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:#9BBB59;mso-themecolor:accent3\'>// </span></b><b style=\'mso-bidi-font-weight:  normal\'><span style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:#9BBB59;mso-themecolor:accent3\'>類別<span lang=EN-US>Circle</span>的主程式<span  lang=EN-US><o:p></o:p></span></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:maroon\'>#include &lt;<span class=SpellE>iostream</span>&gt;<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:maroon\'>&nbsp;<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:maroon\'>using <span class=SpellE>std</span>::<span class=SpellE>cout</span>;<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:maroon\'>using <span class=SpellE>std</span>::<span class=SpellE>endl</span>;<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:maroon\'>using <span class=SpellE>std</span>::fixed;<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:maroon\'><o:p>&nbsp;</o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:maroon\'>#include &lt;<span class=SpellE>iomanip</span>&gt;<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:maroon\'><o:p>&nbsp;</o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:maroon\'>using <span class=SpellE>std</span>::<span class=SpellE>setprecision</span>;<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:maroon\'><o:p>&nbsp;</o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:maroon\'>#include &quot;<span class=SpellE>circle.h</span>&quot;&nbsp;&nbsp;  </span></b><b style=\'mso-bidi-font-weight:normal\'><span lang=EN-US  style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";color:#9BBB59;  mso-themecolor:accent3\'>// Circle class definition</span></b><b  style=\'mso-bidi-font-weight:normal\'><span lang=EN-US style=\'font-size:10.0pt;  font-family:\"微軟正黑體\",\"sans-serif\";color:maroon\'><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:maroon\'><span style=\'mso-spacerun:yes\'>&nbsp;</span><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><span class=SpellE><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:maroon\'>int</span></b></span><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:maroon\'> main()<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:maroon\'>{<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:maroon\'><span style=\'mso-spacerun:yes\'>&nbsp;&nbsp;&nbsp;&nbsp;  </span>Circle circle( 37, 43, 2.5);<span style=\'mso-spacerun:yes\'>&nbsp;  </span></span></b><b style=\'mso-bidi-font-weight:normal\'><span lang=EN-US  style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";color:#9BBB59;  mso-themecolor:accent3\'>//instantiate Circle object<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:#9BBB59;mso-themecolor:accent3\'><span  style=\'mso-spacerun:yes\'>&nbsp;&nbsp;&nbsp;&nbsp; </span></span></b><b  style=\'mso-bidi-font-weight:normal\'><span lang=EN-US style=\'font-size:10.0pt;  font-family:\"微軟正黑體\",\"sans-serif\";color:#0D0D0D;mso-themecolor:text1;  mso-themetint:242;mso-style-textfill-fill-color:#0D0D0D;mso-style-textfill-fill-themecolor:  text1;mso-style-textfill-fill-alpha:100.0%;mso-style-textfill-fill-colortransforms:  \"lumm=95000 lumo=5000\";background:yellow;mso-highlight:yellow\'>//</span></b><b  style=\'mso-bidi-font-weight:normal\'><span style=\'font-size:10.0pt;font-family:  \"微軟正黑體\",\"sans-serif\";color:#0D0D0D;mso-themecolor:text1;mso-themetint:242;  mso-style-textfill-fill-color:#0D0D0D;mso-style-textfill-fill-themecolor:  text1;mso-style-textfill-fill-alpha:100.0%;mso-style-textfill-fill-colortransforms:  \"lumm=95000 lumo=5000\";background:yellow;mso-highlight:yellow\'>宣告“<span  lang=EN-US>circle</span>”為“<span lang=EN-US>Circle</span>類別”的物件</span></b><b  style=\'mso-bidi-font-weight:normal\'><span lang=EN-US style=\'font-size:10.0pt;  font-family:\"微軟正黑體\",\"sans-serif\";color:#0D0D0D;mso-themecolor:text1;  mso-themetint:242;mso-style-textfill-fill-color:#0D0D0D;mso-style-textfill-fill-themecolor:  text1;mso-style-textfill-fill-alpha:100.0%;mso-style-textfill-fill-colortransforms:  \"lumm=95000 lumo=5000\"\'><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:#9BBB59;mso-themecolor:accent3\'><span  style=\'mso-spacerun:yes\'>&nbsp;&nbsp;&nbsp;&nbsp; </span>//display point  coordinates</span></b><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:maroon\'><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:maroon\'><span style=\'mso-spacerun:yes\'>&nbsp;&nbsp;&nbsp;&nbsp; </span><span  class=SpellE>cout</span> &lt;&lt; &quot;X coordinate is &quot; &lt;&lt; <span  class=SpellE>circle.getX</span>()<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:maroon\'><span  style=\'mso-spacerun:yes\'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  </span>&lt;&lt; &quot;\<span class=SpellE>nY</span> coordinate is &quot;  &lt;&lt; <span class=SpellE>circle.getY</span>()<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:maroon\'><span  style=\'mso-spacerun:yes\'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  </span>&lt;&lt; &quot;\<span class=SpellE>nRadius</span> is &quot; &lt;&lt; <span  class=SpellE>circle.getRadius</span>();<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:maroon\'><o:p>&nbsp;</o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:maroon\'><span style=\'mso-spacerun:yes\'>&nbsp;&nbsp;&nbsp;&nbsp; </span><span  class=SpellE>circle.setX</span>( 2 );<span  style=\'mso-spacerun:yes\'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  </span></span></b><b style=\'mso-bidi-font-weight:normal\'><span lang=EN-US  style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";color:#9BBB59;  mso-themecolor:accent3\'>//set new x-coordinate</span></b><b style=\'mso-bidi-font-weight:  normal\'><span lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:maroon\'><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:maroon\'><span style=\'mso-spacerun:yes\'>&nbsp;&nbsp;&nbsp;&nbsp; </span><span  class=SpellE>circle.setY</span>( 2 );<span  style=\'mso-spacerun:yes\'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  </span></span></b><b style=\'mso-bidi-font-weight:normal\'><span lang=EN-US  style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";color:#9BBB59;  mso-themecolor:accent3\'>//set new y-coordinate</span></b><b style=\'mso-bidi-font-weight:  normal\'><span lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:maroon\'><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:maroon\'><span style=\'mso-spacerun:yes\'>&nbsp;&nbsp;&nbsp;&nbsp; </span><span  class=SpellE>circle.setRadius</span>( 4.25 );<span  style=\'mso-spacerun:yes\'>&nbsp;&nbsp;&nbsp; </span></span></b><b  style=\'mso-bidi-font-weight:normal\'><span lang=EN-US style=\'font-size:10.0pt;  font-family:\"微軟正黑體\",\"sans-serif\";color:#9BBB59;mso-themecolor:accent3\'>//set  new radius</span></b><b style=\'mso-bidi-font-weight:normal\'><span lang=EN-US  style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";color:maroon\'><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:maroon\'><o:p>&nbsp;</o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:maroon\'><span style=\'mso-spacerun:yes\'>&nbsp;&nbsp;&nbsp;&nbsp; </span></span></b><b  style=\'mso-bidi-font-weight:normal\'><span lang=EN-US style=\'font-size:10.0pt;  font-family:\"微軟正黑體\",\"sans-serif\";color:#9BBB59;mso-themecolor:accent3\'>//  display new point value</span></b><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:maroon\'><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:maroon\'><span style=\'mso-spacerun:yes\'>&nbsp;&nbsp;&nbsp;&nbsp; </span><span  class=SpellE>cout</span> &lt;&lt; &quot;\n\<span class=SpellE>nThe</span> new  location and radius of circle are\n&quot;;<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:maroon\'><span style=\'mso-spacerun:yes\'>&nbsp;&nbsp;&nbsp;&nbsp; </span><span  class=SpellE>circle.print</span>( );<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:maroon\'><o:p>&nbsp;</o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:maroon\'><span style=\'mso-spacerun:yes\'>&nbsp;&nbsp;&nbsp;&nbsp; </span></span></b><b  style=\'mso-bidi-font-weight:normal\'><span lang=EN-US style=\'font-size:10.0pt;  font-family:\"微軟正黑體\",\"sans-serif\";color:#9BBB59;mso-themecolor:accent3\'>//  display floating-point values with 2 digits of precision</span></b><b  style=\'mso-bidi-font-weight:normal\'><span lang=EN-US style=\'font-size:10.0pt;  font-family:\"微軟正黑體\",\"sans-serif\";color:maroon\'><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:maroon\'><span style=\'mso-spacerun:yes\'>&nbsp;&nbsp;&nbsp;&nbsp; </span><span  class=SpellE>cout</span> &lt;&lt; fixed &lt;&lt; <span class=SpellE>setprecision</span>(  2 );<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:maroon\'><o:p>&nbsp;</o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:maroon\'><span style=\'mso-spacerun:yes\'>&nbsp;&nbsp;&nbsp;&nbsp; </span></span></b><b  style=\'mso-bidi-font-weight:normal\'><span lang=EN-US style=\'font-size:10.0pt;  font-family:\"微軟正黑體\",\"sans-serif\";color:#9BBB59;mso-themecolor:accent3\'>//display  Circle\'s diameter</span></b><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:maroon\'><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:maroon\'><span style=\'mso-spacerun:yes\'>&nbsp;&nbsp;&nbsp;&nbsp; </span><span  class=SpellE>cout</span> &lt;&lt; &quot;\<span class=SpellE>nDiameter</span>  is &quot; &lt;&lt; <span class=SpellE>circle.getDiameter</span>();<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:#0D0D0D;mso-themecolor:text1;mso-themetint:242;mso-style-textfill-fill-color:  #0D0D0D;mso-style-textfill-fill-themecolor:text1;mso-style-textfill-fill-alpha:  100.0%;mso-style-textfill-fill-colortransforms:\"lumm=95000 lumo=5000\";  background:yellow;mso-highlight:yellow\'>//</span></b><b style=\'mso-bidi-font-weight:  normal\'><span style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:#0D0D0D;mso-themecolor:text1;mso-themetint:242;mso-style-textfill-fill-color:  #0D0D0D;mso-style-textfill-fill-themecolor:text1;mso-style-textfill-fill-alpha:  100.0%;mso-style-textfill-fill-colortransforms:\"lumm=95000 lumo=5000\";  background:yellow;mso-highlight:yellow\'>在<span lang=EN-US>main</span><span  class=GramE>主函式中</span>，若想存取物件中的成員，只有公有區成員可以直接存取<span lang=EN-US><o:p></o:p></span></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:#0D0D0D;mso-themecolor:text1;mso-themetint:242;mso-style-textfill-fill-color:  #0D0D0D;mso-style-textfill-fill-themecolor:text1;mso-style-textfill-fill-alpha:  100.0%;mso-style-textfill-fill-colortransforms:\"lumm=95000 lumo=5000\";  background:yellow;mso-highlight:yellow\'>//</span></b><b style=\'mso-bidi-font-weight:  normal\'><span style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:#0D0D0D;mso-themecolor:text1;mso-themetint:242;mso-style-textfill-fill-color:  #0D0D0D;mso-style-textfill-fill-themecolor:text1;mso-style-textfill-fill-alpha:  100.0%;mso-style-textfill-fill-colortransforms:\"lumm=95000 lumo=5000\";  background:yellow;mso-highlight:yellow\'>而物件的私有區與保留區成員，則必須透過成員函數來做存取<span  lang=EN-US><o:p></o:p></span></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:maroon\'><span style=\'mso-spacerun:yes\'>&nbsp;&nbsp;&nbsp;&nbsp; </span></span></b><b  style=\'mso-bidi-font-weight:normal\'><span lang=EN-US style=\'font-size:10.0pt;  font-family:\"微軟正黑體\",\"sans-serif\";color:#9BBB59;mso-themecolor:accent3\'>//display  Circle\'s circumference</span></b><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:maroon\'><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:maroon\'><span style=\'mso-spacerun:yes\'>&nbsp;&nbsp;&nbsp;&nbsp; </span><span  class=SpellE>cout</span> &lt;&lt; &quot;\<span class=SpellE>nCircumference</span>  is &quot; &lt;&lt; <span class=SpellE>circle.getCircumference</span>( );<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:maroon\'><o:p>&nbsp;</o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:maroon\'><span style=\'mso-spacerun:yes\'>&nbsp;&nbsp;&nbsp;&nbsp; </span></span></b><b  style=\'mso-bidi-font-weight:normal\'><span lang=EN-US style=\'font-size:10.0pt;  font-family:\"微軟正黑體\",\"sans-serif\";color:#9BBB59;mso-themecolor:accent3\'>//display  Circle\'s area</span></b><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:maroon\'><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:maroon\'><span style=\'mso-spacerun:yes\'>&nbsp;&nbsp;&nbsp;&nbsp; </span><span  class=SpellE>cout</span> &lt;&lt; &quot;\<span class=SpellE>nArea</span> is  &quot; &lt;&lt; <span class=SpellE>circle.getArea</span>( );<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:maroon\'><o:p>&nbsp;</o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:maroon\'><span style=\'mso-spacerun:yes\'>&nbsp;&nbsp;&nbsp;&nbsp; </span><span  class=SpellE>cout</span> &lt;&lt; <span class=SpellE>endl</span>;<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:maroon\'><o:p>&nbsp;</o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:maroon\'><span style=\'mso-spacerun:yes\'>&nbsp;&nbsp;&nbsp;&nbsp;  </span>return 0;<span style=\'mso-spacerun:yes\'>&nbsp;&nbsp;&nbsp; </span></span></b><b  style=\'mso-bidi-font-weight:normal\'><span lang=EN-US style=\'font-size:10.0pt;  font-family:\"微軟正黑體\",\"sans-serif\";color:#9BBB59;mso-themecolor:accent3\'>//indicates  successful termination</span></b><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:maroon\'><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:maroon\'>}<span style=\'mso-spacerun:yes\'>&nbsp; </span></span></b><b  style=\'mso-bidi-font-weight:normal\'><span lang=EN-US style=\'font-size:10.0pt;  font-family:\"微軟正黑體\",\"sans-serif\";color:#9BBB59;mso-themecolor:accent3\'>//end  main</span></b><b style=\'mso-bidi-font-weight:normal\'><span lang=EN-US  style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";color:maroon\'><o:p></o:p></span></b></p></td> </tr></table></div>';
		
		
		$.post("SQL_next_page.php", {	sql:page },function (msg){ });	
		page++;
		page_flag[59]=1;	
	break;	
 
  default:
	alert("教材結束，您可以在左方標題，點選單元重新學習；或是利用「上一頁」與「下一頁」按鈕，返回先前的頁面。");
	LeftTitle_change();

 } //end of switch
} // end of function Next_Page()
 
 
 
 function Previous_Page( )
{

 switch(page){

	case 2: //目前在p2頁，上一頁前往p1
		Button_enable();
	
		LeftTitle_change_p1();
	
			//語音撥放器，放空
		document.getElementById('flash_mp3').innerHTML=' ';
		
		 document.getElementById('flashContent').innerHTML='<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="700" height="525" id="p1" align="middle"><para name="movie" value="p1.swf" />				<param name="quality" value="high" />				<param name="bgcolor" value="#ffffff" />				<param name="play" value="true" />				<param name="loop" value="true" />				<param name="wmode" value="window" />				<param name="scale" value="showall" />				<param name="menu" value="true" />				<param name="devicefont" value="false" />				<param name="salign" value="" />				<param name="allowScriptAccess" value="sameDomain" />				<object type="application/x-shockwave-flash" data="p1.swf" width="700" height="525">					<param name="movie" value="p1.swf" />					<param name="quality" value="high" />					<param name="bgcolor" value="#ffffff" />					<param name="play" value="true" />					<param name="loop" value="true" />					<param name="wmode" value="window" />					<param name="scale" value="showall" />					<param name="menu" value="true" />					<param name="devicefont" value="false" />					<param name="salign" value="" />					<param name="allowScriptAccess" value="sameDomain" />									<a href="http://www.adobe.com/go/getflash">						<img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="取得 Adobe Flash 播放程式" />					</a></object></object>';
		
		
		$.post("SQL_pre_page.php", {	sql:page },
					function (msg){
					}
			   );
		page=page-1;
	break;


	case 3:  //目前在p2_1頁，上一頁前往p2
		Button_enable();
		
		document.getElementById('flashContent').innerHTML='<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="700" height="525" id="p2" align="middle"><param name="movie" value="p2.swf" />				<param name="quality" value="high" />				<param name="bgcolor" value="#ffffff" />				<param name="play" value="true" />				<param name="loop" value="true" />				<param name="wmode" value="window" />				<param name="scale" value="showall" />				<param name="menu" value="true" />				<param name="devicefont" value="false" />				<param name="salign" value="" />				<param name="allowScriptAccess" value="sameDomain" />				<object type="application/x-shockwave-flash" data="p2.swf" width="700" height="525">					<param name="movie" value="p2.swf" />					<param name="quality" value="high" />					<param name="bgcolor" value="#ffffff" />					<param name="play" value="true" />					<param name="loop" value="true" />					<param name="wmode" value="window" />					<param name="scale" value="showall" />					<param name="menu" value="true" />					<param name="devicefont" value="false" />					<param name="salign" value="" />					<param name="allowScriptAccess" value="sameDomain" />									<a href="http://www.adobe.com/go/getflash">						<img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="取得 Adobe Flash 播放程式" />					</a></object></object>';
		//語音撥放器
	  	document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P2_0.mp3&javascript=on  &amp;autostart=0" /><param name="wmode" value="transparent" /></object>';
	
		
		$.post("SQL_pre_page.php", {	sql:page },
					function (msg){   }
			   );
		page=page-1;
	break;
	

  	case 4:  //目前在p2_2頁，上一頁前往p2_1
		Button_enable();
		
		document.getElementById('flashContent').innerHTML='<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="700" height="525" id="p2_1" align="middle">	<param name="movie" value="p2_1.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" /><param name="wmode" value="window" /><param name="scale" value="showall" /><param name="menu" value="true" /><param name="devicefont" value="false" /><param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><object type="application/x-shockwave-flash" data="p2_1.swf" width="700" height="525"><param name="movie" value="p2_1.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" />	<param name="wmode" value="window" /><param name="scale" value="showall" />	<param name="menu" value="true" /><param name="devicefont" value="false" />	<param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><a href="http://www.adobe.com/go/getflash"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="取得 Adobe Flash 播放程式" /></a></object></object>';
		//語音撥放器
		document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P2_1.mp3&javascript=on  &amp;autostart=0" /><param name="wmode" value="transparent" /></object>';
	
		
		$.post("SQL_pre_page.php", {	sql:page },
					function (msg){  }
			   );
		page--;
	break;
 
 
  	case 5:  //目前在p2_3頁，上一頁前往p2_2
		Button_enable();
	
	   	document.getElementById('flashContent').innerHTML='<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="700" height="525" id="p2_2" align="middle">	<param name="movie" value="p2_2.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" /><param name="wmode" value="window" /><param name="scale" value="showall" /><param name="menu" value="true" /><param name="devicefont" value="false" /><param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><object type="application/x-shockwave-flash" data="p2_2.swf" width="700" height="525"><param name="movie" value="p2_2.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" />	<param name="wmode" value="window" /><param name="scale" value="showall" />	<param name="menu" value="true" /><param name="devicefont" value="false" />	<param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><a href="http://www.adobe.com/go/getflash"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="取得 Adobe Flash 播放程式" /></a></object></object>';
		//語音撥放器
		document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P2_2.mp3&javascript=on  &amp;autostart=0" /><param name="wmode" value="transparent" /></object>';

		
		
		$.post("SQL_pre_page.php", {	sql:page },
					function (msg){ }
			   );
		page--;
	break;
 
 
 	case 6:  //目前在p2_4頁，上一頁前往p2_3
		Button_enable();
		
	   	document.getElementById('flashContent').innerHTML='<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="700" height="525" id="p2_3" align="middle">	<param name="movie" value="p2_3.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" /><param name="wmode" value="window" /><param name="scale" value="showall" /><param name="menu" value="true" /><param name="devicefont" value="false" /><param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><object type="application/x-shockwave-flash" data="p2_3.swf" width="700" height="525"><param name="movie" value="p2_3.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" />	<param name="wmode" value="window" /><param name="scale" value="showall" />	<param name="menu" value="true" /><param name="devicefont" value="false" />	<param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><a href="http://www.adobe.com/go/getflash"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="取得 Adobe Flash 播放程式" /></a></object></object>';
		//語音撥放器
		document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P2_3.mp3&javascript=on  &amp;autostart=0" /><param name="wmode" value="transparent" /></object>';

		
		
		$.post("SQL_pre_page.php", {	sql:page },
					function (msg){  }
			   );
		page--;
	break;
 

  	case 7:  //目前在p3頁，上一頁前往p2_4
		LeftTitle_change_p2();
		
		Button_enable();
	
		document.getElementById('flashContent').innerHTML='<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="700" height="525" id="p2_4" align="middle">	<param name="movie" value="p2_4.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" /><param name="wmode" value="window" /><param name="scale" value="showall" /><param name="menu" value="true" /><param name="devicefont" value="false" /><param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><object type="application/x-shockwave-flash" data="p2_4.swf" width="700" height="525"><param name="movie" value="p2_4.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" />	<param name="wmode" value="window" /><param name="scale" value="showall" />	<param name="menu" value="true" /><param name="devicefont" value="false" />	<param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><a href="http://www.adobe.com/go/getflash"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="取得 Adobe Flash 播放程式" /></a></object></object>';
		
		//語音撥放器
		document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P2_4.mp3&javascript=on  &amp;autostart=0" /><param name="wmode" value="transparent" /></object>';	//少了P2_4.mp3	....待補
		
		$.post("SQL_pre_page.php", {	sql:page },
					function (msg){  }
			   );
		page--;
	break;
 
   	case 8:  //目前在p3_1頁，上一頁前往p3
		Button_enable();
	
	   	document.getElementById('flashContent').innerHTML='<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="700" height="525" id="p3" align="middle">	<param name="movie" value="p3.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" /><param name="wmode" value="window" /><param name="scale" value="showall" /><param name="menu" value="true" /><param name="devicefont" value="false" /><param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><object type="application/x-shockwave-flash" data="p3.swf" width="700" height="525"><param name="movie" value="p3.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" />	<param name="wmode" value="window" /><param name="scale" value="showall" />	<param name="menu" value="true" /><param name="devicefont" value="false" />	<param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><a href="http://www.adobe.com/go/getflash"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="取得 Adobe Flash 播放程式" /></a></object></object>';
		//語音撥放器
		document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P3_0.mp3&javascript=on  &amp;autostart=0" /><param name="wmode" value="transparent" /></object>';

		
		
		$.post("SQL_pre_page.php", {	sql:page },
					function (msg){  }
			   );
		page--;
	break;
 

   	case 9:  //目前在p3_2頁，上一頁前往p3_1
		Button_enable();
	
	   	document.getElementById('flashContent').innerHTML='<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="700" height="525" id="p3_1" align="middle">	<param name="movie" value="p3_1.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" /><param name="wmode" value="window" /><param name="scale" value="showall" /><param name="menu" value="true" /><param name="devicefont" value="false" /><param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><object type="application/x-shockwave-flash" data="p3_1.swf" width="700" height="525"><param name="movie" value="p3_1.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" />	<param name="wmode" value="window" /><param name="scale" value="showall" />	<param name="menu" value="true" /><param name="devicefont" value="false" />	<param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><a href="http://www.adobe.com/go/getflash"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="取得 Adobe Flash 播放程式" /></a></object></object>';
		//語音撥放器
		document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P3_1.mp3&javascript=on  &amp;autostart=0" /><param name="wmode" value="transparent" /></object>';

		
		$.post("SQL_pre_page.php", {	sql:page },
					function (msg){  }
			   );
		page--;
	break;
 
 
	case 10:  //目前在p3_3頁，上一頁前往p3_2
		Button_enable();
		
	   	document.getElementById('flashContent').innerHTML='<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="700" height="525" id="p3_2" align="middle">	<param name="movie" value="p3_2.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" /><param name="wmode" value="window" /><param name="scale" value="showall" /><param name="menu" value="true" /><param name="devicefont" value="false" /><param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><object type="application/x-shockwave-flash" data="p3_2.swf" width="700" height="525"><param name="movie" value="p3_2.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" />	<param name="wmode" value="window" /><param name="scale" value="showall" />	<param name="menu" value="true" /><param name="devicefont" value="false" />	<param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><a href="http://www.adobe.com/go/getflash"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="取得 Adobe Flash 播放程式" /></a></object></object>';
		//語音撥放器
		document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P3_2.mp3&javascript=on  &amp;autostart=0" /><param name="wmode" value="transparent" /></object>';

		
		
		$.post("SQL_pre_page.php", {	sql:page },
					function (msg){  }
			   );
		page--;
	break;
 
 
 	case 11:  //目前在p3_4頁，上一頁前往p3_3
		Button_enable();
		
	   	document.getElementById('flashContent').innerHTML='<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="700" height="525" id="p3_3" align="middle">	<param name="movie" value="p3_3.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" /><param name="wmode" value="window" /><param name="scale" value="showall" /><param name="menu" value="true" /><param name="devicefont" value="false" /><param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><object type="application/x-shockwave-flash" data="p3_3.swf" width="700" height="525"><param name="movie" value="p3_3.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" />	<param name="wmode" value="window" /><param name="scale" value="showall" />	<param name="menu" value="true" /><param name="devicefont" value="false" />	<param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><a href="http://www.adobe.com/go/getflash"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="取得 Adobe Flash 播放程式" /></a></object></object>';
		//語音撥放器
		document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P3_3.mp3&javascript=on  &amp;autostart=0" /><param name="wmode" value="transparent" /></object>';

		
		$.post("SQL_pre_page.php", {	sql:page },
					function (msg){  }
			   );
		page--;
	break;
 
 
  	case 12:  //目前在p3_5頁，上一頁前往p3_4
		Button_enable();
		
	   	document.getElementById('flashContent').innerHTML='<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="700" height="525" id="p3_4" align="middle">	<param name="movie" value="p3_4.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" /><param name="wmode" value="window" /><param name="scale" value="showall" /><param name="menu" value="true" /><param name="devicefont" value="false" /><param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><object type="application/x-shockwave-flash" data="p3_4.swf" width="700" height="525"><param name="movie" value="p3_4.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" />	<param name="wmode" value="window" /><param name="scale" value="showall" />	<param name="menu" value="true" /><param name="devicefont" value="false" />	<param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><a href="http://www.adobe.com/go/getflash"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="取得 Adobe Flash 播放程式" /></a></object></object>';
		//語音撥放器
		document.getElementById('flash_mp3').innerHTML=' <object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P3_4.mp3&javascript=on  &amp;autostart=0" /><param name="wmode" value="transparent" /></object>';

		
		$.post("SQL_pre_page.php", {	sql:page },
					function (msg){  }
			   );
		page--;
	break;
 
   	case 13:  //目前在p3_6頁，上一頁前往p3_5
		Button_enable();
		
	   	document.getElementById('flashContent').innerHTML='<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="700" height="525" id="p3_5" align="middle">	<param name="movie" value="p3_5.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" /><param name="wmode" value="window" /><param name="scale" value="showall" /><param name="menu" value="true" /><param name="devicefont" value="false" /><param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><object type="application/x-shockwave-flash" data="p3_5.swf" width="700" height="525"><param name="movie" value="p3_5.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" />	<param name="wmode" value="window" /><param name="scale" value="showall" />	<param name="menu" value="true" /><param name="devicefont" value="false" />	<param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><a href="http://www.adobe.com/go/getflash"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="取得 Adobe Flash 播放程式" /></a></object></object>';
		//語音撥放器
		document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P3_5.mp3&javascript=on  &amp;autostart=0" /><param name="wmode" value="transparent" /></object> ';

		
		$.post("SQL_pre_page.php", {	sql:page },
					function (msg){  }
			   );
		page--;
	break;
 
 
    case 14:  //目前在p3_7頁，上一頁前往p3_6
		Button_enable();
		
	   	document.getElementById('flashContent').innerHTML='<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="700" height="525" id="p3_6" align="middle">	<param name="movie" value="p3_6.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" /><param name="wmode" value="window" /><param name="scale" value="showall" /><param name="menu" value="true" /><param name="devicefont" value="false" /><param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><object type="application/x-shockwave-flash" data="p3_6.swf" width="700" height="525"><param name="movie" value="p3_6.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" />	<param name="wmode" value="window" /><param name="scale" value="showall" />	<param name="menu" value="true" /><param name="devicefont" value="false" />	<param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><a href="http://www.adobe.com/go/getflash"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="取得 Adobe Flash 播放程式" /></a></object></object>';
		//語音撥放器
		document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P3_6.mp3&javascript=on  &amp;autostart=0" /><param name="wmode" value="transparent" /></object> ';

		
		$.post("SQL_pre_page.php", {	sql:page },
					function (msg){  }
			   );
		page--;
	break;
 
     case 15:  //目前在p4頁，上一頁前往p3_7
		LeftTitle_change_p3();	 
		
		Button_enable();
		
	   	document.getElementById('flashContent').innerHTML='<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="700" height="525" id="p3_7" align="middle">	<param name="movie" value="p3_7.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" /><param name="wmode" value="window" /><param name="scale" value="showall" /><param name="menu" value="true" /><param name="devicefont" value="false" /><param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><object type="application/x-shockwave-flash" data="p3_7.swf" width="700" height="525"><param name="movie" value="p3_7.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" />	<param name="wmode" value="window" /><param name="scale" value="showall" />	<param name="menu" value="true" /><param name="devicefont" value="false" />	<param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><a href="http://www.adobe.com/go/getflash"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="取得 Adobe Flash 播放程式" /></a></object></object>';
			
		//語音撥放器
		document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P3_7.mp3&javascript=on  &amp;autostart=0" /><param name="wmode" value="transparent" /></object>';

		$.post("SQL_pre_page.php", {	sql:page },
					function (msg){  }
			   );
		page--;
	break;
 
	
	case 16:  //目前在p4_1頁，上一頁前往p4
		Button_enable();
	
	   	document.getElementById('flashContent').innerHTML='<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="700" height="525" id="p4" align="middle">	<param name="movie" value="p4.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" /><param name="wmode" value="window" /><param name="scale" value="showall" /><param name="menu" value="true" /><param name="devicefont" value="false" /><param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><object type="application/x-shockwave-flash" data="p4.swf" width="700" height="525"><param name="movie" value="p4.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" />	<param name="wmode" value="window" /><param name="scale" value="showall" />	<param name="menu" value="true" /><param name="devicefont" value="false" />	<param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><a href="http://www.adobe.com/go/getflash"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="取得 Adobe Flash 播放程式" /></a></object></object>';
		//語音撥放器
		document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P4_0.mp3&javascript=on  &amp;autostart=0" /><param name="wmode" value="transparent" /></object> ';

		
		$.post("SQL_pre_page.php", {	sql:page },
					function (msg){  }
			   );
		page--;		
	break;
 
 	case 17:  //目前在p4_2頁，上一頁前往p4_1
		Button_enable();
	
	   	document.getElementById('flashContent').innerHTML='<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="700" height="525" id="p4_1" align="middle">	<param name="movie" value="p4_1.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" /><param name="wmode" value="window" /><param name="scale" value="showall" /><param name="menu" value="true" /><param name="devicefont" value="false" /><param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><object type="application/x-shockwave-flash" data="p4_1.swf" width="700" height="525"><param name="movie" value="p4_1.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" />	<param name="wmode" value="window" /><param name="scale" value="showall" />	<param name="menu" value="true" /><param name="devicefont" value="false" />	<param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><a href="http://www.adobe.com/go/getflash"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="取得 Adobe Flash 播放程式" /></a></object></object>';
		//語音撥放器
		document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P4_1.mp3&javascript=on  &amp;autostart=0" /><param name="wmode" value="transparent" /></object>';

		
		$.post("SQL_pre_page.php", {	sql:page },
					function (msg){  }
			   );
		page--;		
	break;
	
 	case 18:  //目前在p4_3頁，上一頁前往p4_2
		Button_enable();
	
	   	document.getElementById('flashContent').innerHTML='<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="700" height="525" id="p4_2" align="middle">	<param name="movie" value="p4_2.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" /><param name="wmode" value="window" /><param name="scale" value="showall" /><param name="menu" value="true" /><param name="devicefont" value="false" /><param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><object type="application/x-shockwave-flash" data="p4_2.swf" width="700" height="525"><param name="movie" value="p4_2.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" />	<param name="wmode" value="window" /><param name="scale" value="showall" />	<param name="menu" value="true" /><param name="devicefont" value="false" />	<param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><a href="http://www.adobe.com/go/getflash"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="取得 Adobe Flash 播放程式" /></a></object></object>';
		//語音撥放器
		document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P4_2.mp3&javascript=on  &amp;autostart=0" /><param name="wmode" value="transparent" /></object> ';

		
		$.post("SQL_pre_page.php", {	sql:page },
					function (msg){  }
			   );
		page--;		
	break;	
	
  	case 19:  //目前在p4_4頁，上一頁前往p4_3
		Button_enable();
	
	   	document.getElementById('flashContent').innerHTML='<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="700" height="525" id="p4_3" align="middle">	<param name="movie" value="p4_3.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" /><param name="wmode" value="window" /><param name="scale" value="showall" /><param name="menu" value="true" /><param name="devicefont" value="false" /><param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><object type="application/x-shockwave-flash" data="p4_3.swf" width="700" height="525"><param name="movie" value="p4_3.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" />	<param name="wmode" value="window" /><param name="scale" value="showall" />	<param name="menu" value="true" /><param name="devicefont" value="false" />	<param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><a href="http://www.adobe.com/go/getflash"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="取得 Adobe Flash 播放程式" /></a></object></object>';
		//語音撥放器
		document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P4_3.mp3&javascript=on  &amp;autostart=0" /><param name="wmode" value="transparent" /></object> ';

		
		
		$.post("SQL_pre_page.php", {	sql:page },
					function (msg){  }
			   );
		page--;		
	break;	
 
   	case 20:  //目前在p4_5頁，上一頁前往p4_4
		Button_enable();
	
	   	document.getElementById('flashContent').innerHTML='<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="700" height="525" id="p4_4" align="middle">	<param name="movie" value="p4_4.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" /><param name="wmode" value="window" /><param name="scale" value="showall" /><param name="menu" value="true" /><param name="devicefont" value="false" /><param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><object type="application/x-shockwave-flash" data="p4_4.swf" width="700" height="525"><param name="movie" value="p4_4.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" />	<param name="wmode" value="window" /><param name="scale" value="showall" />	<param name="menu" value="true" /><param name="devicefont" value="false" />	<param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><a href="http://www.adobe.com/go/getflash"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="取得 Adobe Flash 播放程式" /></a></object></object>';
		//語音撥放器
		document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P4_4.mp3&javascript=on  &amp;autostart=0" /><param name="wmode" value="transparent" /></object>';

		
		$.post("SQL_pre_page.php", {	sql:page },
					function (msg){  }
			   );
		page--;		
	break;	
 
    case 21:  //目前在p5頁，上一頁前往p4_5
		LeftTitle_change_p4();
		
		Button_enable();	
		
	   	document.getElementById('flashContent').innerHTML='<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="700" height="525" id="p4_5" align="middle">	<param name="movie" value="p4_5.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" /><param name="wmode" value="window" /><param name="scale" value="showall" /><param name="menu" value="true" /><param name="devicefont" value="false" /><param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><object type="application/x-shockwave-flash" data="p4_5.swf" width="700" height="525"><param name="movie" value="p4_5.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" />	<param name="wmode" value="window" /><param name="scale" value="showall" />	<param name="menu" value="true" /><param name="devicefont" value="false" />	<param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><a href="http://www.adobe.com/go/getflash"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="取得 Adobe Flash 播放程式" /></a></object></object>';
			
	 	//語音撥放器
		document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P4_5.mp3&javascript=on  &amp;autostart=0" /><param name="wmode" value="transparent" /></object>';

		$.post("SQL_pre_page.php", {	sql:page },
					function (msg){  }
			   );
		page--;		
	break;	
 
     case 22:  //目前在p5_1頁，上一頁前往p5
	 	Button_enable();
	 
	   	document.getElementById('flashContent').innerHTML='<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="700" height="525" id="p5" align="middle">	<param name="movie" value="p5.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" /><param name="wmode" value="window" /><param name="scale" value="showall" /><param name="menu" value="true" /><param name="devicefont" value="false" /><param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><object type="application/x-shockwave-flash" data="p5.swf" width="700" height="525"><param name="movie" value="p5.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" />	<param name="wmode" value="window" /><param name="scale" value="showall" />	<param name="menu" value="true" /><param name="devicefont" value="false" />	<param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><a href="http://www.adobe.com/go/getflash"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="取得 Adobe Flash 播放程式" /></a></object></object>';
		//語音撥放器
		document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P5_0.mp3&javascript=on  &amp;autostart=0" /><param name="wmode" value="transparent" /></object>';

		
		$.post("SQL_pre_page.php", {	sql:page },
					function (msg){  }
			   );
		page--;		
	break;	
	
     case 23:  //目前在p5_2頁，上一頁前往p5_1
	 	Button_enable();
		
	   	document.getElementById('flashContent').innerHTML='<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="700" height="525" id="p5_1" align="middle">	<param name="movie" value="p5_1.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" /><param name="wmode" value="window" /><param name="scale" value="showall" /><param name="menu" value="true" /><param name="devicefont" value="false" /><param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><object type="application/x-shockwave-flash" data="p5_1.swf" width="700" height="525"><param name="movie" value="p5_1.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" />	<param name="wmode" value="window" /><param name="scale" value="showall" />	<param name="menu" value="true" /><param name="devicefont" value="false" />	<param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><a href="http://www.adobe.com/go/getflash"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="取得 Adobe Flash 播放程式" /></a></object></object>';
		//語音撥放器
		document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P5_1.mp3&javascript=on  &amp;autostart=0" /><param name="wmode" value="transparent" /></object>';

		
		
		$.post("SQL_pre_page.php", {	sql:page },
					function (msg){  }
			   );
		page--;		
	break;		
	
     case 24:  //目前在p5_3頁，上一頁前往p5_2
	 	Button_enable();
	 
	   	document.getElementById('flashContent').innerHTML='<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="700" height="525" id="p5_2" align="middle">	<param name="movie" value="p5_2.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" /><param name="wmode" value="window" /><param name="scale" value="showall" /><param name="menu" value="true" /><param name="devicefont" value="false" /><param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><object type="application/x-shockwave-flash" data="p5_2.swf" width="700" height="525"><param name="movie" value="p5_2.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" />	<param name="wmode" value="window" /><param name="scale" value="showall" />	<param name="menu" value="true" /><param name="devicefont" value="false" />	<param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><a href="http://www.adobe.com/go/getflash"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="取得 Adobe Flash 播放程式" /></a></object></object>';
		//語音撥放器
		document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P5_2.mp3&javascript=on  &amp;autostart=0" /><param name="wmode" value="transparent" /></object>';

		
		$.post("SQL_pre_page.php", {	sql:page },
					function (msg){  }
			   );
		page--;		
	break;			
	
     case 25:  //目前在p5_4頁，上一頁前往p5_3
	 	Button_enable();
	 
	   	document.getElementById('flashContent').innerHTML='<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="700" height="525" id="p5_3" align="middle">	<param name="movie" value="p5_3.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" /><param name="wmode" value="window" /><param name="scale" value="showall" /><param name="menu" value="true" /><param name="devicefont" value="false" /><param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><object type="application/x-shockwave-flash" data="p5_3.swf" width="700" height="525"><param name="movie" value="p5_3.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" />	<param name="wmode" value="window" /><param name="scale" value="showall" />	<param name="menu" value="true" /><param name="devicefont" value="false" />	<param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><a href="http://www.adobe.com/go/getflash"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="取得 Adobe Flash 播放程式" /></a></object></object>';
		//語音撥放器
		document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P5_3.mp3&javascript=on  &amp;autostart=0" /><param name="wmode" value="transparent" /></object>';

		
		$.post("SQL_pre_page.php", {	sql:page },
					function (msg){  }
			   );
		page--;		
	break;		

     case 26:  //目前在p5_5頁，上一頁前往p5_4
	 	Button_enable();
	 
	   	document.getElementById('flashContent').innerHTML='<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="700" height="525" id="p5_4" align="middle">	<param name="movie" value="p5_4.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" /><param name="wmode" value="window" /><param name="scale" value="showall" /><param name="menu" value="true" /><param name="devicefont" value="false" /><param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><object type="application/x-shockwave-flash" data="p5_4.swf" width="700" height="525"><param name="movie" value="p5_4.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" />	<param name="wmode" value="window" /><param name="scale" value="showall" />	<param name="menu" value="true" /><param name="devicefont" value="false" />	<param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><a href="http://www.adobe.com/go/getflash"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="取得 Adobe Flash 播放程式" /></a></object></object>';
		//語音撥放器
		document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P5_4.mp3&javascript=on  &amp;autostart=0" /><param name="wmode" value="transparent" /></object>';

		
		$.post("SQL_pre_page.php", {	sql:page },
					function (msg){  }
			   );
		page--;		
	break;		
	
     case 27:  //目前在p5_6頁，上一頁前往p5_5
	 	Button_enable();
	 
	   	document.getElementById('flashContent').innerHTML='<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="700" height="525" id="p5_5" align="middle">	<param name="movie" value="p5_5.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" /><param name="wmode" value="window" /><param name="scale" value="showall" /><param name="menu" value="true" /><param name="devicefont" value="false" /><param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><object type="application/x-shockwave-flash" data="p5_5.swf" width="700" height="525"><param name="movie" value="p5_5.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" />	<param name="wmode" value="window" /><param name="scale" value="showall" />	<param name="menu" value="true" /><param name="devicefont" value="false" />	<param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><a href="http://www.adobe.com/go/getflash"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="取得 Adobe Flash 播放程式" /></a></object></object>';
		//語音撥放器
		document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P5_5.mp3&javascript=on  &amp;autostart=0" /><param name="wmode" value="transparent" /></object>';

		

		$.post("SQL_pre_page.php", {	sql:page },
					function (msg){  }
			   );
		page--;		
	break;			
	
     case 28:  //目前在p5_7頁，上一頁前往p5_6
	 	Button_enable();
	 
	   	document.getElementById('flashContent').innerHTML='<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="700" height="525" id="p5_6" align="middle">	<param name="movie" value="p5_6.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" /><param name="wmode" value="window" /><param name="scale" value="showall" /><param name="menu" value="true" /><param name="devicefont" value="false" /><param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><object type="application/x-shockwave-flash" data="p5_6.swf" width="700" height="525"><param name="movie" value="p5_6.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" />	<param name="wmode" value="window" /><param name="scale" value="showall" />	<param name="menu" value="true" /><param name="devicefont" value="false" />	<param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><a href="http://www.adobe.com/go/getflash"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="取得 Adobe Flash 播放程式" /></a></object></object>';
		//語音撥放器
	  	document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P5_6.mp3&javascript=on  &amp;autostart=0" /><param name="wmode" value="transparent" /></object>';

		
		$.post("SQL_pre_page.php", {	sql:page },
					function (msg){  }
			   );
		page--;		
	break;	

    case 29:  //目前在p6頁

		Button_enable();
	

		//語音撥放器，放空
		document.getElementById('flash_mp3').innerHTML=' ';
		
		document.getElementById('flashContent').innerHTML='<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="700" height="525" id="p5_7" align="middle"><param name="movie" value="p5_7.swf" /><param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" /><param name="loop" value="true" /><param name="wmode" value="window" /><param name="scale" value="showall" /><param name="menu" value="true" /><param name="devicefont" value="false" /><param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><object type="application/x-shockwave-flash" data="p5_7.swf" width="700" height="525"><param id="swff2" name="movie" value="p5_7.swf" /><param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" /><param name="loop" value="true" /><param name="wmode" value="window" /><param name="scale" value="showall" /><param name="menu" value="true" /><param name="devicefont" value="false" /><param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><a href="http://www.adobe.com/go/getflash"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="取得 Adobe Flash 播放程式" /></a></object></object>';
	
			

	
		
		$.post("SQL_pre_page.php", {	sql:page },
					function (msg){
					}
			   );
		page=page-1;	
	
	
	break;	

//  - - - - - - - - - - - - - - - - - - - 繼承- - - - - - - - - - - - - - - - - - - - - - - - -
	
	case 30: //目前在 P6_1 頁，上一頁前往 P6
		Button_enable();
	

		//語音撥放器，放空
		document.getElementById('flash_mp3').innerHTML=' ';
		
		document.getElementById('flashContent').innerHTML='<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="700" height="525" id="P6" align="middle"><param name="movie" value="P6.swf" /><param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" /><param name="loop" value="true" /><param name="wmode" value="window" /><param name="scale" value="showall" /><param name="menu" value="true" /><param name="devicefont" value="false" /><param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><object type="application/x-shockwave-flash" data="P6.swf" width="700" height="525"><param id="swff2" name="movie" value="P6.swf" /><param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" /><param name="loop" value="true" /><param name="wmode" value="window" /><param name="scale" value="showall" /><param name="menu" value="true" /><param name="devicefont" value="false" /><param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><a href="http://www.adobe.com/go/getflash"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="取得 Adobe Flash 播放程式" /></a></object></object>';
	
			

	
		
		$.post("SQL_pre_page.php", {	sql:page },
					function (msg){
					}
			   );
		page=page-1;
	break;	
	
	case 31: //目前在 P6_2 頁，上一頁前往 P6_1
		Button_enable();
		
		//語音撥放器
	  	document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P6_1.mp3&javascript=on  &amp;autostart=0" /><param name="wmode" value="transparent" /></object>';
		
		//swf
		document.getElementById('flashContent').innerHTML='<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="700" height="525" id="P6_1" align="middle">	<param name="movie" value="P6_1.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" /><param name="wmode" value="window" /><param name="scale" value="showall" /><param name="menu" value="true" /><param name="devicefont" value="false" /><param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><object type="application/x-shockwave-flash" data="P6_1.swf" width="700" height="525"><param name="movie" value="P6_1.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" />	<param name="wmode" value="window" /><param name="scale" value="showall" />	<param name="menu" value="true" /><param name="devicefont" value="false" />	<param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><a href="http://www.adobe.com/go/getflash"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="取得 Adobe Flash 播放程式" /></a></object></object>';
		
		
		$.post("SQL_pre_page.php", {	sql:page },
					function (msg){
					}
			   );
		page=page-1;		
	break;
	
	case 32: //目前在 P6_3 頁，上一頁前往 P6_2
		Button_enable();
		
		//語音撥放器
	  	document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P6_2.mp3&javascript=on  &amp;autostart=0" /><param name="wmode" value="transparent" /></object>';
		
		//swf
	   	document.getElementById('flashContent').innerHTML='<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="700" height="525" id="P6_2" align="middle">	<param name="movie" value="P6_2.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" /><param name="wmode" value="window" /><param name="scale" value="showall" /><param name="menu" value="true" /><param name="devicefont" value="false" /><param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><object type="application/x-shockwave-flash" data="P6_2.swf" width="700" height="525"><param name="movie" value="P6_2.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" />	<param name="wmode" value="window" /><param name="scale" value="showall" />	<param name="menu" value="true" /><param name="devicefont" value="false" />	<param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><a href="http://www.adobe.com/go/getflash"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="取得 Adobe Flash 播放程式" /></a></object></object>';
	
		$.post("SQL_pre_page.php", {	sql:page },
					function (msg){
					}
			   );
		page=page-1;		
	break;	

	case 33: //目前在 P6_4 頁，上一頁前往 P6_3
		Button_enable();
		
		//語音撥放器
	  	document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P6_3.mp3&javascript=on  &amp;autostart=0" /><param name="wmode" value="transparent" /></object>';
		
		//swf
	   	document.getElementById('flashContent').innerHTML='<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="700" height="525" id="P6_3" align="middle">	<param name="movie" value="P6_3.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" /><param name="wmode" value="window" /><param name="scale" value="showall" /><param name="menu" value="true" /><param name="devicefont" value="false" /><param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><object type="application/x-shockwave-flash" data="P6_3.swf" width="700" height="525"><param name="movie" value="P6_3.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" />	<param name="wmode" value="window" /><param name="scale" value="showall" />	<param name="menu" value="true" /><param name="devicefont" value="false" />	<param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><a href="http://www.adobe.com/go/getflash"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="取得 Adobe Flash 播放程式" /></a></object></object>';
	
		
		$.post("SQL_pre_page.php", {	sql:page },
					function (msg){
					}
			   );
		page=page-1;		
	break;	
	
	case 34: //目前在 P6_5 頁，上一頁前往 P6_4
		Button_enable();
		
		//語音撥放器
	  	document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P6_4.mp3&javascript=on  &amp;autostart=0" /><param name="wmode" value="transparent" /></object>';
		
		//swf
	   	document.getElementById('flashContent').innerHTML='<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="700" height="525" id="P6_4" align="middle">	<param name="movie" value="P6_4.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" /><param name="wmode" value="window" /><param name="scale" value="showall" /><param name="menu" value="true" /><param name="devicefont" value="false" /><param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><object type="application/x-shockwave-flash" data="P6_4.swf" width="700" height="525"><param name="movie" value="P6_4.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" />	<param name="wmode" value="window" /><param name="scale" value="showall" />	<param name="menu" value="true" /><param name="devicefont" value="false" />	<param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><a href="http://www.adobe.com/go/getflash"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="取得 Adobe Flash 播放程式" /></a></object></object>';
	
		
		$.post("SQL_pre_page.php", {	sql:page },
					function (msg){
					}
			   );
		page=page-1;		
	break;	

	case 35: //目前在 P6_6 頁，上一頁前往 P6_5
		Button_enable();
		
		//語音撥放器
	  	document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P6_5.mp3&javascript=on  &amp;autostart=0" /><param name="wmode" value="transparent" /></object>';
		
		//swf
	   	document.getElementById('flashContent').innerHTML='<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="700" height="525" id="P6_5" align="middle">	<param name="movie" value="P6_5.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" /><param name="wmode" value="window" /><param name="scale" value="showall" /><param name="menu" value="true" /><param name="devicefont" value="false" /><param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><object type="application/x-shockwave-flash" data="P6_5.swf" width="700" height="525"><param name="movie" value="P6_5.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" />	<param name="wmode" value="window" /><param name="scale" value="showall" />	<param name="menu" value="true" /><param name="devicefont" value="false" />	<param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><a href="http://www.adobe.com/go/getflash"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="取得 Adobe Flash 播放程式" /></a></object></object>';
	
		
		$.post("SQL_pre_page.php", {	sql:page },
					function (msg){
					}
			   );
		page=page-1;		
	break;	

	case 36: //目前在 P6_7 頁，上一頁前往 P6_6
		Button_enable();
		
		//語音撥放器
	  	document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P6_6.mp3&javascript=on  &amp;autostart=0" /><param name="wmode" value="transparent" /></object>';
		
		//swf
	   	document.getElementById('flashContent').innerHTML='<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="700" height="525" id="P6_6" align="middle">	<param name="movie" value="P6_6.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" /><param name="wmode" value="window" /><param name="scale" value="showall" /><param name="menu" value="true" /><param name="devicefont" value="false" /><param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><object type="application/x-shockwave-flash" data="P6_6.swf" width="700" height="525"><param name="movie" value="P6_6.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" />	<param name="wmode" value="window" /><param name="scale" value="showall" />	<param name="menu" value="true" /><param name="devicefont" value="false" />	<param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><a href="http://www.adobe.com/go/getflash"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="取得 Adobe Flash 播放程式" /></a></object></object>';
	
		
		$.post("SQL_pre_page.php", {	sql:page },
					function (msg){
					}
			   );
		page=page-1;		
	break;	

	case 37: //目前在 P6_8 頁，上一頁前往 P6_7
		Button_enable();
		
		//語音撥放器
	  	document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P6_7.mp3&javascript=on  &amp;autostart=0" /><param name="wmode" value="transparent" /></object>';
		
		//swf
	   	document.getElementById('flashContent').innerHTML='<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="700" height="525" id="P6_7" align="middle">	<param name="movie" value="P6_7.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" /><param name="wmode" value="window" /><param name="scale" value="showall" /><param name="menu" value="true" /><param name="devicefont" value="false" /><param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><object type="application/x-shockwave-flash" data="P6_7.swf" width="700" height="525"><param name="movie" value="P6_7.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" />	<param name="wmode" value="window" /><param name="scale" value="showall" />	<param name="menu" value="true" /><param name="devicefont" value="false" />	<param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><a href="http://www.adobe.com/go/getflash"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="取得 Adobe Flash 播放程式" /></a></object></object>';
	
		
		$.post("SQL_pre_page.php", {	sql:page },
					function (msg){
					}
			   );
		page=page-1;		
	break;	

	case 38: //目前在 P6_9 頁，上一頁前往 P6_8
		Button_enable();
		
		//語音撥放器
	  	document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P6_8.mp3&javascript=on  &amp;autostart=0" /><param name="wmode" value="transparent" /></object>';
		
		//swf
	   	document.getElementById('flashContent').innerHTML='<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="700" height="525" id="P6_8" align="middle">	<param name="movie" value="P6_8.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" /><param name="wmode" value="window" /><param name="scale" value="showall" /><param name="menu" value="true" /><param name="devicefont" value="false" /><param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><object type="application/x-shockwave-flash" data="P6_8.swf" width="700" height="525"><param name="movie" value="P6_8.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" />	<param name="wmode" value="window" /><param name="scale" value="showall" />	<param name="menu" value="true" /><param name="devicefont" value="false" />	<param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><a href="http://www.adobe.com/go/getflash"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="取得 Adobe Flash 播放程式" /></a></object></object>';

		
		$.post("SQL_pre_page.php", {	sql:page },
					function (msg){
					}
			   );
		page=page-1;		
	break;	

	case 39: //目前在 P6_10 頁，上一頁前往 P6_9
		Button_enable();
		
		//語音撥放器
	  	document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P6_9.mp3&javascript=on  &amp;autostart=0" /><param name="wmode" value="transparent" /></object>';
		
		//swf
	   	document.getElementById('flashContent').innerHTML='<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="700" height="525" id="P6_9" align="middle">	<param name="movie" value="P6_9.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" /><param name="wmode" value="window" /><param name="scale" value="showall" /><param name="menu" value="true" /><param name="devicefont" value="false" /><param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><object type="application/x-shockwave-flash" data="P6_9.swf" width="700" height="525"><param name="movie" value="P6_9.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" />	<param name="wmode" value="window" /><param name="scale" value="showall" />	<param name="menu" value="true" /><param name="devicefont" value="false" />	<param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><a href="http://www.adobe.com/go/getflash"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="取得 Adobe Flash 播放程式" /></a></object></object>';

		
		$.post("SQL_pre_page.php", {	sql:page },
					function (msg){
					}
			   );
		page=page-1;		
	break;	

	case 40: //目前在 P6_11 頁，上一頁前往 P6_10
		Button_enable();
		
		//語音撥放器
	  	document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P6_10.mp3&javascript=on  &amp;autostart=0" /><param name="wmode" value="transparent" /></object>';
		
		//swf
		document.getElementById('flashContent').innerHTML='<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="700" height="525" id="P6_10" align="middle">	<param name="movie" value="P6_10.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" /><param name="wmode" value="window" /><param name="scale" value="showall" /><param name="menu" value="true" /><param name="devicefont" value="false" /><param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><object type="application/x-shockwave-flash" data="P6_10.swf" width="700" height="525"><param name="movie" value="P6_10.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" />	<param name="wmode" value="window" /><param name="scale" value="showall" />	<param name="menu" value="true" /><param name="devicefont" value="false" />	<param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><a href="http://www.adobe.com/go/getflash"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="取得 Adobe Flash 播放程式" /></a></object></object>';

		
		$.post("SQL_pre_page.php", {	sql:page },
					function (msg){
					}
			   );
		page=page-1;		
	break;	

	case 41: //目前在 P6_12 頁，上一頁前往 P6_11
		Button_enable();
		
		//語音撥放器
	  	document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P6_11.mp3&javascript=on  &amp;autostart=0" /><param name="wmode" value="transparent" /></object>';
		
		//swf
	   	document.getElementById('flashContent').innerHTML='<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="700" height="525" id="P6_11" align="middle">	<param name="movie" value="P6_11.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" /><param name="wmode" value="window" /><param name="scale" value="showall" /><param name="menu" value="true" /><param name="devicefont" value="false" /><param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><object type="application/x-shockwave-flash" data="P6_11.swf" width="700" height="525"><param name="movie" value="P6_11.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" />	<param name="wmode" value="window" /><param name="scale" value="showall" />	<param name="menu" value="true" /><param name="devicefont" value="false" />	<param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><a href="http://www.adobe.com/go/getflash"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="取得 Adobe Flash 播放程式" /></a></object></object>';

		
		$.post("SQL_pre_page.php", {	sql:page },
					function (msg){
					}
			   );
		page=page-1;		
	break;	

	case 42: //目前在 P6_13 頁，上一頁前往 P6_12
		Button_enable();
		
		//語音撥放器
	  	document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P6_12.mp3&javascript=on  &amp;autostart=0" /><param name="wmode" value="transparent" /></object>';
		
		//swf
	   	document.getElementById('flashContent').innerHTML='<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="700" height="525" id="P6_12" align="middle">	<param name="movie" value="P6_12.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" /><param name="wmode" value="window" /><param name="scale" value="showall" /><param name="menu" value="true" /><param name="devicefont" value="false" /><param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><object type="application/x-shockwave-flash" data="P6_12.swf" width="700" height="525"><param name="movie" value="P6_12.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" />	<param name="wmode" value="window" /><param name="scale" value="showall" />	<param name="menu" value="true" /><param name="devicefont" value="false" />	<param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><a href="http://www.adobe.com/go/getflash"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="取得 Adobe Flash 播放程式" /></a></object></object>';

		
		$.post("SQL_pre_page.php", {	sql:page },
					function (msg){
					}
			   );
		page=page-1;		
	break;	

	case 43: //目前在 P6_14 頁，上一頁前往 P6_13
		Button_enable();
		
		//語音撥放器
	  	document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P6_13.mp3&javascript=on  &amp;autostart=0" /><param name="wmode" value="transparent" /></object>';
		
		//swf
	   	document.getElementById('flashContent').innerHTML='<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="700" height="525" id="P6_13" align="middle">	<param name="movie" value="P6_13.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" /><param name="wmode" value="window" /><param name="scale" value="showall" /><param name="menu" value="true" /><param name="devicefont" value="false" /><param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><object type="application/x-shockwave-flash" data="P6_13.swf" width="700" height="525"><param name="movie" value="P6_13.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" />	<param name="wmode" value="window" /><param name="scale" value="showall" />	<param name="menu" value="true" /><param name="devicefont" value="false" />	<param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><a href="http://www.adobe.com/go/getflash"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="取得 Adobe Flash 播放程式" /></a></object></object>';
		
		$.post("SQL_pre_page.php", {	sql:page },
					function (msg){
					}
			   );
		page=page-1;		
	break;	

	case 44: //目前在 P6_15 頁，上一頁前往 P6_14
		Button_enable();
		
		//語音撥放器
	  	document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P6_14.mp3&javascript=on  &amp;autostart=0" /><param name="wmode" value="transparent" /></object>';
		
		//swf
	 	document.getElementById('flashContent').innerHTML='<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="700" height="525" id="P6_14" align="middle">	<param name="movie" value="P6_14.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" /><param name="wmode" value="window" /><param name="scale" value="showall" /><param name="menu" value="true" /><param name="devicefont" value="false" /><param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><object type="application/x-shockwave-flash" data="P6_14.swf" width="700" height="525"><param name="movie" value="P6_14.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" />	<param name="wmode" value="window" /><param name="scale" value="showall" />	<param name="menu" value="true" /><param name="devicefont" value="false" />	<param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><a href="http://www.adobe.com/go/getflash"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="取得 Adobe Flash 播放程式" /></a></object></object>';

		
		$.post("SQL_pre_page.php", {	sql:page },
					function (msg){
					}
			   );
		page=page-1;		
	break;	

	case 45: //目前在 P6_16 頁，上一頁前往 P6_15
		Button_enable();
		
		//語音撥放器
	  	document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P6_15.mp3&javascript=on  &amp;autostart=0" /><param name="wmode" value="transparent" /></object>';
		
		//swf
	   	document.getElementById('flashContent').innerHTML='<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="700" height="525" id="P6_15" align="middle">	<param name="movie" value="P6_15.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" /><param name="wmode" value="window" /><param name="scale" value="showall" /><param name="menu" value="true" /><param name="devicefont" value="false" /><param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><object type="application/x-shockwave-flash" data="P6_15.swf" width="700" height="525"><param name="movie" value="P6_15.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" />	<param name="wmode" value="window" /><param name="scale" value="showall" />	<param name="menu" value="true" /><param name="devicefont" value="false" />	<param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><a href="http://www.adobe.com/go/getflash"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="取得 Adobe Flash 播放程式" /></a></object></object>';

		
		$.post("SQL_pre_page.php", {	sql:page },
					function (msg){
					}
			   );
		page=page-1;		
	break;	

	case 46: //目前在 P6_17  頁，上一頁前往 P6_16
		Button_enable();
		
		//語音撥放器
	  	document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P6_16.mp3&javascript=on  &amp;autostart=0" /><param name="wmode" value="transparent" /></object>';
		
		//swf
	  	document.getElementById('flashContent').innerHTML='<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="700" height="525" id="P6_16" align="middle">	<param name="movie" value="P6_16.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" /><param name="wmode" value="window" /><param name="scale" value="showall" /><param name="menu" value="true" /><param name="devicefont" value="false" /><param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><object type="application/x-shockwave-flash" data="P6_16.swf" width="700" height="525"><param name="movie" value="P6_16.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" />	<param name="wmode" value="window" /><param name="scale" value="showall" />	<param name="menu" value="true" /><param name="devicefont" value="false" />	<param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><a href="http://www.adobe.com/go/getflash"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="取得 Adobe Flash 播放程式" /></a></object></object>';

		
		$.post("SQL_pre_page.php", {	sql:page },
					function (msg){
					}
			   );
		page=page-1;		
	break;	

	case 47: //目前在 P6_18 頁，上一頁前往 P6_17
		Button_enable();
		
		//語音撥放器
	  	document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P6_17.mp3&javascript=on  &amp;autostart=0" /><param name="wmode" value="transparent" /></object>';
		
		//swf
	 	document.getElementById('flashContent').innerHTML='<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="700" height="525" id="P6_17" align="middle">	<param name="movie" value="P6_17.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" /><param name="wmode" value="window" /><param name="scale" value="showall" /><param name="menu" value="true" /><param name="devicefont" value="false" /><param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><object type="application/x-shockwave-flash" data="P6_17.swf" width="700" height="525"><param name="movie" value="P6_17.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" />	<param name="wmode" value="window" /><param name="scale" value="showall" />	<param name="menu" value="true" /><param name="devicefont" value="false" />	<param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><a href="http://www.adobe.com/go/getflash"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="取得 Adobe Flash 播放程式" /></a></object></object>';

		
		$.post("SQL_pre_page.php", {	sql:page },
					function (msg){
					}
			   );
		page=page-1;		
	break;	

	case 48: //目前在 P6_19 頁，上一頁前往 P6_18
		Button_enable();
		
		//語音撥放器
	  	document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P6_18.mp3&javascript=on  &amp;autostart=0" /><param name="wmode" value="transparent" /></object>';
		
		//swf
		document.getElementById('flashContent').innerHTML='<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="700" height="525" id="P6_18" align="middle">	<param name="movie" value="P6_18.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" /><param name="wmode" value="window" /><param name="scale" value="showall" /><param name="menu" value="true" /><param name="devicefont" value="false" /><param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><object type="application/x-shockwave-flash" data="P6_18.swf" width="700" height="525"><param name="movie" value="P6_18.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" />	<param name="wmode" value="window" /><param name="scale" value="showall" />	<param name="menu" value="true" /><param name="devicefont" value="false" />	<param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><a href="http://www.adobe.com/go/getflash"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="取得 Adobe Flash 播放程式" /></a></object></object>';
	
		
		$.post("SQL_pre_page.php", {	sql:page },
					function (msg){
					}
			   );
		page=page-1;		
	break;	

	case 49: //目前在 P6_20 頁，上一頁前往 P6_19
		Button_enable();
		
		//語音撥放器
	  	document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P6_19.mp3&javascript=on  &amp;autostart=0" /><param name="wmode" value="transparent" /></object>';
		
		//swf
		document.getElementById('flashContent').innerHTML='<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="700" height="525" id="P6_19" align="middle">	<param name="movie" value="P6_19.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" /><param name="wmode" value="window" /><param name="scale" value="showall" /><param name="menu" value="true" /><param name="devicefont" value="false" /><param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><object type="application/x-shockwave-flash" data="P6_19.swf" width="700" height="525"><param name="movie" value="P6_19.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" />	<param name="wmode" value="window" /><param name="scale" value="showall" />	<param name="menu" value="true" /><param name="devicefont" value="false" />	<param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><a href="http://www.adobe.com/go/getflash"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="取得 Adobe Flash 播放程式" /></a></object></object>';

		
		$.post("SQL_pre_page.php", {	sql:page },
					function (msg){
					}
			   );
		page=page-1;		
	break;	

	case 50: //目前在 P6_21 頁，上一頁前往 P6_20
		Button_enable();
		
		//語音撥放器
	  	document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P6_20.mp3&javascript=on  &amp;autostart=0" /><param name="wmode" value="transparent" /></object>';
		
		//swf
		document.getElementById('flashContent').innerHTML='<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="700" height="525" id="P6_20" align="middle">	<param name="movie" value="P6_20.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" /><param name="wmode" value="window" /><param name="scale" value="showall" /><param name="menu" value="true" /><param name="devicefont" value="false" /><param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><object type="application/x-shockwave-flash" data="P6_20.swf" width="700" height="525"><param name="movie" value="P6_20.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" />	<param name="wmode" value="window" /><param name="scale" value="showall" />	<param name="menu" value="true" /><param name="devicefont" value="false" />	<param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><a href="http://www.adobe.com/go/getflash"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="取得 Adobe Flash 播放程式" /></a></object></object>';

		
		$.post("SQL_pre_page.php", {	sql:page },
					function (msg){
					}
			   );
		page=page-1;		
	break;	

	case 51: //目前在 P6_22 頁，上一頁前往 P6_21
		Button_enable();
		
		//語音撥放器
	  	document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P6_21.mp3&javascript=on  &amp;autostart=0" /><param name="wmode" value="transparent" /></object>';
		
		//swf
		document.getElementById('flashContent').innerHTML='<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="700" height="525" id="P6_21" align="middle">	<param name="movie" value="P6_21.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" /><param name="wmode" value="window" /><param name="scale" value="showall" /><param name="menu" value="true" /><param name="devicefont" value="false" /><param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><object type="application/x-shockwave-flash" data="P6_21.swf" width="700" height="525"><param name="movie" value="P6_21.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" />	<param name="wmode" value="window" /><param name="scale" value="showall" />	<param name="menu" value="true" /><param name="devicefont" value="false" />	<param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><a href="http://www.adobe.com/go/getflash"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="取得 Adobe Flash 播放程式" /></a></object></object>';

		
		$.post("SQL_pre_page.php", {	sql:page },
					function (msg){
					}
			   );
		page=page-1;		
	break;	

	case 52: //目前在 P6_23 頁，上一頁前往 P6_22
		Button_enable();
		
		//語音撥放器
	  	document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P6_22.mp3&javascript=on  &amp;autostart=0" /><param name="wmode" value="transparent" /></object>';
		
		//swf
		document.getElementById('flashContent').innerHTML='<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="700" height="525" id="P6_22" align="middle">	<param name="movie" value="P6_22.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" /><param name="wmode" value="window" /><param name="scale" value="showall" /><param name="menu" value="true" /><param name="devicefont" value="false" /><param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><object type="application/x-shockwave-flash" data="P6_22.swf" width="700" height="525"><param name="movie" value="P6_22.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" />	<param name="wmode" value="window" /><param name="scale" value="showall" />	<param name="menu" value="true" /><param name="devicefont" value="false" />	<param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><a href="http://www.adobe.com/go/getflash"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="取得 Adobe Flash 播放程式" /></a></object></object>';

		
		$.post("SQL_pre_page.php", {	sql:page },
					function (msg){
					}
			   );
		page=page-1;		
	break;	

	case 53: //目前在 P6_24 頁，上一頁前往 P6_23
		Button_enable();
		
		//語音撥放器
	  	document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P6_23.mp3&javascript=on  &amp;autostart=0" /><param name="wmode" value="transparent" /></object>';
		
		//swf
		document.getElementById('flashContent').innerHTML='<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="700" height="525" id="P6_23" align="middle">	<param name="movie" value="P6_23.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" /><param name="wmode" value="window" /><param name="scale" value="showall" /><param name="menu" value="true" /><param name="devicefont" value="false" /><param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><object type="application/x-shockwave-flash" data="P6_23.swf" width="700" height="525"><param name="movie" value="P6_23.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" />	<param name="wmode" value="window" /><param name="scale" value="showall" />	<param name="menu" value="true" /><param name="devicefont" value="false" />	<param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><a href="http://www.adobe.com/go/getflash"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="取得 Adobe Flash 播放程式" /></a></object></object>';

		
		$.post("SQL_pre_page.php", {	sql:page },
					function (msg){
					}
			   );
		page=page-1;		
	break;		

	case 54: //目前在 P6_25 頁，上一頁前往 P6_24
		Button_enable();
		
		//語音撥放器
	  	document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P6_24.mp3&javascript=on  &amp;autostart=0" /><param name="wmode" value="transparent" /></object>';
		
		//swf
		document.getElementById('flashContent').innerHTML='<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="700" height="525" id="P6_24" align="middle">	<param name="movie" value="P6_24.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" /><param name="wmode" value="window" /><param name="scale" value="showall" /><param name="menu" value="true" /><param name="devicefont" value="false" /><param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><object type="application/x-shockwave-flash" data="P6_24.swf" width="700" height="525"><param name="movie" value="P6_24.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" />	<param name="wmode" value="window" /><param name="scale" value="showall" />	<param name="menu" value="true" /><param name="devicefont" value="false" />	<param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><a href="http://www.adobe.com/go/getflash"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="取得 Adobe Flash 播放程式" /></a></object></object>';

		
		$.post("SQL_pre_page.php", {	sql:page },
					function (msg){
					}
			   );
		page=page-1;		
	break;		

	case 55: //目前在 P6_26 頁，上一頁前往 P6_25
		Button_enable();
		
		//語音撥放器
	  	document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P6_25.mp3&javascript=on  &amp;autostart=0" /><param name="wmode" value="transparent" /></object>';
		
		//swf
		document.getElementById('flashContent').innerHTML='<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="700" height="525" id="P6_25" align="middle">	<param name="movie" value="P6_25.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" /><param name="wmode" value="window" /><param name="scale" value="showall" /><param name="menu" value="true" /><param name="devicefont" value="false" /><param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><object type="application/x-shockwave-flash" data="P6_25.swf" width="700" height="525"><param name="movie" value="P6_25.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" />	<param name="wmode" value="window" /><param name="scale" value="showall" />	<param name="menu" value="true" /><param name="devicefont" value="false" />	<param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><a href="http://www.adobe.com/go/getflash"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="取得 Adobe Flash 播放程式" /></a></object></object>';

		
		$.post("SQL_pre_page.php", {	sql:page },
					function (msg){
					}
			   );
		page=page-1;		
	break;	
	
	case 56: //目前在 P6_27 頁，上一頁前往 P6_26
		Button_enable();
		
		//語音撥放器
	  	document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P6_26.mp3&javascript=on  &amp;autostart=0" /><param name="wmode" value="transparent" /></object>';
		
		//swf
		document.getElementById('flashContent').innerHTML='<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="700" height="525" id="P6_26" align="middle">	<param name="movie" value="P6_26.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" /><param name="wmode" value="window" /><param name="scale" value="showall" /><param name="menu" value="true" /><param name="devicefont" value="false" /><param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><object type="application/x-shockwave-flash" data="P6_26.swf" width="700" height="525"><param name="movie" value="P6_26.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" />	<param name="wmode" value="window" /><param name="scale" value="showall" />	<param name="menu" value="true" /><param name="devicefont" value="false" />	<param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><a href="http://www.adobe.com/go/getflash"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="取得 Adobe Flash 播放程式" /></a></object></object>';

		
		$.post("SQL_pre_page.php", {	sql:page },
					function (msg){
					}
			   );
		page=page-1;		
	break;		
	
	case 57: //目前在 P7 頁，上一頁前往 P6_27
		Button_enable();
		
		//語音撥放器
	  	document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P6_27.mp3&javascript=on  &amp;autostart=0" /><param name="wmode" value="transparent" /></object>';
	
		LeftTitle_change_p6();
	
		//swf
		document.getElementById('flashContent').innerHTML='<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="700" height="525" id="P6_27" align="middle">	<param name="movie" value="P6_27.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" /><param name="wmode" value="window" /><param name="scale" value="showall" /><param name="menu" value="true" /><param name="devicefont" value="false" /><param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><object type="application/x-shockwave-flash" data="P6_27.swf" width="700" height="525"><param name="movie" value="P6_27.swf" />	<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="play" value="true" />	<param name="loop" value="true" />	<param name="wmode" value="window" /><param name="scale" value="showall" />	<param name="menu" value="true" /><param name="devicefont" value="false" />	<param name="salign" value="" /><param name="allowScriptAccess" value="sameDomain" /><a href="http://www.adobe.com/go/getflash"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="取得 Adobe Flash 播放程式" /></a></object></object>';

	
		
		$.post("SQL_pre_page.php", {	sql:page },
					function (msg){
					}
			   );
		page=page-1;		
	break;		
	
	case 58:  //目前在 P7  _2 頁，上一頁前往 P7 _1
		Button_enable();
		
		//swf
	   	document.getElementById('flashContent').innerHTML="<div class=WordSection1 style=\'layout-grid:18.0pt ; OVERFLOW: scroll;  HEIGHT: 525px; layout-grid:18.0pt\'  class=\"Section1\"><table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0 style=\'border-collapse:collapse;border:none;mso-border-alt:solid windowtext .5pt; mso-yfti-tbllook:1184;mso-padding-alt:0cm 5.4pt 0cm 5.4pt\'> <tr style=\'mso-yfti-irow:0;mso-yfti-firstrow:yes;mso-yfti-lastrow:yes\'><td width=54 valign=top style=\'width:40.85pt;border:solid windowtext 1.0pt;  mso-border-alt:solid windowtext .5pt;background:#B8CCE4;mso-background-themecolor:  accent1;mso-background-themetint:102;padding:0cm 5.4pt 0cm 5.4pt\'>  <p class=MsoNormal><b style=\'mso-bidi-font-weight:normal\'><span lang=EN-US  style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";mso-bidi-font-family:  \"Courier New\"\'>1<o:p></o:p></span></b></p>  <p class=MsoNormal><b style=\'mso-bidi-font-weight:normal\'><span lang=EN-US  style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";mso-bidi-font-family:  \"Courier New\"\'>2<o:p></o:p></span></b></p>  <p class=MsoNormal><b style=\'mso-bidi-font-weight:normal\'><span lang=EN-US  style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";mso-bidi-font-family:  \"Courier New\"\'>3<o:p></o:p></span></b></p>  <p class=MsoNormal><b style=\'mso-bidi-font-weight:normal\'><span lang=EN-US  style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";mso-bidi-font-family:  \"Courier New\"\'>4<o:p></o:p></span></b></p>  <p class=MsoNormal><b style=\'mso-bidi-font-weight:normal\'><span lang=EN-US  style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";mso-bidi-font-family:  \"Courier New\"\'>5<o:p></o:p></span></b></p>  <p class=MsoNormal><b style=\'mso-bidi-font-weight:normal\'><span lang=EN-US  style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";mso-bidi-font-family:  \"Courier New\"\'>6<o:p></o:p></span></b></p>  <p class=MsoNormal><b style=\'mso-bidi-font-weight:normal\'><span lang=EN-US  style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";mso-bidi-font-family:  \"Courier New\"\'>7<o:p></o:p></span></b></p>  <p class=MsoNormal><b style=\'mso-bidi-font-weight:normal\'><span lang=EN-US  style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";mso-bidi-font-family:  \"Courier New\"\'>8<o:p></o:p></span></b></p>  <p class=MsoNormal><b style=\'mso-bidi-font-weight:normal\'><span lang=EN-US  style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";mso-bidi-font-family:  \"Courier New\"\'>9<o:p></o:p></span></b></p>  <p class=MsoNormal><b style=\'mso-bidi-font-weight:normal\'><span lang=EN-US  style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";mso-bidi-font-family:  \"Courier New\"\'>10<o:p></o:p></span></b></p>  <p class=MsoNormal><b style=\'mso-bidi-font-weight:normal\'><span lang=EN-US  style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";mso-bidi-font-family:  \"Courier New\"\'>11<o:p></o:p></span></b></p>  <p class=MsoNormal><b style=\'mso-bidi-font-weight:normal\'><span lang=EN-US  style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";mso-bidi-font-family:  \"Courier New\"\'>12<o:p></o:p></span></b></p>  <p class=MsoNormal><b style=\'mso-bidi-font-weight:normal\'><span lang=EN-US  style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";mso-bidi-font-family:  \"Courier New\"\'>13<o:p></o:p></span></b></p>  <p class=MsoNormal><b style=\'mso-bidi-font-weight:normal\'><span lang=EN-US  style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";mso-bidi-font-family:  \"Courier New\"\'>14<o:p></o:p></span></b></p>  <p class=MsoNormal><b style=\'mso-bidi-font-weight:normal\'><span lang=EN-US  style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";mso-bidi-font-family:  \"Courier New\"\'>15<o:p></o:p></span></b></p>  <p class=MsoNormal><b style=\'mso-bidi-font-weight:normal\'><span lang=EN-US  style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";mso-bidi-font-family:  \"Courier New\"\'>16<o:p></o:p></span></b></p>  <p class=MsoNormal><b style=\'mso-bidi-font-weight:normal\'><span lang=EN-US  style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";mso-bidi-font-family:  \"Courier New\"\'>17<o:p></o:p></span></b></p>  <p class=MsoNormal><b style=\'mso-bidi-font-weight:normal\'><span lang=EN-US  style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";mso-bidi-font-family:  \"Courier New\"\'>18<o:p></o:p></span></b></p>  <p class=MsoNormal><b style=\'mso-bidi-font-weight:normal\'><span lang=EN-US  style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";mso-bidi-font-family:  \"Courier New\"\'>19<o:p></o:p></span></b></p>  <p class=MsoNormal><b style=\'mso-bidi-font-weight:normal\'><span lang=EN-US  style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";mso-bidi-font-family:  \"Courier New\"\'>20<o:p></o:p></span></b></p>  <p class=MsoNormal><b style=\'mso-bidi-font-weight:normal\'><span lang=EN-US  style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";mso-bidi-font-family:  \"Courier New\"\'>21<o:p></o:p></span></b></p>  <p class=MsoNormal><b style=\'mso-bidi-font-weight:normal\'><span lang=EN-US  style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";mso-bidi-font-family:  \"Courier New\"\'>22<o:p></o:p></span></b></p>  <p class=MsoNormal><b style=\'mso-bidi-font-weight:normal\'><span lang=EN-US  style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";mso-bidi-font-family:  \"Courier New\"\'>23<o:p></o:p></span></b></p>  <p class=MsoNormal><b style=\'mso-bidi-font-weight:normal\'><span lang=EN-US  style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";mso-bidi-font-family:  \"Courier New\"\'>24<o:p></o:p></span></b></p>  <p class=MsoNormal><b style=\'mso-bidi-font-weight:normal\'><span lang=EN-US  style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";mso-bidi-font-family:  \"Courier New\"\'>25<o:p></o:p></span></b></p></td><td width=503 valign=top style=\'width:377.25pt;border:solid windowtext 1.0pt;  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt\'>  <p class=MsoNormal style=\'text-indent:5.0pt;background:white\'><b><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  mso-bidi-font-family:\"Courier New\";color:#9BBB59;mso-themecolor:accent3\'>// </span></b><b><span  style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";mso-bidi-font-family:  \"Courier New\";color:#404040;mso-themecolor:text1;mso-themetint:191;  mso-style-textfill-fill-color:#404040;mso-style-textfill-fill-themecolor:  text1;mso-style-textfill-fill-alpha:100.0%;mso-style-textfill-fill-colortransforms:  \"lumm=75000 lumo=25000\";background:yellow;mso-highlight:yellow\'>「<span  lang=EN-US>Point</span>」類別的定義</span></b><span lang=EN-US style=\'font-size:  10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";mso-bidi-font-family:\"Courier New\"\'><o:p></o:p></span></p>  <p class=MsoNormal style=\'text-indent:5.0pt;background:white\'><b><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  mso-bidi-font-family:\"Courier New\";color:#9BBB59;mso-themecolor:accent3\'>//  Point class definition represents an x-y coordinate pair.</span></b><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  mso-bidi-font-family:\"Courier New\";color:#9BBB59;mso-themecolor:accent3\'><o:p></o:p></span></p>  <p class=MsoNormal style=\'text-indent:5.0pt;background:white\'><b><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  mso-bidi-font-family:\"Courier New\";color:#790029\'>#<span class=SpellE>ifndef</span>  POINT_H</span></b><span lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  mso-bidi-font-family:\"Courier New\";color:#7F7F7F;mso-themecolor:text1;  mso-themetint:128;mso-style-textfill-fill-color:#7F7F7F;mso-style-textfill-fill-themecolor:  text1;mso-style-textfill-fill-alpha:100.0%;mso-style-textfill-fill-colortransforms:  \"lumm=50000 lumo=50000\"\'><o:p></o:p></span></p>  <p class=MsoNormal style=\'text-indent:5.0pt;background:white\'><b><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  mso-bidi-font-family:\"Courier New\";color:#790029\'>#define POINT_H<o:p></o:p></span></b></p>  <p class=MsoNormal style=\'text-indent:5.0pt;background:white\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  mso-bidi-font-family:\"Courier New\"\'><o:p>&nbsp;</o:p></span></p>  <p class=MsoNormal style=\'text-indent:5.0pt;background:white\'><b><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  mso-bidi-font-family:\"Courier New\";color:#790029\'>class Point { </span></b><b><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  mso-bidi-font-family:\"Courier New\";color:#9BBB59;mso-themecolor:accent3\'>//</span></b><b><span  style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";mso-bidi-font-family:  \"Courier New\";color:#404040;mso-themecolor:text1;mso-themetint:191;  mso-style-textfill-fill-color:#404040;mso-style-textfill-fill-themecolor:  text1;mso-style-textfill-fill-alpha:100.0%;mso-style-textfill-fill-colortransforms:  \"lumm=75000 lumo=25000\";background:yellow;mso-highlight:yellow\'>定義「<span  lang=EN-US>Point</span>」類別，此為基礎類別</span></b><b><span lang=EN-US  style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";mso-bidi-font-family:  \"Courier New\";color:#404040;mso-themecolor:text1;mso-themetint:191;  mso-style-textfill-fill-color:#404040;mso-style-textfill-fill-themecolor:  text1;mso-style-textfill-fill-alpha:100.0%;mso-style-textfill-fill-colortransforms:  \"lumm=75000 lumo=25000\"\'><o:p></o:p></span></b></p>  <p class=MsoNormal style=\'text-indent:5.0pt;background:white\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  mso-bidi-font-family:\"Courier New\"\'><o:p>&nbsp;</o:p></span></p>  <p class=MsoNormal style=\'text-indent:5.0pt;background:white\'><b><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  mso-bidi-font-family:\"Courier New\";color:#790029\'>public: </span></b><b><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  mso-bidi-font-family:\"Courier New\";color:#9BBB59;mso-themecolor:accent3\'>//</span></b><b><span  style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";mso-bidi-font-family:  \"Courier New\";color:#404040;mso-themecolor:text1;mso-themetint:191;  mso-style-textfill-fill-color:#404040;mso-style-textfill-fill-themecolor:  text1;mso-style-textfill-fill-alpha:100.0%;mso-style-textfill-fill-colortransforms:  \"lumm=75000 lumo=25000\";background:yellow;mso-highlight:yellow\'>宣告公有區成員</span></b><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  mso-bidi-font-family:\"Courier New\"\'><o:p></o:p></span></p>  <p class=MsoNormal style=\'text-indent:40.0pt;mso-char-indent-count:4.0;  background:white\'><b><span lang=EN-US style=\'font-size:10.0pt;font-family:  \"微軟正黑體\",\"sans-serif\";mso-bidi-font-family:\"Courier New\";color:#790029\'>Point(  <span class=SpellE>int</span> = 0, <span class=SpellE>int</span> = 0 ); </span></b><b><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  mso-bidi-font-family:\"Courier New\";color:#9BBB59;mso-themecolor:accent3\'>//</span></b><b><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  mso-bidi-font-family:\"Courier New\";color:#404040;mso-themecolor:text1;  mso-themetint:191;mso-style-textfill-fill-color:#404040;mso-style-textfill-fill-themecolor:  text1;mso-style-textfill-fill-alpha:100.0%;mso-style-textfill-fill-colortransforms:  \"lumm=75000 lumo=25000\";background:yellow;mso-highlight:yellow\'>(</span></b><b><span  style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";mso-bidi-font-family:  \"Courier New\";color:#404040;mso-themecolor:text1;mso-themetint:191;  mso-style-textfill-fill-color:#404040;mso-style-textfill-fill-themecolor:  text1;mso-style-textfill-fill-alpha:100.0%;mso-style-textfill-fill-colortransforms:  \"lumm=75000 lumo=25000\";background:yellow;mso-highlight:yellow\'>預設<span  lang=EN-US>)</span>建構子初始化</span></b><span lang=EN-US style=\'font-size:10.0pt;  font-family:\"微軟正黑體\",\"sans-serif\";mso-bidi-font-family:\"Courier New\"\'><o:p></o:p></span></p>  <p class=MsoNormal style=\'text-indent:5.0pt;background:white\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  mso-bidi-font-family:\"Courier New\"\'><o:p>&nbsp;</o:p></span></p>  <p class=MsoNormal style=\'text-indent:5.0pt;background:white\'><b><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  mso-bidi-font-family:\"Courier New\";color:#790029\'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  void <span class=SpellE>setX</span>( <span class=SpellE>int</span>  );&nbsp;&nbsp;&nbsp; </span></b><b><span lang=EN-US style=\'font-size:10.0pt;  font-family:\"微軟正黑體\",\"sans-serif\";mso-bidi-font-family:\"Courier New\";  color:#9BBB59;mso-themecolor:accent3\'>// </span></b><b><span  style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";mso-bidi-font-family:  \"Courier New\";color:#9BBB59;mso-themecolor:accent3\'>設定<span lang=EN-US>x</span>軸座標  </span></b><span lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  mso-bidi-font-family:\"Courier New\"\'><o:p></o:p></span></p>  <p class=MsoNormal style=\'text-indent:5.0pt;background:white\'><b><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  mso-bidi-font-family:\"Courier New\";color:#790029\'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <span class=SpellE>int</span> <span class=SpellE>getX</span>() <span  class=SpellE>const</span>;&nbsp;&nbsp;&nbsp; </span></b><b><span lang=EN-US  style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";mso-bidi-font-family:  \"Courier New\";color:#9BBB59;mso-themecolor:accent3\'>// return x from  coordinate pair </span></b><span lang=EN-US style=\'font-size:10.0pt;  font-family:\"微軟正黑體\",\"sans-serif\";mso-bidi-font-family:\"Courier New\"\'><o:p></o:p></span></p>  <p class=MsoNormal style=\'text-indent:5.0pt;background:white\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  mso-bidi-font-family:\"Courier New\"\'><o:p>&nbsp;</o:p></span></p>  <p class=MsoNormal style=\'text-indent:5.0pt;background:white\'><b><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  mso-bidi-font-family:\"Courier New\";color:#790029\'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  void <span class=SpellE>setY</span>( <span class=SpellE>int</span>  );&nbsp;&nbsp;&nbsp; </span></b><b><span lang=EN-US style=\'font-size:10.0pt;  font-family:\"微軟正黑體\",\"sans-serif\";mso-bidi-font-family:\"Courier New\";  color:#9BBB59;mso-themecolor:accent3\'>// </span></b><b><span  style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";mso-bidi-font-family:  \"Courier New\";color:#9BBB59;mso-themecolor:accent3\'>設定<span lang=EN-US>y</span>軸座標</span></b><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  mso-bidi-font-family:\"Courier New\"\'><o:p></o:p></span></p>  <p class=MsoNormal style=\'text-indent:5.0pt;background:white\'><b><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  mso-bidi-font-family:\"Courier New\";color:#790029\'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <span class=SpellE>int</span> <span class=SpellE>getY</span>() <span  class=SpellE>const</span>;&nbsp;&nbsp;&nbsp; </span></b><b><span lang=EN-US  style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";mso-bidi-font-family:  \"Courier New\";color:#9BBB59;mso-themecolor:accent3\'>// return y from  coordinate pair </span></b><span lang=EN-US style=\'font-size:10.0pt;  font-family:\"微軟正黑體\",\"sans-serif\";mso-bidi-font-family:\"Courier New\"\'><o:p></o:p></span></p>  <p class=MsoNormal style=\'text-indent:5.0pt;background:white\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  mso-bidi-font-family:\"Courier New\"\'><o:p>&nbsp;</o:p></span></p>  <p class=MsoNormal style=\'text-indent:5.0pt;background:white\'><b><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  mso-bidi-font-family:\"Courier New\";color:#790029\'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  void print() <span class=SpellE>const</span>;&nbsp; </span></b><b><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  mso-bidi-font-family:\"Courier New\";color:#9BBB59;mso-themecolor:accent3\'>//  output Point object </span></b><span lang=EN-US style=\'font-size:10.0pt;  font-family:\"微軟正黑體\",\"sans-serif\";mso-bidi-font-family:\"Courier New\"\'><o:p></o:p></span></p>  <p class=MsoNormal style=\'text-indent:5.0pt;background:white\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  mso-bidi-font-family:\"Courier New\"\'><o:p>&nbsp;</o:p></span></p>  <p class=MsoNormal style=\'text-indent:5.0pt;background:white\'><b><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  mso-bidi-font-family:\"Courier New\";color:#790029\'>protected: </span></b><b><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  mso-bidi-font-family:\"Courier New\";color:#9BBB59;mso-themecolor:accent3\'>//</span></b><b><span  style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";mso-bidi-font-family:  \"Courier New\";color:#404040;mso-themecolor:text1;mso-themetint:191;  mso-style-textfill-fill-color:#404040;mso-style-textfill-fill-themecolor:  text1;mso-style-textfill-fill-alpha:100.0%;mso-style-textfill-fill-colortransforms:  \"lumm=75000 lumo=25000\";background:yellow;mso-highlight:yellow\'>宣告保護區成員</span></b><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  mso-bidi-font-family:\"Courier New\"\'><o:p></o:p></span></p>  <p class=MsoNormal style=\'text-indent:5.0pt;background:white\'><b><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  mso-bidi-font-family:\"Courier New\";color:#790029\'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <span class=SpellE>int</span> x;&nbsp; </span></b><b><span lang=EN-US  style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";mso-bidi-font-family:  \"Courier New\";color:#9BBB59;mso-themecolor:accent3\'>// x part of coordinate  pair</span></b><span lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  mso-bidi-font-family:\"Courier New\"\'><o:p></o:p></span></p>  <p class=MsoNormal style=\'text-indent:5.0pt;background:white\'><b><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  mso-bidi-font-family:\"Courier New\";color:#790029\'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <span class=SpellE>int</span> y;&nbsp; </span></b><b><span lang=EN-US  style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";mso-bidi-font-family:  \"Courier New\";color:#9BBB59;mso-themecolor:accent3\'>// y part of coordinate  pair</span></b><span lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  mso-bidi-font-family:\"Courier New\"\'><o:p></o:p></span></p>  <p class=MsoNormal style=\'text-indent:5.0pt;background:white\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  mso-bidi-font-family:\"Courier New\"\'><o:p>&nbsp;</o:p></span></p>  <p class=MsoNormal style=\'text-indent:5.0pt;background:white\'><b><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  mso-bidi-font-family:\"Courier New\";color:#790029\'>}; </span></b><b><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  mso-bidi-font-family:\"Courier New\";color:#9BBB59;mso-themecolor:accent3\'>//  end class Point</span></b><b><span lang=EN-US style=\'font-size:10.0pt;  font-family:\"微軟正黑體\",\"sans-serif\";mso-bidi-font-family:\"Courier New\";  color:#790029\'> </span></b><span lang=EN-US style=\'font-size:10.0pt;  font-family:\"微軟正黑體\",\"sans-serif\";mso-bidi-font-family:\"Courier New\"\'><o:p></o:p></span></p>  <p class=MsoNormal style=\'text-indent:5.0pt;background:white\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  mso-bidi-font-family:\"Courier New\"\'><o:p>&nbsp;</o:p></span></p>  <p class=MsoNormal><b><span lang=EN-US style=\'font-size:10.0pt;font-family:  \"微軟正黑體\",\"sans-serif\";mso-bidi-font-family:\"Courier New\";color:#790029\'>#<span  class=SpellE>endif</span><o:p></o:p></span></b></p>  </td></tr></table><p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p><table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0 style=\'border-collapse:collapse;border:none;mso-border-alt:solid windowtext .5pt; mso-yfti-tbllook:1184;mso-padding-alt:0cm 5.4pt 0cm 5.4pt\'> <tr style=\'mso-yfti-irow:0;mso-yfti-firstrow:yes;mso-yfti-lastrow:yes\'>  <td width=54 valign=top style=\'width:40.85pt;border:solid windowtext 1.0pt;  mso-border-alt:solid windowtext .5pt;background:#B8CCE4;mso-background-themecolor:  accent1;mso-background-themetint:102;padding:0cm 5.4pt 0cm 5.4pt\'>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>1<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>2<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>3<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>4<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>5<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>6<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>7<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>8<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>9<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>10<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>11<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>12<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>13<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>14<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>15<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>16<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>17<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>18<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>19<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>20<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>21<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>22<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>23<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>24<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>25<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>26<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>27<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>28<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>29<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>30<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>31<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>32<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>33<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>34<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>35<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>36<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>37<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>38<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>39<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>40<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>41<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>42<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>43<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>44<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>45<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>46<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>47<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>48<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>49<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>50<o:p></o:p></span></b></p></td><td width=503 valign=top style=\'width:377.25pt;border:solid windowtext 1.0pt;  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt\'>  <p class=MsoNoSpacing><b><span lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:  11.0pt;font-family:\"微軟正黑體\",\"sans-serif\";color:#9BBB59;mso-themecolor:accent3\'>//  Point.cpp </span></b><b style=\'mso-bidi-font-weight:normal\'><span lang=EN-US  style=\'font-size:10.0pt;mso-bidi-font-size:12.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:#9BBB59;mso-themecolor:accent3\'><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b><span lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:  11.0pt;font-family:\"微軟正黑體\",\"sans-serif\";color:#9BBB59;mso-themecolor:accent3\'>//  </span></b><b><span style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;  font-family:\"微軟正黑體\",\"sans-serif\";color:#9BBB59;mso-themecolor:accent3\'>定義「<span  lang=EN-US>Point</span>」類別的成員函數 </span></b><b style=\'mso-bidi-font-weight:  normal\'><span lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;  font-family:\"微軟正黑體\",\"sans-serif\";color:#9BBB59;mso-themecolor:accent3\'><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b><span lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:  11.0pt;font-family:\"微軟正黑體\",\"sans-serif\";color:#790029\'>#include &lt;<span  class=SpellE>iostream</span>&gt;&nbsp; </span></b><b style=\'mso-bidi-font-weight:  normal\'><span lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;  font-family:\"微軟正黑體\",\"sans-serif\"\'><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'><o:p>&nbsp;</o:p></span></b></p>  <p class=MsoNoSpacing><b><span lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:  11.0pt;font-family:\"微軟正黑體\",\"sans-serif\";color:#790029\'>using <span  class=SpellE>std</span>::<span class=SpellE>cout</span>; </span></b><b  style=\'mso-bidi-font-weight:normal\'><span lang=EN-US style=\'font-size:10.0pt;  mso-bidi-font-size:11.0pt;font-family:\"微軟正黑體\",\"sans-serif\"\'><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'><o:p>&nbsp;</o:p></span></b></p>  <p class=MsoNoSpacing><b><span lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:  11.0pt;font-family:\"微軟正黑體\",\"sans-serif\";color:#790029\'>#include &quot;<span  class=SpellE>Point.h</span>&quot;&nbsp;&nbsp;</span></b><b><span lang=EN-US  style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:#9BBB59;mso-themecolor:accent3\'>//</span></b><b><span style=\'font-size:  10.0pt;mso-bidi-font-size:11.0pt;font-family:\"微軟正黑體\",\"sans-serif\";color:#9BBB59;  mso-themecolor:accent3\'>引用先前定義過的類別「<span lang=EN-US>Point</span>」</span></b><b><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\";color:#790029\'><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b><span lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:  11.0pt;font-family:\"微軟正黑體\",\"sans-serif\";color:#9BBB59;mso-themecolor:accent3\'>//</span></b><b><span  style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:#404040;mso-themecolor:text1;mso-themetint:191;mso-style-textfill-fill-color:  #404040;mso-style-textfill-fill-themecolor:text1;mso-style-textfill-fill-alpha:  100.0%;mso-style-textfill-fill-colortransforms:\"lumm=75000 lumo=25000\";  background:yellow;mso-highlight:yellow\'>建構子定義，其中 “<span lang=EN-US>::</span>”為  <i style=\'mso-bidi-font-style:normal\'><span lang=EN-US>resolution scope  operator</span></i></span></b><b><i style=\'mso-bidi-font-style:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\";color:#790029\'><o:p></o:p></span></i></b></p>  <p class=MsoNoSpacing><b><span lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:  11.0pt;font-family:\"微軟正黑體\",\"sans-serif\";color:#9BBB59;mso-themecolor:accent3\'>//</span></b><b><span  style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:#404040;mso-themecolor:text1;mso-themetint:191;mso-style-textfill-fill-color:  #404040;mso-style-textfill-fill-themecolor:text1;mso-style-textfill-fill-alpha:  100.0%;mso-style-textfill-fill-colortransforms:\"lumm=75000 lumo=25000\";  background:yellow;mso-highlight:yellow\'>當我們需要在類別外定義成員之內容時，必須使用 “<span  lang=EN-US>::</span>”。</span></b><b style=\'mso-bidi-font-weight:normal\'><span  style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:#404040;mso-themecolor:text1;mso-themetint:191;mso-style-textfill-fill-color:  #404040;mso-style-textfill-fill-themecolor:text1;mso-style-textfill-fill-alpha:  100.0%;mso-style-textfill-fill-colortransforms:\"lumm=75000 lumo=25000\"\'> </span></b><b  style=\'mso-bidi-font-weight:normal\'><span lang=EN-US style=\'font-size:10.0pt;  mso-bidi-font-size:11.0pt;font-family:\"微軟正黑體\",\"sans-serif\"\'><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b><span lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:  11.0pt;font-family:\"微軟正黑體\",\"sans-serif\";color:#790029\'>Point::Point( <span  class=SpellE>int</span> <span class=SpellE>xValue</span>, <span class=SpellE>int</span>  <span class=SpellE>yValue</span> ) </span></b><b style=\'mso-bidi-font-weight:  normal\'><span lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;  font-family:\"微軟正黑體\",\"sans-serif\"\'><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b><span lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:  11.0pt;font-family:\"微軟正黑體\",\"sans-serif\";color:#790029\'>{ </span></b><b  style=\'mso-bidi-font-weight:normal\'><span lang=EN-US style=\'font-size:10.0pt;  mso-bidi-font-size:11.0pt;font-family:\"微軟正黑體\",\"sans-serif\"\'><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b><span lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:  11.0pt;font-family:\"微軟正黑體\",\"sans-serif\";color:#790029\'>&nbsp;&nbsp; x = <span  class=SpellE>xValue</span>; </span></b><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b><span lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:  11.0pt;font-family:\"微軟正黑體\",\"sans-serif\";color:#790029\'>&nbsp;&nbsp; y = <span  class=SpellE>yValue</span>; <o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b><span lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:  11.0pt;font-family:\"微軟正黑體\",\"sans-serif\";color:#9BBB59;mso-themecolor:accent3\'>//</span></b><b><span  style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:#404040;mso-themecolor:text1;mso-themetint:191;mso-style-textfill-fill-color:  #404040;mso-style-textfill-fill-themecolor:text1;mso-style-textfill-fill-alpha:  100.0%;mso-style-textfill-fill-colortransforms:\"lumm=75000 lumo=25000\";  background:yellow;mso-highlight:yellow\'>保護區成員，在類別當中就像私有區成員，存取只能透過類別的成員函數</span></b><b  style=\'mso-bidi-font-weight:normal\'><span lang=EN-US style=\'font-size:10.0pt;  mso-bidi-font-size:11.0pt;font-family:\"微軟正黑體\",\"sans-serif\"\'><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b><span lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:  11.0pt;font-family:\"微軟正黑體\",\"sans-serif\";color:#790029\'>}</span></b><b><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\";color:#9BBB59;mso-themecolor:accent3\'> // end Point  constructor</span></b><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'><o:p>&nbsp;</o:p></span></b></p>  <p class=MsoNoSpacing><b><span lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:  11.0pt;font-family:\"微軟正黑體\",\"sans-serif\";color:#790029\'>// set x in coordinate  pair</span></b><b style=\'mso-bidi-font-weight:normal\'><span lang=EN-US  style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:\"微軟正黑體\",\"sans-serif\"\'><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b><span lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:  11.0pt;font-family:\"微軟正黑體\",\"sans-serif\";color:#790029\'>void Point::<span  class=SpellE>setX</span>( <span class=SpellE>int</span> <span class=SpellE>xValue</span>  )</span></b><b style=\'mso-bidi-font-weight:normal\'><span lang=EN-US  style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:\"微軟正黑體\",\"sans-serif\"\'><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b><span lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:  11.0pt;font-family:\"微軟正黑體\",\"sans-serif\";color:#790029\'>{</span></b><b  style=\'mso-bidi-font-weight:normal\'><span lang=EN-US style=\'font-size:10.0pt;  mso-bidi-font-size:11.0pt;font-family:\"微軟正黑體\",\"sans-serif\"\'><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b><span lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:  11.0pt;font-family:\"微軟正黑體\",\"sans-serif\";color:#790029\'>&nbsp;&nbsp; x = <span  class=SpellE>xValue</span>; </span></b><b><span lang=EN-US style=\'font-size:  10.0pt;mso-bidi-font-size:11.0pt;font-family:\"微軟正黑體\",\"sans-serif\";color:#9BBB59;  mso-themecolor:accent3\'>// no need for validation</span></b><b  style=\'mso-bidi-font-weight:normal\'><span lang=EN-US style=\'font-size:10.0pt;  mso-bidi-font-size:11.0pt;font-family:\"微軟正黑體\",\"sans-serif\"\'><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'><o:p>&nbsp;</o:p></span></b></p>  <p class=MsoNoSpacing><b><span lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:  11.0pt;font-family:\"微軟正黑體\",\"sans-serif\";color:#790029\'>} </span></b><b><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\";color:#9BBB59;mso-themecolor:accent3\'>// end function <span  class=SpellE>setX</span></span></b><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b><span lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:  11.0pt;font-family:\"微軟正黑體\",\"sans-serif\";color:#790029\'><o:p>&nbsp;</o:p></span></b></p>  <p class=MsoNoSpacing><b><span lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:  11.0pt;font-family:\"微軟正黑體\",\"sans-serif\";color:#9BBB59;mso-themecolor:accent3\'>//  return x from coordinate pair</span></b><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\";color:#9BBB59;mso-themecolor:accent3\'><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><span class=SpellE><b><span lang=EN-US  style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:#790029\'>int</span></b></span><b><span lang=EN-US style=\'font-size:  10.0pt;mso-bidi-font-size:11.0pt;font-family:\"微軟正黑體\",\"sans-serif\";color:#790029\'>  Point::<span class=SpellE>getX</span>() <span class=SpellE>const</span> </span></b><b  style=\'mso-bidi-font-weight:normal\'><span lang=EN-US style=\'font-size:10.0pt;  mso-bidi-font-size:11.0pt;font-family:\"微軟正黑體\",\"sans-serif\"\'><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b><span lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:  11.0pt;font-family:\"微軟正黑體\",\"sans-serif\";color:#790029\'>{ </span></b><b  style=\'mso-bidi-font-weight:normal\'><span lang=EN-US style=\'font-size:10.0pt;  mso-bidi-font-size:11.0pt;font-family:\"微軟正黑體\",\"sans-serif\"\'><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b><span lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:  11.0pt;font-family:\"微軟正黑體\",\"sans-serif\";color:#790029\'>&nbsp;&nbsp; return x;  </span></b><b style=\'mso-bidi-font-weight:normal\'><span lang=EN-US  style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:\"微軟正黑體\",\"sans-serif\"\'><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'><o:p>&nbsp;</o:p></span></b></p>  <p class=MsoNoSpacing><b><span lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:  11.0pt;font-family:\"微軟正黑體\",\"sans-serif\";color:#790029\'>} </span></b><b><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\";color:#9BBB59;mso-themecolor:accent3\'>// end function <span  class=SpellE>getX</span></span></b><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'><o:p>&nbsp;</o:p></span></b></p>  <p class=MsoNoSpacing><b><span lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:  11.0pt;font-family:\"微軟正黑體\",\"sans-serif\";color:#9BBB59;mso-themecolor:accent3\'>//  set y in coordinate pair</span></b><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\";color:#9BBB59;mso-themecolor:accent3\'><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b><span lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:  11.0pt;font-family:\"微軟正黑體\",\"sans-serif\";color:#790029\'>void Point::<span  class=SpellE>setY</span>( <span class=SpellE>int</span> <span class=SpellE>yValue</span>  ) </span></b><b style=\'mso-bidi-font-weight:normal\'><span lang=EN-US  style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:\"微軟正黑體\",\"sans-serif\"\'><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b><span lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:  11.0pt;font-family:\"微軟正黑體\",\"sans-serif\";color:#790029\'>{ </span></b><b  style=\'mso-bidi-font-weight:normal\'><span lang=EN-US style=\'font-size:10.0pt;  mso-bidi-font-size:11.0pt;font-family:\"微軟正黑體\",\"sans-serif\"\'><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b><span lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:  11.0pt;font-family:\"微軟正黑體\",\"sans-serif\";color:#790029\'>&nbsp;&nbsp; y = <span  class=SpellE>yValue</span>; </span></b><b><span lang=EN-US style=\'font-size:  10.0pt;mso-bidi-font-size:11.0pt;font-family:\"微軟正黑體\",\"sans-serif\";color:#9BBB59;  mso-themecolor:accent3\'>// no need for validation</span></b><b  style=\'mso-bidi-font-weight:normal\'><span lang=EN-US style=\'font-size:10.0pt;  mso-bidi-font-size:11.0pt;font-family:\"微軟正黑體\",\"sans-serif\"\'><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'><o:p>&nbsp;</o:p></span></b></p>  <p class=MsoNoSpacing><b><span lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:  11.0pt;font-family:\"微軟正黑體\",\"sans-serif\";color:#790029\'>} </span></b><b><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\";color:#9BBB59;mso-themecolor:accent3\'>// end function <span  class=SpellE>setY</span></span></b><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'><o:p>&nbsp;</o:p></span></b></p>  <p class=MsoNoSpacing><b><span lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:  11.0pt;font-family:\"微軟正黑體\",\"sans-serif\";color:#9BBB59;mso-themecolor:accent3\'>//  return y from coordinate pair</span></b><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\";color:#9BBB59;mso-themecolor:accent3\'><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><span class=SpellE><b><span lang=EN-US  style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:#790029\'>int</span></b></span><b><span lang=EN-US style=\'font-size:  10.0pt;mso-bidi-font-size:11.0pt;font-family:\"微軟正黑體\",\"sans-serif\";color:#790029\'>  Point::<span class=SpellE>getY</span>() <span class=SpellE>const</span></span></b><b  style=\'mso-bidi-font-weight:normal\'><span lang=EN-US style=\'font-size:10.0pt;  mso-bidi-font-size:11.0pt;font-family:\"微軟正黑體\",\"sans-serif\"\'><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b><span lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:  11.0pt;font-family:\"微軟正黑體\",\"sans-serif\";color:#790029\'>{ </span></b><b  style=\'mso-bidi-font-weight:normal\'><span lang=EN-US style=\'font-size:10.0pt;  mso-bidi-font-size:11.0pt;font-family:\"微軟正黑體\",\"sans-serif\"\'><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b><span lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:  11.0pt;font-family:\"微軟正黑體\",\"sans-serif\";color:#790029\'>&nbsp;&nbsp; return y;</span></b><b  style=\'mso-bidi-font-weight:normal\'><span lang=EN-US style=\'font-size:10.0pt;  mso-bidi-font-size:11.0pt;font-family:\"微軟正黑體\",\"sans-serif\"\'><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'><o:p>&nbsp;</o:p></span></b></p>  <p class=MsoNoSpacing><b><span lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:  11.0pt;font-family:\"微軟正黑體\",\"sans-serif\";color:#790029\'>} </span></b><b><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\";color:#9BBB59;mso-themecolor:accent3\'>// end function <span  class=SpellE>getY</span></span></b><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'><o:p>&nbsp;</o:p></span></b></p>  <p class=MsoNoSpacing><b><span lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:  11.0pt;font-family:\"微軟正黑體\",\"sans-serif\";color:#9BBB59;mso-themecolor:accent3\'>//  output Point object</span></b><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\";color:#9BBB59;mso-themecolor:accent3\'><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b><span lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:  11.0pt;font-family:\"微軟正黑體\",\"sans-serif\";color:#790029\'>void Point::print() <span  class=SpellE>const</span> </span></b><b><span lang=EN-US style=\'font-size:  10.0pt;mso-bidi-font-size:11.0pt;font-family:\"微軟正黑體\",\"sans-serif\";color:#9BBB59;  mso-themecolor:accent3\'>//</span></b><b><span style=\'font-size:10.0pt;  mso-bidi-font-size:11.0pt;font-family:\"微軟正黑體\",\"sans-serif\";color:#9BBB59;  mso-themecolor:accent3\'>印出「<span lang=EN-US>Point</span>」物件的成員函數</span></b><b  style=\'mso-bidi-font-weight:normal\'><span lang=EN-US style=\'font-size:10.0pt;  mso-bidi-font-size:11.0pt;font-family:\"微軟正黑體\",\"sans-serif\"\'><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b><span lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:  11.0pt;font-family:\"微軟正黑體\",\"sans-serif\";color:#790029\'>{ </span></b><b  style=\'mso-bidi-font-weight:normal\'><span lang=EN-US style=\'font-size:10.0pt;  mso-bidi-font-size:11.0pt;font-family:\"微軟正黑體\",\"sans-serif\"\'><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b><span lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:  11.0pt;font-family:\"微軟正黑體\",\"sans-serif\";color:#790029\'>&nbsp;&nbsp; <span  class=SpellE>cout</span> &lt;&lt; \'[\' &lt;&lt; x &lt;&lt; &quot;, &quot;  &lt;&lt; y &lt;&lt; \']\'; </span></b><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'><o:p>&nbsp;</o:p></span></b></p>  <p class=MsoNoSpacing><b><span lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:  11.0pt;font-family:\"微軟正黑體\",\"sans-serif\";color:#790029\'>} </span></b><b><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\";color:#9BBB59;mso-themecolor:accent3\'>// end function  print</span></b><b style=\'mso-bidi-font-weight:normal\'><span lang=EN-US  style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:\"微軟正黑體\",\"sans-serif\"\'><o:p></o:p></span></b></p></td></tr></table></div>";

		
		
		$.post("SQL_pre_page.php", {sql:page },	function (msg){	}  );
		page=page-1;		
	break;
	
	case 59:  //目前在 P7  _3 頁，上一頁前往 P7 _2
		Button_enable();
		
		//swf
	   	document.getElementById('flashContent').innerHTML='<div class=WordSection1 style=\'layout-grid:18.0pt ; OVERFLOW: scroll;  HEIGHT: 525px; layout-grid:18.0pt\'  class=\"Section1\"><table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0 style=\'border-collapse:collapse;border:none;mso-border-alt:solid windowtext .5pt; mso-yfti-tbllook:1184;mso-padding-alt:0cm 5.4pt 0cm 5.4pt\'> <tr style=\'mso-yfti-irow:0;mso-yfti-firstrow:yes;mso-yfti-lastrow:yes\'>  <td width=54 valign=top style=\'width:40.85pt;border:solid windowtext 1.0pt;  mso-border-alt:solid windowtext .5pt;background:#B8CCE4;mso-background-themecolor:  accent1;mso-background-themetint:102;padding:0cm 5.4pt 0cm 5.4pt\'>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\"\'>1<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\"\'>2<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\"\'>3<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\"\'>4<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\"\'>5<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\"\'>6<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\"\'>7<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\"\'>8<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\"\'>9<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\"\'>10<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\"\'>11<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\"\'>12<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\"\'>13<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\"\'>14<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\"\'>15<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\"\'>16<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\"\'>17<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\"\'>18<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\"\'>19<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\"\'>20<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\"\'>21<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\"\'>22<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\"\'>23<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\"\'>24<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\"\'>25<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\"\'>26<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\"\'>27<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\"\'>28<o:p></o:p></span></b></p>  </td>  <td width=503 valign=top style=\'width:377.25pt;border:solid windowtext 1.0pt;  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt\'>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:#9BBB59;mso-themecolor:accent3;background:white\'>// <span class=SpellE>circle.h</span></span></b><b  style=\'mso-bidi-font-weight:normal\'><span style=\'font-size:10.0pt;font-family:  \"微軟正黑體\",\"sans-serif\";color:#0D0D0D;mso-themecolor:text1;mso-themetint:242;  mso-style-textfill-fill-color:#0D0D0D;mso-style-textfill-fill-themecolor:  text1;mso-style-textfill-fill-alpha:100.0%;mso-style-textfill-fill-colortransforms:  \"lumm=95000 lumo=5000\";background:yellow\'>衍生類別「<span lang=EN-US>Circle</span>」的類別定義</span></b><b  style=\'mso-bidi-font-weight:normal\'><span lang=EN-US style=\'font-size:10.0pt;  font-family:\"微軟正黑體\",\"sans-serif\"\'><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:#9BBB59;mso-themecolor:accent3;background:white\'>// </span></b><b  style=\'mso-bidi-font-weight:normal\'><span lang=EN-US style=\'font-size:10.0pt;  font-family:\"微軟正黑體\",\"sans-serif\";color:#0D0D0D;mso-themecolor:text1;  mso-themetint:242;mso-style-textfill-fill-color:#0D0D0D;mso-style-textfill-fill-themecolor:  text1;mso-style-textfill-fill-alpha:100.0%;mso-style-textfill-fill-colortransforms:  \"lumm=95000 lumo=5000\";background:yellow;mso-highlight:yellow;mso-shading:  white\'>Circle</span></b><b style=\'mso-bidi-font-weight:normal\'><span  style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";color:#0D0D0D;  mso-themecolor:text1;mso-themetint:242;mso-style-textfill-fill-color:#0D0D0D;  mso-style-textfill-fill-themecolor:text1;mso-style-textfill-fill-alpha:100.0%;  mso-style-textfill-fill-colortransforms:\"lumm=95000 lumo=5000\";background:  yellow;mso-highlight:yellow;mso-shading:white\'>類別除了包含圓心<span lang=EN-US>(x</span>軸<span  lang=EN-US>, y</span>軸<span lang=EN-US>)</span>座標之外，多增加了半徑</span></b><b  style=\'mso-bidi-font-weight:normal\'><span lang=EN-US style=\'font-size:10.0pt;  font-family:\"微軟正黑體\",\"sans-serif\"\'><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:#790029;background:white\'>#<span class=SpellE>ifndef</span> CIRCLE_H </span></b><b  style=\'mso-bidi-font-weight:normal\'><span lang=EN-US style=\'font-size:10.0pt;  font-family:\"微軟正黑體\",\"sans-serif\"\'><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:#790029;background:white\'>#define CIRCLE_H </span></b><b  style=\'mso-bidi-font-weight:normal\'><span lang=EN-US style=\'font-size:10.0pt;  font-family:\"微軟正黑體\",\"sans-serif\"\'><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\"\'><o:p>&nbsp;</o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:#790029;background:white\'>#include &quot;<span class=SpellE>Point.h</span>&quot;&nbsp;  </span></b><b style=\'mso-bidi-font-weight:normal\'><span lang=EN-US  style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\"\'><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:#9BBB59;mso-themecolor:accent3;background:white\'>//</span></b><b  style=\'mso-bidi-font-weight:normal\'><span style=\'font-size:10.0pt;font-family:  \"微軟正黑體\",\"sans-serif\";color:#0D0D0D;mso-themecolor:text1;mso-themetint:242;  mso-style-textfill-fill-color:#0D0D0D;mso-style-textfill-fill-themecolor:  text1;mso-style-textfill-fill-alpha:100.0%;mso-style-textfill-fill-colortransforms:  \"lumm=95000 lumo=5000\";background:yellow\'>類別「圓」 繼承自類別「點」<span lang=EN-US>(Point</span></span></b><b  style=\'mso-bidi-font-weight:normal\'><span lang=EN-US style=\'font-size:10.0pt;  font-family:\"微軟正黑體\",\"sans-serif\";color:black;background:yellow\'>)</span></b><b  style=\'mso-bidi-font-weight:normal\'><span lang=EN-US style=\'font-size:10.0pt;  font-family:\"微軟正黑體\",\"sans-serif\"\'><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:#790029;background:white\'>class Circle : public Point { </span></b><b  style=\'mso-bidi-font-weight:normal\'><span lang=EN-US style=\'font-size:10.0pt;  font-family:\"微軟正黑體\",\"sans-serif\"\'><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\"\'><o:p>&nbsp;</o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:#790029;background:white\'>public: </span></b><b style=\'mso-bidi-font-weight:  normal\'><span lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\"\'><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:#790029;background:white\'>&nbsp;&nbsp;&nbsp; </span></b><b  style=\'mso-bidi-font-weight:normal\'><span lang=EN-US style=\'font-size:10.0pt;  font-family:\"微軟正黑體\",\"sans-serif\";color:#9BBB59;mso-themecolor:accent3;  background:white\'>// default constructor</span></b><b style=\'mso-bidi-font-weight:  normal\'><span lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:#790029;background:white\'> </span></b><b style=\'mso-bidi-font-weight:  normal\'><span lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\"\'><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:#790029;background:white\'>&nbsp;&nbsp;&nbsp; Circle( <span  class=SpellE>int</span> = 0, <span class=SpellE>int</span> = 0, double = 0.0  );&nbsp; </span></b><b style=\'mso-bidi-font-weight:normal\'><span lang=EN-US  style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\"\'><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:#790029;background:white\'><span  style=\'mso-spacerun:yes\'>&nbsp;</span>&nbsp;&nbsp;&nbsp;</span></b><b  style=\'mso-bidi-font-weight:normal\'><span lang=EN-US style=\'font-size:10.0pt;  font-family:\"微軟正黑體\",\"sans-serif\";color:#9BBB59;mso-themecolor:accent3;  background:white\'>//</span></b><b style=\'mso-bidi-font-weight:normal\'><span  style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";color:#0D0D0D;  mso-themecolor:text1;mso-themetint:242;mso-style-textfill-fill-color:#0D0D0D;  mso-style-textfill-fill-themecolor:text1;mso-style-textfill-fill-alpha:100.0%;  mso-style-textfill-fill-colortransforms:\"lumm=95000 lumo=5000\";background:  yellow;mso-highlight:yellow;mso-shading:white\'>衍生類別「<span lang=EN-US>Circle</span>」繼承基礎類別「<span  lang=EN-US>Point</span>」的所有成員，並且</span></b><b style=\'mso-bidi-font-weight:  normal\'><span lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\"\'><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:#790029;background:white\'><span style=\'mso-spacerun:yes\'>&nbsp;&nbsp;  </span></span></b><b style=\'mso-bidi-font-weight:normal\'><span lang=EN-US  style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";color:#9BBB59;  mso-themecolor:accent3;background:white\'>//</span></b><b style=\'mso-bidi-font-weight:  normal\'><span style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:#0D0D0D;mso-themecolor:text1;mso-themetint:242;mso-style-textfill-fill-color:  #0D0D0D;mso-style-textfill-fill-themecolor:text1;mso-style-textfill-fill-alpha:  100.0%;mso-style-textfill-fill-colortransforms:\"lumm=95000 lumo=5000\";  background:yellow;mso-highlight:yellow;mso-shading:white\'>另外新增成員「<span  class=SpellE><span lang=EN-US>setRadius</span></span><span lang=EN-US>()</span>」、「<span  class=SpellE><span lang=EN-US>getRadius</span></span><span lang=EN-US>()</span>」及「<span  lang=EN-US>radius</span>」</span></b><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:#0D0D0D;mso-themecolor:text1;mso-themetint:242;mso-style-textfill-fill-color:  #0D0D0D;mso-style-textfill-fill-themecolor:text1;mso-style-textfill-fill-alpha:  100.0%;mso-style-textfill-fill-colortransforms:\"lumm=95000 lumo=5000\";  background:white\'><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:#790029;background:white\'>&nbsp;&nbsp;&nbsp; void <span class=SpellE>setRadius</span>(  double );&nbsp;&nbsp;<span style=\'mso-spacerun:yes\'>&nbsp;&nbsp;&nbsp;  </span></span></b><b style=\'mso-bidi-font-weight:normal\'><span lang=EN-US  style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";color:#9BBB59;  mso-themecolor:accent3;background:white\'>// set radius</span></b><b  style=\'mso-bidi-font-weight:normal\'><span lang=EN-US style=\'font-size:10.0pt;  font-family:\"微軟正黑體\",\"sans-serif\"\'><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:#790029;background:white\'><span  style=\'mso-spacerun:yes\'>&nbsp;</span>&nbsp;&nbsp;&nbsp;double <span  class=SpellE>getRadius</span>() <span class=SpellE>const</span>;&nbsp;&nbsp;<span  style=\'mso-spacerun:yes\'>&nbsp;&nbsp; </span></span></b><b style=\'mso-bidi-font-weight:  normal\'><span lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:#9BBB59;mso-themecolor:accent3;background:white\'>// return radius</span></b><b  style=\'mso-bidi-font-weight:normal\'><span lang=EN-US style=\'font-size:10.0pt;  font-family:\"微軟正黑體\",\"sans-serif\"\'><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:#790029;background:white\'>&nbsp;&nbsp;&nbsp; double <span class=SpellE>getDiameter</span>()  <span class=SpellE>const</span>;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span  style=\'mso-spacerun:yes\'>&nbsp;&nbsp; </span></span></b><b style=\'mso-bidi-font-weight:  normal\'><span lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:#9BBB59;mso-themecolor:accent3;background:white\'>// return diameter</span></b><b  style=\'mso-bidi-font-weight:normal\'><span lang=EN-US style=\'font-size:10.0pt;  font-family:\"微軟正黑體\",\"sans-serif\"\'><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:#790029;background:white\'>&nbsp;&nbsp;&nbsp; double <span class=SpellE>getCircumference</span>()  <span class=SpellE>const</span>;&nbsp; </span></b><b style=\'mso-bidi-font-weight:  normal\'><span lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:#9BBB59;mso-themecolor:accent3;background:white\'>// return  circumference</span></b><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\"\'><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:#790029;background:white\'>&nbsp;&nbsp;&nbsp; double <span class=SpellE>getArea</span>()  <span class=SpellE>const</span>;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span  style=\'mso-spacerun:yes\'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></b><b  style=\'mso-bidi-font-weight:normal\'><span lang=EN-US style=\'font-size:10.0pt;  font-family:\"微軟正黑體\",\"sans-serif\";color:#9BBB59;mso-themecolor:accent3;  background:white\'>// return area</span></b><b style=\'mso-bidi-font-weight:  normal\'><span lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\"\'><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:#790029;background:white\'><span  style=\'mso-spacerun:yes\'>&nbsp;</span>&nbsp;&nbsp;&nbsp;</span></b><b  style=\'mso-bidi-font-weight:normal\'><span lang=EN-US style=\'font-size:10.0pt;  font-family:\"微軟正黑體\",\"sans-serif\";color:#9BBB59;mso-themecolor:accent3;  background:white\'>//</span></b><b style=\'mso-bidi-font-weight:normal\'><span  style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";color:#0D0D0D;  mso-themecolor:text1;mso-themetint:242;mso-style-textfill-fill-color:#0D0D0D;  mso-style-textfill-fill-themecolor:text1;mso-style-textfill-fill-alpha:100.0%;  mso-style-textfill-fill-colortransforms:\"lumm=95000 lumo=5000\";background:  yellow;mso-highlight:yellow;mso-shading:white\'>並且將基礎類別成員<span lang=EN-US>print()</span>，修改以符合<span  lang=EN-US>Circle</span>類別使用</span></b><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\"\'><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:#790029;background:white\'>&nbsp;&nbsp;&nbsp; void print() <span  class=SpellE>const</span>;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></b><b  style=\'mso-bidi-font-weight:normal\'><span lang=EN-US style=\'font-size:10.0pt;  font-family:\"微軟正黑體\",\"sans-serif\";color:#9BBB59;mso-themecolor:accent3;  background:white\'>// output Circle object</span></b><b style=\'mso-bidi-font-weight:  normal\'><span lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\"\'><o:p></o:p></span></b></p>  <p class=MsoNoSpacing style=\'line-height:115%\'><b style=\'mso-bidi-font-weight:  normal\'><span lang=EN-US style=\'font-size:10.0pt;line-height:115%;font-family:  \"微軟正黑體\",\"sans-serif\"\'><o:p>&nbsp;</o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:#790029;background:white\'>private: </span></b><b style=\'mso-bidi-font-weight:  normal\'><span lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:#9BBB59;mso-themecolor:accent3;background:white\'>//</span></b><b  style=\'mso-bidi-font-weight:normal\'><span style=\'font-size:10.0pt;font-family:  \"微軟正黑體\",\"sans-serif\";color:#0D0D0D;mso-themecolor:text1;mso-themetint:242;  mso-style-textfill-fill-color:#0D0D0D;mso-style-textfill-fill-themecolor:  text1;mso-style-textfill-fill-alpha:100.0%;mso-style-textfill-fill-colortransforms:  \"lumm=95000 lumo=5000\";background:yellow;mso-highlight:yellow;mso-shading:  white\'>宣告私有區成員</span></b><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\"\'><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:#790029;background:white\'>&nbsp;&nbsp;&nbsp; double radius;&nbsp; </span></b><b  style=\'mso-bidi-font-weight:normal\'><span lang=EN-US style=\'font-size:10.0pt;  font-family:\"微軟正黑體\",\"sans-serif\";color:#9BBB59;mso-themecolor:accent3;  background:white\'>// Circle\'s radius</span></b><b style=\'mso-bidi-font-weight:  normal\'><span lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\"\'><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\"\'><o:p>&nbsp;</o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:#790029;background:white\'>}; </span></b><b style=\'mso-bidi-font-weight:  normal\'><span lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:#9BBB59;mso-themecolor:accent3;background:white\'>// end class Circle</span></b><b  style=\'mso-bidi-font-weight:normal\'><span lang=EN-US style=\'font-size:10.0pt;  font-family:\"微軟正黑體\",\"sans-serif\"\'><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\"\'><o:p>&nbsp;</o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:#790029;background:white\'>#<span class=SpellE>endif</span></span></b><b  style=\'mso-bidi-font-weight:normal\'><span lang=EN-US style=\'font-size:10.0pt;  font-family:\"微軟正黑體\",\"sans-serif\"\'><o:p></o:p></span></b></p>  </td> </tr></table><p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p><table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0 style=\'border-collapse:collapse;border:none;mso-border-alt:solid windowtext .5pt; mso-yfti-tbllook:1184;mso-padding-alt:0cm 5.4pt 0cm 5.4pt\'> <tr style=\'mso-yfti-irow:0;mso-yfti-firstrow:yes;mso-yfti-lastrow:yes\'>  <td width=54 valign=top style=\'width:40.85pt;border:solid windowtext 1.0pt;  mso-border-alt:solid windowtext .5pt;background:#B8CCE4;mso-background-themecolor:  accent1;mso-background-themetint:102;padding:0cm 5.4pt 0cm 5.4pt\'>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>1<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>2<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>3<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>4<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>5<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>6<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>7<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>8<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>9<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>10<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>11<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>12<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>13<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>14<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>15<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>16<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>17<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>18<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>19<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>20<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><spanlang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>21<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>22<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>23<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>24<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>25<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>26<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>27<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>28<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>29<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>30<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>31<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>32<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>33<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>34<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>35<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>36<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>37<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>38<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>39<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>40<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>41<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>42<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>43<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>44<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>45<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>46<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>47<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>48<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>49<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>50<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>51<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>52<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>53<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>54<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>55<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>56<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>57<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>58<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>59<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:  \"微軟正黑體\",\"sans-serif\"\'>60<o:p></o:p></span></b></p>  </td>  <td width=503 valign=top style=\'width:377.25pt;border:solid windowtext 1.0pt;  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt\'>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:#9BBB59;mso-themecolor:accent3\'>// circle.cpp<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:#9BBB59;mso-themecolor:accent3\'>// Circle class member-function  definitions.<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:maroon\'>#include &lt;<span class=SpellE>iostream</span>&gt;<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:maroon\'>&nbsp;<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:maroon\'>using <span class=SpellE>std</span>::<span class=SpellE>cout</span>;<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:#9BBB59;mso-themecolor:accent3\'>//</span></b><b style=\'mso-bidi-font-weight:  normal\'><span lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:maroon\'> </span></b><b style=\'mso-bidi-font-weight:normal\'><span  style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";color:#404040;  mso-themecolor:text1;mso-themetint:191;mso-style-textfill-fill-color:#404040;  mso-style-textfill-fill-themecolor:text1;mso-style-textfill-fill-alpha:100.0%;  mso-style-textfill-fill-colortransforms:\"lumm=75000 lumo=25000\";background:  yellow\'>使用類別<span lang=EN-US>circle</span>的標頭檔</span></b><b style=\'mso-bidi-font-weight:  normal\'><span lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:maroon\'><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:maroon\'>#include &quot;<span class=SpellE>circle.h</span>&quot;&nbsp;&nbsp;  </span></b><b style=\'mso-bidi-font-weight:normal\'><span lang=EN-US  style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";color:#9BBB59;  mso-themecolor:accent3\'>// Circle class definition</span></b><b  style=\'mso-bidi-font-weight:normal\'><span lang=EN-US style=\'font-size:10.0pt;  font-family:\"微軟正黑體\",\"sans-serif\";color:maroon\'><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:maroon\'><span style=\'mso-spacerun:yes\'>&nbsp;</span><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:#9BBB59;mso-themecolor:accent3\'>// default constructor<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:maroon\'>Circle::Circle( <span class=SpellE>int</span> <span  class=SpellE>xValue</span>, <span class=SpellE>int</span> <span class=SpellE>yValue</span>,  double <span class=SpellE>radiusValue</span> )<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:maroon\'>{ <o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:maroon\'><span style=\'mso-spacerun:yes\'>&nbsp;&nbsp;&nbsp;&nbsp;  </span>x = <span class=SpellE>xValue</span>;<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:maroon\'><span style=\'mso-spacerun:yes\'>&nbsp; </span><span  style=\'mso-spacerun:yes\'>&nbsp;&nbsp;&nbsp;</span>y = <span class=SpellE>yValue</span>;<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:maroon\'><span style=\'mso-spacerun:yes\'>&nbsp;&nbsp;&nbsp;&nbsp; </span><span  class=SpellE>setRadius</span>( <span class=SpellE>radiusValue</span> );<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:maroon\'>} </span></b><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:#9BBB59;mso-themecolor:accent3\'>// end Circle constructor</span></b><b  style=\'mso-bidi-font-weight:normal\'><span lang=EN-US style=\'font-size:10.0pt;  font-family:\"微軟正黑體\",\"sans-serif\";color:maroon\'><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:maroon\'><o:p>&nbsp;</o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:#9BBB59;mso-themecolor:accent3\'>// set radius<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:maroon\'>void Circle::<span class=SpellE>setRadius</span>( double <span  class=SpellE>radiusValue</span> )<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:maroon\'>{<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:maroon\'><span style=\'mso-spacerun:yes\'>&nbsp;&nbsp;&nbsp;&nbsp;  </span>radius = ( <span class=SpellE>radiusValue</span> &lt; 0.0 ? 0.0 : <span  class=SpellE>radiusValue</span> );<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:maroon\'><o:p>&nbsp;</o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:maroon\'>} </span></b><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:#9BBB59;mso-themecolor:accent3\'>// end function <span class=SpellE>setRadius</span></span></b><b  style=\'mso-bidi-font-weight:normal\'><span lang=EN-US style=\'font-size:10.0pt;  font-family:\"微軟正黑體\",\"sans-serif\";color:maroon\'><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:maroon\'><o:p>&nbsp;</o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:#9BBB59;mso-themecolor:accent3\'>// return radius<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:maroon\'>double Circle::<span class=SpellE>getRadius</span>() <span  class=SpellE>const</span><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:maroon\'>{<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:maroon\'><span style=\'mso-spacerun:yes\'>&nbsp;&nbsp;&nbsp;&nbsp;  </span>return radius;<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:maroon\'><o:p>&nbsp;</o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:maroon\'>} </span></b><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:#9BBB59;mso-themecolor:accent3\'>// end function <span class=SpellE>getRadius</span></span></b><b  style=\'mso-bidi-font-weight:normal\'><span lang=EN-US style=\'font-size:10.0pt;  font-family:\"微軟正黑體\",\"sans-serif\";color:maroon\'><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:maroon\'><o:p>&nbsp;</o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:#9BBB59;mso-themecolor:accent3\'>// calculate and return diameter</span></b><b  style=\'mso-bidi-font-weight:normal\'><span lang=EN-US style=\'font-size:10.0pt;  font-family:\"微軟正黑體\",\"sans-serif\";color:maroon\'><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:maroon\'>double Circle::<span class=SpellE>getDiameter</span>() <span  class=SpellE>const</span><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:maroon\'>{<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:maroon\'><span style=\'mso-spacerun:yes\'>&nbsp;&nbsp;&nbsp;&nbsp;  </span>return 2 * radius;<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:maroon\'><o:p>&nbsp;</o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:maroon\'>} </span></b><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:#9BBB59;mso-themecolor:accent3\'>// end function <span class=SpellE>getDiameter</span></span></b><b  style=\'mso-bidi-font-weight:normal\'><span lang=EN-US style=\'font-size:10.0pt;  font-family:\"微軟正黑體\",\"sans-serif\";color:maroon\'><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:maroon\'><o:p>&nbsp;</o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:#9BBB59;mso-themecolor:accent3\'>// calculate and return circumference<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:maroon\'>double Circle::<span class=SpellE>getCircumference</span>() <span  class=SpellE>const</span><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:maroon\'>{<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:maroon\'><span style=\'mso-spacerun:yes\'>&nbsp;&nbsp;&nbsp;&nbsp;  </span>return 3.14159 * <span class=SpellE>getDiameter</span>();<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:maroon\'><o:p>&nbsp;</o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:maroon\'>} </span></b><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:#9BBB59;mso-themecolor:accent3\'>// end function <span class=SpellE>getCircumference</span></span></b><b  style=\'mso-bidi-font-weight:normal\'><span lang=EN-US style=\'font-size:10.0pt;  font-family:\"微軟正黑體\",\"sans-serif\";color:maroon\'><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:maroon\'><o:p>&nbsp;</o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:#9BBB59;mso-themecolor:accent3\'>// calculate and return area<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:maroon\'>double Circle::<span class=SpellE>getArea</span>() <span  class=SpellE>const</span><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:maroon\'>{<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:maroon\'><span style=\'mso-spacerun:yes\'>&nbsp;&nbsp;&nbsp;&nbsp;  </span>return 3.14159 * radius * radius;<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:maroon\'><o:p>&nbsp;</o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:maroon\'>} </span></b><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:#9BBB59;mso-themecolor:accent3\'>// end function <span class=SpellE>getArea</span></span></b><b  style=\'mso-bidi-font-weight:normal\'><span lang=EN-US style=\'font-size:10.0pt;  font-family:\"微軟正黑體\",\"sans-serif\";color:maroon\'><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:maroon\'><o:p>&nbsp;</o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:#9BBB59;mso-themecolor:accent3\'>// output Circle object<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:maroon\'>void Circle::print() <span class=SpellE>const</span><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:maroon\'>{<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:maroon\'><span style=\'mso-spacerun:yes\'>&nbsp;&nbsp;&nbsp;&nbsp; </span><span  class=SpellE>cout</span> &lt;&lt; &quot;Center = [&quot; &lt;&lt; x &lt;&lt;  &quot;, &quot; &lt;&lt; y &lt;&lt; \']\'<o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:maroon\'><span  style=\'mso-spacerun:yes\'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  </span>&lt;&lt; &quot;; Radius = &quot; &lt;&lt; radius; <o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:#404040;mso-themecolor:text1;mso-themetint:191;mso-style-textfill-fill-color:  #404040;mso-style-textfill-fill-themecolor:text1;mso-style-textfill-fill-alpha:  100.0%;mso-style-textfill-fill-colortransforms:\"lumm=75000 lumo=25000\"\'><span  style=\'mso-spacerun:yes\'>&nbsp;&nbsp;&nbsp;&nbsp; </span></span></b><b  style=\'mso-bidi-font-weight:normal\'><span lang=EN-US style=\'font-size:10.0pt;  font-family:\"微軟正黑體\",\"sans-serif\";color:#9BBB59;mso-themecolor:accent3\'>//</span></b><b  style=\'mso-bidi-font-weight:normal\'><span style=\'font-size:10.0pt;font-family:  \"微軟正黑體\",\"sans-serif\";color:#404040;mso-themecolor:text1;mso-themetint:191;  mso-style-textfill-fill-color:#404040;mso-style-textfill-fill-themecolor:  text1;mso-style-textfill-fill-alpha:100.0%;mso-style-textfill-fill-colortransforms:  \"lumm=75000 lumo=25000\";background:yellow;mso-highlight:yellow\'>基礎類別中的保留區成員“<span  lang=EN-US>x</span>”、“<span lang=EN-US>y</span>”，可讓衍生類別的成員函數存取。</span></b><b  style=\'mso-bidi-font-weight:normal\'><span lang=EN-US style=\'font-size:10.0pt;  font-family:\"微軟正黑體\",\"sans-serif\";color:#404040;mso-themecolor:text1;  mso-themetint:191;mso-style-textfill-fill-color:#404040;mso-style-textfill-fill-themecolor:  text1;mso-style-textfill-fill-alpha:100.0%;mso-style-textfill-fill-colortransforms:  \"lumm=75000 lumo=25000\"\'><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:#404040;mso-themecolor:text1;mso-themetint:191;mso-style-textfill-fill-color:  #404040;mso-style-textfill-fill-themecolor:text1;mso-style-textfill-fill-alpha:  100.0%;mso-style-textfill-fill-colortransforms:\"lumm=75000 lumo=25000\"\'><span  style=\'mso-spacerun:yes\'>&nbsp;&nbsp;&nbsp;&nbsp; </span></span></b><b  style=\'mso-bidi-font-weight:normal\'><span lang=EN-US style=\'font-size:10.0pt;  font-family:\"微軟正黑體\",\"sans-serif\";color:#9BBB59;mso-themecolor:accent3\'>//</span></b><b  style=\'mso-bidi-font-weight:normal\'><span style=\'font-size:10.0pt;font-family:  \"微軟正黑體\",\"sans-serif\";color:#404040;mso-themecolor:text1;mso-themetint:191;  mso-style-textfill-fill-color:#404040;mso-style-textfill-fill-themecolor:  text1;mso-style-textfill-fill-alpha:100.0%;mso-style-textfill-fill-colortransforms:  \"lumm=75000 lumo=25000\";background:yellow;mso-highlight:yellow\'>若“<span  lang=EN-US>x</span>”、“<span lang=EN-US>y</span>”宣告為私有區成員，衍生類別<span  lang=EN-US>Circle</span>就存取<span class=GramE>不</span>到了。</span></b><b  style=\'mso-bidi-font-weight:normal\'><span lang=EN-US style=\'font-size:10.0pt;  font-family:\"微軟正黑體\",\"sans-serif\";color:#404040;mso-themecolor:text1;  mso-themetint:191;mso-style-textfill-fill-color:#404040;mso-style-textfill-fill-themecolor:  text1;mso-style-textfill-fill-alpha:100.0%;mso-style-textfill-fill-colortransforms:  \"lumm=75000 lumo=25000\";background:yellow\'><o:p></o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:maroon\'><o:p>&nbsp;</o:p></span></b></p>  <p class=MsoNoSpacing><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:maroon\'>} </span></b><b style=\'mso-bidi-font-weight:normal\'><span  lang=EN-US style=\'font-size:10.0pt;font-family:\"微軟正黑體\",\"sans-serif\";  color:#9BBB59;mso-themecolor:accent3\'>// end function print</span></b><b  style=\'mso-bidi-font-weight:normal\'><span lang=EN-US style=\'font-size:10.0pt;  font-family:\"微軟正黑體\",\"sans-serif\";color:maroon\'> <o:p></o:p></span></b></p>  </td> </tr></table></div>';


		
		
		
		$.post("SQL_pre_page.php", {sql:page },	function (msg){	}  );
		page=page-1;		
	break;
	
	default:

	alert("您已經在第一頁了。");

 
 } //end of switch
} // end of function Previous_Page( )


//重播功能
function RePlay_mp3()
{
	switch(page)
	{
		case 2:
			document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P2_0.mp3&javascript=on  &amp;autostart=1" /><param name="wmode" value="transparent" /></object>';	
		
			$.post("SQL_Replay_mp3.php", {	sql:page },
					function (msg){  }
				);
				
		break;
		
		case 3:
			document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P2_1.mp3&javascript=on  &amp;autostart=1" /><param name="wmode" value="transparent" /></object>';	
			$.post("SQL_Replay_mp3.php", {	sql:page },
					function (msg){  }
				);
			
		break;
		
		case 4:
			document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P2_2.mp3&javascript=on  &amp;autostart=1" /><param name="wmode" value="transparent" /></object>';	
			$.post("SQL_Replay_mp3.php", {	sql:page },
					function (msg){  }
				);
		break;
		
		case 5:
			document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P2_3.mp3&javascript=on  &amp;autostart=1" /><param name="wmode" value="transparent" /></object>';	
			$.post("SQL_Replay_mp3.php", {	sql:page },
					function (msg){  }
				);
		break;
		
		case 6:
			document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P2_4.mp3&javascript=on  &amp;autostart=1" /><param name="wmode" value="transparent" /></object>';	
			$.post("SQL_Replay_mp3.php", {	sql:page },
					function (msg){  }
				);		
		break;
		
		case 7:
			document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P3_0.mp3&javascript=on  &amp;autostart=1" /><param name="wmode" value="transparent" /></object>';	
			$.post("SQL_Replay_mp3.php", {	sql:page },
					function (msg){  }
				);		
		break;
		
		case 8:
			document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P3_1.mp3&javascript=on  &amp;autostart=1" /><param name="wmode" value="transparent" /></object>';	
			$.post("SQL_Replay_mp3.php", {	sql:page },
					function (msg){  }
				);		
		break;
		
		case 9:
			document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P3_2.mp3&javascript=on  &amp;autostart=1" /><param name="wmode" value="transparent" /></object>';	
			$.post("SQL_Replay_mp3.php", {	sql:page },
					function (msg){  }
				);		
		break;
		
		case 10:
			document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P3_3.mp3&javascript=on  &amp;autostart=1" /><param name="wmode" value="transparent" /></object>';	
			$.post("SQL_Replay_mp3.php", {	sql:page },
					function (msg){  }
				);		
		break;
		
		case 11:
			document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P3_4.mp3&javascript=on  &amp;autostart=1" /><param name="wmode" value="transparent" /></object>';	
			$.post("SQL_Replay_mp3.php", {	sql:page },
					function (msg){  }
				);		
		break;
		
		case 12:
			document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P3_5.mp3&javascript=on  &amp;autostart=1" /><param name="wmode" value="transparent" /></object>';	
			$.post("SQL_Replay_mp3.php", {	sql:page },
					function (msg){  }
				);		
		break;
		
		case 13:
			document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P3_6.mp3&javascript=on  &amp;autostart=1" /><param name="wmode" value="transparent" /></object>';	
			$.post("SQL_Replay_mp3.php", {	sql:page },
					function (msg){  }
				);		
		break;
		
		case 14:
			document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P3_7.mp3&javascript=on  &amp;autostart=1" /><param name="wmode" value="transparent" /></object>';	
			$.post("SQL_Replay_mp3.php", {	sql:page },
					function (msg){  }
				);		
		break;
		
		case 15:
			document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P4_0.mp3&javascript=on  &amp;autostart=1" /><param name="wmode" value="transparent" /></object>';	
			$.post("SQL_Replay_mp3.php", {	sql:page },
					function (msg){  }
				);		
		break;
		
		case 16:
			document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P4_1.mp3&javascript=on  &amp;autostart=1" /><param name="wmode" value="transparent" /></object>';	
			$.post("SQL_Replay_mp3.php", {	sql:page },
					function (msg){  }
				);		
		break;
		
		case 17:
			document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P4_2.mp3&javascript=on  &amp;autostart=1" /><param name="wmode" value="transparent" /></object>';	
			$.post("SQL_Replay_mp3.php", {	sql:page },
					function (msg){  }
				);		
		break;
		
		case 18:
			document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P4_3.mp3&javascript=on  &amp;autostart=1" /><param name="wmode" value="transparent" /></object>';	
			$.post("SQL_Replay_mp3.php", {	sql:page },
					function (msg){  }
				);		
		break;
		
		case 19:
			document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P4_4.mp3&javascript=on  &amp;autostart=1" /><param name="wmode" value="transparent" /></object>';	
			$.post("SQL_Replay_mp3.php", {	sql:page },
					function (msg){  }
				);		
		break;
		
		case 20:
			document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P4_5.mp3&javascript=on  &amp;autostart=1" /><param name="wmode" value="transparent" /></object>';	
			$.post("SQL_Replay_mp3.php", {	sql:page },
					function (msg){  }
				);		
		break;
		
		case 21:
			document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P5_0.mp3&javascript=on  &amp;autostart=1" /><param name="wmode" value="transparent" /></object>';	
			$.post("SQL_Replay_mp3.php", {	sql:page },
					function (msg){  }
				);		
		break;
		
		case 22:
			document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P5_1.mp3&javascript=on  &amp;autostart=1" /><param name="wmode" value="transparent" /></object>';	
			$.post("SQL_Replay_mp3.php", {	sql:page },
					function (msg){  }
				);		
		break;
		
		case 23:
			document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P5_2.mp3&javascript=on  &amp;autostart=1" /><param name="wmode" value="transparent" /></object>';	
			$.post("SQL_Replay_mp3.php", {	sql:page },
					function (msg){  }
				);		
		break;
		
		case 24:
			document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P5_3.mp3&javascript=on  &amp;autostart=1" /><param name="wmode" value="transparent" /></object>';	
			$.post("SQL_Replay_mp3.php", {	sql:page },
					function (msg){  }
				);		
		break;
		
		case 25:
			document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P5_4.mp3&javascript=on  &amp;autostart=1" /><param name="wmode" value="transparent" /></object>';	
			$.post("SQL_Replay_mp3.php", {	sql:page },
					function (msg){  }
				);		
		break;
		
		case 26:
			document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P5_5.mp3&javascript=on  &amp;autostart=1" /><param name="wmode" value="transparent" /></object>';	
			$.post("SQL_Replay_mp3.php", {	sql:page },
					function (msg){  }
				);		
		break;
		
		case 27:
			document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P5_6.mp3&javascript=on  &amp;autostart=1" /><param name="wmode" value="transparent" /></object>';	
			$.post("SQL_Replay_mp3.php", {	sql:page },
					function (msg){  }
				);		
		break;
		
		case 28:
			document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P5_7.mp3&javascript=on  &amp;autostart=1" /><param name="wmode" value="transparent" /></object>';	
			$.post("SQL_Replay_mp3.php", {	sql:page },
					function (msg){  }
				);		
		break;
//----------------------------------------------------------------------------------------------------- [ 繼承] -----------------------------------------------------------------------------------------------------------
		case 30:  //P6_1
			document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P6_1.mp3&javascript=on  &amp;autostart=1" /><param name="wmode" value="transparent" /></object>';	
			$.post("SQL_Replay_mp3.php", {	sql:page },	function (msg){  }	);		
		break;

		case 31:  //P6_2
			document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P6_2.mp3&javascript=on  &amp;autostart=1" /><param name="wmode" value="transparent" /></object>';	
			$.post("SQL_Replay_mp3.php", {	sql:page },	function (msg){  }	);		
		break;		

		case 32:  //P6_3
			document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P6_3.mp3&javascript=on  &amp;autostart=1" /><param name="wmode" value="transparent" /></object>';	
			$.post("SQL_Replay_mp3.php", {	sql:page },	function (msg){  }	);		
		break;		

		case 33:  //P6_4
			document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P6_4.mp3&javascript=on  &amp;autostart=1" /><param name="wmode" value="transparent" /></object>';	
			$.post("SQL_Replay_mp3.php", {	sql:page },	function (msg){  }	);		
		break;		
		case 34:  //P6_5
			document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P6_5.mp3&javascript=on  &amp;autostart=1" /><param name="wmode" value="transparent" /></object>';	
			$.post("SQL_Replay_mp3.php", {	sql:page },	function (msg){  }	);		
		break;		
		case 35:  //P6_6
			document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P6_6.mp3&javascript=on  &amp;autostart=1" /><param name="wmode" value="transparent" /></object>';	
			$.post("SQL_Replay_mp3.php", {	sql:page },	function (msg){  }	);		
		break;		
		case 36:  //P6_7
			document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P6_7.mp3&javascript=on  &amp;autostart=1" /><param name="wmode" value="transparent" /></object>';	
			$.post("SQL_Replay_mp3.php", {	sql:page },	function (msg){  }	);		
		break;		
		case 37:  //P6_8
			document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P6_8.mp3&javascript=on  &amp;autostart=1" /><param name="wmode" value="transparent" /></object>';	
			$.post("SQL_Replay_mp3.php", {	sql:page },	function (msg){  }	);		
		break;		
		case 38:  //P6_9
			document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P6_9.mp3&javascript=on  &amp;autostart=1" /><param name="wmode" value="transparent" /></object>';	
			$.post("SQL_Replay_mp3.php", {	sql:page },	function (msg){  }	);		
		break;		
		case 39:  //P6_10
			document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P6_10.mp3&javascript=on  &amp;autostart=1" /><param name="wmode" value="transparent" /></object>';	
			$.post("SQL_Replay_mp3.php", {	sql:page },	function (msg){  }	);		
		break;		
		case 40:  //P6_11
			document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P6_11.mp3&javascript=on  &amp;autostart=1" /><param name="wmode" value="transparent" /></object>';	
			$.post("SQL_Replay_mp3.php", {	sql:page },	function (msg){  }	);		
		break;		
		case 41:  //P6_12
			document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P6_12.mp3&javascript=on  &amp;autostart=1" /><param name="wmode" value="transparent" /></object>';	
			$.post("SQL_Replay_mp3.php", {	sql:page },	function (msg){  }	);		
		break;		
		case 42:  //P6_13
			document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P6_13.mp3&javascript=on  &amp;autostart=1" /><param name="wmode" value="transparent" /></object>';	
			$.post("SQL_Replay_mp3.php", {	sql:page },	function (msg){  }	);		
		break;		
		case 43:  //P6_14
			document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P6_14.mp3&javascript=on  &amp;autostart=1" /><param name="wmode" value="transparent" /></object>';	
			$.post("SQL_Replay_mp3.php", {	sql:page },	function (msg){  }	);		
		break;		
		case 44:  //P6_15
			document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P6_15.mp3&javascript=on  &amp;autostart=1" /><param name="wmode" value="transparent" /></object>';	
			$.post("SQL_Replay_mp3.php", {	sql:page },	function (msg){  }	);		
		break;		
		case 45:  //P6_16
			document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P6_16.mp3&javascript=on  &amp;autostart=1" /><param name="wmode" value="transparent" /></object>';	
			$.post("SQL_Replay_mp3.php", {	sql:page },	function (msg){  }	);		
		break;		
		case 46:  //P6_17
			document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P6_17.mp3&javascript=on  &amp;autostart=1" /><param name="wmode" value="transparent" /></object>';	
			$.post("SQL_Replay_mp3.php", {	sql:page },	function (msg){  }	);		
		break;		
		case 47:  //P6_18
			document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P6_18.mp3&javascript=on  &amp;autostart=1" /><param name="wmode" value="transparent" /></object>';	
			$.post("SQL_Replay_mp3.php", {	sql:page },	function (msg){  }	);		
		break;		
		case 48:  //P6_19
			document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P6_19.mp3&javascript=on  &amp;autostart=1" /><param name="wmode" value="transparent" /></object>';	
			$.post("SQL_Replay_mp3.php", {	sql:page },	function (msg){  }	);		
		break;		
		case 49:  //P6_20
			document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P6_20.mp3&javascript=on  &amp;autostart=1" /><param name="wmode" value="transparent" /></object>';	
			$.post("SQL_Replay_mp3.php", {	sql:page },	function (msg){  }	);		
		break;		
		case 50:  //P6_21
			document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P6_21.mp3&javascript=on  &amp;autostart=1" /><param name="wmode" value="transparent" /></object>';	
			$.post("SQL_Replay_mp3.php", {	sql:page },	function (msg){  }	);		
		break;		
		case 51:  //P6_22
			document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P6_22.mp3&javascript=on  &amp;autostart=1" /><param name="wmode" value="transparent" /></object>';	
			$.post("SQL_Replay_mp3.php", {	sql:page },	function (msg){  }	);		
		break;		
		case 52:  //P6_23
			document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P6_23.mp3&javascript=on  &amp;autostart=1" /><param name="wmode" value="transparent" /></object>';	
			$.post("SQL_Replay_mp3.php", {	sql:page },	function (msg){  }	);		
		break;		
		case 53:  //P6_24
			document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P6_24.mp3&javascript=on  &amp;autostart=1" /><param name="wmode" value="transparent" /></object>';	
			$.post("SQL_Replay_mp3.php", {	sql:page },	function (msg){  }	);		
		break;		
		case 54:  //P6_25
			document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P6_25.mp3&javascript=on  &amp;autostart=1" /><param name="wmode" value="transparent" /></object>';	
			$.post("SQL_Replay_mp3.php", {	sql:page },	function (msg){  }	);		
		break;		
		case 55:  //P6_26
			document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P6_26.mp3&javascript=on  &amp;autostart=1" /><param name="wmode" value="transparent" /></object>';	
			$.post("SQL_Replay_mp3.php", {	sql:page },	function (msg){  }	);		
		break;		
		case 56:  //P6_27
			document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P6_27.mp3&javascript=on  &amp;autostart=1" /><param name="wmode" value="transparent" /></object>';	
			$.post("SQL_Replay_mp3.php", {	sql:page },	function (msg){  }	);		
		break;		
		case 57:  //P7
			document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P7.mp3&javascript=on  &amp;autostart=1" /><param name="wmode" value="transparent" /></object>';	
			$.post("SQL_Replay_mp3.php", {	sql:page },	function (msg){  }	);		
		break;	
		case 58:  //P7
			document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P7.mp3&javascript=on  &amp;autostart=1" /><param name="wmode" value="transparent" /></object>';	
			$.post("SQL_Replay_mp3.php", {	sql:page },	function (msg){  }	);		
		break;	
		case 59:  //P7
			document.getElementById('flash_mp3').innerHTML='<object data="dewplayer.swf" width="10" height="1" name="dewplayer" id="dewplayerjs" type="application/x-shockwave-flash"><param name="movie" value="dewplayer.swf" /><param name="flashvars" value="mp3=mp/P7.mp3&javascript=on  &amp;autostart=1" /><param name="wmode" value="transparent" /></object>';	
			$.post("SQL_Replay_mp3.php", {	sql:page },	function (msg){  }	);		
		break;			
		
	}
	
} 
 
 

 function Button_enable()
 {
	document.getElementById('Replay').disabled='';
    document.getElementById('Next').disabled='';		

 }
 
 function Button_disable()
 {
	document.getElementById('Replay').disabled='disabled';
    document.getElementById('Next').disabled='disabled';		

 }
 
 
  /*
 function testt(){
 alert("DDD");
 }
 
 function send_query()
 {

 $.post("aj.php",
		  {	
			sql:query	   
				   		   
		  },
		  function (msg){

		  alert(msg);
			  });
	//alert();
 }
 */
 
 
 </script>




</body>



