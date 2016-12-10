<?php /* Smarty version Smarty-3.1.16, created on 2015-03-18 12:19:44
         compiled from "templates\C6_4_1.tpl" */ ?>
<?php /*%%SmartyHeaderCode:287715508fce0e5e8c1-07746798%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '295838d5c404222dad4ff961b0a76f995fda48f1' => 
    array (
      0 => 'templates\\C6_4_1.tpl',
      1 => 1425971502,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '287715508fce0e5e8c1-07746798',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5508fce0e7dcd1_21147455',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5508fce0e7dcd1_21147455')) {function content_5508fce0e7dcd1_21147455($_smarty_tpl) {?><html>
  <body>
    <div class="container" id="container">
      <div class="col-xs-12 col-sm-9">

      <div class="jumbotron">
           <h2><p>    6.4 字元陣列—C型態字串      </p></h2><br>


字元變數只能存放一個字元，若是想存放兩個以上的字元，也就是ㄧ般所提到的字串，則必須以字元陣列來處理。


<br><br><br>

           <h2><p>    6.4.1 字串常數      </p></h2><br>


雖然在C語言裡並沒有字串的資料型態，但可以由字元陣列組成字串。字元常數是以單引號(‘)所包圍，而字串常數則是以兩個雙引號(“)包圍起來的資料，如下:<br>



           <img src="./images/C6.4.1@p1.png" alt=""><br>

字串儲存在記憶體時，會加上字串結束字元\0做結尾  <br>
           <img src="./images/C6.4.1@p2.png" alt=""><br>

在字串裡，每個字元佔1個位元組，再加上字串結束字元’\0’，其字串總長度即為所有的字元數加1，因此上圖中的字串My friend的長度為9+1=10個位元組。








      </div>
      </div>
    </div>
  </body>
</html><?php }} ?>
