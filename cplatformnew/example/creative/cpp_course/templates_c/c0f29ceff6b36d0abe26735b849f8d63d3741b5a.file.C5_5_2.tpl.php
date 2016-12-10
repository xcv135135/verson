<?php /* Smarty version Smarty-3.1.16, created on 2015-03-09 17:11:46
         compiled from ".\templates\C5_5_2.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1102954fd63d24bedf5-03788970%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c0f29ceff6b36d0abe26735b849f8d63d3741b5a' => 
    array (
      0 => '.\\templates\\C5_5_2.tpl',
      1 => 1425892277,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1102954fd63d24bedf5-03788970',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_54fd63d24e5ef0_79713633',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54fd63d24e5ef0_79713633')) {function content_54fd63d24e5ef0_79713633($_smarty_tpl) {?><html>
  <body>
    <div class="container" id="container">
      <div class="col-xs-12 col-sm-9">

      <div class="jumbotron">
           <p>5.5.2 傳遞參照到函數</p>

程式中需要傳回兩個以上的值時，就可以利用參照，將參照直接傳遞到呼叫函數裡，當參照值更改時，原變數亦會隨之改變，即可解決需要多個傳回值的要求，這種方式即稱為「以參照呼叫」(call by reference)或是「傳遞參照」(pass by reference)。因此，參照的另一個好處，就是解決再函數間傳遞多個傳回值的問題。<br>


下面是將參照當成引數傳入函數的原型宣告:<br>
<img src="./images/C5_5_2@p1.png" alt=""><br>
在定義函數時，於變數名稱前加上參照運算子&即可<br>
<img src="./images/C5_5_2@p2.png" alt=""><br>
經過宣告及定義後，即可將參照當成引數傳入函數。同時，由於參照的值即試所參考的變數之位址，傳入函數的仍然示被指向變數的位址，因此不需經過return敘述即可改變的值。


prog7_3是以參照的方式傳遞到函數 
<img src="./images/C5_5_2@p3.png" alt=""><br>
程式執行結果:<br>
<img src="./images/C5_5_2@p4.png" alt=""><br>
main()函數裡的變數a、b之位址傳到add10()裡，當add10()函數中對參照存取時，原始變數a、b亦隨之更動。因此，在呼叫add10()函數之後，再次印出變數a、b值，就會與呼叫add10()函數錢不同。<br><br>


以程式prog7_3為例，將參照的傳遞與使用的方式繪製成圖:
<img src="./images/C5_5_2@p5.png" alt=""><br>
傳入函數的引數，其生命週期只有在函數的內部，在函數裡也不能存取或是使用原先的引數。由於傳入函數的變數的位址，因此雖然在函數中更改的參照的值，原先傳入的引數也會跟著改變。

      </div>
      </div>
    </div>
  </body>
</html><?php }} ?>
