<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.png">

    <title>Signin Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../../assets/js/html5shiv.js"></script>
      <script src="../../assets/js/respond.min.js"></script>
    <![endif]-->
  </head>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jqueryui-touch-punch/0.2.2/jquery.ui.touch-punch.min.js"></script>
    <script src="mindmaps-master1/src/cmapapp-bootstrap-master1/js/bootstrap.min.js"></script>
    <script src="mindmaps-master1/src/cmapapp-bootstrap-master1/js/jquery.jsPlumb-1.6.2-min.js"></script>
    <script src="mindmaps-master1/src/cmapapp-bootstrap-master1/js/cmapapp.js"></script>
    <script src="mindmaps-master1/src/cmapapp-bootstrap-master1/js/jquery.js"></script>
    <script src="mindmaps-master1/src/cmapapp-bootstrap-master1/js/bootstrap.js"></script>
    <script src="mindmaps-master1/src/cmapapp-bootstrap-master1/js/holder.js"></script>
    <script src="mindmaps-master1/src/cmapapp-bootstrap-master1/js/modal.js"></script>
    <script src="mindmaps-master1/src/cmapapp-bootstrap-master1/js/transition.js"></script>
  <body>
    <script>
         
    function login(){
              var idlogin=document.getElementById("id").value;
              var pwlogin=document.getElementById("pw").value;
              
                     $.ajax({
                         url:"connect.php",
                         data:({"id":idlogin,"pw":pwlogin}),
                         type : "POST",
                         dataType:'text',
                         success:function(msg){
                                                
                                              if( msg == 1 ){
                                                alert("登入成功!!");
                                                window.open("index2.php","_self")
                                              }
                                              else{
                                                alert("登入失敗!!");
                                                window.open("index.php","_self") 
                                              }

                                          
                            },
                        error: function(xhr,exception){
                                          alert("readyState: "+xhr.readyState+"\nstatus: "+xhr.status);
                                          alert("responseText: "+xhr.responseText);
                                                     },                                          
                         });
                }
     function test(){
              var idlogin=document.getElementById("id").value;
              var pwlogin=document.getElementById("pw").value;
              
                     $.ajax({
                         url:"connect.php",
                         data:({"id":idlogin,"pw":pwlogin}),
                         type : "POST",
                         dataType:'text',
                         success:function(msg){
                                                
                                              if( msg == 1 ){
                                                alert("登入成功!!");
                                                window.open("test11.php","_self")
                                              }
                                              else{
                                                alert("登入失敗!!");
                                                window.open("index.php","_self") 
                                              }

                                          
                            },
                        error: function(xhr,exception){
                                          alert("readyState: "+xhr.readyState+"\nstatus: "+xhr.status);
                                          alert("responseText: "+xhr.responseText);
                                                     },                                          
                         });
                }
       function control(){
              var idlogin=document.getElementById("id").value;
              var pwlogin=document.getElementById("pw").value;
              
                     $.ajax({
                         url:"connect.php",
                         data:({"id":idlogin,"pw":pwlogin}),
                         type : "POST",
                         dataType:'text',
                         success:function(msg){
                                                
                                              if( msg == 1 ){
                                                alert("登入成功!!");
                                                window.open("control.php","_self")
                                              }
                                              else{
                                                alert("登入失敗!!");
                                                window.open("index.php","_self") 
                                              }

                                          
                            },
                        error: function(xhr,exception){
                                          alert("readyState: "+xhr.readyState+"\nstatus: "+xhr.status);
                                          alert("responseText: "+xhr.responseText);
                                                     },                                          
                         });
                }
        function mindmapcollect(){
              var idlogin=document.getElementById("id").value;
              var pwlogin=document.getElementById("pw").value;
              
                     $.ajax({
                         url:"connect.php",
                         data:({"id":idlogin,"pw":pwlogin}),
                         type : "POST",
                         dataType:'text',
                         success:function(msg){
                                                
                                              if( msg == 1 ){
                                                alert("登入成功!!");
                                                window.open("test22.php","_self")
                                              }
                                              else{
                                                alert("登入失敗!!");
                                                window.open("index.php","_self") 
                                              }

                                          
                            },
                        error: function(xhr,exception){
                                          alert("readyState: "+xhr.readyState+"\nstatus: "+xhr.status);
                                          alert("responseText: "+xhr.responseText);
                                                     },                                          
                         });
                }  
        function nestable(){
              var idlogin=document.getElementById("id").value;
              var pwlogin=document.getElementById("pw").value;
              
                     $.ajax({
                         url:"connect.php",
                         data:({"id":idlogin,"pw":pwlogin}),
                         type : "POST",
                         dataType:'text',
                         success:function(msg){
                                                
                                              if( msg == 1 ){
                                                alert("登入成功!!");
                                                window.open("nestable.php","_self")
                                              }
                                              else{
                                                alert("登入失敗!!");
                                                window.open("index.php","_self") 
                                              }

                                          
                            },
                        error: function(xhr,exception){
                                          alert("readyState: "+xhr.readyState+"\nstatus: "+xhr.status);
                                          alert("responseText: "+xhr.responseText);
                                                     },                                          
                         });
                }                                                                     
    </script>

    <div class="container">

      <form class="form-signin"  >
        <h2 class="form-signin-heading" align="center">Please login</h2>
        <input type="text" class="form-control" placeholder="帳號" id="id" name="id" autofocus>
        <input type="text" class="form-control" placeholder="密碼" id="pw" name="pw">
        <input type="button" class="btn btn-lg btn-primary btn-block" value="登入" onclick="login()" style="display:none">
        <input typr="button" class="btn btn-lg btn-primary btn-block" value="註冊" onclick="location.href='register.php'">
        <input type="button" class="btn btn-lg btn-primary btn-block" value="test" onclick="test()" style="display:none">
        <input type="button" class="btn btn-lg btn-primary btn-block" value="control" onclick="control()" style="display:none">
        <input type="button" class="btn btn-lg btn-primary btn-block" value="collect" onclick="mindmapcollect()" style="display:none">
        <input type="button" class="btn btn-lg btn-primary btn-block" value="登入" onclick="nestable()">
      </form>

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  </body>
  </html>