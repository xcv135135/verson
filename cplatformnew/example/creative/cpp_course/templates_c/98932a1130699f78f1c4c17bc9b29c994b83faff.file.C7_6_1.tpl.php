<?php /* Smarty version Smarty-3.1.16, created on 2015-03-11 10:06:01
         compiled from ".\templates\C7_6_1.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4942550000e2405ec4-14480135%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '98932a1130699f78f1c4c17bc9b29c994b83faff' => 
    array (
      0 => '.\\templates\\C7_6_1.tpl',
      1 => 1426064751,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4942550000e2405ec4-14480135',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_550000e242cfc1_22589474',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_550000e242cfc1_22589474')) {function content_550000e242cfc1_22589474($_smarty_tpl) {?><html>
  <body>
    <div class="container" id="container">
      <div class="col-xs-12 col-sm-9">

      <div class="jumbotron">
           <h2><p>    7.6.1 指向指標的指標-雙重指標      </p></h2><br>

指標是指向某個變數的位址，也就是說，指要透過指標內所存放的位址，即可存取該變數的內容。很特殊的是，在C++裡，指標不但可以指向任何一種資料型態的變數，還可以指向指標，這種指向的指標的指標(pointer to pointer)，稱為雙重指標。<br>


雙重指標內所存放的是某個指標變數的位址<br>

<img src="./images/C7_6_1@p1.png" alt=""><br>

雙重指標變數的宣告格式如下所示  <br>

<img src="./images/C7_6_1@p2.png" alt=""><br>

下面的敘述為宣告雙重指標的範例 <br>



<img src="./images/C7_6_1@p3.png" alt=""><br>


也可以在兩個指標符號之間加上括號 <br>

<img src="./images/C7_6_1@p4.png" alt=""><br>





下面是雙重指標的使用範例 <br>


<img src="./images/C7_6_1@p5.png" alt=""><br>
<img src="./images/C7_6_1@p6.png" alt=""><br><br>


在上面的程式裡，pp為整數型態的雙重指標，pp所存放的內容及為指標p的位址0x22ff70;而*pp代表pp所指向之指標變數p的內容0x22ff74。由於 **pp可以拆解成 *(*pp)，(*pp)的值為0x22ff74，因此*(*pp)就代表把位址為0x22ff74的變數值取出，也就是n的值20。您可以參考下圖記憶體配置:<br>





<img src="./images/C7_6_1@p7.png" alt=""><br><br><br>



<p><h2>*二維陣列與雙重指標之間的關係</h2></p>

由前所述，陣列的名稱是ㄧ個指向陣列位址的指標常數;此外，對於指標常數而言，指標常數的位址等於指標常數的內容。有了這個概念之後，我們3X4的二維陣列num為例，來解釋雙重指標與二維陣列之間的關係。<br>



3x4的二維陣列num可以看成是由3個一維陣列所組成，每個一維陣列裡各有4個元素。也就是因為這個原因，在宣告num陣列時，編譯器會自動分配一個「指標常數」的陣列num[0]、num[1]與num[2]，讓他們分別指向每一個一維陣列，同時並把陣列名稱num指像這一個指標常數陣列。
<br>


下圖繪製出二維陣列num的示意圖 <br>

<img src="./images/C7_6_1@p8.png" alt=""><br>




由上圖可知，num是一個雙重指標常數，因為他指向另一個指標。此外，num[0]~num[2]是址標常數陣列，它們分別指向一維陣列。
<br>

下面的程式用來印出二維陣列的位址 
<br>
<img src="./images/C7_6_1@p9.png" alt=""><br>

程式執行結果:<br>


<img src="./images/C7_6_1@p10.png" alt=""><br>
<img src="./images/C7_6_1@p11.png" alt=""><br>
程式第7行宣告3X4的整數陣列num，9~11行印出雙重指標常數num的值與位址，以及它所指向之指標的值。


<br><br><br>




<p><h2>*二維陣列的指標表示方式</h2></p>
由於編譯器知道二維陣列裡，每一列有多少行，如此一來，編譯器就很容易進行指標的加法。<br>

	



<img src="./images/C7_6_1@p12.png" alt=""><br>
由上圖得知，陣列名車num是雙重指標常數，它指向指標常數陣列的起始位址，所以num的值是1000。值得一來的是，這個值不但是址標常數陣列第一個元素的位址，同時也是3x4的二維陣列num裡的第一列第一個元素的位址。
<br><br>
在C++裡，把雙重指標常數num的值加1，就相當於把num的指向一到指標常數陣列的下一個元素，也就是num[1]，因此num+1相當於第二列的位址。因為num是ㄧ個3列4行的二維陣列，且整數佔有4個位元組，因此每一列佔有4*4=16個位元組，所以num+1的值會等於1000+4*4=1016。<br>

num+m的值代表第m+1列的位址，可以從下圖驗證<br>


<img src="./images/C7_6_1@p13.png" alt=""><br>
由上圖就可以知道二維陣列裡每一列的位址。<br>
若是要取的每一列裡的特定元素，該如何處理呢?<br>

以陣列的第2列為例，num+1指向指標常數num[1]，因此如果在(num+1)之前加上一個星號(*)，即可取得(num+1)所指向之位址的內容，因此*(num+1)實際上取得的是指標常數陣列num[1]的內容，如下圖:<br>

*(num+1) 可取得num[1]的內容  <br>



<img src="./images/C7_6_1@p14.png" alt=""><br>

Num+1與*(num+1)的值同為1016，為何C++要用不同的表示方式表示相同的數值呢?事實上，它們之間差異是在於尺度(scale)上的不同。num+1是指向指標常數num[1]的指標，如果把num+1的值在加1，則會使的她指向下一個指標常數num[2]，因此會指向1032這個位址。<br>

然而，*(num+1)代表第二列第一個元素的位址，如果把*(num+1)的值加1，即*(num+1)+1，則代表第二列第二個元素的位址(1020)，因此，*(num+1)+1事實上是把位址加上4*1=4個位元組，如下圖表示<br>



<img src="./images/C7_6_1@p15.png" alt=""><br>

由上面的討論可知，*(num+1)代表第二列，第一行的位址，而*(num+2)+1則代表第三列，第二行的位址，由此可知要取出第m+1列，第n+1行的內容時，可用下列的語法  <br>


<img src="./images/C7_6_1@p16.png" alt=""><br>

下面的程式是利用指標印出陣列的位址及指向的變數值 


<img src="./images/C7_6_1@p17.png" alt=""><br>
<img src="./images/C7_6_1@p18.png" alt=""><br>

對於二維陣列num而言，*(num+m)+n代表陣列元素num[m][n]的位址，而*(*(num+m)+n)則代表陣列元素num[m][n]的值，下圖會出本例中元素的內容值與位址:<br>

<img src="./images/C7_6_1@p19.png" alt=""><br>

另外，程式第14行印出**num的即是num[0][0]的值。如果把m=0，n=0代入格式可得num[0][0]=*(*(num+m)+n)=*(*(num+0)+0)=**num。


<img src="./images/C7_6_1@p20.png" alt=""><br>


下面的程式可將陣列中，大於40的元素值均以40來取代 


<img src="./images/C7_6_1@p21.png" alt=""><br>
<img src="./images/C7_6_1@p22.png" alt=""><br>






      </div>
      </div>
    </div>
  </body>
</html><?php }} ?>
