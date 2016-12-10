<html>
  <body>
    <div class="container" id="container">
      <div class="col-xs-12 col-sm-9">

      <div class="jumbotron">
           <h4><p>    6.1.4 陣列界限的檢查      </p></h4>



C++並不會檢查註標值的大小，也就是說當註標值超過陣列的長度時，C++並不會因此而不讓使用者繼續使用該陣列，而是將多餘的資料放在陣列之外記憶體中，如此一來很可能會覆蓋其他的資料或是程式碼，造成不可預期的錯誤。這種錯誤示在執行時才會發生的(run-time error)，而不是編譯時期發生的錯誤(compile-time error)，編譯程式無法提出任何的警告訊息。<br>


下面的程式裡，將陣列界限的檢查範圍加入 
           <img src="./images/C6.1.4@p1.png" alt=""><br>
程式執行結果:<br>
           <img src="./images/C6.1.4@p2.png" alt=""><br>

      </div>
      </div>
    </div>
  </body>
</html>