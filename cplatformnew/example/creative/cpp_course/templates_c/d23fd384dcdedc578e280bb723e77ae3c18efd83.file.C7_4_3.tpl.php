<?php /* Smarty version Smarty-3.1.16, created on 2015-03-18 12:31:23
         compiled from "templates\C7_4_3.tpl" */ ?>
<?php /*%%SmartyHeaderCode:323615508ff9b438ab3-92163130%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd23fd384dcdedc578e280bb723e77ae3c18efd83' => 
    array (
      0 => 'templates\\C7_4_3.tpl',
      1 => 1426060945,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '323615508ff9b438ab3-92163130',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5508ff9b45fbb9_91644511',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5508ff9b45fbb9_91644511')) {function content_5508ff9b45fbb9_91644511($_smarty_tpl) {?><html>
  <body>
    <div class="container" id="container">
      <div class="col-xs-12 col-sm-9">

      <div class="jumbotron">
           <h2><p>    7.4.3  利用指標傳遞一維陣列到函數裡      </p></h2><br>


可接收一維陣列之函數的定義格式如下


<img src="./images/C7_4_3@p1.png" alt=""><br>
例如func() 的定義可撰寫成如下的格式<br>

<img src="./images/C7_4_3@p2.png" alt=""><br>
在呼叫函數func() 時 



<img src="./images/C7_4_3@p3.png" alt=""><br>




下面的範例說明如何以指標傳遞一維陣列 <br>


<img src="./images/C7_4_3@p4.png" alt=""><br>


<img src="./images/C7_4_3@p5.png" alt=""><br>

程式第14行呼叫replace()函數，並傳入陣列a，以及整數4與num;此時陣列a的位址會被指標ptr所接收，且n的值等於4。第25行 *(ptr+n-1)相當於*(ptr+4-1)=*(ptr+3)，它代表陣列第4個元素，因此把它設值為num(num的值為100)，就相當於陣列第4個元素的值被更改為100。<br>






      </div>
      </div>
    </div>
  </body>
</html><?php }} ?>
