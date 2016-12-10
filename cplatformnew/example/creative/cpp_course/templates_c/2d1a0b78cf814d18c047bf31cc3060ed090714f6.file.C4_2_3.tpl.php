<?php /* Smarty version Smarty-3.1.16, created on 2015-03-17 17:46:01
         compiled from "templates\C4_2_3.tpl" */ ?>
<?php /*%%SmartyHeaderCode:218525507f7d9dae894-34915029%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2d1a0b78cf814d18c047bf31cc3060ed090714f6' => 
    array (
      0 => 'templates\\C4_2_3.tpl',
      1 => 1410850676,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '218525507f7d9dae894-34915029',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5507f7d9db2715_88937321',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5507f7d9db2715_88937321')) {function content_5507f7d9db2715_88937321($_smarty_tpl) {?><html>
  <body>
    <div class="container" id="container">
      <div class="col-xs-12 col-sm-9">

      <div class="jumbotron">
           <p>4.2.3 條件運算子(conditional operator)</p>
條件運算子(?:)是可以來代替if-else的敘述。條件運算子格式如下:
<div class="alert alert-success">
傳回值 = 判斷條件 ? 運算式1 : 運算式2;
</div>
上述格式，若判斷條件成立則回傳運算式1的結果，否則回傳運算式2的結果。
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
    int a=5,b=12,min;
    <br>
    min=(a<b)?a:b;		
    <br>
    cout << "a=" << a << ", b=" << b << endl;
    <br>
    cout << min << "是較小的數" << endl; 
    <br><br>
    
    system("pause");
    <br>
    return 0;
    <br>
}
</div>
OUTPUT:
<div class="alert alert-info">
a=5,  b=12
<br>
5是較小的數
</div>
      </div>
      </div>
    </div>
  </body>
</html><?php }} ?>
