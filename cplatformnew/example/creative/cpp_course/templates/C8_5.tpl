<html>
  <body>
    <div class="container" id="container">
      <div class="col-xs-12 col-sm-9">

      <div class="jumbotron">
           <h2><p>   8.5 友誼函數       </p></h2><br>


*友誼函數不屬於某個類別，但它可存取該類別內的成員<br>
*友誼函數以friend做宣告，放置位置可以有下列兩種：<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*把友誼函數的原型放在類別的定義內，把定義放在類別外<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*把友誼函數直接定義在類別內<br>
*友誼函數不會太複雜的話，編譯器會自動把它當成inline函數<br><br>


下面的程式是使用友誼函數的例子 
<img src="./images/C8_5@p1.png" alt=""><br>
<img src="./images/C8_5@p2.png" alt=""><br>

<img src="./images/C8_5@p3.png" alt=""><br>

<br><br><br>
下圖顯示友誼函數存取的權限 




<img src="./images/C8_5@p4.png" alt=""><br>

您可以在類別內只定義完整的友誼函數，或只定義它的原型，而將其完整的定義放置在類別外，如prog12_16即是<br>


雖然友誼函數的原型或定義是放在類別內，但它並不屬於類別的成員，自然也就不具有公有或私有的特性












      </div>
      </div>
    </div>
  </body>
</html>