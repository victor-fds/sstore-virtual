<?php
	require_once "require/template/header.php";
	
	if(!empty($_GET['product']))
		require_once "require/template/view.php";
	else{
		if(!empty($_GET['cat'])){
			require_once "require/template/category.php";
		} else{
			$_GET['eid'] = 1;
			require_once "require/template/error.php";
		}
	}
		
	require_once "require/template/footer.php";
?>