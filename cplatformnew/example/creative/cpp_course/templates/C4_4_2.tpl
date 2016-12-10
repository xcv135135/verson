<html>
  <body>
    <div class="container" id="container">
      <div class="col-xs-12 col-sm-9">

      <div class="jumbotron">
           <p>4.4.2 continue敘述</p>

Continue敘述可以強迫程式跳到迴圈的起頭，當程式執行到continue敘述時，即會停止執行剩餘的迴圈主體，而到迴圈開始處繼續執行。以下圖for迴圈為例，在迴圈主體中有continue敘述時，程式執行到continue，即會回到迴圈的主體，繼續執行迴圈主體的部分敘述:


<img src="./images/C4_4_2@p1.png" alt="continue敘述">
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
      &nbsp;&nbsp;&nbsp; if(i%4==0)
       <br>
       &nbsp;&nbsp;&nbsp;&nbsp;   continue;	// i%4為0時由迴圈起始處繼續執行
          <br>
      &nbsp;&nbsp;&nbsp; cout << "i=" << i << endl;       
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
i=5
<br>
i=6
<br>
i=7
<br>
i=9
<br>
i=10
<br>
when loop interruped,i=11
</div>



      </div>
      </div>
    </div>
  </body>
</html>