<link type="text/css" rel="stylesheet" href="css/view.css" />
<script type="text/javascript" src="js/view.js"></script>
<title>Produto - SStore</title>


<nav>
	<?php
	require_once(CLASS_DIR."Home.class.php");
	require_once(CLASS_CEP_DIR."BuscaViaCEPJSON.php");
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


<?php  
	$catCode;
	
	$view = $hm->getProducts($cod);
	foreach($view as $viewer){
	$catCode = $viewer[HOME_ASIDE_CATEGORY];
?>
<div>
	<div><span><?=$viewer[HOME_ASIDE_NAME]?></span> (código <?=$viewer[HOME_ASIDE_FID]?>)</div>
	<figure>
		<div><img src=<?=PRODUCTS?>"default-big.png" /></div>
		<img src="<?=PRODUCTS?><?=$viewer[HOME_ASIDE_IMG]?>" />
		<figcaption>
			<ul>
				<?php for($i=0; $i<3; $i++){ ?>
				<li><a href="javascript:void(0);"><img src="<?=PRODUCTS?><?=$viewer[HOME_ASIDE_IMG]?>" /></a></li>
				<?php } ?>
			</ul>
		</figcaption>
	</figure>
		
	<div>
		<div>
			<p>por R$ <?=$viewer[HOME_ASIDE_PRICE2]?> em até 10x de R$ <?=$viewer[HOME_ASIDE_PRICE3]?> sem juros no cartão de crédito</p>
			<p><span>R$ <?=$viewer[HOME_ASIDE_PRICE4]?></span> à vista (10% Desc. já calculado.)</p>
		</div>
		<form><button class="inputButton button input">Comprar</button></form>	
	</div>
	<div>
		<p><i class="fa fa-truck"></i> Calcule o valor do frete até a sua residência!</p>
		<form action="javascript:void(0)">
			
			<button class="inputField button input" onclick="checkTruckPrice();">Calcular</button>
			<input type="text" id="cep" placeholder="00000000" maxlength="8" class="inputField input" required/>
			<div id="correios">
			<div><p>Rua (sem nome), Bairro - Estado</p></div>
			<div><p>Entrega padrão em até 6 dias úteis por R$</p><span> 7,90</span></div></div>
		</form>
	</div>
<div>
	<p>Descrição</p>
	<p>
		<?=$viewer[HOME_ASIDE_DESC]?>
	</p>
</div>
<?php } ?>

<div>
	<ul>
		<li>Avaliação Geral</li>
		<li>Nossa Avaliação</li>
	</ul>
<?php  
	$view = $hm->getRatings($cod);
	foreach($view as $viewer){
?>
		<ul>
			<li>5 <i class="fa fa-star" aria-hidden="true"></i> <?=$viewer[HOME_PROD_RAT_GE5]?> Votos</li>
			<li>4 <i class="fa fa-star" aria-hidden="true"></i> <?=$viewer[HOME_PROD_RAT_GE4]?> Votos</li>
			<li>3 <i class="fa fa-star" aria-hidden="true"></i> <?=$viewer[HOME_PROD_RAT_GE3]?> Votos</li>
			<li>2 <i class="fa fa-star" aria-hidden="true"></i> <?=$viewer[HOME_PROD_RAT_GE2]?> Votos</li>
			<li>1 <i class="fa fa-star" aria-hidden="true"></i> <?=$viewer[HOME_PROD_RAT_GE1]?> Votos</li>
		</ul>
		<ul>
			<li>5 <i class="fa fa-star" aria-hidden="true"></i> <?=$viewer[HOME_PROD_RAT_WE5]?> Votos</li>
			<li>4 <i class="fa fa-star" aria-hidden="true"></i> <?=$viewer[HOME_PROD_RAT_WE4]?> Votos</li>
			<li>3 <i class="fa fa-star" aria-hidden="true"></i> <?=$viewer[HOME_PROD_RAT_WE3]?> Votos</li>
			<li>2 <i class="fa fa-star" aria-hidden="true"></i> <?=$viewer[HOME_PROD_RAT_WE2]?> Votos</li>
			<li>1 <i class="fa fa-star" aria-hidden="true"></i> <?=$viewer[HOME_PROD_RAT_WE1]?> Votos</li>
		</ul>

<?php } ?>
</div>

	<div>
		<p>Produtos Relacionados</p>
		<?php  
			$view = $hm->getRelated($catCode);
			foreach($view as $viewer){
				
		$des = substr($viewer[HOME_ASIDE_DESC], 0, 150);
		$title = substr($viewer[HOME_ASIDE_NAME], 0, 40); ?>
		<div>
			<figure>
				<a href="view.php?product=<?=$viewer[HOME_ASIDE_FID]?>"><img src="<?=PRODUCTS?><?=$viewer[HOME_ASIDE_IMG]?>"/></a>
				<p><a href="view.php?product=<?=$viewer[HOME_ASIDE_FID]?>"><?=$title?></a></p>
				<figcaption>
					<p><?=$des?></p>
				</figcaption>
			</figure>
		</div>
		<?php } ?>
	</div>

	<div>
	<p>Comentários</p>
		<?php  
			$view = $hm->getComments($cod);
			foreach($view as $viewer){
		?>
		<div> <!-- Comment Div -->
			<p><?=$viewer[HOME_PROD_COMMENT_RATING]?> <i class="fa fa-star" aria-hidden="true"></i> <?=$viewer[HOME_PROD_COMMENT_SHORT]?></p>
			<p><?=$viewer[HOME_PROD_COMMENT_TITLE]?></p>
			<p><?=$viewer[HOME_PROD_COMMENT_COMMENT]?></p>
		</div>
		<?php } ?>
	</div>
</div>