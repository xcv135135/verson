<html>
  <body>
    <div class="container" id="container">
      <div class="col-xs-12 col-sm-9">

      <div class="jumbotron">
           <h2><p>     9.3.1 預設的拷貝建構元     </p></h2><br>

以CWin類別為例，假設程式中以三個引數的建構元建立win1物件，若是想用物件win1當成初值來建立一個win2物件如下圖:
<br>
藉由拷貝建構元，我們可以利用已建立的物件為初值來建立另一個物件 
<br>
<img src="./images/C9_3_1@p1.png" alt=""><br>
上面的語法看起來，像是要自己定義另一個可接收CWin物件的建構元，然後將物件內的每一個元素作拷貝的動作。
<br>
下面的範例說明如何在程式中呼叫預設的拷貝建構元 
<br>
<img src="./images/C9_3_1@p2.png" alt=""><br>

<img src="./images/C9_3_1@p3.png" alt=""><br>
<img src="./images/C9_3_1@p4.png" alt=""><br>

<br>
<br>
從prog14_6輸出結果可以發現win2物件的成員均被拷貝成和win1物件完全相同的值。從這個結果得知:

(1)編譯器幫我們提供拷貝建構元<br>
(2)拷貝建構元可用來拷貝一個已存在物件之成員給新建的物件 <br><br>
事實上，您也可以把26行呼叫預設拷貝建構元改寫成:<br>
<img src="./images/C9_3_1@p5.png" alt=""><br>









      </div>
      </div>
    </div>
  </body>
</html>