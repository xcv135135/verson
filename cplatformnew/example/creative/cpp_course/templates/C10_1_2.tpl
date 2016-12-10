<html>
  <body>
    <div class="container" id="container">
      <div class="col-xs-12 col-sm-9">

      <div class="jumbotron">
           <h2><p>   10.1.2 再把operator>()函數多載       </p></h2><br>

*在prog15_1裡，不能在main() 裡撰寫下面兩種敘述
<br>
(1)  win1 > 7000;   // 在prog15_1裡，不能比較面積與常數的	大小<br>
(2)  7000 > win1;   // 同上，但常數是置於「>」符號的前面<br>
解決的方式是，再定義一個operator() 函數  
<br>
<img src="./images/C10_1_2@p1.png" alt=""><br>
*有兩個引數的operator>() 函數，引數接收的情形如下 
<br>
<img src="./images/C10_1_2@p2.png" alt=""><br><br>
*prog15_2是使用operator>() 函數的完整範例 
<br>
<img src="./images/C10_1_2@p3.png" alt=""><br>
<img src="./images/C10_1_2@p4.png" alt=""><br>
<img src="./images/C10_1_2@p5.png" alt=""><br>
<img src="./images/C10_1_2@p6.png" alt=""><br>

<br>
<br>
<br>






      </div>
      </div>
    </div>
  </body>
</html>