<?php

require_once("configs/config.php");
require_once("configs/config_header.php");

$smarty = new Smarty;

	//echo $_POST["C_id"] . ".tpl";

  $smarty->display( "C2_all.tpl" );
 

?>