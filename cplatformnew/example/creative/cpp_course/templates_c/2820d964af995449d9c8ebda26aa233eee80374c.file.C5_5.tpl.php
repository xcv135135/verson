<?php /* Smarty version Smarty-3.1.16, created on 2015-03-09 17:05:46
         compiled from ".\templates\C5_5.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2227154fd626abd12a8-50310665%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2820d964af995449d9c8ebda26aa233eee80374c' => 
    array (
      0 => '.\\templates\\C5_5.tpl',
      1 => 1425891919,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2227154fd626abd12a8-50310665',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_54fd626abfc237_27682260',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54fd626abfc237_27682260')) {function content_54fd626abfc237_27682260($_smarty_tpl) {?><html>
  <body>
    <div class="container" id="container">
      <div class="col-xs-12 col-sm-9">

      <div class="jumbotron">
           <p>5.5.1 參照與函數</p>
           <span style="color:red">   在函數之間傳遞的引數，一般都是以「傳值呼叫」（call by value），編譯器會將欲傳入函數的引數值另行複製一份，供呼叫的函數使用</span>，因此不管如何改變這個傳進函數中的引數值，都不會更動到原先變數的值。



           <img src="./images/C5_5@p1.png" alt=""><br>
程式執行結果:<br>
           <img src="./images/C5_5@p2.png" alt=""><br>
使用傳值呼叫時，引數會被複製一份到記憶體中，再傳入呼叫的函數裡。因此函數再處理引數時，就像是使用區域變數ㄧ樣，只不過這些區域變數的值，是直接從記憶體中拷貝，因此不管如何更改引數的值，都不會影響呼叫端程式裡的變數值。<br>


以prog7_1為例，將函數傳值呼叫的方式繪製成圖 :<br>

<img src="./images/C5_5@p3.png" alt=""><br>
此外，傳入函數的引數，其生命週期只有在函數的內部，再函數裡也不能存取或是使用原先的引數。<br><br><br>


與「傳值呼叫」不同的是「傳址呼叫」與「以參照呼叫」，也就是直接將引數的位址傳遞到呼叫的函數裡，因此，當呼叫函數對引數做任何的存取動作時，亦會直接更改原先變數的值。C++中「指標」是使用「傳址呼叫」傳遞引數;「參照」則是使用「以參照呼叫」來傳遞引數。我們先來認識「參照」，關於「指標」於後面章節再來討論。<br>
      </div>
      </div>
    </div>
  </body>
</html><?php }} ?>
