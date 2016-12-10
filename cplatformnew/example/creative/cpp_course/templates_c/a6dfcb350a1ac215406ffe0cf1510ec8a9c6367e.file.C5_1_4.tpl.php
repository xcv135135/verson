<?php /* Smarty version Smarty-3.1.16, created on 2015-03-17 23:47:08
         compiled from "templates\C5_1_4.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2523255084c7c6c2183-45063077%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a6dfcb350a1ac215406ffe0cf1510ec8a9c6367e' => 
    array (
      0 => 'templates\\C5_1_4.tpl',
      1 => 1425890127,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2523255084c7c6c2183-45063077',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_55084c7c6e5414_79137878',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55084c7c6e5414_79137878')) {function content_55084c7c6e5414_79137878($_smarty_tpl) {?><html>
  <body>
    <div class="container" id="container">
      <div class="col-xs-12 col-sm-9">

      <div class="jumbotron">
           <p>5.1.4 函數的傳回值</p>
           若是需要將函數處理後的資料傳回給原先的函數時，可使用return 指令，這個被傳回去的資料，稱為「傳回值」(return value)，傳回值可以是各種型態的常數或變數，也可以是運算式。當然，並不是每次呼叫函數時，一定會有傳回值，因此可以視情況需要來使用return敘述。
           return 敘述的格式如下所示: <br>
            <img src="./images/C5_1_4@p1.png" alt=""><br>


            在關鍵字return 後面的運算式，為函數的傳回值，運算式可以是變數、常數或是運算式。若是不需要函數傳回任何資料時，可以利用「return;」結束函數的執行，回到原先呼叫該函數的下一個敘述。<br>

            以下有一個範例，此程式利用函數呼叫方式印出1到10的平方結果: 
            <img src="./images/C5_1_4@p2.png" alt=""><br>
      </div>
      </div>
    </div>
  </body>
</html><?php }} ?>
