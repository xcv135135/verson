<?php /* Smarty version Smarty-3.1.16, created on 2015-03-09 09:48:47
         compiled from ".\templates\C5_3_2.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1817354fd5e66f2d615-88357315%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'baf8f2bf1753fdff023578b06d725ead8202620e' => 
    array (
      0 => '.\\templates\\C5_3_2.tpl',
      1 => 1425890925,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1817354fd5e66f2d615-88357315',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_54fd5e67012311_62774217',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54fd5e67012311_62774217')) {function content_54fd5e67012311_62774217($_smarty_tpl) {?><html>
  <body>
    <div class="container" id="container">
      <div class="col-xs-12 col-sm-9">

      <div class="jumbotron">
           <p>5.3.2 靜態區域變數</p>

靜態區域變數是在編譯時就已配置固定的記憶體空間，下面的敘述
為靜態區域變數的範例:  
<br >
<img src="./images/C5_3_2@p1.png" alt=""><br>
靜態區域變數的「生命週期」則在編譯時即被配置一個固定的記憶體開始，函數執行結束時靜態變數並不會隨之結束，其值也會被保留下來，若是再次呼叫該函數時，會將靜態變數存放在記憶體中的值取出來使用，而非定義的初值。<br><br>



以下面的程式為例，func()函數裡的宣告一個靜態區域變數a，並設初值為10，於main()函數中連續呼叫函數三次，您可以看到靜態區域變數a的變化。
<img src="./images/C5_3_2@p2.png" alt=""><br>
程式執行結果:<br>
<img src="./images/C5_3_2@p3.png" alt=""><br>
函數執行結束時靜態區域變數a並不會隨之結束，其值也會被保留下來，若是再次呼叫該函數時，a的值將會再繼續使用。
      </div>
      </div>
    </div>
  </body>
</html><?php }} ?>
