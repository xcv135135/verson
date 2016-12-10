<?php session_start(); ?>
<html>
   <head> 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.png">

    <title>Creative Template for controlgroup</title>
    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="jumbotron.css" rel="stylesheet">
    <link href="carousel.css" rel="stylesheet">
    <script type="text/javascript"> 
      
var msg='是否要離開此頁面??';
window.onbeforeunload=function(){return msg;};

       function pf(){ 
                      var baidu = document.getElementById("i"); 
                      baidu.src = "member.php"; 
                            } 

       function bd(){ 
                document.getElementById('controlgroup').style.display ='none';
                //document.getElementById('sidebar').style.display ='none';
                //document.getElementById('a').style.display ='inline';
                var ideacontent=document.getElementById('ideacombine').innerHTML;
                document.getElementById('ideascombine').innerHTML=ideacontent;
                document.getElementById('pseudodiv').style.display ='inline';
                //document.getElementById('show').style.display='inline'; 
                   } 
       function change()
                    {
                      //var src="";
                      //main.innerHTML=src;
                     }
       function mindmaps()
                     {
                       alert("安安");  
                     }
                     var count=0;
       function check(){
                 var input=document.getElementById('inputdiv').value;
                if (input == "")
                {
                  alert("尚未輸入idea");
                  return false;
                }
               else
               {
                addideas();
               }
                        }              
       function addideas()
                     {
                       var divappend=document.getElementById('uibox');
                       var inputidea=document.getElementById('inputdiv').value;                     
                       count=count+1;
                       $('#uibox').append("<input id='idea"+count+"' type='checkbox' style='margin-top:20px;' value='"+inputidea+"'>"+inputidea+"</input><br>");
                       $("#inputdiv").val("");
                     }
         var str ="";
         var selected = [];
        function idea_checked(){
                            
                               selected = [];
                               $('#uibox input:checked').each(function() {
                                selected.push($(this).attr('value'));
                                                                         });
                               if (selected == "")
                               {
                                var text="尚未選擇任何ideas";
                                document.getElementById('ideacombine').innerHTML=text;
                               }
                               else
                               {
                               
                               var text=JSON.stringify(selected);
                               document.getElementById('ideacombine').innerHTML=text;
                               //var test =document.getElementById('ideacombine').innerHTML;
                               //alert(test);
                               
                                 }
        }


         function saveideas(){
    //var pseudo = document.getElementById('t1').value;
    var ideatext=ideacombine.innerHTML;

    $.ajax({
                         url:"controlsave.php",
                         data:({"ideatext":ideatext}),
                         type : "POST",
                         dataType:'text',
                         success:function(msg){
                                             var t = parseInt(msg);
                                             //document.getElementById("testinput"+nowclicknum).value=t; 
                                             //$("#t1").val(t);
                                             alert("success");
                                               },
                        error: function(xhr,exception){
                                          alert("readyState: "+xhr.readyState+"\nstatus: "+xhr.status);
                                          alert("responseText: "+xhr.responseText);
                                                     },                                          
                         });
                               }
         function saveol(){
             var ol=uibox.innerHTML;
             //alert(ol);
              $.ajax({
                         url:"saveuibox.php",
                         data:({"ol":ol}),
                         type : "POST",
                         dataType:'text',
                         success:function(msg){
                                             var t = parseInt(msg);
                                             //document.getElementById("testinput"+nowclicknum).value=t; 
                                             //$("#t1").val(t);
                                             alert("success");
                                               },
                        error: function(xhr,exception){
                                          alert("readyState: "+xhr.readyState+"\nstatus: "+xhr.status);
                                          alert("responseText: "+xhr.responseText);
                                                     },                                          
                         });

         }

  ////////////////////////////////////////////////////////////////////////虛擬碼旁邊數字自動生成的function

var num="";
  function G(objid){
    return document.getElementById(objid);
  }

  function keyUp(x){
    
    var obj=G("t"+x);
    var str=obj.value; 
    str=str.replace(/\r/gi,"");
    str=str.split("\n");
    n=str.length;
    line(n,x);
  }
  function line(n,x){
    var lineobj=G("li"+x);
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
////////////////////////////////////////////////////////////////////
function change(){
                    document.getElementById('controlgroup').style.display ='inline';
                    document.getElementById('pseudodiv').style.display='none'; 

}
///////////////////////////////////////////////////////////
function openol(){
                    $.ajax({
                url:"openol.php",
                data:({}),
                type:"POST",
                dataType:'text',
                success: function(msg){
                                         document.getElementById('uibox').innerHTML=msg;
                                        //alert(msg);
       
   
      
                                       },
                error:function(xhr, ajaxOptions, thrownError){ alert(xhr.status); alert(thrownError);  }
                  });////////////insert idea into database


                  }




function myFunction() {
    window.open("./cpp_course/cpp_compiler_OV.php");
}

   </script>
    <script src="../../assets/js/jquery.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="offcanvas.js"></script>
    <script src="../../js/holder.js"></script>
    <script src="../../js/modal.js"></script>
    <script src="../../js/transition.js"></script>
  </head>

  <body>
        <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar" role="navigation" style="display:none;">
          <div class="well sidebar-nav">
            <ul class="nav">
              <li class="active"><a href="#myModal" data-toggle="modal"></a></li>
              <li class="active"><a href="#myModal4" data-toggle="modal"></a></li>
            </ul>
          </div><!--/.well -->
        </div><!--/sidebar-->




<div class="navbar navbar-inverse navbar-fixed-top">    
 <div class="container">
   <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav" id="bar">
            <li><a href="index.php ">回登入頁</a></li>
            <li><a href="#question" data-toggle="modal">題目</a></li>
            <li><a href="" data-toggle="modal"></a></li>
            <!-- <li class="dropdown"
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li> -->
          </ul>
        <form class="navbar-form navbar-right"action="connect.php" method="post">
            <div class="form-group" style="color:white">
             <?php
             echo 'hi, 學生 ' ; 
             echo $_SESSION['username'];
             ?>
            </div>           
           <button type="button" class="btn btn-success" onclick="location.href='loginout.php'">登出</button>
      
                  <div class="form-group" align="right">        
                         <img src="images/ncku2_60x50.png" alt="LOGO">      
                  </div>  
          </form>
    </div><!-- end of navbar-collapse collapse-->
   </div><!-- end of container -->
  </div><!-- end of navbar navbar-inverse navbar-fixed-top -->
    <!-- Modal -->
  <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
      <div class="modal-header">
         <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
           <h3 id="myModalLabel">心智圖（Mind Map）</h3>
           <hr>
       <div class="image" align="center">
         <img src="images/mindtest3.png" >
       </div>
     </div>
  <div class="modal-body">
    <p>心智圖（Mind Map）由英國學者Buzan（1971）所提出，是一種以圖像為基礎的結構化擴散性思考模式，透過運用線條、圖案、顏色、關鍵字、符號等分類與階層化概念，以樹狀結構為主，網狀脈絡為輔的系統化資訊整合工具。</p>
  </div>
  <div class="modal-footer" style="isplay:none;">
    <button class="btn" data-dismiss="modal" aria-hidden="true">關閉</button>
  </div>
  </div>
  </div>
</div>
<!-- Modal -->
<div id="myModal4" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
 <div class="modal-dialog">
 <div class="modal-content">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
    <h3 id="myModalLabel">概念圖（Concept Map）</h3>
    <hr>
   <div class="image" align="center">
         <img src="images/concepttest5.png" >
       </div>
  </div>
  <div class="modal-body">
    <p>概念圖（Concept Map）是一種用來組織和表徵知識的輔助工具，由Novak 和Gowin（1984）提出，將某一主題的相關概念置於節點之中，再用線條連結相關的節點和命題，並標出概念之間的意義關係 。</p>
  </div>
  <div class="modal-footer" style="isplay:none;">
    <button class="btn" data-dismiss="modal" aria-hidden="true">關閉</button>
  </div>
  </div>
  </div>
</div>
<!-- Modal -->
<div id="question" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
 <div class="modal-dialog">
 <div class="modal-content">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
    <h3 id="myModalLabel">題目</h3>
    <hr>
   <div class="image" align="center">
         <img src="" >
       </div>
  </div>
  <div class="modal-body">
    <p></p>
  </div>
  <div class="modal-footer" style="isplay:none;">
    <button class="btn" data-dismiss="modal" aria-hidden="true">關閉</button>
  </div>
  </div>
  </div>
</div>
<!-- Modal -->
  <div id="checktest" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
      <div class="modal-header">
         <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
           <h3 id="myModalLabel">目前所勾選的Ideas組合</h3>
           <hr>
       <div class="image" align="center">
         <img src="" >
       </div>
     </div>
  <div class="modal-body bg-danger" id="ideacombine" >
     尚未選擇任何ideas

  </div>
  <div class="modal-footer" style="isplay:none;">
    <button class="btn" data-dismiss="modal" aria-hidden="true">關閉</button>
     <button class="btn" onclick="saveideas()">儲存</button>
  </div>
  </div>
  </div>
</div>
<!-- Modal -->
  <div class="container" id="conta"> 
   
    <div class="col-xs-12 col-sm-16" >
          <p class="pull-right visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
          </p>
          <div class="jumbotron" >
            <div class="row row-offcanvas row-offcanvas-right" id="controlgroup">
             <div class="col-xs-13 col-sm-7">
               <div id="right" style="font-family:Times New Roman;font-size:24px">
                Ideas list:
                <div id="uibox" style="overflow:auto; height:450px; word-break: break-all;Times New Roman;font-size:18px">
               </div>
               </div> 
             </div>

             <div class="col-sm-5 sidebar-offcanvas" id="div_show"  role="navigation">
        
              <div id="left">
                <h1>想法</h1>
                <br>
                <div style="width:320px">
                  <input type="textbox" name="Text" id="inputdiv" ></input>&nbsp;<input type="button" value="增加" id="add" name="add" onclick="check()" class="btn btn-primary" align="center"></input>
                </div> 
                <a href="#checktest" data-toggle="modal" class="btn btn-primary btm-large" onclick="idea_checked()" style="dsplay:none">ideachecks</a>
                <!--<input type="button" value="ideachecks" id="write" name="write" onclick="idea_checked()" class="btn btn-primary" align="center"></input>-->
                <input type="button" value="撰寫虛擬碼" id="write" name="write" onclick="bd()" class="btn btn-primary" align="center" style="dsplay:none"></input>
                 <br>
                <input type="button" value="儲存" id="write" name="write" onclick="saveol()" class="btn btn-primary" align="center" ></input>
                <input type="button" value="開啟" id="write" name="write" onclick="openol()" class="btn btn-primary" align="center" ></input>
              </div><!--end of left-->
            </div><!--end of col-->
           <div><!--end of row row-offcanvas-->
        </div><!--end of jumbotron-->
    </div><!--end of col-xs-12-->
    <div  id="pseudodiv"  style="display:none">
            
                所選取想法組合:<div id="ideascombine" style="width:1000px;font-family:Times New Roman;font-size:24px"></div><p><a href="#myModal" data-toggle="modal" class="btn btn-primary btm-large" >虛擬碼範例</a> &nbsp<input type="button" value="虛擬碼儲存" class="btn btn-primary" id="save"  onclick="savepseudo()"></input> &nbsp<input type="button" value="切換" class="btn btn-primary" id="change"  onclick="change()"></input>&nbsp<input type="button" value="線上程式撰寫" class="btn btn-primary" id="save"  onclick="myFunction()"></input><br>
                
                虛擬碼撰寫:
                <div>
                <span id="ol"><textarea  id="li1"   style="resize:none;width:40px;height:500px;font-size:14px;float:left;overflow-y:hidden" disabled>1.</textarea></span>
               <textarea id="t1"   wrap="off" style="resize:none;width:660px;height:500px;"  onkeyup="keyUp(this.id[this.id.length-1])"  onscroll="G('li').scrollTop = this.scrollTop;" oncontextmenu="return false" spellcheck="false" >
              </textarea>
              </div>
  
         </div> <!--end of pseudodiv-->  
  </div><!--end of container-->  
  
     
  <div id="show" style="display:none;width:100%;height:100%" > 
    <iframe id = "i"  style="width:100%;height:100%"> 
  </div>
 
  

 </body>
</html>
