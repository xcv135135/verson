<html>
  <body>
    <div class="container" id="container">
      <div class="col-xs-12 col-sm-9">

      <div class="jumbotron">
           <p>5.4 同時使用多個函數</p>
當程式裡所有的功能都集中在main()函數時，會造成程式碼的冗長，以及不好閱讀，反而增加除錯的困難度。因此適度將程式模組化，可以減輕除錯所花費的時間成本。模組化最簡單的方式，就是依功能的不同，

<br>
<br>
<br>
	<p>5.4.1 同時使用多個函數</p>
函數呼叫自己的過程稱為「遞迴」(recursion)，而具有這種特性的函數稱為「遞迴函數」(recursive function)。<br>

以階乘的遞迴為例，從下圖中可看到函數遞迴的情形<br>
<img src="./images/C5_4@p1.png" alt=""><br>
下面的程式是利用遞迴計算階乘fact(a) 的運算結果 


<br><br>
<img src="./images/C5_4@p2.png" alt=""><br>

執行結果:<br>
<img src="./images/C5_4@p3.png" alt=""><br>


下表列出遞迴函數fact(a)的執行過程及所傳回的結果:<br>
<img src="./images/C5_4@p4.png" alt=""><br>



      </div>
      </div>
    </div>
  </body>
</html>