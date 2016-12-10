<html>
  <body>
    <div class="container" id="container">
      <div class="col-xs-12 col-sm-9">

      <div class="jumbotron">
           <h4><p>5.8  前置處理器-- #define  </p></h4>
           一般的C++程式指令示可以被編譯器翻成機器語言後，讓CPU能夠執行的指令，而前置處理器的指令是給編譯器”看”的，這些指令是在編譯的過程中，給編譯器的一些指示，所以並不會被翻譯成機器語言，也因為如此，我們才會稱為這些以#開頭的編譯指令為前置處理程式。<br><br>
           <br><br>








           <h4><p>5.8.1  #define前置處理器  </p></h4>

使用#define可以將常用的常數、字串替換成一個自訂的識別名稱，除此之外，還可以利用#define取代簡單的函數。<br><br>
前置處理器的指令 #define格式如下

<img src="./images/C5_8_1@p1.png" alt=""><br>
下面的範例皆為合法的 #define 定義  

<img src="./images/C5_8_1@p2.png" alt=""><br>
以下看一個例子:
<img src="./images/C5_8_1@p3.png" alt=""><br>
程式執行結果:<br>
<img src="./images/C5_8_1@p4.png" alt=""><br>
在程式第5行裡，我們利用#define定義PI為3.14後，在main()函數及其他的函數中都不用再宣告即可使用，這是因為程式進行編譯時，遇到#define前置處理指令，會先將程式裡所有的PI直接替換成3.14後，再行編譯。


<br><br><br>
<span style="color:red">  

當#define定義的內容很長時，可以利用反斜線（\）將定義分行 </span><br>
下面的程式是使用 #define定義一段較長的字串之範例
<img src="./images/C5_8_1@p5.png" alt=""><br>
程式結果:<br>
<img src="./images/C5_8_1@p6.png" alt=""><br>

<br><br>
*為什麼用#define 
<br>
1.	可以增加程式的易讀性，即看到識別名稱通常就能夠明白所代表的意義<br>
2.	需要修改所定義的內容時，只要在相關的 #define指令中更改即可<br>
3.	在某些場合可增加程式執行的速度 <br>

      </div>
      </div>
    </div>
  </body>
</html>