<?php /* Smarty version Smarty-3.1.16, created on 2015-03-18 12:43:01
         compiled from "templates\C8_6_3.tpl" */ ?>
<?php /*%%SmartyHeaderCode:366255090255e7d6d4-64813646%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6f94d6715bb27c8968ca500def6225368b248ee0' => 
    array (
      0 => 'templates\\C8_6_3.tpl',
      1 => 1426137884,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '366255090255e7d6d4-64813646',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_55090255ea0951_94970940',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55090255ea0951_94970940')) {function content_55090255ea0951_94970940($_smarty_tpl) {?><html>
  <body>
    <div class="container" id="container">
      <div class="col-xs-12 col-sm-9">

      <div class="jumbotron">
           <h2><p>   8.6.3 預設建構元       </p></h2><br>


在prog13_3中，如果把main() 改寫成如下的程式碼<br>


<img src="./images/C8_6_3@p1.png" alt=""><br>
	編譯會錯誤，因為編譯器找不到 "沒有引數" 的建構元

<br>
如果沒有撰寫建構元，C++會提供一個沒有引數的預設建構元
<br>
如果程式裡有撰寫建構元，C++不會再提供沒有引數的預設建構元  
<br>



prog13_4是加入一個預設建構元的完整範例 
<br>

<img src="./images/C8_6_3@p2.png" alt=""><br>

<img src="./images/C8_6_3@p3.png" alt=""><br>
<img src="./images/C8_6_3@p4.png" alt=""><br>
<img src="./images/C8_6_3@p5.png" alt=""><br>

程式第26~32行提供一個沒有引數的建構元，它會將id設為’D’，將width與height設為100。
<br>

<img src="./images/C8_6_3@p6.png" alt=""><br>
下圖說明於prog13_4中，建構元呼叫的情形 <br>

<img src="./images/C8_6_3@p7.png" alt=""><br>

<br><br>


           <h2><p>   *建構元的私有與公有       </p></h2><br>

到目前為止，我們所使用的建構元均是屬於public，因此它可以在程式的任何地方被呼叫，所以新建立的物件均可以呼叫他。<br>




      </div>
      </div>
    </div>
  </body>
</html><?php }} ?>
