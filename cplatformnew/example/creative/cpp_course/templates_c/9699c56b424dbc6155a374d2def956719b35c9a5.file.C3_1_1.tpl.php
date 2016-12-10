<?php /* Smarty version Smarty-3.1.16, created on 2015-03-17 17:37:21
         compiled from "templates\C3_1_1.tpl" */ ?>
<?php /*%%SmartyHeaderCode:236165507f5d12b2e15-33967344%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9699c56b424dbc6155a374d2def956719b35c9a5' => 
    array (
      0 => 'templates\\C3_1_1.tpl',
      1 => 1410766065,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '236165507f5d12b2e15-33967344',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5507f5d12bab15_38047273',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5507f5d12bab15_38047273')) {function content_5507f5d12bab15_38047273($_smarty_tpl) {?><html>
  <body>
    <div class="container" id="container">
      <div class="col-xs-12 col-sm-9">

      <div class="jumbotron">
           <p> 3.1.1 設定運算子</p>
想讓變數在記憶體終儲存某個値時，可以使用設定運算子(=，assignment operator)，如下表所列:

<table class="MsoTableGrid" border="1" cellspacing="0" cellpadding="0" style="border-collapse:collapse;border:none;mso-border-alt:solid windowtext .5pt;
 mso-yfti-tbllook:1184;mso-padding-alt:0cm 5.4pt 0cm 5.4pt">
 <tbody><tr style="mso-yfti-irow:0;mso-yfti-firstrow:yes">
  <td width="132" valign="top" style="width:99.0pt;border:solid windowtext 1.0pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoNormal"><span style="font-size:14.0pt;font-family:標楷體">設定運算子<span lang="EN-US"><o:p></o:p></span></span></p>
  </td>
  <td width="76" valign="top" style="width:2.0cm;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoNormal"><span style="font-size:14.0pt;font-family:標楷體">意義<span lang="EN-US"><o:p></o:p></span></span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:1;mso-yfti-lastrow:yes">
  <td width="132" valign="top" style="width:99.0pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoNormal"><span lang="EN-US" style="font-size:14.0pt;font-family:標楷體">=<o:p></o:p></span></p>
  </td>
  <td width="76" valign="top" style="width:2.0cm;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoNormal"><span style="font-size:14.0pt;font-family:標楷體">設定<span lang="EN-US"><o:p></o:p></span></span></p>
  </td>
 </tr>
</tbody></table>

等號(=)在C++中並不是「等於」，而是「設定」的意思。例如下面的敘述是將num+1的值運算之後再設定給變數num存放
<br>
num=num+1  //將num+1的值運算之後再設定給變數num存放
<br>
下面的例子是把變數num的值設定成18，因此執行這個敘述時，C++會先處理等號後面的部分num+1(値為19)，再設定給等號前面的變數num，執行後，存放的變數num的值就變成19，如下程式所示:


<div class="alert alert-success">
  //設定運算子「=」 
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
   int num=18;    // 宣告整數變數num,並設值為18
    <br>
   cout << "計算前, num=" << num << endl;	// 印出num的值
    <br>
   num=num+1;     // 將num加1後再設定給num存放
    <br>
   cout << "計算後, num=" << num << endl;	// 印出計算後num的值
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
  計算前, num=18
  <br>
計算後, num=19
<br>
</div>

除此之外，也可以將等號後面的值設定給其他變數，如:
sum = num1+num2;  //將num1加上num2之後再設定給變數sum存放
如此一來，num1與num2的值經過運算後仍然不變，sum會因為「設定」的動作而更改其變數存放的內容。

      </div>
      </div>
    </div>
  </body>
</html><?php }} ?>
