<?php /* Smarty version Smarty-3.1.16, created on 2015-03-18 12:43:02
         compiled from "templates\C8_9_2.tpl" */ ?>
<?php /*%%SmartyHeaderCode:643855090256a532e4-14836167%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c173ab084efd4060fd0501fdce903a144e5b811c' => 
    array (
      0 => 'templates\\C8_9_2.tpl',
      1 => 1426234677,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '643855090256a532e4-14836167',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_55090256a7e271_23784325',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55090256a7e271_23784325')) {function content_55090256a7e271_23784325($_smarty_tpl) {?><html>
  <body>
    <div class="container" id="container">
      <div class="col-xs-12 col-sm-9">

      <div class="jumbotron">
           <h2><p>   8.9.2 參照與物件       </p></h2><br>

把「參照」指向某個物件 
<br>


<img src="./images/C8_9_2@p1.png" alt=""><br>
「參照」和物件一樣，利用「.」來存取物件內的成員 
<br>



<br>

下面的範例是在傳遞物件時，改採傳遞物件的參照 
<br>

<img src="./images/C8_9_2@p2.png" alt=""><br>
<img src="./images/C8_9_2@p3.png" alt=""><br>
<img src="./images/C8_9_2@p4.png" alt=""><br>


本例中，15~21行宣告compare()函數，它可接收指向CWin物件的參照，因此在15行compare()的刮號內，必須在引數win之前加上「&」號，代表win是一個參照。此外，於17~20行中，由於win是ㄧ個參照與this不同，因此利用它們來存取成員時，都必須使用「.」運算子來連結成員。
<br>
<br>
<br>





      </div>
      </div>
    </div>
  </body>
</html><?php }} ?>
