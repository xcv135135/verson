<?php /* Smarty version Smarty-3.1.16, created on 2015-03-09 10:25:12
         compiled from ".\templates\C5_6.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2617954fd65cec50b34-57346799%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e1dbdab22ca979b3e26923ac98fc0d0cb06adb2e' => 
    array (
      0 => '.\\templates\\C5_6.tpl',
      1 => 1425893107,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2617954fd65cec50b34-57346799',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_54fd65cec77c46_48668785',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54fd65cec77c46_48668785')) {function content_54fd65cec77c46_48668785($_smarty_tpl) {?><html>
  <body>
    <div class="container" id="container">
      <div class="col-xs-12 col-sm-9">

      <div class="jumbotron">
           <p>5.6 函數的多載</p>

           多載（overloading），是指相同的函數名稱，如果引數個數不同，或者是引數個數相同、型態不同的話，函數便具有不同的功能<br><br>

           以一個簡單的例子說明「函數的多載」之使用


<img src="./images/C5_6@p1.png" alt=""><br>
執行結果:<br>
<img src="./images/C5_6@p2.png" alt=""><br>



在使用函數的多載時，除了函數名稱一樣外，其函數定義內容還是與一般函數相同;同時，各個功能類似的函數定義是要全部寫出來。這些名稱相同的函數，也可以稱為多載化函數(overloaded function)。<br><br><br><br>
如果只有傳回值型態不同，則不能多載<br><br>

舉例來說，某個函數的原型如下 <br><br>
<img src="./images/C5_6@p3.png" alt=""><br>
這個函數原型會與下面的原型相衝突而產生錯誤<br>
<img src="./images/C5_6@p4.png" alt=""><br>
只有傳回值型態不同，則會讓編譯器難以分辨到底該使用哪一個函數 <br><br><br><br><br>


      </div>
      </div>
    </div>
  </body>
</html><?php }} ?>
