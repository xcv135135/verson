<?php /* Smarty version Smarty-3.1.16, created on 2015-03-12 09:02:43
         compiled from ".\templates\C8_3_2.tpl" */ ?>
<?php /*%%SmartyHeaderCode:25960550059246937c6-40885615%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e68ec0031f08358677b1d3d401281ef3bc1c5d5c' => 
    array (
      0 => '.\\templates\\C8_3_2.tpl',
      1 => 1426086187,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25960550059246937c6-40885615',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_550059246be753_16040520',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_550059246be753_16040520')) {function content_550059246be753_16040520($_smarty_tpl) {?><html>
  <body>
    <div class="container" id="container">
      <div class="col-xs-12 col-sm-9">

      <div class="jumbotron">
           <h2><p>    8.3.2 傳遞物件到函數裡      </p></h2><br>


下面是傳遞物件到函數裡的範例 

<img src="./images/C8_3_2@p1.png" alt=""><br>

<img src="./images/C8_3_2@p2.png" alt=""><br>


請注意34與35行的差別。34行是由win1物件呼叫set_data()函數，來設定資料成員的值，而35行並不是由win1物件來呼叫show_area()函數，而是傳遞win1物件到show_area()函數裡，借以顯示於win1物件的資料。下圖說明set_data()與show_area()這兩個函數的區別:
<br>
<img src="./images/C8_3_2@p3.png" alt=""><br>







      </div>
      </div>
    </div>
  </body>
</html><?php }} ?>
