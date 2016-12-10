<!DOCTYPE html>
<html>

{include file="config_css.tpl"}
{include file='header.tpl'}

<br>
<br>
<br>

<script type="text/javascript" language="javascript">
  
  function AA(){
//alert(  $("#C1_4_1").offset().top );
//alert( $('#C1_4_1').position().top);
//$('html, body').scrollTop( $('#C1_4_1').position().top-50  );

  }


</script>


  <body>






    <div class="container" id="container">


  		<div id="C2">
      		{include file='templates\C2.tpl'}
      </div>

      <div id="C2_1">
          {include file='templates\C2_1.tpl'}
      </div>
      <div id="C2_2">
          {include file='templates\C2_2.tpl'}
      </div>
      <div id="C2_2_1">
          {include file='templates\C2_2_1.tpl'}
      </div>
      <div id="C2_2_2">
          {include file='templates\C2_2_2.tpl'}
      </div>
      <div id="C2_2_3">
          {include file='templates\C2_2_3.tpl'}
      </div>
      <div id="C2_2_4">
          {include file='templates\C2_2_4.tpl'}
      </div>
      <div id="C2_3">
          {include file='templates\C2_3.tpl'}
      </div>
      
      <div id="C2_abs">
          {include file='templates\C2_abs.tpl'}
      </div>



    </div>
  </body>
  {include file="footer.tpl"}

</html>