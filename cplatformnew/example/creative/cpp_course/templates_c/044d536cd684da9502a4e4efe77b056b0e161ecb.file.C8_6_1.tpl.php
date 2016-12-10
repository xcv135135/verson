<?php /* Smarty version Smarty-3.1.16, created on 2015-03-18 12:43:01
         compiled from "templates\C8_6_1.tpl" */ ?>
<?php /*%%SmartyHeaderCode:801655090255aef379-89019967%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '044d536cd684da9502a4e4efe77b056b0e161ecb' => 
    array (
      0 => 'templates\\C8_6_1.tpl',
      1 => 1426137517,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '801655090255aef379-89019967',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_55090255b12601_27943049',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55090255b12601_27943049')) {function content_55090255b12601_27943049($_smarty_tpl) {?><html>
  <body>
    <div class="container" id="container">
      <div class="col-xs-12 col-sm-9">

      <div class="jumbotron">
           <h2><p>    8.6.1 建構元的基本認識      </p></h2><br>

建構元的主要目的，是用來設定物件的初值。<br>
建構元的定義格式如下 <br>



<img src="./images/C8_6_1@p1.png" alt=""><br>
請注意，建構元的名稱必須與其所屬之類別的類別名稱完全相同。
<br><br>

<h2><p>    *建構元的使用範例      </p></h2><br>

建構元除了沒有傳回值，且名稱必須與類別名稱相同之外，它的呼叫時間也與一般的函數不同。一般的函數需要用到時才呼叫，而建構元則是在建立物件時便會自動呼叫，並執行建構元的內容，因此建構元不需從程式直接呼叫。
<br>




下面的例子說明建構元的使用方式<br><br>


<img src="./images/C8_6_1@p2.png" alt=""><br>
<img src="./images/C8_6_1@p3.png" alt=""><br>
<img src="./images/C8_6_1@p4.png" alt=""><br>


程式第28行以CWin類別建立物件Win1，在建立的同時，12~18行的建構元會自動被呼叫，並傳遞引數到建構元內進行資料成員的設定。
<br><br>

建構元在建立物件時便會自動執行<br>




<img src="./images/C8_6_1@p5.png" alt=""><br>

















      </div>
      </div>
    </div>
  </body>
</html><?php }} ?>
