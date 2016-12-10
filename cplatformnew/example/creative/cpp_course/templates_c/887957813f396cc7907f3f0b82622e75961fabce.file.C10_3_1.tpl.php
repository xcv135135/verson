<?php /* Smarty version Smarty-3.1.16, created on 2015-03-14 09:39:52
         compiled from ".\templates\C10_3_1.tpl" */ ?>
<?php /*%%SmartyHeaderCode:189355503f367664f66-06347777%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '887957813f396cc7907f3f0b82622e75961fabce' => 
    array (
      0 => '.\\templates\\C10_3_1.tpl',
      1 => 1426322389,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '189355503f367664f66-06347777',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5503f36768c060_13624181',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5503f36768c060_13624181')) {function content_5503f36768c060_13624181($_smarty_tpl) {?><html>
  <body>
    <div class="container" id="container">
      <div class="col-xs-12 col-sm-9">

      <div class="jumbotron">
           <h2><p>   10.3.1 設定運算子「=」的多載 -  簡單的範例       </p></h2><br>

*如果物件裡的成員包含有指標，或是以動態記憶體方式配置變數時，使用預設的設定運算子「=」可能會發生錯誤 
<br>
<img src="./images/C10_3_1@p1.png" alt=""><br>
<img src="./images/C10_3_1@p2.png" alt=""><br>
<img src="./images/C10_3_1@p4.png" alt=""><br>
於48行重新設定win1物件成員，雖然只在48行更改win1物件的成員，結果卻在50與51行的輸出中，發現win2物件的title成員也一併被更改，這顯然有問題，可以利用下圖來描述錯誤發生的過程:
<br>
<br>
*下圖是執行完37~38行後的結果 
<br>
<img src="./images/C10_3_1@p5.png" alt=""><br>
*下圖是執行完43行後的結果 
<br>
<img src="./images/C10_3_1@p6.png" alt=""><br>
*下圖是執行完48行後的結果 
<br>
<img src="./images/C10_3_1@p7.png" alt=""><br>

<br>
*下面的範例，是使用設定運算子來修正錯誤 
<img src="./images/C10_3_1@p8.png" alt=""><br>
<img src="./images/C10_3_1@p9.png" alt=""><br>
<img src="./images/C10_3_1@p10.png" alt=""><br>
<img src="./images/C10_3_1@p11.png" alt=""><br>
<br><br>
*下圖為執行完42~43行後的結果 

<img src="./images/C10_3_1@p12.png" alt=""><br>
*下圖為執行完48行後的結果 
<img src="./images/C10_3_1@p13.png" alt=""><br>

*下圖為執行完53行後的結果 
<img src="./images/C10_3_1@p14.png" alt=""><br>









      </div>
      </div>
    </div>
  </body>
</html><?php }} ?>
