<?php /* Smarty version Smarty-3.1.16, created on 2015-03-10 11:38:51
         compiled from ".\templates\C7_2_3.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1296754fec9ae0bf021-23342987%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '209f10d0cf810be19fb6147e63283eb141c50185' => 
    array (
      0 => '.\\templates\\C7_2_3.tpl',
      1 => 1425983925,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1296754fec9ae0bf021-23342987',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_54fec9ae0e6132_15630470',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54fec9ae0e6132_15630470')) {function content_54fec9ae0e6132_15630470($_smarty_tpl) {?><html>
  <body>
    <div class="container" id="container">
      <div class="col-xs-12 col-sm-9">

      <div class="jumbotron">
           <h2><p>     7.2.3 宣告指標變數所指像之型態的重要性     </p></h2><br>


在宣告指標變數時，我們便會賦予指標所指向的資料型態。一但確定指標變數所指向的資料結構後，我們便不能夠再更改他。<br>



下面的程式示範錯誤的指標用法 <br>
<img src="./images/C7_2_3@p1.png" alt=""><br>





編譯器會在編譯時發出下面的錯誤訊息<br>


<img src="./images/C7_2_3@p2.png" alt=""><br>

第9、10行的程式應修改成<br>


<img src="./images/C7_2_3@p3.png" alt=""><br>

prog9_6經過修正、編譯後的執行結果如下 <br>


<img src="./images/C7_2_3@p4.png" alt=""><br>




      </div>
      </div>
    </div>
  </body>
</html>
<?php }} ?>
