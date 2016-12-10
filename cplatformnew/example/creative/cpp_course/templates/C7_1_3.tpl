<html>
  <body>
    <div class="container" id="container">
      <div class="col-xs-12 col-sm-9">

      <div class="jumbotron">
           <h2><p>    7.1.3 記憶體的位址      </p></h2><br>


指標與記憶體位址有密不可分的關係，因此在還沒正式介紹指標之前，我們先來看看編譯器是如何配置記憶體空間給變數使用。<br>


下面的程式印出變數的值、記憶體的大小，與變數的位址<br>
<img src="./images/C7_1_3@p1.png" alt=""><br>
<img src="./images/C7_1_3@p2.png" alt=""><br>

由於變數a並沒有設定初值，因此第11行印出變數a的值是留在記憶體內的殘值，因此執行結果可能都不同。

<br>

下圖是prog9_1中，變數於記憶體內配置的情形：
<img src="./images/C7_1_3@p3.png" alt=""><br>

值得注意的是，變數的位址是編譯器依據程式執行時的環境而自動設定的，我們無法改變他們，因此您的執行結果中，得到的變數位址可能與本書不一樣。










      </div>
      </div>
    </div>
  </body>
</html>
