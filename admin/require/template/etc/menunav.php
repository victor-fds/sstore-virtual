<?php
	require_once"require/class/AdManager.class.php";
	require_once"../require/config/Config.php";
	
	$sq = new AdManager;
	$catarray = $sq->getMenuCat(null);
	
	
	/* if was already coded */
	if(!empty($_GET['alter']) && !empty($_GET['cod'])){
		/* Alter Request */
		require_once"require/template/etc/menunav_alter.php";
		exit();
	}
	if(!empty($_GET['del']) && !empty($_GET['cod'])){
		/* Delete Request */
		$_POST['delpro'] = 196;
		require_once"require/template/etc/menunav_del.php";
		exit();
	}
	if(!empty($_GET['saveorder']) && ($_GET['saveorder'] == 1)){
		/* Save Order Request */
		$_POST['sec'] = 1888;	
		require_once"require/template/etc/menunav_order.php";
		exit();	
	}
	if(!empty($_GET['addnew']) && ($_GET['addnew'] == 1)){
		/* Add New Request */
		require_once"require/template/etc/menunav_new.php";
		exit();
	}
?>

<p>Alterar Categorias do Menu (topo)</p>
<div>
	<p><a href="?opt=mnav&addnew=1">+ Adicionar</a></p>
	
	<table>
		<tr>
			<th><p>Categoria</p></th>
			<th><p>Código</p></th>
			<th><p>Tipo</p></th>
			<th><p>Esconder (0 = não)</p></th>
			<th><p>Opções</p></th>
			<th><p>Ordem <a href="javascript:void(0);" title="Salvar ordem" onclick="saveMenuOrder();"><i class="fa fa-floppy-o" aria-hidden="true"></i></a></p></th>
		</tr>
		
		<?php
			foreach($catarray as $cat){
			$_POST['catArray'] = $cat[DEFAULT_ID];
		?>
		<tr>
			<td><p><?=$cat[MAIN_NAV_NAME]?></p></td>
			<td><p>#<?=$cat[DEFAULT_ID]?></p></td>
			<td><p><?=$cat[MAIN_NAV_TYPE]?></p></td>
			<td><p><?=$cat[MAIN_NAV_HIDE]?></p></td>
			<td><p><a href="?opt=mnav&alter=1&cod=<?=$cat[DEFAULT_ID]?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Alterar</a> <a href="?opt=mnav&del=1&cod=<?=$cat[DEFAULT_ID]?>"><i class="fa fa-times" aria-hidden="true"></i> Apagar</a></p></td>
			<td><form action="javascript:void(0);"><input type="number" value="<?=$cat[MAIN_NAV_ORDER]?>" name="orderMenu"/></form></td>
		</tr>
		<?php } ?>
		
	</table>
</div>