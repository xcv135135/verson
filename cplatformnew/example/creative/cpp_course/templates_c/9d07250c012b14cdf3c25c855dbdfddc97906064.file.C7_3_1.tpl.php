<?php /* Smarty version Smarty-3.1.16, created on 2015-05-06 13:59:42
         compiled from ".\templates\C7_3_1.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2598854fecd2b51c8f1-70707948%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9d07250c012b14cdf3c25c855dbdfddc97906064' => 
    array (
      0 => '.\\templates\\C7_3_1.tpl',
      1 => 1426653182,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2598854fecd2b51c8f1-70707948',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_54fecd2b543a02_95885218',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54fecd2b543a02_95885218')) {function content_54fecd2b543a02_95885218($_smarty_tpl) {?><html>
  <body>
    <div class="container" id="container">
      <div class="col-xs-12 col-sm-9">

      <div class="jumbotron">
           <h2><p>     7.3 指標與函數     </p></h2><br>

指標可以在函數之間傳遞，也可以從函數傳回指標。在許多情況下，函數的引數藉由指標的傳遞，不但可以簡化程式碼的撰寫、增加程式執行的效率。<br>
<br><br>





           <h2><p>     7.3.1 傳遞指標到函數中     </p></h2><br>

將指標傳入函數裡，可利用如下的語法 <br>


<img src="./images/C7_3_1@p1.png" alt=""><br>
設計address()，可接收指向整數的指標，沒有傳回值：<br>

原型的宣告：<br>
		&nbsp;&nbsp;&nbsp;      void address(int *);	  	// 宣告函數address()的原型

函數的定義：<br>


<img src="./images/C7_3_1@p2.png" alt=""><br>

函數的呼叫：<br>

<img src="./images/C7_3_1@p3.png" alt=""><br>



下面是函數address() 的完整範例<br>


<img src="./images/C7_3_1@p4.png" alt=""><br>

<img src="./images/C7_3_1@p5.png" alt=""><br>

於本例中，176~21行定義函數address()，他可以接收指向整數型態的指標(也就是可以接收一個存放整數的位址)。<br>

程式第11行呼叫函數address()，並傳入變數a的位址，傳入的位址由第17行的指標變數p1所接收，並於第19行印出傳入的位址，以及該位址內的變數值。<br>



prog9_7內，指標ptr與p1均指向同一個變數 <br>

<img src="./images/C7_3_1@p6.png" alt=""><br>

有些運算必須透過指標傳遞才能達成，下面為錯誤的示範 <br>



<img src="./images/C7_3_1@p7.png" alt=""><br>

<img src="./images/C7_3_1@p8.png" alt=""><br>


記憶體的配置情形<br>

執行完第8行後，記憶體的配置情形<br>

<img src="./images/C7_3_1@p9.png" alt=""><br>

進入swap() 函數時，記憶體配置的情形   <br>

<img src="./images/C7_3_1@p10.png" alt=""><br>
執行完第18行後，記憶體配置的情形<br>



<img src="./images/C7_3_1@p11.png" alt=""><br>


執行完第19行後，記憶體配置的情形  <br>



<img src="./images/C7_3_1@p12.png" alt=""><br>
執行完第20行後，記憶體配置的情形 <br>
<img src="./images/C7_3_1@p13.png" alt=""><br>

將程式prog9_9修改成prog9_10 <br>

<img src="./images/C7_3_1@p14.png" alt=""><br>



記憶體的配置情形 <br>
執行完第8行後，記憶體配置的情形
<img src="./images/C7_3_1@p15.png" alt=""><br>

進入swap() 函數時，記憶體配置的情形 <br>
<img src="./images/C7_3_1@p16.png" alt=""><br>

	執行完第18行後，記憶體配置的情形<br>


<img src="./images/C7_3_1@p17.png" alt=""><br>

執行完第19行後，記憶體配置的情形  
<img src="./images/C7_3_1@p18.png" alt=""><br>
執行完第20行後，記憶體配置的情形 
<img src="./images/C7_3_1@p19.png" alt=""><br>


由本例可知，利用傳址呼叫的方式，即可直接將傳入函數的變數a、b內容更改


      </div>
      </div>
    </div>
  </body>
</html>
<?php }} ?>
