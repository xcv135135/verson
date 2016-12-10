<?php /* Smarty version Smarty-3.1.16, created on 2015-03-17 23:47:08
         compiled from "templates\C5_2.tpl" */ ?>
<?php /*%%SmartyHeaderCode:192955084c7c9ac3b0-37489340%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '47ec7c7220e9b84b24d8fc55bdefacadc4c764f8' => 
    array (
      0 => 'templates\\C5_2.tpl',
      1 => 1425890420,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '192955084c7c9ac3b0-37489340',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_55084c7c9e6d44_21470057',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55084c7c9e6d44_21470057')) {function content_55084c7c9e6d44_21470057($_smarty_tpl) {?><html>
  <body>
    <div class="container" id="container">
      <div class="col-xs-12 col-sm-9">

      <div class="jumbotron">
           <p>5.2 特殊的 inline函數</p>

當函數被呼叫時，程式的主控權就交給這個被呼叫的函數，此時作業系統會建立一個堆疊(stack)，暫時存放執行程式碼的返回呼叫程式之位址，等函數執行完畢，再回到原呼叫程式繼續執行。程式這樣前後跳來跳去，會因此花費不少額外時間。 <br>
C++的inline函數提供一個解決的方法。Inline函數會再一般的函數定義前加上關鍵字inline，與一般的函數不同的是，inline函數必須在該函數呼叫前先行定義，因此inline函數的定義格式如下:<br>


            <img src="./images/C5_2@p1.png" alt=""><br>
使用inline函數時，會將函數的程式碼複製一次，直接替代呼叫函數的敘述，這種方式就像把函數的程式碼”嵌入”原始程式中一般。<br>
如下圖的inline例子:

            <img src="./images/C5_2@p2.png" alt=""><br>

            <img src="./images/C5_2@p3.png" alt=""><br><br><br><br>
值得一提的是，即使程式設計者將某函數定義成inline函數，是否使用inline函數，則要看編譯器的決定。也就是說，編譯器遇到下列的情況時，可能會忽略inline函數的定義，把該inline函數視為一般的函數，不嵌入程式:<br>
1.	inline函數內容過大。<br>
2.	inline函數使用遞迴函數的呼叫方式，呼叫自己本身。<br>
3.	您所使用的編譯器本身不支援inline函數的使用。<br>
Inline函數的最佳使用時機，就是在函數的內容很短，且程式碼嵌入之後執行效率，能夠高過於原本處理函數時所需的額外動作，如此使用inline函數才會發揮其最大功效。
      </div>
      </div>
    </div>
  </body>
</html><?php }} ?>
