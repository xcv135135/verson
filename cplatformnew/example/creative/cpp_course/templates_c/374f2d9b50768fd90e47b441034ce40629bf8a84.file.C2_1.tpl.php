<?php /* Smarty version Smarty-3.1.16, created on 2014-09-15 10:48:51
         compiled from ".\templates\C2_1.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6565412ba226cf2e9-21605287%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '374f2d9b50768fd90e47b441034ce40629bf8a84' => 
    array (
      0 => '.\\templates\\C2_1.tpl',
      1 => 1410770927,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6565412ba226cf2e9-21605287',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5412ba226f2b91_57559425',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5412ba226f2b91_57559425')) {function content_5412ba226f2b91_57559425($_smarty_tpl) {?><html>
  <body>
    <div class="container" id="container">
      <div class="col-xs-12 col-sm-9">

      <div class="jumbotron">
           <p>2.1 變數與常數</p>
           放在電腦中的資料，可以更改其內容的稱為變數(variable)，不能更改其內容的稱為常數(constant)。
           <br>
           在C++中，使用變數之前需要經過宣告，也就是這個變數選定一個名稱，以及指定該變數所要存在的資料型態。<br>
先來看一個簡單的實例，下面的程式裡宣告字元變數ch與整數變數num，將他們設值後，再分別將變數的值顯示於螢幕中:
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
   char ch='w';   // 宣告ch為字元，並設值為w
    <br>
   int num=6;   // 宣告num為整數，並設值為6
    <br>
   <br>
   cout << ch << " is a character\n";
    <br>
   cout << num << " is an integer\n";
    <br>
   system("pause");
    <br>
   return 0;
    <br>
}
</div>
執行結果：
<br>
<div class="alert alert-info">
w is a character
<br>
6 is an integer
<br>
</div>
當我們宣告一個變數時，編譯程式會在記憶體裡一塊足以容納此變數大小的記憶體空間給它，不管變數的值如何改變，它永遠占用相同的記憶空間，因此，依照資料的性質與範圍變數的選擇適合的儲存型態，不但節省記憶體也會提高可讀性。
為變數選取名稱時，最好能使用有意義的名稱，而且這個名稱不能與C++的關鍵字相同。


      </div>
      </div>
    </div>
  </body>
</html><?php }} ?>
