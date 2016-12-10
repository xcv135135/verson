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
    '10e0737838b4a574ef135d0c601e7b602cfaf37a' => 
    array (
      0 => '.\\templates\\header.tpl',
      1 => 1393855192,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3111453148b58b29c82-56438690',
  'cache_lifetime' => 120,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_532ff906e1ae74_29185739',
  'has_nocache_code' => true,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_532ff906e1ae74_29185739')) {function content_532ff906e1ae74_29185739($_smarty_tpl) {?><HTML>
<HEAD>
<TITLE>TEST - <?php echo $_smarty_tpl->tpl_vars['Name']->value;?>
</TITLE>
</HEAD>
<BODY bgcolor="#ffffff">



<!DOCTYPE html>
<html>
<head>
	<META http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title><?php echo '<?'; ?>
= _("首頁") <?php echo '?>'; ?>
</title>
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
					<a class="brand" href="/ejp"><?php echo '<?'; ?>
= _("論文寫作引導系統") <?php echo '?>'; ?>
</a>							
					<ul class="nav pull-right">					  				  	
						<li>
							<div class="btn-group">
								<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">    
									<?php echo '<?'; ?>
= _("語系") <?php echo '?>'; ?>
<span class="caret"></span>
								</a>
								<ul class="dropdown-menu">
									<!-- dropdown menu links -->
									<li>
										<a href="<?php echo '<?'; ?>
= get_current_lang_url('cht') <?php echo '?>'; ?>
">中文</a>
									</li>
									<li>
										<a href="<?php echo '<?'; ?>
= get_current_lang_url('eng') <?php echo '?>'; ?>
">English</a>
									</li>
								</ul>
							</div>
						</li>
						<li><a href="register.php"><?php echo '<?'; ?>
= _("免費註冊") <?php echo '?>'; ?>
</a></li>							
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
					<label class="control-label" for="inputEmail"><?php echo '<?'; ?>
= _("管理者帳號") <?php echo '?>'; ?>
</label>
						<div class="controls">
							<input type="text" id="k1" name="account1" placeholder="account">
						</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="inputPassword"><?php echo '<?'; ?>
= _("管理者密碼") <?php echo '?>'; ?>
</label>
						<div class="controls">
							<input type="password" id="k2" name="pw" placeholder="Password">
						</div>
				</div>
				<br/>
				<div class="control-group">
					<div class="controls">					
						<button type="submit" class="btn btn-large btn-primary"><?php echo '<?'; ?>
= _("登入") <?php echo '?>'; ?>
</button>&nbsp;&nbsp;
						<a href="forget.php" class="btn btn-large btn-primary"><?php echo '<?'; ?>
= _("忘記密碼") <?php echo '?>'; ?>
</a>
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
