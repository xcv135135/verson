<?php /* Smarty version Smarty-3.1.16, created on 2014-03-24 10:21:10
         compiled from ".\templates\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3111453148b58b29c82-56438690%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '749422d4cfc3eb5677cf499730392b6accd4d1c7' => 
    array (
      0 => '.\\templates\\index.tpl',
      1 => 1395652861,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3111453148b58b29c82-56438690',
  'function' => 
  array (
  ),
  'cache_lifetime' => 120,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_53148b58c8cb39_08671274',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53148b58c8cb39_08671274')) {function content_53148b58c8cb39_08671274($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('title'=>'TEST'), 0);?>



<!DOCTYPE html>
<html>
<head>
	<META http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title><<?php ?>?= _("首頁") ?<?php ?>></title>
	<link href="css/bootstrap.css" rel="stylesheet">
	<script src="js/jquery-1.8.2.min.js"></script> 
	<script src="js/bootstrap.min.js"></script>
	<script>
		//判斷是否有輸入必要的欄位
		function check_form(){
			if (!$("#k1").val()) {
				alert("『Email』欄位不可以是空白");
				window.event.returnValue = false;
			} 				
			else if (!$("#k2").val()){	 	  
				alert("『密碼』欄位不可以是空白");
				window.event.returnValue = false;
			}
		}
	</script>
</head>

<body style="background-attachment : fixed; background-repeat:no-repeat; background-position: center center; background-size:contain; background-image : url('./teaching_material/three.png');">
<div class="container-fluid">
	<div class="row-fluid">
	  <div class="row-fluid">
		<div class="span12" align="center">
		  <div class="navbar">							
				<div class="navbar-inner">			
					<a class="brand" href="/ejp"><<?php ?>?= _("論文寫作引導系統") ?<?php ?>></a>							
					<ul class="nav pull-right">					  				  	
						<li>
							<div class="btn-group">
								<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">    
									<<?php ?>?= _("語系") ?<?php ?>><span class="caret"></span>
								</a>
								<ul class="dropdown-menu">
									<!-- dropdown menu links -->
									<li>
										<a href="<<?php ?>?= get_current_lang_url('cht') ?<?php ?>>">中文</a>
									</li>
									<li>
										<a href="<<?php ?>?= get_current_lang_url('eng') ?<?php ?>>">English</a>
									</li>
								</ul>
							</div>
						</li>
						<li><a href="register.php"><<?php ?>?= _("免費註冊") ?<?php ?>></a></li>							
					</ul>
				</div>
			</div>
		</div>	
	  </div>
	  <div class="row-fluid">  
		<div class="span5 offset2">
		
				<div class="tab-content">
					<div class="tab-pane active" id="tab1">
				
			<form action="login.php" class="form-horizontal" method="post" onsubmit="check_form();">
				<div  class="control-group">
					<label class="control-label" for="inputEmail"><<?php ?>?= _("管理者帳號") ?<?php ?>></label>
						<div class="controls">
							<input type="text" id="k1" name="account1" placeholder="account">
						</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="inputPassword"><<?php ?>?= _("管理者密碼") ?<?php ?>></label>
						<div class="controls">
							<input type="password" id="k2" name="pw" placeholder="Password">
						</div>
				</div>
				<br/>
				<div class="control-group">
					<div class="controls">					
						<button type="submit" class="btn btn-large btn-primary"><<?php ?>?= _("登入") ?<?php ?>></button>&nbsp;&nbsp;
						<a href="forget.php" class="btn btn-large btn-primary"><<?php ?>?= _("忘記密碼") ?<?php ?>></a>
					</div>
				</div>

			</form>
		   </div>
		</div>    
	  </div>
	  <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
		<hr/>
	
	</div>
</div>
</body>
</html>
<?php }} ?>
