<?php 
	require_once"require/template/header.php"; 
	require_once"../require/config/Config.php"; 
	
	if(session_start() && !empty($_SESSION[ADM_LOGIN]) && ($_SESSION[ADM_LOGIN] > 0))
		require_once"require/template/panel.php";
	else
		require_once"require/template/home.php"; 
	require_once"require/template/footer.php"; 
?>
