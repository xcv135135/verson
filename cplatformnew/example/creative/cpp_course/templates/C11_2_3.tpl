<html>
  <body>
    <div class="container" id="container">
      <div class="col-xs-12 col-sm-9">

      <div class="jumbotron">
           <h2><p>   11.2.3 類別繼承的存取模式       </p></h2><br>

您可以指定以public、protected或private的方式來繼承，這三者會限制繼承過來成員於子類別存取的屬性。
<br>
下圖說明類別繼承的存取模式 
<br>
<img src="./images/C11_2_3@p1.png" alt=""><br><br>
上圖所表達的存取模式可以用下面的敘述來說明:

<br>
1.	若繼承的方式設定為public，則原先在父類別裡為public的成員，繼承到子類別後，也是public成員;而在父類別裡為protected的成員，繼承到子類別後，也是protected成員。<br>
2.	若繼承的方式設定為protected，則原先在父類別裡為public和protected成員，繼承到子類別後，均會變成protected成員。<br>
3.	若繼承的方式設定為private，則原先在父類別裡為public和protected成員，繼承到子類別後，均會變成private成員。<br>
4.	父類別裡的私有成員無法被子類別所存取。<br>






      </div>
      </div>
    </div>
  </body>
</html>