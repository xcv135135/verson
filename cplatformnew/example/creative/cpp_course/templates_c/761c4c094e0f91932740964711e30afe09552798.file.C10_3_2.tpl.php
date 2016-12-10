<?php /* Smarty version Smarty-3.1.16, created on 2015-03-18 12:56:56
         compiled from "templates\C10_3_2.tpl" */ ?>
<?php /*%%SmartyHeaderCode:141455509059884a759-75931068%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '761c4c094e0f91932740964711e30afe09552798' => 
    array (
      0 => 'templates\\C10_3_2.tpl',
      1 => 1426322543,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '141455509059884a759-75931068',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_55090598869b54_29517047',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55090598869b54_29517047')) {function content_55090598869b54_29517047($_smarty_tpl) {?><html>
  <body>
    <div class="container" id="container">
      <div class="col-xs-12 col-sm-9">

      <div class="jumbotron">
           <h2><p>  10.3.2 設定運算子多載的進階應用       </p></h2><br>

如果想把設定運算子「=」多載成可以連續設值：
<br>
	win1=win2=win3;	   // 把win3的值設給win1與win2
<br>
可依下面的步驟進行設計：
<br>
先把win3的值設給win2，再把win2的值設給win1
<br>
win1=(win2=win3);
<br>
把上式改寫成：
<br>
win1=(win2.operator=(win3));
<br>
再改為成右邊的敘述：

<img src="./images/C10_3_2@p1.png" alt=""><br>

最後可以寫出「=」運算子的多載 <br>
<img src="./images/C10_3_2@p2.png" alt=""><br>


<br>
下面的程式修改自prog15_5，示範「=」運算子的多載 

<br>
<img src="./images/C10_3_2@p3.png" alt=""><br>
<img src="./images/C10_3_2@p4.png" alt=""><br>
<img src="./images/C10_3_2@p5.png" alt=""><br>
<img src="./images/C10_3_2@p6.png" alt=""><br>



<br><br>









      </div>
      </div>
    </div>
  </body>
</html><?php }} ?>
