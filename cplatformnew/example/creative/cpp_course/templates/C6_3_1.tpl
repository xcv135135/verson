<html>
  <body>
    <div class="container" id="container">
      <div class="col-xs-12 col-sm-9">

      <div class="jumbotron">
      	   <h4><p>   6.3  傳遞陣列給函數       </p></h4><br>
      	   在C++裡，除了可以傳遞便是、常數給函數之外，還可以將陣列當成引數傳遞到函數中。<br><br>



           <h4><p>   6.3.1 以一維陣列為引數來傳遞       </p></h4><br>
以陣列當成引數傳遞到函數時，函數接收的是陣列的位址，而不是陣列的值。<br>

下面為傳遞一維陣列至函數的格式 <br>

           <img src="./images/C6.3.1@p1.png" alt=""><br>


下面的程式是以一維陣列為引數，傳遞到函數的範例 <br>

           <img src="./images/C6.3.1@p2.png" alt=""><br>
           <img src="./images/C6.3.1@p3.png" alt=""><br>

於本例中，show()與average()函數定義成可以接收一維陣列，因此再呼叫他們時，直接將陣列當成引數，傳遞到函數裡。如果要傳遞陣列到函數中，只要在函數內填上陣列名稱即可，如程式的第12、13行。
      </div>
      </div>
    </div>
  </body>
</html>