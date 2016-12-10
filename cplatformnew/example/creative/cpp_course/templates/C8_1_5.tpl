<html>
  <body>
    <div class="container" id="container">
      <div class="col-xs-12 col-sm-9">

      <div class="jumbotron">
           <h2><p>    8.1.5 物件所佔的位元組      </p></h2><br>


利用sizeof() 函數可查詢物件與類別所佔的位元組 

<img src="./images/C8_1_5@p1.png" alt=""><br>
<img src="./images/C8_1_5@p2.png" alt=""><br>



編譯器是以資料成員內，佔最多位元組的資料型態之位元組為單位來配置位建的記憶體空間，而於本例中，整數佔最多位元組，所以是以4個位元組為單位，少於4個位元組時還是配置4個位元組的空間，因此CWin所建立的物件共佔有12個位元組。

      </div>
      </div>
    </div>
  </body>
</html>