<?php /* Smarty version Smarty-3.1.16, created on 2015-03-18 12:43:02
         compiled from "templates\C8_8_3.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21525509025673e136-24702832%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '93eadaf97446e3e13f15719a1a6e905ace0a9443' => 
    array (
      0 => 'templates\\C8_8_3.tpl',
      1 => 1426147112,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21525509025673e136-24702832',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5509025677c942_50774531',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5509025677c942_50774531')) {function content_5509025677c942_50774531($_smarty_tpl) {?><html>
  <body>
    <div class="container" id="container">
      <div class="col-xs-12 col-sm-9">

      <div class="jumbotron">
           <h2><p>  8.8.3  靜態成員函數使用的限制        </p></h2><br>

「靜態成員函數」不能取用類別內一般的變數或函數  
<br>
如果把prog13_14的count() 函數修改成如下的程式碼：
<br>


<img src="./images/C8_8_3@p1.png" alt=""><br>
則編譯時會產生錯誤
<br>
「非靜態變數」無法在靜態函數的內部來呼叫
<br>
「非靜態函數」也不能直接在靜態函數的內部呼叫 
<br>
<br>
「靜態成員函數」內部不能使用this關鍵字  
<br>
例如下面的程式碼是錯誤的：



<img src="./images/C8_8_3@p2.png" alt=""><br>
如果編譯上面的程式碼，將會得到下列的錯誤訊息 
<br>


<img src="./images/C8_8_3@p3.png" alt=""><br>
















      </div>
      </div>
    </div>
  </body>
</html><?php }} ?>
