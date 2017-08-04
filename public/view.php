<?php
	require_once"../private/config.php";
	require_once(LAYOUT_DIR."header.php");
	
	if(!empty($_GET['product']))
		require_once(LAYOUT_DIR."view.php");
	else {
		if(!empty($_GET['cat'])){
			require_once(LAYOUT_DIR."category.php");
		} else {
			if(!empty($_GET['page'])){
				switch($_GET['page']){
				case "requests":
					require_once(LAYOUT_DIR."requests.php"); break;
				case "account":
					require_once(LAYOUT_DIR."account.php"); break;
				case "logout":
					require_once(LAYOUT_DIR."logout.php"); break;			
				case "cart":
					require_once(LAYOUT_DIR."cart.php"); break;
				}
			} 
		}
	}
				
	require_once(LAYOUT_DIR."footer.php");
?>