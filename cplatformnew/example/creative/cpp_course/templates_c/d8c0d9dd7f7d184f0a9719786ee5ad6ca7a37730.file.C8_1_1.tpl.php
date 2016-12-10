<?php /* Smarty version Smarty-3.1.16, created on 2015-03-12 09:02:33
         compiled from ".\templates\C8_1_1.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2666355000ccdb82130-50993808%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd8c0d9dd7f7d184f0a9719786ee5ad6ca7a37730' => 
    array (
      0 => '.\\templates\\C8_1_1.tpl',
      1 => 1426147238,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2666355000ccdb82130-50993808',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_55000ccdbad0c3_53094473',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55000ccdbad0c3_53094473')) {function content_55000ccdbad0c3_53094473($_smarty_tpl) {?><html>
  <body>
    <div class="container" id="container">
      <div class="col-xs-12 col-sm-9">

      <div class="jumbotron">
           <h2><p>  8.1.1   類別的基本概念     </p></h2><br>

類別的發展，是為了讓程式語言更清楚地描述出日常生活的事物。例如「視窗」變可利用類別來表示。也就是說，我們可以定義一個「視窗」類別，以方便描述視窗的特性。類別是由「資料成員」與「成員函數」封裝而成的，它們的基本概念分數如下：<br>

<font style="background-color:#999999">
資料成員(data member)
</font><br>

每一個視窗，不論尺寸的大小，有具有「寬」與「高」這兩個屬性。這兩個屬性自然就可選為「視窗」類別的資料成員。當然，視窗類別還可能有其他的資料成員，如顏色、標題等。<br><br>






<font style="background-color:#999999">
成員函數(member function)</font><br>

對於「視窗」類別而言，除了「寬」與「高」這兩個資料外，還有可以計算面積的函數納入視窗的類別裡，變成類別的成員函數(member function)。諸如計算面積等相關的功能通常可以交由獨立的函數(function)來處理。但在物件導向程式設計(object oriented programming，OOP)裡，這些函數是封裝在類別之內，成為類別的成員之一。



<img src="./images/C8_1_1@p1.png" alt=""><br>

<br><br>



<font style="background-color:#999999">
資料成員、成員函數與封裝</font><br>

依據前述的概念可知，所謂的「類別」是把事務的資料與相關的函數封裝(encapsulate)在一起，形成一種特殊的結構，用以表達真時事物的一種抽象概念。「encapsulate」的原意「裝…..裝入膠囊內」，現在膠囊就是類別，而資料成員與成員函數變是被封入的東西。下圖為視窗類別的示意圖:



<img src="./images/C8_1_1@p2.png" alt=""><br>

視窗的資料成員有:width與height，而成原函數有area()。像這種把資料成員與成員函數包裝在同一個類別內的做法，在OOP的術語稱為封裝(encapsulation)。


      </div>
      </div>
    </div>
  </body>
</html>
<?php }} ?>
