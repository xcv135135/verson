<?php /* Smarty version Smarty-3.1.16, created on 2015-03-12 11:30:21
         compiled from ".\templates\C8_4_1.tpl" */ ?>
<?php /*%%SmartyHeaderCode:254305501084d815483-62288163%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fb655ff32c76240dedccb80b39dab48d52308a69' => 
    array (
      0 => '.\\templates\\C8_4_1.tpl',
      1 => 1426130965,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '254305501084d815483-62288163',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5501084d83c592_89387146',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5501084d83c592_89387146')) {function content_5501084d83c592_89387146($_smarty_tpl) {?><html>
  <body>
    <div class="container" id="container">
      <div class="col-xs-12 col-sm-9">

      <div class="jumbotron">
           <h2><p>    8.4.1 建立私有成員      </p></h2><br>

私有成員（private member）的設定方式如下 <br>

<img src="./images/C8_4_1@p1.png" alt=""><br>


下面的程式碼設定id、width與height資料成員為私有，area() 函數為公有 <br>

<img src="./images/C8_4_1@p2.png" alt=""><br>


<img src="./images/C8_4_1@p3.png" alt=""><br>




prog12_13為私有成員的使用範例（錯誤示範） 



<img src="./images/C8_4_1@p4.png" alt=""><br>
<img src="./images/C8_4_1@p5.png" alt=""><br><br>

如果編譯prog12_13，將會得到一些錯誤的訊息，告訴我們id、width與height成員皆為私有，無法直接從CWin類別的外部來存取。

<img src="./images/C8_4_1@p6.png" alt=""><br>

      </div>
      </div>
    </div>
  </body>
</html><?php }} ?>
