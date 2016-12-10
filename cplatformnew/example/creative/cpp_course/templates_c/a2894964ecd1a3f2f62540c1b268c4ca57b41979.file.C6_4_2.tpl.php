<?php /* Smarty version Smarty-3.1.16, created on 2015-03-18 12:19:45
         compiled from "templates\C6_4_2.tpl" */ ?>
<?php /*%%SmartyHeaderCode:134085508fce110c6c5-85626095%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a2894964ecd1a3f2f62540c1b268c4ca57b41979' => 
    array (
      0 => 'templates\\C6_4_2.tpl',
      1 => 1425971822,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '134085508fce110c6c5-85626095',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5508fce114aec6_03125349',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5508fce114aec6_03125349')) {function content_5508fce114aec6_03125349($_smarty_tpl) {?><html>
  <body>
    <div class="container" id="container">
      <div class="col-xs-12 col-sm-9">

      <div class="jumbotron">
           <h2><p>    6.4.2 字元陣列的宣告      </p></h2><br>

	字串的宣告格式如下 <br>


<img src="./images/C6_4_2@p1.png" alt=""><br>
下面的範例為合法的字串變數宣告 <br>

<img src="./images/C6_4_2@p2.png" alt=""><br>
上面的第一個敘述宣告一個字元值陣列mystr，其長度為30(實際只能使用29個位元組);第二個敘述宣告字元陣列name，長度為15(實際只能用14個位元組)，初值設為Tippi Hong。在使用雙引號時，編譯器會自動在字串結尾處加上字串結束字元’\0’。<br><br>


值得注意的是，C++的陣列長度接過宣告之後就是固定的，即使沒有用到的部分，也會佔用記憶體。<br>




下面的程式可印出字元及字串的長度 <br>

<img src="./images/C6_4_2@p3.png" alt=""><br>

<img src="./images/C6_4_2@p4.png" alt=""><br>













      </div>
      </div>
    </div>
  </body>
</html><?php }} ?>
