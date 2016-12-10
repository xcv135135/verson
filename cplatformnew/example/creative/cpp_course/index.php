<?php

 require_once("configs/config.php");
  
  $smarty = new Smarty;

	

//$smarty->force_compile = true;


$smarty->display('index.tpl');
?>