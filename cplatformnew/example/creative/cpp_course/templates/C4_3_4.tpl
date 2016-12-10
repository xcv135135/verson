<html>
  <body>
    <div class="container" id="container">
      <div class="col-xs-12 col-sm-9">

      <div class="jumbotron">
           <p>4.3.4 巢狀迴圈</p>
迴圈主體又存在其他迴圈的時，稱為巢狀迴圈(nested loops)，如下九九乘法表為例:
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
    int i,j;
    <br><br>

    for(i=1;i<=3;i++)		// 外層迴圈
    <br>
    {
    <br>
       &nbsp;&nbsp;&nbsp;for(j=1;j<=3;j++)	// 內層迴圈
       <br>
        &nbsp;&nbsp;&nbsp;&nbsp;cout << i << "*" << j << "=" << (i*j) << "\t";
          <br>
       &nbsp;&nbsp;&nbsp;cout << endl;
       <br>
    }
    <br><br>
    
    system("pause");
    <br>
    return 0;
    <br>
}

  </div>
OUTPUT:
<div class="alert alert-info">
1*1=1&nbsp;&nbsp;&nbsp;   1*2=2&nbsp;&nbsp;&nbsp;   1*3=3
<br>
2*1=2&nbsp;&nbsp;&nbsp;  2*2=4&nbsp;&nbsp;&nbsp;   2*3=6
<br>
3*1=3&nbsp;&nbsp;&nbsp;   3*2=6 &nbsp;&nbsp;&nbsp;  3*3=9
</div>

      </div>
      </div>
    </div>
  </body>
</html>