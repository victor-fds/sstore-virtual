<?php

	require_once"require/class/AdManager.class.php";
	
	if(!empty($_POST['delpro']) && !empty($_GET['cod']) && ($_POST['delpro'] == 196)){
		$com = new AdManager;
		$com->deleteMenuCat($_GET['cod']);
		print "Categoria de id ".$_GET['cod']." deletada com sucesso.";		
	} else {
		print "Não foi possível deletar o item requerido.";
	}
	
?>