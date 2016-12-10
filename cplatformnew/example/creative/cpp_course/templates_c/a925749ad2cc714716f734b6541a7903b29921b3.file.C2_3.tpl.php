<?php /* Smarty version Smarty-3.1.16, created on 2014-09-15 11:07:23
         compiled from ".\templates\C2_3.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13043541687bac0c256-00949404%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a925749ad2cc714716f734b6541a7903b29921b3' => 
    array (
      0 => '.\\templates\\C2_3.tpl',
      1 => 1410772040,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13043541687bac0c256-00949404',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_541687bac32082_79361192',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_541687bac32082_79361192')) {function content_541687bac32082_79361192($_smarty_tpl) {?><html>
  <body>
    <div class="container" id="container">
      <div class="col-xs-12 col-sm-9">

      <div class="jumbotron">
           <p>2.3 輸入資料</p>
本節的內容裡，我們要介紹如何利用標準輸出與輸入裝備，例如螢幕或鍵盤等，將需要的資料由鍵盤輸入。
利用資料串流擷取運算子(stream extraction operator)「>>」，即可將來自鍵盤的輸入讀取，供執行中的程式使用。
<br>
例如想由鍵盤中讀取一個整數值，並指定給變數num存放，可以寫出以下敘述:
<br>
<strong>
  cin >> num;   //由鍵盤中讀取一個整數值，並指定給變數num存放
</strong>
<br>
一般來說，我們會在使用cin前，先利用cout輸出一個提示訊息，讓使用者知道下一步要準備輸入資料，如下面敘述:
<br>
cout << "input an integer";  //提示訊息，請使用者輸入資料
<br>
cin << num;                    //由鍵盤中讀取一整數值，並指定給變數num存放
<br><br>
下面程式是由鍵盤輸入兩個變數，再將兩數相加的結果印出:
<div class="alert alert-success">
  //資料的輸入 
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
   int x,y;
   <br>
   cout << "Input first integer:";    // 輸入第一個整數
   <br>
   cin >> x;        // 由鍵盤中讀取一整數值，並指定給變數x存放
   <br>
   cout << "Input second integer:"; // 輸入第二個整數
   <br>
   cin >> y;        // 由鍵盤中讀取一整數值，並指定給變數y存放
   <br>
   cout << x << "+" << y << "=" << x+y << endl;   // 計算並輸出x+y
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
  Input first integer: 116
  <br>
Input second integer: 39
<br>
116+39=155
<br>
</div>
除了輸入整數型之外，cin還可以輸入字元、浮點數與字串等等資料型態。
      </div>
      </div>
    </div>
  </body>
</html><?php }} ?>
