<?php /* Smarty version Smarty-3.1.16, created on 2015-03-13 16:16:33
         compiled from ".\templates\C8_9_1.tpl" */ ?>
<?php /*%%SmartyHeaderCode:159555029ce138cfb7-62234544%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '40031dea29527c415ab2f99aafb57bcf05a219b0' => 
    array (
      0 => '.\\templates\\C8_9_1.tpl',
      1 => 1426234529,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '159555029ce138cfb7-62234544',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_55029ce13b40b0_24473915',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55029ce13b40b0_24473915')) {function content_55029ce13b40b0_24473915($_smarty_tpl) {?><html>
  <body>
    <div class="container" id="container">
      <div class="col-xs-12 col-sm-9">

      <div class="jumbotron">
           <h2><p>  8.9.1  指標與物件        </p></h2><br>

把一個指標指向CWin物件
<br>
<img src="./images/C8_9_1@p1.png" alt=""><br>

也可以在宣告指標的同時，順便將它指向物件 



<br>
<img src="./images/C8_9_1@p2.png" alt=""><br>
下面的語法來取用win1物件的成員函數與資料成員  
<br>
<img src="./images/C8_9_1@p3.png" alt=""><br>

<br>


下面的範例練習將物件傳遞到函數裡

<br> 
<img src="./images/C8_9_1@p4.png" alt=""><br>
<img src="./images/C8_9_1@p5.png" alt=""><br>

<img src="./images/C8_9_1@p6.png" alt=""><br>
本例中，15~21行宣告compare()函數，它可接收指向CWin物件的指標，因此在15行compare()的刮號內，必須在引數win之前加上「＊」號，代表win是一個指標。此外，於17~20行中，由於win與this一樣都是指標，因此利用它們來存取成員時，都必須使用「->」運算子來連結成員。
<br>
<br>






      </div>
      </div>
    </div>
  </body>
</html><?php }} ?>
