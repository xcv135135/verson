<?php /* Smarty version Smarty-3.1.16, created on 2015-03-17 17:37:21
         compiled from "templates\C3_2.tpl" */ ?>
<?php /*%%SmartyHeaderCode:287315507f5d1d55b19-50747895%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '465b775d1cc32db9b7299b0469f7bf509bb536d0' => 
    array (
      0 => 'templates\\C3_2.tpl',
      1 => 1410769489,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '287315507f5d1d55b19-50747895',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5507f5d1d7cc27_51556187',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5507f5d1d7cc27_51556187')) {function content_5507f5d1d7cc27_51556187($_smarty_tpl) {?><html>
  <body>
    <div class="container" id="container">
      <div class="col-xs-12 col-sm-9">

      <div class="jumbotron">
           <p>3.2 運算子的優先順序</p>
下表列出各個運算子優先順序的排列，數字越小的表示優先順序越高:

<table class="MsoTableGrid" border="1" cellspacing="0" cellpadding="0" style="border-collapse:collapse;border:none;mso-border-alt:solid windowtext .5pt;
 mso-yfti-tbllook:1184;mso-padding-alt:0cm 5.4pt 0cm 5.4pt">
 <tbody><tr style="mso-yfti-irow:0;mso-yfti-firstrow:yes">
  <td width="56" valign="top" style="width:42.3pt;border:solid windowtext 1.0pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoNormal"><span style="font-size:14.0pt;font-family:標楷體">優先順序<span lang="EN-US"><o:p></o:p></span></span></p>
  </td>
  <td width="220" valign="top" style="width:165.1pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoNormal"><span style="font-size:14.0pt;font-family:標楷體">運算子<span lang="EN-US"><o:p></o:p></span></span></p>
  </td>
  <td width="138" valign="top" style="width:103.7pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoNormal"><span style="font-size:14.0pt;font-family:標楷體">類別<span lang="EN-US"><o:p></o:p></span></span></p>
  </td>
  <td width="138" valign="top" style="width:103.7pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoNormal"><span style="font-size:14.0pt;font-family:標楷體">結核性<span lang="EN-US"><o:p></o:p></span></span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:1">
  <td width="56" valign="top" style="width:42.3pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoNormal"><span lang="EN-US" style="font-size:14.0pt;font-family:標楷體">1<o:p></o:p></span></p>
  </td>
  <td width="220" valign="top" style="width:165.1pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoNormal"><span lang="EN-US" style="font-size:14.0pt;font-family:標楷體">()<o:p></o:p></span></p>
  </td>
  <td width="138" valign="top" style="width:103.7pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoNormal"><span style="font-size:14.0pt;font-family:標楷體">括號運算子<span lang="EN-US"><o:p></o:p></span></span></p>
  </td>
  <td width="138" valign="top" style="width:103.7pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoNormal"><span style="font-size:14.0pt;font-family:標楷體">由左至右<span lang="EN-US"><o:p></o:p></span></span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:2">
  <td width="56" valign="top" style="width:42.3pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoNormal"><span lang="EN-US" style="font-size:14.0pt;font-family:標楷體">1<o:p></o:p></span></p>
  </td>
  <td width="220" valign="top" style="width:165.1pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoNormal"><span lang="EN-US" style="font-size:14.0pt;font-family:標楷體">[]<o:p></o:p></span></p>
  </td>
  <td width="138" valign="top" style="width:103.7pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoNormal"><span style="font-size:14.0pt;font-family:標楷體">方括號運算子<span lang="EN-US"><o:p></o:p></span></span></p>
  </td>
  <td width="138" valign="top" style="width:103.7pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoNormal"><span style="font-size:14.0pt;font-family:標楷體">由左至右<span lang="EN-US"><o:p></o:p></span></span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:3">
  <td width="56" valign="top" style="width:42.3pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoNormal"><span lang="EN-US" style="font-size:14.0pt;font-family:標楷體">2<o:p></o:p></span></p>
  </td>
  <td width="220" valign="top" style="width:165.1pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoNormal"><span lang="EN-US" style="font-size:14.0pt;font-family:標楷體">!</span><span style="font-size:14.0pt;font-family:標楷體">、<span lang="EN-US">+(</span>正號<span lang="EN-US">)</span>、<span lang="EN-US">-(</span>負號<span lang="EN-US">)<o:p></o:p></span></span></p>
  </td>
  <td width="138" valign="top" style="width:103.7pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoNormal"><span style="font-size:14.0pt;font-family:標楷體">一元運算子<span lang="EN-US"><o:p></o:p></span></span></p>
  </td>
  <td width="138" valign="top" style="width:103.7pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoNormal"><span style="font-size:14.0pt;font-family:標楷體">由右至左<span lang="EN-US"><o:p></o:p></span></span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:4">
  <td width="56" valign="top" style="width:42.3pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoNormal"><span lang="EN-US" style="font-size:14.0pt;font-family:標楷體">2<o:p></o:p></span></p>
  </td>
  <td width="220" valign="top" style="width:165.1pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoNormal"><span lang="EN-US" style="font-size:14.0pt;font-family:標楷體">~<o:p></o:p></span></p>
  </td>
  <td width="138" valign="top" style="width:103.7pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoNormal"><span style="font-size:14.0pt;font-family:標楷體">位元運算子<span lang="EN-US"><o:p></o:p></span></span></p>
  </td>
  <td width="138" valign="top" style="width:103.7pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoNormal"><span style="font-size:14.0pt;font-family:標楷體">由右至左<span lang="EN-US"><o:p></o:p></span></span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:5">
  <td width="56" valign="top" style="width:42.3pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoNormal"><span lang="EN-US" style="font-size:14.0pt;font-family:標楷體">2<o:p></o:p></span></p>
  </td>
  <td width="220" valign="top" style="width:165.1pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoNormal"><span lang="EN-US" style="font-size:14.0pt;font-family:標楷體">++</span><span style="font-size:14.0pt;font-family:標楷體">、<span lang="EN-US">--<o:p></o:p></span></span></p>
  </td>
  <td width="138" valign="top" style="width:103.7pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoNormal"><span style="font-size:14.0pt;font-family:標楷體">遞增與遞減運算子<span lang="EN-US"><o:p></o:p></span></span></p>
  </td>
  <td width="138" valign="top" style="width:103.7pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoNormal"><span style="font-size:14.0pt;font-family:標楷體">由左至右<span lang="EN-US"><o:p></o:p></span></span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:6">
  <td width="56" valign="top" style="width:42.3pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoNormal"><span lang="EN-US" style="font-size:14.0pt;font-family:標楷體">3<o:p></o:p></span></p>
  </td>
  <td width="220" valign="top" style="width:165.1pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoNormal"><span lang="EN-US" style="font-size:14.0pt;font-family:標楷體">*</span><span style="font-size:14.0pt;font-family:標楷體">、<span lang="EN-US">/</span>、<span lang="EN-US">%<o:p></o:p></span></span></p>
  </td>
  <td width="138" valign="top" style="width:103.7pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoNormal"><span style="font-size:14.0pt;font-family:標楷體">算數運算子<span lang="EN-US"><o:p></o:p></span></span></p>
  </td>
  <td width="138" valign="top" style="width:103.7pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoNormal"><span style="font-size:14.0pt;font-family:標楷體">由左至右<span lang="EN-US"><o:p></o:p></span></span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:7">
  <td width="56" valign="top" style="width:42.3pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoNormal"><span lang="EN-US" style="font-size:14.0pt;font-family:標楷體">4<o:p></o:p></span></p>
  </td>
  <td width="220" valign="top" style="width:165.1pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoNormal"><span lang="EN-US" style="font-size:14.0pt;font-family:標楷體">+</span><span style="font-size:14.0pt;font-family:標楷體">、<span lang="EN-US">-<o:p></o:p></span></span></p>
  </td>
  <td width="138" valign="top" style="width:103.7pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoNormal"><span style="font-size:14.0pt;font-family:標楷體">算數運算子<span lang="EN-US"><o:p></o:p></span></span></p>
  </td>
  <td width="138" valign="top" style="width:103.7pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoNormal"><span style="font-size:14.0pt;font-family:標楷體">由左至右<span lang="EN-US"><o:p></o:p></span></span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:8">
  <td width="56" valign="top" style="width:42.3pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoNormal"><span lang="EN-US" style="font-size:14.0pt;font-family:標楷體">5<o:p></o:p></span></p>
  </td>
  <td width="220" valign="top" style="width:165.1pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoNormal"><span lang="EN-US" style="font-size:14.0pt;font-family:標楷體">&lt;&lt;</span><span style="font-size:14.0pt;font-family:標楷體">、<span lang="EN-US">&gt;&gt;<o:p></o:p></span></span></p>
  </td>
  <td width="138" valign="top" style="width:103.7pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoNormal"><span style="font-size:14.0pt;font-family:標楷體">位元左移、又移運算子<span lang="EN-US"><o:p></o:p></span></span></p>
  </td>
  <td width="138" valign="top" style="width:103.7pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoNormal"><span style="font-size:14.0pt;font-family:標楷體">由左至右<span lang="EN-US"><o:p></o:p></span></span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:9">
  <td width="56" valign="top" style="width:42.3pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoNormal"><span lang="EN-US" style="font-size:14.0pt;font-family:標楷體">6<o:p></o:p></span></p>
  </td>
  <td width="220" valign="top" style="width:165.1pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoNormal"><span lang="EN-US" style="font-size:14.0pt;font-family:標楷體">&gt;</span><span style="font-size:14.0pt;font-family:標楷體">、<span lang="EN-US">&gt;=</span>、<span lang="EN-US">&lt;</span>、<span lang="EN-US">&lt;=<o:p></o:p></span></span></p>
  </td>
  <td width="138" valign="top" style="width:103.7pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoNormal"><span style="font-size:14.0pt;font-family:標楷體">關係運算子<span lang="EN-US"><o:p></o:p></span></span></p>
  </td>
  <td width="138" valign="top" style="width:103.7pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoNormal"><span style="font-size:14.0pt;font-family:標楷體">由左至右<span lang="EN-US"><o:p></o:p></span></span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:10">
  <td width="56" valign="top" style="width:42.3pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoNormal"><span lang="EN-US" style="font-size:14.0pt;font-family:標楷體">7<o:p></o:p></span></p>
  </td>
  <td width="220" valign="top" style="width:165.1pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoNormal"><span lang="EN-US" style="font-size:14.0pt;font-family:標楷體">==</span><span style="font-size:14.0pt;font-family:標楷體">、<span lang="EN-US">!=<o:p></o:p></span></span></p>
  </td>
  <td width="138" valign="top" style="width:103.7pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoNormal"><span style="font-size:14.0pt;font-family:標楷體">關係運算子<span lang="EN-US"><o:p></o:p></span></span></p>
  </td>
  <td width="138" valign="top" style="width:103.7pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoNormal"><span style="font-size:14.0pt;font-family:標楷體">由左至右<span lang="EN-US"><o:p></o:p></span></span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:11">
  <td width="56" valign="top" style="width:42.3pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoNormal"><span lang="EN-US" style="font-size:14.0pt;font-family:標楷體">8<o:p></o:p></span></p>
  </td>
  <td width="220" valign="top" style="width:165.1pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoNormal"><span lang="EN-US" style="font-size:14.0pt;font-family:標楷體">&amp;(</span><span style="font-size:14.0pt;font-family:標楷體">位元運算的<span lang="EN-US">AND)<o:p></o:p></span></span></p>
  </td>
  <td width="138" valign="top" style="width:103.7pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoNormal"><span style="font-size:14.0pt;font-family:標楷體">位元邏輯運算子<span lang="EN-US"><o:p></o:p></span></span></p>
  </td>
  <td width="138" valign="top" style="width:103.7pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoNormal"><span style="font-size:14.0pt;font-family:標楷體">由左至右<span lang="EN-US"><o:p></o:p></span></span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:12">
  <td width="56" valign="top" style="width:42.3pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoNormal"><span lang="EN-US" style="font-size:14.0pt;font-family:標楷體">9<o:p></o:p></span></p>
  </td>
  <td width="220" valign="top" style="width:165.1pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoNormal"><span lang="EN-US" style="font-size:14.0pt;font-family:標楷體">^(</span><span style="font-size:14.0pt;font-family:標楷體">位元運算的<span lang="EN-US">XOR)<o:p></o:p></span></span></p>
  </td>
  <td width="138" valign="top" style="width:103.7pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoNormal"><span style="font-size:14.0pt;font-family:標楷體">位元邏輯運算子<span lang="EN-US"><o:p></o:p></span></span></p>
  </td>
  <td width="138" valign="top" style="width:103.7pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoNormal"><span style="font-size:14.0pt;font-family:標楷體">由左至右<span lang="EN-US"><o:p></o:p></span></span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:13">
  <td width="56" valign="top" style="width:42.3pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoNormal"><span lang="EN-US" style="font-size:14.0pt;font-family:標楷體">10<o:p></o:p></span></p>
  </td>
  <td width="220" valign="top" style="width:165.1pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoNormal"><span lang="EN-US" style="font-size:14.0pt;font-family:標楷體">|(</span><span style="font-size:14.0pt;font-family:標楷體">位元運算的<span lang="EN-US">OR)<o:p></o:p></span></span></p>
  </td>
  <td width="138" valign="top" style="width:103.7pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoNormal"><span style="font-size:14.0pt;font-family:標楷體">位元邏輯運算子<span lang="EN-US"><o:p></o:p></span></span></p>
  </td>
  <td width="138" valign="top" style="width:103.7pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoNormal"><span style="font-size:14.0pt;font-family:標楷體">由左至右<span lang="EN-US"><o:p></o:p></span></span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:14">
  <td width="56" valign="top" style="width:42.3pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoNormal"><span lang="EN-US" style="font-size:14.0pt;font-family:標楷體">11<o:p></o:p></span></p>
  </td>
  <td width="220" valign="top" style="width:165.1pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoNormal"><span lang="EN-US" style="font-size:14.0pt;font-family:標楷體">&amp;&amp;<o:p></o:p></span></p>
  </td>
  <td width="138" valign="top" style="width:103.7pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoNormal"><span style="font-size:14.0pt;font-family:標楷體">邏輯運算子<span lang="EN-US"><o:p></o:p></span></span></p>
  </td>
  <td width="138" valign="top" style="width:103.7pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoNormal"><span style="font-size:14.0pt;font-family:標楷體">由左至右<span lang="EN-US"><o:p></o:p></span></span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:15">
  <td width="56" valign="top" style="width:42.3pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoNormal"><span lang="EN-US" style="font-size:14.0pt;font-family:標楷體">12<o:p></o:p></span></p>
  </td>
  <td width="220" valign="top" style="width:165.1pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoNormal"><span lang="EN-US" style="font-size:14.0pt;font-family:標楷體">||<o:p></o:p></span></p>
  </td>
  <td width="138" valign="top" style="width:103.7pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoNormal"><span style="font-size:14.0pt;font-family:標楷體">邏輯運算子<span lang="EN-US"><o:p></o:p></span></span></p>
  </td>
  <td width="138" valign="top" style="width:103.7pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoNormal"><span style="font-size:14.0pt;font-family:標楷體">由左至右<span lang="EN-US"><o:p></o:p></span></span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:16">
  <td width="56" valign="top" style="width:42.3pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoNormal"><span lang="EN-US" style="font-size:14.0pt;font-family:標楷體">13<o:p></o:p></span></p>
  </td>
  <td width="220" valign="top" style="width:165.1pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoNormal"><span lang="EN-US" style="font-size:14.0pt;font-family:標楷體">?:<o:p></o:p></span></p>
  </td>
  <td width="138" valign="top" style="width:103.7pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoNormal"><span style="font-size:14.0pt;font-family:標楷體">條件運算子<span lang="EN-US"><o:p></o:p></span></span></p>
  </td>
  <td width="138" valign="top" style="width:103.7pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoNormal"><span style="font-size:14.0pt;font-family:標楷體">由右至左<span lang="EN-US"><o:p></o:p></span></span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:17;mso-yfti-lastrow:yes">
  <td width="56" valign="top" style="width:42.3pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoNormal"><span lang="EN-US" style="font-size:14.0pt;font-family:標楷體">14<o:p></o:p></span></p>
  </td>
  <td width="220" valign="top" style="width:165.1pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoNormal"><span lang="EN-US" style="font-size:14.0pt;font-family:標楷體">=<o:p></o:p></span></p>
  </td>
  <td width="138" valign="top" style="width:103.7pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoNormal"><span style="font-size:14.0pt;font-family:標楷體">設定運算子<span lang="EN-US"><o:p></o:p></span></span></p>
  </td>
  <td width="138" valign="top" style="width:103.7pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoNormal"><span style="font-size:14.0pt;font-family:標楷體">由右至左<span lang="EN-US"><o:p></o:p></span></span></p>
  </td>
 </tr>
</tbody></table>

上表中的運算子的結合性，結合性可以讓我們了解到運算子與運算元的相對位置及其關係。例如，再使用同一優先順序的運算子時，結合性就顯得非常重要，他決定何者先處理，下面有個例子:
a=b+c*5/4   //結合性可以決定運算子的處理順序優先順序是「*」與「/」高於「+」，而「+」又高於「=」，然而「*」與「/」的優先順序是相同的，到底ｃ該先乘以5再除以4呢?還是5除以4處理完後c再乘以這個結果呢?
<br>
經過結合性的定義後，算數運算子的結合性為「由左至右」，就是在相同的優先順序的運算子中，先由運算子左邊的運算元開始處理，再處理右邊的運算元，所以c會先乘以5再除以4得到的結果加上b後，將整個值設定給a存放。



      </div>
      </div>
    </div>
  </body>
</html><?php }} ?>
