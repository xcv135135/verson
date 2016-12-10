<?php /* Smarty version Smarty-3.1.16, created on 2015-03-17 17:46:01
         compiled from "templates\C4_1.tpl" */ ?>
<?php /*%%SmartyHeaderCode:293535507f7d9922686-43892277%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c01904ad4294cfcbed8b036357d704d60a31e187' => 
    array (
      0 => 'templates\\C4_1.tpl',
      1 => 1410849347,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '293535507f7d9922686-43892277',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5507f7d9949781_16478153',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5507f7d9949781_16478153')) {function content_5507f7d9949781_16478153($_smarty_tpl) {?><html>
  <body>
    <div class="container" id="container">
      <div class="col-xs-12 col-sm-9">

      <div class="jumbotron">
           <p>4.1 程式結構設計</p>
           程式設計的結構有三種:
           <br>
&nbsp;&nbsp;(1)	循序性結構(sequence structure)
<br>
&nbsp;&nbsp;(2)	選擇性結構(selection structure)
<br>
&nbsp;&nbsp;(3)	重複性結構(iteration structure)
<br>
這三種結構有一個共通點就是只是只有一個進入點跟出口點。
<br><br>
(1)	循序性結構(sequence structure)
<br>
循序性結構是採用上到下(top to down)的敘述方式，由上而下一行一行接續執行程式碼。流程圖如下:
<img src="./images/C4_1@P1.png" alt="循序性結構圖">
<br>
大部分的程式結構都試依照這種top down的流程設計。

<br><br>
(2)	選擇性結構(selection structure)
<br>
選擇性結構根據條件成立與否，再決定執行哪些敘述。流程圖如下:
<br>
<img src="./images/C4_1@P2.png" alt="選擇性結構圖">
<br>
當判斷條件值為真時，執行敘述1；若判斷條件值為假時，執行敘述2，不管哪個敘述被執行都會執行敘述3。在C++裡if-else即是選擇性結構。
<br><br>
(3)	重複性結構(iteration structure)
<br>
重複性結構就是根據判斷條件成立與否，決定程式敘述的執行次數
<br>
<img src="./images/C4_1@P3.png" alt="重複性結構圖">
<br>
重複性結構就是根據判斷條件成立與否，決定程式敘述的執行次數
在C++中一般重複性結構的有for、while、do-while三種。

      </div>
      </div>
    </div>
  </body>
</html><?php }} ?>
