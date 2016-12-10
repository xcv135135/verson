<?php /* Smarty version Smarty-3.1.16, created on 2015-03-14 16:27:07
         compiled from ".\templates\C10_1_2.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1825503f0dba9de92-19400740%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '89c512b2c73c62701d284f52fc31ca11ca92031d' => 
    array (
      0 => '.\\templates\\C10_1_2.tpl',
      1 => 1426321579,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1825503f0dba9de92-19400740',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5503f0dbac4fa3_18700016',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5503f0dbac4fa3_18700016')) {function content_5503f0dbac4fa3_18700016($_smarty_tpl) {?><html>
  <body>
    <div class="container" id="container">
      <div class="col-xs-12 col-sm-9">

      <div class="jumbotron">
           <h2><p>   10.1.2 再把operator>()函數多載       </p></h2><br>

*在prog15_1裡，不能在main() 裡撰寫下面兩種敘述
<br>
(1)  win1 > 7000;   // 在prog15_1裡，不能比較面積與常數的	大小<br>
(2)  7000 > win1;   // 同上，但常數是置於「>」符號的前面<br>
解決的方式是，再定義一個operator() 函數  
<br>
<img src="./images/C10_1_2@p1.png" alt=""><br>
*有兩個引數的operator>() 函數，引數接收的情形如下 
<br>
<img src="./images/C10_1_2@p2.png" alt=""><br><br>
*prog15_2是使用operator>() 函數的完整範例 
<br>
<img src="./images/C10_1_2@p3.png" alt=""><br>
<img src="./images/C10_1_2@p4.png" alt=""><br>
<img src="./images/C10_1_2@p5.png" alt=""><br>
<img src="./images/C10_1_2@p6.png" alt=""><br>

<br>
<br>
<br>






      </div>
      </div>
    </div>
  </body>
</html><?php }} ?>
