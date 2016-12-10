<?php /* Smarty version Smarty-3.1.16, created on 2015-04-24 05:30:19
         compiled from ".\templates\cpp_compiler.tpl" */ ?>
<?php /*%%SmartyHeaderCode:547654192f546e9e36-57249643%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aee8e5e138740f475d9f17975a0e40341431392f' => 
    array (
      0 => '.\\templates\\cpp_compiler.tpl',
      1 => 1429846214,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '547654192f546e9e36-57249643',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_54192f54710115_49781391',
  'variables' => 
  array (
    'choice_Qestion_id' => 0,
    'choice_course_page' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54192f54710115_49781391')) {function content_54192f54710115_49781391($_smarty_tpl) {?><!DOCTYPE html>
<html>


<?php echo $_smarty_tpl->getSubTemplate ("config_css.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>



<link rel="stylesheet" href="./highlight/styles/default.css">
<script src="./highlight/highlight.pack.js"></script>
<script>hljs.initHighlightingOnLoad();</script>



<script language="javascript" type="text/javascript">

$(document).ready(function(){


var initial_code_str ='#include <iostream>  //Basic library\r' +
'#include <cstdlib>  //system("pause")\r' +
'using namespace std;\r\r'+
'int main(){ \r\r\r' +
'\tcout << "Hello World";\r\r\r' + 
'\tsystem("pause");\r'+
'\treturn 0;\r'+
'}';

 $("#t1").text(initial_code_str);






  $("textarea").keydown(function(e) {
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

  // line 17-56 設定編寫程式的動態行數的程式碼
  var num="";
  
  function G(objid){
    return document.getElementById(objid);
  }

  function keyUp(){
    
    var obj=G("t1");
    var str=obj.value; 
    str=str.replace(/\r/gi,"");
    str=str.split("\n");
    n=str.length;
    line(n);
  }
  function line(n){
    var lineobj=G("li");
    for(var i=1;i<=n;i++){
       if(document.all){
        num+=i+".\r\n";
       }else{
        num+=i+".\n";
       }
    }
    lineobj.value=num;
    num="";
  }


/*
  function autoScroll(){
    var nV = 0;
    if(!document.all){
       nV=G("t1").scrollTop;
       G("li").scrollTop=nV;
       setTimeout("autoScroll()",20);
    }
  }
  if(!document.all){
    window.addEventListener("load",autoScroll,false);
  }
*/



function key_up(){
 // alert("123");
 hljs.initHighlightingOnLoad();

}




function Compile(){
    
   


    $("#compile_btn").button('loading');

    var str = document.getElementById("t1").value;  
    //var str = $("#t11").text();


    var str2 = document.getElementById("stdin").value;

    document.getElementById("stdin").value = "";

   

    $.post("test_compile.php",{
      code_str: str ,
      std_in: str2 ,
    },function(txt){

      document.getElementById("div_show").innerHTML=txt;


       $("#compile_btn").button('reset');   //$("#compile_btn").show();


        //$("#compile_btn").attr('onclick', "Compile()" );
      //alert(txt);
      //document.getElementById("stdin1").value = txt;

    }); 


 }




</script>

<body>
<br>
<br>
<br>




<!--

<span id="choice_Qestion_id" style="visibility:hidden;display:none"><?php echo $_smarty_tpl->tpl_vars['choice_Qestion_id']->value;?>
</span>
<span id="choice_course_page" style="visibility:hidden;display:none"><?php echo $_smarty_tpl->tpl_vars['choice_course_page']->value;?>
</span>
-->

<div class="container">
<div class="jumbotron">

      <div class="row row-offcanvas row-offcanvas-right">

        <div class="col-xs-13 col-sm-7">

<!--
            <div id ="qestion_describe">
                題目:
               
            </div>
-->           
            <div >
              <a  id="compile_btn" class="btn btn-primary" onclick="Compile()"><span class="glyphicon glyphicon-play-circle"></span>  Compile</a>
              <!--<input type="button" class="btn btn-primary" value="返回" onclick="history.back()" /> -->
              <br>
                
            <div>
                <span id="ol"><textarea  id="li" rows="20" disabled>1.   2.   3.    4.    5.    6.    7.    8.    9.   10. 11. 12. 13.</textarea></span>
    <textarea id="t1" style="width:580px;" rows="20" wrap="off"  onkeyup="keyUp()" onscroll="G('li').scrollTop = this.scrollTop;" oncontextmenu="return false" spellcheck="false"></textarea>



    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">輸入使用教學</button>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-dialog modal-lg">
        <img src="./images/cin_explain.png" />
      </div>
  </div>
</div>


            <textarea id="stdin" style="width:580px;height:50px;" placeholder="當您的程式碼需要input資料時，請在此輸入"></textarea>
          <!--  <div id="div_show"  style=' border:1px solid  ;width:580px '>
              result
             </div> -->

<!--
             <pre><code  contenteditable="true" id="t11" class="html" onkeyup="key_up()" >#include < iostream>  //Basic library
#include < cstdlib>  //system("pause")
using namespace std;

int main(){ 

int a=10;
  cout << "Hello World";


  system("pause");
  return 0;
}</code></pre>
-->








            </div>
           </div>



        </div><!--/span-->

        <div class="col-sm-5 sidebar-offcanvas" id="div_show"  role="navigation">
      
        </div><!--/span-->
      </div><!--/row-->

</div>
</div><!--/.container-->





</body>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


</html><?php }} ?>
