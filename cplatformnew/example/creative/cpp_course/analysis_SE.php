<?php
	require_once("configs/config.php");


	

	$SE1 = $_POST['user_SE1'];
	$SE2 = $_POST['user_SE2'];
	$submit_code_id = $_POST['submit_code_id'];
	$first_error_code = $_POST['error_code'];



	/**
	 * ckip-test-driver.php
	 *
	 * PHP version 5
	 *
	 * @category PHP
	 * @package  /
	 * @author   Fukuball Lin <fukuball@gmail.com>
	 * @license  No Licence
	 * @version  Release: <1.0>
	 * @link     http://fukuball@github.com
	 */

	require_once "./CKIPClient/src/CKIPClient.php";

	// change to yours
	define("CKIP_SERVER", "140.109.19.104");
	define("CKIP_PORT", 1501);
	define("CKIP_USERNAME", "yancw");
	define("CKIP_PASSWORD", "u06jo3");

	$ckip_client_obj = new CKIPClient(
	   CKIP_SERVER,
	   CKIP_PORT,
	   CKIP_USERNAME,
	   CKIP_PASSWORD
	);

	$raw_text = $SE1;

	$return_text = $ckip_client_obj->send($raw_text);

	$return_sentence = $ckip_client_obj->getSentence();
	echo $return_sentence[0] ."<br>";


	$return_term = $ckip_client_obj->getTerm();

	//print_r($return_term);


	$SE1_array =array();

	foreach ($return_term as  $value) {

		if( substr( $value["tag"], 0 , 1 )  ==  "N" )
			array_push($SE1_array, $value["term"]);
		
		if( substr( $value["tag"]  , 0 , 1   )== "V"  )
			array_push($SE1_array, $value["term"]);

		if(  $value["tag"] == "FW"  )   //FW 為外文標記
			array_push($SE1_array, $value["term"]);
	}

	//print_r($SE1_array);



	
	$max_tf_idf =0;
	$ms_type_id=0;
	$ms_guide_course = 0;

	$documents_with_term = 0;

	if( count($SE1_array) > 0){


		$rs = $db -> query('SELECT * FROM ms_type');
		while($row = $rs->fetch() ){
			$tag = false;

			$keyword_array = explode( "," , $row["keyword"] );
			foreach ($keyword_array as  $keyword_value) 
				foreach ($SE1_array as $SE1_value ) 
					if( $keyword_value == $SE1_value )
						$tag =true;
			if($tag )
				$documents_with_term++;
		}


		$total_document_count = $rs->rowCount();
		$rs = $db -> query('SELECT * FROM ms_type');
		while($row = $rs->fetch() ){
			$tag = false;   // 因為要算不同error_code 的TF-IDF值，此tag做紀錄
			$error_array = explode( "," , $row["error_code"] );
			foreach ($error_array as $value) {
				if( $first_error_code == $value)
					$tag = true;
			}


			if( $tag == false){
				$keyword_array = explode( "," , $row["keyword"] );
				$keyword_cnt = count($keyword_array);

				$match_keyword_cnt = 0;

				foreach ($keyword_array as  $keyword_value) 
					foreach ($SE1_array as $SE1_value ) 
						if( $keyword_value == $SE1_value )
							$match_keyword_cnt ++;
				//echo $row["id"] ."  ". $match_keyword_cnt . "    " . $keyword_cnt . "<br>";
				$tf = $match_keyword_cnt / $keyword_cnt;

				$tf_idf = $tf * log( $total_document_count / $documents_with_term, 2);


				if( $tf_idf > $max_tf_idf ){
					$max_tf_idf =$tf_idf;
					$ms_type_id = $row["id"];
					$ms_guide_course = $row["guide_course"];
				}
			}
			
		}

		echo "tf-idf: $max_tf_idf ,id: $ms_type_id , course:$ms_guide_course   ";
		//echo '<button type="button" class="btn btn-primary" onclick="window.open('. "'http://tw.yahoo.com'". " , '', " ."config='height=1280,width=720');". ' >開啟引導教材</button>';

		$output = '<button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#guide_course" onclick="open_guide_course('."'$ms_guide_course'".')">開啟引導教材</button>';
		$output .= '<div id="guide_course" class="accordion-body collapse"></div>';
		echo $output;
	}





	date_default_timezone_set('Asia/Taipei');
    $today = date("Y-m-d H:i:s"); 

	$sth = $db->prepare("INSERT INTO collection_se (submit_code_id, se1, se2, tf_idf, ms_type_id, time) VALUES (:submit_code_id, :se1, :se2, :tf_idf, :ms_type_id, :time)");

	$sth->bindParam(':submit_code_id' , $submit_code_id );
	$sth->bindParam(':se1' , $SE1 );
	$sth->bindParam(':se2' , $SE2 );
	$max_tf_idf = 0;
	$sth->bindParam(':tf_idf' , $tf_idf );
	$ms_type_id = 0;
	$sth->bindParam(':ms_type_id' , $ms_type_id );
	$sth->bindParam(':time', $today	);
	//$sth->execute();


	//echo "儲存成功!";
	//header( "Location: cpp_compiler_OV.php?");

?>