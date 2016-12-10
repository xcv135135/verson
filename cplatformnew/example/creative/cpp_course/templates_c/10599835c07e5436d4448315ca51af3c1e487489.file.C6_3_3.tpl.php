<?php /* Smarty version Smarty-3.1.16, created on 2015-03-18 12:19:44
         compiled from "templates\C6_3_3.tpl" */ ?>
<?php /*%%SmartyHeaderCode:242105508fce0d39906-98119594%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '10599835c07e5436d4448315ca51af3c1e487489' => 
    array (
      0 => 'templates\\C6_3_3.tpl',
      1 => 1425971015,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '242105508fce0d39906-98119594',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5508fce0d3d789_41171393',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5508fce0d3d789_41171393')) {function content_5508fce0d3d789_41171393($_smarty_tpl) {?><html>
  <body>
    <div class="container" id="container">
      <div class="col-xs-12 col-sm-9">

      <div class="jumbotron">
           <h2><p>   6.3.3 傳遞「值」還是「位址」到函數？       </p></h2><br>

在C++中呼叫函數時，若是沒有特別指明，都是以傳值呼叫的方式傳到函數中。在此或許會覺得有疑問，為什麼將陣列當成引數時，傳到函數中的卻是陣列的位址?<br>


程式在傳遞一般的變數名稱到函數時，接收的函數會將引數的內容複製一份，放在函數所使用的記憶體中，就像是函數裡的區域變數一樣，當函數結束時，原先在其他區段裡的變數並不會更改其值。<br>
<span style="color:red">   

當傳遞的引數是陣列時，由於陣列的長度可能很大，而且是一塊連續的記憶體空間，為了避免寶貴的記憶體空間不足，就不再像一般的變數一樣，將陣列複製一份，而占用過多的記憶體，也就是說，當陣列為引數時，傳遞到函數中的是該陣列的實際位址。</span><br>
下面是函數傳遞陣列位址的範例:<br>
           <img src="./images/C6.3.3@p1.png" alt=""><br>
           <img src="./images/C6.3.3@p2.png" alt=""><br>

當傳遞陣列a到函數時，即使接收的引數與原先的名稱不同(如陣列b)，將陣列b各元素的值及位址印出後，可以看到和主程式中的陣列a各元素皆相同。下圖所示:<br>


           <img src="./images/C6.3.3@p3.png" alt=""><br>











      </div>
      </div>
    </div>
  </body>
</html><?php }} ?>
