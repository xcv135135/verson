<?php /* Smarty version Smarty-3.1.16, created on 2015-03-18 12:43:02
         compiled from "templates\C8_abs.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3107955090256b782a8-50724738%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '21d96adc08bb9ec99534254d20fdd570b16ec32f' => 
    array (
      0 => 'templates\\C8_abs.tpl',
      1 => 1426234870,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3107955090256b782a8-50724738',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_55090256b976b3_92990659',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55090256b976b3_92990659')) {function content_55090256b976b3_92990659($_smarty_tpl) {?><html>
  <body>
    <div class="container" id="container">
      <div class="col-xs-12 col-sm-9">

      <div class="jumbotron">
           <h2><p>   *本章重點       </p></h2><br>



1.類別」是把事物的資料與相關的功能封裝在一起，形成一種特殊的結構，用以表達真實世界的一種抽象概念。<br>
2.	類別的成員可分為「資料成員」與「成員函數」兩種。<br>
3.	由類別所建立的物件稱為instance，譯為「實例」。<br>
4.	要存取物件裡的某個資料成員時，可以透過「物件名稱.資料成員」語法來達成，如果要呼叫封裝在類別裡的函數，則可透過「物件名稱.函數名稱」語法。<br>
5.	如果要刻意強調「物件本身的成員」的話，可以在成員前面加上this這個關鍵字，即「this ->成員名稱」，此時的this即代表取用此依成員的物件。<br>
6.	有些函數不必傳遞任何資料給呼叫端程式，因此沒有傳回值。若函數本身沒有傳回值，則必須在其定義的前面加上關鍵字void。<br>
7.	私有成員(private member)可限定類別中的成員僅供同依類別內的函數所存取。<br>
8.	類別外部可以存取到類別內的公有成員(public member)。<br>
9.「封裝」(encapsulation)是把資料成員與函數成員包裝在一個類別內，以限定成員的存取，以達到保護資料的一種技術。<br>
10.	如果希望一些不屬於某一類別的之成員的函數，也能夠存取該類別內的成員。則可以利用友誼函數(friend function)來達成。<br>
11.	雖然友誼函數是定義在類別內，但他並不屬於類別的成員，自然也具有公有或私有的特性。<br>
12.	建構元可視為一種特殊的函數，它在主要角色是幫助建立一個物建設定初值。<br>
13.	建構元的名稱必須與其所屬之類別的類別名稱相同，且不能有傳回值。<br>
14.	建構元有public與private之分。Public可以在程式的任何地方被呼叫，所以新建立的物件均可自動呼叫他。Private則無法在該建構元所在的類別以外的地方被呼叫。<br>
15.	如果建構元省略，C++會自動呼叫預設建構元(預設的建構元是沒有任何引數的建構元)。<br>
16.	每一個物建的「靜態資料成員」有共同的記憶體空間，更改某個物件的「靜態資料成員」，其他物件「靜態資料成員」也隨之更改。<br>
17.	要把變數宣告成「靜態資料成員」，必須在變數之前加上「static」這個修飾子。<br>
18.	「靜態成員函數」可由類別來呼叫，或由類別鎖建立的物件來呼叫。「靜態成員函數」也可在不產生物件的情況下直接以別來呼叫。<br>
19.	「靜態成員函數」的內部無法對類別內的一般變數與函數進行存取的動作，也不能使用this這個關鍵字。<br>






      </div>
      </div>
    </div>
  </body>
</html><?php }} ?>
