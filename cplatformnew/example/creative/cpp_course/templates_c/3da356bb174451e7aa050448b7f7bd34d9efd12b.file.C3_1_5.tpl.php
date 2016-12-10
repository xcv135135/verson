<?php /* Smarty version Smarty-3.1.16, created on 2014-09-15 09:52:46
         compiled from ".\templates\C3_1_5.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3051654169ace329723-59653543%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3da356bb174451e7aa050448b7f7bd34d9efd12b' => 
    array (
      0 => '.\\templates\\C3_1_5.tpl',
      1 => 1410767562,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3051654169ace329723-59653543',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_54169ace34f199_43637122',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54169ace34f199_43637122')) {function content_54169ace34f199_43637122($_smarty_tpl) {?><html>
  <body>
    <div class="container" id="container">
      <div class="col-xs-12 col-sm-9">

      <div class="jumbotron">
           <p>3.1.5 遞增語遞減運算子</p>
在程式中對變數遞增1或遞減1是很常見的運算，例如：

<div class="alert alert-success">
  int i = 0; 
  <br>
i = i + 1; 
<br>
cout << i << endl;
<br>
i = i - 1; 
<br>
cout << i << endl;

</div>
這段程式會分別顯示出1與0兩個數，您也可以這麼寫這個程式：
<div class="alert alert-success">
  int i = 0; 
  <br>
cout << ++i << endl;
<br>
cout << --i << endl;

</div>
其中寫在變數 i 之前的++與--就是C++的「遞增運算子」（Increment operator）與「遞減運算子」（Decrement operator），當它們撰寫在變數之前時，其作用就相當於將變數遞增1與遞減1：
<div class="alert alert-success">
  ++i;      // i = i + 1; 
  <br>
--i;      // i = i - 1;

</div>


您可以將遞增或遞減運算子撰寫在變數之前或變數之後，但其實兩者是有差別的，將遞增（遞減）運算子撰寫在變數前時，表示先將變數的值加（減）1，然後再傳回變數的值，將遞增（遞減）運算子撰寫在變數之後，表示先傳回變數值，然後再對變數加（減）1，藉由下面程式來說明:
<div class="alert alert-success">
//遞增運算子「++」在運算元之後
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
   int a=10;
   <br>
   cout << "a=" << a << endl;           		// 印出a
   <br>
   cout << "a++*2=" << (a++*2) << endl;  	    // 印出a++*2 
   <br>
   cout << "a=" << a << endl;           		// 印出a 
   <br>
   system("pause");
   <br>
   return 0;
   <br>
}

</div>
OUTPUT:
<div class="alert alert-info">
  a=10
  <br>
a++*2=20
<br>
a=11
</div>
在程式遞9行中，印出a++*2的值，由於「ａ++」會先執行整個敘述後再將a的值加1，因此執行完a++*2後，其運算結果為20，由此可知，a的值仍是原來的10，離開此行敘述之後，a的值才會加1，變成11。
<br>
再來看看遞增運算子「++」放在運算元前面時，會發生什麼情況。下面的程式裡將a的值設為10，再以++a*2列印出來:
<div class="alert alert-success">
  //遞增運算子「++」在運算元之前
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
   int a=10;
   <br>
   cout << "a=" << a << endl;           		// 印出a
   <br>
   cout << "++a*2=" << (++a*2) << endl;  	    // 印出++a*2
   <br>
   cout << "a=" << a << endl;           		// 印出a 
   <br>
   system("pause");
   <br>
   return 0;
   <br>
}
</div>

OUTPUT:
<div class="alert alert-info">
  a=10
  <br>
++a*2=22
<br>
a=11

</div>
由於「++a」會先將a的值加1後再執行整個敘述，因為執行++a*2時，a的值會先加1，變成11，再計算11*2，因此運算結果為22。

      </div>
      </div>
    </div>
  </body>
</html><?php }} ?>
