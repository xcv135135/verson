<?php /* Smarty version Smarty-3.1.16, created on 2015-03-18 12:43:00
         compiled from "templates\C8_2_1.tpl" */ ?>
<?php /*%%SmartyHeaderCode:115155090254828047-95368117%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '70abf77473a0fe99eec18b9596582698ae000676' => 
    array (
      0 => 'templates\\C8_2_1.tpl',
      1 => 1426081412,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '115155090254828047-95368117',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_55090254876250_94909265',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55090254876250_94909265')) {function content_55090254876250_94909265($_smarty_tpl) {?><html>
  <body>
    <div class="container" id="container">
      <div class="col-xs-12 col-sm-9">

      <div class="jumbotron">
           <h2><p>  8.2.1  定義與使用函數      </p></h2><br>


類別裡的函數可用如下的語法來定義
<br>
<img src="./images/C8_2_1@p1.png" alt=""><br>

物件要呼叫封裝在類別裡的函數時，可用下列的語法  <br>

<img src="./images/C8_2_1@p2.png" alt=""><br>


加入area()函數到CWin類別裡 <br>


<img src="./images/C8_2_1@p3.png" alt=""><br>
<img src="./images/C8_2_1@p4.png" alt=""><br>

<br>

加入函數到類別之後，並不會影響他到所建立之物件的大小，如程式27行顯示win1物件所佔有12個位元組。編譯器會將類別的成員函數寫到記憶體的某個地方，由該類別所建立的物件來共享，也就是無論在程式裡建立多少物件其成員函數只會有一份，由所有物件來共享。
<br>




<img src="./images/C8_2_1@p5.png" alt=""><br>

<br><br><br>

看一個同時具有兩個成員函數的例子 

<img src="./images/C8_2_1@p6.png" alt=""><br>

<img src="./images/C8_2_1@p7.png" alt=""><br>

<img src="./images/C8_2_1@p8.png" alt=""><br>






      </div>
      </div>
    </div>
  </body>
</html><?php }} ?>
