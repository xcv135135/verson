<html>
  <body>
    <div class="container" id="container">
      <div class="col-xs-12 col-sm-9">

      <div class="jumbotron">
           <p>3.3.3 運算式的型態轉換</p>
C++是一個彈性的程式語言，它允許上述的情況發生，有個大原則--「已不流失資料為前提，即可做不同的型態轉換」，讓我們在不守規矩的程式撰寫之下，使這些不同的型態的資料、運算式都能繼續存活。
<br>
當c++發現程式的運算式中有型態不符合的情況時，會依據下列的規則來處理型態的轉換：
<br>
1. 佔用的位元組較少的轉換成位元組較多的型態
<br>
2. 如short型態（2 bytes）遇上int 型態(2 bytes)，會轉換成int型態
<br>
3. 字元型態會轉成short型態（字元會取其unicode碼）
<br>
4. int型態會轉會成float形態
<br>
5. 運算式中的某個運算元的型態為double，則另一個運算元也會轉換成double型態
<br>
6. 布林型態不能轉換至其他型態


      </div>
      </div>
    </div>
  </body>
</html>