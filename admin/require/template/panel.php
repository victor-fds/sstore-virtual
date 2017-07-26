<?php
	require_once"../require/config/Config.php";
?>
<link type="text/css" rel="stylesheet" href="require/css/panel.css" />
<script type="text/javascript" src="require/js/admin.js"></script>
<title>Admin - SStore</title>
<?php
	/*Global to see the checked item*/
	$check = $_GET['opt'];
?>
	<nav>
		<ul>
			<li><a href="?opt=alinks" class="<?php if($check == "alinks") echo "marked" ?>"><i class="fa fa-circle" aria-hidden="true"></i> Links do Topo</a></li>
			<li><a href="?opt=mnav" class="<?php if($check == "mnav") echo "marked" ?>"><i class="fa fa-circle" aria-hidden="true"></i> Categorias do Menu</a></li>
			<li><a href="?opt=mbody" class="<?php if($check == "mbody") echo "marked" ?>"><i class="fa fa-circle" aria-hidden="true"></i> Categorias do Corpo</a></li>
			<li><p><i class="fa fa-circle" aria-hidden="true"></i> Produtos</p>
				<ul>
					<li><a href="?opt=addprod" class="<?php if($check == "addprod") echo "marked" ?>"><i class="fa fa-dot-circle-o" aria-hidden="true"></i> Cadastrar</a></li>
					<li><a href="?opt=alterprod" class="<?php if($check == "alterprod") echo "marked" ?>"><i class="fa fa-dot-circle-o" aria-hidden="true"></i> Alterar/Remover</a></li>
				</ul>
			</li>
			
			<li><a href="javascript:void(0);" onclick="logoutAdm();">Logout</a></li>
		</ul>
	</nav>

	<div>
		<p>Administração <i class="fa fa-user-plus" aria-hidden="true"></i></p>
		<?php if(empty($_GET['opt'])) echo"<p>Olá, selecione uma categoria para editar</p>"; ?>
	</div>

<section>
<?php
	switch($check){
		case "alinks":
			require_once"require/template/etc/alinks.php";
			break;		
		case "mnav":
			require_once"require/template/etc/menunav.php";
			break;
		case "mbody":
			require_once"require/template/etc/menubody.php";
			break;
		case "addprod":
			require_once"require/template/etc/addproduct.php";
			break;
		case "alterprod":
			require_once"require/template/etc/alterprod.php";
			break;
	}
?>	
</section>
