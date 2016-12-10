<?php /* Smarty version Smarty-3.1.16, created on 2015-03-14 16:11:29
         compiled from ".\templates\C9_abs.tpl" */ ?>
<?php /*%%SmartyHeaderCode:314305503ed31e87555-78522142%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5883d44eb6a06bfe10f4ea590586aa4998b06fa3' => 
    array (
      0 => '.\\templates\\C9_abs.tpl',
      1 => 1426320685,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '314305503ed31e87555-78522142',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5503ed31eae667_52743522',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5503ed31eae667_52743522')) {function content_5503ed31eae667_52743522($_smarty_tpl) {?><html>
  <body>
    <div class="container" id="container">
      <div class="col-xs-12 col-sm-9">

      <div class="jumbotron">
           <h2><p>    *本章重點      </p></h2><br>

1. 解構元的呼叫時機是在物件已經不再需要而被銷毀(destory)時，例如，當main()函數執行完畢時。所謂的「銷毀」，指的是釋放物件原先所佔有的記憶空間。<br>
2. 當程式碼裡沒有撰寫任何的解構元時，編譯器便會提供預設的解構元。<br>
3. 若採動態記憶體配置的方式來配置記憶體空間時，必須負責處理記憶體回收的工作。<br>
4. 回收記憶體最佳的時機是在物件不再使用時，因此我們把回收記憶體的程式碼寫在解構元裡是最自然不過的事。<br>
5.用一個已存在的物件當成初值來建立新的物件時，則拷貝建構元會被呼叫。<br>
6.拷貝建構元和建構元、解構元的性質很類似，如果程式裡已提供拷貝建構元，則編譯器就不再提供預設的拷貝建構元。<br>
7.只要在類別裡的資料成員有使用到動態記憶體配置或指標，就必須提空拷貝建構元，否則容易造成執行時的錯誤。

<br>





      </div>
      </div>
    </div>
  </body>
</html><?php }} ?>
