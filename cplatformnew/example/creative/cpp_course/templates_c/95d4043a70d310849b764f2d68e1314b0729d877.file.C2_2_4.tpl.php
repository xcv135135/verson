<?php /* Smarty version Smarty-3.1.16, created on 2015-03-17 14:12:14
         compiled from "templates\C2_2_4.tpl" */ ?>
<?php /*%%SmartyHeaderCode:294185507c5be45a4d5-52366607%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '95d4043a70d310849b764f2d68e1314b0729d877' => 
    array (
      0 => 'templates\\C2_2_4.tpl',
      1 => 1410771945,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '294185507c5be45a4d5-52366607',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5507c5be45e359_09729545',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5507c5be45e359_09729545')) {function content_5507c5be45e359_09729545($_smarty_tpl) {?><html>
  <body>
    <div class="container" id="container">
      <div class="col-xs-12 col-sm-9">

      <div class="jumbotron">
           <p>2.2.4 布林型態</p>
           布林(boolean)型態的變數，只有true(真)和false(假)兩種。也就是說，當我們將一個變數定義成布林型態時，它的值只能是1(true)或0(false)。
           <br>
           舉例來說，想宣告變數名稱為status的布林變數，並設值false，可以寫出如下的敘述:
           <br>
           <strong>
            bool status=false;    //宣告布林變數status，並設值為fasle
            <br>
          </strong>
          或者是
          <br>
          <strong>
bool status = 0;
<br>
          </strong>
          下面程式將舉例說明布林變數的使用方法:
          <div class="alert alert-success">
            //印出布林值
            <br>
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
   bool status=false;     // 宣告布林變數status, 設值為false 
   <br>
   cout << "status=" << status << endl;   
   <br>
   status=1;              // 設定status的值為1 
   <br>
   cout << "status=" << status << endl;
   <br>
   <br>
   system("pause");
   <br>
   return 0;
   <br>
}
<br>

  </div>
OUTPUT:
<div class="alert alert-info">
  status=0
  <br>
status=1
<br>

</div>
程式第7行中，雖然將布林變數status設值為false，然而C++會自動將false轉換為0，而true轉換為1，因此會出現值型結果為status=0; 第9行則是直接以常數值1為布林變數status設值。
<br>
布林變數所能接受的設值方式，就只有true、false、1與0而已。

      </div>
      </div>
    </div>
  </body>
</html><?php }} ?>
