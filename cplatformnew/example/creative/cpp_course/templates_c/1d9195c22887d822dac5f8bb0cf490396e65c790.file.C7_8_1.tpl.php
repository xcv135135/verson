<?php /* Smarty version Smarty-3.1.16, created on 2015-03-18 12:31:24
         compiled from "templates\C7_8_1.tpl" */ ?>
<?php /*%%SmartyHeaderCode:261205508ff9c0c21f0-80121283%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1d9195c22887d822dac5f8bb0cf490396e65c790' => 
    array (
      0 => 'templates\\C7_8_1.tpl',
      1 => 1426065432,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '261205508ff9c0c21f0-80121283',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5508ff9c0e15f2_70953125',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5508ff9c0e15f2_70953125')) {function content_5508ff9c0e15f2_70953125($_smarty_tpl) {?><html>
  <body>
    <div class="container" id="container">
      <div class="col-xs-12 col-sm-9">

      <div class="jumbotron">
           <h2><p>     7.8.1 指標與參數     </p></h2><br>

指標是利用「位址運算子&」以及「依址取值運算子*」取得指向變數的位址及其內容 <br>


舉例來說，我們宣告一個整數變數i，與整數指標變數ptr，將i設值為30，並使得指標ptr指向變數i的位址，再利用「依址取值運算子*」將i值加5，其程式如下:<br>

<img src="./images/C7_8_1@p1.png" alt=""><br>


參照是利用「參照運算子&」取得欲參考變數的位址，直接代替該變數 <br>





<img src="./images/C7_8_1@p2.png" alt=""><br>



若是函數傳回值為參照，則該函數就可以位於設定敘述的左邊，如下列的敘述： 
<br>



<img src="./images/C7_8_1@p3.png" alt=""><br><br>



以一個簡單的範例，複習指標與參照的使用方式 <br>




<img src="./images/C7_8_1@p4.png" alt=""><br>

<img src="./images/C7_8_1@p5.png" alt=""><br>

      </div>
      </div>
    </div>
  </body>
</html>
<?php }} ?>
