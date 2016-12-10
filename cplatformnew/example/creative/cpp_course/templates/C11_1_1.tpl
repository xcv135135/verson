<html>
  <body>
    <div class="container" id="container">
      <div class="col-xs-12 col-sm-9">

      <div class="jumbotron">
           <h2><p>  11.1.1 基底類別與衍生類別        </p></h2><br>

*以既有類別為基礎，進而衍生出另一類別，稱為「類別的繼承」（inheritance of classes）<br>

*原有的類別稱為「父類別」（super class）或「基底類別」（basis class）<br>

*因繼承而產生的新類別則稱為「子類別（sub class）或「衍生類別」（derived class） <br>

<br>
<br>


*類別成員繼承的關係 <br>
<img src="./images/C11_1_1@p1.png" alt=""><br>


<br>
<br>

*簡單的繼承範例
<br>
*類別繼承的格式 
<br>
<img src="./images/C11_1_1@p2.png" alt=""><br>
由上面格式可知，子類別是透過修飾子(modifier，可為public ，private或protected)，概括承受父類別裡的所有資料成員、成員函數以及多載的運算子(但不包括建構元、解構元與多載的設定運算子「=」)，同時還可加入新的成員已符合子類別所需。修飾子是用來控制父類別裡的public、private或protected成員，繼承到子類後，被子類別存取的等級。
<br>
<br>
下面的範例簡單說明繼承的使用方法

<img src="./images/C11_1_1@p3.png" alt=""><br>
<img src="./images/C11_1_1@p4.png" alt=""><br>
<img src="./images/C11_1_1@p5.png" alt=""><br>
<img src="./images/C11_1_1@p6.png" alt=""><br>
在C++的繼承中，建立子類別物件時，會先呼叫父類別中沒有引數的建構元，再執行子類別的建構元，其目的是為了要幫助繼承自父類別的成員，以及子類別自身的成員初始化的動作，因此於本例中會看到:<br>
CWin()建構元被呼叫了….<br>
CTextWin()建構元被呼叫了….<br>
這兩行依序被列印出來。
<br><br><br>


繼承的規則裡，父類別的私有成員不能在子類別裡做存取。而公有成員則全看繼承時設定的修飾子而定。若修飾子設定為public，則原先在父類別中，public的成員繼承到子類別後還是public ，而在父類別中的private成員不能在子類別裡做任何的存取。
<br>
本例的繼承關係圖繪製如下 

<img src="./images/C11_1_1@p7.png" alt=""><br>

Win物件佔用12個位元組，而txt物件佔用32個位元組。事實上，CTextWin類別裡的資料成員text[20]佔用20個位元組，加上由CWin類別繼承過來的12個位元組，加起來剛好是32個位元組。<br>
下圖是本例中，父類別與子類別所佔記憶體之比較
<img src="./images/C11_1_1@p8.png" alt=""><br>


<br><br>
*由前一個範例可學到下列幾點重要的觀念 <br>
1.	透過類別的繼承，可將父類別的成員繼承給子類別<br>
2.	在執行子類別的建構元之前，會先自動呼叫父類別中沒有引數的建構元<br>
3.	子類別物件所佔的位元組，等於自己資料成員所佔的位元組，加上繼承過來之成員所佔用的位元組

<br>



      </div>
      </div>
    </div>
  </body>
</html>