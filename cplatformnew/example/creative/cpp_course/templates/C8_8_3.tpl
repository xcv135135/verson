<html>
  <body>
    <div class="container" id="container">
      <div class="col-xs-12 col-sm-9">

      <div class="jumbotron">
           <h2><p>  8.8.3  靜態成員函數使用的限制        </p></h2><br>

「靜態成員函數」不能取用類別內一般的變數或函數  
<br>
如果把prog13_14的count() 函數修改成如下的程式碼：
<br>


<img src="./images/C8_8_3@p1.png" alt=""><br>
則編譯時會產生錯誤
<br>
「非靜態變數」無法在靜態函數的內部來呼叫
<br>
「非靜態函數」也不能直接在靜態函數的內部呼叫 
<br>
<br>
「靜態成員函數」內部不能使用this關鍵字  
<br>
例如下面的程式碼是錯誤的：



<img src="./images/C8_8_3@p2.png" alt=""><br>
如果編譯上面的程式碼，將會得到下列的錯誤訊息 
<br>


<img src="./images/C8_8_3@p3.png" alt=""><br>
















      </div>
      </div>
    </div>
  </body>
</html>