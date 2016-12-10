<?php /* Smarty version Smarty-3.1.16, created on 2015-03-11 21:28:44
         compiled from ".\templates\C8_1_5.tpl" */ ?>
<?php /*%%SmartyHeaderCode:57225500430c9f8a86-60963091%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '098bc16cde1b7b427387fb8b2be92bdac80f1a54' => 
    array (
      0 => '.\\templates\\C8_1_5.tpl',
      1 => 1426080506,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '57225500430c9f8a86-60963091',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5500430ca23a19_48878536',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5500430ca23a19_48878536')) {function content_5500430ca23a19_48878536($_smarty_tpl) {?><html>
  <body>
    <div class="container" id="container">
      <div class="col-xs-12 col-sm-9">

      <div class="jumbotron">
           <h2><p>    8.1.5 物件所佔的位元組      </p></h2><br>


利用sizeof() 函數可查詢物件與類別所佔的位元組 

<img src="./images/C8_1_5@p1.png" alt=""><br>
<img src="./images/C8_1_5@p2.png" alt=""><br>



編譯器是以資料成員內，佔最多位元組的資料型態之位元組為單位來配置位建的記憶體空間，而於本例中，整數佔最多位元組，所以是以4個位元組為單位，少於4個位元組時還是配置4個位元組的空間，因此CWin所建立的物件共佔有12個位元組。

      </div>
      </div>
    </div>
  </body>
</html><?php }} ?>
