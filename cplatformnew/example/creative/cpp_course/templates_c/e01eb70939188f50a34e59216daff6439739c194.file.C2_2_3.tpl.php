<?php /* Smarty version Smarty-3.1.16, created on 2014-09-15 11:04:00
         compiled from ".\templates\C2_2_3.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19551541682253691d5-22952526%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e01eb70939188f50a34e59216daff6439739c194' => 
    array (
      0 => '.\\templates\\C2_2_3.tpl',
      1 => 1410771836,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19551541682253691d5-22952526',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5416822538f9e7_91796000',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5416822538f9e7_91796000')) {function content_5416822538f9e7_91796000($_smarty_tpl) {?><html>
  <body>
    <div class="container" id="container">
      <div class="col-xs-12 col-sm-9">

      <div class="jumbotron">
           <p>2.2.3 浮點數型態與倍精度浮點型態</p>
           在數學中，帶有小數的數值稱為實數(real numbers)，在C++裡這種資料型態稱為浮點數(floating point)，其中長度為4個位元組，有效範圍為1.2e-38到.34e38，小數點以下的有效位數有7位。
當浮點數的表示範圍不夠大的時候，還有一種倍精度(double precision)浮點數可供使用。倍精度浮點數型態的長度為8，有效範圍為2.2e-308到1.8e308，小數點以下有效位數為16位。
<br>
浮點數除了指數表示法之外，還可用一般帶有小數的型式表示。舉例來說，想宣告一個double型態的變數num與一個float型態的變數sum，並同時設定sum的初值為6.28，可以於程式中做出如下的宣告及設值:
<br>
<strong>
double num;  //宣告num為倍精度浮點數變數
<br>
float sum=6.28f; //宣告sum為浮點數變數，其初值為6.28
<br>
</strong>
經過宣告之後，C++便會分別配置8個與4個位元組的記憶體空間，以提供變數num與sum使用。
<br>
值得一提的是，浮點數常數的預設型態是double。若是於數值後面加上F或是f，則可作為float型態的識別，若是沒加上，C++將會將資料視為double型態。


<br>
下面的程式宣告一個float型態的變數num，並設定初值為2.3，然後將num*num的運算結果列印到螢幕中。
<br>

<div class="alert alert-success">
//浮點數的使用
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
   float num=2.3F;            // 宣告num為浮點數，並設值為2.3
   <br>
   cout << num << "*" << num;   // 印出num*num的值
   <br>
   cout << "=" << num*num << endl;
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
  2.3*2.3=5.29
</div>
          
      </div>
      </div>
    </div>
  </body>
</html><?php }} ?>
