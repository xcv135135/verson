<html>
  <body>
    <div class="container" id="container">
      <div class="col-xs-12 col-sm-9">

      <div class="jumbotron">
        
           <h4><p>5.7 引數的預設值</p></h4>


未傳入足夠的引數到函數時，預設的引數值就會被使用，這種方式稱為「預設引數」（default argument）<br><br>



要設定預設，可在定義原型時，於引數後面設值給它 <br>
<img src="./images/C5_7@p1.png" alt=""><br><br><br>
下面的程式是函數引數預設值的使用範例 <br>
<img src="./images/C5_7@p2.png" alt=""><br>
程式執行結果:<br>
<img src="./images/C5_7@p3.png" alt=""><br>


<span style="color:red">  
沒有使用預設值的引數，要放置在引數列的左邊 </span><br><br>
舉例來說，函數原型如下 <br>

<img src="./images/C5_7@p4.png" alt=""><br>
下面都是合法的func() 函數呼叫 <br>
<img src="./images/C5_7@p5.png" alt=""><br>
下列的函數呼叫，會造成編譯時期或是邏輯上的錯誤：
<img src="./images/C5_7@p6.png" alt=""><br>
由於func()函數的原型中，有2個引數沒有宣告預設值，因此在函數呼叫時，最少必須要傳入2個引數到函數中，因此像func()與func(6)這種不到兩個引數的呼叫就不合法。





      </div>
      </div>
    </div>
  </body>
</html>