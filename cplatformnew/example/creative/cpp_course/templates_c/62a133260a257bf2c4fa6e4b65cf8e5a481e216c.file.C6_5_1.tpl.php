<?php /* Smarty version Smarty-3.1.16, created on 2015-03-18 12:19:45
         compiled from "templates\C6_5_1.tpl" */ ?>
<?php /*%%SmartyHeaderCode:209585508fce13cf7e5-44147828%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '62a133260a257bf2c4fa6e4b65cf8e5a481e216c' => 
    array (
      0 => 'templates\\C6_5_1.tpl',
      1 => 1425972565,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '209585508fce13cf7e5-44147828',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5508fce13fa770_62969529',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5508fce13fa770_62969529')) {function content_5508fce13fa770_62969529($_smarty_tpl) {?><html>
  <body>
    <div class="container" id="container">
      <div class="col-xs-12 col-sm-9">

      <div class="jumbotron">

           <h2><p>  6.5 字串類別—C++型態字串        </p></h2><br>


除了使用C型態字串之外，C++提供另一種使用字串的方式，就是用string類別(class)，此類別的字串稱為C++型態字串(C++-style string)，目前還沒討論到類別不過我們以叫簡單的思維來看。在使用string類別前我們要先將string含括到程式中，如下面敘述:<br>

#include < string > <br><br><br>



           <h2><p>  6.5.1 字串的宣告        </p></h2><br>

一般在程式使用基本資料型態宣告的，稱為變數（variable），而在物件導向程式設計（object oriented programming）裡以類別宣告的，稱為「物件」（object）。在此不妨暫且將string 類別看成是ㄧ種資料型態，就像使用int宣告整數變數，而以string類別宣告的就是字串，宣告格式  <br>

<img src="./images/C6_5_1@p1.png" alt=""><br>

<img src="./images/C6_5_1@p2.png" alt=""><br>


下面的範例為合法的字串宣告 <br>

<img src="./images/C6_5_1@p3.png" alt=""><br>

下表整理出常用的格式，並將該格式及對應的範例列出<br>



<img src="./images/C6_5_1@p4.png" alt=""><br>


要取的字元陣列的長度，可以使用sizeof()函數，而在C++型態字串的string物件裡則要使用length() 函數是string類別裡用來取得物件長度的函數，其用法如下 <br>

<img src="./images/C6_5_1@p5.png" alt=""><br>

句點是成員存取運算子（member access operator） <br>


印出空字元陣列及空字串的長度 <br>

<img src="./images/C6_5_1@p6.png" alt=""><br>

<img src="./images/C6_5_1@p7.png" alt=""><br>


由執行結果可知，C型態的空字串長度為1，就是字串結數字元所佔用的位元組，而C++型態的空字串不需要字串結束字元，因此他的長度為0。














      </div>
      </div>
    </div>
  </body>
</html><?php }} ?>
