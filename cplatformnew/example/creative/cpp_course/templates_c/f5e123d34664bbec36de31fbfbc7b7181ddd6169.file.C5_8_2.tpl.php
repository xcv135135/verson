<?php /* Smarty version Smarty-3.1.16, created on 2015-03-17 23:47:10
         compiled from "templates\C5_8_2.tpl" */ ?>
<?php /*%%SmartyHeaderCode:749155084c7e290430-83609324%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f5e123d34664bbec36de31fbfbc7b7181ddd6169' => 
    array (
      0 => 'templates\\C5_8_2.tpl',
      1 => 1425894112,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '749155084c7e290430-83609324',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_55084c7e2b7545_10560408',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55084c7e2b7545_10560408')) {function content_55084c7e2b7545_10560408($_smarty_tpl) {?>
<html>
  <body>
    <div class="container" id="container">
      <div class="col-xs-12 col-sm-9">

      <div class="jumbotron">
           <h4><p>5.8.2 const修飾子         </p></h4>

<span style="color:red">  

利用const來宣告變數，可避免變數值被修改 </span><br>



const來宣告變數的範例 <br>
<img src="./images/C5_8_2@p1.png" alt=""><br>

此程式是利用const宣告max為整數變數
<img src="./images/C5_8_2@p2.png" alt=""><br>
<img src="./images/C5_8_2@p3.png" alt=""><br>


如果在第8行與第9行中間加入下列敘述 <br>
<img src="./images/C5_8_2@p4.png" alt=""><br>

編譯器會出現assignment of read-only variable `max' 的訊息，說明這是不能被更改的常數











      </div>
      </div>
    </div>
  </body>
</html><?php }} ?>
