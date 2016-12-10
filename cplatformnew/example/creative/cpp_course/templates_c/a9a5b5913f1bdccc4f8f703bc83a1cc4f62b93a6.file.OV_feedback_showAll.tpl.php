<?php /* Smarty version Smarty-3.1.16, created on 2014-12-04 08:40:20
         compiled from ".\templates\OV_feedback_showAll.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21042547fd3bdeffee1-92928383%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a9a5b5913f1bdccc4f8f703bc83a1cc4f62b93a6' => 
    array (
      0 => '.\\templates\\OV_feedback_showAll.tpl',
      1 => 1417678819,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21042547fd3bdeffee1-92928383',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_547fd3be0cb399_02562683',
  'variables' => 
  array (
    'html_output' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_547fd3be0cb399_02562683')) {function content_547fd3be0cb399_02562683($_smarty_tpl) {?><!DOCTYPE html>
<html>
<?php echo $_smarty_tpl->getSubTemplate ("config_css.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>



<!--
<br>
<div class="alert alert-success" style="width:200px;height:200px">
第一次錯誤發生時的程式碼
</div>
<a class='btn btn-primary' data-toggle='collapse' data-target='#$collapse_id' style="width:80px;height:80px">修改流程(點此展開)</a>
<br><br>
<textarea id="user_feedback_1" name="user_feedback_1" style="width:200px;height:70px">針對解決此錯誤，總體的想法(overall)  </textarea>
<br>
<div class="alert alert-success" style="width:200px;height:200px">
正確答案
</div>
<br>
-->

<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading">OV_feedback</div>

  <!-- Table -->
  <table class="table">
     <thead>
          <tr>
            <th>#</th>
            <th>error code</th>
            <th>src_fb</th>
            <th>ch_explain</th>
            <th>lv1 </th>
            <th>lv2 </th>
            <th>lv3 </th>
            <th>lv4 </th>
          </tr>
        </thead>

        <?php echo $_smarty_tpl->tpl_vars['html_output']->value;?>

       
  </table>
</div>



</html><?php }} ?>
