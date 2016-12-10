<!DOCTYPE html>
<html>


{include file="config_css.tpl"}

{include file='header.tpl'}

<script type="text/javascript">
window.onbeforeunload = function () {
if (!confirm('')) {
return '再次確認!!';
}
}
</script>

<script language="javascript" type="text/javascript">
$(document).ready(function(){


var initial_code_str ='#include <iostream>  //Basic library\r' +
'using namespace std;\r\r'+
'int main(){ \r\r\r' +
'\tcout << "Hello World";\r\r\r' + 
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



    var ctrlDown = false;
    var ctrlKey = 17, vKey = 86, cKey = 67;

    $(document).keydown(function(e)
    {
        if (e.keyCode == ctrlKey) ctrlDown = true;
    }).keyup(function(e)
    {
        if (e.keyCode == ctrlKey) ctrlDown = false;
    });

    $("#t1").keydown(function(e)
    {
        if (ctrlDown && (e.keyCode == vKey || e.keyCode == cKey)) return false;
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






  function change_ques_id(id){
      
      document.getElementById("span_ques_id").innerHTML=id;

      $.post("ques_id.php",{
        Ques_id: id 
        
      },function(txt){
        $("#question_show").html(txt);
        

      }); 
  }


function Compile(){
    // $("#compile_btn").prop('onclick', null );
//     $("#compile_btn").hide();
     $("#compile_btn").button('loading');

    var str = document.getElementById("t1").value;  
    
    var std_in = document.getElementById("stdin").value;
   

    document.getElementById("stdin").value = "";

    $.post("test_compile_OV.php",{
      
      code_str: str ,
      std_in: std_in ,
    },function(txt){

      document.getElementById("error_sample").innerHTML=txt;      
       if( txt.indexOf("submitCheck()") > 0 )
        ;
      else
         $("#compile_btn").button('reset');   //$("#compile_btn").show();
    
    }); 


 }





function submitCheck(){

  var error_code = document.getElementById("error_code").innerHTML;
  
  //var fb1 = document.getElementById("user_feedback_1").value;
  var SE1 = document.getElementById("user_feedback_1").value;
  var SE2 = document.getElementById("user_feedback_2").value;
 

  if( SE1 == "" || SE2 == ""){
    alert("請勿留空白");
    return 0;
  }



  $.post("save_feedback.php",{
    submit_code_id : $("#submit_code_id").text() ,

    error_code : error_code,
    user_SE1 : SE1,
    user_SE2 : SE2,
    
    },function(txt){
      //alert(txt);
      if( txt == 1){
        $("#error_sample").text("");
        $("#compile_btn").button('reset');
      }
      else
        alert("可能發生問題了");
      
      //$("#compile_btn").show();
    }
  );


  /*
  $.post("analysis_SE.php",{
      submit_code_id : $("#submit_code_id").text() ,

      user_SE1 : SE1,
      user_SE2 : SE2,
      error_code : error_code,
      },function(txt){
        //alert(txt);
        document.getElementById("error_sample").innerHTML=txt;      

        //$("#error_sample").text(txt);
        $("#compile_btn").button('reset');
        
        //$("#compile_btn").show();
      }
    );
  */



}


function sumbit_answer(){

  //var str = document.getElementById("t1").value;  
    
  var str = document.getElementById("t1").value; 
  $.post("check_answer.php",{
    code_str: str 
   
    
  },function(txt){
    if( txt ==1)
      alert("程式碼提交成功!");
    else
      alert("提交程式碼發生問題!");
  
  }); 

}





</script>

<body >
<br>
<br>
<br>


<div class="container">
<div class="jumbotron">



      <div class="row row-offcanvas row-offcanvas-right">


        <div class="col-xs-12 col-sm-7">

          <p  style="line-height:120%">
依照您所想的應用和虛擬碼來實作程式，而實作程式有以下規定： <br>
至少建立一個類別，其中類別需包含：<br>
１. 至少一個資料成員(基本型別不限) <br>
２. 至少一個建構子(<font color='red'>參數自訂，內容請勿空白</font>) <br>
３. 至少兩個成員函式，函式內容自行定義<br>

根據以上建立兩個物件，並且測試輸出類別中兩個成員函式執行結果。<br>

       </p>

<!--
      
            <button id="1" type="button" class="btn btn-danger"  onclick="change_ques_id(this.id)">
              練習題一
            </button>
          
            <button id="2"type="button" class="btn btn-danger"  onclick="change_ques_id(id)">
              練習題二
            </button>
          
            <button id="3" type="button" class="btn btn-danger"  onclick="change_ques_id(id)">
              練習題三
            </button> 
           
         
            <button id="4" type="button" class="btn btn-danger" onclick="change_ques_id(id)">
              挑戰題
            </button> 

            <div id="question_show">
             
            </div>
-->
            <div >
              <a id="compile_btn" class="btn btn-primary" href="#Compile" onclick="Compile()"><span class="glyphicon glyphicon-play-circle"></span>Compile</a>

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
            

            <div class='alert alert-info'>送出答案(以最後一次送出的為主)<br> <button type='button' class='btn btn-danger'  onclick='sumbit_answer()'>提交答案</button><br></div>

            <!--<div id="div_show"  style=' border:1px solid  ;width:580px '>
              result
             </div> -->
            </div>
           </div>



        </div><!--/span-->

        <div class="col-sm-5 sidebar-offcanvas" id="error_sample" role="navigation">


        </div><!--/span-->
      </div><!--/row-->

</div>
</div><!--/.container-->



</body>
{include file="footer.tpl"}

</html>