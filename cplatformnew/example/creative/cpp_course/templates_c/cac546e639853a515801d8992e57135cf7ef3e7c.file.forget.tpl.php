<?php /* Smarty version Smarty-3.1.16, created on 2015-03-27 10:54:59
         compiled from ".\templates\forget.tpl" */ ?>
<?php /*%%SmartyHeaderCode:273855332d45fe2b967-68357353%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cac546e639853a515801d8992e57135cf7ef3e7c' => 
    array (
      0 => '.\\templates\\forget.tpl',
      1 => 1427450098,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '273855332d45fe2b967-68357353',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5332d45fe59270_03917135',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5332d45fe59270_03917135')) {function content_5332d45fe59270_03917135($_smarty_tpl) {?><html>
<?php echo $_smarty_tpl->getSubTemplate ("config_css.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


	<script>
		//判斷是否有輸入必要的欄位
		function check_form(){
			if (!$("#k1").val()) {
				alert("『帳號』欄位不可以是空白");
				window.event.returnValue = false;
			}

			
			$.get("forget_action.php", { account1: $("input[name='account1']").val() }, 
				function(data) {
					if(data == 0)
						alert("無此帳號");
					else
						alert(data);
				}
			);				
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

      <div class="form-signin" >
        <h2 class="form-signin-heading">忘記密碼</h2>

        <input type="text" id="k1" name="account1" class="form-control" placeholder="請輸入帳號" >
		密碼會寄到您的信箱
		<br><br>
		<input type="button" class="btn btn-lg btn-primary btn-block" value="寄信" onclick="check_form();" />
		<input type="button" class="btn btn-lg btn-primary btn-block" value="返回" onclick="history.back();" />

      </div>

    </div> <!-- /container -->


 </body>






	
</html>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
