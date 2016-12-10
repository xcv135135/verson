<?php /* Smarty version Smarty-3.1.16, created on 2015-03-17 23:47:08
         compiled from "templates\C5_1_1.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3265355084c7c20ee72-84065054%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0d886000322cfe79766f8615ed606b42251898ae' => 
    array (
      0 => 'templates\\C5_1_1.tpl',
      1 => 1425884407,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3265355084c7c20ee72-84065054',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_55084c7c2226f4_04634563',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55084c7c2226f4_04634563')) {function content_55084c7c2226f4_04634563($_smarty_tpl) {?><html>
  <body>
    <div class="container" id="container">
      <div class="col-xs-12 col-sm-9">

      <div class="jumbotron">
           <p>5.1.1 函數原型的宣告、撰寫與呼叫</p>

           想使用自訂的函數時也宣告像使用變數一樣宣告，但函數的宣告必須多點功夫，因為程式設計師不僅要宣告函數的傳回型態，同時也要說明傳入函數的引數型態。下面為「函數原型」(prototype)的宣告格式:
           <div class="alert alert-info">
  傳回值型態 函數名稱(引數型態1 , 引數型態2 , …..);
</div>

所謂「函數原型」的宣告是指宣告函數時，除了將函數的傳回值告知編譯程式外，還將函數內所有引數型態一起宣告。<br>
下面格式是合法的函數宣告格式:
<br>
 <img src="./images/C5_1_1@p1.png" alt="">

<br><br>
*自訂函數撰寫的格式如下所示:
 <img src="./images/C5_1_1@p2.png" alt="">


<br>
*呼叫函數的方式有兩種:
(1)一種是將傳回值指定給某個變數接收
 <img src="./images/C5_1_1@p3.png" alt=""><br>
(2)另一種則是直接呼叫函數，不需要傳回值  <br>
 <img src="./images/C5_1_1@p4.png" alt=""><br>

<br>


下面的敘述為常見的函數呼叫

 <img src="./images/C5_1_1@p5.png" alt=""><br>

右邊的格式為自訂函數square() 的宣告與呼叫方式

 <img src="./images/C5_1_1@p6.png" alt=""><br>
宣告於函數內的變數稱為「區域變數」（local variable） 


      </div>
      </div>
    </div>
  </body>
</html><?php }} ?>
