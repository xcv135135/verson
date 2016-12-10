<?php /* Smarty version Smarty-3.1.16, created on 2015-03-18 12:43:00
         compiled from "templates\C8_1_3.tpl" */ ?>
<?php /*%%SmartyHeaderCode:28192550902543691a0-15153015%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0b69917cd0539937ae8945440a4bf107b023ad58' => 
    array (
      0 => 'templates\\C8_1_3.tpl',
      1 => 1426080259,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28192550902543691a0-15153015',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_55090254394126_45237951',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55090254394126_45237951')) {function content_55090254394126_45237951($_smarty_tpl) {?><html>
  <body>
    <div class="container" id="container">
      <div class="col-xs-12 col-sm-9">

      <div class="jumbotron">
           <h2><p> 8.1.3 建立新的物件         </p></h2><br>


已經學會定義類別，並撰寫相關的成員。但如果要讓程式動起來，單單類別還不夠，因為類別只是一個模板，我們必須利用它來建議屬於該類別的物件(object)。以視窗類別來說，從定義類別到建立物件，可以想成:
<br>

先打造一個「視窗」模板（定義類別），再以此模板打造「視窗」（建立物件）

<br>

建立物件 
<br>

<img src="./images/C8_1_3@p1.png" alt=""><br>


經過上述步驟，便可透過變數win1，存取到物件裡的內容。



<br><br>

建立好的物件win1與win2，因為是由CWin類別所建立，所以生來即具有id、width與height變數，同時也包含area()這個函數，如下圖是由「視窗」類別所建立初具有該類別特性的物件:


<img src="./images/C8_1_3@p2.png" alt=""><br>

存取物件的內容 <br>

<img src="./images/C8_1_3@p3.png" alt=""><br>
設定資料成員的範例 <br>

<img src="./images/C8_1_3@p4.png" alt=""><br>



<img src="./images/C8_1_3@p5.png" alt=""><br><br><br><br>


*使用類別來設計完整的程式<br>

<img src="./images/C8_1_3@p6.png" alt=""><br>
<img src="./images/C8_1_3@p7.png" alt=""><br>



      </div>
      </div>
    </div>
  </body>
</html><?php }} ?>
