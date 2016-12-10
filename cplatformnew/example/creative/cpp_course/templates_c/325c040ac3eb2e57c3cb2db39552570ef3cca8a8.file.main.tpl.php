<?php /* Smarty version Smarty-3.1.16, created on 2015-04-25 12:43:50
         compiled from ".\templates\main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3720534e9989104b13-11005736%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '325c040ac3eb2e57c3cb2db39552570ef3cca8a8' => 
    array (
      0 => '.\\templates\\main.tpl',
      1 => 1429958626,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3720534e9989104b13-11005736',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_534e99891342a9_51311277',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_534e99891342a9_51311277')) {function content_534e99891342a9_51311277($_smarty_tpl) {?><!DOCTYPE html>
<html>

<?php echo $_smarty_tpl->getSubTemplate ("config_css.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>



<body>


<script language="javascript" type="text/javascript">
function change_course(id){
  $.post( "change_course.php" ,{
    C_id: id ,
  },function(txt){
    document.getElementById("container").innerHTML = txt  ;
  
   //$('#container').html(txt);
  });
}

</script>




<br>
<br>
<br>

<div class="container-fluid">
  <div class="row-fluid">



     <!--Sidebar content-->
    <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar" role="navigation">
      <div class="well sidebar-nav" >

        <div class="accordion" id="accordion2">
          <div class="accordion-group">
            <div class="accordion-heading">
              <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne" onclick="change_course('C1')">
                  <h3>1、Introduce C++</h3>
              </a>
            </div>
            <div id="collapseOne" class="accordion-body collapse">
              <div class="accordion-inner">
                  <ul class="nav">
                    <a href="#C1_1" onclick="change_course('C1_1')"><h4>1.1 認識C++</h4></a>
                  </ul>
                  <ul class="nav">
                    <a href="#C1_2_1" onclick="change_course('C1_2_1')"><h4>1.2 C++的特色</h4></a>
                      <li><a href="#C1_2_1" onclick="change_course('C1_2_1')">1.2.1 向下相容的c語言</a></li>
                      <li><a href="#C1_2_2" onclick="change_course('C1_2_2')">1.2.2 具物件導向技術的語言</a></li>
                  </ul>
                  <ul class="nav">
                    <a href="#C1_3" onclick="change_course('C1_3')"><h4>1.3簡單的C++</h4></a>
                  </ul>
                  <ul class="nav">
                    <a href="#C1_4_1" onclick="change_course('C1_4_1')"><h4>1.4 識別字及關鍵字</h4></a>
                    <li><a href="#C1_4_1" onclick="change_course('C1_4_1')">1.4.1 識別字</a></li>
                    <li><a href="#C1_4_2" onclick="change_course('C1_4_2')">1.4.2 關鍵字</a></li>
                  </ul>
                  <ul class="nav">
                    <a href="#C1_5" onclick="change_course('C1_5')"><h4>1.5 提高程式的可讀性</h4></a>
                    <li><a href="#C1_5_1" onclick="change_course('C1_5_1')">1.5.1 程式碼請用固定字句</a></li>
                    <li><a href="#C1_5_2" onclick="change_course('C1_5_2')">1.5.2 將程式碼縮排</a></li>
                    <li><a href="#C1_5_3" onclick="change_course('C1_5_3')">1.5.3 將程式加上註解 </a></li>
                  </ul>
                  <ul class="nav">
                    <a href="#C1_abs" onclick="change_course('C1_abs')"><h4>*第一章 重點整理</h4></a>
                   
                  </ul>
              </div>
            </div>
          </div>
          <div class="accordion-group">
            <div class="accordion-heading">
              <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo" onclick="change_course('C2')">
                 <h3>2、資料型態</h3>
              </a>
            </div>
            <div id="collapseTwo" class="accordion-body collapse">
              <div class="accordion-inner">
                 <ul class="nav">
                    <a href="#C2" onclick="change_course('C2_1')"><h4>2.1 變數與常數</h4></a>
                  </ul>
                  <ul class="nav">
                    <a href="#C2_2" onclick="change_course('C2_2')"><h4>2.2 基本資料型態</h4></a>
                    <li><a href="#C2_2_1" onclick="change_course('C2_2_1')">2.2.1 整數型態</a></li>
                    <li><a href="#C2_2_2" onclick="change_course('C2_2_2')">2.2.2字元型態</a></li>
                    <li><a href="#C2_2_3" onclick="change_course('C2_2_3')">2.2.3 浮點數型態與倍精度浮點數型態</a></li>
                    <li><a href="#C2_2_4" onclick="change_course('C2_2_4')">2.2.4 布林型態</a></li>
                  </ul>
                  <ul class="nav">
                    <a href="#C2_4" onclick="change_course('C2_3')"><h4>2.3 輸入資料</h4></a>
                   
                  <ul class="nav">
                    <a href="#C2_abs" onclick="change_course('C2_abs')"><h4>*第二章 重點整理</h4></a>
                  </ul>
              </div>
            </div>
          </div>

           <div class="accordion-group">
            <div class="accordion-heading">
              <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree" onclick="change_course('C3')">
                 <h3>3、運算子、運算式與敘述</h3>
              </a>
            </div>
            <div id="collapseThree" class="accordion-body collapse">
              <div class="accordion-inner">
                <ul class="nav">
                  <a href="#C3_1" onclick="change_course('C3_1')">  <h4>3.1 運算式與運算子</h4></a>
                  <li><a href="#C3_1_1" onclick="change_course('C3_1_1')"> 3.1.1 設定運算子</a></li>
                  <li><a href="#C3_1_2" onclick="change_course('C3_1_2')"> 3.1.2 一元運算子</a></li>
                  <li><a href="#C3_1_3" onclick="change_course('C3_1_3')"> 3.1.3 算數運算子</a></li>
                  <li><a href="#C3_1_4" onclick="change_course('C3_1_4')"> 3.1.4 關係運算子與if敘述</a></li>
                  <li><a href="#C3_1_5" onclick="change_course('C3_1_5')"> 3.1.5 遞增語遞減運算子</a></li>
                  <li><a href="#C3_1_6" onclick="change_course('C3_1_6')"> 3.1.6 算數與設定運算子的結合</a></li>
                  <li><a href="#C3_1_7" onclick="change_course('C3_1_7')"> 3.1.7 邏輯運算子與位元運算子</a></li>

                </ul>
                <ul class="nav">
                  <a href="#C3_2" onclick="change_course('C3_2')"><h4>3.2 運算子的優先順序</h4></a>
                 
                </ul>
                <ul class="nav">
                  <a href="#C3_3" onclick="change_course('C3_3')"> <h4>3.3 運算式與資料型態的轉換</h4> </a>
                  <li><a href="#C3_3_1" onclick="change_course('C3_3_1')">  3.3.1 隱性資料型態轉換</a></li>
                  <li><a href="#C3_3_2" onclick="change_course('C3_3_2')">   3.3.2 顯性資料型態轉換 </a></li>
                  <li><a href="#C3_3_3" onclick="change_course('C3_3_3')">   3.3.3 運算式的型態轉換 </a> </li>
                </ul>
                <ul class="nav">
                  <a href="#C3_abs" onclick="change_course('C3_abs')"><h4>*第三章 重點整理</h4></a>
                </ul>
              </div>
            </div>
          </div>


           <div class="accordion-group">
            <div class="accordion-heading">
              <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseFour" onclick="change_course('C4')">
                 <h3>4、流程控制</h3>
              </a>
            </div>
            <div id="collapseFour" class="accordion-body collapse">
              <div class="accordion-inner">
                  <ul class="nav">
                  <a href="#C4_1" onclick="change_course('C4_1')"><h4>4.1 程式結構設計</h4></a>
                </ul>
                <ul class="nav">
                  <a href="#C4_2_1" onclick="change_course('C4_2_1')">   <h4>4.2 選擇性敘述 </h4>   </a>
                  <li><a href="#C4_2_1" onclick="change_course('C4_2_1')"> 4.2.1 if-else 敘述  </a></li>
                  <li><a href="#C4_2_2" onclick="change_course('C4_2_2')"> 4.2.2 更多的選擇:巢狀if 敘述  </a></li>
                  <li><a href="#C4_2_3" onclick="change_course('C4_2_3')">4.2.3 條件運算子</a></li>
                </ul>

                <ul class="nav">
                  <a href="#C4_3_1" onclick="change_course('C4_3_1')"><h4>4.3 控制迴圈</h4></a>
                  <li><a href="#C4_3_1" onclick="change_course('C4_3_1')">4.3.1 for迴圈</a></li>
                  <li><a href="#C4_3_2" onclick="change_course('C4_3_2')">4.3.2 while迴圈</a></li>
                  <li><a href="#C4_3_3" onclick="change_course('C4_3_3')">4.3.3 do-while迴圈</a></li>
                  <li><a href="#C4_3_4" onclick="change_course('C4_3_4')">4.3.4 巢狀迴圈  </a></li>
                </ul>

                <ul class="nav">
                  <a href="#C4_4_1" onclick="change_course('C4_4_1')"><h4>4.4 迴圈跳離</h4></a>
                  <li><a href="#C4_4_1" onclick="change_course('C4_4_1')">4.4.1 break敘述</a></li>
                  <li><a href="#C4_4_2" onclick="change_course('C4_4_2')">4.4.2 continue敘述</a></li>
                </ul>
                <ul class="nav">
                  <a href="#C4_5" onclick="change_course('C4_5')">   <h4>4.5 多重選擇的switch敘述</h4>   </a>
                </ul>
                <ul class="nav">
                  <a href="#C4_abs" onclick="change_course('C4_abs')"><h4>*第四章 重點整理</h4>   </a>
                </ul>
              </div>
            </div>
          </div>




        <div class="accordion-group">
          <div class="accordion-heading">
              <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseFive" onclick="change_course('C5_1')">
                 <h3>5、函數和遞迴函數</h3>
              </a>
            </div>
            <div id="collapseFive" class="accordion-body collapse">
              <div class="accordion-inner">
                <ul class="nav">
                  <a href="#C5_1" onclick="change_course('C5_1')"><h4>5.1 函數基本架構</h4></a>
                  <li><a href="#C5_1_1" onclick="change_course('C5_1_1')">5.1.1 函數原型的宣告、撰寫與呼叫</a></li>
                  <li><a href="#C5_1_2" onclick="change_course('C5_1_2')">5.1.2 不使用函數原型的方式</a></li>
                  <li><a href="#C5_1_3" onclick="change_course('C5_1_3')">5.1.3 函數的引數與參數</a></li>
                  <li><a href="#C5_1_4" onclick="change_course('C5_1_4')"> 5.1.4 函數的傳回值</a></li>
                </ul>


                <ul class="nav">
                  <a href="#C5_2" onclick="change_course('C5_2')">   <h4>5.2 特殊的 inline函數</h4>   </a>
                </ul>


                 <ul class="nav">
                  <a href="#C5_3" onclick="change_course('C5_3')">   <h4>5.3 變數的等級</h4>   </a>
                  <li><a href="#C5_3_1" onclick="change_course('C5_3_1')"> 5.3.1 區域變數  </a></li>
                  <li><a href="#C5_3_2" onclick="change_course('C5_3_2')"> 5.3.2 靜態區域變數  </a></li>
                  <li><a href="#C5_3_3" onclick="change_course('C5_3_3')"> 5.3.3 外部變數</a></li>
                  <li><a href="#C5_3_4" onclick="change_course('C5_3_4')"> 5.3.4 暫存器變數</a></li>
                </ul>

                <ul class="nav">
                  <a href="#C5_4" onclick="change_course('C5_4')">   <h4>5.4 同時使用多個函數</h4>   </a>
                  <li><a href="#C5_4" onclick="change_course('C5_4')"> 5.4.1 遞迴函數  </a></li>
           
                </ul>
              
                <ul class="nav">
                  <a href="#C5_5" onclick="change_course('C5_5')">   <h4>5.5 參照與函數</h4>   </a>
                  <li><a href="#C5_5_1" onclick="change_course('C5_5_1')"> 5.5.1 參照基本認識  </a></li>
                                   
                  <li><a href="#C5_5_2" onclick="change_course('C5_5_2')"> 5.5.2 傳遞參照到函數  </a></li>

                  <li><a href="#C5_5_3" onclick="change_course('C5_5_3')"> 5.5.3 傳回值為參照的函數  </a></li>

                </ul>

                <ul class="nav">
                  <a href="#C5_6" onclick="change_course('C5_6')">   <h4>5.6 函數的多載</h4>   </a>
                </ul>

                <ul class="nav">
                  <a href="#C5_7" onclick="change_course('C5_7')">   <h4>5.7 引數的預設值</h4>   </a>
                </ul>

            

               
                <ul class="nav">
                  <a href="#C5_8_1" onclick="change_course('C5_8_1')">   <h4>5.8 前置處理器-- #define</h4>   </a>
                  <li><a href="#C5_8_1" onclick="change_course('C5_8_1')"> 5.8.1  #define前置處理器</a></li>
                  <li><a href="#C5_8_2" onclick="change_course('C5_8_2')"> 5.8.2  const修飾子</a></li>

                  <li><a href="#C5_8_3" onclick="change_course('C5_8_3')"> 5.8.3 利用#define定義簡單的函數</a></li>

                  <li><a href="#C5_8_4" onclick="change_course('C5_8_4')"> 5.8.4  使用引數的巨集</a></li>

                  <li><a href="#C5_8_5" onclick="change_course('C5_8_5')"> 5.8.5  使用函數還是巨集?</a></li>



                </ul>

                <ul class="nav">
                  <a href="#C5_abs" onclick="change_course('C5_abs')"><h4>*第五章 重點整理</h4>   </a>
                </ul>
              </div>
            </div>
          </div>








       <div class="accordion-group">
          <div class="accordion-heading">
              <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseSix" onclick="change_course('C6')">
                 <h3>6、陣列與字串</h3>
              </a>
            </div>
            <div id="collapseSix" class="accordion-body collapse">
              <div class="accordion-inner">


              <ul class="nav">
                <a href="#C6_1" onclick="change_course('C6_1')">   <h4>6.1 一維陣列 </h4>   </a>
                <li><a href="#C6_1_1" onclick="change_course('C6_1_1')"> 6.1.1 一維陣列的宣告  </a></li>
                <li><a href="#C6_1_2" onclick="change_course('C6_1_2')"> 6.1.2 陣列元素表示方法  </a></li>
                <li><a href="#C6_1_3" onclick="change_course('C6_1_3')"> 6.1.3 陣列初值設定  </a></li>
                <li><a href="#C6_1_4" onclick="change_course('C6_1_4')"> 6.1.4 陣列界限的檢查  </a></li>
              </ul>


              <ul class="nav">
                <a href="#C6_2_1" onclick="change_course('C6_2_1')">   <h4>6.2 二維以上的多維陣列 </h4>   </a>
                <li><a href="#C6_2_1" onclick="change_course('C6_2_1')"> 6.2.1 二維陣列的宣告與配置記憶體  </a></li>
                <li><a href="#C6_2_2" onclick="change_course('C6_2_2')"> 6.2.2 二維陣列元素的引用及存取  </a></li>
                <li><a href="#C6_2_3" onclick="change_course('C6_2_3')"> 6.2.3 多維陣列  </a></li>
              </ul>


              <ul class="nav">
                <a href="#C6_3_1" onclick="change_course('C6_3_1')">   <h4>6.3 傳遞陣列給函數 </h4>   </a>
                <li><a href="#C6_3_1" onclick="change_course('C6_3_1')"> 6.3.1 以一維陣列為引數來傳遞  </a></li>
                <li><a href="#C6_3_2" onclick="change_course('C6_3_2')"> 6.3.2 傳遞多維陣列  </a></li>
                <li><a href="#C6_3_3" onclick="change_course('C6_3_3')"> 6.3.3 傳遞「值」還是「位址」到函數？  </a></li>
              </ul>


              <ul class="nav">
                <a href="#C6_4_1" onclick="change_course('C6_4_1')">   <h4>6.4  字元陣列—C型態字串 </h4>   </a>
                <li><a href="#C6_4_1" onclick="change_course('C6_4_1')"> 6.4.1 字串常數  </a></li>
                <li><a href="#C6_4_2" onclick="change_course('C6_4_2')"> 6.4.2 字元陣列的宣告  </a></li>
                <li><a href="#C6_4_3" onclick="change_course('C6_4_3')"> 6.4.3 字串的輸出與輸入 </a></li>
              </ul>


              <ul class="nav">
                <a href="#C6_5_1" onclick="change_course('C6_5_1')">   <h4>6.5  字串類別—C++型態字串 </h4>   </a>
                <li><a href="#C6_5_1" onclick="change_course('C6_5_1')"> 6.5.1 字串的宣告  </a></li>
                <li><a href="#C6_5_2" onclick="change_course('C6_5_2')"> 6.5.2 字串的輸出與輸入  </a></li>
              </ul>

               <ul class="nav">
                <a href="#C6_6_1" onclick="change_course('C6_6_1')">   <h4>6.6  字串的處理 </h4>   </a>
                <li><a href="#C6_6_1" onclick="change_course('C6_6_1')"> 6.6.1 字串的運算  </a></li>
                <li><a href="#C6_6_2" onclick="change_course('C6_6_2')"> 6.6.2 字串類別裡的成員函數  </a></li>
              </ul>

              <ul class="nav">
                  <a href="#C6_abs" onclick="change_course('C6_abs')"><h4>*第六章 重點整理</h4>   </a>
              </ul>

              </div>
            </div>
          </div>




         <div class="accordion-group">
            <div class="accordion-heading">
              <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseSeven" onclick="change_course('C7_1')">
                 <h3>7、指標</h3>
              </a>
            </div>
            <div id="collapseSeven" class="accordion-body collapse">

              <div class="accordion-inner">
                <ul class="nav">
                  <a href="#C7_1" onclick="change_course('C7_1')">  <h4>7.1 指標概念</h4></a>
                  <li><a href="#C7_1_1" onclick="change_course('C7_1_1')"> 7.1.1 什麼是指標</a></li>
                  <li><a href="#C7_1_2" onclick="change_course('C7_1_2')"> 7.1.2 為什麼要用指標</a></li>
                  <li><a href="#C7_1_3" onclick="change_course('C7_1_3')"> 7.1.3 記憶體的位址</a></li>

                </ul>

                <ul class="nav">
                  <a href="#C7_2_1" onclick="change_course('C7_2_1')">  <h4>7.2 指標變數</h4></a>
                  <li><a href="#C7_2_1" onclick="change_course('C7_2_1')"> 7.2.1 指標變數的宣告</a></li>
                  <li><a href="#C7_2_2" onclick="change_course('C7_2_2')"> 7.2.2 指標變數的使用</a></li>
                  <li><a href="#C7_2_3" onclick="change_course('C7_2_3')"> 7.2.3 宣告指標變數所指像之型態的重要性</a></li>

                </ul>


                <ul class="nav">
                  <a href="#C7_3_1" onclick="change_course('C7_3_1')">  <h4>7.3 指標與函數</h4></a>
                  <li><a href="#C7_3_1" onclick="change_course('C7_3_1')"> 7.3.1 傳遞指標到函數中</a></li>
                  <li><a href="#C7_3_2" onclick="change_course('C7_3_2')"> 7.3.2 傳回值為指標的函數</a></li>
                  <li><a href="#C7_3_3" onclick="change_course('C7_3_3')"> 7.3.3 函數指標</a></li>
                </ul>

                <ul class="nav">
                  <a href="#C7_4_1" onclick="change_course('C7_4_1')">  <h4>7.4 指標與陣列</h4></a>
                  <li><a href="#C7_4_1" onclick="change_course('C7_4_1')"> 7.4.1 指標的算數運算</a></li>
                  <li><a href="#C7_4_2" onclick="change_course('C7_4_2')"> 7.4.2 利用指標存取一維陣列的元素</a></li>
                  <li><a href="#C7_4_3" onclick="change_course('C7_4_3')"> 7.4.3 利用指標傳遞一維陣列到函數裡</a></li>
                </ul>


               <ul class="nav">
                  <a href="#C7_5_1" onclick="change_course('C7_5_1')">  <h4>7.5 指標與字串</h4></a>
                  <li><a href="#C7_5_1" onclick="change_course('C7_5_1')"> 7.5.1 以指標變數指向字串</a></li>
                  <li><a href="#C7_5_2" onclick="change_course('C7_5_2')"> 7.5.2 指標陣列</a></li>
                </ul>


                <ul class="nav">
                  <a href="#C7_6_1" onclick="change_course('C7_6_1')">  <h4>7.6 指向指標的指標</h4></a>

                  <li><a href="#C7_6_1" onclick="change_course('C7_6_1')">  <h4>7.6.1 指向指標的指標-雙重指標</h4></a></li>
                </ul>


                <ul class="nav">
                  <a href="#C7_7" onclick="change_course('C7_7')">  <h4>7.7 動態記憶體配置</h4></a>

                  <li><a href="#C7_7_1" onclick="change_course('C7_7_1')">  <h4>7.7.1 使用基本資料型態做動態配置</h4></a></li>
                 <li><a href="#C7_7_2" onclick="change_course('C7_7_2')">  <h4>7.7.2 使用陣列做動態配置</h4></a></li>
                </ul>


                <ul class="nav">
                  <a href="#C7_8_1" onclick="change_course('C7_8_1')">  <h4>7.8 指標、參照與函數</h4></a>
                  <li><a href="#C7_8_1" onclick="change_course('C7_8_1')">  <h4>7.8.1 指標與參數</h4></a></li>
                  <li><a href="#C7_8_2" onclick="change_course('C7_8_2')">  <h4>7.7.2 引數的傳遞方式</h4></a>
                  </li>
                </ul>


                <ul class="nav">
                  <a href="#C7_abs" onclick="change_course('C7_abs')"><h4>*第七章 重點整理</h4></a>
                </ul>
              </div>
            </div>
          </div>






         <div class="accordion-group">
            <div class="accordion-heading">
              <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseEight" onclick="change_course('C8_1_1')">
                 <h3>8、類別的架構</h3>
              </a>
            </div>
            <div id="collapseEight" class="accordion-body collapse">
              <div class="accordion-inner">
                <ul class="nav">
                  <a href="#C8_1_1" onclick="change_course('C8_1_1')">  <h4>8.1 認識類別</h4></a>
                  <li><a href="#C8_1_2" onclick="change_course('C8_1_2')"> 8.1.1 類別的基本概念</a></li>
                 <li><a href="#C8_1_2" onclick="change_course('C8_1_2')"> 8.1.2 類別的宣告</a></li>

                  <li><a href="#C8_1_3" onclick="change_course('C8_1_3')"> 8.1.3 建立新的物件</a></li>

                  <li><a href="#C8_1_4" onclick="change_course('C8_1_4')"> 8.1.4 同時建立多個物件</a></li>

                  <li><a href="#C8_1_5" onclick="change_course('C8_1_5')"> 8.1.5 物件佔的位元組</a></li>


                </ul>


              <ul class="nav">
                  <a href="#C8_2_1" onclick="change_course('C8_2_1')">  <h4>8.2 撰寫成員函數</h4></a>
                  <li><a href="#C8_2_1" onclick="change_course('C8_2_1')"> 8.2.1 定義與使用函數</a></li>
                 <li><a href="#C8_2_2" onclick="change_course('C8_2_2')"> 8.2.2 函數的位置</a></li>

                  <li><a href="#C8_2_3" onclick="change_course('C8_2_3')"> 8.2.3 類別內資料成員的存取方式</a></li>

                  <li><a href="#C8_2_4" onclick="change_course('C8_2_4')"> 8.2.4 在類別定義的內部呼叫函數</a></li>



                </ul>



              <ul class="nav">
                  <a href="#C8_3_1" onclick="change_course('C8_3_1')">  <h4>8.3
                  函數引數的傳遞與多載</h4></a>
                  <li><a href="#C8_3_1" onclick="change_course('C8_3_1')"> 8.3.1 引數的傳遞</a></li>
                 <li><a href="#C8_3_2" onclick="change_course('C8_3_2')"> 8.3.2 傳遞物件到函數裡</a></li>
                  <li><a href="#C8_3_3" onclick="change_course('C8_3_3')"> 8.3.3 函數的多載</a></li>
              </ul>



              <ul class="nav">
                  <a href="#C8_4" onclick="change_course('C8_4')">  <h4>8.4
                  公有成員與私有成員</h4></a>
                  <li><a href="#C8_4_1" onclick="change_course('C8_4_1')"> 8.4.1 建立私有成員</a></li>
                 <li><a href="#C8_4_2" onclick="change_course('C8_4_2')"> 8.4.2 建立公有成員</a></li>
                  <li><a href="#C8_4_3" onclick="change_course('C8_4_3')"> 8.4.3 私有成員函數</a></li>
                  <li><a href="#C8_4_4" onclick="change_course('C8_4_4')"> 8.4.4 資料的封裝</a></li>

              </ul>


               <ul class="nav">
                <a href="#C8_5" onclick="change_course('C8_5')">  <h4>8.5
                  友誼函數</h4></a> 
              </ul>




              <ul class="nav">
                  <a href="#C8_6_1" onclick="change_course('C8_6_1')">  <h4>8.6
                  建構元</h4></a>
                  <li><a href="#C8_6_1" onclick="change_course('C8_6_1')"> 8.6.1 建構元的基本認識</a></li>
                 <li><a href="#C8_6_2" onclick="change_course('C8_6_2')"> 8.6.2 建構元的多載</a></li>
                  <li><a href="#C8_6_3" onclick="change_course('C8_6_3')"> 8.6.3 預設建構元</a></li>
                
              </ul>






              <ul class="nav">
                  <a href="#C8_7_1" onclick="change_course('C8_7_1')">  <h4>8.7
                  建構元引數的預設值</h4></a>
                  <li><a href="#C8_7_1" onclick="change_course('C8_7_1')"> 8.7.1 預設值的設定</a></li>
                 <li><a href="#C8_7_2" onclick="change_course('C8_7_2')"> 8.7.2 於建構元裡初始化成員的技巧</a></li>
                  <li><a href="#C8_7_3" onclick="change_course('C8_7_3')"> 8.7.3 設定引數預設值的注意事項</a></li>
              </ul>



              <ul class="nav">
                  <a href="#C8_8_1" onclick="change_course('C8_8_1')">  <h4>8.8
                   類別的靜態成員</h4></a>
                  <li><a href="#C8_8_1" onclick="change_course('C8_8_1')"> 8.8.1 靜態資料成員</a></li>
                 <li><a href="#C8_8_2" onclick="change_course('C8_8_2')"> 8.8.2 靜態成員函數</a></li>
                  <li><a href="#C8_8_3" onclick="change_course('C8_8_3')"> 8.8.3 靜態成員函數使用的限制</a></li>
              </ul>


              <ul class="nav">
                  <a href="#C8_9_1" onclick="change_course('C8_9_1')">  <h4>8.9
                   指向物件的指標與參照</h4></a>
                  <li><a href="#C8_9_1" onclick="change_course('C8_9_1')"> 8.9.1 指標與物件</a></li>
                 <li><a href="#C8_9_2" onclick="change_course('C8_9_2')"> 8.9.2 參照與物件</a></li>

              </ul>


                <ul class="nav">
                  <a href="#C8_abs" onclick="change_course('C8_abs')"><h4>*第八章 重點整理</h4></a>
                </ul>
              </div>
            </div>
          </div>










        <div class="accordion-group">
            <div class="accordion-heading">
              <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseNine" onclick="change_course('C9_1')">
                 <h3>9、解構元與拷貝建構元</h3>
              </a>
            </div>
            <div id="collapseNine" class="accordion-body collapse">
              <div class="accordion-inner">
                <ul class="nav">
                  <a href="#C9_1" onclick="change_course('C9_1')">  <h4>9.1 解構元與解構元的使用</h4></a>
                  <li><a href="#C9_1_1" onclick="change_course('C9_1_1')"> 9.1.1 解構元的位置</a></li>
                </ul>
                <ul class="nav">
                  <a href="#C9_2" onclick="change_course('C9_2')">  <h4>9.2 動態記憶體配置與解構元</h4></a>
                </ul>
                <ul class="nav">
                  <a href="#C9_3_1" onclick="change_course('C9_3_1')">  <h4>9.3 拷貝解構元</h4></a>
                  <li><a href="#C9_3_1" onclick="change_course('C9_3_1')"> 9.3.1 預設的拷貝建構元</a></li>
                  <li><a href="#C9_3_2" onclick="change_course('C9_3_2')"> 9.3.2 撰寫自己的拷貝建構元</a></li>
                  <li><a href="#C9_3_3" onclick="change_course('C9_3_3')"> 9.3.3 拷貝建構元與動態記憶體配置</a></li>                  
                  <li><a href="#C9_3_4" onclick="change_course('C9_3_4')"> 9.3.4 不使用拷貝建構元的另一個常犯錯誤</a></li>  
                </ul>

                <ul class="nav">
                  <a href="#C9_abs" onclick="change_course('C9_abs')"><h4>*第九章 重點整理</h4></a>
                </ul>

              </div>
            </div>
          </div>






        <div class="accordion-group">
            <div class="accordion-heading">
              <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTen" onclick="change_course('C10_1')">
                 <h3>10、 運算子的多載</h3>
              </a>
            </div>
            <div id="collapseTen" class="accordion-body collapse">
              <div class="accordion-inner">

                <ul class="nav">
                  <a href="#C10_1" onclick="change_course('C10_1')">  <h4>10.1 認識運算子的多載</h4></a>
                  <li><a href="#C10_1_1" onclick="change_course('C10_1_1')"> 10.1.1 運算子多載的範例--「>」運算子的多載</a></li>
                  <li><a href="#C10_1_2" onclick="change_course('C10_1_2')"> 10.1.2 再把operator>()函數多載</a></li>
                </ul>

                <ul class="nav">
                  <a href="#C10_2" onclick="change_course('C10_2')">  <h4>10.2 加號「+」的多載</h4></a>
                </ul>

                <ul class="nav">
                  <a href="#C10_3_1" onclick="change_course('C10_3_1')">  <h4>10.3 設定運算子「=」的多載</h4></a>
                  <li><a href="#C10_3_1" onclick="change_course('C10_3_1')"> 10.3.1 簡單的範例</a></li>
                  <li><a href="#C10_3_2" onclick="change_course('C10_3_2')"> 10.3.2 設定運算子多載的進階應用</a></li>
                </ul>           

                <ul class="nav">
                  <a href="#C10_abs" onclick="change_course('C10_abs')"><h4>*第十章 重點整理</h4></a>
                </ul>

              </div>
            </div>
          </div>









        <div class="accordion-group">
            <div class="accordion-heading">
              <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseEleven" onclick="change_course('C11_1')">
                 <h3>11、 類別的繼承</h3>
              </a>
            </div>
            <div id="collapseEleven" class="accordion-body collapse">
              <div class="accordion-inner">

                <ul class="nav">
                  <a href="#C11_1" onclick="change_course('C11_1')">  <h4>11.1 繼承的基本概念</h4></a>
                  <li><a href="#C11_1_1" onclick="change_course('C11_1_1')"> 11.1.1 基底類別與衍生類別</a></li>
                  <li><a href="#C11_1_2" onclick="change_course('C11_1_2')"> 11.1.2 呼叫父類別中特定的建構元</a></li>
                  <li><a href="#C11_1_3" onclick="change_course('C11_1_3')"> 11.1.3 使用建構元常見的錯誤</a></li>
                </ul>


                <ul class="nav">
                  <a href="#C11_2" onclick="change_course('C11_2')">  <h4>11.2 由子類別存取父類別的成員</h4></a>
                  <li><a href="#C11_2" onclick="change_course('C11_2')"> 11.2.1 父類別裡私有成員的存取</a></li>
                  <li><a href="#C11_2_2" onclick="change_course('C11_2_2')"> 11.2.2 使用protected成員</a></li>
                  <li><a href="#C11_2_3" onclick="change_course('C11_2_3')"> 11.2.3 類別繼承的存取模式</a></li>
                </ul>

                <ul class="nav">
                  <a href="#C11_3" onclick="change_course('C11_3')">  <h4>11.3 改寫</h4></a>
                </ul>

                 <ul class="nav">
                  <a href="#C11_4" onclick="change_course('C11_4')">  <h4>11.4 在子類別中使用拷貝建構元</h4></a>
                </ul>               

                <ul class="nav">
                  <a href="#C11_abs" onclick="change_course('C11_abs')"><h4>*第十一章 重點整理</h4></a>
                </ul>

              </div>
            </div>
          </div>



<!--
        <a><h3>參考資料</h3></a>
-->



        <ul class="nav">
         
          
        </ul>
        
          <a href="cpp_compiler_OV.php" ><h3>線上C++編譯系統</h3></a>
          <br>
  <!--
          <br>
          <a href="cpp_compiler.php" ><h3>MS VS - C++</h3></a>
-->
        
        </div>




      </div><!--/.well -->

    </div><!--/span-->


<!--
     <div  class="col-xs-6 col-sm-3 sidebar-offcanvas" style="position: relative; float:right;" id="sidebar" role="navigation">
        <div class="well sidebar-nav">

          <textarea ></textarea>
        </div>
      </div>
-->
   


    <!--Body content-->
    <div class="container" id="container">

    <div class="col-xs-12 col-sm-9">
      <div class="jumbotron">
        <h1>C++ 線上教材</h1>
        <p>  </p>
      </div>
      <div class="row">
        <div class="col-6 col-sm-6 col-lg-4">
          <h2>1、introduce C++</h2>
          <p>Ｃ++語言具有物件導向的功能，易於開發、撰寫及偵錯，因而廣受大眾喜愛，成為最受歡迎的程式語言之一．目前許多視窗開發程式，如Visual C++和C++ Builder 等均以Ｃ++為核心語言來開發軟體，由此可見C++廣受歡迎的程度。</p>
          <p><a class="btn btn-default" href="C1_all.php" >View details &raquo;</a></p>
        </div><!--/span-->
        <div class="col-6 col-sm-6 col-lg-4">
          <h2>2、資料型態</h2>
          <p>變數是利用宣告方式，將記憶體中的某個區塊保留下來以供程式使用，此區塊可以宣告記載的資料型態為整數、字元、浮點數或是其他種類別型式。</p>
          <p><a class="btn btn-default" href="C2_all.php" >View details &raquo;</a></p>
        </div><!--/span-->
        <div class="col-6 col-sm-6 col-lg-4">
          <h2>3、運算子、運算式與敘述</h2>
          <p>程式是由許多敘述(statement)組成的，而運算元與運算子是組成的敘述的基本元素。本章介紹C++運算子的用法、運算式與運算子之間的關係，以及運算式裡，各種變數資料型態的轉換等等。</p>
          <p><a class="btn btn-default" href="C3_all.php" >View details &raquo;</a></p>
        </div><!--/span-->
        <div class="col-6 col-sm-6 col-lg-4">
          <h2>4、流程控制</h2>
          <p>流程控制是程式設計的基本語法，藉由各種條件判斷決定程式執行流程。程式碼是由上而下執行，這是屬於循序性敘述。若是想要處理重複性的工作時，可以透過「迴圈」的方式來幫助我們。</p>
          <p><a class="btn btn-default" href="C4_all.php">View details &raquo;</a></p>
        </div><!--/span-->

        <div class="col-6 col-sm-6 col-lg-4">
          <h2>5、函數</h2>
          <p>函數可以簡化主程式的結構，也可以節省撰寫相同程式碼的時間，達到程式模組化的目的。</p>
          <p><a class="btn btn-default" href="C5_all.php">View details &raquo;</a></p>
        </div><!--/span-->
        <div class="col-6 col-sm-6 col-lg-4">
          <h2>6、陣列與字串</h2>
          <p>陣列可以存放一連串的相關資料，如全班的某科小考成績，或者某一段期間的體重等相同型態的資料。使用陣列
            可以簡化變數的數量，方便管理使用者的資料。C++的字串有沿襲C而來的字元陣列，也有新型態的字串，於本章介紹。</p>
          <p><a class="btn btn-default" href="C6_all.php">View details &raquo;</a></p>
        </div><!--/span-->
        <div class="col-6 col-sm-6 col-lg-4">
          <h2>7、指標</h2>
          <p>指標是C++提供一種存取變數之特殊方式，透過指標，可以不必用到變數名稱，卻可以存取到變數的內容。許多學過C與C++的人覺得指標並不容易學習與使用，只要釐清觀念稍加練習，會發現並不困難。</p>
          <p><a class="btn btn-default" href="C7_all.php">View details &raquo;</a></p>
        </div><!--/span-->

        <div class="col-6 col-sm-6 col-lg-4">
          <h2>8、類別的架構</h2>
          <p>如果想將一些有相關性卻又不同型態的資料，如好友的姓名、電話、生日等內容存放在一起，類別就比陣列實用許多。然而，類別(class)為物件導向程式設計最重要的觀念之一。</p>
          <p><a class="btn btn-default" href="C8_all.php">View details &raquo;</a></p>
        </div><!--/span-->
        <div class="col-6 col-sm-6 col-lg-4">
          <h2>9、解構元與拷貝建構元</h2>
          <p>於本章我們探討解構元與拷貝建構元。雖然這兩者與建構元一樣，都會提供一個預設的版本，但也會因為一些原因，我們必須去更改這些預設值，使得程式能順利的執行。</p>
          <p><a class="btn btn-default" href="C9_all.php">View details &raquo;</a></p>
        </div><!--/span-->
        <div class="col-6 col-sm-6 col-lg-4">
          <h2>10、運算子的多載</h2>
          <p>在一般印象中，加號「＋」是用來做數字相加。想想看，如果可以另外定義加號的運算，用來做字串的連接，例如"Tom"+"cat"="Tomcat"，那麼使用起來是不是相當的方便呢?像這種加號可以用在數字的加法，也可以用在赤串的串接，我們稱之為運算子的多載。</p>
          <p><a class="btn btn-default" href="C10_all.php">View details &raquo;</a></p>
        </div><!--/span-->
        <div class="col-6 col-sm-6 col-lg-4">
          <h2>11、類別的繼承</h2>
          <p>對OOP的程式而言，其精華在於類別的繼承。繼承可以使我們以既有的類別為基礎，進而衍生出新的類別。透過這種方式，便能快速地開發新的類別，而不需要撰寫相同程式碼，這也就是程式碼再利用的概念。</p>
          <p><a class="btn btn-default" href="C11_all.php">View details &raquo;</a></p>
        </div><!--/span-->

<!--
        <div class="col-6 col-sm-6 col-lg-4">
          <h2>Heading</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn btn-default" href="#">View details &raquo;</a></p>
        </div>/span-->
    <!--    
        <div class="col-6 col-sm-6 col-lg-4">
          <h2>Heading</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn btn-default" href="#">View details &raquo;</a></p>
        </div>/span-->
  
      </div><!--/row-->
     </div>
    </div><!--/.container-->


  </div>
</div>
 

</body>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</html><?php }} ?>
