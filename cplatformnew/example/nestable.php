  <html>
   <head> 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.png">

    <title>Creative Template for Bootstrap</title>
    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="jumbotron.css" rel="stylesheet">
    <link href="carousel.css" rel="stylesheet">
    <script type="text/javascript"> 
       function pf(){ 
                      var baidu = document.getElementById("i"); 
                      baidu.src = "member.php"; 
                            } 

       function bd(){ 
                document.getElementById('conta').style.display ='none';
                document.getElementById('sidebar').style.display ='none';
                document.getElementById('a').style.display ='inline';
                var baidu = document.getElementById("i"); 
                baidu.src = "mindmaps-master1/src/mindmapindex.php"; 
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
    <script src="../../assets/js/jquery.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="offcanvas.js"></script>
    <script src="../../js/holder.js"></script>
    <script src="../../js/modal.js"></script>
    <script src="../../js/transition.js"></script>
  </head>

  <body>
        <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar" role="navigation">
          <div class="well sidebar-nav">
            <ul class="nav">
              <li class="active"><a href="#myModal3" data-toggle="modal">心智圖(mindmap)介紹</a></li>
              <li class="active"><a href="#myModal4" data-toggle="modal">概念圖(concept map)介紹</a></li>
            </ul>
          </div><!--/.well -->
        </div><!--/sidebar-->




<div class="navbar navbar-inverse navbar-fixed-top" >    
 <div class="container">
   <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav" id="bar">
            <li><a href="index.php ">回登入頁</a></li>
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
<div id="myModa4" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
 <div class="modal-dialog">
 <div class="modal-content">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
    <h3 id="myModalLabel">發想提示</h3>
    <hr>
   <div class="image" align="center">
         <img src="" >結構
       </div>
  </div>
  <div class="modal-body" align="center">
    <p></p>function
  </div>
  <div class="modal-footer" style="isplay:none;">
    <button class="btn" data-dismiss="modal" aria-hidden="true">關閉</button>
  </div>
  </div>
  </div>
</div>
<!-- Modal -->
<!-- Modal -->
<div id="qusetion" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
  <div class="modal-body" align="center">
    <p></p>
    1. 亂數產生一萬個不重複的整數(0~9999)存放在陣列中<br>
                      2. 使用排序並列印<br>
                      3. 輸入搜尋值，從陣列中尋找其位置
  </div>
  <div class="modal-footer" style="isplay:none;">
    <button class="btn" data-dismiss="modal" aria-hidden="true">關閉</button>
  </div>
  </div>
  </div>
</div>
<!-- Modal -->
<div id="myModal3" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="width:100%;height:100%">
 <div class="modal-dialog">
 <div class="modal-content">
  <div class="modal-header"style="width:100%;height:100%">
    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
    <h3 id="myModalLabel">概念圖（Concept Map）</h3>
    <hr>
   <div class="image" align="center" >
         <img src="images/carmind.png" >
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
<div id="a" style="display:none" align="center" style="display:none;"> 
          <div style="width:100%;background-color:#eeeeee;display:none">


            <input type="button" value="題目" id="question" name="question" href="#qusetion" data-toggle="modal" class="btn btn-primary" align="center" ></input>
             <input type="button" value="提示" id="hint1" name="hint1" href="#myModa4" data-toggle="modal" class="btn btn-primary" align="center"></input>
               
          </div>        
</div>  

<br>
  <div class="container" id="conta"> 
   <div class="row row-offcanvas row-offcanvas-right"> 
    <div class="col-xs-12 col-sm-9">
          <p class="pull-right visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
          </p>
          <div class="jumbotron">
            <h1>腦力激盪與創造力</h1>
            <p>
            <p>創造力，即是產生具有獨創性且極有價值的結果，也可被視為具體化的想像，藉著想像的過程來生產具有原創性的東西。許多的學者試圖界定創造力，Howard Garder認為『創造力是解決問題與形成結果，以及提出新問題的能力。』 （Gardner, 2008）；Bill Lucas則主張：『創造力是我們所有智能一起運作的心理狀態。』 （Lucas, 2001）； Guilford（1967）認為創造力乃是個體產生新的觀念或產品，或融合現有的觀念或產品而改變成另一種新的形式，這種能力就是創造力。</p>
          <input type="button" value="開始使用" id="mindmap" name="mindmap" onclick="bd()" class="btn btn-primary" align="center"></input> 
          </div><!--end of jumbotron-->
    </div><!--end of col-xs-12--> 
   </div><!--end of row row-offcanvas-->
  </div><!--end of container-->
  <div id="show" style="display:none;width:100%;height:100%" > 
    <iframe id = "i"  style="width:100%;height:100%"> 
  </div>
 </body>
</html>


             


