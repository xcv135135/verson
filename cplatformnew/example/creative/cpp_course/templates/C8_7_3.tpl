<html>
  <body>
    <div class="container" id="container">
      <div class="col-xs-12 col-sm-9">

      <div class="jumbotron">
           <h2><p>    8.7.3 設定引數預設值的注意事項      </p></h2><br>

不能同時定義引數皆設有預設值的建構元，以及不需引數的建構元，否則編譯時將發生錯誤 
<br>

<img src="./images/C8_7_3@p1.png" alt=""><br>

<br>
若在主程式裡有這麼一行敘述，則編譯時將發生錯誤 
<img src="./images/C8_7_3@p2.png" alt=""><br>
則編譯器將發生錯誤，其原因在於第一個建構元有預設值的關係，不需傳入引數即可執行，而第二個也不用傳入引數，於是在這兩個建構元均可被呼叫時，自然就無法通過編譯。







      </div>
      </div>
    </div>
  </body>
</html>