<?php
	require_once"require/class/AdManager.class.php";
	require_once"../require/config/Config.php";
	
	$sq = new AdManager;
	$catarray = $sq->getBodyCat(null);
	
	
	/* if was already coded */
	if(!empty($_GET['alter']) && !empty($_GET['cod'])){
		/* Alter Request */
		require_once"require/template/etc/menubody_alter.php";
		exit();
	}
	if(!empty($_GET['del']) && !empty($_GET['cod'])){
		/* Delete Request */
		$_POST['sec'] = 68261;
		require_once"require/template/etc/menubody_del.php";
		exit();
	}
	if(!empty($_GET['addnew']) && ($_GET['addnew'] == 1)){
		/* Add New Request */
		require_once"require/template/etc/menubody_new.php";
		exit();
	}
?>
<p>Alterar Categorias do Corpo</p>
<div>
	<p><a href="?opt=mbody&addnew=1">+ Adicionar</a></p>
	
	<table>
		<tr>
			<th><p>Categoria</p></th>
			<th><p>Código</p></th>
			<th><p>Opções</p></th>
			<th><p>Ordem <a href="javascript:void(0);" title="Salvar ordem" onclick="saveMenuOrder();"><i class="fa fa-floppy-o" aria-hidden="true"></i></a></p></th>
			<th>Subcategorias</th>
		</tr>
		
		<?php
			foreach($catarray as $cat){
		?>
		<tr>
			<td><p><?=$cat[HOME_SIDE_CATEGORY_NAME]?></p></td>
			<td><p>#<?=$cat[DEFAULT_ID]?></p></td>
			<td><p><a href="?opt=mbody&alter=1&cod=<?=$cat[DEFAULT_ID]?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Alterar</a> <a href="?opt=mbody&del=1&cod=<?=$cat[DEFAULT_ID]?>"><i class="fa fa-times" aria-hidden="true"></i> Apagar</a></p></td>
			<td><form action="javascript:void(0);"><input type="number" value="<?=$cat[HOME_SIDE_CATEGORY_ORDER]?>" name="orderMenu"/></form></td>
			<td><a href="?opt=mbody&edit=1&cod=<?=$cat[DEFAULT_ID]?>">Editar Links</a></td>
		</tr>
		<?php } ?>
		
	</table>
</div>