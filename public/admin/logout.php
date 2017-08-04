<?php

	require_once"../require/config/Config.php";
	session_id(SESSION_ID);
	session_name(SESSION_NAME);	
	session_start();
	session_destroy();
	session_unset();
	echo "Redirecionando em alguns instantes...";
	header("Location: index.php");
?>