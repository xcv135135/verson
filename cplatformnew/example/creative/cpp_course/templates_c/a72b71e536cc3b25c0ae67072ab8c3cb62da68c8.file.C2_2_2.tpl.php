<?php /* Smarty version Smarty-3.1.16, created on 2014-09-15 10:55:52
         compiled from ".\templates\C2_2_2.tpl" */ ?>
<?php /*%%SmartyHeaderCode:261354167dc70568b7-07930038%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a72b71e536cc3b25c0ae67072ab8c3cb62da68c8' => 
    array (
      0 => '.\\templates\\C2_2_2.tpl',
      1 => 1410771347,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '261354167dc70568b7-07930038',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_54167dc707bda3_37180413',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54167dc707bda3_37180413')) {function content_54167dc707bda3_37180413($_smarty_tpl) {?><html>
  <body>
    <div class="container" id="container">
      <div class="col-xs-12 col-sm-9">

      <div class="jumbotron">
           <p>2.2.2 字元型態</p>

           字元型態只佔有1個位元組(8 bits)，可以用來儲存英文字母及ASCII碼等字元。電腦處理字元型態時，是把這些字元當成不同的整數來看待，嚴格來說，字元型態也算是一種整數型態。舉例來說，常使用的ASCII碼中，小寫h是以104為代表，於下面的範例裡可以看到，宣告一個字元型態的變數ch後，並將變數ch的值設為’h’時，在電腦中實際儲存値為104。在程式中分別以字元及十進位整數型態來列印’h’這個字元。
  <div class="alert alert-success">
    //字元型態的列印
    <br>
#include < iostream>
<br>
#include < cstdlib>
<br>
using namespace std;
<br>
int main(void)
<br>
{
  <br>
   char ch='h';     // 定義一個名為ch的字元，其值為h
   <br>
   int i=ch;
   <br>
  <strong>
    cout << "ch=" << ch << endl;             // 印出ch的值
   <br>
   cout << "The ASCII code is " << i << endl;   // 印出ASCII值
   </strong>
   <br>
   system("pause");
   <br>
   return 0;
   <br>
}
<br>
  </div>
  輸出結果為
  <div class="alert alert-info">
    ch=h <br>
The ASCII code is 104
<br>

  </div>
字元型態和整數型態的宣告方式相同，但設定初値的部分則有些不同。將字元常數設値給字元變數時，字元常數要以兩個單引號(')包圍，如ch='h'。
附帶一提，字串常數是以一對雙引號(")包圍，用以和字元常數區別，例如:"sunday"即為一字串常數。當然"h"可看成只包含一個字元的字串，但字串 "h" 和 'h' 所代表的意義並不相同，C++裡處理字元和字串的方式也不一樣。
使用ASCII碼時，字元變數的值與數字本身是不同的，舉例來說，於程式中宣告一個字元變數ch其値為'8'(8在這裡是一個字元)，它的ASCII碼為56，而不是整數8。
<div class="alert alert-success">
  //字元的列印
  <br>
#include < iostream>
<br>
#include < cstdlib>
<br>
using namespace std;
<br>
int main(void)
<br>
{
  <br>
   char ch='8';     // 將'8'設給字元變數ch
   <br>
   int i=ch;
   <br>
   cout << "ch=" << ch << endl;            // 印出ch的值
   <br>
   cout << "The ASCII code is " << i << endl;
   <br>
   system("pause");
   <br>
   return 0;
   <br>
}
<br>
</div>
OUTPUT:
<div class="alert alert-info">
  ch=8
  <br>
The ASCII code is 56
<br>
</div>
由於電腦儲存資料都是0與1組成的，因此字元在電腦裡儲存時，會有一套編碼方式，將不同的字元分別給予其値，使用時只要經過轉換就能正確的表示這個字元。

此外，對於某些無法顯示或是不能用單一個符號表示的字元，可以利用跳脫序列(escape sequence)的方式為字元變數設值，也就是說，在特定的英文字母前，加上反斜線「\」，即為跳脫序列；其中，反斜線「\」稱為跳脫字元(escape character)。
<br>
下表為常用的跳脫序列:
<br>
<table class="MsoTableGrid" border="1" cellspacing="0" cellpadding="0" width="586" style="width:439.2pt;border-collapse:collapse;border:none;mso-border-alt:solid windowtext .5pt;
 mso-yfti-tbllook:1184;mso-padding-alt:0cm 5.4pt 0cm 5.4pt">
 <tbody><tr style="mso-yfti-irow:0;mso-yfti-firstrow:yes">
  <td valign="top" style="border:solid windowtext 1.0pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoNormal"><span style="font-size:14.0pt;font-family:標楷體">跳脫序列<span lang="EN-US"><o:p></o:p></span></span></p>
  </td>
  <td valign="top" style="border:solid windowtext 1.0pt;border-left:none;
  mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoNormal"><span style="font-size:14.0pt;font-family:標楷體">所代表的意義<span lang="EN-US"><o:p></o:p></span></span></p>
  </td>
  <td width="150" valign="top" style="width:112.3pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoNormal"><span lang="EN-US" style="font-size:14.0pt;font-family:標楷體">ASCII
  </span><span style="font-size:14.0pt;font-family:標楷體">十進位值<span lang="EN-US"><o:p></o:p></span></span></p>
  </td>
  <td width="170" valign="top" style="width:127.6pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoNormal"><span lang="EN-US" style="font-size:14.0pt;font-family:標楷體">ASCII
  </span><span style="font-size:14.0pt;font-family:標楷體">十六進位值<span lang="EN-US"><o:p></o:p></span></span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:1">
  <td valign="top" style="border:solid windowtext 1.0pt;border-top:none;
  mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoNormal"><span lang="EN-US" style="font-size:14.0pt;font-family:標楷體">\a<o:p></o:p></span></p>
  </td>
  <td valign="top" style="border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoNormal"><span style="font-size:14.0pt;font-family:標楷體">警告音<span lang="EN-US">(Alert)<o:p></o:p></span></span></p>
  </td>
  <td width="150" valign="top" style="width:112.3pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoNormal"><span lang="EN-US" style="font-size:14.0pt;font-family:標楷體">7<o:p></o:p></span></p>
  </td>
  <td width="170" valign="top" style="width:127.6pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoNormal"><span lang="EN-US" style="font-size:14.0pt;font-family:標楷體">0x7<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:2">
  <td valign="top" style="border:solid windowtext 1.0pt;border-top:none;
  mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoNormal"><span lang="EN-US" style="font-size:14.0pt;font-family:標楷體">\b<o:p></o:p></span></p>
  </td>
  <td valign="top" style="border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoNormal"><span style="font-size:14.0pt;font-family:標楷體">倒退一格<span lang="EN-US">(Backspace)<o:p></o:p></span></span></p>
  </td>
  <td width="150" valign="top" style="width:112.3pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoNormal"><span lang="EN-US" style="font-size:14.0pt;font-family:標楷體">8<o:p></o:p></span></p>
  </td>
  <td width="170" valign="top" style="width:127.6pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoNormal"><span lang="EN-US" style="font-size:14.0pt;font-family:標楷體">0x8<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:3">
  <td valign="top" style="border:solid windowtext 1.0pt;border-top:none;
  mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoNormal"><span lang="EN-US" style="font-size:14.0pt;font-family:標楷體">\n<o:p></o:p></span></p>
  </td>
  <td valign="top" style="border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoNormal"><span style="font-size:14.0pt;font-family:標楷體">換行<span lang="EN-US">(New line)<o:p></o:p></span></span></p>
  </td>
  <td width="150" valign="top" style="width:112.3pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoNormal"><span lang="EN-US" style="font-size:14.0pt;font-family:標楷體">10<o:p></o:p></span></p>
  </td>
  <td width="170" valign="top" style="width:127.6pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoNormal"><span lang="EN-US" style="font-size:14.0pt;font-family:標楷體">0xA<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:4">
  <td valign="top" style="border:solid windowtext 1.0pt;border-top:none;
  mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoNormal"><span lang="EN-US" style="font-size:14.0pt;font-family:標楷體">\r<o:p></o:p></span></p>
  </td>
  <td valign="top" style="border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoNormal"><span style="font-size:14.0pt;font-family:標楷體">歸位<span lang="EN-US">(Carriage return)<o:p></o:p></span></span></p>
  </td>
  <td width="150" valign="top" style="width:112.3pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoNormal"><span lang="EN-US" style="font-size:14.0pt;font-family:標楷體">13<o:p></o:p></span></p>
  </td>
  <td width="170" valign="top" style="width:127.6pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoNormal"><span lang="EN-US" style="font-size:14.0pt;font-family:標楷體">0xD<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:5">
  <td valign="top" style="border:solid windowtext 1.0pt;border-top:none;
  mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoNormal"><span lang="EN-US" style="font-size:14.0pt;font-family:標楷體">\t<o:p></o:p></span></p>
  </td>
  <td valign="top" style="border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoNormal"><span style="font-size:14.0pt;font-family:標楷體">跳格<span lang="EN-US">(Tab)<o:p></o:p></span></span></p>
  </td>
  <td width="150" valign="top" style="width:112.3pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoNormal"><span lang="EN-US" style="font-size:14.0pt;font-family:標楷體">9<o:p></o:p></span></p>
  </td>
  <td width="170" valign="top" style="width:127.6pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoNormal"><span lang="EN-US" style="font-size:14.0pt;font-family:標楷體">0x9<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:6">
  <td valign="top" style="border:solid windowtext 1.0pt;border-top:none;
  mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoNormal"><span lang="EN-US" style="font-size:14.0pt;font-family:標楷體">\0<o:p></o:p></span></p>
  </td>
  <td valign="top" style="border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoNormal"><span style="font-size:14.0pt;font-family:標楷體">字串結束字元<span lang="EN-US">(Null character)<o:p></o:p></span></span></p>
  </td>
  <td width="150" valign="top" style="width:112.3pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoNormal"><span lang="EN-US" style="font-size:14.0pt;font-family:標楷體">0<o:p></o:p></span></p>
  </td>
  <td width="170" valign="top" style="width:127.6pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoNormal"><span lang="EN-US" style="font-size:14.0pt;font-family:標楷體">0x0<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:7">
  <td valign="top" style="border:solid windowtext 1.0pt;border-top:none;
  mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoNormal"><span lang="EN-US" style="font-size:14.0pt;font-family:標楷體">\\<o:p></o:p></span></p>
  </td>
  <td valign="top" style="border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoNormal"><span style="font-size:14.0pt;font-family:標楷體">反斜線<span lang="EN-US">(Backslash)<o:p></o:p></span></span></p>
  </td>
  <td width="150" valign="top" style="width:112.3pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoNormal"><span lang="EN-US" style="font-size:14.0pt;font-family:標楷體">92<o:p></o:p></span></p>
  </td>
  <td width="170" valign="top" style="width:127.6pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoNormal"><span lang="EN-US" style="font-size:14.0pt;font-family:標楷體">0x5C<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:8">
  <td valign="top" style="border:solid windowtext 1.0pt;border-top:none;
  mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoNormal"><span lang="EN-US" style="font-size:14.0pt;font-family:標楷體">\’<o:p></o:p></span></p>
  </td>
  <td valign="top" style="border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoNormal"><span style="font-size:14.0pt;font-family:標楷體">單引號<span lang="EN-US">(Single quote)<o:p></o:p></span></span></p>
  </td>
  <td width="150" valign="top" style="width:112.3pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoNormal"><span lang="EN-US" style="font-size:14.0pt;font-family:標楷體">39<o:p></o:p></span></p>
  </td>
  <td width="170" valign="top" style="width:127.6pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoNormal"><span lang="EN-US" style="font-size:14.0pt;font-family:標楷體">0x27<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:9;mso-yfti-lastrow:yes">
  <td valign="top" style="border:solid windowtext 1.0pt;border-top:none;
  mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoNormal"><span lang="EN-US" style="font-size:14.0pt;font-family:標楷體">\”<o:p></o:p></span></p>
  </td>
  <td valign="top" style="border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoNormal"><span style="font-size:14.0pt;font-family:標楷體">雙引號<span lang="EN-US">(Double quote)<o:p></o:p></span></span></p>
  </td>
  <td width="150" valign="top" style="width:112.3pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoNormal"><span lang="EN-US" style="font-size:14.0pt;font-family:標楷體">34<o:p></o:p></span></p>
  </td>
  <td width="170" valign="top" style="width:127.6pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoNormal"><span lang="EN-US" style="font-size:14.0pt;font-family:標楷體">0x22<o:p></o:p></span></p>
  </td>
 </tr>
</tbody></table>

<br>

值得注意的是，程式設計師可以彈性地使用跳脫序列的型式，自由的選擇要用數值或是符號式(如\t)的跳脫序列。若是以可攜性的角度來看，最好還是使用符號式的跳脫字元，因為不同的作業系統有不同的編碼系統。
<br>
舉個例子，若是想印出 \Live and learn!\，由於反斜線’\’在C++中為控制字元，在程式中直接使用會產生錯誤，此時即可宣告字元變數ch，並設值為’\\’，再將字元變數列印，撰寫如下:
<br>
<div class="alert alert-success">
  //跳脫字元的列印'
  <br>
#include < iostream>
<br>
#include < cstdlib>
<br>
using namespace std;
<br>
int main(void)
<br>
{
  <br>
   char ch='\\';
   <br>
   cout << ch << "Live and learn!" << ch << endl;   // 印出字串
   <br>
   system("pause");
   <br>
   return 0;
   <br>
}
<br>
</div>
OUTPUT:
<div class="alert alert-info">
  \Live and learn!\
</div>
也可以不用宣告字元變數就可以列印跳脫字元。


           


      </div>
      </div>
    </div>
  </body>
</html><?php }} ?>
