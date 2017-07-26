<link type="text/css" rel="stylesheet" href="require/css/home.css" />
<title>Inicio - SStore</title>
<div>
</div>

<aside>
	<?php 
		require_once "require/class/Home.class.php";
		require_once "require/config/Config.php";
		$hm = new Home();
		
		$row = $hm->getBoxItems();
		foreach($row as $box){
		?>
	
		<div>
			<figure>
				<a href="view.php?product=<?=$box[HOME_ASIDE_FID]?>"><img src="<?=$box[HOME_ASIDE_IMG]?>" /></a>
			</figure>
				<figcaption>
					<ul>
						<li><a href="view.php?product=<?=$box[HOME_ASIDE_FID]?>"><?php print substr($box[HOME_ASIDE_NAME], 0, 120); ?></a></li>
						<li><?php print substr($box[HOME_ASIDE_DESC], 0, 200) . "..."; ?></li>
						<li>de: <span>R$ <?=$box[HOME_ASIDE_PRICE1]?></span></li>
						<li>por: <span>R$ <?=$box[HOME_ASIDE_PRICE2]?></span></li>
						<li>10x sem juros de <span>R$ <?=$box[HOME_ASIDE_PRICE3]?></span></li>
						<li>via Boleto ou Débito: <span>R$ <?=$box[HOME_ASIDE_PRICE4]?></span></li>
					</ul>
				</figcaption>				
		</div>
	
	<?php
		}
	?>
</aside>

<nav>
	<?php
	$row = $hm->getSideCategories();
	foreach($row as $box){
	?>	
	<ul>
		<li>
			<img src="<?=IMAGES?>plus.png" /> <?=$box[HOME_SIDE_CATEGORY_NAME]?>
			
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
	<div>
	<?php 
		$row = $hm->getVitrinItems();
		foreach($row as $box){
		?>			
			<div>
				<figure>
					<a href="view.php?product=<?=$box[HOME_ASIDE_FID]?>"><img src="<?=$box[HOME_ASIDE_IMG]?>" /></a>
					<figcaption>
						<ul>
							<li><!-- Estrelas --></li>
						<li><a href="view.php?product=<?=$box[HOME_ASIDE_FID]?>"><?php print substr($box[HOME_ASIDE_NAME], 0, 40); ?></a></li>
						<li><?php print substr($box[HOME_ASIDE_DESC], 0, 120). "..."; ?></li>
						<li>de: <span>R$ <?=$box[HOME_ASIDE_PRICE1]?></span></li>
						<li>por: <span>R$ <?=$box[HOME_ASIDE_PRICE2]?></span></li>
						<li>10x sem juros de <span>R$ <?=$box[HOME_ASIDE_PRICE3]?></span></li>
						<li>via Boleto ou Débito: <span>R$ <?=$box[HOME_ASIDE_PRICE4]?></span></li>
						</ul>
					</figcaption>
				</figure>
			</div>
			
		<?php } ?>
	</div>
	
	<?php for($i=0; $i<2; $i++){ ?>
	<aside>
		
	</aside>
	<?php } ?>
</div>