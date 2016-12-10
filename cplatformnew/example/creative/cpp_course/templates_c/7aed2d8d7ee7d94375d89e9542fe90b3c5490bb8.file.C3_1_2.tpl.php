<?php /* Smarty version Smarty-3.1.16, created on 2015-03-17 17:37:21
         compiled from "templates\C3_1_2.tpl" */ ?>
<?php /*%%SmartyHeaderCode:305855507f5d13cc258-01394513%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7aed2d8d7ee7d94375d89e9542fe90b3c5490bb8' => 
    array (
      0 => 'templates\\C3_1_2.tpl',
      1 => 1410766290,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '305855507f5d13cc258-01394513',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5507f5d13f71e7_23750265',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5507f5d13f71e7_23750265')) {function content_5507f5d13f71e7_23750265($_smarty_tpl) {?><html>
  <body>
    <div class="container" id="container">
      <div class="col-xs-12 col-sm-9">

      <div class="jumbotron">
           <p> 3.1.2 一元運算子</p>
一元運算子(unary operator)，它只需要一個運算元。下面敘述均是一元運算子與單一運算元所組成的:
<br>
+63;   //表示正63
<br>
~b;    //表示取b的1的補述
<br>
a=-b;  //表示負b的值設定給變數a存放
<br>
!a;    //a的NOT運算，若是a為0，則!a為1，若a不為0，則!a為0
<br>
下表列出一元運算子成員:
<table class="MsoTableGrid" border="1" cellspacing="0" cellpadding="0" style="border-collapse:collapse;border:none;mso-border-alt:solid windowtext .5pt;
 mso-yfti-tbllook:1184;mso-padding-alt:0cm 5.4pt 0cm 5.4pt">
 <tbody><tr style="mso-yfti-irow:0;mso-yfti-firstrow:yes">
  <td width="277" valign="top" style="width:207.4pt;border:solid windowtext 1.0pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoNormal"><span style="font-size:14.0pt;font-family:標楷體">一元運算子<span lang="EN-US"><o:p></o:p></span></span></p>
  </td>
  <td width="277" valign="top" style="width:207.4pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoNormal"><span style="font-size:14.0pt;font-family:標楷體">意義<span lang="EN-US"><o:p></o:p></span></span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:1">
  <td width="277" valign="top" style="width:207.4pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoNormal"><span lang="EN-US" style="font-size:14.0pt;font-family:標楷體">+<o:p></o:p></span></p>
  </td>
  <td width="277" valign="top" style="width:207.4pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoNormal"><span style="font-size:14.0pt;font-family:標楷體">正號<span lang="EN-US"><o:p></o:p></span></span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:2">
  <td width="277" valign="top" style="width:207.4pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoNormal"><span lang="EN-US" style="font-size:14.0pt;font-family:標楷體">-<o:p></o:p></span></p>
  </td>
  <td width="277" valign="top" style="width:207.4pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoNormal"><span style="font-size:14.0pt;font-family:標楷體">負號<span lang="EN-US"><o:p></o:p></span></span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:3">
  <td width="277" valign="top" style="width:207.4pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoNormal"><span lang="EN-US" style="font-size:14.0pt;font-family:標楷體">!<o:p></o:p></span></p>
  </td>
  <td width="277" valign="top" style="width:207.4pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoNormal"><span lang="EN-US" style="font-size:14.0pt;font-family:標楷體">NOT</span><span style="font-size:14.0pt;font-family:標楷體">，否<span lang="EN-US"><o:p></o:p></span></span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:4;mso-yfti-lastrow:yes">
  <td width="277" valign="top" style="width:207.4pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoNormal"><span lang="EN-US" style="font-size:14.0pt;font-family:標楷體">~<o:p></o:p></span></p>
  </td>
  <td width="277" valign="top" style="width:207.4pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoNormal"><span style="font-size:14.0pt;font-family:標楷體">取<span lang="EN-US">1</span>的補數<span lang="EN-US"><o:p></o:p></span></span></p>
  </td>
 </tr>
</tbody></table>


下面程式裡宣告short型態的變數n及bool型態的變數b，將這兩個變數分別經過「~」與「!」運算後，所產生的運算結果列印到螢幕上:

<div class="alert alert-success">
  // 一元運算子「~」與「!」
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
   short n=12;    	               // 宣告short變數n,並設為12
   <br>
   bool b=false;     	           // 宣告bool變數b,並設為false
   <br>
   cout << "n=" << n << ",~n=" << ~n << endl;  // 印出n與~n的值
   <br>
   cout << "b=" << b << ",!b=" << !b << endl;  // 印出b與!b的值
   <br>
   system("pause");
   <br>
   return 0;
   <br>
}
</div>
OUTPUT:
<div class="alert alert-info">
  n=12,~n=-13
  <br>
b=0,!b=1

</div>
程式第7行宣告完初值後於第9行印出來，而n的值為12，其二進位值為0000 0000 0000 1100，最高位元，0代表正數，1為負數，經過~運算後，會變成1111 1111 1111 1111 0011，即十進位中的-13。


      </div>
      </div>
    </div>
  </body>
</html><?php }} ?>
