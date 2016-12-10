<?php /* Smarty version Smarty-3.1.16, created on 2015-03-10 14:57:02
         compiled from ".\templates\C6_3_1.tpl" */ ?>
<?php /*%%SmartyHeaderCode:781254fe95be8a8900-48004478%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '017e1698c76e0057917315ff3309692dc6f68a59' => 
    array (
      0 => '.\\templates\\C6_3_1.tpl',
      1 => 1425970553,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '781254fe95be8a8900-48004478',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_54fe95be8cbb92_07585654',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54fe95be8cbb92_07585654')) {function content_54fe95be8cbb92_07585654($_smarty_tpl) {?><html>
  <body>
    <div class="container" id="container">
      <div class="col-xs-12 col-sm-9">

      <div class="jumbotron">
      	   <h4><p>   6.3  傳遞陣列給函數       </p></h4><br>
      	   在C++裡，除了可以傳遞便是、常數給函數之外，還可以將陣列當成引數傳遞到函數中。<br><br>



           <h4><p>   6.3.1 以一維陣列為引數來傳遞       </p></h4><br>
以陣列當成引數傳遞到函數時，函數接收的是陣列的位址，而不是陣列的值。<br>

下面為傳遞一維陣列至函數的格式 <br>

           <img src="./images/C6.3.1@p1.png" alt=""><br>


下面的程式是以一維陣列為引數，傳遞到函數的範例 <br>

           <img src="./images/C6.3.1@p2.png" alt=""><br>
           <img src="./images/C6.3.1@p3.png" alt=""><br>

於本例中，show()與average()函數定義成可以接收一維陣列，因此再呼叫他們時，直接將陣列當成引數，傳遞到函數裡。如果要傳遞陣列到函數中，只要在函數內填上陣列名稱即可，如程式的第12、13行。
      </div>
      </div>
    </div>
  </body>
</html><?php }} ?>
