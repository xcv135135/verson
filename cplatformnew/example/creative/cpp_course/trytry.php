<!DOCTYPE>
<html>
<head>
  <style type="text/css">

		.diff td{
		vertical-align : top;
		white-space    : pre;
		white-space    : pre-wrap;
		font-family    : monospace;
		}

  </style>
  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
</head>
</html>



<input type="text"  id="myInput">
<script type="text/javascript">
/*
    var myInput = document.getElementById("myInput");
    if(myInput.addEventListener ) {
        myInput.addEventListener('keydown',this.keyHandler,false);
    } else if(myInput.attachEvent ) {
        myInput.attachEvent('onkeydown',this.keyHandler); /* damn IE hack */
    }

    function keyHandler(e) {
        var TABKEY = 9;
        if(e.keyCode == TABKEY) {
            this.value += "    ";
            if(e.preventDefault) {
                e.preventDefault();
            }
            return false;
        }
    }*/
</script>


<script type="text/javascript">

$(document).ready(function(){
$("textarea").keydown(function(e) {
  alert();
    if(e.keyCode === 9) { // tab was pressed
        // get caret position/selection

        var start = this.selectionStart;
            end = this.selectionEnd;

        var $this = $(this);

        // set textarea value to: text before caret + tab + text after caret
        $this.val($this.val().substring(0, start)
                    + "\t"
                    + $this.val().substring(end));

        // put caret at right position again
        this.selectionStart = this.selectionEnd = start + 1;

        // prevent the focus lose
        return false;
    }
});
});
/*
document.querySelector("textarea").addEventListener('keydown',function(e) {
    if(e.keyCode === 9) { // tab was pressed
        // get caret position/selection
        var start = this.selectionStart;
        var end = this.selectionEnd;

        var target = e.target;
        var value = target.value;

        // set textarea value to: text before caret + tab + text after caret
        target.value = value.substring(0, start)
                    + "\t"
                    + value.substring(end);

        // put caret at right position again (add one for the tab)
        this.selectionStart = this.selectionEnd = start + 1;

        // prevent the focus lose
        e.preventDefault();
    }
},false);
*/
</script>



<textarea id="textarea1"></textarea>
<textarea></textarea>
<textarea></textarea>





<?php
 // require_once("configs/config.php");

  echo "trytry YES"."<br>";
  //echo '<textarea id="user_feedback_3" name="user_feedback_3" class="form-control" rows="2" placeholder="依照問題請寫下您的想法，並請勿留空白"></textarea>';


  // $count = $db->exec("INSERT INTO user SET name = 'trytry' , password = 'trytry'");
  // var_dump($count);	



//   $rs = $db -> query('SELECT * FROM user');
//   while($row = $rs->fetch() ){
// var_dump($row['email']);
// echo "<br><br>";
// }


// $rs = $db->prepare("SELECT * FROM user");
//  $rs->execute();
// while($row = $rs->fetch() ){
// var_dump($row[0]);
// echo "<br><br>";
// }



// $rs = $db->query("SELECT * FROM user");
// $result_arr = $rs->fetchAll();
// print_r($result_arr[0]);



/*
require_once './class.Diff.php';

//Diff::toTable(Diff::compare( str_replace(  "<br />"  ,"", $code )  , str_replace(  "<br />"  ,"",) , true))
  $temp ="";
  $error_code = "";
  $flag_problem =false;



  $array_id = array();
  $array_id_index = 0;

  $array_segence = array();





  $rs = $db -> query('SELECT * FROM submit_code');

  while( $row = $rs -> fetch() ){
  	$str_arry_error = explode ( "<br />" , $row['code'] ) ;

  	if( $row['compile_info'] ){
  		if( $flag_problem ){

  			array_push( $array_segence , $row['id']);

  			if (  !empty(  $str_arry_error[  $error_line-1  ]  )  )
  				echo "YES";

			$temp .= "<h1>solve problem (error_code: $error_code)</h1>id: " .$row['id'] . "code:<br>". $str_arry_error[ $error_line-1  ]	." <hr/><br>";
			$flag_problem=false;
			$error_code="";

			$array_id[ $array_id_index ] = $array_segence;
			$array_id_index ++;

			$array_segence = array();
  		}
  	}
  	else{

  		if( $row['error_code'] == $error_code){
  			
	  		$error_line = $row['error_line'];

			$temp .= "<h1>OLD PROBLEM</h1>";
			$temp .=  "id: " .$row['id'] .", error code: $error_code <br> code: <br> " .$str_arry_error[ $row['error_line']-1 ] ."<br>" ;

  		}
  		else{
  			$flag_problem = true;
  			$array_segence = array();


  			$temp .= "<h1>different PROBLEM</h1>";
			$error_line = $row['error_line'];
			$error_code = $row['error_code'];
			$code = $row['code'];
			$temp .=  "id: " .$row['id'] .", error code: ". $row['error_code'] ."<br> code: <br> " .$str_arry_error[ $row['error_line']-1 ] ."<br>" ;
  		}

  		array_push( $array_segence , $row['id'] );
  	}
  }






  foreach ($array_id as $key => $value) {
  	foreach ($value as $key1 => $value1) {
  		echo $value1 ."   ";
  		# code...
  	}
  	echo "<br>";
  	# code...
  }

  count($array_id);
  
	echo $temp;

*/
?>