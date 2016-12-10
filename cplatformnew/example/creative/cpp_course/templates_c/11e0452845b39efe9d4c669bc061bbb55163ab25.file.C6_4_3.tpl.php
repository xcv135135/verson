<?php /* Smarty version Smarty-3.1.16, created on 2015-03-18 12:19:45
         compiled from "templates\C6_4_3.tpl" */ ?>
<?php /*%%SmartyHeaderCode:156415508fce126c010-36733882%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '11e0452845b39efe9d4c669bc061bbb55163ab25' => 
    array (
      0 => 'templates\\C6_4_3.tpl',
      1 => 1425972314,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '156415508fce126c010-36733882',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5508fce129ae11_44173728',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5508fce129ae11_44173728')) {function content_5508fce129ae11_44173728($_smarty_tpl) {?><html>
  <body>
    <div class="container" id="container">
      <div class="col-xs-12 col-sm-9">

      <div class="jumbotron">
           <h2><p>    6.4.3 字串的輸出與輸入      </p></h2><br>


與其他的資料型態一樣，利用cout與cin及可輸出與輸入字串。<br>


以cout輸出字串常數，須用資料流插入運算子「<<」
<br>

<img src="./images/C6_4_3@p1.png" alt=""><br>
利用cout印出字串物件的內容


<img src="./images/C6_4_3@p2.png" alt=""><br>

以cin輸入字串時，要使用資料流擷取運算子「>>」<br>

<img src="./images/C6_4_3@p3.png" alt=""><br>


使用cin輸入資料內容前，會利用cout輸出提示訊息 <br><br>


<img src="./images/C6_4_3@p4.png" alt=""><br>



使用cout及cin的範例（輸出有誤） <br>


<img src="./images/C6_4_3@p5.png" alt=""><br>

<img src="./images/C6_4_3@p6.png" alt=""><br>

第一次執行迴圈時，輸入Tippi，執行結果是正確的，再次輸入時，輸入的是Alice Wu，但卻只有Alice，為什麼呢? <br>
這是因為利用cin輸入字串時，cin讀到Enter鍵或是第一個空白，就以為字串已經輸入完畢，即結束讀取的動作，因此利用cin輸入字串時，必須確保字串的內容沒有空白，否則會出現如同本範例的錯誤。<br><br>



<span style="color:red">   

利用cin.getline() 修正prog8_12可能出現的錯誤</span> <br>


<img src="./images/C6_4_3@p7.png" alt=""><br>
<img src="./images/C6_4_3@p8.png" alt=""><br>





利用cin.getline()即可將字串中的空白當成一般的字元輸入，而不會造成任何的錯失，因此在串的輸入上，其使用的頻率會高遠高於cin。<br><br>


<span style="color:red">
cin.get()</span> <br>
輸入單一字元的情況下，可使用cin.get()，格式如下<br>



<img src="./images/C6_4_3@p9.png" alt=""><br>

舉例來說  <br>



<img src="./images/C6_4_3@p10.png" alt=""><br>


字串與數值混合輸入時可能會發生問題，如下面的程式 <br>



<img src="./images/C6_4_3@p11.png" alt=""><br>

<img src="./images/C6_4_3@p12.png" alt=""><br>

當程式執行時，鍵入整數變數age的內容，按下Enter鍵後，接著再輸入字串，會發現這個字串並沒有被讀入程式就直接跳到下一個步驟。這是由於cin
讀入整數變數age時，將\n留在輸入序列中，而後面接著利用cin.getline()讀入字串時，字元陣列接收\n，成為空白字串。
<br>

於prog8_14中，多加一行cin.get(); 即可修正錯誤：<br>

10   cin >> age;<br>
11   cin.get();	           // 接收多餘的\n<br>
12   cout << "What's your name? ";<br>

<img src="./images/C6_4_3@p13.png" alt=""><br>







      </div>
      </div>
    </div>
  </body>
</html><?php }} ?>
