<?php /* Smarty version Smarty-3.1.16, created on 2015-04-07 09:48:29
         compiled from ".\templates\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16382532ff9278de1a7-02856720%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '749422d4cfc3eb5677cf499730392b6accd4d1c7' => 
    array (
      0 => '.\\templates\\index.tpl',
      1 => 1428392908,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16382532ff9278de1a7-02856720',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_532ff927913085_92245722',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_532ff927913085_92245722')) {function content_532ff927913085_92245722($_smarty_tpl) {?><!DOCTYPE html>
<html>
<?php echo $_smarty_tpl->getSubTemplate ("config_css.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


	<script>
		//判斷是否有輸入必要的欄位
		function check_form(){
			if (!$("#k1").val()) {
				alert("『帳號』欄位不可以是空白");
				window.event.returnValue = false;
			} 				
			else if (!$("#k2").val()){	 	  
				alert("『密碼』欄位不可以是空白");
				window.event.returnValue = false;
			}
		}
	</script>



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

      <form class="form-signin" action="login_action.php" method="post" onsubmit="check_form();">
        <h2 class="form-signin-heading">Please sign in</h2>

        <input type="text" id="k1" name="account1" class="form-control" placeholder="請輸入帳號" >

		<input type="password" id="k2" name="pw" class="form-control" placeholder="請輸入密碼" >

		 <label class="checkbox">
			<a href="forget.php">忘記密碼</a>	
		 </label>
		<button type="submit" class="btn btn-lg btn-primary btn-block">登入</button>

		<a href="./register.php" class="btn btn-lg btn-primary btn-block">註冊</a>

      </form>

    </div> <!-- /container -->


 </body>


<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</html>

<?php }} ?>
