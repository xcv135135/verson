
<html>
  <body>
    <div class="container" id="container">
      <div class="col-xs-12 col-sm-9">

      <div class="jumbotron">
           <h2><p>   7.1.1 什麼是指標       </p></h2><br>

指標(pointer)是ㄧ種特殊的變數，用來存放變數在記憶體的位址。當我們宣告一隔變數時，編譯器變會配置一塊足夠儲存這個變數的記憶體給它。<br>每個記憶體空間均有他獨一無二的編號，這些編號稱為記憶體的「位址」(address)，程式變是利用計體的位址來存取變數的內容。<br>


如果指標ptr存放變數a的位址，則<br>
<img src="./images/C7_1_1@p1.png" alt=""><br>

下面是指標ptr指向變數a的示意圖 

如果指標ptr存放變數a的位址，則<br>

<img src="./images/C7_1_1@p2.png" alt=""><br>

舉例來說，假設程式裡宣告整數變數ａ，以及指標變數ptr。假設變數a的值為20，存放變數a的記憶體位址為1400。如果指標ptr指向變數a (也就是指標ptr存放的是變數a的位址)，則指標的內容即為1400。<br>

變數a與指標變數ptr的配置可由下圖來表示:<br>
<br>


<img src="./images/C7_1_1@p3.png" alt=""><br>


通常編譯程式是採「位元組定址法」來決定變數的位址，也就是把記憶體內每個位元組依序編號，而變數的位址即是他所佔位元組裡，第一個位元組的位址。以變數a為例，a為整數，在記憶體中佔有4個位元組，假設這4個位元組於記憶體內的編號是1400~1403，如下圖所示:<br>

<img src="./images/C7_1_1@p4.png" alt=""><br>



      </div>
      </div>
    </div>
  </body>
</html>
