<?php /* Smarty version Smarty-3.1.16, created on 2015-03-11 10:23:56
         compiled from ".\templates\C7_abs.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1282054fffad04f0c36-99013201%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a6b2e977de970788262245902267afeda05761a0' => 
    array (
      0 => '.\\templates\\C7_abs.tpl',
      1 => 1426065829,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1282054fffad04f0c36-99013201',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_54fffad051bbc4_64271078',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54fffad051bbc4_64271078')) {function content_54fffad051bbc4_64271078($_smarty_tpl) {?>
<html>
  <body>
    <div class="container" id="container">
      <div class="col-xs-12 col-sm-9">

      <div class="jumbotron">
           <h2><p>     *本章重點     </p></h2><br>




1.指標是用來存放變數在記憶體中的位址。這種依位址來取值的特殊方法，稱之為「間接定址取值法」。<br>
2.不得不學以及不得不用指標的理由(1)當函數必須傳回一個以上的值，(2)使得陣列或字串在函數間的傳遞更有效率，(3)較複雜的資料結構需要指標的協助才能將資料鏈結在一起，(4)必須利用指標來傳達記憶體的訊息才能使函數正常工作。<br>
3.使用指標變數時，可以經由「位址運算子--＆」與「依址取值運算子--*」完成。位址運算子可以取得變數在記憶體中的位址;依址取值運算子則可以取得指標所指向的記憶體位址的內容。<br>
4.假設ptri為指標變數，則*ptri適用來取出於ptri位址內所存放的變數值，而&ptri則是指標變數本身的位址。<br>
5.在Dec C++中，無論指標指向何種資料結構，指標變數均佔有4個位元組。
<br>
6.指標的三種運算，分別是設定運算、加減法運算及差值運算。加法與減法算式針對指標內的位址所做的運算:差值運算的運算結果為兩個指標之間的距離。<br>
7.經過指標的加減運算後所指向的陣列內容，與利用註標值所取得的陣列元素值是相同的。
<br>
8.傳回值為指標的函數只要在宣告原型及定義時，在函數名稱前面加上指標符號(*)，及可傳回指標。
<br>
9.函數名稱本身計錄函數的起始位址，指向函數的指標稱為函數指標。將欲指向的函數之函數原型先寫好，在將(*指標變數名稱)取代函數名稱，即可得到函數指標。
<br>
10.藉由字串指標陣列的協助，不但可減少空間的浪費，還可增加程式的可讀性與執行效率。<br>
11.	使用靜態記憶體配置時，原始程式碼經過編譯後會分為程式區與資料區兩個區塊。<br>
12.	在執行時其彈性的調動所需要的記憶體之方式，稱為動態記憶體配置。<br>
13.	使用動態記體配置時，作業系統會從未用空間(亦稱記憶體，heap)中找尋一塊是合的記憶體區塊供程式使用。<br>
14.	利用C++題供的new和delete運算子即可完成動態記憶體配置與釋放。<br>
15.	指標與參照的不同之處:<br>
(1)	指標是利用「＆」及「＊」運算子取得變數的位址即其內容;參照則是利用「&」運算子取得變數的位址，直接代替該變數。<br>
(2)	指標*ptr代表指向變數的值;參照ref直接代替變數。<br>
(3)	在使用指標前將它指向正確的變數即可，指標可以在程式中指向任意的同型態變數;參照在宣告時就必須設定參考的變數，而且無法再次改變參考的對象。<br>
(4)	傳回值為指標的函數，不可以在設定敘述中左邊;傳回值為參照的函數，則可以在設定敘述中的左邊。
<br>




      </div>
      </div>
    </div>
  </body>
</html><?php }} ?>
