<html>
  <body>
    <div class="container" id="container">
      <div class="col-xs-12 col-sm-9">

      <div class="jumbotron">
           <h2><p>   9.2 動態記憶體配置與解構元       </p></h2><br>

先看一個簡單的例子，此例無關動態記憶體配置，下面範例中，仍以CWin類別來做介紹，但把類別裡的成員稍做修改，在此範例中保留id成員，並加上一個字元陣列title，可用來儲存視窗的標題。
<br>
<img src="./images/C9_2@p1.png" alt=""><br>
<img src="./images/C9_2@p2.png" alt=""><br>
<img src="./images/C9_2@p3.png" alt=""><br>
程式地8行加入一個可容納20個字元的字元陣列，它可用來儲存一個視窗物建的標題。
<br>
請注意建構元裡的第13行，strcpy()函數是來將text所指向的字串複製到title所指向記憶體空間，此處title所指向的記憶體空間當然就是稍早我們所宣告那20個字元陣列。注意，字串末端的字串結束字元’\0’也會一併被複製。
<br>
<br>
<br>
<font style="background-color:#999999">
使用動態記憶體配置</font><br>
上面範例中，title字元陣列的長度是固定的，因此可能會造成空間的浪費。下面的範例中，我們將字串title改以動態的方式來配置記憶體，以達到節省空間的目的。

<br>
下面的範例將prog14_2改以動態的方式來配置記憶體
<img src="./images/C9_2@p4.png" alt=""><br>
<img src="./images/C9_2@p5.png" alt=""><br>
<img src="./images/C9_2@p6.png" alt=""><br>
在11~15行建構元的定義中，其中13行是用來配置記憶體空間，並將記憶空間的位址設給title指標變數，13行中的strlen()函數是用來計算字串的長度，但其長度不包括字串末端的字串結束字元’\0’，因此必須以strlen()函數所計算出來的長度再加上1，並依此大小new運算子來配置記憶體空間。New會傳回記憶體空間的位址，接著再把它設給title變數，並藉由14行將text字串拷貝至新建立的記憶體空間，過程如下圖:
<br>
下圖為prog14_3中，記憶空間配置過程的說明 

<img src="./images/C9_2@p7.png" alt=""><br>
另外，由於我們是採動態記憶體配置空間，所以我們必須負責處理記憶體回收工作。回收記憶體最佳時機是在物件不再使用時，因此使用19行，使用delete運算子來釋放記憶體空間。

<br><br><br>
前一例中，我們只有把類別裡的title成員用動態記憶體配置，而類別所建立的物建win1與win2還是以用一般的方式來配置記憶體。如果我們把win1或win2物件改以動態記憶體配置，則解構元是否還是會被正常呼叫?


<img src="./images/C9_2@p8.png" alt=""><br>
<img src="./images/C9_2@p9.png" alt=""><br>


可以看到本例中實際上建立兩個物件，但由輸出中只有一個解構元被呼叫，這是因為win1物建是用一般的方式建立，因此編譯器會再main()結束時自動呼叫解構元，而由ptr所指向的物件是由動態的方式來建立，編譯器不會動銷毀它，於是解構元就不會被呼叫。

<br><br>

下面的範例是更正過後的程式碼 



<img src="./images/C9_2@p10.png" alt=""><br>
<img src="./images/C9_2@p11.png" alt=""><br>

當我們用delete釋放ptr所指向的物件之記憶體時，ptr所指向的物件會被銷毀，於是解構元便會被呼叫，因此從輸出中，可以觀察到兩個物件都已被銷毀。


      </div>
      </div>
    </div>
  </body>
</html>