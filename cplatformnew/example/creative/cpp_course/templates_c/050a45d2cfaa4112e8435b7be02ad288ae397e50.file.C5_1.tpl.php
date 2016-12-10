<?php /* Smarty version Smarty-3.1.16, created on 2015-04-14 10:49:42
         compiled from ".\templates\C5_1.tpl" */ ?>
<?php /*%%SmartyHeaderCode:839554fd40357f5543-86335521%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '050a45d2cfaa4112e8435b7be02ad288ae397e50' => 
    array (
      0 => '.\\templates\\C5_1.tpl',
      1 => 1426607266,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '839554fd40357f5543-86335521',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_54fd40358204d6_98648344',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54fd40358204d6_98648344')) {function content_54fd40358204d6_98648344($_smarty_tpl) {?><html>
  <body>
    <div class="container" id="container">
      <div class="col-xs-12 col-sm-9">

      <div class="jumbotron">
          <p>函數</p>
          程式中超過兩次以上重複使用的程式碼，可以考慮將之定義為函式，以便重覆呼叫使用，降低相同程式片段的維護成本。
          <br>
          <p>5.1 函數基本架構<p><br>
          下面的並在運算結果範例計算6的平方值，前後列印星號 
          <img src="./images/C5_1@p1.png" alt=""><br>
          <img src="./images/C5_1@p2.png" alt=""><br>

          第5行宣告自訂的函數star() 沒有傳回任何值(star() 前面加上一個void 保留字)，同時也不傳入任何值給 star() 函數使用 (star() 括號內的引數為void )。也就是說，這一行為宣告函數的基本法則，因為稱為函數原型(prototype)的宣告。<br>

          第8行、第10行，分別呼叫自訂函數 start()。第9行印出6的平方值，等到函數執行完畢，即會回到原先呼叫函數的下一個敘述，繼續執行主程式中的敘述。<br>

          <img src="./images/C5_1@p3.png" alt=""><br>
          如上圖，函數呼叫與返回的方式。<br>

          
      </div>
      </div>
    </div>
  </body>
</html><?php }} ?>
