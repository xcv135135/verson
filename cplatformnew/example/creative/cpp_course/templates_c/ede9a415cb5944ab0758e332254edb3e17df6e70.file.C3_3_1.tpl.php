<?php /* Smarty version Smarty-3.1.16, created on 2014-09-15 13:24:05
         compiled from ".\templates\C3_3_1.tpl" */ ?>
<?php /*%%SmartyHeaderCode:57745416a42ae7a455-70130791%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ede9a415cb5944ab0758e332254edb3e17df6e70' => 
    array (
      0 => '.\\templates\\C3_3_1.tpl',
      1 => 1410780231,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '57745416a42ae7a455-70130791',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5416a42ae9eec9_63788522',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5416a42ae9eec9_63788522')) {function content_5416a42ae9eec9_63788522($_smarty_tpl) {?><html>
  <body>
    <div class="container" id="container">
      <div class="col-xs-12 col-sm-9">

      <div class="jumbotron">
           <p>3.3.1 隱性資料型態轉換</p>
在程式中已經定義好的資料型態之變數，若是想以另一種型態表示時，Ｃ++會依據下列的規則自動作資料型態的轉換：
<br>
(1) 轉換前的資料型態與轉換後的型態相容。
<br>
(2) 轉換後的資料型態隻表示範圍比轉換前的型態大。
<br>
隱性資料型態的轉換也常被稱為自動型態轉換（automatic type conversion)。
<br>
舉例來說若是想將short型態的變數a轉換成int型態，由於short與int皆為整數型態．符合上述條件（1），而int的表示範圍比short來得大，亦符合條件（2），因此Ｃ++會自動將原short 型態的變數a轉換成為int型態．值得注意的是，型態的轉換只限該行敘述，並不會影響原先變數的型態定義，而且透過隱性資料型態的轉換，可以保證資料的精確度（precision），他不會因為轉換而損失資料內容。
<br>
舉例來說，字元與整數是可使用隱性資料型態轉換的；整數與浮點數亦是相容的，都是「擴大轉換」；但是由於bool型態只能存放1或0，與整數及字元是不相容的，因此不可以做型態的轉換。
<br>
以下的例子是兩個變數中有一個浮點數運算結果會變如何？
<br>


<div class="alert alert-success">
  //型態自動轉換
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
   int a=45;
   <br>
   float b=2.3f;
   <br>
   cout << "a=" << a << ", b=" << b << endl;   	    // 印出a、b的值
   <br>
   cout << "a/b=" << a/b << endl;               	// 印出a/b的值
   <br>
   system("pause");
   <br>
   return 0;
   <br>
}
</div>

OUTPUT:
<div class="alert alert-info">
  a=45, b=2.3
  <br>
a/b=19.5652
</div>
由執行結果可以看到，當兩個數中有一個浮點數時，其運算的結果會直接轉換為浮點數。當運算式中變數的型態不同時，Ｃ++會自動將較少表示範圍轉換成較大的表示範圍後，在做運算。
      </div>
      </div>
    </div>
  </body>
</html><?php }} ?>
