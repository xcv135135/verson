<html>
  <body>
    <div class="container" id="container">
      <div class="col-xs-12 col-sm-9">

      <div class="jumbotron">
           <p>3.1.6 算數與設定運算子的結合</p>
C++還提供簡潔的方式，將算數運算子和設定運算子結合，成為新的運算子，下表列出相關的運算子:

<table class="MsoTableGrid" border="1" cellspacing="0" cellpadding="0" style="border-collapse:collapse;border:none;mso-border-alt:solid windowtext .5pt;
 mso-yfti-tbllook:1184;mso-padding-alt:0cm 5.4pt 0cm 5.4pt">
 <tbody><tr style="mso-yfti-irow:0;mso-yfti-firstrow:yes">
  <td width="75" valign="top" style="width:56.45pt;border:solid windowtext 1.0pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoNormal"><span style="font-size:14.0pt;font-family:標楷體">運算子<span lang="EN-US"><o:p></o:p></span></span></p>
  </td>
  <td width="104" valign="top" style="width:78.0pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoNormal"><span style="font-size:14.0pt;font-family:標楷體">範例用法<span lang="EN-US"><o:p></o:p></span></span></p>
  </td>
  <td width="198" valign="top" style="width:148.8pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoNormal"><span style="font-size:14.0pt;font-family:標楷體">說明<span lang="EN-US"><o:p></o:p></span></span></p>
  </td>
  <td width="85" valign="top" style="width:63.8pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoNormal"><span style="font-size:14.0pt;font-family:標楷體">意義<span lang="EN-US"><o:p></o:p></span></span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:1">
  <td width="75" valign="top" style="width:56.45pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoNormal"><span lang="EN-US" style="font-size:14.0pt;font-family:標楷體">+=<o:p></o:p></span></p>
  </td>
  <td width="104" valign="top" style="width:78.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoNormal"><span lang="EN-US" style="font-size:14.0pt;font-family:標楷體">a+=b<o:p></o:p></span></p>
  </td>
  <td width="198" valign="top" style="width:148.8pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoNormal"><span class="SpellE"><span lang="EN-US" style="font-size:14.0pt;
  font-family:標楷體">a+b</span></span><span style="font-size:14.0pt;font-family:
  標楷體">的值存放到<span lang="EN-US">a</span>中<span lang="EN-US"><o:p></o:p></span></span></p>
  </td>
  <td width="85" valign="top" style="width:63.8pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoNormal"><span lang="EN-US" style="font-size:14.0pt;font-family:標楷體">a=<span class="SpellE">a+b</span><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:2">
  <td width="75" valign="top" style="width:56.45pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoNormal"><span lang="EN-US" style="font-size:14.0pt;font-family:標楷體">-=<o:p></o:p></span></p>
  </td>
  <td width="104" valign="top" style="width:78.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoNormal"><span lang="EN-US" style="font-size:14.0pt;font-family:標楷體">a-=b<o:p></o:p></span></p>
  </td>
  <td width="198" valign="top" style="width:148.8pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoNormal"><span lang="EN-US" style="font-size:14.0pt;font-family:標楷體">a-b</span><span class="GramE"><span style="font-size:14.0pt;font-family:標楷體">的值放到</span></span><span lang="EN-US" style="font-size:14.0pt;font-family:標楷體">a</span><span style="font-size:14.0pt;font-family:標楷體">中<span lang="EN-US"><o:p></o:p></span></span></p>
  </td>
  <td width="85" valign="top" style="width:63.8pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoNormal"><span lang="EN-US" style="font-size:14.0pt;font-family:標楷體">a=a-b<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:3">
  <td width="75" valign="top" style="width:56.45pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoNormal"><span lang="EN-US" style="font-size:14.0pt;font-family:標楷體">*=<o:p></o:p></span></p>
  </td>
  <td width="104" valign="top" style="width:78.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoNormal"><span lang="EN-US" style="font-size:14.0pt;font-family:標楷體">a*=b<o:p></o:p></span></p>
  </td>
  <td width="198" valign="top" style="width:148.8pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoNormal"><span lang="EN-US" style="font-size:14.0pt;font-family:標楷體">a*b</span><span class="GramE"><span style="font-size:14.0pt;font-family:標楷體">的值放到</span></span><span lang="EN-US" style="font-size:14.0pt;font-family:標楷體">a</span><span style="font-size:14.0pt;font-family:標楷體">中<span lang="EN-US"><o:p></o:p></span></span></p>
  </td>
  <td width="85" valign="top" style="width:63.8pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoNormal"><span lang="EN-US" style="font-size:14.0pt;font-family:標楷體">a=a*b<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:4">
  <td width="75" valign="top" style="width:56.45pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoNormal"><span lang="EN-US" style="font-size:14.0pt;font-family:標楷體">/=<o:p></o:p></span></p>
  </td>
  <td width="104" valign="top" style="width:78.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoNormal"><span lang="EN-US" style="font-size:14.0pt;font-family:標楷體">a/=b<o:p></o:p></span></p>
  </td>
  <td width="198" valign="top" style="width:148.8pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoNormal"><span lang="EN-US" style="font-size:14.0pt;font-family:標楷體">a/b</span><span class="GramE"><span style="font-size:14.0pt;font-family:標楷體">的值放到</span></span><span lang="EN-US" style="font-size:14.0pt;font-family:標楷體">a</span><span style="font-size:14.0pt;font-family:標楷體">中<span lang="EN-US"><o:p></o:p></span></span></p>
  </td>
  <td width="85" valign="top" style="width:63.8pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoNormal"><span lang="EN-US" style="font-size:14.0pt;font-family:標楷體">a=a/b<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:5;mso-yfti-lastrow:yes">
  <td width="75" valign="top" style="width:56.45pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoNormal"><span lang="EN-US" style="font-size:14.0pt;font-family:標楷體">%=<o:p></o:p></span></p>
  </td>
  <td width="104" valign="top" style="width:78.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoNormal"><span lang="EN-US" style="font-size:14.0pt;font-family:標楷體">a%=b<o:p></o:p></span></p>
  </td>
  <td width="198" valign="top" style="width:148.8pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoNormal"><span class="SpellE"><span lang="EN-US" style="font-size:14.0pt;
  font-family:標楷體">a%b</span></span><span class="GramE"><span style="font-size:
  14.0pt;font-family:標楷體">的值放到</span></span><span lang="EN-US" style="font-size:
  14.0pt;font-family:標楷體">a</span><span style="font-size:14.0pt;font-family:
  標楷體">中<span lang="EN-US"><o:p></o:p></span></span></p>
  </td>
  <td width="85" valign="top" style="width:63.8pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoNormal"><span lang="EN-US" style="font-size:14.0pt;font-family:標楷體">a=<span class="SpellE">a%b</span><o:p></o:p></span></p>
  </td>
 </tr>
</tbody></table>

下面提供一個範例:
<div class="alert alert-success">
//簡潔運算式
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
   int a=100,b=15;
   <br>
   cout << "a=" << a << ", b=" << b << endl;
   <br>
   a-=b;                          // 計算a=a-b的值
   <br>
   cout << "after a-=b, a=" << a << ", b=" << b << endl;
   <br>
   system("pause");
   <br>
   return 0;
   <br>
}

</div>

OUTPUT:

<div class="alert alert-info">
  a=100, b=15
  <br>
after a-=b, a=85, b=15
</div>
除了前面提到的，將算數運算子和設定運算子結合之外，還可以將遞增、遞減運算子應用在簡潔的運算式中。
<table class="MsoTableGrid" border="1" cellspacing="0" cellpadding="0" width="576" style="width:432.1pt;border-collapse:collapse;border:none;mso-border-alt:solid windowtext .5pt;
 mso-yfti-tbllook:1184;mso-padding-alt:0cm 5.4pt 0cm 5.4pt">
 <tbody><tr style="mso-yfti-irow:0;mso-yfti-firstrow:yes">
  <td width="66" valign="top" style="width:49.4pt;border:solid windowtext 1.0pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoNormal"><span style="font-size:14.0pt;font-family:標楷體">運算子<span lang="EN-US"><o:p></o:p></span></span></p>
  </td>
  <td width="61" valign="top" style="width:45.8pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoNormal"><span style="font-size:14.0pt;font-family:標楷體">範例<span lang="EN-US"><o:p></o:p></span></span></p>
  </td>
  <td width="90" valign="top" style="width:67.6pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoNormal"><span style="font-size:14.0pt;font-family:標楷體">執行前<span lang="EN-US"><o:p></o:p></span></span></p>
  </td>
  <td width="217" valign="top" style="width:163.0pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoNormal"><span style="font-size:14.0pt;font-family:標楷體">說明<span lang="EN-US"><o:p></o:p></span></span></p>
  </td>
  <td width="76" valign="top" style="width:2.0cm;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoNormal"><span style="font-size:14.0pt;font-family:標楷體">執行後<span lang="EN-US">a<o:p></o:p></span></span></p>
  </td>
  <td width="66" valign="top" style="width:49.6pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoNormal"><span style="font-size:14.0pt;font-family:標楷體">執行後<span lang="EN-US">b<o:p></o:p></span></span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:1">
  <td width="66" valign="top" style="width:49.4pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoNormal"><span lang="EN-US" style="font-size:14.0pt;font-family:標楷體">b++<o:p></o:p></span></p>
  </td>
  <td width="61" valign="top" style="width:45.8pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoNormal"><span lang="EN-US" style="font-size:14.0pt;font-family:標楷體">a*=b++<o:p></o:p></span></p>
  </td>
  <td width="90" valign="top" style="width:67.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoNormal"><span lang="EN-US" style="font-size:14.0pt;font-family:標楷體">a=12,b=4<o:p></o:p></span></p>
  </td>
  <td width="217" valign="top" style="width:163.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoNormal"><span lang="EN-US" style="font-size:14.0pt;font-family:標楷體">a*b</span><span style="font-size:14.0pt;font-family:標楷體">的值存放到<span lang="EN-US">a</span>後，<span lang="EN-US">b</span>加<span lang="EN-US">1<o:p></o:p></span></span></p>
  </td>
  <td width="76" valign="top" style="width:2.0cm;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoNormal"><span lang="EN-US" style="font-size:14.0pt;font-family:標楷體">48<o:p></o:p></span></p>
  </td>
  <td width="66" valign="top" style="width:49.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoNormal"><span lang="EN-US" style="font-size:14.0pt;font-family:標楷體">5<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:2">
  <td width="66" valign="top" style="width:49.4pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoNormal"><span lang="EN-US" style="font-size:14.0pt;font-family:標楷體">++b<o:p></o:p></span></p>
  </td>
  <td width="61" valign="top" style="width:45.8pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoNormal"><span lang="EN-US" style="font-size:14.0pt;font-family:標楷體">a*=++b<o:p></o:p></span></p>
  </td>
  <td width="90" valign="top" style="width:67.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoNormal"><span lang="EN-US" style="font-size:14.0pt;font-family:標楷體">a=12,b=4<o:p></o:p></span></p>
  </td>
  <td width="217" valign="top" style="width:163.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoNormal"><span lang="EN-US" style="font-size:14.0pt;font-family:標楷體">b</span><span style="font-size:14.0pt;font-family:標楷體">加<span lang="EN-US">1</span>後，再將<span lang="EN-US">a*b</span>的值存放到<span lang="EN-US">a<o:p></o:p></span></span></p>
  </td>
  <td width="76" valign="top" style="width:2.0cm;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoNormal"><span lang="EN-US" style="font-size:14.0pt;font-family:標楷體">60<o:p></o:p></span></p>
  </td>
  <td width="66" valign="top" style="width:49.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoNormal"><span lang="EN-US" style="font-size:14.0pt;font-family:標楷體">5<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:3">
  <td width="66" valign="top" style="width:49.4pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoNormal"><span lang="EN-US" style="font-size:14.0pt;font-family:標楷體">b--<o:p></o:p></span></p>
  </td>
  <td width="61" valign="top" style="width:45.8pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoNormal"><span lang="EN-US" style="font-size:14.0pt;font-family:標楷體">a*=b--<o:p></o:p></span></p>
  </td>
  <td width="90" valign="top" style="width:67.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoNormal"><span lang="EN-US" style="font-size:14.0pt;font-family:標楷體">a=12,b=4<o:p></o:p></span></p>
  </td>
  <td width="217" valign="top" style="width:163.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoNormal"><span lang="EN-US" style="font-size:14.0pt;font-family:標楷體">a*b</span><span class="GramE"><span style="font-size:14.0pt;font-family:標楷體">的值放到</span></span><span lang="EN-US" style="font-size:14.0pt;font-family:標楷體">a</span><span style="font-size:14.0pt;font-family:標楷體">後，<span lang="EN-US">b</span>減<span lang="EN-US">1<o:p></o:p></span></span></p>
  </td>
  <td width="76" valign="top" style="width:2.0cm;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoNormal"><span lang="EN-US" style="font-size:14.0pt;font-family:標楷體">48<o:p></o:p></span></p>
  </td>
  <td width="66" valign="top" style="width:49.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoNormal"><span lang="EN-US" style="font-size:14.0pt;font-family:標楷體">3<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:4;mso-yfti-lastrow:yes">
  <td width="66" valign="top" style="width:49.4pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoNormal"><span lang="EN-US" style="font-size:14.0pt;font-family:標楷體">b--<o:p></o:p></span></p>
  </td>
  <td width="61" valign="top" style="width:45.8pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoNormal"><span lang="EN-US" style="font-size:14.0pt;font-family:標楷體">a*=--b<o:p></o:p></span></p>
  </td>
  <td width="90" valign="top" style="width:67.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoNormal"><span lang="EN-US" style="font-size:14.0pt;font-family:標楷體">a=12,b=4<o:p></o:p></span></p>
  </td>
  <td width="217" valign="top" style="width:163.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoNormal"><span lang="EN-US" style="font-size:14.0pt;font-family:標楷體">b</span><span style="font-size:14.0pt;font-family:標楷體">減<span lang="EN-US">1</span>後，再將<span lang="EN-US">a*b</span>的值存放到<span lang="EN-US">a<o:p></o:p></span></span></p>
  </td>
  <td width="76" valign="top" style="width:2.0cm;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoNormal"><span lang="EN-US" style="font-size:14.0pt;font-family:標楷體">36<o:p></o:p></span></p>
  </td>
  <td width="66" valign="top" style="width:49.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoNormal"><span lang="EN-US" style="font-size:14.0pt;font-family:標楷體">3<o:p></o:p></span></p>
  </td>
 </tr>
</tbody></table>

      </div>
      </div>
    </div>
  </body>
</html>