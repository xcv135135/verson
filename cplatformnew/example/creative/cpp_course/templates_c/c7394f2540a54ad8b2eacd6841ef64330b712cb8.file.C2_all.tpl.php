<?php /* Smarty version Smarty-3.1.16, created on 2015-03-17 14:12:13
         compiled from ".\templates\C2_all.tpl" */ ?>
<?php /*%%SmartyHeaderCode:126435507c5bd753d77-91495797%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c7394f2540a54ad8b2eacd6841ef64330b712cb8' => 
    array (
      0 => '.\\templates\\C2_all.tpl',
      1 => 1426572726,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '126435507c5bd753d77-91495797',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5507c5bd796404_98642988',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5507c5bd796404_98642988')) {function content_5507c5bd796404_98642988($_smarty_tpl) {?><!DOCTYPE html>
<html>

<?php echo $_smarty_tpl->getSubTemplate ("config_css.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<br>
<br>
<br>

<script type="text/javascript" language="javascript">
  
  function AA(){
//alert(  $("#C1_4_1").offset().top );
//alert( $('#C1_4_1').position().top);
//$('html, body').scrollTop( $('#C1_4_1').position().top-50  );

  }


</script>


  <body>






    <div class="container" id="container">


  		<div id="C2">
      		<?php echo $_smarty_tpl->getSubTemplate ('templates\C2.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

      </div>

      <div id="C2_1">
          <?php echo $_smarty_tpl->getSubTemplate ('templates\C2_1.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

      </div>
      <div id="C2_2">
          <?php echo $_smarty_tpl->getSubTemplate ('templates\C2_2.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

      </div>
      <div id="C2_2_1">
          <?php echo $_smarty_tpl->getSubTemplate ('templates\C2_2_1.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

      </div>
      <div id="C2_2_2">
          <?php echo $_smarty_tpl->getSubTemplate ('templates\C2_2_2.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

      </div>
      <div id="C2_2_3">
          <?php echo $_smarty_tpl->getSubTemplate ('templates\C2_2_3.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

      </div>
      <div id="C2_2_4">
          <?php echo $_smarty_tpl->getSubTemplate ('templates\C2_2_4.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

      </div>
      <div id="C2_3">
          <?php echo $_smarty_tpl->getSubTemplate ('templates\C2_3.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

      </div>
      
      <div id="C2_abs">
          <?php echo $_smarty_tpl->getSubTemplate ('templates\C2_abs.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

      </div>



    </div>
  </body>
  <?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


</html><?php }} ?>
