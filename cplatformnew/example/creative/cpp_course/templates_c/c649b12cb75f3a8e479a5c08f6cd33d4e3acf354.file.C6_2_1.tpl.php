<?php /* Smarty version Smarty-3.1.16, created on 2015-03-18 12:19:44
         compiled from "templates\C6_2_1.tpl" */ ?>
<?php /*%%SmartyHeaderCode:48335508fce061d258-32790596%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c649b12cb75f3a8e479a5c08f6cd33d4e3acf354' => 
    array (
      0 => 'templates\\C6_2_1.tpl',
      1 => 1425969670,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '48335508fce061d258-32790596',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5508fce063c667_09738640',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5508fce063c667_09738640')) {function content_5508fce063c667_09738640($_smarty_tpl) {?><html>
  <body>
    <div class="container" id="container">
      <div class="col-xs-12 col-sm-9">

      <div class="jumbotron">
           <h4><p>    6.2.1 二維陣列的宣告與配置記憶體      </p></h4><br>



二維陣列（2-dimensional array） 宣告格式<br>
           <img src="./images/C6.2.1@p1.png" alt=""><br>

下面的範例都是合法的陣列宣告  <br>

           <img src="./images/C6.2.1@p2.png" alt=""><br>
下表是年度銷售量，可利用二維陣列將資料儲存起來 <br>

           <img src="./images/C6.2.1@p3.png" alt=""><br>
此時可以利用二維陣列將上表的資料儲存起來，將陣列宣告int sale[2][4]，由於整數資料型態所佔位元組為4個位元組(bytes)，而整數陣列sale可儲存的元素有2*4=8個，佔用記憶體共有8*4=32個位元組。<br>
下圖中我們將陣列sale化為圖形表示:<br>
           <img src="./images/C6.2.1@p4.png" alt=""><br>







      </div>
      </div>
    </div>
  </body>
</html><?php }} ?>
