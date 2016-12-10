<?php /* Smarty version Smarty-3.1.16, created on 2015-04-07 09:55:00
         compiled from ".\templates\Profile.tpl" */ ?>
<?php /*%%SmartyHeaderCode:25646541a9cd2487e03-61475565%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eaa1ac5e3ae2e60967b1fc06713a4872440aa284' => 
    array (
      0 => '.\\templates\\Profile.tpl',
      1 => 1428393299,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25646541a9cd2487e03-61475565',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_541a9cd2488949_40345396',
  'variables' => 
  array (
    'name' => 0,
    'pw' => 0,
    'mail' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_541a9cd2488949_40345396')) {function content_541a9cd2488949_40345396($_smarty_tpl) {?><!DOCTYPE html>
<html>


<?php echo $_smarty_tpl->getSubTemplate ("config_css.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<script>
//判斷是否有輸入必要的欄位
    function check_form(){
      if (!$("#name").val()) {
        alert("『帳號』欄位不可以是空白");
        window.event.returnValue = false;
      }         
      else if (!$("#password").val()){      
        alert("『密碼』欄位不可以是空白");
        window.event.returnValue = false;
      }
      else if (!$("#mail").val()){      
        alert("『email』欄位不可以是空白");
        window.event.returnValue = false;
      }

    }
</script>

<style type="text/css">

body {
  padding-top: 60px;
  padding-bottom: 40px;
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

    <div class="container" >
       <div class="jumbotron" >
       <form class="form-signin"  name="profile_update" method="post" action="profile_update.php" onsubmit="check_form();" >
         <h2 class="form-signin-heading">Profile</h2>
                  
          <input type="text" id="name" name="name" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" readonly/>
          
            <input type="password" id="password" name="password"class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['pw']->value;?>
"/>
            
        
            <input type="text" id="mail" name="mail" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['mail']->value;?>
"/>

        
             <input type="submit" class="btn btn-lg btn-primary btn-block" value="修改" />
             <input type="button" class="btn btn-lg btn-primary btn-block" value="取消" onclick="history.back()" />
             <br><br><br><br><br><br><br><br><br>
                       
         </form>
        </div> 

    </div> <!-- /container -->


 </body>




<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


</html><?php }} ?>
