<html>
  <body>
    <div class="container" id="container">
      <div class="col-xs-12 col-sm-9">

      <div class="jumbotron">
           <h2><p>  11.1.3 使用建構元常見的錯誤        </p></h2><br>

C++在執行子類別的建構元之前，如果沒有呼叫特定父類別的建構元，會先呼叫父類別中”沒有引數的建構元”。因此，如果父類別中只定義有引數的建構元，而在子類別的建構元裡又沒有呼叫父類別中特定的建構元的話，則編譯器將發生錯誤。
<br>
下面是呼叫父類別建構元時常犯的錯誤範例 
<br>
<img src="./images/C11_1_3@p1.png" alt=""><br>
<img src="./images/C11_1_3@p2.png" alt=""><br>
<img src="./images/C11_1_3@p3.png" alt=""><br>

<br>
下面的程式是修正prog16_3的錯誤 
<br>
<img src="./images/C11_1_3@p4.png" alt=""><br>








      </div>
      </div>
    </div>
  </body>
</html>