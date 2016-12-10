<?php /* Smarty version Smarty-3.1.16, created on 2015-04-14 14:48:43
         compiled from ".\templates\C4_3_2.tpl" */ ?>
<?php /*%%SmartyHeaderCode:125445417e533e1efb7-38204037%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8d1fb1b4c7ffbdd1bcadc8ac48095e7ad2788d37' => 
    array (
      0 => '.\\templates\\C4_3_2.tpl',
      1 => 1429015649,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '125445417e533e1efb7-38204037',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5417e533e44fb0_31160760',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5417e533e44fb0_31160760')) {function content_5417e533e44fb0_31160760($_smarty_tpl) {?><html>
  <body>
    <div class="container" id="container">
      <div class="col-xs-12 col-sm-9">

      <div class="jumbotron">
           <p>4.3.2 while迴圈</p>
當遇到問題不知道確切的實行次數時，就可以使用while迴圈或do-while迴圈。先介紹while迴圈的使用格式:

<div class="alert alert-success">
設定迴圈控制變數初值;
<br>
while( 判斷條件 ) <span style="color:red">(這邊不可加 ; )</span>
<br>
{ 
	<br>
    迴圈主體;   
    <br>
    設定迴圈控制變數增減量;
    <br>
}<span style="color:red">(這邊不可加 ; )</span>

</div>
當while迴圈主體只有一個敘述時，可以直接將大括號省略。
<br>
在while迴圈敘述中判斷條件通常是一個邏輯運算子，根據判斷條件的內容決定執行流程。
<br>

以下為while迴圈執行流程:
<br>
1.	必須先設定while迴圈的初始值，然後第一次進入while迴圈
<br>
2.	根據判斷條件的內容，檢查是否要執行while迴圈，如果判斷條件為真(true)，則繼續執行迴圈主體；如果判斷條件為假(false)，則跳出while迴圈執行後續的敘述。
<br>
3.	執行完while迴圈主體內的敘述後，重新設定(增加或減少)迴圈控制變數的值，在回到步驟2重新判斷是否要繼續執行while迴圈。
<br>
根據上述的程序，可以繪製出while迴圈流程圖，如下:
<img src="./images/C4_3_2@P1.png" alt="while流程圖"><br>

While迴圈不像for迴圈有設定起始的迴圈控制變數和終止的敘述，while迴圈通常用於重覆性的動作，而終止條件未知何時發生的情況，例如一個使用者介面，使用者可能輸入10次也可能輸入20次，這時的迴圈停止時機是未知的，所以可以使用while迴圈，以下一個計算輸入成績平均的程式如下所示:

<div class="alert alert-success">
#include < iostream> 
<br>
using namespace std; 
<br>
int main() { 
<br>
    int score = 0; 
    <br>
    int sum = 0; 
    <br>
    int count = -1; 
    <br><br>

    while(score != -1) { 
    <br>
      &nbsp;&nbsp;&nbsp;  count++; 
        <br>
        &nbsp;&nbsp;&nbsp;sum += score; 
        <br>
        &nbsp;&nbsp;&nbsp;cout << "輸入分數(-1結束)："; 
        <br>
        &nbsp;&nbsp;&nbsp;cin >> score; 
        <br>
    } 
    <br><br>

    cout << "平均：" 
    <br>
         << static_cast<double>(sum) / count 
         <br>
         << endl; 
         <br><br>
 
    return 0; 
    <br>
}
</div>
OUTPUT:
<div class="alert alert-info">
輸入分數(-1結束)：10
<br>
輸入分數(-1結束)：20
<br>
輸入分數(-1結束)：30
<br>
輸入分數(-1結束)：40
<br>
輸入分數(-1結束)：50
<br>
輸入分數(-1結束)：-1
<br>
平均：30
</div>


      </div>
      </div>
    </div>
  </body>
</html><?php }} ?>
