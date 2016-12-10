<?php







function Error_Analysis($str_compile_msg,$Error_Code,$Source_Code)
{
		//  -> 程式碼簡化<-
		
			

			// 將 /* ...  */ 這種形式的註解忽略掉
			$Source_Code_clear = kill_cpp_note($Source_Code);
			
			// 將原始碼中有 雙斜線註解的都忽略掉
			$Source_Code_clear = kill_cpp_note_2slash($Source_Code_clear);

			// 將原始碼中所有的半形空格忽略掉
			$Source_Code_clear = str_replace(" ","",$Source_Code_clear);		
			
			// 再來將所有的\n跳行都忽略掉
			$Source_Code_clear = preg_replace("/\n/","", $Source_Code_clear);				
			
		// -> 程式碼簡化<-

	
		/*
		echo "簡化前<br>";
		echo "<textarea cols=40 rows=20 style='font-size:12px overflow:hidde' >".$Source_Code."</textarea>";
		
		
		echo "簡化後<br>";
		echo "<textarea cols=40 rows=20 style='font-size:12px overflow:hidde' >".$Source_Code_clear."</textarea>";
		*/
		
		
	// 先判斷有沒有這段資訊 ↓ ，若有表示程式碼中，有中文字，Visual Studio C++的編譯器對中文編譯會產生錯誤。
	// warning C4819: 檔案含有無法在目前字碼頁 (950) 中表示的字元。請以 Unicode 格式儲存檔案以防止資料遺失
	if(	preg_match("/.cpp : warning C4819/",$str_compile_msg)	!= Null	)
	{
		return 'W4819';
	}

	/*
	echo "<pre>";
	echo "<textarea cols=40 rows=20 style='font-size:12px overflow:hidde' >".$Source_Code."</textarea>";
	echo "</pre>";
	
	echo "<pre>";
	echo "<textarea cols=40 rows=20 style='font-size:12px overflow:hidde' >".$Source_Code_clear."</textarea>";
	echo "</pre>";	*/
	
			$Source_Code_endl = str_replace(" ","",$Source_Code);
			// 將原始碼中有 雙斜線註解的都忽略掉
			$Source_Code_endl = preg_replace("/\/\/(\S+)\n/","\n", $Source_Code_endl);		//        // abc123 
			$Source_Code_endl = preg_replace("/\/\//","", $Source_Code_endl);				//        // 		

			// 再將 /* ...  */ 這種形式的註解忽略掉
			$Source_Code_endl = kill_cpp_note($Source_Code_endl);
						
			$Source_Code_endl = preg_replace("/\n/","*ENDL*",$Source_Code_endl);

			
	/*
		echo "簡化前<br>";
		echo "<textarea cols=40 rows=20 style='font-size:12px overflow:hidde' >".$Source_Code."</textarea>";
		
		
		echo "<br>簡化後<br>";
		echo "<textarea cols=40 rows=20 style='font-size:12px overflow:hidde' >".$Source_Code_endl."</textarea>";
		
		
			
			echo "<pre>";
			echo $Source_Code."<br><br><br>";
			echo "</pre>";


			echo strlen($Source_Code_endl);
			echo "<pre>";
			echo "<textarea cols=70 rows=20 style='font-size:12px overflow:hidde'>". $Source_Code_endl."</textarea><br><br><br>";
			echo "</pre>";
	*/		
			
			
			
			
			/*  主程式
			(1) main() 
			(2) int main() 
			(3) int main(void) 
			(4) int main(int, char**) 
			(5) int main(int, char*[]) 
			(6) int main(int argc, char **argv) 
			(7) int main(int argc, char *argv[]) 
			(8) int main( int argc, char *argv[], char *envp[]) 
			(9) void main(void)
			
			
			
			if(	preg_match("/main\([A-Za-z0-9_,\[\]\*]*\)/",$Source_Code_clear,$a)!=Null	)
			{
				echo "<pre>";
				print_r($a);
				echo "</pre>";
			}*/
			
			
			
			
			
	
	// --- 特殊情形 ---  不經由 1st error 來剖析的case
	
	


		// C1075  判斷左右大括號是否正確  不正確即回傳 C1075
		$count_endl = 0;
		$flag=0;
		for($i=0;$i<strlen($Source_Code_endl);$i++)
		{
			if(	$Source_Code_endl[$i]	== '*'	&&
				$Source_Code_endl[$i+1]	== 'E'	&&
				$Source_Code_endl[$i+2]	== 'N'	&&
				$Source_Code_endl[$i+3]	== 'D'	&&
				$Source_Code_endl[$i+4]	== 'L'	&&
				$Source_Code_endl[$i+5]	== '*'	
			)
			{
				$count_endl++;
			}
			
			if($Source_Code_endl[$i] == '{')
			{
				$flag ++;
			}
			if ($Source_Code_endl[$i] == '}')
			{
				$flag --;
				$Last_brace_line = $count_endl;
			}
			
			if($i==strlen($Source_Code_endl)-1)	// 剖析到最後一個字元
			{	
				//echo $Source_Code_endl[$i];
				if( $flag != 0)	// 如果程式碼剖析完，$flag不等於0，就表示大括號不對稱，即為 case C1075 
				{
					global $first_error_line ;	
					$first_error_line = $Last_brace_line +1;
							
					return 'C1075';
				}
			}
		}
		
		
		
	
	
	
	
	
		// case 'C2518'    class 和 struct 關鍵字不應出現在基底類別清單中。
		/*
			// C2518.cpp
			// compile with: /c
			class B {};
			class C : public class B {};   // C2518
			class D: public B {};   // OK
		*/
		$Src_Code_parse_bug_forC2518 = str_replace("*ENDL*","%%%%%%",$Source_Code_endl);
		$Src_Code_parse_bug_forC2518 = str_replace("%","",$Src_Code_parse_bug_forC2518);
		for($i=0;$i<strlen($Src_Code_parse_bug_forC2518);$i++)	
		{
			//echo $Src_Code_parse_bug_forC2518[$i];
			if(	$Src_Code_parse_bug_forC2518[$i] == 'c'  	&&
				$Src_Code_parse_bug_forC2518[$i+1] == 'l'	&&
				$Src_Code_parse_bug_forC2518[$i+2] == 'a'	&&
				$Src_Code_parse_bug_forC2518[$i+3] == 's'	&&
				$Src_Code_parse_bug_forC2518[$i+4] == 's'	
			)
			{
			//	echo "<br>";
			
				$flag = 0;
				
				for($j=$i+5 ; $j<strlen($Src_Code_parse_bug_forC2518) ; $j++)
				{
					//echo $Src_Code_parse_bug_forC2518[$j];
					if($Src_Code_parse_bug_forC2518[$j] == '{')
					{
						$flag = $flag + 1;
								
						if($flag == 1)
						{
							// 「 class ..... { 」
							for($c = $i+5 ; $c <= $j ; $c++)
							{
								//echo $Src_Code_parse_bug_forC2518[$c];
										
								if(	(	$Src_Code_parse_bug_forC2518[$c]==':'		&&
										$Src_Code_parse_bug_forC2518[$c+1]=='c'		&&
										$Src_Code_parse_bug_forC2518[$c+2]=='l'		&&
										$Src_Code_parse_bug_forC2518[$c+3]=='a'		&&
										$Src_Code_parse_bug_forC2518[$c+4]=='s'		&&
										$Src_Code_parse_bug_forC2518[$c+5]=='s'		
									)	||
									(	$Src_Code_parse_bug_forC2518[$c]==':'		&&
										$Src_Code_parse_bug_forC2518[$c+1]=='p'		&&
										$Src_Code_parse_bug_forC2518[$c+2]=='u'		&&
										$Src_Code_parse_bug_forC2518[$c+3]=='b'		&&
										$Src_Code_parse_bug_forC2518[$c+4]=='l'		&&
										$Src_Code_parse_bug_forC2518[$c+5]=='i'		&&
										$Src_Code_parse_bug_forC2518[$c+6]=='c'		&&
										$Src_Code_parse_bug_forC2518[$c+7]=='c'		&&
										$Src_Code_parse_bug_forC2518[$c+8]=='l'		&&
										$Src_Code_parse_bug_forC2518[$c+9]=='a'		&&
										$Src_Code_parse_bug_forC2518[$c+10]=='s'	&&
										$Src_Code_parse_bug_forC2518[$c+11]=='s'
									)	||
									(
										$Src_Code_parse_bug_forC2518[$c]==':'		&&
										$Src_Code_parse_bug_forC2518[$c+1]=='p'		&&
										$Src_Code_parse_bug_forC2518[$c+2]=='r'		&&
										$Src_Code_parse_bug_forC2518[$c+3]=='i'		&&
										$Src_Code_parse_bug_forC2518[$c+4]=='v'		&&
										$Src_Code_parse_bug_forC2518[$c+5]=='a'		&&
										$Src_Code_parse_bug_forC2518[$c+6]=='t'		&&
										$Src_Code_parse_bug_forC2518[$c+7]=='e'		&&
										$Src_Code_parse_bug_forC2518[$c+8]=='c'		&&
										$Src_Code_parse_bug_forC2518[$c+9]=='l'		&&
										$Src_Code_parse_bug_forC2518[$c+10]=='a'	&&
										$Src_Code_parse_bug_forC2518[$c+11]=='s'	&&
										$Src_Code_parse_bug_forC2518[$c+12]=='s'
									)	||
									(
										$Src_Code_parse_bug_forC2518[$c]==':'		&&
										$Src_Code_parse_bug_forC2518[$c+1]=='p'		&&
										$Src_Code_parse_bug_forC2518[$c+2]=='r'		&&
										$Src_Code_parse_bug_forC2518[$c+3]=='o'		&&
										$Src_Code_parse_bug_forC2518[$c+4]=='t'		&&
										$Src_Code_parse_bug_forC2518[$c+5]=='e'		&&
										$Src_Code_parse_bug_forC2518[$c+6]=='c'		&&
										$Src_Code_parse_bug_forC2518[$c+7]=='t'		&&
										$Src_Code_parse_bug_forC2518[$c+8]=='e'		&&
										$Src_Code_parse_bug_forC2518[$c+9]=='d'		&&
										$Src_Code_parse_bug_forC2518[$c+10]=='c'	&&
										$Src_Code_parse_bug_forC2518[$c+11]=='l'	&&
										$Src_Code_parse_bug_forC2518[$c+12]=='a'	&&
										$Src_Code_parse_bug_forC2518[$c+13]=='s'	&&
										$Src_Code_parse_bug_forC2518[$c+14]=='s'		
									)
								)
								{
									if(	preg_match("/C2518: 在基底類別清單中的關鍵字 'class' 不合法/",$str_compile_msg)!=Null)
									{
										return 'C2518';
									}
									else
									{
										break;
									}
								}
							}	// end of for   「 class ..... { 」
						}
					}	// end of '{'
							
					if($Src_Code_parse_bug_forC2518[$j] == '}')
					{
						$flag = $flag - 1;
					
						if($flag == 0)
						{
							break;
						}
						
					}
							
				}
						
			}
					
					
		}	// end of 'C2518'
	
	




	
	// 類別當中":"之前必須為類別存取權限關鍵字(public、private或protected)，請確認是否拼錯字
		$count_endl = 0;
		// 第一層迴圈
		for($i=0;$i<strlen($Source_Code_endl);$i++)	
		{
			if(	$Source_Code_endl[$i]=='*'&&$Source_Code_endl[$i+1]=='E'&& $Source_Code_endl[$i+2]=='N'	&& $Source_Code_endl[$i+3]== 'D' && $Source_Code_endl[$i+4]== 'L' && $Source_Code_endl[$i+5]== '*')
			{
				$count_endl++;
			}
				
			if(	$Source_Code_endl[$i] == 'c'  	&&
				$Source_Code_endl[$i+1] == 'l'	&&
				$Source_Code_endl[$i+2] == 'a'	&&
				$Source_Code_endl[$i+3] == 's'	&&
				$Source_Code_endl[$i+4] == 's'	
			)
			{
				if(	$Source_Code_endl[$i+5] == ':'	)
				{
					break;	// for C2504_2
				}
				
				$t = $count_endl;
				
				$count_endl_for_9002 = $count_endl;
				$count_endl_for_9001 = $count_endl;
				
				$flag = 0;
				
				
				
				for($j=$i+5;$j<strlen($Source_Code_endl);$j++)
				{
				
				
					//echo $Source_Code_endl[$j];	
					// -- 針對 C9000 計算 error_line --
					if(	$Source_Code_endl[$j]	== '*'	&&
						$Source_Code_endl[$j+1]	== 'E'	&&
						$Source_Code_endl[$j+2]	== 'N'	&&
						$Source_Code_endl[$j+3]	== 'D'	&&
						$Source_Code_endl[$j+4]	== 'L'	&&
						$Source_Code_endl[$j+5]	== '*'	
					)
					{
						$count_endl++;
					}
					// -- 針對 C9000 計算 error_line --

					if($Source_Code_endl[$j] == '{')
					{
						$flag = $flag + 1;
					}
					
					if($Source_Code_endl[$j] == '}')
					{
						$flag = $flag - 1;
						
						//	剖析完整程式碼，遇到 class 之後，計算括號數，flag==0的話，表示為一個class，進入判斷 C9000、
						if($flag == 0	)
						{
						

						$Source_Code_eeeeee=str_replace("*ENDL*","%%%%%%",$Source_Code_endl);


						
						// 目前找到 $j 為 '}' ，並且 $flag = 0
						// 此for迴圈將從 $j 再往下找，直到遇到 ';' 停止
						// 找尋的途中，若遇到 '%' 就忽略，繼續迴圈尋找，(%為*ENDL*變過來的，目的是為了能保留計算endl數，又能維持strlen不變)
						// 如果不是 '%' 、 且不是';' ，則表示為 C9000 
							for($a=$j+1;	strlen($Source_Code_eeeeee)	;	$a++)
							{
								// echo ($a)."-".$Source_Code_eeeeee[$a]."";
								if($Source_Code_eeeeee[$a]==';')
								{
									//echo "go check 9001、9002    ";

									
										$temp_array = Null;
										// 一個完整的class
										for($n=0,$k=$i ; $n<=$j-$i+1 ,$k<=$a ; $n++,$k++)
										{
												$temp_array[$n] = $Source_Code_eeeeee[$k];
										}
										$string_of_class = implode("",$temp_array);		// 把陣列結合成為字串，此陣列為class XXX { ... };
										

										
										
										
										// 「 class XXX { ... }; 」
										//echo "<br>".$j."<hr>".$string_of_class."<br><br><br>";
										
										
										
										// 再去除掉class name 之前 copy 一份 ， 用來抓取類別名稱用
										$str_of_class_with_className = str_replace("%","",$string_of_class);
										//echo "<br>".$str_of_class_with_className."<br>";
										
										if(	preg_match("/class(\w+){/",$str_of_class_with_className,$className)!=Null	||
											preg_match("/class(\w+):\w+{/",$str_of_class_with_className,$className)!=Null
										)
										{
											// 抓出目前剖析到的 class name
										//	 echo "<br>".$className[1]."<br>";
										}
										
																				
										
										// 「 class XXX { 」
										if(	preg_match("/class[%]*[A-Za-z0-9_]+[%]*{/",$string_of_class,$class_base)	!=Null	)
										{
										
										//	echo "1";
										
											// 計算「class XXX {」   裡面有多少個跳行，計算錯誤行數用
											for($c=0;$c<strlen($class_base[0]);$c++)
											{
												if(	$class_base[0][$c] == '%'	&&	
													$class_base[0][$c+1] == '%'	&&
													$class_base[0][$c+2] == '%'	&&
													$class_base[0][$c+3] == '%'	&&
													$class_base[0][$c+4] == '%'	&&
													$class_base[0][$c+5] == '%'	
												)
												{
													$class_base[0][$c] = '*'	;
													$class_base[0][$c+1] = 'E'	;
													$class_base[0][$c+2] = 'N'	;
													$class_base[0][$c+3] = 'D'	;
													$class_base[0][$c+4] = 'L'	;
													$class_base[0][$c+5] = '%'	;
													
													$count_endl_for_9002++;
													$count_endl_for_9001++;
													
												}
												
											}
											// 「 class XXX { ... } 」   消除掉 「 class XXX 」
											$string_of_class = preg_replace("/class[%]*[A-Za-z0-9_]+[%]*{/","{",$string_of_class);
										}

										
										// class XXX : YYY {
										// class XXX : public YYY {
										// class XXX : private YYY {
										// class XXX : protected YYY {
										if(	preg_match("/class[%]*[A-Za-z0-9_]+[%]*:[%]*[A-Za-z0-9_]+[%]*{/",$string_of_class,$class_derived)!=Null	||
											preg_match("/class[%]*[A-Za-z0-9_]+[%]*:[%]*public[%]*[A-Za-z0-9_]+[%]*{/",$string_of_class,$class_derived)!=Null	||
											preg_match("/class[%]*[A-Za-z0-9_]+[%]*:[%]*private[%]*[A-Za-z0-9_]+[%]*{/",$string_of_class,$class_derived)!=Null	||
											preg_match("/class[%]*[A-Za-z0-9_]+[%]*:[%]*protected[%]*[A-Za-z0-9_]+[%]*{/",$string_of_class,$class_derived)!=Null	
										)
										{
										
										//	echo "2";
																				
											for($c=0;$c<strlen($class_derived[0]);$c++)
											{
												if(	$class_derived[0][$c] == '%'	&&	
													$class_derived[0][$c+1] == '%'	&&
													$class_derived[0][$c+2] == '%'	&&
													$class_derived[0][$c+3] == '%'	&&
													$class_derived[0][$c+4] == '%'	&&
													$class_derived[0][$c+5] == '%'	
												)
												{
													$class_derived[0][$c] = '*'	;
													$class_derived[0][$c+1] = 'E'	;
													$class_derived[0][$c+2] = 'N'	;
													$class_derived[0][$c+3] = 'D'	;
													$class_derived[0][$c+4] = 'L'	;
													$class_derived[0][$c+5] = '%'	;
													
													$count_endl_for_9002++;
													$count_endl_for_9001++;
												
												}
											}
											
											// 「 class XXX : YYY { ... } 」   消除掉 「 class XXX : YYY 」
											$string_of_class = preg_replace("/class[A-Za-z0-9_%]+:[A-Za-z0-9_%]+{/","{",$string_of_class);
										}


										
						//				echo "after:   ".$string_of_class."<br><br>line9001 = ".$count_endl_for_9001."<br>line9002 = ".$count_endl_for_9002."<br>";
																				
										$string_of_class_noEndLine = str_replace("%","",$string_of_class);
										//echo "str_noEndl:   ".$string_of_class_noEndLine."<br><br>";
										
										
										if(	preg_match("/class\w+:public:\w+{|class\w+:private:\w+{class\w+:protected:\w+{/",$string_of_class_noEndLine)!=Null	)
										{
											break;
										}
										if(	preg_match("/class\w+:public:{|class\w+:private:{class\w+:protected:{/",$string_of_class_noEndLine)!=Null	)
										{
											break;
										}	
										
										
										// C9001的誤判，應該判斷為 C2969，故必須跳出
										if(	preg_match("/".$className[1]."\([A-Za-z0-9_,&\*]*\):/",$string_of_class_noEndLine)!=Null	)
										{
											break;
										}
										
										// 應該判斷為 C2143_4 ，故必須跳出 C9002
										if(	preg_match("/public{|private{|protected{/",$string_of_class_noEndLine)!=Null	)
										{
											break;
										}
										// 應該判斷為 C2143_5 ，故必須跳出 C9002
										if(	preg_match("/public\(|private\(|protected\(/",$string_of_class_noEndLine)!=Null	)
										{
											break;
										}										
										
							// ---------C9002---------------------------------------------------------------
											//  public 、 private 、 protected 之後缺少 " : "     
												// end of for     C9002 
										
										
										
							// ---------C9001---------------------------------------------------------------------------------------
							
												// end of for     C9001
												//	echo strlen($string_of_class);
										
									break;
								}
								if ($Source_Code_eeeeee[$a]=='%')
								{
									//echo "%<br>";
									continue;

								}
								else if($Source_Code_eeeeee[$a]!='%')
								{
									
									//echo "   got C9000<br>";
									global $first_error_line ;	
									$first_error_line = $count_endl +1;
							
									return 'C9000';
								}
							}
							//echo "end of C9000 check ";
							
						//	echo "flag=0 ， for結束<br><br>";
							break;
						}
						
					}
				}
				

				//echo "there's a class<hr>";
				
				$count_endl = $t;
			}
					

		} // end of for	


	switch($Error_Code)
	{
	
	// C1004
	// 找到未預期的檔案結尾
	// 檔案結尾問題
		case 'C1004':
		{
			for($i=0;$i<strlen($Source_Code_clear);$i++)
			{
				if(	$Source_Code_clear[$i] == 'c'  	&&
					$Source_Code_clear[$i+1] == 'l'	&&
					$Source_Code_clear[$i+2] == 'a'	&&
					$Source_Code_clear[$i+3] == 's'	&&
					$Source_Code_clear[$i+4] == 's'	
				)
				{
					$flag = 0;
					for($j=$i+5;$j<strlen($Source_Code_clear);$j++)
					{
									
						if($Source_Code_clear[$j] == '{')
						{
							$flag++;
						}
						else if($Source_Code_clear[$j] == '}')
						{
							$flag--;
							if($flag == 0 && $Source_Code_clear[$j+1]!=';')
							{
								return 'C1004_2';
							}
						}
					}
					
				}
				
			} // end of for
		
			return 'C1004';
		}

	// C1075
	// 不對稱的括號、大括號，或其他成對字元而產生之問題
	// 大括號問題
		case 'C1075' :
		{
			preg_match('/\'\{\'/',$str_compile_msg,$match1075);
			// echo $match1075[0][0];
			
			if($match1075[0][0]!=Null)
			{
				return 'C1075';
			}
			
			return 'C1075_NG';
		}
		
	
	// C1083
	// 檔案開啟問題  
	// include了不存在的檔案
		case 'C1083':
		{
			return 'C1083';
		}
		


    // C2006 
	// 檔案開啟問題
    // '#include' : 必須有檔名，但只找到 '識別項' 
    // 指示詞 (例如 #include 或 #import) 需要一個檔名。 
		case 'C2006':
		{

			/*
			if($Error_Code[1]='C1083')
			{
				return 'C2006';
			}
			*/

			return 'C2006';
			return 'C2006_NG';
		}

	// C2015
	// 資料型態誤用錯誤
	// 常數中字元太多
		case 'C2015':
		{
			return 'C2015';
		}

	// C2039
	// 類別成員宣告錯誤
	// test.cpp(8) : error C2039: 'func' : 不是 'MyClass' 的成員	
		case 'C2039':
		{

			if(	preg_match('/C2039: \'(\S+)\' /',$str_compile_msg,$match2039_func)			!= Null	&&
				preg_match('/請參閱 \'(\S+)\' 的宣告/',$str_compile_msg,$match2039_class)	!=Null
			)
			{
				//  void、int、char、float、double、bool、short、signed、long
				if(	preg_match("/void".$match2039_class[1]."::".$match2039_func[1]."/",$Source_Code_clear)		!=Null	||
					preg_match("/int".$match2039_class[1]."::".$match2039_func[1]."/",$Source_Code_clear)		!=Null	||
					preg_match("/char".$match2039_class[1]."::".$match2039_func[1]."/",$Source_Code_clear)		!=Null	||
					preg_match("/float".$match2039_class[1]."::".$match2039_func[1]."/",$Source_Code_clear)		!=Null	||
					preg_match("/double".$match2039_class[1]."::".$match2039_func[1]."/",$Source_Code_clear)	!=Null	||
					preg_match("/bool".$match2039_class[1]."::".$match2039_func[1]."/",$Source_Code_clear)		!=Null	||
					preg_match("/short".$match2039_class[1]."::".$match2039_func[1]."/",$Source_Code_clear)		!=Null	||
					preg_match("/signed".$match2039_class[1]."::".$match2039_func[1]."/",$Source_Code_clear)	!=Null	||
					preg_match("/long".$match2039_class[1]."::".$match2039_func[1]."/",$Source_Code_clear)  	!=Null
				)
				{
					return "C2039_1";
				}
				
				if(	preg_match("/.".$match2039_func[1]."/",$Source_Code_clear)!=Null	)
				{
					return "C2039_4";
				}
				

			}

			if(	preg_match("/C2039: '(\w+)' : 不是 '`global namespace'' 的成員/",$str_compile_msg,$C2039_2and3)!=Null)
			{
				/*
				echo "<pre>";
				print_r($C2039_2and3);
				echo "</pre>";
				*/
				if(	preg_match("/class::\w+{/",$Source_Code_clear)!=Null)
				{
					return 'C2039_2';
				}
				//  void、int、char、float、double、bool、short、signed、long
				
				// C2039_3
				if(	preg_match("/void::|int::|char::|float::|double::|bool::|short::|signed::|long::/",$Source_Code_clear)!=Null)
				{

					for($i=0;$i<strlen($Source_Code_clear);$i++)
					{
						if(	$Source_Code_clear[$i] == 'c'  	&&
							$Source_Code_clear[$i+1] == 'l'	&&
							$Source_Code_clear[$i+2] == 'a'	&&
							$Source_Code_clear[$i+3] == 's'	&&
							$Source_Code_clear[$i+4] == 's'	
						)
						{
							$flag = 0;
							for($j=$i+5;$j<strlen($Source_Code_clear);$j++)
							{
											
								if($Source_Code_clear[$j] == '{')
								{
									$flag++;
								}
								else if($Source_Code_clear[$j] == '}')
								{
									$flag--;
									if($flag == 0 && $Source_Code_clear[$j+1]==';')
									{
										$temp_array = Null;
										
										// 一個完整的class
										for($n=$i,$k=$i ; $n<=$j+1,$k<=$j+1 ; $n++,$k++)
										{
												$temp_array[$n] = $Source_Code_clear[$k];
										}
										$string_of_class = implode("",$temp_array);		// 把陣列結合成為字串，此陣列為class XXX { ... };
										
										/*
										echo "<pre>";
										echo $string_of_class;
										echo "</pre>";
										*/
										

										$result = delete_class_nameTitle($string_of_class);
										
										/*
										echo "<pre>";
										print_r($result);
										echo "<pre>";
										*/
										
										
										if($result[0] == 'done')	//如果有消除過 才執行以下判斷
										{
											if(	preg_match("/".$C2039_2and3[1]."\(/",$result[1])	!=Null)
											{
												return 'C2039_3';
											}
										}
										
										


										break;
									}
								}
							}
							
						}
						
					}
				

				}
			}
			
			
			
			return 'C2039_NG';
			
			
		}
	
	
	// C2059
		case 'C2059':
		{
			// C2059_1
			// 大括號問題
			// 類別範圍當中，public/private/protected之後，出現不正確的 “{”
			
			for($i=0;$i<strlen($Source_Code_clear);$i++)
			{
				if(	$Source_Code_clear[$i] == 'c'  	&&
					$Source_Code_clear[$i+1] == 'l'	&&
					$Source_Code_clear[$i+2] == 'a'	&&
					$Source_Code_clear[$i+3] == 's'	&&
					$Source_Code_clear[$i+4] == 's'	
				)
				{
					$flag = 0;
					for($j=$i+5;$j<strlen($Source_Code_clear);$j++)
					{
									
						if($Source_Code_clear[$j] == '{')
						{
							$flag++;
						}
						else if($Source_Code_clear[$j] == '}')
						{
							$flag--;
							if($flag == 0 && $Source_Code_clear[$j+1]==';')
							{
								$temp_array = Null;
								
								// 一個完整的class
								for($n=$i,$k=$i ; $n<=$j+1,$k<=$j+1 ; $n++,$k++)
								{
										$temp_array[$n] = $Source_Code_clear[$k];
								}
								$string_of_class = implode("",$temp_array);		// 把陣列結合成為字串，此陣列為class XXX { ... };
								
								
								$result = delete_class_nameTitle($string_of_class);
								
								/*
								echo "<pre>";
								print_r($result);
								echo "<pre>";
								*/
								
								//echo $string_of_class;
								if($result[0] == 'done')	//如果有消除過 才執行以下判斷
								{
									if(	preg_match("/class\w+:public:\w+{/",$result[1])!=Null		||
										preg_match("/class\w+:private:\w+{/",$result[1])!=Null	||
										preg_match("/class\w+:protected:\w+{/",$result[1])!=Null	
									)
									{
										return 'C2059_9';
									}
									
									
									
									if(	preg_match("/public:{|private:{|protected:{/",$result[1])	!=Null)
									{
										return 'C2059_1';
									}
									
								}
								break;
							}
						}
					}
					
				}
				
			}
			
			
			// C2059_2
			// 物件類別宣告錯誤
			// 類別宣告時，宣告的類別名稱後面加了類似函式宣告的 “()”					
			if(	preg_match("/C2059: 語法錯誤 : '\)'/",$str_compile_msg)!=Null)
			{
				if(preg_match("/class\w+\(/",$Source_Code_clear)!=Null)
				{
					return 'C2059_2';
				}

			}
			
			// C2059_3
			if(	preg_match("/C2059: 語法錯誤 : '\)'/",$str_compile_msg,$C2059_3_errorline) != Null	)
			{
				$Src_Code_C2059_3 = str_replace("\n","*ENDL*",$Source_Code);
				
				/*
				echo "<pre>";
				echo $Src_Code_C2059_3;
				echo "</pre>";
				*/

				
				if(	preg_match_all("/;(\w+)\(/",$Source_Code_clear,$C2059_3)!=Null	)			
				{	
					/*
					echo "<pre>";
					print_r( $C2059_3);
					echo "</pre>";
					*/
					
					//  void、int、char、float、double、bool、short、signed、long
					for($i=0;$i<count($C2059_3[1]);$i++)
					{
						if( $C2059_3[1][$i][0].$C2059_3[1][$i][1].$C2059_3[1][$i][2].$C2059_3[1][$i][3] == 'void'){	}
						else if(	$C2059_3[1][$i][0].$C2059_3[1][$i][1].$C2059_3[1][$i][2] == 'int'	)	{ }
						else if(	$C2059_3[1][$i][0].$C2059_3[1][$i][1].$C2059_3[1][$i][2].$C2059_3[1][$i][3] == 'char'	)	{ 	}
						else if(	$C2059_3[1][$i][0].$C2059_3[1][$i][1].$C2059_3[1][$i][2].$C2059_3[1][$i][3].$C2059_3[1][$i][4] == 'float'	){	}
						else if(	$C2059_3[1][$i][0].$C2059_3[1][$i][1].$C2059_3[1][$i][2].$C2059_3[1][$i][3].$C2059_3[1][$i][4].$C2059_3[1][$i][5] == 'double'	){		}
						else if(	$C2059_3[1][$i][0].$C2059_3[1][$i][1].$C2059_3[1][$i][2].$C2059_3[1][$i][3] == 'bool'	){	}
						else if(	$C2059_3[1][$i][0].$C2059_3[1][$i][1].$C2059_3[1][$i][2].$C2059_3[1][$i][3].$C2059_3[1][$i][4] == 'short'	){ 	}
						else if(	$C2059_3[1][$i][0].$C2059_3[1][$i][1].$C2059_3[1][$i][2].$C2059_3[1][$i][3].$C2059_3[1][$i][4].$C2059_3[1][$i][5] == 'signed'	){		}
						else if(	$C2059_3[1][$i][0].$C2059_3[1][$i][1].$C2059_3[1][$i][2].$C2059_3[1][$i][3] == 'long'	){	}
						else
						{
							//echo $C2059_3[1][$i];
							// echo 'check C2059_3';
							if(	preg_match("/class".$C2059_3[1][$i]."{/",$Source_Code_clear)!=Null		||
								preg_match("/class".$C2059_3[1][$i].":\w+{/",$Source_Code_clear)!=Null
							)
							{
								return 'C2059_3';
							}
						}
						
					}
				}
				
				if(	preg_match_all("/}(\w+)\(/",$Source_Code_clear,$C2059_3)!=Null	)			
				{	
					/*
					echo "<pre>";
					print_r( $C2059_3);
					echo "</pre>";
					*/
					
					//  void、int、char、float、double、bool、short、signed、long
					for($i=0;$i<count($C2059_3[1]);$i++)
					{
						if( $C2059_3[1][$i][0].$C2059_3[1][$i][1].$C2059_3[1][$i][2].$C2059_3[1][$i][3] == 'void'){}
						else if(	$C2059_3[1][$i][0].$C2059_3[1][$i][1].$C2059_3[1][$i][2] == 'int'	){}
						else if(	$C2059_3[1][$i][0].$C2059_3[1][$i][1].$C2059_3[1][$i][2].$C2059_3[1][$i][3] == 'char'	){}
						else if(	$C2059_3[1][$i][0].$C2059_3[1][$i][1].$C2059_3[1][$i][2].$C2059_3[1][$i][3].$C2059_3[1][$i][4] == 'float'	){}
						else if(	$C2059_3[1][$i][0].$C2059_3[1][$i][1].$C2059_3[1][$i][2].$C2059_3[1][$i][3].$C2059_3[1][$i][4].$C2059_3[1][$i][5] == 'double'	){}
						else if(	$C2059_3[1][$i][0].$C2059_3[1][$i][1].$C2059_3[1][$i][2].$C2059_3[1][$i][3] == 'bool'	){}	
						else if(	$C2059_3[1][$i][0].$C2059_3[1][$i][1].$C2059_3[1][$i][2].$C2059_3[1][$i][3].$C2059_3[1][$i][4] == 'short'){}
						else if(	$C2059_3[1][$i][0].$C2059_3[1][$i][1].$C2059_3[1][$i][2].$C2059_3[1][$i][3].$C2059_3[1][$i][4].$C2059_3[1][$i][5] == 'signed'){}
						else if(	$C2059_3[1][$i][0].$C2059_3[1][$i][1].$C2059_3[1][$i][2].$C2059_3[1][$i][3] == 'long'	){}
						else
						{
							//echo $C2059_3[1][$i];
							// echo 'check C2059_3';
							if(	preg_match("/class".$C2059_3[1][$i]."{/",$Source_Code_clear)!=Null		||
								preg_match("/class".$C2059_3[1][$i].":\w+{/",$Source_Code_clear)!=Null
							)
							{
								return 'C2059_3';
							}
						}
						
					}
				}


			}  
			// end of C2059_3

			
			
			// C2059_4
			// 資料格式錯誤
			// ‘cout’ 語法錯誤
			if(	preg_match("/C2059: 語法錯誤 : '數字上的損壞尾碼'/",$str_compile_msg)!=Null)
			{
				if(	preg_match("/<<\d+\w+;/",$Source_Code_clear)!=Null	)
				{
					return 'C2059_4';
				}
			}

			
			
			// C2059_5  
			// 流程控制錯誤
			// 類別範圍內，出現流程控制關鍵字，導致的錯誤。     ex: if, else, switch, case, for, while, do, break, continue, return, goto
			preg_match('/C2059: 語法錯誤 : \'(\S+)\'/',$str_compile_msg,$match2059_5_word);
	
			if( 	$match2059_5_word[1] =='if'  		||
					$match2059_5_word[1] =='else'  		||
					$match2059_5_word[1] =='switch'		||
					$match2059_5_word[1] =='case'		||
					$match2059_5_word[1] =='for'		||
					$match2059_5_word[1] =='while'		||
					$match2059_5_word[1] =='do'			||
					$match2059_5_word[1] =='break'		||
					$match2059_5_word[1] =='continue'	||
					$match2059_5_word[1] =='return'		||
					$match2059_5_word[1] =='goto'
				)
			{

				// 暴力剖析，將原始碼 逐字分析
				// 這裡是找出原始碼中 符合class XXX { ... } ; 的情形
				for($i=0;$i<strlen($Source_Code_clear);$i++)
				{
					if(	$Source_Code_clear[$i] == 'c'  	&&
						$Source_Code_clear[$i+1] == 'l'	&&
						$Source_Code_clear[$i+2] == 'a'	&&
						$Source_Code_clear[$i+3] == 's'	&&
						$Source_Code_clear[$i+4] == 's'	
					)
					{
						$flag = 0;
						for($j=$i+5;$j<strlen($Source_Code_clear);$j++)
						{
										
							if($Source_Code_clear[$j] == '{')
							{
								$flag++;
							}
							else if($Source_Code_clear[$j] == '}')
							{
								$flag--;
								if($flag == 0 && $Source_Code_clear[$j+1]==';')
								{
									$temp_array = Null;
									
									// 一個完整的class
									for($n=$i,$k=$i ; $n<=$j+1,$k<=$j+1 ; $n++,$k++)
									{
											$temp_array[$n] = $Source_Code_clear[$k];
									}
									$string_of_class = implode("",$temp_array);		// 把陣列結合成為字串，此陣列為class XXX { ... };
									
									$result = delete_class_nameTitle($string_of_class);
									/*
									echo "<pre>";
									print_r($result);
									echo "</pre>";
									*/
									if($result[0] == 'done')	//如果有消除過 才執行以下判斷
									{
										if(	preg_match("/if|else|switch|case|for|while|do|break|continue|return|goto/",$result[1],$return) != Null	)
										{
											return 'C2059_5';
											
										}
									}
									break;
								}
							}
						}
						
					}
					
				} // end of for
				
			}
			
			// C2059_6
			if(	preg_match("/C2059: 語法錯誤 : '常數'/",$str_compile_msg)!=Null	)
			{

					for($i=0;$i<strlen($Source_Code_clear);$i++)
					{
						if(	$Source_Code_clear[$i] == 'c'  	&&
							$Source_Code_clear[$i+1] == 'l'	&&
							$Source_Code_clear[$i+2] == 'a'	&&
							$Source_Code_clear[$i+3] == 's'	&&
							$Source_Code_clear[$i+4] == 's'	
						)
						{
							$flag = 0;
							for($j=$i+5;$j<strlen($Source_Code_clear);$j++)
							{
								if($Source_Code_clear[$j] == '{')
								{
									$flag++;
								}
								else if($Source_Code_clear[$j] == '}')
								{
									$flag--;
									if($flag == 0 && $Source_Code_clear[$j+1]==';')
									{
										$temp_array = Null;
										
										// 一個完整的class
										for($n=$i,$k=$i ; $n<=$j+1,$k<=$j+1 ; $n++,$k++)
										{
												$temp_array[$n] = $Source_Code_clear[$k];
										}
										$string_of_class = implode("",$temp_array);		// 把陣列結合成為字串，此陣列為class XXX { ... };
										
										if(	preg_match("/class(\w+)/",$string_of_class,$C2059_6)!=Null)
										{
											//echo $C2059_6[1]."<br>";
											$result = delete_class_nameTitle($string_of_class);
											/*
											echo "<pre>";
											print_r($result);
											echo "</pre>";
											*/
											if($result[0] == 'done')	//如果有消除過 才執行以下判斷
											{
												if(	preg_match("/".$C2059_6[1]."\(\d+\)/",$result[1])!=Null	)
												{
													return 'C2059_6';
												}
											}		
										}
										


										break;
									}
								}
							}
							
						}
						
					} // end of for
				
				}
				
				
			
			
			// C2059_7
				
				for($i=0;$i<strlen($Source_Code_clear);$i++)
				{
					if(	$Source_Code_clear[$i] == 'c'  	&&
						$Source_Code_clear[$i+1] == 'l'	&&
						$Source_Code_clear[$i+2] == 'a'	&&
						$Source_Code_clear[$i+3] == 's'	&&
						$Source_Code_clear[$i+4] == 's'	
					)
					{
						$flag = 0;
						for($j=$i+5;$j<strlen($Source_Code_clear);$j++)
						{
										
							if($Source_Code_clear[$j] == '{')
							{
								$flag++;
							}
							else if($Source_Code_clear[$j] == '}')
							{
								$flag--;
								if($flag == 0	&&	$Source_Code_clear[$j+1]==';')
								{
									$temp_array = Null;
									// 一個完整的class
									for($n=$i,$k=$i ; $n<=$j,$k<=$j ; $n++,$k++)
									{
											$temp_array[$n] = $Source_Code_clear[$k];
									}
									$string_of_class = implode("",$temp_array);		// 把陣列結合成為字串，此陣列為class XXX { ... };
									
									$result = delete_class_nameTitle($string_of_class);
									/*
										echo "<pre>";
										print_r($result);
										echo "</pre>";
									*/
									if($result[0] == 'done')	//如果有消除過 才執行以下判斷
									{
										if(preg_match_all("/(\w+):/",$result[1],$C2059_7)!=Null)
										{	
											/*
											echo "<pre>";
											print_r($C2059_7);
											echo "</pre>";
											*/
											for($m=0;$m<count($C2059_7[1]) ;$m++)
											{
												if(	$C2059_7[1][$m] != 'public'	&&
													$C2059_7[1][$m] != 'private'	&&
													$C2059_7[1][$m] != 'protected'	
												
												)
												{
													return 'C2059_7';
												}
											}
										}
									}


									break;
								}
								
							}
						}
					}
					
				} // end of for	
				// end of C2059_7
				
				
				
			// end of C2059_7
			
			// C2059_8
			if(	preg_match("/C2059: 語法錯誤 : '<<'/",$str_compile_msg)!=Null)
			{
				
				if(	preg_match("/<<</",$Source_Code_clear)	!=Null)
				{
					return 'C2059_8';
				}
			}
			
			// C2059_10
			if(	preg_match("/C2059: 語法錯誤 : 'public'/",$str_compile_msg)!=Null	)
			{
				if(preg_match("/class\w+public\w+{/",$Source_Code_clear)!=Null)
				{
					return "C2059_10";
				}
			}
			
			
		
			return 'C2059_NG';
		} // end of C2059
	
	
	// C2061
		// 函數宣告錯誤
		// 類別範圍內，函式宣告的引數不正確。     ex: void func(a);    a未宣告型態
		case 'C2061' :
		{
			if(	preg_match("/C2061: 語法錯誤 : 識別項 '(\w+)'/",$str_compile_msg,$C2061)!=Null	)
			{
				/*
				echo "<pre>"; 
					print_r($C2061);
				echo "</pre>";
				*/
				
				for($i=0;$i<strlen($Source_Code_clear);$i++)
				{
					if(	$Source_Code_clear[$i] == 'c'  	&&
						$Source_Code_clear[$i+1] == 'l'	&&
						$Source_Code_clear[$i+2] == 'a'	&&
						$Source_Code_clear[$i+3] == 's'	&&
						$Source_Code_clear[$i+4] == 's'	
					)
					{
						$flag = 0;
						for($j=$i+5;$j<strlen($Source_Code_clear);$j++)
						{
										
							if($Source_Code_clear[$j] == '{')
							{
								$flag++;
							}
							else if($Source_Code_clear[$j] == '}')
							{
								$flag--;
								if($flag == 0 && $Source_Code_clear[$j+1]==';')
								{
									$temp_array = Null;
									
									// 一個完整的class
									for($n=$i,$k=$i ; $n<=$j+1,$k<=$j+1 ; $n++,$k++)
									{
											$temp_array[$n] = $Source_Code_clear[$k];
									}
									$string_of_class = implode("",$temp_array);		// 把陣列結合成為字串，此陣列為class XXX { ... };
									
									/*
									echo "<pre>";
									echo $string_of_class;
									echo "</pre>";
									*/
									$result = delete_class_nameTitle($string_of_class);
									/*
										echo "<pre>";
										print_r($result);
										echo "</pre>";
									*/
									if($result[0] == 'done')	//如果有消除過 才執行以下判斷
									{
										//  void、int、char、float、double、bool、short、signed、long
										if(	preg_match("/void\w+\(".$C2061[1]."\)/",$result[1])	!=Null	||
											preg_match("/int\w+\(".$C2061[1]."\)/",$result[1])	!=Null	||
											preg_match("/char\w+\(".$C2061[1]."\)/",$result[1])	!=Null	||
											preg_match("/float\w+\(".$C2061[1]."\)/",$result[1])	!=Null	||
											preg_match("/double\w+\(".$C2061[1]."\)/",$result[1])	!=Null	||
											preg_match("/bool\w+\(".$C2061[1]."\)/",$result[1])	!=Null	||
											preg_match("/short\w+\(".$C2061[1]."\)/",$result[1])	!=Null	||
											preg_match("/signed\w+\(".$C2061[1]."\)/",$result[1])	!=Null	||
											preg_match("/long\w+\(".$C2061[1]."\)/",$result[1])	!=Null	
										)
										{
											return 'C2061';
										}
									}

									


										
									break;
								}
							}
						}
						
					}
				


				
				}	// end of for
				
			}
		
		
			return 'C2061_NG';
		}
		
		
	// C2062
		case 'C2062':
		{
			// C2062_1 物件類別宣告錯誤
			// 類別宣告時，宣告的類別名稱後面加了類似函式宣告的 “()”		
			if(	preg_match('/C2062: 未預期的型別 \'(\S+)\'/',$str_compile_msg,$match2062_1_t)	!=	Null)
			{
				//echo $match2062_1_t[1];

				for($i=0;$i<strlen($Source_Code_clear);$i++)
				{
					if(	$Source_Code_clear[$i] == 'c'  	&&
						$Source_Code_clear[$i+1] == 'l'	&&
						$Source_Code_clear[$i+2] == 'a'	&&
						$Source_Code_clear[$i+3] == 's'	&&
						$Source_Code_clear[$i+4] == 's'	
					)
					{
						$flag = 0;
						for($j=$i+5;$j<strlen($Source_Code_clear);$j++)
						{
										
							if($Source_Code_clear[$j] == '{')
							{
								$flag++;
							}
							else if($Source_Code_clear[$j] == '}')
							{
								$flag--;
								if($flag == 0 && $Source_Code_clear[$j+1]==';')
								{
									$temp_array = Null;
									
									// 一個完整的class
									for($n=$i,$k=$i ; $n<=$j+1,$k<=$j+1 ; $n++,$k++)
									{
											$temp_array[$n] = $Source_Code_clear[$k];
									}
									$string_of_class = implode("",$temp_array);		// 把陣列結合成為字串，此陣列為class XXX { ... };
									
									/*
									echo "<pre>";
									echo $string_of_class;
									echo "</pre>";
									*/
									
									//  void、int、char、float、double、bool、short、signed、long
									if(	$match2062_1_t[1] == 'void'		||
										$match2062_1_t[1] == 'int'		||
										$match2062_1_t[1] == 'char'		||
										$match2062_1_t[1] == 'float'	||
										$match2062_1_t[1] == 'double'	||
										$match2062_1_t[1] == 'bool'		||
										$match2062_1_t[1] == 'short'	||
										$match2062_1_t[1] == 'signed'	||
										$match2062_1_t[1] == 'long'	
										)
										{
											if(	preg_match('/class\w+\('.$match2062_1_t[1].'/',$Source_Code_clear)		!=  Null	)
											{
												return 'C2062_1';
											}
										}
									


										
									break;
								}
							}
						}
						
					}
				


				
				}
				
				
				
			// C2062_2
				for($i=0;$i<strlen($Source_Code_clear);$i++)
				{
					if(	$Source_Code_clear[$i] == 'c'  	&&
						$Source_Code_clear[$i+1] == 'l'	&&
						$Source_Code_clear[$i+2] == 'a'	&&
						$Source_Code_clear[$i+3] == 's'	&&
						$Source_Code_clear[$i+4] == 's'	
					)
					{
						$flag = 0;
						for($j=$i+5;$j<strlen($Source_Code_clear);$j++)
						{
										
							if($Source_Code_clear[$j] == '{')
							{
								$flag++;
							}
							else if($Source_Code_clear[$j] == '}')
							{
								$flag--;
								if($flag == 0	&&	$Source_Code_clear[$j+1]==';')
								{
									$temp_array = Null;
									// 一個完整的class
									for($n=$i,$k=$i ; $n<=$j,$k<=$j ; $n++,$k++)
									{
											$temp_array[$n] = $Source_Code_clear[$k];
									}
									$string_of_class = implode("",$temp_array);		// 把陣列結合成為字串，此陣列為class XXX { ... };
									
									
									
									$result = delete_class_nameTitle($string_of_class);
									/*
										echo "<pre>";
										print_r($result);
										echo "</pre>";
									*/
									if($result[0] == 'done')	//如果有消除過 才執行以下判斷
									{
										if(preg_match_all("/(\w+):/",$result[1],$C2062_2)!=Null)
										{	
											/*
											echo "<pre>";
											print_r($C2062_2);
											echo "</pre>";
											*/
											for($m=0;$m<count($C2062_2[1]) ;$m++)
											{
												if(	$C2062_2[1][$m] != 'public'	&&
													$C2062_2[1][$m] != 'private'	&&
													$C2062_2[1][$m] != 'protected'	
												
												)
												{
													return 'C2062_2';
												}
											}
										}
									}
									
									

									break;
								}
								
							}
						}
					}
					
				} // end of for	
				
			}



			
			
			// C2062_2
			// 標籤識別字錯誤
			// 類別當中不得使用標籤識別字
			
			if(	preg_match("/C2062: 未預期的型別 '(\w+)'/",$str_compile_msg,$match2062) !=Null)
			{
							
				

					

			}
			

			return 'C2062_NG';
		}
		
	// C2063
		case 'C2063':
		{
			if(	preg_match("/C2063: '(\w+)::(\w+)'/",$str_compile_msg,$C2063_1)!=Null	)
			{
				/*
				echo "<pre>";
				print_r($C2063_1);
				echo "</pre>";
				*/
				
				for($i=0;$i<strlen($Source_Code_clear);$i++)
				{
					if(	$Source_Code_clear[$i] == 'c'  	&&
						$Source_Code_clear[$i+1] == 'l'	&&
						$Source_Code_clear[$i+2] == 'a'	&&
						$Source_Code_clear[$i+3] == 's'	&&
						$Source_Code_clear[$i+4] == 's'	
					)
					{
						$flag = 0;
						for($j=$i+5;$j<strlen($Source_Code_clear);$j++)
						{
										
							if($Source_Code_clear[$j] == '{')
							{
								$flag++;
							}
							else if($Source_Code_clear[$j] == '}')
							{
								$flag--;
								if($flag == 0	&&	$Source_Code_clear[$j+1]==';')
								{
									$temp_array = Null;
									// 一個完整的class
									for($n=$i,$k=$i ; $n<=$j+1,$k<=$j+1 ; $n++,$k++)
									{
											$temp_array[$n] = $Source_Code_clear[$k];
									}
									$string_of_class = implode("",$temp_array);		// 把陣列結合成為字串，此陣列為class XXX { ... };
									
									//echo $string_of_class."<br><br>";
									 
									if(	preg_match("/class".$C2063_1[1]."/",$string_of_class)	!=Null	)
									{
										$result = delete_class_nameTitle($string_of_class);
										
										/*
										echo "<pre>";
										print_r($result);
										echo "</pre>";
										*/
										if($result[0] == 'done')	//如果有消除過 才執行以下判斷
										{
											if(	preg_match("/".$C2063_1[2]."(\S)/",$result[1],$C2063_1_semicolon)!=Null	)
											{
												if(	$C2063_1_semicolon[1] != '('	)
												{
													return 'C2063_1';
												}
											
											}
										}	
									
									}
									 
									
									break;
								}
							}
						}
					}
					
				} // end of for	
				
			}



/*
		
			if( $Error_Code[1] =='C3755' )
			{
				
				preg_match("/C2063: \'(\w+)\' : 不是函式/",$str_compile_msg,$match2063_1);
				if(preg_match('/class'.$match2063_1[1].'/',$Source_Code_clear,$match2063_2)	!=Null)
				{
					return 'C2063';
				}
			}*/







			return 'C2063_NG';
		}
		
	// C2064
		case 'C2064':
		{
			return 'C2064';
		}
		
	// C2065
		case 'C2065':
		{
			if(	preg_match("/C2065: 'cout'/",$str_compile_msg)!=Null	||
				preg_match("/C2065: 'cin'/",$str_compile_msg)!=Null	
			)
			{
				return 'C2065_1';
			}
		
		
			return 'C2065';
		}		
		
	// C2082
		case 'C2082':
		{
			return 'C2082';
		}
		
	// C2084	
		case 'C2084':
		{
			$str_compile_msg = str_replace(" ","",$str_compile_msg);	
			
			
			// test.cpp(8) : error C2084: 函式 'void MyClassA::func_1(int)' 的主體已經被宣告了 
			// test.cpp(4) : 請參閱 'func_1' 之前的定義

			preg_match("/C2084:函式\'(\S+)\'的主體已經被宣告了/",$str_compile_msg,$match2084);
			// echo $match2084[1]."<br>";
			preg_match("/請參閱\'(\S+)\'之前的定義/",$str_compile_msg,$match2084_2);
			// echo $match2084_2[1]."<br>";
			preg_match("/".$match2084_2[1]."/",$match2084[1],$match2084_2_1);
			// echo $match2084_2_1[0];
			
			if( $match2084 != Null &&  $match2084_2!=Null && $match2084_2_1!=Null)
			{
				return 'C2084';
			}

			
			return 'C2084_NG';
		}
	
	
	// C2106
		case 'C2106':
		{

			// 將原始碼中的換行字元(\n)，替換成( *2106* )，方便下面運算用
			$code_2106 = str_replace("\n","*2106*",$Source_Code);
			$code_2106 = str_replace(" ","",$code_2106);
		
			// 抓錯誤在第幾行
			preg_match("/.cpp\((\d+)\)/",$str_compile_msg,$Error_line);
					
			$count_endl = 0;
			for($i=0;$i<strlen($code_2106);$i++)
			{
				if(	$code_2106[$i]	== '*'	&&
					$code_2106[$i+1]	== '2'	&&
					$code_2106[$i+2]	== '1'	&&
					$code_2106[$i+3]	== '0'	&&
					$code_2106[$i+4]	== '6'	&&
					$code_2106[$i+5]	== '*'	
				)
				{
					$count_endl++;
					if(	$count_endl == $Error_line[1]	||
						$count_endl == $Error_line[1]-1	
					)
					{
						$code_2106[$i]	= '*'		;
						$code_2106[$i+1]	= '!'	;
						$code_2106[$i+2]	= '!'	;
						$code_2106[$i+3]	= '!'	;
						$code_2106[$i+4]	= '!'	;
						$code_2106[$i+5]	= '*'	;
					}
					
				}
			}
			
			// 再把 *2106* 消除
			$code_2106 = str_replace("*2106*","",$code_2106);
			
			$z = 0;
			$temp_array = Null;
			for($i=0;$i<strlen($code_2106);$i++)
			{
				if(	$code_2106[$i]	== '*'	&&
					$code_2106[$i+1]	== '!'	&&
					$code_2106[$i+2]	== '!'	&&
					$code_2106[$i+3]	== '!'	&&
					$code_2106[$i+4]	== '!'	&&
					$code_2106[$i+5]	== '*'	
				)
				{
					$z = $z+1;
				}
				
				if($z==1)
				{
					$temp_array[$i] = $code_2106[$i];
				}
				else if($z==2)
				{
						//echo $code_2106[$i+6].$code_2106[$i+7].$code_2106[$i+8];
				}
			}
			$string = implode("",$temp_array);
			$string = str_replace("*!!!!*","",$string);

			/*
			echo '<pre>';
			print_r($string);
			echo '<pre>';
			*/
			
			
			// -- 
			if(	preg_match("/if/",$string)	!=Null)
			{
				return 'C2106';
			}
			
			// --
			
			

			return 'C2106_NG';
		}
	

	
	
	
	// C2143
		case 'C2143':
		{
		
			// C2143_3
			preg_match("/語法錯誤 : 遺漏 ';'/",$str_compile_msg,$match2143_3);		
						
				for($i=0;$i<strlen($Source_Code_clear);$i++)
				{
					if(	$Source_Code_clear[$i] == 'c'  	&&
						$Source_Code_clear[$i+1] == 'l'	&&
						$Source_Code_clear[$i+2] == 'a'	&&
						$Source_Code_clear[$i+3] == 's'	&&
						$Source_Code_clear[$i+4] == 's'	
					)
					{
						$flag = 0;
						for($j=$i+5;$j<strlen($Source_Code_clear);$j++)
						{
							if($Source_Code_clear[$j] == '{')
							{
								$flag++;
							}
							else if($Source_Code_clear[$j] == '}')
							{
								$flag--;
								if($flag == 0	&&	$Source_Code_clear[$j+1]==';')
								{
									$temp_array = Null;
									// 一個完整的class
									for($n=$i,$k=$i ; $n<=$j+1,$k<=$j+1 ; $n++,$k++)
									{
											$temp_array[$n] = $Source_Code_clear[$k];
									}
									$string_of_class = implode("",$temp_array);		// 把陣列結合成為字串，此陣列為class XXX { ... };
									
									/*
									echo "<pre>";
									echo $string_of_class;
									echo "</pre>";
									*/
									
									
									$result = delete_class_nameTitle($string_of_class);
									/*
										echo "<pre>";
										print_r($result);
										echo "</pre>";
									*/
									if($result[0] == 'done')	//如果有消除過 才執行以下判斷
									{
										if(	preg_match("/public}|private}|protected}/",$result[1])!=Null	)
										{
											return 'C2143_3';
										}
										if(	preg_match("/private{|public{|protected{/",$result[1]) !=Null)
										{
											return 'C2143_4';
										}
										if(	preg_match("/private\(|public\(|protected\(/",$result[1]) !=Null)
										{
											return 'C2143_5';
										}		
									}
									
									
									
									/* C2143_3 already done in C9002
									if(	preg_match("/private}|public}|protected}/",$string_of_class) !=Null)
									{
										return 'C2143_3';
									}
									
									*/
									

							
									break;
								}
								
							}
						}
					}
					
				} // end of for	

		
			// C2143_6
			if( preg_match("/語法錯誤 : 遺漏 ';' \(在 '字串' 之前/",$str_compile_msg) != Null)
			{
				if(	preg_match("/cout\"/",$Source_Code_clear)!=Null)
				{
					return 'C2143_6';
				}
			}
			
			
			
			// C2143_2
			if(	preg_match("/語法錯誤 : 遺漏 '\)'/",$str_compile_msg,$match2143_2) != Null	)
			{
				if(preg_match('/class(\w+)\({/',$Source_Code_clear,$match2143_2_1) != Null)
				{
					return 'C2143_2';
				}
			}
			
			// C2143_1
			if( preg_match("/語法錯誤 : 遺漏 ';'/",$str_compile_msg,$match2143_1) != Null)
			{
			
				if(	preg_match("/遺漏 ';' \(在 '}' 之前\)/",$str_compile_msg)	!=Null	)
				{
					$flag = 0;
					for($i=0;$i<strlen($Source_Code_clear);$i++)
					{
						if($Source_Code_clear[$i] == '{')
						{
							$flag++;
						}
						else if ($Source_Code_clear[$i] == '}')
						{
							$flag--;
							if($flag==0)
							{
								if($Source_Code_clear[$i-1]!=';')
								{
									return 'C2143_1';
								}
							}
						}
					
					}
					
				}
			
				if(
					preg_match("/遺漏 ';' \(在 'return' 之前\)/",$str_compile_msg)	!=Null	&&  preg_match_all("/\Sreturn/",$Source_Code_clear,$C2143_1_return)	!=Null
				)
				{
				
					for($i=0; $i < count($C2143_1_return[0] );$i++)
					{
						if(	$C2143_1_return[0][$i] == ';return'	||
							$C2143_1_return[0][$i] == '{return'	
						)
						{
							// do nothing
						}
						else
						{
							return 'C2143_1';
						}
					}

				}
				
				if(	preg_match("/遺漏 ';' \(在 'private' 之前\)/",$str_compile_msg)	!=Null	||
					preg_match("/遺漏 ';' \(在 'public' 之前\)/",$str_compile_msg)	!=Null	||
					preg_match("/遺漏 ';' \(在 'protected' 之前\)/",$str_compile_msg)	!=Null	
				
				)
				{
					return 'C2143_1';
				}
				
				
			}	// end of C2143_1

			
			// C2143_7
			if(	preg_match("/遺漏 ',' \(在 '\(' 之/",$str_compile_msg)!=Null)
			{
				// echo '123';
				if(	preg_match("/class\w+:public(\w+)\(/",$Source_Code_clear,$C2143_7)!=Null	)
				{	
					/*
					echo "<pre>";
					print_r($C2143_7);
					echo "</pre>";
					*/
					if(	preg_match("/class".$C2143_7[1]."{/",$Source_Code_clear)!=Null	)
					{
						return 'C2143_7';
					}
				}
			}
			

			if(	preg_match("/class\w+:public(\w+);/",$Source_Code_clear,$C2143_8)!=Null		||
				preg_match("/class\w+:private(\w+);/",$Source_Code_clear,$C2143_8)!=Null	||
				preg_match("/class\w+:protected(\w+);/",$Source_Code_clear,$C2143_8)!=Null	
			)
			{
				return 'C2143_8';
			}
			
			
			//C2143_9
			if(	preg_match("/C2143: 語法錯誤 : 遺漏 ';' \(在 '(\w+)::(\w+)' 之前\)/",$str_compile_msg,$C2143_9)!=Null		)
			{
				/*
				echo "<pre>";
				print_r($C2143_9);
				echo "</pre>";
				*/
				if(	preg_match("/;\w+".$C2143_9[1]."::".$C2143_9[2]."\(/",$Source_Code_clear)!=Null		||
					preg_match("/}\w+".$C2143_9[1]."::".$C2143_9[2]."\(/",$Source_Code_clear)!=Null		
				)
				{
					return 'C2143_9';
				}
			}
			
			
			
			return 'C2143_1';
		}
		

		
	// C2144
		case 'C2144':
		{
				preg_match("/C2144: 語法錯誤 : \'(\w+)\' 必須在/",$str_compile_msg,$match2144_1);
				
				for($i=0;$i<strlen($Source_Code_clear);$i++)
				{
					if(	$Source_Code_clear[$i] == 'c'  	&&
						$Source_Code_clear[$i+1] == 'l'	&&
						$Source_Code_clear[$i+2] == 'a'	&&
						$Source_Code_clear[$i+3] == 's'	&&
						$Source_Code_clear[$i+4] == 's'	
					)
					{
						$flag = 0;
						for($j=$i+5;$j<strlen($Source_Code_clear);$j++)
						{
							if($Source_Code_clear[$j] == '{')
							{
								$flag++;
							}
							else if($Source_Code_clear[$j] == '}')
							{
								$flag--;
								if($flag == 0	&&	$Source_Code_clear[$j+1]==';')
								{
									$temp_array = Null;
									// 一個完整的class
									for($n=$i,$k=$i ; $n<=$j+1,$k<=$j+1 ; $n++,$k++)
									{
											$temp_array[$n] = $Source_Code_clear[$k];
									}
									$string_of_class = implode("",$temp_array);		// 把陣列結合成為字串，此陣列為class XXX { ... };
									
									
									$result = delete_class_nameTitle($string_of_class);
									
										/*
										echo "<pre>";
										print_r($result);
										echo "</pre>";
										*/
									
									if($result[0] == 'done')	//如果有消除過 才執行以下判斷
									{
										if(	preg_match("/public\w+|private\w+|protected\w+/",$result[1])!=Null	)
										{
											return 'C2144_1';
										}
	
									}
									
									
									break;
								}
								
							}
						}
					}
					
				} // end of for	
				
			if(	preg_match("/C2144: 語法錯誤 : '\S+' 必須在 ';' 之後/",$str_compile_msg)	!=Null)
			{
				return 'C2144_2';
			}
			
			
			return 'C2144_NG';
		}
		
			
	// C2146
		case 'C2146':
		{

			/*
		// C2146_2
			if($Error_Code[1] == 'C2065')
			{
				preg_match("/C2146: 語法錯誤 : 遺漏 ';' \(在識別項 '(\w+)' 之前\)/",$str_compile_msg,$match2146_2_1)	;
				if(preg_match("/C2146: 語法錯誤 : 遺漏 \';\' \(在識別項 \'\w+\' 之前\)\s\s".$_SESSION['username'].".cpp\(\w+\) : error C2065: \'".$match2146_2_1[1]."\' : 未宣告的識別項/",$str_compile_msg)	!= Null)
				{
					return 'C2146_2';
				}
			}*/
			

		
			if(	preg_match("/C2146: 語法錯誤 : 遺漏 ';' \(在識別項 '(\w+)' 之前\)/",$str_compile_msg,$C2146_identifier)	!=Null)
			{
//				echo $C2146_identifier[1];
/*
					echo "<pre>";
					echo $Source_Code."<br><br><br>";
					echo "</pre>";
*/



			// C2146_6  class Dervied a Based 
			
			
				$Src_code_2146_6 =kill_cpp_note_2slash($Source_Code);
				$Src_code_2146_6 =kill_cpp_note($Src_code_2146_6);
					/*echo "<pre>";
					echo $Src_code_2146_6."<br><br><br>";
					echo "</pre>";
					*/
				if(	preg_match("/class\s+\w+\s+\w+\s+".$C2146_identifier[1]."\s*{/",$Src_code_2146_6)!=Null	)
				{

					return "C2146_6";
				}


			
		// C2146_4	
				//  void、int、char、float、double、bool、short、signed、long
				if(	preg_match("/void\s+\w+\s+".$C2146_identifier[1]."\(/",$Source_Code)!=Null		||
					preg_match("/int\s+\w+\s+".$C2146_identifier[1]."\(/",$Source_Code)!=Null		||
					preg_match("/char\s+\w+\s+".$C2146_identifier[1]."\(/",$Source_Code)!=Null		||
					preg_match("/float\s+\w+\s+".$C2146_identifier[1]."\(/",$Source_Code)!=Null		||
					preg_match("/double\s+\w+\s+".$C2146_identifier[1]."\(/",$Source_Code)!=Null	||
					preg_match("/bool\s+\w+\s+".$C2146_identifier[1]."\(/",$Source_Code)!=Null		||
					preg_match("/short\s+\w+\s+".$C2146_identifier[1]."\(/",$Source_Code)!=Null		||
					preg_match("/signed\s+\w+\s+".$C2146_identifier[1]."\(/",$Source_Code)!=Null	||
					preg_match("/long\s+\w+\s+".$C2146_identifier[1]."\(/",$Source_Code)!=Null		||
					
					preg_match("/void\s+\w+\s+".$C2146_identifier[1].";/",$Source_Code)!=Null	||
					preg_match("/int\s+\w+\s+".$C2146_identifier[1].";/",$Source_Code)!=Null	||
					preg_match("/char\s+\w+\s+".$C2146_identifier[1].";/",$Source_Code)!=Null	||
					preg_match("/float\s+\w+\s+".$C2146_identifier[1].";/",$Source_Code)!=Null	||
					preg_match("/double\s+\w+\s+".$C2146_identifier[1].";/",$Source_Code)!=Null	||
					preg_match("/bool\s+\w+\s+".$C2146_identifier[1].";/",$Source_Code)!=Null	||
					preg_match("/short\s+\w+\s+".$C2146_identifier[1].";/",$Source_Code)!=Null	||
					preg_match("/signed\s+\w+\s+".$C2146_identifier[1].";/",$Source_Code)!=Null	||
					preg_match("/long\s+\w+\s+".$C2146_identifier[1].";/",$Source_Code)!=Null	
				)
				{
					return "C2146_4";
				}
		

				
		// C2146_3	
				if(	preg_match("/(\w+)".$C2146_identifier[1]."\(/",$Source_Code_clear,$C2146_3) != Null		)
				{
					//echo $C2146_3[1];
					//  void、int、char、float、double、bool、short、signed、long
					if(	$C2146_3[1] == "void"	||
						$C2146_3[1] == "int"	||
						$C2146_3[1] == "char"	||
						$C2146_3[1] == "float"	||
						$C2146_3[1] == "double"	||
						$C2146_3[1] == "bool"	||
						$C2146_3[1] == "short"	||
						$C2146_3[1] == "shigned"	||
						$C2146_3[1] == "long"	
					)
					{
						// do nothing
					}
					else
					{
						return  'C2146_3';					
					}
				}
				
//				echo "cout".$C2146_identifier[1];
		// C2146_5
				if(	preg_match_all("/cout(\S)(\S)/",$Source_Code_clear,$C2146_5)!=Null)
				{

					for($c=0;$c<count($C2146_5[0]);$c++)
					{
						if(	$C2146_5[0][$c]	!= 'cout<<')
						{
							return 'C2146_5';
						}
					}
					
					//if($C2146)
				//	return 'C2146_5';
				}
				
			}


	
		/*	if(	preg_match("/C2146: 語法錯誤 : 遺漏 ';'/",$str_compile_msg)	!=Null)
			{
				return 'C2146_1';
			}
			*/
			
			if(	preg_match_all("/\Scout/",$Source_Code_clear,$C2146_1)	!=Null)
			{

				for($c=0;$c<count($C2146_1[0]);$c++)
				{
					if(	$C2146_1[0][$c] != ';cout'	)
					{
						return 'C2146_1';
					}
				}
			}
			
			if(	preg_match_all("/\Scin/",$Source_Code_clear,$C2146_1)	!=Null)
			{
				for($c=0;$c<count($C2146_1[0]);$c++)
				{
					if(	$C2146_1[0][$c] != ';cin'	)
					{
						return 'C2146_1';
					}
				}
			}
			
			
			


			return 'C2146_1';
			//return 'C2146_NG';
			
		}
		
	// C2181
		case 'C2181':
		{
			if(	preg_match("/\)else/",$Source_Code_clear)!=Null)
			{
				return 'C2181';
			}
			
			$flag = 0;
			for($i=0;$i<strlen($Source_Code_clear);$i++)
			{
				if(	$Source_Code_clear[$i]=='i'	&&
					$Source_Code_clear[$i+1]=='f'
				)
				{
					for($j = $i+2 ; $j<strlen($Source_Code_clear);$j++)
					{
						if(	$Source_Code_clear[$j] == '(' )
						{
							$flag++;
						}
						if(	$Source_Code_clear[$j] == ')' )
						{
							$flag--;
							if($flag == 0	&& $Source_Code_clear[$j+1] == ';')
							{
								return 'C2181_1';
							}
						}
						
					}
				}
				
			}
			
			
				return 'C2181_NG';
			
		}
		
		
	// C2182
		case 'C2182':
		{
			// C2182_2
			//preg_match("/C2182: '(\w+)' : 型別 '(\w+)' 的使用不合法/",$str_compile_msg,$match2182)	;	
		
			if(	preg_match("/C2182: '(\w+)' : 型別 '(\w+)/",$str_compile_msg,$match2182)!=Null	)
			{
				/*
				echo "<pre>";
				print_r($match2182);
				echo "</pre>";
				*/
				if(	$match2182[2] == 'void'	)
				{
					if(	preg_match("/void\w+::".$match2182[1]."\(/",$Source_Code_clear)!=Null	)
					{
						return 'C2182_2';
					}
					else if(	preg_match("/void".$match2182[1]."\(/",$Source_Code_clear)!=Null	)
					{
						return 'C2182_2';
					}
					else
					{
						return 'C2182_1';
					}
				}
			}
			
			return 'C2182_NG';
			
		}
	
	// C2208
		case 'C2208':
		{
			return 'C2208';
		}
		


		
		
		
	// C2236
		case 'C2236':
		{
			if(preg_match("/error C2236: 未預期的 'class' '(\w+)'。是否缺少 ';'?/",$str_compile_msg ,$match2236) !=Null)
			{
				//  void、int、char、float、double、bool、short、signed、long
				if(	preg_match("/voidclass".$match2236[1]."/",$Source_Code_clear )		!= Null		||
					preg_match("/intclass".$match2236[1]."/",$Source_Code_clear )		!= Null		||
					preg_match("/charclass".$match2236[1]."/",$Source_Code_clear )	!= Null			||
					preg_match("/floatclass".$match2236[1]."/",$Source_Code_clear )	!= Null			||
					preg_match("/doubleclass".$match2236[1]."/",$Source_Code_clear )	!= Null		||
					preg_match("/boolclass".$match2236[1]."/",$Source_Code_clear )	!= Null			||
					preg_match("/shortclass".$match2236[1]."/",$Source_Code_clear )	!= Null			||
					preg_match("/signedclass".$match2236[1]."/",$Source_Code_clear )	!= Null		||
					preg_match("/longclass".$match2236[1]."/",$Source_Code_clear )	!= Null
				)
				{
					return 'C2236';
				}
			}
			return 'C2236_NG';
		}
		
	case 'C2248':
	{
		return 'C2248';
	}
	
	
	// C2320
	
		case 'C2320':
		{
			if(	preg_match("/C2320: 在存取規範 'public' 之後必須是 ':'/",$str_compile_msg)	!=null	||
				preg_match("/C2320: 在存取規範 'private' 之後必須是 ':'/",$str_compile_msg)	!=null	||
				preg_match("/C2320: 在存取規範 'protected' 之後必須是 ':'/",$str_compile_msg)	!=null
			)
			{
				return 'C2320';
			}

		
			return 'C2320_NG';
		}
		
		
		
	// C2332_1
		case 'C2332':
		{
			if(preg_match("/error C2332: 'class' : 遺漏標記名稱/",$str_compile_msg)!=Null)
			{
				return 'C2332_1';
			}
			else 
			{
				return 'C2332_NG';
			}
		}
		
	// C2352
	/*
		case 'C2352':
		{
			return 'C2352';
		}	
	*/
	// C2365
		case 'C2365':
		{
			return 'C2365';
		}
		
	// C2380
		case 'C2380':
		{
			return 'C2380';
		}	
		
	// C2440
		case 'C2440':
		{
			if(	preg_match("/error C2440: '正在初始化'/",$str_compile_msg)!=Null	&&
				preg_match("/沒有可以取得來源型別的建構函式，或建構函式多載解析模稜兩可/",$str_compile_msg)!=Null
				)
			{
				return 'C2440';
			}
			else
			{
				return 'C2440_NG';
			}
		
		}
		
	// C2447
		case 'C2447':
		{
			if(	preg_match("/C2447: '{' : 遺漏函式標頭/",$str_compile_msg)	!=	Null	)
			{
				// C2447_1
				if(	preg_match('/class\w+;{/',$Source_Code_clear)	!=Null)
				{
					return 'C2447_1';
				}
				
				//	, * & ! [ ] = + - / 
				//  void、int、char、float、double、bool、short、signed、long
				if(	preg_match('/void\w+\([A-Za-z0-9_,\*&!\[\]=+-\/\'\"]*\);{/',$Source_Code_clear)	!= Null			||
					preg_match('/int\w+\([A-Za-z0-9_,\*&!\[\]=+-\/\'\"]*\);{/',$Source_Code_clear)	!= Null			||
					preg_match('/char\w+\([A-Za-z0-9_,\*&!\[\]=+-\/\'\"]*\);{/',$Source_Code_clear)	!= Null			||
					preg_match('/float\w+\([A-Za-z0-9_,\*&!\[\]=+-\/\'\"]*\);{/',$Source_Code_clear)	!= Null		||
					preg_match('/double\w+\([A-Za-z0-9_,\*&!\[\]=+-\/\'\"]*\);{/',$Source_Code_clear)	!= Null		||
					preg_match('/bool\w+\([A-Za-z0-9_,\*&!\[\]=+-\/\'\"]*\);{/',$Source_Code_clear)	!= Null			||
					preg_match('/short\w+\([A-Za-z0-9_,\*&!\[\]=+-\/\'\"]*\);{/',$Source_Code_clear)	!= Null		||
					preg_match('/signed\w+\([A-Za-z0-9_,\*&!\[\]=+-\/\'\"]*\);{/',$Source_Code_clear)	!= Null		||
					preg_match('/long\w+\([A-Za-z0-9_,\*&!\[\]=+-\/\'\"]*\);{/',$Source_Code_clear)	!= Null
				)
				{
					return 'C2447_2';
				}
				
			}
			return 'C2447_NG';
		}
		
	// C2460
		case 'C2460':
		{
			if(	preg_match("/C2460: '(\w+)::(\w+)' : 使用已經定義的 '(\w+)'/",$str_compile_msg,$C2460)!=Null	)
			{
				/*
				echo '<pre>';
				print_r($C2460);
				echo '</pre>';
				*/
				
				if(	$C2460[1] == $C2460[3]	)
				{
					for($i=0;$i<strlen($Source_Code_clear);$i++)
					{
						if(	$Source_Code_clear[$i] == 'c'  	&&
							$Source_Code_clear[$i+1] == 'l'	&&
							$Source_Code_clear[$i+2] == 'a'	&&
							$Source_Code_clear[$i+3] == 's'	&&
							$Source_Code_clear[$i+4] == 's'	
						)
						{
							$flag = 0;
							for($j=$i+5;$j<strlen($Source_Code_clear);$j++)
							{
											
								if($Source_Code_clear[$j] == '{')
								{
									$flag++;
								}
								else if($Source_Code_clear[$j] == '}')
								{
									$flag--;
									if($flag == 0 && $Source_Code_clear[$j+1]==';')
									{
										$temp_array = Null;
										
										// 一個完整的class
										for($n=$i,$k=$i ; $n<=$j+1,$k<=$j+1 ; $n++,$k++)
										{
												$temp_array[$n] = $Source_Code_clear[$k];
										}
										$string_of_class = implode("",$temp_array);		// 把陣列結合成為字串，此陣列為class XXX { ... };
										
										/*
										echo "<pre>";
										echo $string_of_class;
										echo "</pre>";
										*/
											
										$result = delete_class_nameTitle($string_of_class);
										/*
										echo "<pre>";
										print_r($result);
										echo "</pre>";
										*/
										if($result[0] == 'done')	//如果有消除過 才執行以下判斷
										{
											if(	preg_match("/".$C2460[1]."\(".$C2460[2]."\)/",$result[1])!=Null	)
											{
												return "C2460";
											}
										}	
										
										
										
										
										
										break;
									}
								}
							}
							
						}
					
					} // end of for
					
				}
			}
			
			
			return 'C2460_NG';
		}
		
		
	// C2470	
	// 'function' : 類似函式定義，但沒有型式參數清單；正略過程式主體
	// 函式定義遺漏其引數清單。
		case 'C2470':
		{
			// 抓原始的錯誤資訊中的 'function' ， $match2470[1][0] 即為function
			preg_match('/C2470: \'(\S+)\'/',$str_compile_msg,$match2470);
			
			/*
			echo "<pre>";
			print_r($match2470);
			echo "</pre>";
			*/
			if(	preg_match("/".$match2470[1]."{/",$Source_Code_clear,$match2470_src2)	!= Null	)
			{	
				if(	preg_match("/(\w+)::(\w+)/",$match2470[1],$match2470_23) !=Null)
				{
					/*
					echo "<pre>";
					print_r($match2470_23);
					echo "</pre>";
					*/
					return "C2470_2";
				}
				else
				{	//  void、int、char、float、double、bool、short、signed、long
					if(	preg_match("/void".$match2470[1]."{/",$Source_Code_clear)!=Null	||
						preg_match("/int".$match2470[1]."{/",$Source_Code_clear)!=Null	||
						preg_match("/char".$match2470[1]."{/",$Source_Code_clear)!=Null	||
						preg_match("/float".$match2470[1]."{/",$Source_Code_clear)!=Null	||
						preg_match("/double".$match2470[1]."{/",$Source_Code_clear)!=Null	||
						preg_match("/bool".$match2470[1]."{/",$Source_Code_clear)!=Null	||
						preg_match("/short".$match2470[1]."{/",$Source_Code_clear)!=Null	||
						preg_match("/signed".$match2470[1]."{/",$Source_Code_clear)!=Null	||
						preg_match("/long".$match2470[1]."{/",$Source_Code_clear)!=Null							
					)
					{
						return 'C2470_1';
					}
					
					
					//C2470_4
					$Src_code_C2470_4 = kill_cpp_note_2slash($Source_Code);
					$Src_code_C2470_4 = kill_cpp_note($Src_code_C2470_4);
					if(	preg_match("/class\s+\w+\s+".$match2470[1]."\s+{/",$Src_code_C2470_4)!=Null)
					{
						return "C2470_4";
					}
				}
			
			}
			
			else 
			if( preg_match("/{ctor}/",$match2470[1]) != Null)
			{
				return 'C2470_3';
			}
				
				

			return 'C2470_NG';
		}
		
		case 'C2473':
		{
			preg_match("/C2473: '(\w+)' : 類似函式定義，但沒有型式參數清單。/",$str_compile_msg,$match2473);
			
			//  void、int、char、float、double、bool、short、signed、long
			if(	preg_match("/void".$match2473[1]."\{/",$Source_Code_clear)  != Null		||
				preg_match("/int".$match2473[1]."\{/",$Source_Code_clear)  != Null		||
				preg_match("/char".$match2473[1]."\{/",$Source_Code_clear)  != Null		||
				preg_match("/float".$match2473[1]."\{/",$Source_Code_clear)  != Null	||
				preg_match("/double".$match2473[1]."\{/",$Source_Code_clear)  != Null	||
				preg_match("/bool".$match2473[1]."\{/",$Source_Code_clear)  != Null		||
				preg_match("/short".$match2473[1]."\{/",$Source_Code_clear)  != Null	||
				preg_match("/signed".$match2473[1]."\{/",$Source_Code_clear)  != Null	||
				preg_match("/long".$match2473[1]."\{/",$Source_Code_clear)  != Null			
				)
			{
				return 'C2473';
			}
			return 'C2473_NG';
		}

		case 'C2504':
		{
			preg_match("/C2504: '(\w+)' : 基底類別未定義/",$str_compile_msg,$match2504);
			
			/*
			echo "<pre>";
			print_r($match2504);
			echo "</pre>";
			*/
			
			
			// 編譯器說基礎類別尚未定義，但是剖析整個程式碼卻又有找到定義，表示基礎類別定義在衍生類別的下面
			// 此為 C2504_4
			if(	preg_match("/class".$match2504[1]."{/",$Source_Code_clear)!=Null			||
				preg_match("/class".$match2504[1].":public\w+{/",$Source_Code_clear)!=Null	||
				preg_match("/class".$match2504[1].":private\w+{/",$Source_Code_clear)!=Null	||
				preg_match("/class".$match2504[1].":protected\w+{/",$Source_Code_clear)!=Null	
			)
			{
				return 'C2504_4';
			}
			
			
			
			// C2504_2
			if(	preg_match("/class:".$match2504[1]."/",$Source_Code_clear)  != Null		||
				preg_match("/class:public".$match2504[1]."/",$Source_Code_clear)  != Null		||
				preg_match("/class:private".$match2504[1]."/",$Source_Code_clear)  != Null		||
				preg_match("/class:protected".$match2504[1]."/",$Source_Code_clear)  != Null		
			
			)
			{
				return 'C2504_2';
			}

			// C2504_1
			if(	preg_match("/class\w+:".$match2504[1]."{/",$Source_Code_clear)  != Null			||
				preg_match("/class\w+:public".$match2504[1]."{/",$Source_Code_clear)  != Null	||
				preg_match("/class\w+:private".$match2504[1]."{/",$Source_Code_clear)  != Null	||
				preg_match("/class\w+:protected".$match2504[1]."{/",$Source_Code_clear)  != Null	
			)
			{
				return 'C2504_1';
			}
			
			// C2504_3
			if(	preg_match("/class\w+:".$match2504[1]."(\w+){/",$Source_Code_clear,$C2504_3)!=Null	)
			{
				if(	preg_match("/class".$C2504_3[1]."{/",$Source_Code_clear)!=Null		||
					preg_match("/class".$C2504_3[1].":\w+{/",$Source_Code_clear)!=Null				
				)
				{
					return 'C2504_3';
				}
			}
			
			
			
			return 'C2504_NG';
		}

		case 'C2509':
		{
			if(	preg_match("/C2509: '(\w+)' : 成員函式在 '(\w+)' 中未宣告/",$str_compile_msg,$C2509)!=Null	)
			{
				/*
				echo "<pre>";
				print_r($C2509);
				echo "<pre>";
				
				echo $Source_Code_clear;
				*/
				$flag_A = 0;
				$flag_B = 0;
				
				// check $C2509[2] 必須是衍生類別
				if(	preg_match("/class".$C2509[2].":public(\w+){/",$Source_Code_clear,$C2509_basedClass)!=Null	||
					preg_match("/class".$C2509[2].":private(\w+){/",$Source_Code_clear,$C2509_basedClass)!=Null	||
					preg_match("/class".$C2509[2].":protected(\w+){/",$Source_Code_clear,$C2509_basedClass)!=Null	||
					preg_match("/class".$C2509[2].":(\w+){/",$Source_Code_clear,$C2509_basedClass)!=Null	
				)
				{
					/*
					echo "<pre>";
					print_r($C2509_basedClass);
					echo "<pre>";
					*/
					//echo strlen($C2509_basedClass[1]);
					
					for($i=0 ; $i<strlen($Source_Code_clear) ; $i++)
					{
						if(	$Source_Code_clear[$i]=='c'		&&
							$Source_Code_clear[$i+1]=='l'	&&
							$Source_Code_clear[$i+2]=='a'	&&
							$Source_Code_clear[$i+3]=='s'	&&
							$Source_Code_clear[$i+4]=='s'	
						)
						{
							$flag = 0;

							for($j=$i+5 ; $j<strlen($Source_Code_clear) ; $j++)
							{
								if($Source_Code_clear[$j] == '{')
								{
									$flag ++;
								}
								
								if($Source_Code_clear[$j] == '}')
								{
									$flag--;
									if(	$flag == 0 && $Source_Code_clear[$j+1]==';'	)
									{
										$temp_array=Null;
										for($k=$i ; $k<=$j+1 ; $k++)
										{
											$temp_array[$k]= $Source_Code_clear[$k];
										}
										$str_className = implode("",$temp_array);	
										//echo $str_className;
										
										if(	preg_match("/class".$C2509_basedClass[1]."{/",$str_className)	!=Null)
										{
											$str_class_flag_A = preg_replace("/class".$C2509_basedClass[1]."{/","{",$str_className);
											//echo $str_class_flag_A;
											if(	preg_match("/".$C2509[1]."\(/",$str_class_flag_A)!=Null)
											{
												$flag_A = 1;
											}
										}
										
										if(	preg_match("/".$C2509_basedClass[0]."/",$str_className)!=Null	)
										{
											$str_class_flag_B = preg_replace("/".$C2509_basedClass[0]."/","{",$str_className);
										
											//echo $str_class_flag_B;
											
											if(	preg_match("/".$C2509[1]."\(/",$str_class_flag_B)==Null)
											{
												$flag_B = 1;
											}
										}
										
										
										break;
									}
								}
								
							}
							//echo "<br>";
						}
					
					}
				
				
				
				
				}
				/*
				echo "flag_A = ".$flag_A."<br>";
				echo "flag_B = ".$flag_B."<br>";
				*/
				if(	$flag_A == 1 && $flag_B == 1)
				{
					return 'C2509';
				}
				
				
				// $C2509[2] 裡面沒有 $C2509[1] 的原型宣告
				
				// 找到 $C2509[2] 的基礎類別，check 基礎類別裡面必須具有 $C2509[1]
				
			}
		
			return 'C2509_NG';
		}
		
		case 'C2511':
		{
			
			//  void、int、char、float、double、bool、short、signed、long
			if(	preg_match("/C2511: 'void (\w+)::(\w+)\(\S+\)' : 在 '(\w+)' /",$str_compile_msg,$C2511)!=Null	||
				preg_match("/C2511: 'int (\w+)::(\w+)\(\S+\)' : 在 '(\w+)' /",$str_compile_msg,$C2511)!=Null	||
				preg_match("/C2511: 'char (\w+)::(\w+)\(\S+\)' : 在 '(\w+)' /",$str_compile_msg,$C2511)!=Null	||
				preg_match("/C2511: 'float (\w+)::(\w+)\(\S+\)' : 在 '(\w+)' /",$str_compile_msg,$C2511)!=Null	||
				preg_match("/C2511: 'double (\w+)::(\w+)\(\S+\)' : 在 '(\w+)' /",$str_compile_msg,$C2511)!=Null	||
				preg_match("/C2511: 'bool (\w+)::(\w+)\(\S+\)' : 在 '(\w+)' /",$str_compile_msg,$C2511)!=Null	||
				preg_match("/C2511: 'short (\w+)::(\w+)\(\S+\)' : 在 '(\w+)' /",$str_compile_msg,$C2511)!=Null	||
				preg_match("/C2511: 'signed (\w+)::(\w+)\(\S+\)' : 在 '(\w+)' /",$str_compile_msg,$C2511)!=Null	||
				preg_match("/C2511: 'long (\w+)::(\w+)\(\S+\)' : 在 '(\w+)' /",$str_compile_msg,$C2511)!=Null	||
				preg_match("/C2511: '(\w+)::(\w+)\(\S+\)' : 在 '(\w+)'/",$str_compile_msg,$C2511)!=Null
			)
			{
				/*
				echo "<pre>";
				print_r($C2511);
				echo "</pre>";
				*/
				if(	$C2511[1]==$C2511[3]&&
					$C2511[1]==$C2511[2]
				)
				{
					return 'C2511_1';
				}
				
				if(	$C2511[1] == $C2511[3]	)
				{
					// 找到class C2511[1]
					for($i=0;$i<strlen($Source_Code_clear);$i++)
					{
						if(	$Source_Code_clear[$i] == 'c'  	&&
							$Source_Code_clear[$i+1] == 'l'	&&
							$Source_Code_clear[$i+2] == 'a'	&&
							$Source_Code_clear[$i+3] == 's'	&&
							$Source_Code_clear[$i+4] == 's'	
						)
						{
							$flag = 0;
							for($j=$i+5;$j<strlen($Source_Code_clear);$j++)
							{
											
								if($Source_Code_clear[$j] == '{')
								{
									$flag++;
								}
								else if($Source_Code_clear[$j] == '}')
								{
									$flag--;
									if($flag == 0 && $Source_Code_clear[$j+1]==';')
									{
										$temp_array = Null;
										
										// 一個完整的class
										for($n=$i,$k=$i ; $n<=$j+1,$k<=$j+1 ; $n++,$k++)
										{
												$temp_array[$n] = $Source_Code_clear[$k];
										}
										$string_of_class = implode("",$temp_array);		// 把陣列結合成為字串，此陣列為class XXX { ... };
										
										/*
										echo "<pre>";
										echo $string_of_class;
										echo "</pre>";
										*/
										
										$result = delete_class_nameTitle($string_of_class);
											
										/*
										echo "<pre>";
										print_r($result);
										echo "</pre>";
										*/
											
										if($result[0] == 'done')	//如果有消除過 才執行以下判斷
										{
											if(	preg_match("/".$C2511[2]."\(/",$result[1])!=Null	)
											{
												return 'C2511';
											}
										}	

										

										
										break;
									}
								}
							}
							
						}
					
					} // end of for
				}
			}
		
			return 'C2511_NG';
		}
		
		case 'C2512':
		{
			if(	preg_match("/C2512: '(\w+)'/",$str_compile_msg,$C2512)!=Null	)
			{
				//echo $C2512[1];
			
			
				if(preg_match("/cpp\((\d+)\)/",$str_compile_msg,$C2512_error_line)!=Null)
				{
					//echo $C2512_error_line[1];
					/*
					echo "<pre><textarea cols=45 rows=20>";
					echo $Source_Code_endl;
					echo "</textarea></pre>";
					*/
					
					$num_endl = 0;
					for($i=0;$i<strlen($Source_Code_endl);$i++)
					{
						if(	$Source_Code_endl[$i]=="*"	&&
							$Source_Code_endl[$i+1]=="E"	&&
							$Source_Code_endl[$i+2]=="N"	&&
							$Source_Code_endl[$i+3]=="D"	&&
							$Source_Code_endl[$i+4]=="L"	&&
							$Source_Code_endl[$i+5]=="*"	
						)
						{
							$num_endl++;
							
							if($num_endl == $C2512_error_line[1])
							{
								for($k=$i+5 ; $k>0 ;$k--	)
								{
									if(	$Source_Code_endl[$k] == ';'	||
										$Source_Code_endl[$k] == '}'
									)
									{
										$temp_array = Null;
										for($j=$k;$j<$i+6;$j++)
										{
											$temp_array[$j] =  $Source_Code_endl[$j];
										}
										$string_C2512_1 = implode("",$temp_array);
										
										
										break;
									}
								}
								$string_C2512_1 = str_replace("*ENDL*","",$string_C2512_1);
								//echo $string_C2512_1;
								
								if(	preg_match("/(\w+)::(\w+)\(/",$string_C2512_1,$C2512_1)!=Null	)
								{
									/*
									echo "<pre>";
									print_r($C2512_1);
									echo "</pre>";
									*/
									if(	$C2512_1[1]	==	$C2512_1[2]	&&
										$C2512_1[2] !=	$C2512[1]
									)
									{
										return 'C2512_1';
									}
								}
								
								// 如果跑到這邊沒有回傳，就再檢測看看 C2512
								
								$sc = 0; // 計算分號有幾個
								for($k=$i+5 ; $k>0 ;$k--	)
								{
									if(	$Source_Code_endl[$k] == ';')
									{
										$sc = $sc+1;
										if($sc == 2)
										{
											$temp_array = Null;
											for($j=$k;$j<$i+6;$j++)
											{
												$temp_array[$j] =  $Source_Code_endl[$j];
											}
											$string_C2512 = implode("",$temp_array);
											break;
										}
										else if($sc == 1)
										{
											continue;
										}
									}
									
									if(	$Source_Code_endl[$k] == '{')
									{
										
											$temp_array = Null;
											for($j=$k;$j<$i+6;$j++)
											{
												$temp_array[$j] =  $Source_Code_endl[$j];
											}
											$string_C2512 = implode("",$temp_array);
											break;
										
									}
								}
								$string_C2512 = str_replace("*ENDL*","",$string_C2512);
									
								/*
									echo "<pre>";
									echo $string_C2512;
									echo "</pre>";
								*/
								if(	preg_match("/".$C2512[1]."\w+/",$string_C2512)!=Null)
								{
									return 'C2512';
								}
								
								break;
							}
						}
					}
					
				
				}
		
			
			}
			
			return 'C2512_NG';
		}	
		
		case 'C2513':
		{
			return 'C2513';
		}		
		
		case 'C2514':
		{
				for($i=0;$i<strlen($Source_Code_clear);$i++)
				{
					if(	$Source_Code_clear[$i] == 'c'  	&&
						$Source_Code_clear[$i+1] == 'l'	&&
						$Source_Code_clear[$i+2] == 'a'	&&
						$Source_Code_clear[$i+3] == 's'	&&
						$Source_Code_clear[$i+4] == 's'	
					)
					{
						$flag = 0;
						for($j=$i+5;$j<strlen($Source_Code_clear);$j++)
						{
										
							if($Source_Code_clear[$j] == '{')
							{
								$flag++;
							}
							else if($Source_Code_clear[$j] == '}')
							{
								$flag--;
								if($flag == 0	&&	$Source_Code_clear[$j+1]==';')
								{
									$temp_array = Null;
									// 一個完整的class
									for($n=$i,$k=$i ; $n<=$j,$k<=$j ; $n++,$k++)
									{
											$temp_array[$n] = $Source_Code_clear[$k];
									}
									$string_of_class = implode("",$temp_array);		// 把陣列結合成為字串，此陣列為class XXX { ... };
									
									$result = delete_class_nameTitle($string_of_class);
									/*
										echo "<pre>";
										print_r($result);
										echo "</pre>";
									*/
									if($result[0] == 'done')	//如果有消除過 才執行以下判斷
									{
										
										if(preg_match_all("/(\w+):~/",$result[1],$C2514_1)!=Null)
										{	
											/*
											echo "<pre>";
											print_r($C2514_1);
											echo "</pre>";
											*/
											for($m=0;$m<count($C2514_1[1]) ;$m++)
											{
												if(	$C2514_1[1][$m] != 'public'	&&
													$C2514_1[1][$m] != 'private'	&&
													$C2514_1[1][$m] != 'protected'	
												
												)
												{
													return 'C2514_1';
												}
											}
										}
										
										
										if(preg_match_all("/(\w+):/",$result[1],$C2514)!=Null)
										{	
											/*
											echo "<pre>";
											print_r($C2514);
											echo "</pre>";
											*/
											for($m=0;$m<count($C2514[1]) ;$m++)
											{
												if(	$C2514[1][$m] != 'public'	&&
													$C2514[1][$m] != 'private'	&&
													$C2514[1][$m] != 'protected'	
												
												)
												{
													return 'C2514';
												}
											}
										}
										
									}


									break;
								}
								
							}
						}
					}
					
				} // end of for	
				
				
			return 'C2514_NG';
		}
		
		case 'C2524':
		{
			preg_match("/C2524: '(\w+)' : 解構函式 必須擁有 'void' 參數清單/",$str_compile_msg,$match2524);
			if(	preg_match("/~".$match2524[1]."\(\w+\)/",$Source_Code_clear) !=Null)
			{
				return 'C2524';
			}
			
			
			
			return 'C2524_NG';
		}
		
		
		case 'C2533':
		{
			if(	preg_match("/C2533: '(\w+)::{ctor}'/",$str_compile_msg,$C2533)!=Null)
			{
				/*
				echo "<pre>";
				print_r($C2533);
				echo "</pre>";
				*/
				
				//  void、int、char、float、double、bool、short、signed、long
				if(	preg_match("/void".$C2533[1]."::".$C2533[1]."\(/",$Source_Code_clear)!=Null	||
					preg_match("/int".$C2533[1]."::".$C2533[1]."\(/",$Source_Code_clear)!=Null	||
					preg_match("/char".$C2533[1]."::".$C2533[1]."\(/",$Source_Code_clear)!=Null	||
					preg_match("/float".$C2533[1]."::".$C2533[1]."\(/",$Source_Code_clear)!=Null	||
					preg_match("/double".$C2533[1]."::".$C2533[1]."\(/",$Source_Code_clear)!=Null	||
					preg_match("/bool".$C2533[1]."::".$C2533[1]."\(/",$Source_Code_clear)!=Null	||
					preg_match("/short".$C2533[1]."::".$C2533[1]."\(/",$Source_Code_clear)!=Null	||
					preg_match("/signed".$C2533[1]."::".$C2533[1]."\(/",$Source_Code_clear)!=Null	||
					preg_match("/long".$C2533[1]."::".$C2533[1]."\(/",$Source_Code_clear)!=Null	
				)
				{
					return 'C2533';
				}
			}
		
			// C2533_1    用不到了
			if(	preg_match("/C2533: '(\w+)::{ctor}' /",$str_compile_msg,$C2533_1) !=Null	)
			{
				for($i=0;$i<strlen($Source_Code_clear);$i++)
				{
					if(	$Source_Code_clear[$i] == 'c'  	&&
						$Source_Code_clear[$i+1] == 'l'	&&
						$Source_Code_clear[$i+2] == 'a'	&&
						$Source_Code_clear[$i+3] == 's'	&&
						$Source_Code_clear[$i+4] == 's'	
					)
					{
						$flag = 0;
						for($j=$i+5;$j<strlen($Source_Code_clear);$j++)
						{
							if($Source_Code_clear[$j] == '{')
							{
								$flag++;
							}
							else if($Source_Code_clear[$j] == '}')
							{
								$flag--;
								if($flag == 0	&&	$Source_Code_clear[$j+1]==';')
								{
									$temp_array = Null;
									// 一個完整的class
									for($n=$i,$k=$i ; $n<=$j+1,$k<=$j+1 ; $n++,$k++)
									{
											$temp_array[$n] = $Source_Code_clear[$k];
									}
									$string_of_class = implode("",$temp_array);		// 把陣列結合成為字串，此陣列為class XXX { ... };

									// 如果是完整的 class { ... } ;
									// 則do nothing
									
									break;
								}
								else if($flag == 0)
								{
									return 'C2533_1';
								}
								

								
							}
						}
					}
						
				} // end of for

			}
		
		
		
		
		
		
		
		
		
		
		
		
		
		
			return 'C2533_NG';
		}		
		
		case 'C2535':
		{
			return 'C2535';
		}
		
		case 'C2556':
		{
			return 'C2556';
		}	
		
		case 'C2562':
		{
			if(	preg_match("/C2562: '\S+' : 'void' 函式傳回一個值/",$str_compile_msg,$match2562) !=Null)
			{
				return 'C2562';
			}

			return 'C2562_NG';
		}
		
		case 'C2577':
		{
			preg_match("/C2577: '(\S+)' : 解構函式 不可以有傳回型別/",$str_compile_msg,$match2577);
			
			
			// C2577_1
			//  void、int、char、float、double、bool、short、signed、long
			if(	(preg_match("/void".$match2577[1]."\(/",$Source_Code_clear) !=Null		||
				preg_match("/int".$match2577[1]."\(/",$Source_Code_clear) !=Null		||
				preg_match("/char".$match2577[1]."\(/",$Source_Code_clear) !=Null		||
				preg_match("/float".$match2577[1]."\(/",$Source_Code_clear) !=Null		||
				preg_match("/double".$match2577[1]."\(/",$Source_Code_clear) !=Null		||
				preg_match("/bool".$match2577[1]."\(/",$Source_Code_clear) !=Null		||
				preg_match("/short".$match2577[1]."\(/",$Source_Code_clear) !=Null		||
				preg_match("/signed".$match2577[1]."\(/",$Source_Code_clear) !=Null		||
				preg_match("/long".$match2577[1]."\(/",$Source_Code_clear) !=Null		
				)&&
				preg_match("/::/",$match2577[1]) !=Null	
			)
			{
				return 'C2577_1';				
			}			
			
			
		// C2577_2	
			// class XXX { ... };
			if(	preg_match_all("/class(\w+){/",$Source_Code_clear,$match2577_2_class) !=Null)
			{
				// C2577_2
				for($n=0;$n<count($match2577_2_class[1]);$n++	)	// 針對 原始碼中的 'class'，$n為第幾組class
				{
					// destructor defined
					$class_destructor[$n] =  $match2577_2_class[1][$n]."::~".$match2577_2_class[1][$n]."()";   	//  該字串為  MyClass :: ~ MyClass ，'MyClass'為浮動([根據user輸入的class name)
																												//  
					// MyClass 的長度
					// strlen($class_destructor[$n]);		

					for($i=0;$i<strlen($Source_Code_clear);$i++)  // $i 對原始碼逐字剖析
					{	
					//	echo $i." ".$Source_Code_clear[$i]."<br>";
						for($j=0 ; $j< strlen($class_destructor[$n]) ; $j++)
						{	
							if(	$Source_Code_clear[$i+$j] == $class_destructor[$n][$j])
							{
								if($j == strlen($class_destructor[$n])-1 )
								{
									$flag = 0;  // 計算大括號 '{' 與 '}' 的次數
									for($t = ($i+$j) ; $t < strlen($Source_Code_clear) ; $t++)
									{
										if(	$Source_Code_clear[$t] == '{'	)
										{
											$flag++;
										}
										else if($Source_Code_clear[$t] == '}'	)
										{
											$flag--;
										}
										else if(	$Source_Code_clear[$t] == 'r'   &&
													$Source_Code_clear[$t+1] == 'e' &&
													$Source_Code_clear[$t+2] == 't' &&
													$Source_Code_clear[$t+3] == 'u' &&
													$Source_Code_clear[$t+4] == 'r' &&
													$Source_Code_clear[$t+5] == 'n' &&
													$flag > 0
										)
										{
											return 'C2577_2';
										}
									}
								}
							}
							else
							{
								break;
							}
						}

					} // end of for	
				}	// end of C2577_2
			
			}

			// class XXX : YYY { ... };			
			if(	preg_match_all("/class(\w+):\w+{/",$Source_Code_clear,$match2577_2_class) !=Null)
			{
				// C2577_2
				for($n=0;$n<count($match2577_2_class[1]);$n++	)	// 針對 原始碼中的 'class'，$n為第幾組class
				{
					// destructor defined
					$class_destructor[$n] =  $match2577_2_class[1][$n]."::~".$match2577_2_class[1][$n]."()";   	//  該字串為  MyClass :: ~ MyClass ，'MyClass'為浮動([根據user輸入的class name)
																												//  
					// MyClass 的長度
					// strlen($class_destructor[$n]);		

					for($i=0;$i<strlen($Source_Code_clear);$i++)  // $i 對原始碼逐字剖析
					{	
					//	echo $i." ".$Source_Code_clear[$i]."<br>";
						for($j=0 ; $j< strlen($class_destructor[$n]) ; $j++)
						{	
							if(	$Source_Code_clear[$i+$j] == $class_destructor[$n][$j])
							{
								if($j == strlen($class_destructor[$n])-1 )
								{
									$flag = 0;  // 計算大括號 '{' 與 '}' 的次數
									for($t = ($i+$j) ; $t < strlen($Source_Code_clear) ; $t++)
									{
										if(	$Source_Code_clear[$t] == '{'	)
										{
											$flag++;
										}
										else if($Source_Code_clear[$t] == '}'	)
										{
											$flag--;
										}
										else if(	$Source_Code_clear[$t] == 'r'   &&
													$Source_Code_clear[$t+1] == 'e' &&
													$Source_Code_clear[$t+2] == 't' &&
													$Source_Code_clear[$t+3] == 'u' &&
													$Source_Code_clear[$t+4] == 'r' &&
													$Source_Code_clear[$t+5] == 'n' &&
													$flag > 0
										)
										{
											return 'C2577_2';
										}
									}
								}
							}
							else
							{
								break;
							}
						}
						

						


							
						
					
						
					} // end of for	
				
				
				}	// end of C2577_2
			
			}

			return 'C2577_NG';	
		}
		
		case 'C2588':
		{
			return 'C2588';
		}
		

		case 'C2589':
		{
			if(	preg_match("/C2589: '(\w+)' : '::'/",$str_compile_msg,$C2589)!=Null	)
			{
				if(	preg_match("/void/",$C2589[1])!=Null	||	
					preg_match("/int/",$C2589[1])!=Null		||
					preg_match("/char/",$C2589[1])!=Null	||
					preg_match("/float/",$C2589[1])!=Null	||
					preg_match("/double/",$C2589[1])!=Null	||
					preg_match("/bool/",$C2589[1])!=Null	||
					preg_match("/short/",$C2589[1])!=Null	||
					preg_match("/signed/",$C2589[1])!=Null	||
					preg_match("/long/",$C2589[1])!=Null	
				)
				{
					if(	preg_match("/;(\w+)::".$C2589[1]."\w+\(/",$Source_Code_clear,$C2589_class)!=Null	||
						preg_match("/}(\w+)::".$C2589[1]."\w+\(/",$Source_Code_clear,$C2589_class)!=Null	||
						preg_match("/:(\w+)::".$C2589[1]."\w+\(/",$Source_Code_clear,$C2589_class)!=Null	
					)
					{	
						/*
						echo "<pre>";
						print_r($C2589_class);
						echo "</pre>";
						*/
					
						if(	preg_match("/class".$C2589_class[1]."{/",$Source_Code_clear)!=Null	||
							preg_match("/class".$C2589_class[1].":public\w+{/",$Source_Code_clear)!=Null	||
							preg_match("/class".$C2589_class[1].":private\w+{/",$Source_Code_clear)!=Null	||
							preg_match("/class".$C2589_class[1].":protected\w+{/",$Source_Code_clear)!=Null	||
							preg_match("/class".$C2589_class[1].":\w+{/",$Source_Code_clear)!=Null	
						)
						{
							return 'C2589_3';
						}
					}
				}
			}
		
		
			//  void、int、char、float、double、bool、short、signed、long
			/*if(	preg_match("/C2589: 'void' : '::'/",$str_compile_msg)	!=Null		||
				preg_match("/C2589: 'int' : '::'/",$str_compile_msg)	!=Null		||
				preg_match("/C2589: 'char' : '::'/",$str_compile_msg)	!=Null		||
				preg_match("/C2589: 'float' : '::'/",$str_compile_msg)	!=Null		||
				preg_match("/C2589: 'double' : '::'/",$str_compile_msg)	!=Null		||
				preg_match("/C2589: 'bool' : '::'/",$str_compile_msg)	!=Null		||
				preg_match("/C2589: 'short' : '::'/",$str_compile_msg)	!=Null		||
				preg_match("/C2589: 'signed' : '::'/",$str_compile_msg)	!=Null		||
				preg_match("/C2589: 'long' : '::'/",$str_compile_msg)	!=Null
			)
			{
				return 'C2589_3';
			}
		*/
		
		
		
		
			if(	preg_match("/C2589: '{' : '::' 右邊的語彙基元不合法/",$str_compile_msg,$match2589)!=Null)
			{
					for($i=0;$i<strlen($Source_Code_clear);$i++)
					{
						if(	$Source_Code_clear[$i] == 'c'  	&&
							$Source_Code_clear[$i+1] == 'l'	&&
							$Source_Code_clear[$i+2] == 'a'	&&
							$Source_Code_clear[$i+3] == 's'	&&
							$Source_Code_clear[$i+4] == 's'	
						)
						{
							$flag = 0;
							for($j=$i+5;$j<strlen($Source_Code_clear);$j++)
							{
											
								if($Source_Code_clear[$j] == '{')
								{
									$flag++;
								}
								else if($Source_Code_clear[$j] == '}')
								{
									$flag--;
									if($flag == 0 && $Source_Code_clear[$j+1]==';')
									{
										$temp_array = Null;
										
										// 一個完整的class
										for($n=$i,$k=$i ; $n<=$j+1,$k<=$j+1 ; $n++,$k++)
										{
												$temp_array[$n] = $Source_Code_clear[$k];
										}
										$string_of_class = implode("",$temp_array);		// 把陣列結合成為字串，此陣列為class XXX { ... };
										
										/*
										echo "<pre>";
										echo $string_of_class;
										echo "</pre>";
										*/
										
										$result = delete_class_nameTitle($string_of_class);
											
										/*
										echo "<pre>";
										print_r($result);
										echo "</pre>";
										*/
											
										if($result[0] == 'done')	//如果有消除過 才執行以下判斷
										{
											//echo "done";
											
											if(	preg_match("/class(\w+){/",$string_of_class,$C2589_2)!=Null	||
												preg_match("/class(\w+):/",$string_of_class,$C2589_2)!=Null	
											)
											{
											/*
												echo "<pre>";
												echo $C2589_2[1];
												echo "</pre>";
											*/
												
												
												if(	preg_match("/".$C2589_2[1]."::{/",$Source_Code_clear)	!=	Null	)
												{
													return 'C2589_2';
												}
												else if(	//  void、int、char、float、double、bool、short、signed、long
													preg_match("/void".$C2589_2[1]."::/",$Source_Code_clear)	!=	Null	||
													preg_match("/int".$C2589_2[1]."::/",$Source_Code_clear)	!=	Null	||
													preg_match("/char".$C2589_2[1]."::/",$Source_Code_clear)	!=	Null	||
													preg_match("/float".$C2589_2[1]."::/",$Source_Code_clear)	!=	Null	||
													preg_match("/double".$C2589_2[1]."::/",$Source_Code_clear)	!=	Null	||
													preg_match("/bool".$C2589_2[1]."::/",$Source_Code_clear)	!=	Null	||
													preg_match("/short".$C2589_2[1]."::/",$Source_Code_clear)	!=	Null	||
													preg_match("/signed".$C2589_2[1]."::/",$Source_Code_clear)	!=	Null	||
													preg_match("/long".$C2589_2[1]."::/",$Source_Code_clear)	!=	Null	
												)
												{
													return 'C2589_1';	// 用不到， 暫時放著
												}
											}
											
											
										}	

										

										
										break;
									}
								}
							}
							
						}
					
					} // end of for
			
			
			}
			
			
		
			return 'C2589_NG';
		}
		
		case 'C2597':
		{
			preg_match("/C2597: 參考非靜態成員 '(\w+)::(\w+)'/",$str_compile_msg,$match2597);
			/*
			echo "<pre>";
			print_r($match2597);
			echo "</pre>";
			*/
			if(preg_match("/".$match2597[1]."::".$match2597[2]."=\w+/",$Source_Code_clear)!=Null)
			{
				$flag = 0;
				for($i=0;$i<strlen($Source_Code_clear);$i++)
				{
					if(	$Source_Code_clear[$i] == 'c'  	&&
						$Source_Code_clear[$i+1] == 'l'	&&
						$Source_Code_clear[$i+2] == 'a'	&&
						$Source_Code_clear[$i+3] == 's'	&&
						$Source_Code_clear[$i+4] == 's'	
					)
					{
						$flag = 0;
						for($j=$i+5;$j<strlen($Source_Code_clear);$j++)
						{
							if($Source_Code_clear[$j] == '{')
							{
								$flag++;
							}
							else if($Source_Code_clear[$j] == '}')
							{
								$flag--;
								if($flag == 0	&&	$Source_Code_clear[$j+1]==';')
								{
									$temp_array = Null;
									// 一個完整的class
									for($n=$i,$k=$i ; $n<=$j,$k<=$j ; $n++,$k++)
									{
											$temp_array[$n] = $Source_Code_clear[$k];
									}
									$string_of_class = implode("",$temp_array);		// 把陣列結合成為字串，此陣列為class XXX { ... };
									
									
									if(	preg_match("/class".$match2597[1]."/",$string_of_class) !=Null	&&
										preg_match("/".$match2597[2]."/",$string_of_class) !=Null
									)
									{
										return 'C2597';
									}
									break;
								}
							}
						}
					}
					
				} // end of for	
			
			}
			return 'C2597_1';
		}
		
		case 'C2600':
		{
			if(	preg_match("/C2600: '([A-Za-z0-9_]+)::([A-Za-z0-9_~]+)' : 無法/",$str_compile_msg,$match2600)	!= Null	)
			{
				/*
				echo "<pre>";
				print_r($match2600);
				echo "</pre>";
				*/
				if(	$match2600[1]==$match2600[2]		|| 	// 建構子 'MyClass::MyClass'
					"~".$match2600[1]==$match2600[2]		// 解構子 'MyClass::~MyClass'
				)
				{
					if(	preg_match("/class".$match2600[1]."{/",$Source_Code_clear)	!=	Null	||
						preg_match("/class".$match2600[1].":\w+{/",$Source_Code_clear)	!=	Null
					)
					{
						return 'C2600';
					}
				}
			}
			return 'C2600_NG';
		}
		
		case 'C2601':
		{
			preg_match("/C2601: '(\S+)' : 區域函式定義不合法/",$str_compile_msg,$match2601);
						
			if(	//  void、int、char、float、double、bool、short、signed、long			
				preg_match("/void".$match2601[1]."\(/",$Source_Code_clear)	!=	Null		||
				preg_match("/int".$match2601[1]."\(/",$Source_Code_clear)	!=	Null			||
				preg_match("/double".$match2601[1]."\(/",$Source_Code_clear)	!=	Null		||
				preg_match("/float".$match2601[1]."\(/",$Source_Code_clear)	!=	Null		||
				preg_match("/char".$match2601[1]."\(/",$Source_Code_clear)	!=	Null		||
				preg_match("/bool".$match2601[1]."\(/",$Source_Code_clear)	!=	Null		||
				preg_match("/short".$match2601[1]."\(/",$Source_Code_clear)	!=	Null		||
				preg_match("/signed".$match2601[1]."\(/",$Source_Code_clear)	!=	Null	||
				preg_match("/long".$match2601[1]."\(/",$Source_Code_clear)	!=	Null	
			)
			{	return 'C2601';
			}
			return 'C2601_NG';
		}

		case 'C2628':
		{
			preg_match("/C2628: '(\w+)' 之後接續 '(\w+)' 不合法/",$str_compile_msg,$match2628);
			
			for($i=0;$i<strlen($Source_Code_clear);$i++)
			{
				if(	$Source_Code_clear[$i] == 'c'  	&&
					$Source_Code_clear[$i+1] == 'l'	&&
					$Source_Code_clear[$i+2] == 'a'	&&
					$Source_Code_clear[$i+3] == 's'	&&
					$Source_Code_clear[$i+4] == 's'	
				)
				{
					$flag = 0;
					for($j=$i+5;$j<strlen($Source_Code_clear);$j++)
					{
						if($Source_Code_clear[$j] == '{')
						{
							$flag++;
						}
						else if($Source_Code_clear[$j] == '}')
						{
							$flag--;
							if($flag == 0	&&	$Source_Code_clear[$j+1]==';')
							{
								$temp_array = Null;
								// 一個完整的class
								for($n=$i,$k=$i ; $n<=$j+1,$k<=$j+1 ; $n++,$k++)
								{
										$temp_array[$n] = $Source_Code_clear[$k];
								}
								$string_of_class = implode("",$temp_array);		// 把陣列結合成為字串，此陣列為class XXX { ... };

								
								
								break;
							}
							else if($flag == 0)
							{
								for($jj=0 ; $jj < strlen($match2628[2]);$jj++)
								{
									if( $Source_Code_clear[$j+$jj+1] != $match2628[2][$jj])
									{
										break;
									}
									else
									{
										return 'C2628';
									}
								}
							}
							

							
						}
					}
				}
					
			} // end of for
			
			
			/*
			if(	preg_match("/class".$match2628[1]."{\S+};/",$Source_Code_clear)	== Null	&&
				preg_match("/class".$match2628[1]."{};/",$Source_Code_clear)	== Null
			)
			{
				return 'C2628';
			}
			*/
			return 'C2628_NG';
		}
		
		case 'C2653':
		{
			preg_match("/C2653: '(\w+)' : 不是類別或命名空間名稱/",$str_compile_msg,$match2653);
			if(	preg_match("/".$match2653[1]."::/",$Source_Code_clear)					&&
				preg_match("/class".$match2653[1]."{/",$Source_Code_clear)	==Null	
			)
			{
				return 'C2653';
			}
			return 'C2653_NG';
		}
		
		case 'C2660':
		{
			return 'C2660';
		}
		
		case 'C2661':
		{
			if(	preg_match("/C2661: '\w+::\w+'/",$str_compile_msg)	!=Null	)
			{
				
				return 'C2661';
			}

			return 'C2661_NG';

		
			
		}
		
		case 'C2664':
		{
			return 'C2664';
		}
		
		case 'C2678':
		{
			if(preg_match("/cin>>endl|cin[A-Za-z0-9_>]+>>endl/",$Source_Code_clear)	!= Null)
			{
				return 'C2678';
			}
		}
		
		case 'C2679':
		{
			if(preg_match("/cin>>endl|cin[A-Za-z0-9_>]+>>endl/",$Source_Code_clear)	!= Null)
			{
				return 'C2679';
			}
			
			
			if(	preg_match("/C2679: 二元運算子 '<<' : 找不到使用右方運算元型別 'void' 的/",$str_compile_msg)!=Null)
			{
				return 'C2679_1';
			}
			
			return 'C2679_NG';
		}
		
		case 'C2761':
		{
			$str_compile_msg_no_space = str_replace(" ","",$str_compile_msg);
			$str_compile_msg_no_space = str_replace("\r\n","",$str_compile_msg_no_space);	// 方便做比對，所以將編譯資訊消除空格&跳行
			
			//  void、int、char、float、double、bool、short、signed、long
			if(	preg_match("/C2761:'void(\w+)::(\w+)/",$str_compile_msg_no_space,$C2761_1)		!=Null	||
				preg_match("/C2761:'int(\w+)::(\w+)/",$str_compile_msg_no_space,$C2761_1)		!=Null	||
				preg_match("/C2761:'char(\w+)::(\w+)/",$str_compile_msg_no_space,$C2761_1)	!=Null	||
				preg_match("/C2761:'float(\w+)::(\w+)/",$str_compile_msg_no_space,$C2761_1)	!=Null	||
				preg_match("/C2761:'double(\w+)::(\w+)/",$str_compile_msg_no_space,$C2761_1)	!=Null	||
				preg_match("/C2761:'bool(\w+)::(\w+)/",$str_compile_msg_no_space,$C2761_1)	!=Null	||
				preg_match("/C2761:'short(\w+)::(\w+)/",$str_compile_msg_no_space,$C2761_1)	!=Null	
			)
			{
				/*
				echo "<pre>";
				print_r($C2761_1);
				echo "</pre>";
				*/
				
					for($i=0;$i<strlen($Source_Code_clear);$i++)
					{
						if(	$Source_Code_clear[$i] == 'c'  	&&
							$Source_Code_clear[$i+1] == 'l'	&&
							$Source_Code_clear[$i+2] == 'a'	&&
							$Source_Code_clear[$i+3] == 's'	&&
							$Source_Code_clear[$i+4] == 's'	
						)
						{
							$flag = 0;
							for($j=$i+5;$j<strlen($Source_Code_clear);$j++)
							{
											
								if($Source_Code_clear[$j] == '{')
								{
									$flag++;
								}
								else if($Source_Code_clear[$j] == '}')
								{
									$flag--;
									if($flag == 0 && $Source_Code_clear[$j+1]==';')
									{
										$temp_array = Null;
										
										// 一個完整的class
										for($n=$i,$k=$i ; $n<=$j+1,$k<=$j+1 ; $n++,$k++)
										{
												$temp_array[$n] = $Source_Code_clear[$k];
										}
										$string_of_class = implode("",$temp_array);		// 把陣列結合成為字串，此陣列為class XXX { ... };
										
										/*
										echo "<pre>";
										echo $string_of_class;
										echo "</pre>";
										*/
										
										$result = delete_class_nameTitle($string_of_class);
											
										/*
										echo "<pre>";
										print_r($result);
										echo "</pre>";
										*/
											
										if($result[0] == 'done')	//如果有消除過 才執行以下判斷
										{
											if(	preg_match("/".$C2761_1[2]."/",$result[1])	!=Null	)
											{
												return 'C2761_1';
											}
											
										}	
										break;
									}
								}
							}
							
						}
					
					} // end of for
			
			}	// end of C2761_1   ;
			
			if(	preg_match("/C2761: '{ctor}' :/",$str_compile_msg)	!=	Null)
			{
				return 'C2761_2';
			}
			
			return 'C2761_NG';
		}
		
		case 'C2784':
		{
			if(	preg_match("/cin<<|cour>>/",$Source_Code_clear)!=Null	)
			{
				return 'C2784';
			}
			else
			{
				return 'C2784_NG';
			}
		}
		
		
		case 'C2864':
		{
			if(	preg_match("/C2864: '(\w+)::(\w+)'/",$str_compile_msg,$C2864)	!=Null)
			{
					/*		C2864: 'MyClass::x' 	*/
			
				for($i=0;$i<strlen($Source_Code_clear);$i++)
				{
					if(	$Source_Code_clear[$i] == 'c'  	&&
						$Source_Code_clear[$i+1] == 'l'	&&
						$Source_Code_clear[$i+2] == 'a'	&&
						$Source_Code_clear[$i+3] == 's'	&&
						$Source_Code_clear[$i+4] == 's'	
						)
					{
							$flag = 0;
							for($j=$i+5;$j<strlen($Source_Code_clear);$j++)
							{
											
								if($Source_Code_clear[$j] == '{')
								{
									$flag++;
								}
								else if($Source_Code_clear[$j] == '}')
								{
									$flag--;
									if($flag == 0 && $Source_Code_clear[$j+1]==';')
									{
										$temp_array = Null;
											
										// 一個完整的class
										for($n=$i,$k=$i ; $n<=$j+1,$k<=$j+1 ; $n++,$k++)
										{
											$temp_array[$n] = $Source_Code_clear[$k];
										}
										$string_of_class = implode("",$temp_array);		// 把陣列結合成為字串，此陣列為class XXX { ... };
											
										// --

										/*
										echo "<pre>";
										echo $string_of_class;
										echo "</pre>";
										*/
										
										$result = delete_class_nameTitle($string_of_class);
											
										/*
										echo "<pre>";
										print_r($result);
										echo "</pre>";
										*/
										
										if($result[0] == 'done')	//如果有消除過 才執行以下判斷
										{
											if(	preg_match("/class".$C2864[1]."{/",$string_of_class)!=Null	||
												preg_match("/class".$C2864[1].":/",$string_of_class)!=Null	
											)
											{
												if(	preg_match("/".$C2864[2]."=/",$result[1])	!=Null)
												{
													return 'C2864';
												}
											}
										}	
										
										// --
											break;
									}
								}
							}
						
					}
						
				} // end of for
			}
			
			else
			{
				return 'C2864_NG';
			}
		}
		
		case 'C2969':
		{
			if(	preg_match("/C2969: 語法錯誤 : ';' : 必須是以 '}' 結尾的成員函式定義/",$str_compile_msg)!=Null)
			{
				return 'C2969';
			}
			else
			{
				return 'C2969_NG';
			}
		}
		
		case 'C3646':
		{
			if(	preg_match("/C3646: '(\w+)' :/",$str_compile_msg,$C3646) !=Null)
			{
				if(	preg_match("/\)".$C3646[1]."/",$Source_Code_clear)	!=Null	)
				{
					return 'C3646';
				}
			}
			else
			{
				return 'C3646_NG';
			}
		}
		
		case 'C3861':
		{
			if(	preg_match("/C3861: '(\w+)': 找不到識別項/",$str_compile_msg,$C3861_1)	!=Null)
			{
				if(	$C3861_1[1] == 'setiosflags'	||
					$C3861_1[1] == 'resetiosflags'	||
					$C3861_1[1] == 'setbase'		||
					$C3861_1[1] == 'setfill'		||
					$C3861_1[1] == 'setorecision'	||
					$C3861_1[1] == 'setw'					
				)
				{
					return 'C3861_2';
				}
				else
				{
					return 'C3861_1';
				}
			}
			else
			{
				return 'C3861_NG';
			}

		
		}
		
		
		case 'C3867':
		{
			return 'C3867';
		}
		
		case 'C4430':
		{
			// 將原始碼中的換行字元(\n)，替換成( *4430* )，方便下面運算用
			
			// 將 /* ...  */ 這種形式的註解忽略掉
			$code_4430 = kill_cpp_note($Source_Code);
			// 將 //...  這種形式的註解忽略掉
			$code_4430 = kill_cpp_note_2slash($code_4430);
			
			$code_4430 = str_replace("\n","*4430*",$code_4430);
			$code_4430 = str_replace(" ","",$code_4430);
		
			/*
			echo "<pre>";
				print_r( $code_4430);
			echo "</pre>";
			*/
			
			// 抓錯誤在第幾行
			preg_match("/.cpp\((\d+)\)/",$str_compile_msg,$Error_line);
					
			$count_endl = 0;
			for($i=0;$i<strlen($code_4430);$i++)
			{
				if(	$code_4430[$i]	== '*'	&&
					$code_4430[$i+1]	== '4'	&&
					$code_4430[$i+2]	== '4'	&&
					$code_4430[$i+3]	== '3'	&&
					$code_4430[$i+4]	== '0'	&&
					$code_4430[$i+5]	== '*'	
				)
				{
					$count_endl = $count_endl+1;
			
					if($count_endl == $Error_line[1])
					{
						$code_4430[$i]	= '*'		;
						$code_4430[$i+1]	= '!'	;
						$code_4430[$i+2]	= '!'	;
						$code_4430[$i+3]	= '!'	;
						$code_4430[$i+4]	= '!'	;
						$code_4430[$i+5]	= '*'	;
					}
					
				}
			}
			
			// 再把 *4430* 消除
			$code_4430 = str_replace("*4430*","",$code_4430);

			// 檢測有class的 C4430_1 跟 C4430_2 情形是否成立
				for($i=0;$i<strlen($code_4430);$i++)
				{
					if(	$code_4430[$i] == 'c'  	&&
						$code_4430[$i+1] == 'l'	&&
						$code_4430[$i+2] == 'a'	&&
						$code_4430[$i+3] == 's'	&&
						$code_4430[$i+4] == 's'	
						)
					{
							$flag = 0;
							for($j=$i+5;$j<strlen($code_4430);$j++)
							{
											
								if($code_4430[$j] == '{')
								{
									$flag++;
								}
								else if($code_4430[$j] == '}')
								{
									$flag--;
									if($flag == 0 && $code_4430[$j+1]==';')
									{
										$temp_array = Null;
											
										// 一個完整的class
										for($n=0,$k=$i ; $n<=$j-$i+1 ,$k<=$j+1 ; $n++,$k++)
										{
											$temp_array[$n] = $code_4430[$k];
											
										}
										$string_of_class = implode("",$temp_array);		// 把陣列結合成為字串，此陣列為class XXX { ... };
	
											//	測試 $string_of_class
											/*
											echo "<pre>";
												echo $string_of_class;
											echo "</pre>";
											*/

										// --
										if(	preg_match("/\*!!!!\*/",$string_of_class)	!=Null	)
										{

											for($z=count($temp_array)	;	$z>=0	;$z--)
											{

												if(	$temp_array[$z] == '*'	&&
													$temp_array[$z-1] == '!'	&&
													$temp_array[$z-2] == '!'	&&
													$temp_array[$z-3] == '!'	&&
													$temp_array[$z-4] == '!'	&&
													$temp_array[$z-5] == '*'	
												)
												{
													for($a = $z-7 ; $a >=0 ; $a--)
													{
														if(	$temp_array[$a]	== ':'	||
															$temp_array[$a]	== ';'	||
															$temp_array[$a]	== '{'	
														)
														{
															return 'C4430_1';
															
														}
														else if(
															$temp_array[$a]	== ')'
														)
														{
															return 'C4430_2';
														}
														
													}
													
												}
												
												
												
												//echo $string_of_class[$z];
											}
											
											
										}

										// --
											break;
									}
								}
							}
						
					}
						
				} // end of for
			
			// 檢測有class的 C4430_3 情形是否成立
				for($z=strlen($code_4430)	;	$z>=0	;$z--)
				{

					if(	$code_4430[$z] == '*'	&&
						$code_4430[$z-1] == '!'	&&
						$code_4430[$z-2] == '!'	&&
						$code_4430[$z-3] == '!'	&&
						$code_4430[$z-4] == '!'	&&
						$code_4430[$z-5] == '*'	
					)
					{
						for($a = $z-7 ; $a >=0 ; $a--)
						{
							if(	$code_4430[$a]	== ';'	||
								$code_4430[$a]	== '}'	||
								$code_4430[$a]	== '>'	
							)
							{
								$temp_array_for_4430_3 = Null;
								for($n=0,$x=$a	;	$n<=$z-7-$a,$x <= $z-7	;	$n++,$x++)
								{
									$temp_array_for_4430_3[$n] =  $code_4430[$x];
								}

								$string_of_4430_3 = implode("",$temp_array_for_4430_3);	//結合成字串
								
								if(	preg_match("/::/",$string_of_4430_3)!=Null	)
								{
									return 'C4430_3';
								}
								else
								{
									return 'C4430';
								}
								
								break;
							}
						}
					}

				}
			return 'C4430_NG';
		}
		
		case 'C4716':
		{
			return 'C4716';
		}
		
		default:
		{
			return 'C0000';
		}
	}	
		
	return 'C0000';
		
} // end of function





function kill_cpp_note_2slash($str_temp_sc)
{
	$str_temp_sc = str_replace("\n","*ENDL*",$str_temp_sc);
	
	for($i=0;$i<strlen($str_temp_sc);$i++)
	{
		
		if(	$str_temp_sc[$i] =='/'	&&
			$str_temp_sc[$i+1] =='/'	
		)
		{
			for($j = $i+2 ; $j < strlen($str_temp_sc) ; $j++)
			{
				
			//	$str_temp_sc[$j] = ' ';
				if(	$str_temp_sc[$j]=='*'	&&
					$str_temp_sc[$j+1]=='E'	&&
					$str_temp_sc[$j+2]=='N'	&&
					$str_temp_sc[$j+3]=='D'	&&
					$str_temp_sc[$j+4]=='L'	&&
					$str_temp_sc[$j+5]=='*'	
				)
				{
					for($a = $i ; $a < $j ; $a++)
					{
						$str_temp_sc[$a] = ' ';
					}
				
				
			//		echo $j;
					break;
				}
				
			}
	//		$string_temp = implode("",$temo_array);
			//echo $string_temp;
			
			
		}
	}

	$str_temp_sc = str_replace("*ENDL*","\n",$str_temp_sc);
	
	//echo $str_temp_sc;
	
	return $str_temp_sc;
}


function kill_cpp_note($str_temp_sc)
{
	for($i=0;$i<strlen($str_temp_sc);$i++)
	{
		if(	$str_temp_sc[$i] =='/'	&&
			$str_temp_sc[$i+1] =='*'	
		)
		{
			$temp_array = Null;
			for($n=$i,$j = $i ; $n<strlen($str_temp_sc),$j < strlen($str_temp_sc) ; $n++,$j++)
			{
				
				$temo_array[$n] = $str_temp_sc[$j];
				if(	$str_temp_sc[$j-2]=='*'	&&
					$str_temp_sc[$j-1]=='/'	
				)
				{
					$gyy = $j;
					break;
				}
				
			}
				//結合成字串
			
			$string_temp = implode("",$temo_array);
			$string_temp = preg_replace("/[^\n]/"," ",$string_temp);
			
			for($n=0,	$k=$i	;	$n<$gyy-$i+1	,$k<$gyy ; $n++,$k++)
			{
				$str_temp_sc[$k] = $string_temp[$n];
			}
		
	
										
		}
	}
		
	return $str_temp_sc;
}












// 
function delete_class_nameTitle($string_of_class)
{

	/*
		echo "<pre>";
		echo $string_of_class;
		echo "</pre>";
	*/
									
	$flag_delete_done = "not done";	// 有做消除的動作才會切換成1
							
	// 「 class { ... } ; 」
	if(	preg_match("/class[A-Za-z0-9_]+{/",$string_of_class,$class_base)	!=Null	)
	{
		// 「 class XXX { ... } 」   消除掉 「 class XXX 」
		$string_of_class = preg_replace("/class[A-Za-z0-9_]+{/","{",$string_of_class);
		$flag_delete_done = "done";
		/*
			echo "After preg_replace:  'class XXX { ... }'  <pre>";
			echo $string_of_class;
			echo "</pre>";
		*/
	}

	// class XXX : YYY {
	// class XXX : public YYY {
	// class XXX : private YYY {
	// class XXX : protected YYY {

	if(	preg_match("/class[A-Za-z0-9_]+:[A-Za-z0-9_]+{/",$string_of_class,$class_derived)!=Null	||
		preg_match("/class[A-Za-z0-9_]+:public[A-Za-z0-9_]+{/",$string_of_class,$class_derived)!=Null	||
		preg_match("/class[A-Za-z0-9_]+:private[A-Za-z0-9_]+{/",$string_of_class,$class_derived)!=Null	||
		preg_match("/class[A-Za-z0-9_]+:protected[A-Za-z0-9_]+{/",$string_of_class,$class_derived)!=Null	
	)
	{

		// 「 class XXX : YYY { ... } 」   消除掉 「 class XXX : YYY 」
		$string_of_class = preg_replace("/class[A-Za-z0-9_]+:[A-Za-z0-9_]+{/","{",$string_of_class);

		$flag_delete_done = "done";

		/*
			echo "After preg_replace:  'class XXX : YYY { ... }'  <pre>";
			echo $string_of_class;
			echo "</pre>";
		*/
	}

	

	/*
		echo "After preg_replace both: <pre>";
		echo $string_of_class;
		echo "</pre>";
	*/

	
	$return_array = array(
					0 => $flag_delete_done,
					1 => $string_of_class,
		);
	
	return $return_array;
	
}

	

?>