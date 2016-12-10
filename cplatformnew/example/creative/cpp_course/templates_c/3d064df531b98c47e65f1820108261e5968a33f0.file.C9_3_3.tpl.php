<?php /* Smarty version Smarty-3.1.16, created on 2015-03-14 16:06:54
         compiled from ".\templates\C9_3_3.tpl" */ ?>
<?php /*%%SmartyHeaderCode:64505503ec1ed73088-22567032%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3d064df531b98c47e65f1820108261e5968a33f0' => 
    array (
      0 => '.\\templates\\C9_3_3.tpl',
      1 => 1426320410,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '64505503ec1ed73088-22567032',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5503ec1ed9a194_16287260',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5503ec1ed9a194_16287260')) {function content_5503ec1ed9a194_16287260($_smarty_tpl) {?><html>
  <body>
    <div class="container" id="container">
      <div class="col-xs-12 col-sm-9">

      <div class="jumbotron">
           <h2><p>   9.3.3 拷貝建構元與動態記憶體配置       </p></h2><br>

拷貝建構元似乎沒初什麼差錯，但是當資料成員裡有指標，或者是有使用到動態記憶體配置時，就會發生問題。
<br>
<br>
下面的範例修改自prog14_3，其中加入拷貝建構元 
<br>
<img src="./images/C9_3_3@p1.png" alt=""><br>
<img src="./images/C9_3_3@p2.png" alt=""><br>

<img src="./images/C9_3_3@p3.png" alt=""><br>

在拷貝建構元裡，第21行的設定讓兩個物件的title成員均指向同一個字串，於是，41行釋放ptr1所指向的物建所佔的記憶體空間，也就相當於釋放ptr1所指向的物件所佔的記憶體空間，所以43行印不出title成員所指向的字串。
<br>
<br>
下圖為prog14_8記憶體空間配置的情形 
<br>
<img src="./images/C9_3_3@p4.png" alt=""><br>
只要在CWin類別裡，加入一個拷貝建構元，並以動態方是配置記憶體給title所指向的字串，即可解決預設拷貝建構元所發生的錯誤。
<br>

下面的程式碼修正prog14_8的錯誤 
<img src="./images/C9_3_3@p5.png" alt=""><br>
<img src="./images/C9_3_3@p6.png" alt=""><br>
<img src="./images/C9_3_3@p7.png" alt=""><br><br>

下圖為prog14_9執行時，指標與記憶體之配置情形 
<img src="./images/C9_3_3@p8.png" alt=""><br>


      </div>
      </div>
    </div>
  </body>
</html><?php }} ?>
