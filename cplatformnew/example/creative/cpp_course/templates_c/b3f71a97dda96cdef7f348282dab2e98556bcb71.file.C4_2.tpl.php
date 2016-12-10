<?php /* Smarty version Smarty-3.1.16, created on 2014-09-16 08:46:11
         compiled from ".\templates\C4_2.tpl" */ ?>
<?php /*%%SmartyHeaderCode:275015417da72b99fb8-63435313%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b3f71a97dda96cdef7f348282dab2e98556bcb71' => 
    array (
      0 => '.\\templates\\C4_2.tpl',
      1 => 1410849969,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '275015417da72b99fb8-63435313',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5417da72bbf7b1_44740038',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5417da72bbf7b1_44740038')) {function content_5417da72bbf7b1_44740038($_smarty_tpl) {?><html>
  <body>
    <div class="container" id="container">
      <div class="col-xs-12 col-sm-9">

      <div class="jumbotron">
           <p>4.2 選擇性敘述</p>
選擇性敘述包含if-else、switch兩種，根據不同的選擇程式則會執行不同的方向和結果。
<br>
(1)	if條件判斷
<br>
<div class="alert alert-success">
if ( 判斷條件 ) 
<br>
&nbsp;&nbsp;&nbsp;敘述1; 
<br>
else 
<br>
&nbsp;&nbsp;&nbsp;敘述2;

</div>
上面語法的意思就是說，當判斷條件成立時(true)則執行敘述1，不然就執行敘述2，如果判斷條件不成立不想做任何事時else可以省略。if-else敘述流程圖如下:
<br>
<img src="./images/C4_2@P1.png" alt="if條件判斷流程圖">
<br>

      </div>
      </div>
    </div>
  </body>
</html><?php }} ?>
