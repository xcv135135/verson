<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.png">

    <title>user page</title>

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    
    <link href="jumbotron.css" rel="stylesheet">
    <link href="carousel.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../../assets/js/html5shiv.js"></script>
      <script src="../../assets/js/respond.min.js"></script>
    <![endif]-->
	<script type="text/javascript"> 
	      function pf(){ 
                               var baidu = document.getElementById("i"); 
                                 baidu.src = "member.php"; 
                              } 

       function bd(){ 
                document.getElementById('container').style.display ='none';
                document.getElementById('sidebar').style.display ='none';
                var baidu = document.getElementById("i"); 
                baidu.src = "mindmaps-master1/src/index.php"; 
                document.getElementById('show').style.display='inline'; 
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

   </script>
  </head>

  <body>

  <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar" role="navigation">
          <div class="well sidebar-nav">
            <ul class="nav">
              <li class="active"><a href="#myModal" data-toggle="modal">心智圖(mindmap)介紹</a></li>
              <li class="active"><a href="#myModal4" data-toggle="modal">概念圖(concept map)介紹</a></li>
            </ul>
          </div><!--/.well -->
        </div><!--/span-->
		
  
    <div class="navbar navbar-fixed-top navbar-inverse" role="navigation">
     <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"></a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav" id="bar">
            <li><a href="index.php ">Creative thiniking</a></li>
            <li><a href="#myModal" data-toggle="modal" >心智圖(mindmap)介紹</a></li>
            <li><a href="#myModal4" data-toggle="modal" >概念圖(concept map)介紹</a></li>
            <!-- <li class="dropdown">
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
				   session_start(); 
				   //if($_SESSION['class']==0)
				   //echo 'hi, 學生 ' ; 
				   //else
				   //echo 'hi, 教師 ' ; 
           echo 'hi, 學生 ' ; 
				   echo $_SESSION['username'];
				   	   ?>
            </div>
            
        	 <button type="button" class="btn btn-success" onclick="location.href='loginout.php'">登出</button>
			
                  <div class="form-group" align="right">			  
		      			         <img src="images/ncku2_60x50.png" alt="LOGO">			
			            </div>  
          </form>
	    </div><!--/.navbar-collapse -->
      </div><!--/.container -->
    </div><!-- /.navbar -->

    <div class="container" id="container">

      <div class="row row-offcanvas row-offcanvas-right">
        <div class="col-xs-12 col-sm-9" name="main">
          <p class="pull-right visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
          </p>
                 <div class="jumbotron">
                    <h1>腦力激盪與創造力</h1>
                      <p>
                      <p>創造力，即是產生具有獨創性且極有價值的結果，也可被視為具體化的想像，藉著想像的過程來生產具有原創性的東西。許多的學者試圖界定創造力，Howard Garder認為『創造力是解決問題與形成結果，以及提出新問題的能力。』 （Gardner, 2008）；Bill Lucas則主張：『創造力是我們所有智能一起運作的心理狀態。』 （Lucas, 2001）； Guilford（1967）認為創造力乃是個體產生新的觀念或產品，或融合現有的觀念或產品而改變成另一種新的形式，這種能力就是創造力。</p>
                      <input type="button" value="開始使用" id="mindmap" name="mindmap" onclick="bd()" class="btn btn-primary" align="center"></input> 
                 </div>
             
       
             
        
       </div><!--/maim-->
     </div><!--/row-->
         <hr>
      <footer>
        <p align="center">&copy; Lina 2015. </p>
      </footer>
 
    </div><!--/.container-->

   <div id="show" style="display:none" > 
    <iframe id = "i"  style="width:1900px;height:1000px"> 
   </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../../assets/js/jquery.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="offcanvas.js"></script>
    <script src="../../js/holder.js"></script>
    <script src="../../js/modal.js"></script>
    <script src="../../js/transition.js"></script>
  </body>
</html>
