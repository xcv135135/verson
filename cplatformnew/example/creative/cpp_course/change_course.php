<?php

require_once("configs/config.php");

$smarty = new Smarty;

	//echo $_POST["C_id"] . ".tpl";

  $smarty->display( $_POST["C_id"] .".tpl" );
?>