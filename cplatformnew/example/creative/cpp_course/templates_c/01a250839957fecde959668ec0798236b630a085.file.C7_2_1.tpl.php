<?php /* Smarty version Smarty-3.1.16, created on 2015-03-10 18:28:59
         compiled from ".\templates\C7_2_1.tpl" */ ?>
<?php /*%%SmartyHeaderCode:996654fec76bc57791-61482848%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '01a250839957fecde959668ec0798236b630a085' => 
    array (
      0 => '.\\templates\\C7_2_1.tpl',
      1 => 1425983288,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '996654fec76bc57791-61482848',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_54fec76bc7e8a8_37432115',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54fec76bc7e8a8_37432115')) {function content_54fec76bc7e8a8_37432115($_smarty_tpl) {?><html>
  <body>
    <div class="container" id="container">
      <div class="col-xs-12 col-sm-9">

      <div class="jumbotron">
           <h2><p>    7.2 指標變數      </p></h2><br>
在C++裡凡是要使用的變數都需要事先經過宣告，指標變數也不例外。



<br><br>


           <h2><p>    7.2.1 指標變數的宣告      </p></h2><br>



指標變數所存放的內容，並不是一般的資料，而是存放變數的位址。因為指標所存放的是某個資料在記憶體中的位址，所以根據指標存放的位址，即可找到他所指向的變數內容。<br>
指標變數的宣告格式如下所示 
<br>

<img src="./images/C7_2_1@p1.png" alt=""><br>


下面的敘述為指標變數宣告的範例<br>



<img src="./images/C7_2_1@p2.png" alt=""><br>


把指標ptr指向整數變數num <br>




<img src="./images/C7_2_1@p3.png" alt=""><br>


下面是設定ptr=&num的示意圖 

<img src="./images/C7_2_1@p4.png" alt=""><br>

在宣告指標變數時，也可以立即將它指向某個整數 <br>
<img src="./images/C7_2_1@p5.png" alt=""><br>















      </div>
      </div>
    </div>
  </body>
</html>
<?php }} ?>
