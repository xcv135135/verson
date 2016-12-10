<html>
  <body>
    <div class="container" id="container">
      <div class="col-xs-12 col-sm-9">

      <div class="jumbotron">
           <p>4.3.3 do-while迴圈</p>
do-while迴圈也是適用於未知的執行次數時使用，而跟while迴圈最大的不同是「先做了再說」，每執行完迴圈主體後，再判斷條件的真假，因此不管判斷條件為何，使用do-while迴圈時，至少都會執行一次迴圈主體。do-while迴圈格式如下:
<div class="alert alert-success">
設定迴圈控制變數初值;
<br>
do{ 
<br>
    迴圈主體;   
    <br>
    設定迴圈控制變數增減量;
    <br>
} while( 判斷條件 );<span style="color:red">(記得要加分號)</span>
</div>
當do迴圈主體只有一個敘述時，可以直接將左右大括號去除。下面列出do-while迴圈的執行流程:
<br>
1.	進入do while迴圈前，要先設定迴圈控制變數的起始值。
<br>
2.	直接執行do-while迴圈主體，迴圈主體執行完畢，才開始根據判斷條件的內容，檢查是否繼續執行迴圈。如果判斷條件為真(true)，則繼續執行迴圈主體；如果判斷條件為假(false)，則跳出while迴圈執行後續的敘述。
<br>
3.	執行完迴圈主體的敘述後，重新設定(增加或減少)迴圈控制變數的值，再回到步驟2重新判斷是否繼續執行迴圈。
<br>
根據上述的程序，可以繪製出如下的do-while迴圈流程圖:
<img src="./images/C4_3_3@p1.png" alt="do-while迴圈">
<br>
注意while後面是以分號(;)作為結束，由於do-while迴圈會先執行迴圈主體，所以通常用於進行一些初始化或介面溝通的動作，例如以下程式:
<div class="alert alert-success">
#include < iostream> 
<br>
using namespace std; 
<br><br>

int main() { 
<br>
    int input = 0; 
    <br>
    bool replay = false; 
    <br><br>

    do { 
    <br>
       &nbsp;&nbsp;&nbsp; cout << "輸入整數值："; 
        <br>
        &nbsp;&nbsp;&nbsp;cin >> input; 
        <br>
        &nbsp;&nbsp;&nbsp;cout << "輸入數為奇數？" << ((input % 2) ? 'Y': 'N') << "\n"; 
        <br>
        &nbsp;&nbsp;&nbsp;cout << "繼續(1:繼續 0:結束)？"; 
        <br>
        &nbsp;&nbsp;&nbsp;cin >> replay; 
        <br>
    } while(replay); 
    <br><br>
 
    return 0; 
    <br>
}
</div>
OUTPUT:
<div class="alert alert-info">
輸入整數值：11
<br>
輸入數為奇數？Y
<br>
繼續(1:繼續 0:結束)？0
</div>
如果您日後學會函式的使用，您還可以將這個迴圈寫的更漂亮一些，而不用使用replay變數，例如若下面more()函式詢問使用者是否繼續，如果是會傳 回1，否則傳回0：


<div class="alert alert-success">
do { 
<br>
  &nbsp;&nbsp;&nbsp; cout << "輸入整數值："; 
   <br>
   &nbsp;&nbsp;&nbsp;cin >> input; 
   <br>
  &nbsp;&nbsp;&nbsp; cout << "輸入數為奇數？" << ((input % 2) ? 'Y': 'N') << "\n"; 
   <br>
} while(more());
</div>
一個小小的改變，就可以使程式更為簡潔，邏輯上也較為清楚。

      </div>
      </div>
    </div>
  </body>
</html>