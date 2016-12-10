<?php /* Smarty version Smarty-3.1.16, created on 2014-09-15 11:21:23
         compiled from ".\templates\C3_1_4.tpl" */ ?>
<?php /*%%SmartyHeaderCode:24186541697bf5635c5-01573241%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '25aa091a5fcd1074642d5578d7300160705785db' => 
    array (
      0 => '.\\templates\\C3_1_4.tpl',
      1 => 1410772862,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24186541697bf5635c5-01573241',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_541697bf587ba4_70402417',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_541697bf587ba4_70402417')) {function content_541697bf587ba4_70402417($_smarty_tpl) {?><html>
  <body>
    <div class="container" id="container">
      <div class="col-xs-12 col-sm-9">

      <div class="jumbotron">
           <p>3.1.4 關係運算子與if敘述</p>
數學上有比較的運算，像是大於、等於、小於等等，C++中也提供了這些運算子，這些運算子我們稱之為「關係運算子」（Relational operator）或「比較運算子」（Comparison operator），它們有大於（>）、不小於（>=）、小於（<）、不大於（<=）、等於 （==）以及不等於（!=）。 
<br>   
請看看下面這幾行會顯示哪些數值： 
<div class="alert alert-success">
  cout << "10 > 5\t\t" << (10 > 5) << endl; 
  <br>
cout << "10 >= 5\t\t" << (10 >= 5) << endl; 
<br>
cout << "10 < 5\t\t" << (10 < 5) << endl; 
<br>
cout << "10 <= 5\t\t" << (10 <= 5) << endl; 
<br>
cout << "10 == 5\t\t" << (10 == 5) << endl; 
<br>
cout << "10 != 5\t\t" << (10 != 5) << endl;

</div>
程式的執行會顯示0或1，分別表示false或true，如下所示：
<div class="alert alert-info">
10 > 5&nbsp;&nbsp;&nbsp;&nbsp; 1
<br>
10 >= 5&nbsp;&nbsp;&nbsp;&nbsp;1
<br>
10 < 5&nbsp;&nbsp;&nbsp;&nbsp;0
<br>
10 <= 5&nbsp;&nbsp;&nbsp;&nbsp;0
<br>
10 == 5&nbsp;&nbsp;&nbsp;&nbsp;0
<br>
10 != 5&nbsp;&nbsp;&nbsp;&nbsp;1

</div>

在C++中，所有非零的數值在作為條件式時都被視為true。 
關係運算在使用時有的即使是程式設計老手也可能犯的錯誤，且不容易發現，也就是等於運算子（==），注意它是兩個連續的等號（=）所組成，而不是一個等號，一個等號是設定運算子，這點必須相當注意，例如若有兩個變數x與y要比較是否相等，是寫成x == y，而不是x = y，後者的作用是將y的值指定給x，而不是比較運算。 
<br>
既然談到了條件式的問題，我們來介紹C++中的「條件運算子」（Conditional operator），它的使用方式如下：
<br>
<strong> 條件式 ? 成立傳回值 : 失敗傳回值 </strong>
<br>
條件運算子的傳回值依條件式的結果而定，如果條件式的結果為true，則傳回冒號前的值，若為false，則傳回冒號後的值，下面這個程式可以作個簡單的 示範：
<div class="alert alert-success">
  #include < iostream>
  <br>
using namespace std;
 <br>
 
int main() { 
 <br>
    int score = 0; 
     <br>
 <br>
    cout << "輸入學生分數："; 
     <br>
    cin >> score;  
    <br>
    cout << "該生是否及格？"   << (score >= 60 ? 'Y' : 'N')   << endl;  
         <br>
 <br>
    return 0;
     <br>
} 

</div>

執行結果：
<div class="alert alert-info">
  輸入學生分數：60
  <br>
該生是否及格？Y
</div>

這個程式會依您所輸入的分數來判斷學生成績是否不小於60分，以決定其是否及格，如果是則傳回字元'Y'，否則傳回字元'N'，下面這個程式可以判斷使用者輸入是否為奇數：

<div class="alert alert-success">
  #include < iostream>
  <br>
using namespace std;
<br>
 <br>
int main() { 
<br>
    int input = 0; 
    <br>
<br>
    cout << "輸入整數："; 
    <br>
    cin >> input; 
    <br>
    cout << "該數為奇數？"  << (input%2 ? 'Y' : 'N')  << endl;
         <br>
<br>
    return 0;
    <br>
}

</div>


執行結果： 

<div class="alert alert-info">
  輸入整數：3 
  <br>
該數為奇數？Y
</div>
在C++中非零數值都可以表示true，而0表示false，所以當您輸入的數為奇數時，就不能被2整除，所以餘數一定不是0，在條件式中表示true， 因而傳回字元'Y'，若數值為偶數，則2整除，所以餘數為0，在條件式中表示false，所以傳回字元'N'。
      </div>
      </div>
    </div>
  </body>
</html>
<?php }} ?>
