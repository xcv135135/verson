<html>
  <body>
    <div class="container" id="container">
      <div class="col-xs-12 col-sm-9">

      <div class="jumbotron">
           <p>4.3 控制迴圈</p>
C++提供for、while、do-while的迴圈，可以重複執行某段程式功能。
<br><br>
       <p>4.3.1 for迴圈</p>
若知道迴圈的執行次數的話可以使用for迴圈。
<div class="alert alert-success">
for ( 設定迴圈控制變數的初值 ; 判斷條件 ; 設定迴圈控制變數漸增減量 ) <span style="color:red">(這邊不可加 ; )</span>
<br>
{ 
	<br>
    迴圈主體;   
    <br>
}<span style="color:red">(這邊不可加 ; )</pan>
</div>
若是for的迴圈主體有一行程式碼可以省略左右大括號。
<br>
for迴圈執行的流程:
<br>
1.	第一次進入for迴圈時，設定for迴圈控制變數的初始值。
<br>
2.	根據判斷條件的內容，假設判斷條件為真(true)則繼續執行迴圈主體，判斷條件為假(false)則跳出for迴圈執行其他敘述。
<br>
3.	執行完迴圈主體的敘述後，for迴圈控制會根據設定漸增減量更改迴圈控制變數的值，繼續回到步驟2.重新判斷條件內容。
<br>

根據上述的for迴圈流程，繪製如下的for迴圈流程圖:
<img src="./images/C4_3_1@P1.png" alt="for迴圈流程圖">
<br>
簡單的範例練習:
<div class="alert alert-success">
#include < iostream>
<br>
using namespace std;
<br><br>

int main() { 
<br>
    for(int i = 0; i < 10; i++) 
    <br>
        cout << " " << i; 
        <br><br>
    return 0;
    <br>
}
</div>
OUTPUT:
<div class="alert alert-info">
 0 1 2 3 4 5 6 7 8 9
</div>

<br><br>



<!--
<div class="alert alert-info">
練習題:
<br>
1.利用for迴圈寫一個15!的結果。

<button type="button" class="btn btn-danger" onclick=' location.href = "./cpp_compiler.php" '>
  撰寫練習題
</button>
</div>
-->



      </div>
      </div>
    </div>
  </body>
</html>