<?php /* Smarty version Smarty-3.1.16, created on 2015-03-17 23:47:09
         compiled from "templates\C5_5_1.tpl" */ ?>
<?php /*%%SmartyHeaderCode:787355084c7d825cf9-69883781%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7f082784d5e21f1ddd6c293738022673b0ef7633' => 
    array (
      0 => 'templates\\C5_5_1.tpl',
      1 => 1425892116,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '787355084c7d825cf9-69883781',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_55084c7d8450f3_17373941',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55084c7d8450f3_17373941')) {function content_55084c7d8450f3_17373941($_smarty_tpl) {?><html>
  <body>
    <div class="container" id="container">
      <div class="col-xs-12 col-sm-9">

      <div class="jumbotron">
           <p>5.5.1 參照基本認識</p>

           「參照」(reference)就像是變數的暱稱或別名(alias)，他可代表某個變數，也就是當一個變數有了他的參照後，在程式中使用參照的名稱，即可直接存取這個變數。<br>

參照宣告格式如下:<br>


<img src="./images/C5_5_1@p1.png" alt=""><br>
想為整數變數a使用參照ref，可以做出如下的宣告：<br>
<img src="./images/C5_5_1@p2.png" alt=""><br>
如果想將ref的值設成10，可以寫出下面的敘述：<br>
ref=10    //將ref的值設為10<br>

因此當變數a的值更改時，a的參照ref之值亦會隨之變更;同樣的，當a的參照ref之值變動時，變數a的值也就會跟著改變。<br><br>

下面的程式碼是參照的使用範例常用的流程圖符號

<img src="./images/C5_5_1@p3.png" alt=""><br>
 程式執行結果:<br>
 <img src="./images/C5_5_1@p4.png" alt=""><br>
Pro7_2的第10行裡，址將參照rm加上10，印出num和rm的值時，兩個變數卻同時改變。由此可知，不管是變數或是該變數的參照，只要將其中一個值更改，另一個也會跟著變動。


      </div>
      </div>
    </div>
  </body>
</html><?php }} ?>
