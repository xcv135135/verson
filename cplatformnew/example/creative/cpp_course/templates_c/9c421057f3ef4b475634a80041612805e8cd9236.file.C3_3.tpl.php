<?php /* Smarty version Smarty-3.1.16, created on 2014-09-15 16:03:02
         compiled from ".\templates\C3_3.tpl" */ ?>
<?php /*%%SmartyHeaderCode:239135416cbab243bd5-64772544%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9c421057f3ef4b475634a80041612805e8cd9236' => 
    array (
      0 => '.\\templates\\C3_3.tpl',
      1 => 1410780210,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '239135416cbab243bd5-64772544',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5416cbab2691e5_37276991',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5416cbab2691e5_37276991')) {function content_5416cbab2691e5_37276991($_smarty_tpl) {?><html>
  <body>
    <div class="container" id="container">
      <div class="col-xs-12 col-sm-9">

      <div class="jumbotron">
           <p>3.3 運算式與資料型態的轉換</p>
運算式可以由常數、變數或是其他運算元與運算子所組合而成的敘述，如下面例子均為運算式：
<br>
-2   //運算式由一元運算子「-」與常數2所組成
<br>
age+12  //運算式由變數age、算數運算子與常數12組成
<br>
a*b-c*(d/8-3)  //由變數、常數與運算子所組成的運算式
<br><br>

運算式與資料型態在定義、宣告時就已經決定其型態了，因此不能隨意轉換成其他的資料形態，但Ｃ++容許使用者有限度的型態轉換處裡．運算式與資料型態的轉換可分為「隱性資料型態轉換」(implicit type conversion)及「顯性資料形態轉換」(explicit type conversion)兩種。


      </div>
      </div>
    </div>
  </body>
</html><?php }} ?>
