<?php

	require_once"require/class/AdManager.class.php";
	
	if(!empty($_GET['del']) && !empty($_GET['cod']) && ($_POST['sec'] == 68261)){
		$com = new AdManager;
		$com->deleteBodyCat($_GET['cod']);
		print "Categoria de id ".$_GET['cod']." deletada com sucesso.";		
	} else {
		print "Não foi possível deletar o item requerido.";
	}
	
?>