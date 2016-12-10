<?php /* Smarty version Smarty-3.1.16, created on 2015-03-09 10:15:12
         compiled from ".\templates\C5_5_3.tpl" */ ?>
<?php /*%%SmartyHeaderCode:774654fd64879a2525-27695904%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '54a00ba76370da2dc5eb68548216822d46e11c20' => 
    array (
      0 => '.\\templates\\C5_5_3.tpl',
      1 => 1425892508,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '774654fd64879a2525-27695904',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_54fd64879c9625_93238136',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54fd64879c9625_93238136')) {function content_54fd64879c9625_93238136($_smarty_tpl) {?><html>
  <body>
    <div class="container" id="container">
      <div class="col-xs-12 col-sm-9">

      <div class="jumbotron">
           <p>5.5.3 傳回值為參照的函數</p>


           傳回值為參照的函數有一個特殊之處，就是函數的傳回值可以在指定敘述的左邊，也就是說，我們可以將傳回值為參照的函數設值。<br>

           舉例來說，於程式中宣告一名為max的函數，可傳回兩個整數中較大值之參照，函數原型為：<br>
<img src="./images/C5_5_3@p1.png" alt=""><br>
想將傳回的參照值設為100，即可寫出下面的敘述：<br>
<img src="./images/C5_5_3@p2.png" alt=""><br>
下面是函數傳回參照的使用範例 

<br>
<img src="./images/C5_5_3@p3.png" alt=""><br>
執行結果:<br>
<img src="./images/C5_5_3@p4.png" alt=""><br>

上面的程式裡，i、j的值為10、20，傳入max()函數後，會傳回j的參照b，再將參照b設值為100，因此印出i、j的值即為10、100。

      </div>
      </div>
    </div>
  </body>
</html><?php }} ?>
