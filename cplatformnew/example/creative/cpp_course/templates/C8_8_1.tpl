<html>
  <body>
    <div class="container" id="container">
      <div class="col-xs-12 col-sm-9">

      <div class="jumbotron">
           <h2><p>     8.8 類別的靜態成員     </p></h2><br>

我們已經認識類別裡的三種元件，分別為資料成員、成員函數與建構元。將繼續介紹，「靜態資料成員」（static data member）與「靜態成員函數」，它們與類別裡的一般變數和函數意思相近，但功能卻截然不同。
<br>
<br>
<br>


           <h2><p>     8.8.1  靜態資料成員     </p></h2><br>

一般的資料成員是屬於各別物件所有，彼此間不能共享。但靜態資料成員由所有的物件所共享，靜態資料成員可利用static來宣告

<br>

想在類別外存取靜態資料成員，可用下面的語法表示 
<br>
<img src="./images/C8_8_1@p1.png" alt=""><br>

使用「靜態資料成員」可以節省可觀的記憶體空間，由其是大量建立物件的時候。「靜態資料成員」使用的另一個時機時基於程式的需要;例如，若想知道程式裡一共產生多少個物件，可在類別內加上一個「靜態資料成員」num，每建立一個新的物建時，num的值便加1。
<br><br><br>


<font style="background-color:#999999">
將靜態資料成員宣告成public</font><br>

首先先探討靜態資料成員宣告成public的情況
<br>
下面的程式碼是靜態資料成員使用的範例 

<br>


<img src="./images/C8_8_1@p2.png" alt=""><br>

<img src="./images/C8_8_1@p3.png" alt=""><br>
<img src="./images/C8_8_1@p4.png" alt=""><br>


下圖是本例中，把num宣告成static後，變數與記憶體之間的配置關係。


<img src="./images/C8_8_1@p5.png" alt=""><br>


<br><br>



<font style="background-color:#999999">
將靜態資料成員宣告成private</font><br>


如果把靜態資料成員宣告成private，在類別的外部便無法存取得到他，因此必須另外設計一個成員函數，用來存取這個靜態資料成員。
<br>


下面是將靜態資料成員宣告成private的範例：

<br>


<img src="./images/C8_8_1@p6.png" alt=""><br>
<img src="./images/C8_8_1@p7.png" alt=""><br>
<img src="./images/C8_8_1@p8.png" alt=""><br>



第27行看起來像是在類別的外部，位合可以存取到num成員呢?回想一下稍早所介紹的，把函數的定義拉到類別外面，而把其原型定義在類別內部的做法，便可了解。






      </div>
      </div>
    </div>
  </body>
</html>