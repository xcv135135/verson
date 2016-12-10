<?php /* Smarty version Smarty-3.1.16, created on 2015-03-11 08:53:33
         compiled from ".\templates\C7_3_3.tpl" */ ?>
<?php /*%%SmartyHeaderCode:192154fff4592bba63-95726095%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '66e592f9f35a1de1e3d5208dbb6d9d97e1a261c4' => 
    array (
      0 => '.\\templates\\C7_3_3.tpl',
      1 => 1426060405,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '192154fff4592bba63-95726095',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_54fff4592e2b73_17421576',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54fff4592e2b73_17421576')) {function content_54fff4592e2b73_17421576($_smarty_tpl) {?><html>
  <body>
    <div class="container" id="container">
      <div class="col-xs-12 col-sm-9">

      <div class="jumbotron">
           <h2><p>   7.3.3 函數指標       </p></h2><br>

函數與一般的資料型態之變數一樣具有位址。函數的位址，是經過編譯後所產生的機器碼之起始處;也就是說，函數名稱本身即計錄著函數起始位址，就如同陣列名稱也記錄著陣列的起始位址。<br>

函數指標（function pointer）的定義格式如下 <br>
<img src="./images/C7_3_3@p1.png" alt=""><br>


第一項以虛線框起的部分為傳回值的型態，是指標育指向的函數之傳回值型態。<br>
第二項以虛線框起的部分(*指標變數名稱)，即函數指標，此處必須以括號刮起。<br>
第三項以虛線框起的部分(引數型態1 ,引數型態2,….)<br>則是欲指向的函數之引數型態，亦可定義格式中加入引數的變數名稱，成為(引數型態1 變數名稱1 ,引數型態2 變數名稱2,….)。<br>

設有一個計算平方值的函數square()，原型定義如下


<img src="./images/C7_3_3@p2.png" alt=""><br>
想把函數指標pf指向square()函數，可寫成下面的敘述<br>
<img src="./images/C7_3_3@p3.png" alt=""><br>
把函數指標pf指向函數square() <br>

<img src="./images/C7_3_3@p4.png" alt=""><br><br>


下面是函數指標的使用範例 <br>


<img src="./images/C7_3_3@p5.png" alt=""><br><br>








      </div>
      </div>
    </div>
  </body>
</html><?php }} ?>
