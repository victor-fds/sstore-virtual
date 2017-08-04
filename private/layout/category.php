<link type="text/css" rel="stylesheet" href="css/category.css" />
<title>Categoria - SStore</title>

<nav>
	<?php
	require_once(CLASS_DIR."Home.class.php");
	$cod = $_GET['product'];
	
	$hm = new Home();
	
	$row = $hm->getSideCategories();
	foreach($row as $box){
	?>	
	<ul>
		<li>
			<i class="fa fa-plus" aria-hidden="true"></i> <?=$box[HOME_SIDE_CATEGORY_NAME]?>
			
			<?php  
				$row2 = $hm->getSideSubCategories($box[HOME_SIDE_CATEGORY_REF]);
				foreach($row2 as $sub){
			?>
			<ul>
				<li><a href="<?=$sub[HOME_SIDE_CATEGORY_LINK_A]?>"><?=$sub[HOME_SIDE_CATEGORY_LINK_TITLE]?></a></li>
			</ul>
			<?php } ?>
		</li>
	</ul>
	<?php } ?>
</nav>

<div>

</div>