<!DOCTYPE html>
<html>
{include file="config_css.tpl"}


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

        {$html_output}
       
  </table>
</div>



</html>