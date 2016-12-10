<?php /* Smarty version Smarty-3.1.16, created on 2015-03-11 17:10:31
         compiled from ".\templates\C7_7.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16387550006874b06f0-01223509%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '594ebb2ad5f1f2b6aa021c67a6623597a4f70a3a' => 
    array (
      0 => '.\\templates\\C7_7.tpl',
      1 => 1426065025,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16387550006874b06f0-01223509',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_550006874d7806_17210256',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_550006874d7806_17210256')) {function content_550006874d7806_17210256($_smarty_tpl) {?><html>
  <body>
    <div class="container" id="container">
      <div class="col-xs-12 col-sm-9">

      <div class="jumbotron">
           <h2><p>  7.7  動態記憶體配置        </p></h2><br>


C++基本資料型態，如bool、char、int、float、double，以及陣列、指標等型態，都是在編譯時期即配置完成其所需要的記憶體，代程式執行使用時使用，這種記憶體配置的方式稱為靜態記憶體配置（static memory allocation）<br>



下圖為靜態記憶體配置示意圖 <br>

<img src="./images/C7_7@p1.png" alt=""><br>




由上圖可知，使用計態記憶體配置時，原始程式在經過編譯後會分為「程式區」與「資料區」兩個區塊。程式區紀錄著程式編譯後的機械碼，而資料區記載著程式中所使用到的各種資料內容及呼叫函數之位址資訊，若是能夠在執行時期彈性的調動所需要的記憶體，將能夠合理的使用寶貴的記憶體資源，這種彈性的調配記憶體的方式，稱為動態記憶體配置（dynamic memory allocation）<br><br>




在動態記憶體配置時，作業系統會從未被使用的空間中，找尋一塊適合的記憶體區塊供該程式使用 


<br>



<img src="./images/C7_7@p2.png" alt=""><br>

執行時才會從heap中劃分一個區塊給動態記憶體配置的資料使用<br>





      </div>
      </div>
    </div>
  </body>
</html>
<?php }} ?>
