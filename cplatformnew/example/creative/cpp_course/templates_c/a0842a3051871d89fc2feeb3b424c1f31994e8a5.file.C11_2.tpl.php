<?php /* Smarty version Smarty-3.1.16, created on 2015-03-14 17:04:09
         compiled from ".\templates\C11_2.tpl" */ ?>
<?php /*%%SmartyHeaderCode:59795503f989527c09-31588421%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a0842a3051871d89fc2feeb3b424c1f31994e8a5' => 
    array (
      0 => '.\\templates\\C11_2.tpl',
      1 => 1426323842,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '59795503f989527c09-31588421',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5503f98954ed12_18020084',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5503f98954ed12_18020084')) {function content_5503f98954ed12_18020084($_smarty_tpl) {?><html>
  <body>
    <div class="container" id="container">
      <div class="col-xs-12 col-sm-9">

      <div class="jumbotron">
           <h2><p>   11.2.1 父類別裡私有成員的存取       </p></h2><br>

既然父類別裡的私有成員無法在子類別裡做存取，但他卻可以繼承給子類別來使用，那麼要存取父類別裡的私有成員呢?
<br>
錯誤的例子--存取到父類別裡的私有成員 
<br>
<img src="./images/C11_2@p1.png" alt=""><br>
<img src="./images/C11_2@p2.png" alt=""><br>
<img src="./images/C11_2@p3.png" alt=""><br>

<br>
<br>
修正prog16_5的錯誤 
<br>
<img src="./images/C11_2@p4.png" alt=""><br>
<img src="./images/C11_2@p5.png" alt=""><br>
<img src="./images/C11_2@p6.png" alt=""><br>








      </div>
      </div>
    </div>
  </body>
</html><?php }} ?>
