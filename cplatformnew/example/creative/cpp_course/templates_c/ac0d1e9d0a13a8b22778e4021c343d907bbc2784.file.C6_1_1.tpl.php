<?php /* Smarty version Smarty-3.1.16, created on 2015-03-18 12:19:43
         compiled from "templates\C6_1_1.tpl" */ ?>
<?php /*%%SmartyHeaderCode:169545508fcdfbd1f28-95275915%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ac0d1e9d0a13a8b22778e4021c343d907bbc2784' => 
    array (
      0 => 'templates\\C6_1_1.tpl',
      1 => 1425896535,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '169545508fcdfbd1f28-95275915',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5508fcdfd5c7f3_62617932',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5508fcdfd5c7f3_62617932')) {function content_5508fcdfd5c7f3_62617932($_smarty_tpl) {?><html>
  <body>
    <div class="container" id="container">
      <div class="col-xs-12 col-sm-9">

      <div class="jumbotron">
           <h4><p>   6.1.1 一維陣列的宣告       </p></h4>


陣列宣告後，編譯器非配給該陣列的記憶體是ㄧ個連續的區塊，此時即可在這個區域裡存放型態相同的資料。<br><br>


一維陣列的宣告格式如下所示:

           <img src="./images/C6.1.1@p1.png" alt=""><br>
下面的範例都是合法的一維陣列宣告 
<br>
           <img src="./images/C6.1.1@p2.png" alt=""><br>

           <img src="./images/C6.1.1@p3.png" alt=""><br>
<br><br>


利用sizeof() 印出陣列score與其中任一個元素的長度 


           <img src="./images/C6.1.1@p4.png" alt=""><br>
執行結果:<br>
           <img src="./images/C6.1.1@p5.png" alt=""><br>

sizeof()函數可以計算出陣列score及陣列中某個元素的長度，有興趣的讀者可以更改第10行裡，中括號所包含的數值(要在陣列的範圍0~5內)後，觀察執行結果是否相同。










      </div>
      </div>
    </div>
  </body>
</html><?php }} ?>
