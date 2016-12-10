<?php /* Smarty version Smarty-3.1.16, created on 2015-03-14 10:12:02
         compiled from ".\templates\C11_3.tpl" */ ?>
<?php /*%%SmartyHeaderCode:206465503fb3c94dd87-35389901%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '58ffbfe6e721cfc5155218a89a64c6bf4536e237' => 
    array (
      0 => '.\\templates\\C11_3.tpl',
      1 => 1426324316,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '206465503fb3c94dd87-35389901',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5503fb3c978d19_02710007',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5503fb3c978d19_02710007')) {function content_5503fb3c978d19_02710007($_smarty_tpl) {?><html>
  <body>
    <div class="container" id="container">
      <div class="col-xs-12 col-sm-9">

      <div class="jumbotron">
           <h2><p>  11.3 改寫        </p></h2><br>

*「多載」是函數名稱相同，在不同的場合可做不同的事<br>
*「改寫」是在子類別裡定義與父類別名稱相同的函數，用來覆蓋父類別裡函數功能的一種技術 
<br><br>



簡單的改寫範例 
<br>

<img src="./images/C11_3@p1.png" alt=""><br><br>
<img src="./images/C11_3@p2.png" alt=""><br><br>

<img src="./images/C11_3@p3.png" alt=""><br><br>

本例中，子類別所定義的show_member()取代父類別的show_member()的功能，這種情形於OOP的技術裡稱為改寫(overriding)。也就是，利用「改寫」的技術，於子類別中可定義和父類別裡之名稱、引數個數與資料型態均完全相同的函數，用以取代父類別中原有的函數。
<br>
<br>



<font style="background-color:#999999">
「改寫」與「多載」的比較
</font><br>
(1)多載」：英文名稱為overloading<br>
&nbsp;&nbsp;&nbsp;&nbsp;它是在相同類別內，定義名稱相同，但引數個數或型態不同的函數，C++可依據引數的個數或型態，呼叫相對應的函數<br>
(2)「改寫」：英文名稱為overriding<br>
&nbsp;&nbsp;&nbsp;&nbsp;	它是在子類別當中，定義名稱、引數個數與型態均與父類別相同的函數，用以改寫父類別裡函數的功用
<br>


<br>
<br>
<br>






      </div>
      </div>
    </div>
  </body>
</html><?php }} ?>
