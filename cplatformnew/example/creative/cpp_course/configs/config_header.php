<?php

  $smarty = new Smarty;

  $smarty->assign("is_login", $is_login);

  
  if( ($_SESSION['logincheck'] != true) || ($is_login != true) )
      header("Location: index.php"); 
 
  $login_content="";
  //$login_content .= '<form class=" navbar-right" action="logout_action.php" class="form-horizontal" method="post">';
  $login_content .= '<a class=" navbar-right" class="form-horizontal" href="#">'.$_SESSION['username'] .'</a>';
  //$login_content .= '<button type="submit" class="btn btn-default btn-success">登出</button>';
  //$login_content .= '</form>';


  $smarty -> assign("login_content" , $login_content);
  

?>