<?php
	require_once"require/class/AdManager.class.php";
	require_once"../require/config/Config.php";
	
	//$sq = new AdManager;
	//$catarray = $sq->getTopLinks(null);
	
	
	/* if was already coded */
	if(!empty($_GET['alter']) && !empty($_GET['cod'])){
		/* Alter Request */
		require_once"require/template/etc/alinks_alter.php";
		exit();
	}
	if(!empty($_GET['del']) && !empty($_GET['cod'])){
		/* Delete Request */
		$_POST['sec'] = 68261;
		require_once"require/template/etc/alinks_del.php";
		exit();
	}
	if(!empty($_GET['addnew']) && ($_GET['addnew'] == 1)){
		/* Add New Request */
		require_once"require/template/etc/alinks_new.php";
		exit();
	}
?>
<p>Alterar Links do Topo</p><!--
<div>
	<p><a href="?opt=alinks&addnew=1">+ Adicionar</a></p>
	
	<table>
		<tr>
			<th><p>Categoria</p></th>
			<th><p>Código</p></th>
			<th><p>Opções</p></th>
			<th><p>Ordem <a href="javascript:void(0);" title="Salvar ordem" onclick="saveMenuOrder();"><i class="fa fa-floppy-o" aria-hidden="true"></i></a></p></th>
		</tr>
		
		<?php
		//	foreach($catarray as $cat){
		?>
		<tr>
			<td><p><?=$cat[MAIN_NAV_ALINKS_NAME]?></p></td>
			<td><p>#<?=$cat[DEFAULT_ID]?></p></td>
			<td><p><a href="?opt=alinks&alter=1&cod=<?=$cat[DEFAULT_ID]?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Alterar</a> <a href="?opt=alinks&del=1&cod=<?=$cat[DEFAULT_ID]?>"><i class="fa fa-times" aria-hidden="true"></i> Apagar</a></p></td>
			<td><form action="javascript:void(0);"><input type="number" value="<?=$cat[MAIN_NAV_ALINKS_ORDER]?>" name="orderMenu"/></form></td>
		</tr>
		<?php// } ?>
		
	</table>-->
	<div><span>**Em manutenção**</span></div>
</div>