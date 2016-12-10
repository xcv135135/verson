<?php /* Smarty version Smarty-3.1.16, created on 2014-09-12 06:37:47
         compiled from ".\templates\C1_4_1.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12267540ffbe60307a2-60632440%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c3073c115593bd17dc15f428550d815d95204586' => 
    array (
      0 => '.\\templates\\C1_4_1.tpl',
      1 => 1410496655,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12267540ffbe60307a2-60632440',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_540ffbe6055633_14665535',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_540ffbe6055633_14665535')) {function content_540ffbe6055633_14665535($_smarty_tpl) {?><html>
  <body>
    <div class="container" id="container">
      <div class="col-xs-12 col-sm-9">

      <div class="jumbotron">
           <p>1.4.1 識別字</p>
          在C++中，我們稱變數、函數或者是類別的名稱為為識別字(identifier)，如cout、endl均屬於識別字。<strong><p class="text-error">識別字的字元可以是英文字母、數字或底線，但識別字的命名只要能代表變數的意義即可，過長的識別字名稱反而會造成閱讀上與編輯上的困擾。
特別注意的是，識別字名稱不能使用到C++的關鍵字，此外，識別字的第一個字元必須是英文大、小寫字母或底線("_")，而空白字元與特殊符號(如$、%等)接不能使用。
</p></strong>
<strong>C++是識別字有大小寫之分</strong>，因此name跟Name會被看成不同的變數。一般來說，識別字會有一個習慣性的命名方式，下表列出C++中，識別字的習慣命名原則:
<br>

<table class="table table-bordered">
  <tr>
    <th>識別字</th>
    <th>命名原則</th>
    <th>範例</th>
  </tr>
  <tr>
    <th>常數</th>
    <th>全部字元皆由英文大寫字母及底線組成</th>
    <th>PI<br>
MIN_NUM</th>
  </tr>
  <tr>
    <th>變數</th>
    <th>英文小寫字母開始，若由數個英文單字組成，則後面的英文字由大寫起頭，其餘小寫</th>
    <th>radius<br>
rectangleArea</th>
  </tr>
  <tr>
    <th>函數</th>
    <th>英文小寫字母開始，若由數個英文單字組成，則後面的英文字由大寫起頭，其餘小寫</th>
    <th>show<br>
addNum</th>
  </tr>
  <tr>
    <th>類別</th>
    <th>英文大寫字母開始，若由數個英文單字組成，則後面的英文字由大寫起頭，其餘小寫</th>
    <th>MaxSize</th>
  </tr>
</table>
使用習慣命名原則可以讓程式更容易閱讀，當其他程式設計師乍看到某識別字時，雖然還不清楚識別字的用途，卻可以大概了解它應該是常數、變數、函數。

      </div>
      </div>
    </div>
  </body>
</html><?php }} ?>
