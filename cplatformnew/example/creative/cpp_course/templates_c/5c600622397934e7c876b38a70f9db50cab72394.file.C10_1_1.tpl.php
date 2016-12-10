<?php /* Smarty version Smarty-3.1.16, created on 2015-03-18 12:56:56
         compiled from "templates\C10_1_1.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9157550905983d9ac0-91941215%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5c600622397934e7c876b38a70f9db50cab72394' => 
    array (
      0 => 'templates\\C10_1_1.tpl',
      1 => 1426321408,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9157550905983d9ac0-91941215',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_550905983f5047_91409046',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_550905983f5047_91409046')) {function content_550905983f5047_91409046($_smarty_tpl) {?><html>
  <body>
    <div class="container" id="container">
      <div class="col-xs-12 col-sm-9">

      <div class="jumbotron">
           <h2><p>  10.1.1 運算子多載的範例--「>」運算子的多載        </p></h2><br>

如果想多載一個運算子，就必須為這個運算子定義一個多載函數。例如，如果想讓運算子「>」多載，使得它可用來判定CWin類別所產生的物件win1與win2面積的大小，則可以在CWin類別裡定義如下的函數:
<br>
<img src="./images/C10_1_1@p1.png" alt=""><br>
其中operator是C++的關鍵字，後面加上「>」符號，代表函數定義運算子「>」的多載。operator和「>」之間可已有空格，或者是沒有空格。可以想成把「operator>」想成是一個成員函數的名稱，且此函數可以接收CWin物件的參照。
<br><br><br>
*呼叫operator>() 函數 
<br>
<img src="./images/C10_1_1@p2.png" alt=""><br>
*下圖說明在operator>() 函數裡，引數傳遞的情形 
<br>
<img src="./images/C10_1_1@p3.png" alt=""><br>
*下面是將運算子「>」多載的範例 
<br>
<img src="./images/C10_1_1@p4.png" alt=""><br>
<img src="./images/C10_1_1@p5.png" alt=""><br>
<img src="./images/C10_1_1@p6.png" alt=""><br>
程式第15~18行定義operator>()函數，它可接收CWin物件的參照，並傳回比較之後的結果。
<br>
<img src="./images/C10_1_1@p7.png" alt=""><br>

<br>






      </div>
      </div>
    </div>
  </body>
</html><?php }} ?>
