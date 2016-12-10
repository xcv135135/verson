<html>
  <body>
    <div class="container" id="container">
      <div class="col-xs-12 col-sm-9">

      <div class="jumbotron">
           <h2><p>    8.4 公有成員與私有成員      </p></h2><br>

在介紹CWin類別中，讀者可發現它有三個資料成員id、width與height可以任意在CWin類別外部更改。雖然對程式設計者非常方便，但某個層面可能隱藏危險，下面的範例示範從類別外部存取資料時，可能導致的危險 <br>


<img src="./images/C8_4@p1.png" alt=""><br>
<img src="./images/C8_4@p2.png" alt=""><br>

<img src="./images/C8_4@p3.png" alt=""><br>



由本例中，win1物件的width成員在CWin類別的外部被設成-50，因而造成面積為負值。由此可知，從類別外部存取資料成員時，如果沒有一個機制來限定存取的方式，則很有可能導致安全上的漏洞，讓臭蟲進入程式碼中。

      </div>
      </div>
    </div>
  </body>
</html>