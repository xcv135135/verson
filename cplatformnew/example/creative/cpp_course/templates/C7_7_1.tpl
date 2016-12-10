<html>
  <body>
    <div class="container" id="container">
      <div class="col-xs-12 col-sm-9">

      <div class="jumbotron">
           <h2><p>  7.7.1 使用基本資料型態做動態配置        </p></h2><br>


要完成動態記憶體配置的工作，只要利用C++提供的new和delete運算子即可。使用new運算子來做基本資料型態的動態記憶體配置
<br>

<img src="./images/C7_7_1@p1.png" alt=""><br>

動態記憶體配置的範例 <br>



<img src="./images/C7_7_1@p2.png" alt=""><br>

<br>

當我們使用new運算子來配合動態記憶體時，這個記憶體會一直被佔用，即使程式結束也無法被其他程式使用，因此，必須用delete運算子來釋放所佔用的空間，<br>


<img src="./images/C7_7_1@p3.png" alt=""><br>



delete運算子的使用範例 <br>


<img src="./images/C7_7_1@p4.png" alt=""><br>

<img src="./images/C7_7_1@p5.png" alt=""><br>






      </div>
      </div>
    </div>
  </body>
</html>
