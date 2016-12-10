<?php /* Smarty version Smarty-3.1.16, created on 2015-03-18 12:43:00
         compiled from "templates\C8_2_2.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19532550902549a2f16-89278115%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '471942876dd6602c7b3b17fc29d216dc9eab45f1' => 
    array (
      0 => 'templates\\C8_2_2.tpl',
      1 => 1426084875,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19532550902549a2f16-89278115',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_550902549c61a3_27986240',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_550902549c61a3_27986240')) {function content_550902549c61a3_27986240($_smarty_tpl) {?><html>
  <body>
    <div class="container" id="container">
      <div class="col-xs-12 col-sm-9">

      <div class="jumbotron">
           <h2><p> 8.2.3 函數的位置         </p></h2><br>
成員函數定義在類別之外，只需在類別的定義內加入函數的原型即可 <br>



<img src="./images/C8_2_2@p1.png" alt=""><br>
<img src="./images/C8_2_2@p2.png" alt=""><br>
<img src="./images/C8_2_2@p3.png" alt=""><br>



程式第11行宣告成員函數area()，而area()的本體則是定義在14~17行，注意它是定義在CWin類別之外，既然定義在類別之外，就必須讓編譯器知道這個函數是屬於CWin類別，其解決方式是利用範疇解析運算子(scope resolution operator)「：：」的用法 

<br>



<img src="./images/C8_2_2@p4.png" alt=""><br>
把函數定義在類別內部或者類別外部有什麼不同呢?<br>


事實上，定義在類別內部的函數，編譯器會把它視為行內函數(inline function)來處理，在某些情況下，它可獲得較佳的執行效能。但把函數定義在類別外部，雖然編譯器會把它當成一般函數來處理，但這種寫法可以讓類別的定義更簡潔。
<br><br>



也可以在函數前面加上inline關鍵字

<img src="./images/C8_2_2@p5.png" alt=""><br>



      </div>
      </div>
    </div>
  </body>
</html><?php }} ?>
