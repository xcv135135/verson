<html>
  <body>
    <div class="container" id="container">
      <div class="col-xs-12 col-sm-9">

      <div class="jumbotron">
           <p>4.4 迴圈跳離</p>
<p>4.4.1 break敘述</p>
break可以離開目前switch、for、while、do-while的區塊，繼續執行迴圈以外的下一個敘述。在switch中主要用來結束此段case的敘述進行下一個case的比對，在for、while與do-while中，主要用於中斷目前的迴圈執行。如果break出現在並不是內含在for、while迴圈或switch敘述中，則會發生編譯錯誤。
<br>
以下圖的for迴圈為例，在迴圈主體有break敘述時，程式執行到break敘述時，會直接跳離迴圈主體，到迴圈外繼續執行:
<img src="./images/C4_4_1@p1.png" alt="break敘述">
<br>
下面提供了for迴圈主體內有break敘述例子:
<div class="alert alert-success">
#include < iostream>
<br>
#include < cstdlib>
<br>
using namespace std;
<br>
int main(void)
<br>
{      
	<br>
    int i;
    <br><br>
    
    for(i=1;i<=10;i++)
    <br>
    {
    <br>
       &nbsp;&nbsp;&nbsp;if(i%4==0)
       <br>
          &nbsp;&nbsp;&nbsp;&nbsp;break;			// i%4為0時即跳出迴圈
          <br>
       &nbsp;&nbsp;&nbsp;cout << "i=" << i << endl;
       <br>
    }
    <br>
    cout << "when loop interruped,i=" << i << endl;
    <br>
    system("pause");
    <br>
    return 0;
    <br>
}
</div>
OUTPUT:
<div class="alert alert-info">
i=1
<br>
i=2
<br>
i=3
<br>
when loop interruped,i=4
</div>





      </div>
      </div>
    </div>
  </body>
</html>