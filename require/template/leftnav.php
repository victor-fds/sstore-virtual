<link type="text/css" rel="stylesheet" href="./css/leftnav.css" />
<?php

	if(isset($_POST['leftabil']) && $_POST['leftabil'] == 1862){
		

<?php		}
	} else {
		require_once "header.php";
		$_GET['eid'] = 2;
		require_once "error.php";
		require_once "footer.php";
	}

?>