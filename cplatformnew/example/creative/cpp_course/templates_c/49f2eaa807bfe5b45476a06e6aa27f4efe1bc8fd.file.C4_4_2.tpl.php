<?php /* Smarty version Smarty-3.1.16, created on 2014-09-16 14:27:32
         compiled from ".\templates\C4_4_2.tpl" */ ?>
<?php /*%%SmartyHeaderCode:48635417eb2e861de1-91218052%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '49f2eaa807bfe5b45476a06e6aa27f4efe1bc8fd' => 
    array (
      0 => '.\\templates\\C4_4_2.tpl',
      1 => 1410870441,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '48635417eb2e861de1-91218052',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5417eb2e8896a0_61791325',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5417eb2e8896a0_61791325')) {function content_5417eb2e8896a0_61791325($_smarty_tpl) {?><html>
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
</html><?php }} ?>
