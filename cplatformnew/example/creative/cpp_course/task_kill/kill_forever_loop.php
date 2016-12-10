<?php 

	$db_host = "localhost";
	$db_name = "cpp";
	$user = "yencw";
	$password = "root";
	$dsn = "mysql:host=".$db_host.";dbname=".$db_name;
	$options = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
	
	$db = new PDO($dsn, $user, $password, $options);

//set_time_limit(0);


	// CPU 執行時間超過5秒的process ，都列出來
	$str_correct_output = shell_exec('tasklist /FI "CPUTIME gt 00:00:5"> TASKLIST.txt');
/*
	$stream = fopen( dirname(__FILE__) .'\\TASKLIST.txt' , 'r' );
	$str = stream_get_contents($stream,-1);*/

	$file = fopen(dirname(__FILE__) .'\\TASKLIST.txt', "r");
/*
	//輸出文本中所有的行，直到文件結束為止。iconv("big5","UTF-8",stream_get_contents($pipes[1]));
	while(! feof($file))
	  {
	  	echo iconv("big5","UTF-8", fgets($file)). "<br />";
	  }
	//當讀出文件一行後，就在後面加上 <br> 讓html知道要換行
	fclose($file);
*/

	//system('tasklist /FI "CPUTIME gt 00:00:3" /FO "LIST" > TASKLIST.txt');
	$stream = fopen( dirname(__FILE__) .'\\TASKLIST.txt' , 'r' );
	$str = stream_get_contents($stream,-1);

	date_default_timezone_set('Asia/Taipei');
	echo $today = date("Y-m-d H:i:s") . "<br>";/*
	echo "印出超過 5秒 的process";
	echo "<pre>";
	print_r(iconv("big5","UTF-8", $str));
	echo "</pre>";*/
	
	/*
	$php_output = shell_exec('taskkill /F /IM "yancw.exe"');
	print_r($php_output);
	echo "<br> ------------------------------------ <br>";
*/
	// 如果列出來的process裡面，具有 test.exe ，就殺掉
	// 沒有就 do nothing
	// ---
	$sql =  "SELECT name FROM user";
	$rs = $db->query( $sql );
    while($row = $rs->fetch() ){
	    if ( system('taskkill /f /im "'.$row[0].'.exe"') != ""  )
	    	echo "process   $row[0].exe   kill<br>";
		else
			echo "process $row[0].exe not found<br>";

    }


/*
	if(	preg_match("/yancw.exe/" , $str_correct_output )	!= Null)
	{
		echo "process 'yancw.exe' kill<br>";
	    system('taskkill /f /im "yancw.exe"');
	}
	else
	{
		echo "process 'yancw.exe' not found<br>";
	}	
	*/
	
	/*
	// --
	if(	preg_match("/映像名稱:     johnc.exe/",$str)	!=Null)	{	echo "process 'johnc.exe' kill<br>";	system('taskkill /f /im "johnc.exe"');	}else{	echo "process 'johnc.exe' not found<br>";	}	
	

	// ---
	if(	preg_match("/映像名稱:     tre01.exe/",$str)	!=Null)	{	echo "process 'tre01.exe' kill<br>";	system('taskkill /f /im "tre01.exe"');	}else{	echo "process 'tre01.exe' not found<br>";	}	
	if(	preg_match("/映像名稱:     tre02.exe/",$str)	!=Null)	{	echo "process 'tre02.exe' kill<br>";	system('taskkill /f /im "tre02.exe"');	}else{	echo "process 'tre02.exe' not found<br>";	}	
	if(	preg_match("/映像名稱:     tre03.exe/",$str)	!=Null)	{	echo "process 'tre03.exe' kill<br>";	system('taskkill /f /im "tre03.exe"');	}else{	echo "process 'tre03.exe' not found<br>";	}	
	if(	preg_match("/映像名稱:     tre04.exe/",$str)	!=Null)	{	echo "process 'tre04.exe' kill<br>";	system('taskkill /f /im "tre04.exe"');	}else{	echo "process 'tre04.exe' not found<br>";	}	
	if(	preg_match("/映像名稱:     tre05.exe/",$str)	!=Null)	{	echo "process 'tre05.exe' kill<br>";	system('taskkill /f /im "tre05.exe"');	}else{	echo "process 'tre05.exe' not found<br>";	}	
	if(	preg_match("/映像名稱:     tre06.exe/",$str)	!=Null)	{	echo "process 'tre06.exe' kill<br>";	system('taskkill /f /im "tre06.exe"');	}else{	echo "process 'tre06.exe' not found<br>";	}	
	if(	preg_match("/映像名稱:     tre07.exe/",$str)	!=Null)	{	echo "process 'tre07.exe' kill<br>";	system('taskkill /f /im "tre07.exe"');	}else{	echo "process 'tre07.exe' not found<br>";	}	
	if(	preg_match("/映像名稱:     tre08.exe/",$str)	!=Null)	{	echo "process 'tre08.exe' kill<br>";	system('taskkill /f /im "tre08.exe"');	}else{	echo "process 'tre08.exe' not found<br>";	}	
	if(	preg_match("/映像名稱:     tre09.exe/",$str)	!=Null)	{	echo "process 'tre09.exe' kill<br>";	system('taskkill /f /im "tre09.exe"');	}else{	echo "process 'tre09.exe' not found<br>";	}	
	if(	preg_match("/映像名稱:     tre10.exe/",$str)	!=Null)	{	echo "process 'tre10.exe' kill<br>";	system('taskkill /f /im "tre10.exe"');	}else{	echo "process 'tre10.exe' not found<br>";	}	
	if(	preg_match("/映像名稱:     tre11.exe/",$str)	!=Null)	{	echo "process 'tre11.exe' kill<br>";	system('taskkill /f /im "tre11.exe"');	}else{	echo "process 'tre11.exe' not found<br>";	}	
	if(	preg_match("/映像名稱:     tre12.exe/",$str)	!=Null)	{	echo "process 'tre12.exe' kill<br>";	system('taskkill /f /im "tre12.exe"');	}else{	echo "process 'tre12.exe' not found<br>";	}	
	if(	preg_match("/映像名稱:     tre13.exe/",$str)	!=Null)	{	echo "process 'tre13.exe' kill<br>";	system('taskkill /f /im "tre13.exe"');	}else{	echo "process 'tre13.exe' not found<br>";	}	
	if(	preg_match("/映像名稱:     tre14.exe/",$str)	!=Null)	{	echo "process 'tre14.exe' kill<br>";	system('taskkill /f /im "tre14.exe"');	}else{	echo "process 'tre14.exe' not found<br>";	}	
	if(	preg_match("/映像名稱:     tre15.exe/",$str)	!=Null)	{	echo "process 'tre15.exe' kill<br>";	system('taskkill /f /im "tre15.exe"');	}else{	echo "process 'tre15.exe' not found<br>";	}	
	if(	preg_match("/映像名稱:     tre16.exe/",$str)	!=Null)	{	echo "process 'tre16.exe' kill<br>";	system('taskkill /f /im "tre16.exe"');	}else{	echo "process 'tre16.exe' not found<br>";	}	
	if(	preg_match("/映像名稱:     tre17.exe/",$str)	!=Null)	{	echo "process 'tre17.exe' kill<br>";	system('taskkill /f /im "tre17.exe"');	}else{	echo "process 'tre17.exe' not found<br>";	}	
	if(	preg_match("/映像名稱:     tre18.exe/",$str)	!=Null)	{	echo "process 'tre18.exe' kill<br>";	system('taskkill /f /im "tre18.exe"');	}else{	echo "process 'tre18.exe' not found<br>";	}	
	if(	preg_match("/映像名稱:     tre19.exe/",$str)	!=Null)	{	echo "process 'tre19.exe' kill<br>";	system('taskkill /f /im "tre19.exe"');	}else{	echo "process 'tre19.exe' not found<br>";	}	
	if(	preg_match("/映像名稱:     tre20.exe/",$str)	!=Null)	{	echo "process 'tre20.exe' kill<br>";	system('taskkill /f /im "tre20.exe"');	}else{	echo "process 'tre20.exe' not found<br>";	}	
	if(	preg_match("/映像名稱:     tre21.exe/",$str)	!=Null)	{	echo "process 'tre21.exe' kill<br>";	system('taskkill /f /im "tre21.exe"');	}else{	echo "process 'tre21.exe' not found<br>";	}	
	if(	preg_match("/映像名稱:     tre22.exe/",$str)	!=Null)	{	echo "process 'tre22.exe' kill<br>";	system('taskkill /f /im "tre22.exe"');	}else{	echo "process 'tre22.exe' not found<br>";	}	
	if(	preg_match("/映像名稱:     tre23.exe/",$str)	!=Null)	{	echo "process 'tre23.exe' kill<br>";	system('taskkill /f /im "tre23.exe"');	}else{	echo "process 'tre23.exe' not found<br>";	}	
	if(	preg_match("/映像名稱:     tre24.exe/",$str)	!=Null)	{	echo "process 'tre24.exe' kill<br>";	system('taskkill /f /im "tre24.exe"');	}else{	echo "process 'tre24.exe' not found<br>";	}	
	if(	preg_match("/映像名稱:     tre25.exe/",$str)	!=Null)	{	echo "process 'tre25.exe' kill<br>";	system('taskkill /f /im "tre25.exe"');	}else{	echo "process 'tre25.exe' not found<br>";	}	
	if(	preg_match("/映像名稱:     tre26.exe/",$str)	!=Null)	{	echo "process 'tre26.exe' kill<br>";	system('taskkill /f /im "tre26.exe"');	}else{	echo "process 'tre26.exe' not found<br>";	}	
	if(	preg_match("/映像名稱:     tre27.exe/",$str)	!=Null)	{	echo "process 'tre27.exe' kill<br>";	system('taskkill /f /im "tre27.exe"');	}else{	echo "process 'tre27.exe' not found<br>";	}	
	if(	preg_match("/映像名稱:     tre28.exe/",$str)	!=Null)	{	echo "process 'tre28.exe' kill<br>";	system('taskkill /f /im "tre28.exe"');	}else{	echo "process 'tre28.exe' not found<br>";	}	
	if(	preg_match("/映像名稱:     tre29.exe/",$str)	!=Null)	{	echo "process 'tre29.exe' kill<br>";	system('taskkill /f /im "tre29.exe"');	}else{	echo "process 'tre29.exe' not found<br>";	}	
	if(	preg_match("/映像名稱:     tre30.exe/",$str)	!=Null)	{	echo "process 'tre30.exe' kill<br>";	system('taskkill /f /im "tre30.exe"');	}else{	echo "process 'tre30.exe' not found<br>";	}	
	if(	preg_match("/映像名稱:     tre31.exe/",$str)	!=Null)	{	echo "process 'tre31.exe' kill<br>";	system('taskkill /f /im "tre31.exe"');	}else{	echo "process 'tre31.exe' not found<br>";	}	
	if(	preg_match("/映像名稱:     tre32.exe/",$str)	!=Null)	{	echo "process 'tre32.exe' kill<br>";	system('taskkill /f /im "tre32.exe"');	}else{	echo "process 'tre32.exe' not found<br>";	}	
	if(	preg_match("/映像名稱:     tre33.exe/",$str)	!=Null)	{	echo "process 'tre33.exe' kill<br>";	system('taskkill /f /im "tre33.exe"');	}else{	echo "process 'tre33.exe' not found<br>";	}	
	if(	preg_match("/映像名稱:     tre34.exe/",$str)	!=Null)	{	echo "process 'tre34.exe' kill<br>";	system('taskkill /f /im "tre34.exe"');	}else{	echo "process 'tre34.exe' not found<br>";	}	
	if(	preg_match("/映像名稱:     tre35.exe/",$str)	!=Null)	{	echo "process 'tre35.exe' kill<br>";	system('taskkill /f /im "tre35.exe"');	}else{	echo "process 'tre35.exe' not found<br>";	}	
	if(	preg_match("/映像名稱:     tre36.exe/",$str)	!=Null)	{	echo "process 'tre36.exe' kill<br>";	system('taskkill /f /im "tre36.exe"');	}else{	echo "process 'tre36.exe' not found<br>";	}	
	if(	preg_match("/映像名稱:     tre37.exe/",$str)	!=Null)	{	echo "process 'tre37.exe' kill<br>";	system('taskkill /f /im "tre37.exe"');	}else{	echo "process 'tre37.exe' not found<br>";	}	
	if(	preg_match("/映像名稱:     tre38.exe/",$str)	!=Null)	{	echo "process 'tre39.exe' kill<br>";	system('taskkill /f /im "tre39.exe"');	}else{	echo "process 'tre38.exe' not found<br>";	}	
	if(	preg_match("/映像名稱:     tre39.exe/",$str)	!=Null)	{	echo "process 'tre39.exe' kill<br>";	system('taskkill /f /im "tre39.exe"');	}else{	echo "process 'tre39.exe' not found<br>";	}	
	if(	preg_match("/映像名稱:     tre40.exe/",$str)	!=Null)	{	echo "process 'tre40.exe' kill<br>";	system('taskkill /f /im "tre40.exe"');	}else{	echo "process 'tre40.exe' not found<br>";	}	
	if(	preg_match("/映像名稱:     tre41.exe/",$str)	!=Null)	{	echo "process 'tre41.exe' kill<br>";	system('taskkill /f /im "tre41.exe"');	}else{	echo "process 'tre41.exe' not found<br>";	}	
	if(	preg_match("/映像名稱:     tre42.exe/",$str)	!=Null)	{	echo "process 'tre42.exe' kill<br>";	system('taskkill /f /im "tre42.exe"');	}else{	echo "process 'tre42.exe' not found<br>";	}	
	if(	preg_match("/映像名稱:     tre43.exe/",$str)	!=Null)	{	echo "process 'tre43.exe' kill<br>";	system('taskkill /f /im "tre43.exe"');	}else{	echo "process 'tre43.exe' not found<br>";	}	
	if(	preg_match("/映像名稱:     tre44.exe/",$str)	!=Null)	{	echo "process 'tre44.exe' kill<br>";	system('taskkill /f /im "tre44.exe"');	}else{	echo "process 'tre44.exe' not found<br>";	}	
	if(	preg_match("/映像名稱:     tre45.exe/",$str)	!=Null)	{	echo "process 'tre45.exe' kill<br>";	system('taskkill /f /im "tre45.exe"');	}else{	echo "process 'tre45.exe' not found<br>";	}	

*/
	
	
	
?>


