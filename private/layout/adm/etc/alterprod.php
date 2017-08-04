<?php
	require_once"require/class/AdManager.class.php";
	require_once"../require/config/Config.php";
	
	$sq = new AdManager;
	$catprod = $sq->getProducts(null);
	
	
	/* if was already coded */
	if(!empty($_GET['alter']) && !empty($_GET['cod'])){
		/* Alter Request */
		require_once"require/template/etc/alterprod_alter.php";
		exit();
	}
	if(!empty($_GET['del']) && !empty($_GET['cod'])){
		/* Delete Request */
		$_POST['delpro'] = 196;
		require_once"require/template/etc/menunav_del.php";
		exit();
	}
?>

<p>Alterar Produtos</p>
<div>
	<p><a href="?opt=addprod">+ Adicionar</a></p>
	<p><a href="?opt=addprod&search=1">+ Buscar por produto</a></p>
	<table>
		<tr>
			<th><p>Nome</p></th>
			<th><p>Código</p></th>
			<th><p>Esconder (0 = não)</p></th>
			<th><p>Opções</p></th>
		</tr>
		
		<?php
			foreach($catprod as $prod){
		?>
		<tr>
			<td><p><?=$prod[HOME_ASIDE_NAME]?></p></td>
			<td><p>#<?=$prod[HOME_ASIDE_FID]?></p></td>
			<td><p><?=$prod[HOME_ASIDE_HIDE]?></p></td>
			<td><p><a href="?opt=alterprod&alter=1&cod=<?=$prod[HOME_ASIDE_FID]?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Alterar</a> <a href="?opt=alterprod&del=1&cod=<?=$prod[HOME_ASIDE_FID]?>"><i class="fa fa-times" aria-hidden="true"></i> Apagar</a></p></td>
		</tr>
		<?php } ?>
		
	</table>
</div>