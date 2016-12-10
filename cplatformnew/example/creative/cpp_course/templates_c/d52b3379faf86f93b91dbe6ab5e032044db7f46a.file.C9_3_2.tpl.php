<?php /* Smarty version Smarty-3.1.16, created on 2015-03-18 12:51:12
         compiled from "templates\C9_3_2.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2268455090440d60945-24444101%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd52b3379faf86f93b91dbe6ab5e032044db7f46a' => 
    array (
      0 => 'templates\\C9_3_2.tpl',
      1 => 1426320199,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2268455090440d60945-24444101',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_55090440d70344_18487489',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55090440d70344_18487489')) {function content_55090440d70344_18487489($_smarty_tpl) {?><html>
  <body>
    <div class="container" id="container">
      <div class="col-xs-12 col-sm-9">

      <div class="jumbotron">
           <h2><p>   9.3.2 撰寫自己的拷貝建構元       </p></h2><br>

要自行提供拷貝建構元，必須以下面的語法來定義 
<br>
<img src="./images/C9_3_2@p1.png" alt=""><br>
下面的程式碼是加入拷貝建構元的範例 
<br>
<img src="./images/C9_3_2@p2.png" alt=""><br>

<img src="./images/C9_3_2@p3.png" alt=""><br>

<img src="./images/C9_3_2@p4.png" alt=""><br>
第16~22行定義拷貝建構元。因為程式中以撰寫拷貝建構元，編譯器便不再提供預設的拷貝建構元，所以資料拷貝的動作必須自己動手寫，我們把他撰寫在19~21行。注意在拷貝建構元裡，變數win是ㄧ個「參照」，必須「.」來存取資料成員。







      </div>
      </div>
    </div>
  </body>
</html><?php }} ?>
