<html>
  <body>
    <div class="container" id="container">
      <div class="col-xs-12 col-sm-9">

      <div class="jumbotron">
           <h2><p>    7.2.2 指標變數的使用      </p></h2><br>

使用指標變數時，不是取用存放在指標裡的位址，就是取用指標所指向位址的資料內容，這兩種工作可經由下列兩種指標運算子完成:<br>
(1) 位址運算子「&」可用來取得變數的位址<br>



舉例來說，&num即代表取出num在記憶體中的位址  <br>

<img src="./images/C7_2_2@p1.png" alt=""><br>

<br><br>

(2)依址取值運算子「*」可取得指標所指向變數的內容

舉例來說，*ptr可取得num的值： 

<img src="./images/C7_2_2@p2.png" alt=""><br>
下面的範例印出變數的位址與變數值 <br>

<img src="./images/C7_2_2@p3.png" alt=""><br>


<img src="./images/C7_2_2@p4.png" alt=""><br>


執行完第7行後，記憶體的配置 <br>

<img src="./images/C7_2_2@p5.png" alt=""><br>
<img src="./images/C7_2_2@p6.png" alt=""><br>

執行完第9行後，記憶體的配置 <br>
<img src="./images/C7_2_2@p7.png" alt=""><br>

由本例可以得知，ptr是指標變數，他可以用來存放變數的位址;*ptr是用來取出ptr所指向的變數值，而&ptr則是指標變數本身的位址。
<br>
下面的程式是利用sizeof() 求出指標變數所佔的位元組 

<img src="./images/C7_2_2@p8.png" alt=""><br>


<img src="./images/C7_2_2@p9.png" alt=""><br>








      </div>
      </div>
    </div>
  </body>
</html>
