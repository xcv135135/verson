<?php /* Smarty version Smarty-3.1.16, created on 2015-03-18 12:51:13
         compiled from "templates\C9_3_4.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18042550904410e9365-17007722%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '649c6e42db25b2cccef0a7eb0418e051cbf0eef1' => 
    array (
      0 => 'templates\\C9_3_4.tpl',
      1 => 1426320551,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18042550904410e9365-17007722',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_550904411142f3_97675668',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_550904411142f3_97675668')) {function content_550904411142f3_97675668($_smarty_tpl) {?><html>
  <body>
    <div class="container" id="container">
      <div class="col-xs-12 col-sm-9">

      <div class="jumbotron">
           <h2><p>  9.3.4 不使用拷貝建構元的另一個常犯錯誤        </p></h2><br>

別以為只要不使用一個已存在的物件來初始化另一個新建的物件，就可以避開撰寫拷貝建構元的麻煩，事實上，只要有使用到動態記憶體配置，就要提供拷貝建構元。
<br>
下面的程式是未撰寫拷貝建構元的錯誤示範 
<br>
<img src="./images/C9_3_4@p1.png" alt=""><br>
<img src="./images/C9_3_4@p2.png" alt=""><br>

<img src="./images/C9_3_4@p3.png" alt=""><br>
本例中，我們並沒有用一個已存在的物件來初始化另一個新建的物件，因此可以避開新建物件時呼叫拷貝建構元。
<br>
問題是遞一次呼叫display()函數時，還可以正確的顯示出物件的內容，而第二次呼叫時，title所指向的字串又不見了呢?
<br>
<br>
原因出在，display()函數所傳遞的是CWin物件!在36行執行時，所傳遞的是*ptr1，也就是傳遞ptr1所指向的物件，由於傳遞的是ㄧ個物件，因此編譯器會把這個物件複製一份，就在此時會呼叫預設的拷貝建構元。拷貝完後，在把複製的這一份傳給display()函數，由27行的win變數所接收，如下圖:
<br>
<img src="./images/C9_3_4@p4.png" alt=""><br>
<img src="./images/C9_3_4@p5.png" alt=""><br>
此時win變數和指標ptr1所指向的title成員，是同一個記憶體空間。因為win是屬於區域變數，於是當36行的display()函數執行完後，win變數會自動被摧毀，因此所佔有的記憶體空間也會被釋放，連帶的將ptr1所指向的title成員內容也被清除，如下圖:
<br>
<img src="./images/C9_3_4@p6.png" alt=""><br>

下面的程式碼是修正prog14_10過後的版本 

<img src="./images/C9_3_4@p7.png" alt=""><br>
<img src="./images/C9_3_4@p8.png" alt=""><br>
<img src="./images/C9_3_4@p9.png" alt=""><br>



      </div>
      </div>
    </div>
  </body>
</html><?php }} ?>
