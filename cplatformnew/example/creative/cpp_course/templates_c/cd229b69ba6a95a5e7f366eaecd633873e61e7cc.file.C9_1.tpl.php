<?php /* Smarty version Smarty-3.1.16, created on 2015-04-14 14:48:44
         compiled from ".\templates\C9_1.tpl" */ ?>
<?php /*%%SmartyHeaderCode:37325503e802a68fa7-56278508%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cd229b69ba6a95a5e7f366eaecd633873e61e7cc' => 
    array (
      0 => '.\\templates\\C9_1.tpl',
      1 => 1428995383,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '37325503e802a68fa7-56278508',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5503e802a93f36_20763961',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5503e802a93f36_20763961')) {function content_5503e802a93f36_20763961($_smarty_tpl) {?><html>
  <body>
    <div class="container" id="container">
      <div class="col-xs-12 col-sm-9">

      <div class="jumbotron">
           <h2><p>     9.1 解構元     </p></h2><br>

1.	建構元是在物件初次被建立時呼叫<br>
2.	 解構元是在物件被銷毀（destroy）時呼叫<br>
3.	 銷毀指的是釋放物件原先所佔有的記憶空間<br>
4.	 解構元的名稱和類別的名稱相同，之前必須加上一個 ~（tilde）符號 <br>
5.	解構元的定義格式<br>


<img src="./images/C9_1@p1.png" alt=""><br>
<br>
下面的範例裡加入一個解構元，以便觀察它的運作 

<br>

<img src="./images/C9_1@p2.png" alt=""><br>
<img src="./images/C9_1@p3.png" alt=""><br>
<img src="./images/C9_1@p4.png" alt=""><br>

解構元定義在16~20行，解構元的開頭必須加上「～」符號，名稱與類別相同，且沒有引數與傳回值。由於程式已提供這個解構元，因此編譯器會執行這個版本。當這個解構元被呼叫時，它會顯示出”解構元被呼叫了”字串，並顯示出它之物建的id成員。
<br><br>

值得一提的是，程式中刻意加上在第19行加入
<br>
System("pause");
<br>
這行指令，用來暫停程式的執行。這是因為在main()主程式裡所建立的物件，在main()函數結束後，物件才會被銷毀，因此解構元是在main()結束後才會呼叫。如果不加這行，則程式執行完解構元後就自動關閉視窗了，因此要加上這行來捕捉螢幕上的訊息。
<br>







      </div>
      </div>
    </div>
  </body>
</html><?php }} ?>
