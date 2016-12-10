<html>
  <body>
    <div class="container" id="container">
      <div class="col-xs-12 col-sm-9">

      <div class="jumbotron">
           <p>5.3.3 外部變數</p>

           「外部變數」(external variable)是在函數外面宣告的變數，又稱為「總體變數」或「全域變數」(global variable)。當變數定義成外部變數之後，函數及程式區段皆可使用這個變數。此外，從該定義敘述之後的所有程式區段及函數都能夠使用外部變數。
           <br>


           下面的程式定義外部變數pi，利用它求取圓周及圓面積

           <img src="./images/C5_3_3@p1.png" alt=""><br>
程式執行結果:<br>
           <img src="./images/C5_3_3@p2.png" alt=""><br>

印出pi、半徑的值，在呼叫peri()及area()函數，計算完後印出，由於pi的值在peri()及area()函數中都會用到，所以在函數外部就先定義好，main()、peri()、area()三個函數皆可以使用。
      </div>
      </div>
    </div>
  </body>
</html>