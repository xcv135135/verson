<?php /* Smarty version Smarty-3.1.16, created on 2015-04-07 09:49:33
         compiled from ".\templates\register.tpl" */ ?>
<?php /*%%SmartyHeaderCode:30853316adc0c68d5-84435443%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5e9489e0e0cf9cf9b13f913ba886d8ccac28fd30' => 
    array (
      0 => '.\\templates\\register.tpl',
      1 => 1428392972,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30853316adc0c68d5-84435443',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_53316adc0fbd67_08732593',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53316adc0fbd67_08732593')) {function content_53316adc0fbd67_08732593($_smarty_tpl) {?><!DOCTYPE html>
<html>
<?php echo $_smarty_tpl->getSubTemplate ("config_css.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>




<style type="text/css">

body {
  padding-top: 100px;
  padding-bottom: 40px;
  background-color: #eee;
}
.form-signin .form-signin-heading,
.form-signin .checkbox {
  margin-bottom: 10px;
}
.form-signin .checkbox {
  font-weight: normal;
}
.form-signin .form-control {
  position: relative;
  height: auto;
  -webkit-box-sizing: border-box;
     -moz-box-sizing: border-box;
          box-sizing: border-box;
  padding: 10px;
  font-size: 16px;
}
.form-signin .form-control:focus {
  z-index: 2;
}
.form-signin input[type="email"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
.form-signin input[type="password"] {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
 </style>







<body>

    <div class="container">

	<form class="form-signin" name="register" method="post" action="register_action.php" >
		<h2 class="form-signin-heading">Create an account</h2>
	    	

	    <input type="text" name="name1" class="form-control" placeholder="請輸入帳號"/>
		 

		<input type="password" name="password1"  class="form-control" placeholder="請輸入密碼"/>


		<input type="password" name="password2" class="form-control"  placeholder="請再次輸入密碼"/>


		<label for="inputEmail" class="sr-only">Email address</label>
	     <input type="email" id="inputEmail" name="mail1" class="form-control" placeholder="Email address" required autofocus>
<label class="checkbox">
		<span style="color: #F00;">此信箱為忘記密碼通知用</span>
</label >

	     <button class="btn btn-lg btn-primary btn-block" type="submit">確定</button>
		 <input type="button" class="btn btn-lg btn-primary btn-block" value="取消" onclick="history.back()" />
	 
	</form>


    </div> <!-- /container -->


 </body>

</html>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
