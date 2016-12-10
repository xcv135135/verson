<?php /* Smarty version Smarty-3.1.16, created on 2015-03-11 08:58:27
         compiled from ".\templates\C7_4_1.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1232654fff579eac5c8-47146887%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '469e4b204e4aaf8c1d0942f0b2c4e75918ca95cc' => 
    array (
      0 => '.\\templates\\C7_4_1.tpl',
      1 => 1426060704,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1232654fff579eac5c8-47146887',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_54fff579ed36c4_34117893',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54fff579ed36c4_34117893')) {function content_54fff579ed36c4_34117893($_smarty_tpl) {?><html>
  <body>
    <div class="container" id="container">
      <div class="col-xs-12 col-sm-9">

      <div class="jumbotron">
           <h2><p>  7.4 指標與陣列        </p></h2>


陣列也可以看成是指標的分身，不同的是，陣列是固定長度的記憶體區塊，而指標是ㄧ個變數，用來紀錄所指向變數的位址。此外，陣列的元素排列還可以利用指標運算來存取。<br><br><br>


           <h2><p>  7.4.1  指標的算數運算        </p></h2><br>


指標的算術運算（arithmetic operation），是指標內所存放的位址做加法或減法運算，指標做加法或減法運算時，是針對它所指向之資料型態的大小來處理，舉例來說，如果指標ptr指向一個整數，則ptr+1並不是將位址的值加1，而是加上4個位元組，這是因為指標ptr指向整數之故(整數佔有4個位元組)，然而指標的算術運算多半是用在存取陣列元素的操作。<br>


陣列有個巧妙的設計，也就是 <br>

<img src="./images/C7_4_1@p1.png" alt=""><br>
<img src="./images/C7_4_1@p2.png" alt=""><br>

有趣的是，於上圖中，陣列名稱a雖然市一個指標常數，但是如果把指標常數a的位址列出來，將會發現a的位址等於它本身所存放的位址，這個精巧的設計有助於將指標常數的應用擴展到二維以上的陣列。<br><br>


下面的程式驗證陣列名稱是一個指向陣列位址的指標
<img src="./images/C7_4_1@p3.png" alt=""><br>
<img src="./images/C7_4_1@p4.png" alt=""><br>
陣列a於記憶體中的配置圖 <br>


<img src="./images/C7_4_1@p5.png" alt=""><br>


<br><br>
下面的範例是利用指標常數來存取陣列的內容 <br>

<img src="./images/C7_4_1@p6.png" alt=""><br>

<img src="./images/C7_4_1@p7.png" alt=""><br>

陣列a於記憶體中的配置圖 
<img src="./images/C7_4_1@p8.png" alt=""><br>


      </div>
      </div>
    </div>
  </body>
</html><?php }} ?>
