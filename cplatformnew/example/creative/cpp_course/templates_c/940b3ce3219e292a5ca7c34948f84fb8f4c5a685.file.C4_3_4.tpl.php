<?php /* Smarty version Smarty-3.1.16, created on 2014-09-16 09:38:24
         compiled from ".\templates\C4_3_4.tpl" */ ?>
<?php /*%%SmartyHeaderCode:82165417e8d11b51d9-54439664%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '940b3ce3219e292a5ca7c34948f84fb8f4c5a685' => 
    array (
      0 => '.\\templates\\C4_3_4.tpl',
      1 => 1410853100,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '82165417e8d11b51d9-54439664',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5417e8d11db369_32176616',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5417e8d11db369_32176616')) {function content_5417e8d11db369_32176616($_smarty_tpl) {?><html>
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
</html><?php }} ?>
