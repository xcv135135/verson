<?php /* Smarty version Smarty-3.1.16, created on 2014-08-25 15:44:22
         compiled from "header.php" */ ?>
<?php /*%%SmartyHeaderCode:133853fb3db6d7af71-19507715%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6314feee14ea09173c34632864f7659d9d5a5a84' => 
    array (
      0 => 'header.php',
      1 => 1408974242,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '133853fb3db6d7af71-19507715',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_53fb3db6d7f498_18192104',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53fb3db6d7f498_18192104')) {function content_53fb3db6d7f498_18192104($_smarty_tpl) {?><<?php ?>?php

require_once("configs/config.php");
require_once("configs/connection.php");

$smarty = new Smarty;

if( $_SESSION['logincheck'] != true )
	header("Location: index.php"); 
else{
	$login_content .= '<a class="navbar-brand" href="#">'.  $_SESSION['name'] .'</a>';
	$login_content .= '<button type="submit" class="btn btn-success">登出</button>';
	$smarty -> assign("login_content" , $login_content);
}
	
	

//$smarty->force_compile = true;


$smarty->display('header.tpl');
?<?php ?>><?php }} ?>
