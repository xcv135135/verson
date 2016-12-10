<?php /* Smarty version Smarty-3.1.16, created on 2014-09-16 09:57:26
         compiled from ".\templates\C4_5.tpl" */ ?>
<?php /*%%SmartyHeaderCode:181975417ecc9a50ef1-55778746%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0ad566807e3f739b54899747378153eb7a4a14b5' => 
    array (
      0 => '.\\templates\\C4_5.tpl',
      1 => 1410854242,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '181975417ecc9a50ef1-55778746',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5417ecc9a78f14_07229537',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5417ecc9a78f14_07229537')) {function content_5417ecc9a78f14_07229537($_smarty_tpl) {?><html>
  <body>
    <div class="container" id="container">
      <div class="col-xs-12 col-sm-9">

      <div class="jumbotron">
           <p>4.5 多重選擇的switch敘述</p>
要在許多選擇條件中，找到並執行其中一個符合的判斷條件的敘述時，除了可以使用多個if-else來達到之外，還可以使用另一種更方便的多重選擇 switch敘述。
<br>
switch敘述的格式如下:
<br>
<img src="./images/C4_5@p1.png" alt="swithc流程圖">
<br>
需要注意的是在switch敘述裡的選擇值只能是<span style="color:red">字元或是整數常數</span>如果沒有符合的數值或字元，則會執行default後的敘述句，default不一定需要，您可以省去這個部份。
<br>
switch敘述執行的流程:
<br>
1.	switch敘述先計算括號中運算式的運算結果。
<br>
2.	根據運算式的值，檢查是否符合執行case後面的選項值。如果某個case的選擇值符合運算式的結果，就會執行該case所包含的敘述，直到執行至break敘述後才跳離整個switch。
<br>
3.	若是所有case的選擇值皆不適合時，執行default之後所包含的敘述，執行完畢即離開switch敘述。如果沒有定義default的敘述，則直接跳離switch敘述。
<br>
注意:如果忘記在case敘述結尾加上break，則會一直執行到有break敘述的地方或是switch敘述的尾端，才會離開switch敘述。
<br>
來看看上一個範例的成績等級比對如何使用switch來改寫： 

<div class="alert alert-success">
#include < iostream>
<br>
using namespace std;
<br><br>
int main() { 
<br>
    int score = 0; 
    <br>
    int level = 0; 
    <br><br>

    cout << "輸入分數："; 
    <br>
    cin >> score; 
    <br>
    level = score/10; 
    <br><br>

    switch(level) { 
    <br>
       &nbsp;&nbsp;&nbsp; case 10: 
        <br>
      &nbsp;&nbsp;&nbsp;  case 9: 
        <br>
         &nbsp;&nbsp;&nbsp;&nbsp;   cout << "得A" << endl; 
            <br>
         &nbsp;&nbsp;&nbsp;&nbsp;   break; 
            <br>
       &nbsp;&nbsp;&nbsp; case 8: 
        <br>
       &nbsp;&nbsp;&nbsp;&nbsp;     cout << "得B" << endl; 
            <br>
        &nbsp;&nbsp;&nbsp;&nbsp;    break; 
            <br>
      &nbsp;&nbsp;&nbsp;  case 7: 
        <br>
        &nbsp;&nbsp;&nbsp;&nbsp;    cout << "得C" << endl; 
            <br>
         &nbsp;&nbsp;&nbsp;&nbsp;   break; 
            <br>
        &nbsp;&nbsp;&nbsp;case 6: 
        <br>
          &nbsp;&nbsp;&nbsp;&nbsp;  cout << "得D" << endl; 
            <br>
         &nbsp;&nbsp;&nbsp;&nbsp;   break; 
            <br>
       &nbsp;&nbsp;&nbsp; default: 
        <br>
          &nbsp;&nbsp;&nbsp;&nbsp;  cout << "得E(不及格)" << endl; 
            <br>
    } 
 
    return 0;
}
</div>

OUTPUT:
<div class="alert alert-info">
輸入分數：85
<br>
得B
</div>
在這個程式中，您使用除法並取得運算後的商數，如果大於90的話，除以10的商數一定是9或10（100分時），在case 10中沒有任何的陳述，也沒有使用break，所以會繼續往下執行，直到遇到break離開switch為止，所以學生成績100分的話，也會顯示A的成 績等級；如果比對的條件不在10到6這些值的話，會執行default下的陳述，這表示商數小於6，所以學生的成績等級就顯示為E了。 


      </div>
      </div>
    </div>
  </body>
</html><?php }} ?>
