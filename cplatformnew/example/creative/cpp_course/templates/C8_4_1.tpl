<html>
  <body>
    <div class="container" id="container">
      <div class="col-xs-12 col-sm-9">

      <div class="jumbotron">
           <h2><p>    8.4.1 建立私有成員      </p></h2><br>

私有成員（private member）的設定方式如下 <br>

<img src="./images/C8_4_1@p1.png" alt=""><br>


下面的程式碼設定id、width與height資料成員為私有，area() 函數為公有 <br>

<img src="./images/C8_4_1@p2.png" alt=""><br>


<img src="./images/C8_4_1@p3.png" alt=""><br>




prog12_13為私有成員的使用範例（錯誤示範） 



<img src="./images/C8_4_1@p4.png" alt=""><br>
<img src="./images/C8_4_1@p5.png" alt=""><br><br>

如果編譯prog12_13，將會得到一些錯誤的訊息，告訴我們id、width與height成員皆為私有，無法直接從CWin類別的外部來存取。

<img src="./images/C8_4_1@p6.png" alt=""><br>

      </div>
      </div>
    </div>
  </body>
</html>