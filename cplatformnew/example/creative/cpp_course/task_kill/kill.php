<html> <head>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
<script type="text/javascript">

x = 0;
function countSecond( )
{
  　x = x+1;
  if(x==5)
  {
    x = 0;
  }
　 document.fm.displayBox.value=x;
　  setTimeout("countSecond( )", 1000);
}


function kill_process_with_sec()
{
  $(document).ready(function() {
    $.post('kill_forever_loop.php',{

    },function(txt){
      $('div.message').html(txt);
  
    }); 
  });
  
　 setTimeout("kill_process_with_sec( )", 5000);
} 


</script>
</head>
<title>
每十秒殺 process 一次
</title>
<body bgcolor=lightcyan > <p> </br>

<form name=fm>
<input type="text" name="displayBox" value="0" size=4 >
</form>

<script>
countSecond( );
kill_process_with_sec();

</script>
<div class="message" id="div_show" >
</div>
</body> </html>