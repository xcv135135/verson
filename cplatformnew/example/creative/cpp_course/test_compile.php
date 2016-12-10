<?php 
require_once("configs/config.php");

//include 'func_Error_Analysis.php';



  	date_default_timezone_set('Asia/Taipei');
    $current_time = date("Y-m-d H:i:s");                    // 2001-03-10 17:16:18 (the MySQL DATETIME format)

//編譯之前，先POST接收textarea傳來的程式碼
	//$name;  //根據session的使用者，存在使用者各自的檔案夾

	$code_str = $_POST["code_str"];   //將textarea 原始碼，POST過來	

	$name = $_SESSION['name'];
	$input = $_POST['std_in'];

	$ques = 0;
	// [程式碼前處理]
	// 將原始碼 消除掉 system("pause"); ，以防編譯後output亂碼。
	$code_str = preg_replace("/system\s*\(\s*\"[Pp][Aa][Uu][Ss][Ee]\s*\"\s*\)\s*;/","",$code_str);
		
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
	$cpp_file_dir = "user\\".$name."\\";

	if( !is_dir( $cpp_file_dir ) ){
		//system("mkdir(user\\". $name . "777)" );
		mkdir( $cpp_file_dir , 777 ,TRUE);
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
	
	//$str_compile_msg=  shell_exec( $cmd_compile );
//$str_compile_msg=  shell_exec( $cmd_compile );
	$str_compile_msg= mb_convert_encoding( shell_exec( $cmd_compile ) , "UTF-8", "big5");
	//$str_compile_msg=  iconv("big5","UTF-8",  shell_exec( $cmd_compile ) );
	


	echo "<pre>";
	echo $str_compile_msg ;
	echo "</pre>";
	


	$cp_success;  //若編譯成功為1，不成功則為0

	//如果編譯成功，執行這裡
	if( preg_match('/\/out:'.$name.'\.exe/' , $str_compile_msg , $out) != Null ){
//	if( file_exists( "user\\".$name.'\\'.$name.'.exe') ){
	

		$time_before = time();

		try{
			$str_correct_output = mb_convert_encoding(  shell_exec("echo ". $input ."|". $cpp_file_dir ."\\".$name.".exe" ), "UTF-8", "big5");
		}
		catch (Exception $e) {
    		//echo 'Caught exception: ',  $e->getMessage(), "\n";
    		echo "Time out";
		}
		
	
		$time_after = time();

		$cp_success = 1;  // 若編譯成功，為1

		
			
		// 防止學生輸入了「編譯正確」但出現「無窮迴圈」的情形
		if(	($time_after - $time_before) >= 5){
			echo "您的程式碼可正確編譯，但是執行時間超出預期！";
			echo "您的程式可能具有 無窮迴圈，導致執行無法終止！ 請確認並修改您的程式執行流程。";
			$str_correct_output = '無窮迴圈 --Error--';
		}
		else{	// 一般編譯正確的情形
			/*
			echo "<pre>";
			echo $str_correct_output ;
			echo "</pre>";*/
			//echo "<div class='alert alert-info'> 輸出內容: <br><pre>$str_correct_output</pre></div>";
			echo "<div class='alert alert-info'>編譯成功，輸出結果:<br> ". nl2br( $str_correct_output ) ."<br></div>";

		} 
		
		


		$sth = $db->prepare("INSERT INTO submit_code (user_id, qes, code ,input , compile_info, error_line, error_code, compile_result , time) VALUES ( :user_id, :qes, :code, :input, :compile_info, :error_line, :error_code, :compile_result, :time )");
		$sth->bindParam(':user_id',   $_SESSION['id']    );
		$ques = 0;
		$sth->bindParam(':qes',   $ques          );	
		$sth->bindParam(':code',      $code_str          );
		$sth->bindParam(':input',  $input      );
		$sth->bindParam(':compile_info', $cp_success       );
		$error_line = 0 ; 
		$sth->bindParam(':error_line', $error_line  );
		$error_code = 0;
		$sth->bindParam(':error_code',  $error_code   );
		$sth->bindParam(':compile_result', $str_correct_output      );
		$sth->bindParam(':time',   $current_time        );

		$sth->execute();

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

		$is_chinese_tag = false;

		for( $i=1 ; $i < count($error_content_array) ; $i++ ){
						

			if( strpos(  $error_content_array[$i] , "4819" ) ){

				
				$is_chinese_tag = true;
			}
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
				$output_str .= "error Line:". $error_line  ;

				preg_match_all('/error C(\d+):\s([^>]*)/',$error_content_array[$i], $match );
				$match_error_code = $match[1][0];
				$match_error_content =  $match[2][0] ;
			}
			


			

			




			$sth = $db->prepare("INSERT INTO submit_code (user_id, qes, code ,input , compile_info, error_line, error_code, compile_result , time) VALUES ( :user_id, :qes, :code, :input, :compile_info, :error_line, :error_code, :compile_result, :time )");
			$sth->bindParam(':user_id', $_SESSION['id'] );
			$sth->bindParam(':qes', $ques );	
			$sth->bindParam(':code',  $code_str  );
			$sth->bindParam(':input', $input  );
			$sth->bindParam(':compile_info', $cp_success  );
			$sth->bindParam(':error_line',  $error_line );
			$sth->bindParam(':error_code', $match_error_code  );
			$sth->bindParam(':compile_result', $match_error_content );
			$sth->bindParam(':time',  $current_time  );
	
			$sth->execute();


			if( $is_chinese_tag)
				$output_str = "很抱歉，系統不支援「中文字」或「全型字元」的程式碼輸入。<br>";
			else
				$output_str .= "<br>C$match_error_code : $match_error_content <br>";

		}
		

		// 原始編譯器資訊
		echo "<div class='alert alert-info'> $output_str </div>";

		
		
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
		
		
		
//header("Location:cpp_compile_error_sample.php" );

?>


