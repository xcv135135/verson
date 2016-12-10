<?php /* Smarty version Smarty-3.1.16, created on 2015-03-14 17:28:08
         compiled from ".\templates\C11_1_2.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7175503ff28cf5277-76796842%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3ed67e272f2c9ad8e5c902ae3acc15bbead325ec' => 
    array (
      0 => '.\\templates\\C11_1_2.tpl',
      1 => 1426323472,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7175503ff28cf5277-76796842',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5503ff28d1c386_75102398',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5503ff28d1c386_75102398')) {function content_5503ff28d1c386_75102398($_smarty_tpl) {?><html>
  <body>
    <div class="container" id="container">
      <div class="col-xs-12 col-sm-9">

      <div class="jumbotron">
           <h2><p>   11.1.2 呼叫父類別中特定的建構元       </p></h2><br>

我們知道即使沒有明確的指定建構元，子類別還是會先呼叫父類別中沒有引數的建構元，以便進行初始化的動作。問題是，如果父類別有數個建構元，該如何才能呼叫父類別中特定的建構元呢?
<br>
做法是，再子類別的建構元中，透過初始化成員的技巧來呼叫。
<br>
下面是呼叫父類別CWin裡特定建構元的範例 
<br>
<img src="./images/C11_1_2@p1.png" alt=""><br>
<img src="./images/C11_1_2@p2.png" alt=""><br>
<img src="./images/C11_1_2@p3.png" alt=""><br>
<img src="./images/C11_1_2@p4.png" alt=""><br><br>
*這裡有很重要的兩點要提醒讀者：<br>
1.	如果省略34行的敘述，則父類別中沒有引數的建構元還是會被呼叫。<br>
2.	呼叫父類別中特定的建構元，其敘述必須寫在子類別建構元第一行的後面，並以「：」連接，不能置於它處 
<br>







      </div>
      </div>
    </div>
  </body>
</html><?php }} ?>
