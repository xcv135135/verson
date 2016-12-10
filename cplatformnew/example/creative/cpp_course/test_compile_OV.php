<?php 
require_once("configs/config.php");

//include 'func_Error_Analysis.php';

include("func_Error_Analysis.php");
	

	$hint_level = $_SESSION['hint'];
	//echo "<font color='red'> SESSION['hint']=" . $_SESSION['hint'] . "<br>  </font>";



	$show_note_tag = false ;   // 要不要show 註解





  	date_default_timezone_set('Asia/Taipei');
    $current_time = date("Y-m-d H:i:s");                 // 2001-03-10 17:16:18 (the MySQL DATETIME format)

	

	$code_str = $_POST["code_str"];   //將textarea 原始碼，POST過來	
	$name = $_SESSION['username'];     //$name;  //根據session的使用者，存在使用者各自的檔案夾
	$input = $_POST['std_in'];





	// [程式碼前處理]
	while( 	preg_match('/(.*)[Cc][Ss][Tt][Dd][Ll][Ii][Bb](.*)/', $code_str ,  $match_pattern )   ){
	echo "系統目前不支援 C標準函數庫 ，系統會自動忽略。<br>";
	$code_str = preg_replace("/(.*)[Cc][Ss][Tt][Dd][Ll][Ii][Bb](.*)/","",$code_str);

	}	
	// 將原始碼 消除掉 system("XXXX") 有可能造成server關機等指令		
	while( 	preg_match('/[Ss][Yy][Ss][Tt][Ee][Mm]\((.*)\)/', $code_str ,  $match_pattern )   ){
		//echo $match_pattern[0];
		$code_str = preg_replace("/[Ss][Yy][Ss][Tt][Ee][Mm]\((.*)\)/","",$code_str);

	}
	/*
	echo "pre<pre>";
	echo $code_str;
	echo "</pre>";
	*/
	
	// 消除掉這種東西→ #ifndef ACCOUNT_H
	// 消除掉這種東西→ #define ACCOUNT_H
	// 消除掉這種東西→ #endif
	// 消除掉這種東西→ #else
	$code_str = preg_replace("/#ifndef *\S*\n/"," \n",$code_str);
	$code_str = preg_replace("/#define *\S*\n/"," \n",$code_str);
	$code_str = preg_replace("/#endif *\S*\n/"," \n",$code_str);
	$code_str = preg_replace("/#else *\S*\n/"," \n",$code_str);
		
	/*
	echo "<br><br>after<pre>";
	echo "<textarea cols=50 rows=40>".$code_str."</textarea>";
	echo "</pre>";	
	*/
//	echo preg_replace ("/<iostream>/","&lt;iostream&gt;",$Source_Code);


	//if file does not exists, then make dir
	$cpp_file_dir = "user\\".$name."\\" ;

	if( !is_dir( $cpp_file_dir ) ){
		//system("mkdir(user\\". $name . "777)" );
		mkdir( $cpp_file_dir , 777 , TRUE);
	}



	//將POST過來的內容，存成cpp	
	$filename_cpp = $cpp_file_dir .'\\'. $name.".cpp";  //定義user.cpp的路徑


	$handle_cpp = fopen($filename_cpp,"w");	  //fopen it
	$utf8_with_bom = chr(0XEF) . chr(0XBB) . chr(0XBF) . $code_str;
	fwrite($handle_cpp,$utf8_with_bom);     //fwrite寫入
	fclose($handle_cpp); //關閉test.cpp	



	create_bat_for_cl( $cpp_file_dir , $name ); //呼叫這個函數，動態建立bat檔
	
	//執行cp.bat 就會對程式進行編譯
	$cmd_compile = dirname(__FILE__) ."\\". $cpp_file_dir .'\\cp.bat';
	
	


	$str_compile_msg=  iconv("big5","UTF-8", shell_exec( $cmd_compile  ) );
	/*
	echo "<pre>";
	echo  $str_compile_msg ;
	echo "</pre>";
*/
	$cp_success;  //若編譯成功為1，不成功則為0

	//如果編譯成功，執行這裡
	if( preg_match('/\/out:'.$name.'\.exe/' , $str_compile_msg , $out) != Null ){
//	if( file_exists( "user\\".$name.'\\'.$name.'.exe') ){
	

		$time_before = time();


		$str_correct_output = mb_convert_encoding(  shell_exec("echo ". $input ."|". $cpp_file_dir ."\\".$name.".exe" ), "UTF-8", "big5");


	
		$time_after = time();




		$cp_success = 1;  // 若編譯成功，為1
		
			
		// 防止學生輸入了「編譯正確」但出現「無窮迴圈」的情形
		if(	($time_after - $time_before) >= 5){
			echo "您的程式碼可正確編譯，但是執行時間超出預期！";
			echo "您的程式可能具有 無窮迴圈，導致執行無法終止！ 請確認並修改您的程式執行流程。";
			$str_correct_output = '無窮迴圈 --Error--';
		}
		else{	// 一般編譯正確的情形



			echo "<div class='alert alert-info'>編譯成功，輸出結果:<br> ". nl2br( $str_correct_output ) ."<br></div>";

			
			
		} 



 
		$error_line = 0 ;
		$error_code = 0;
		$Error_for_Hint = 0;
		if ($str_correct_output == "")
			$str_compile_msg="";
		else
			$str_compile_msg = $str_correct_output;


		$sth = $db->prepare("INSERT INTO collection_submit_code (user_id, ques, code ,input , compile_info, error_line, error_code, compile_result ,hint ,ov_fb_code ,time) VALUES (:user_id, :ques, :code, :input, :compile_info, :error_line, :error_code, :compile_result, :hint, :ov_fb_code ,:time)");
		$sth->bindParam(':user_id', $_SESSION['id'] );
		$sth->bindParam(':ques', $_SESSION['Ques_id'] );	
		$sth->bindParam(':code', $code_str );
		$sth->bindParam(':input', $input  );
		$sth->bindParam(':compile_info', $cp_success  );
		$sth->bindParam(':error_line', $error_line  );
		$sth->bindParam(':error_code', $error_code  );
		$sth->bindParam(':compile_result', $str_compile_msg );
		$sth->bindParam(':hint', $_SESSION['hint'] );

		$sth->bindParam(':ov_fb_code', $Error_for_Hint );
		$sth->bindParam(':time',  $current_time   );

		$sth->execute();


		//$temp_id =  $db->lastInsertId();

		


		


		$_SESSION['hint']  = 0;



	}
	else{   //如果編譯失敗，執行這裡
		
		$cp_success = 0;

/*
		// 對原始編譯錯誤資訊做前處理，刪除掉不必要的資訊

		$str_compile_msg = str_replace('C:\xampp\htdocs\cpp_course>cd C:\Windows\System32',"",$str_compile_msg);
		$str_compile_msg = str_replace('C:\Windows\System32>call "C:\Program Files (x86)\Microsoft Visual Studio 12.0\VC\vcvarsall.bat"',"",$str_compile_msg);
	*/

		$str_compile_msg = replace_first( $name.".cpp" , "" , $str_compile_msg );


		$error_content_array = array();
		$error_content_array  = explode( $name , $str_compile_msg);


		$error_line = 0;

		$output_str = "";



		$first_error_line ="";
		$first_error_content ="";
		$first_match_error_code = "";


		for( $i=1 ; $i < count($error_content_array) ; $i++ ){


			if( strpos(  $error_content_array[$i] , "warning" ) > 0 ){

				preg_match_all('/warning C(\d+):\s([^>]*)/',$error_content_array[$i],$match );
				$match_error_code = $match[1][0];
				$match_error_content =  "warning: " . $match[2][0] ;

				$output_str .= "warning:"  ;

			}
			elseif( strpos(  $error_content_array[$i] , "error" ) > 0  ){

				//從編譯錯誤資訊裡，抓取「所有的」錯誤資訊的"錯誤位置(第幾行)"	
				preg_match_all('/\.cpp\((\d+)\)/',$error_content_array[$i] , $match_error_line ) ;
				$error_line = $match_error_line[1][0];
				$output_str .= "error Line:". $error_line ."<br>" ;


				preg_match_all('/error C(\d+):\s([^>]*)/',$error_content_array[$i], $match );
				$match_error_code = $match[1][0];
				$match_error_content =  $match[2][0] ;


				if( $first_error_line=="" && $first_error_content=="" && $first_match_error_code=="" ){

					$first_error_line = $error_line;
					$first_match_error_code = "C" . $match_error_code ; 
					$first_error_content = $match[2][0];
				}
			}


			$output_str .= "C$match_error_code : $match_error_content <br>";
		}
		






// --------> 執行錯誤分析函式，回傳值即為欲進行回饋的「錯誤編號」<------------------------------
// --------> 函式在func_Error_Analysis.php裡，需要include <-------------------------------------

		$Error_for_Hint = Error_Analysis( $str_compile_msg , $first_match_error_code , $code_str );

// ------------------------------------------------------------------------------------------


		//echo "last_error_code:" . $_SESSION['last_error_code'] . "  current:"  .$first_match_error_code . "   match_OV_code:".$Error_for_Hint . "<br>"; 






		
	


		// 檢測該「錯誤編號」應該執行第幾個 Hint 等級
		if(	$Error_for_Hint == 'C0000'	||   preg_match("/C\d\d\d\d_NG/",$Error_for_Hint)!=Null		)   // 此Case表示該錯誤沒有存在於系統中
		{
			$Hint = 100;
			//mysql_query("UPDATE user_hint_list SET HintChangeTo = 0 WHERE username ='".$_SESSION['member_id']."' ");
		}
		else if($Error_for_Hint == 'W4819')
		{
			$Hint = 4819;  //程式碼不允許輸入中文，若有中文的話VC編譯器會出現W4819
		}
		else
		{

			if( $_SESSION['last_error_code'] != $first_match_error_code )
				$_SESSION['hint'] = 0;
			

			$Hint = $_SESSION['hint'];
		}





		// 從資料庫中抓取該「錯誤編號」應為何種「錯誤類型」，Hint 0 要用的
		$sql = "SELECT * FROM error_feedback WHERE error_code = :error_code";
		$rs1 = $db->prepare($sql,array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
		$rs1 -> bindParam(':error_code',  $Error_for_Hint );
		$rs1 -> execute();
		$row = $rs1 -> fetch();
		$Error_type =  $row['ch_explain'];


		switch( $Hint )	// 對應 CheckHint() 之結果
		{
			case 4819:
			{
				echo "很抱歉，系統不支援「中文字」或「全型字元」的程式碼輸入。<br>";
				break;
			}
		
			case 0:   // Hint 0 的時候應給的回饋
			{

				if( $show_note_tag   )
			    	echo "[Case Hint 0] <font color=gray>// 正式實驗再註解掉這列</font><br>";	
		
				
				echo "您輸入的程式碼不正確！錯誤位置於 第 <font color='red'>  $first_error_line  </font> 行。<br>";
				echo "錯誤類型為：「 <b> $Error_type </b> 」。<br>";
				
							
				break;
			}

			case 1:   // Hint 1  --->  Level 1 的回饋
			{
				if( $show_note_tag   )
				echo "[Case Hint 1 -> Level 1 (類比模式)]<font color=gray>// 正式實驗再註解掉這列</font><br>";
			

				// 告知錯誤第幾行
				echo "您輸入的程式碼不正確！錯誤位置於 第 <font color='red'>  $first_error_line  </font> 行。<br>";
				echo "錯誤類型為：「 <b> $Error_type </b> 」。<br>";
				echo "以下這些例子將可能發生您遇到的錯誤，請參考以下範例並且回答下面問題。<br>";


				if($row[3]!=Null){
					echo "sample #1<table border='1' ><tr valign='top'><td><pre>".$row[3]."</pre></td></tr></table>";
				}
				if($row[4]!=Null){
					echo "sample #2<table border='1' ><tr valign='top'><td><pre>".$row[4]."</pre></td></tr></table>";
				}
				if($row[5]!=Null){
					echo "sample #3<table border='1' ><tr valign='top'><td><pre>".$row[5]."</pre></td></tr></table>";
				}
				
				if($row[3]!=Null && $row[4]!=Null && $row[5]!=Null)
				{
					//echo "空";
				}
				// 原始編譯器資訊
				//echo '<br><br><br><hr><br>若本系統提供的回饋無法解決您的問題，請參考以下 Visual Studio C++ 編譯器的原始錯誤資訊。<table border=1 bgcolor="#CCFFCC"> <td>'.preg_replace ("/\n/","<br>",$str_compile_msg).'<br></td></table><br><hr>';			
			
				break;
			}
			
			case 2:   // Hint 2  --->  Level 2 的回饋
			{
				if( $show_note_tag   )
				echo "[Case Hint 2 -> Level 2 (對比模式)]<font color=gray>// 正式實驗再註解掉這列</font><br>";
				

				// 告知錯誤第幾行
				echo "您輸入的程式碼不正確！錯誤位置於 第 <font color='red'>  $first_error_line  </font> 行。<br>";		
				echo "錯誤類型為：「 <b> $Error_type </b> 」。<br>";
		
				echo "糾正錯誤的關鍵屬性：<br>";
				
				if($row[6]!=Null){
				echo "sample #1<table border='1' ><tr valign='top'><td><pre>".$row[6]."</pre></td></tr></table>";
				}
				if($row[7]!=Null){
				echo "sample #2<table border='1' ><tr valign='top'><td><pre>".$row[7]."</pre></td></tr></table>";
				}
				if($row[8]!=Null){
				echo "sample #3<table border='1' ><tr valign='top'><td><pre>".$row[8]."</pre></td></tr></table>";
				}		
				
				if($row[6]!=Null && $row[7]!=Null && $row[8]!=Null)
				{
					//echo "空";
				}
				
				// 原始編譯器資訊
				//echo '<br><br><br><hr><br>若本系統提供的回饋無法解決您的問題，請參考以下 Visual Studio C++ 編譯器的原始錯誤資訊。<table border=1 bgcolor="#CCFFCC"> <td>'.preg_replace ("/\n/","<br>",$str_compile_msg).'<br></td></table><br><hr>';						
				
				break;
			}
	
			case 3:	  // Hint 3  --->  Level 3 的回饋
			{
				if( $show_note_tag   )
				echo "[Case Hint 3 -> Level 3 (區別模式)]<font color=gray>// 正式實驗再註解掉這列</font><br>";	
				
				
				// 告知錯誤第幾行
				echo "您輸入的程式碼不正確！錯誤位置於 第 <font color='red'>  $first_error_line  </font> 行。<br>";
				echo "錯誤類型為：「 <b> $Error_type </b> 」。<br>";
				
				echo "以下這些正確例子！請參考以下範例並且回答下面問題。<br>";	
				if($row[10]!=Null){
					echo "sample #1<table border='1' ><tr valign='top'><td><pre>".$row[10]."</pre></td></tr></table>";
				}
				if($row[11]!=Null){
					echo "sample #2<table border='1' ><tr valign='top'><td><pre>".$row[11]."</pre></td></tr></table>";
				}
				if($row[12]!=Null){
					echo "sample #3<table border='1' ><tr valign='top'><td><pre>".$row[12]."</pre></td></tr></table>";
				}		
				
				if($row[10]==Null && $row[11]==Null && $row[12]==Null)
				{
					//echo "空";
				}	
				// 原始編譯器資訊
				//echo '<br><br><br><hr><br>若本系統提供的回饋無法解決您的問題，請參考以下 Visual Studio C++ 編譯器的原始錯誤資訊。<table border=1 bgcolor="#CCFFCC"> <td>'.preg_replace ("/\n/","<br>",$str_compile_msg).'<br></td></table><br><hr>';						
				
				break;
			}	
			
			
			case 4:	  // Hint 4  --->  Level 4 的回饋
			{

				if( $show_note_tag   )
				echo "[Case Hint 4 -> Level 4 (融合模式)]<font color=gray>// 正式實驗再註解掉這列</font><br>";	




				// 告知錯誤第幾行
				echo "您輸入的程式碼不正確！錯誤位置於 第 <font color='red'>  $first_error_line  </font> 行。<br>";
				echo "錯誤類型為：「 <b> $Error_type </b> 」。<br>";
				echo "請參考以下範例並且回答下面問題。<br>";


				if($row[13]!=Null){
					echo "sample #1<table border='1'><tr valign='top'><td><pre>".$row[13]."</pre></td></tr></table>";
				}
				if($row[14]!=Null){
					echo "sample #2<table border='1'><tr valign='top'><td><pre>".$row[14]."</pre></td></tr></table>";
				}
				if($row[15]!=Null){
					echo "sample #3<table border='1'><tr valign='top'><td><pre>".$row[15]."</pre></td></tr></table>";
				}		
				
				if($row[13]==Null && $row[14]==Null && $row[15]==Null)
				{
				//	echo "空";
				}	

				// 原始編譯器資訊
				//echo '<br><br><br><hr><br>若本系統提供的回饋無法解決您的問題，請參考以下 Visual Studio C++ 編譯器的原始錯誤資訊。<table border=1 bgcolor="#CCFFCC"> <td>'.preg_replace ("/\n/","<br>",$str_compile_msg).'<br></td></table><br><hr>';						
							
				break;
			}
			case 5:
			{
				if( $show_note_tag   )
				echo "[Case Hint 5] <font color=gray> 原始編譯器資訊   // 正式實驗再註解掉這列</font>";



				// 告知錯誤第幾行
				echo "您輸入的程式碼不正確！錯誤位置於 第 <font color='red'>$first_error_line</font> 行。<br>";
				
				// 原始編譯器資訊
				echo "<div class='alert alert-info'> 請您參考以下 Visual Studio C++ 編譯器的原始錯誤資訊。<br> $first_error_content  <br> </div>";

				
				break;
			}
			
			case 100:
			{

				if( $show_note_tag   )
				echo "[系統裡沒有這個case]<font color=gray>// 正式實驗再註解掉這列</font>";
				
				// 原始編譯器資訊

			

				echo "<div class='alert alert-info' style='height:500px; overflow:auto'> 請您參考以下 Visual Studio C++ 編譯器的原始錯誤資訊。<br> $output_str <br> </div>";

				break;
			}


		}
		echo "<br>";





		//$_SESSION['error_tag'] = true;

		$_SESSION['last_error_code']=$first_match_error_code;



		if( $Hint == 100 )
			$_SESSION['hint'] = 0;
		else{
			if( $_SESSION['hint'] >=5 )
				;
			else
				$_SESSION['hint']  = $_SESSION['hint'] + 1;
		}

		




		$error_line = $first_error_line ; 
		$error_code = $first_match_error_code;


		$sth = $db->prepare("INSERT INTO collection_submit_code (user_id, ques, code ,input , compile_info, error_line, error_code, compile_result ,hint ,ov_fb_code ,time ) VALUES ( :user_id, :ques, :code, :input, :compile_info, :error_line, :error_code, :compile_result,:hint , :ov_fb_code ,:time )");
		$sth->bindParam(':user_id', $_SESSION['id'] );
		$sth->bindParam(':ques', $_SESSION['Ques_id'] );	
		$sth->bindParam(':code', $code_str );
		$sth->bindParam(':input', $input  );
		$sth->bindParam(':compile_info', $cp_success  );
		$sth->bindParam(':error_line', $error_line  );
		$sth->bindParam(':error_code', $error_code  );
		$sth->bindParam(':compile_result', $output_str );
		$sth->bindParam(':hint', $_SESSION['hint'] );
		$sth->bindParam(':ov_fb_code', $Error_for_Hint );
		
		$sth->bindParam(':time', $current_time  );

		$sth->execute();



				
		$for_student_Qestion = "";

		//$for_student_Qestion .= '<form name="save_feedback" method="post" action="save_feedback.php">';
		$temp_id =  $db->lastInsertId();
		$for_student_Qestion .= "<textarea id='submit_code_id' name='submit_code_id' style='visibility:hidden;display:none' >$temp_id</textarea>";
		$for_student_Qestion .= "<textarea id='error_code' name='error_code' style='visibility:hidden;display:none' >$Error_for_Hint</textarea>";

		$for_student_Qestion .='<p  style="line-height:120%">回答時盡量以"程式語言名詞以及執行什麼操作導致錯誤"模式回答，例如:"在宣告類別class時忘記在右大括號後面加分號導致錯誤"</p>';

		//$for_student_Qestion .= "針對此錯誤您覺得發生的原因是什麼?";
		if( ($Hint==0) || ($Hint==1) || ($Hint==2) || ($Hint==3) || ($Hint==4) )
			$for_student_Qestion .= "針對此錯誤您覺得發生的原因是什麼?";
		else
			$for_student_Qestion .= "請參考第一個個錯誤原因以及錯誤行數，針對此錯誤您覺得發生的原因是什麼?";

		$for_student_Qestion .= '<textarea id="user_feedback_1" name="user_feedback_1" class="form-control" rows="2" placeholder="請根據問題請輸入您的想法，回答錯誤不扣分，但請不要輸入與題目無關的答案。"></textarea>';


		$for_student_Qestion .= "回答完原因後，您如何修正此錯誤?";
		$for_student_Qestion .= '<textarea id="user_feedback_2" name="user_feedback_2" class="form-control" rows="2" placeholder="請根據問題請輸入您的想法，回答錯誤不扣分，但請不要輸入與題目無關的答案"></textarea>';

		//$for_student_Qestion .= "您解決此錯誤需要用到什麼概念或敘述?";
		//$for_student_Qestion .= '<textarea id="user_feedback_3" name="user_feedback_3" class="form-control" rows="2" placeholder="依照問題請寫下您的想法，並請勿留空白"></textarea>';



		$for_student_Qestion .=  '<input type="button" class="btn btn-lg btn-primary btn-block" value="送出" onclick="submitCheck()" >';


		if(  $Hint != 4819 )  // hint 4819  屬於程式碼中有中文所以不算錯誤
			echo $for_student_Qestion;

		
		
		
	}

	








function replace_first($find, $replace, $subject) {
    // stolen from the comments at PHP.net/str_replace
    // Splits $subject into an array of 2 items by $find,
    // and then joins the array with $replace
    return implode($replace, explode($find, $subject, 2));
}











	
		
function create_bat_for_cl($cpp_file_dir , $cpp_fileName){  //根據使用者id，動態產生bat檔
/*

cd C:\MinGW
g++ hello.cpp -o hello.exe 

*/
//	$str1 = 'cd '. dirname(__FILE__) .'\user\\'.$cpp_fileName.'\\';
//	$str2 = 'g++ '.$cpp_fileName.'.cpp' . ' -o ' . $cpp_fileName.'.exe';

	/*

	if( file_exists( "user\\".$name.'\cpp_output.txt' ) ){
		unlink(  "user\\".$name.'\cpp_output.txt' );
	}
*/
	$str1 = 'cd C:\Windows\System32';
	$str2 = 'call "C:\Program Files (x86)\Microsoft Visual Studio 12.0\VC\vcvarsall.bat"';
	$str3 = 'cd '. dirname(__FILE__) ."\\". $cpp_file_dir .'\\';
	$str4 = 'cl '.$cpp_fileName.'.cpp -EHsc';


	
/*
	$str2 = 'cd '. dirname(__FILE__) .'\Microsoft Visual Studio 12.0\VC';
	$str3 = 'call vcvarsall.bat';
	$str5 = 'cd ' . dirname(__FILE__) .'\user\\'.$cpp_fileName.'\\';
	$str6 = 'cl '.$cpp_fileName.'.cpp -EHsc';
	
	//echo $str2."\r\n".$str3."\r\n".$str5."\r\n".$str6."\r\n";
*/
	$filename = dirname(__FILE__)."\\". $cpp_file_dir.'\cp.bat';
	$hendle_outpute = fopen($filename,'w');
	//fwrite($hendle_outpute, $str1."\r\n".$str2);
	fwrite($hendle_outpute, $str1."\r\n".$str2."\r\n".$str3."\r\n".$str4."\r\n");
	fclose($hendle_outpute);
}
		
		
		


?>


