<?php /* Smarty version Smarty-3.1.16, created on 2015-03-09 16:45:26
         compiled from ".\templates\C5_3_1.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1286254fd5da60602c4-27813868%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd9961158f6cdf5bbcfe109cb880a90a37e663480' => 
    array (
      0 => '.\\templates\\C5_3_1.tpl',
      1 => 1425890697,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1286254fd5da60602c4-27813868',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_54fd5da60873c6_97261360',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54fd5da60873c6_97261360')) {function content_54fd5da60873c6_97261360($_smarty_tpl) {?><html>
  <body>
    <div class="container" id="container">
      <div class="col-xs-12 col-sm-9">

      <div class="jumbotron">
           <p>5.3.1 區域變數</p>

           「區域變數」(local variable)又稱為「自動變數」(automatic variable)，他是利用關鍵字auto宣告。到目前為止所使用的變數均是屬於區域變數，由於最常使用所以此關鍵字auto可以省略。區域變數在編譯過程中並不會配置一塊記憶體空間，而是在程式執行時會以堆疊(stack)的方式存放，因此他是屬於動態的變數。<br>
           <img src="./images/C5_3_1@p1.png" alt=""><br>
           下圖是區域變數i在所屬區段中的活動範圍之示意圖 
           <img src="./images/C5_3_1@p2.png" alt=""><br><br><br>



           由下面的程式裡可以看到區域變數的使用 
           <img src="./images/C5_3_1@p3.png" alt=""><br>
           <img src="./images/C5_3_1@p4.png" alt="">
      </div>
      </div>
    </div>
  </body>
</html><?php }} ?>
