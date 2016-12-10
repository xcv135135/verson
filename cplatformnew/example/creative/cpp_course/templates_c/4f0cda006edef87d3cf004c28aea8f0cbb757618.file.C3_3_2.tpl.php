<?php /* Smarty version Smarty-3.1.16, created on 2014-09-15 13:24:23
         compiled from ".\templates\C3_3_2.tpl" */ ?>
<?php /*%%SmartyHeaderCode:37595416a4e095aeb8-08970878%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4f0cda006edef87d3cf004c28aea8f0cbb757618' => 
    array (
      0 => '.\\templates\\C3_3_2.tpl',
      1 => 1410770160,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '37595416a4e095aeb8-08970878',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5416a4e097f694_42673882',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5416a4e097f694_42673882')) {function content_5416a4e097f694_42673882($_smarty_tpl) {?><html>
  <body>
    <div class="container" id="container">
      <div class="col-xs-12 col-sm-9">

      <div class="jumbotron">
           <p>3.3.2 顯性資料型態轉換 </p>

當我們做兩個整數的運算時，其運算的結果也會是整數。舉例來說，做整數除法8/3時其結果為2，並不是實際的2.666…，因此在Ｃ++中若是想要得到計算的結果是浮點數時，就必須將資料做顯性資料型態轉換，轉換語法如下：
<br>
<strong> （欲轉換的資料型態）變數名稱；</strong>
<br>
這種顯性型態轉換，因為直接撰寫在程式碼，所以也稱為強制型太轉換。下面的程式說明在Ｃ++裡，整數與浮點數是如何轉換的。
<div class="alert alert-success">
  //顯性資料型態轉換
  <br>
#include < iostream>
<br>
#incude < cstdlib>
<br>
using namespace std;
<br>
int main(void)
<br>
{
	<br>
   int a=36,b=7;
   <br>
   cout << "a=" << a << ", b=" << b << ", ";   	// 印出a、b的值
   <br>
   cout << "a/b=" << (a/b) << endl;         	// 印出a/b的值
   <br>
   cout << "a=" << a << ", b=" << b << ", ";   	// 印出a、b的值
   <br>
   cout << "a/b=" << (float)a/b << endl;	    // 印出(float)a/b的值
   <br>
   system("pause");
   <br>
   return 0;
   <br>
}

</div>
OUTPUT:
<div class="alert alert-info">
  a=36, b=7, a/b=5
  <br>
a=36, b=7, a/b=5.14286
</div>

當兩個整數相除時，小數點以後的數字會被截斷，使得運算的結果保持為整數。但是想讓運算結果為浮點數，就必須將兩個整數中的其中一個（或是兩個）強制轉換型態為浮點數，例如下面三種寫法均成立：
<br>
(1) (float)a/b  //將整數a強制轉換成浮點數，再與整數b相除
<br>
(2) a/(float)b  //將整數b強制轉換成浮點數，再以整數a除之
<br>
(3) (float)a/(float)b  //將整數a與b同時強制轉換成浮點數
<br><br>

若是將變數設值成一個大於該型態可以表示範圍時，這種轉換稱為縮小轉換（narrowing conversion）。由於在轉換的過程中可能會因此漏失資料的精確度，Ｃ++並不會自動作這類的轉換，此時就必須自行做強制性的轉換，程式設計師必須負起資料精確度不準的責任。


      </div>
      </div>
    </div>
  </body>
</html><?php }} ?>
