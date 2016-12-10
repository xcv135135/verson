<?php /* Smarty version Smarty-3.1.16, created on 2015-04-25 10:19:48
         compiled from ".\templates\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21343532ff927925f89-31317498%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '10e0737838b4a574ef135d0c601e7b602cfaf37a' => 
    array (
      0 => '.\\templates\\header.tpl',
      1 => 1429949986,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21343532ff927925f89-31317498',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_532ff92792d407_33136778',
  'variables' => 
  array (
    'is_login' => 0,
    'login_content' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_532ff92792d407_33136778')) {function content_532ff92792d407_33136778($_smarty_tpl) {?>
  <div class="navbar navbar-fixed-top navbar-inverse" role="navigation">
    
        <div class="navbar-header">
          
          <a class="navbar-brand" href="./main.php">C++ course</a>
        </div>
        
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li ><a href="./main.php">Home</a></li>
           <!--  <li ><a href="./Profile.php">Profile</a></li>
            <li><a href="#contact">Contact</a></li> -->
          </ul>

          <?php if (!$_smarty_tpl->tpl_vars['is_login']->value) {?>
            
          <?php } else { ?>
             <?php echo $_smarty_tpl->tpl_vars['login_content']->value;?>
   

          <?php }?>
         
        </div><!-- /.nav-collapse -->
   
  </div><!-- /.navbar -->


<?php }} ?>
