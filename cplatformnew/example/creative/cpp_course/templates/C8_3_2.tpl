<html>
  <body>
    <div class="container" id="container">
      <div class="col-xs-12 col-sm-9">

      <div class="jumbotron">
           <h2><p>    8.3.2 傳遞物件到函數裡      </p></h2><br>


下面是傳遞物件到函數裡的範例 

<img src="./images/C8_3_2@p1.png" alt=""><br>

<img src="./images/C8_3_2@p2.png" alt=""><br>


請注意34與35行的差別。34行是由win1物件呼叫set_data()函數，來設定資料成員的值，而35行並不是由win1物件來呼叫show_area()函數，而是傳遞win1物件到show_area()函數裡，借以顯示於win1物件的資料。下圖說明set_data()與show_area()這兩個函數的區別:
<br>
<img src="./images/C8_3_2@p3.png" alt=""><br>







      </div>
      </div>
    </div>
  </body>
</html>