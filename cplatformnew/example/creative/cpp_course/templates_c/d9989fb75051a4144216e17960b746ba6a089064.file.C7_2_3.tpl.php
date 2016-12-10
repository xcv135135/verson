<?php /* Smarty version Smarty-3.1.16, created on 2015-03-18 12:31:22
         compiled from "templates\C7_2_3.tpl" */ ?>
<?php /*%%SmartyHeaderCode:283115508ff9a59bef2-02102448%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd9989fb75051a4144216e17960b746ba6a089064' => 
    array (
      0 => 'templates\\C7_2_3.tpl',
      1 => 1425983925,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '283115508ff9a59bef2-02102448',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5508ff9a5c6e76_22744448',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5508ff9a5c6e76_22744448')) {function content_5508ff9a5c6e76_22744448($_smarty_tpl) {?><html>
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
