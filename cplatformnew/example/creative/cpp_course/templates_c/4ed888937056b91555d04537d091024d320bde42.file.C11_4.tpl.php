<?php /* Smarty version Smarty-3.1.16, created on 2015-03-14 17:17:31
         compiled from ".\templates\C11_4.tpl" */ ?>
<?php /*%%SmartyHeaderCode:102075503fcab0d1d02-32400463%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4ed888937056b91555d04537d091024d320bde42' => 
    array (
      0 => '.\\templates\\C11_4.tpl',
      1 => 1426324558,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '102075503fcab0d1d02-32400463',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5503fcab0f8e06_87123294',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5503fcab0f8e06_87123294')) {function content_5503fcab0f8e06_87123294($_smarty_tpl) {?><html>
  <body>
    <div class="container" id="container">
      <div class="col-xs-12 col-sm-9">

      <div class="jumbotron">
           <h2><p>   11.4 在子類別中使用拷貝建構元       </p></h2><br>

如果父類別或子類別裡沒有提供拷貝建構元的話，編譯器會提供一個預設的拷貝建構元
<br>
下面是一個因沒有撰寫拷貝建構元而發生錯誤的例子
<br>
<img src="./images/C11_4@p1.png" alt=""><br>
<img src="./images/C11_4@p2.png" alt=""><br>
<img src="./images/C11_4@p3.png" alt=""><br>
<img src="./images/C11_4@p4.png" alt=""><br>
<img src="./images/C11_4@p5.png" alt=""><br>
<br>

下圖為執行完60行後的結果 
<br>
<img src="./images/C11_4@p6.png" alt=""><br>
下圖為執行完61行後的結果 
<br>
<img src="./images/C11_4@p7.png" alt=""><br>
要解上面的錯誤，只要在子類別內加上一個拷貝建構元 
<br>
<img src="./images/C11_4@p8.png" alt=""><br>

<br>
下面的程式是修正沒有撰寫拷貝建構元的錯誤 


<img src="./images/C11_4@p9.png" alt=""><br>
<img src="./images/C11_4@p10.png" alt=""><br>
<img src="./images/C11_4@p11.png" alt=""><br>
<img src="./images/C11_4@p12.png" alt=""><br>


下圖為執行47與53行後之結果 

<br>
<img src="./images/C11_4@p13.png" alt=""><br>

<br>
<br>
*建構元與解構元的呼叫時機
(1)建立物件時，父類別的建構元會先被執行，然後再執行子類別的建構元
(2)銷毀物件時，子類別的解構元會先被執行，然後再執行父類別的解構元 

<br>
<br>








      </div>
      </div>
    </div>
  </body>
</html><?php }} ?>
