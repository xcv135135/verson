<?php /* Smarty version Smarty-3.1.16, created on 2014-09-10 10:02:10
         compiled from ".\templates\C1_5_3.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3040654100582adc590-57590138%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7f474a866b5c84ea896316cd4a4e55ebcf0f36e7' => 
    array (
      0 => '.\\templates\\C1_5_3.tpl',
      1 => 1410336124,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3040654100582adc590-57590138',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_54100582b01961_50918432',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54100582b01961_50918432')) {function content_54100582b01961_50918432($_smarty_tpl) {?><html>
  <body>
    <div class="container" id="container">
      <div class="col-xs-12 col-sm-9">

      <div class="jumbotron">
           <p>1.5.3將程式碼加上註解</p>
註解將會有助於程式的閱讀與偵錯，因此可以增加程式的可讀性。如前所述，C++是以「//」記號開始，至該行結束來表示註解文字。如果註解的文字有好幾行時，可以用「/*」與「*/」符號將欲註解的文字括起來，這兩個符號之間的文字，C++編譯器皆不做任何處理。
註解只是程式中的說明文字，讓人能夠了解某段程式碼的功能或目的，編譯時會直接忽略，不影響執行結果。使用註解的目的如下:
<br>
1.在程式碼起始處加入一段說明文字，將該程式的作者、編修的時間、程式的功能…加以記錄。
<br>
2.將程式中的變數、函數、類別或是某段程式碼(如迴圈)的作用寫出。
<br>
3.在除錯的過程中，可將程式裡的某個部分暫時用註解標示，需要時將註解的符號除去，避免重複輸入，浪費時間。
<br>
適當的註解是給予自己或他人日後重新閱讀程式內容的方便。因此在發展大型程式時，請記得適度加上註解，以便維持程式碼的可讀性。
<br>
      </div>
      </div>
    </div>
  </body>
</html><?php }} ?>
