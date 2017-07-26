<?php

	$error = isset($_GET['eid']) ? $_GET['eid'] : null;
	switch($error){
		case 1:
			echo "<div><center><br><p>Não foi possivel encontrar este produto (view.php)</p></center></div>";
			break;
		default:
			echo "<center><br>Erro desconhecido</center>";
			break;
	}

?>