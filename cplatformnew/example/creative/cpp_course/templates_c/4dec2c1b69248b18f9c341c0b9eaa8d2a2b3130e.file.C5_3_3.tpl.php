<?php /* Smarty version Smarty-3.1.16, created on 2015-03-09 16:50:35
         compiled from ".\templates\C5_3_3.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1432554fd5edb81f622-03499233%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4dec2c1b69248b18f9c341c0b9eaa8d2a2b3130e' => 
    array (
      0 => '.\\templates\\C5_3_3.tpl',
      1 => 1425891009,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1432554fd5edb81f622-03499233',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_54fd5edb846737_47927192',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54fd5edb846737_47927192')) {function content_54fd5edb846737_47927192($_smarty_tpl) {?><html>
  <body>
    <div class="container" id="container">
      <div class="col-xs-12 col-sm-9">

      <div class="jumbotron">
           <p>5.3.3 外部變數</p>

           「外部變數」(external variable)是在函數外面宣告的變數，又稱為「總體變數」或「全域變數」(global variable)。當變數定義成外部變數之後，函數及程式區段皆可使用這個變數。此外，從該定義敘述之後的所有程式區段及函數都能夠使用外部變數。
           <br>


           下面的程式定義外部變數pi，利用它求取圓周及圓面積

           <img src="./images/C5_3_3@p1.png" alt=""><br>
程式執行結果:<br>
           <img src="./images/C5_3_3@p2.png" alt=""><br>

印出pi、半徑的值，在呼叫peri()及area()函數，計算完後印出，由於pi的值在peri()及area()函數中都會用到，所以在函數外部就先定義好，main()、peri()、area()三個函數皆可以使用。
      </div>
      </div>
    </div>
  </body>
</html><?php }} ?>
