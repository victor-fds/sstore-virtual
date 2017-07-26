<?php
require_once"require/config/Config.php";
require_once"require/class/CatManager.class.php";

?>

<!DOCTYPE html>
<html lang="PT-br">
	<head>
		<link type="text/css" rel="stylesheet" href="require/css/header.css"/>
		<script src="https://use.fontawesome.com/8b27cf3b17.js"></script>
		<script type="text/javascript" src="require/js/jquery.js"></script>
	</head>
	<body>
			<header>
				<div>
					<ul>
						<li><a href="#"><i class="fa fa-truck" aria-hidden="true"></i> Frete grátis*</a></li>
						<li><a href="#"><i class="fa fa-phone" aria-hidden="true"></i> Fale conosco</a></li>
						<li><a href="#"><i class="fa fa-arrows-h" aria-hidden="true"></i> SSobre nós</a></li>
					</ul>
				</div>
				
				
				<div>
					<figure>
						<a href="<?=SRC?>"><img src="<?=LOGOS?>header-logo.png" title="Inicio"/></a>
					</figure>
					
					<form action="javascript:void(0);">
						<div><input type="search" class="inputButton input" placeholder="Buscar por produtos ou itens..." required/>
						<button class="inputButton button">Procurar</button></div>
						<div><span>SStore - O melhor negócio está aqui!</span></div>
					</form>
					<section>
						<div><a href="cart.php"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Carrinho (<?php echo $_SESSION['products'] = 3; ?>)</a></div>
						<div><a href="login.php"><i class="fa fa-user" aria-hidden="true"></i> Minha Conta</a></div>
					</section>
				</div>
			
				<nav>
					<ul>
						<?php 
						$cm = new CatManager();
						
						$first = $cm->getFirstOrLast(1);
						foreach($first as $name){ ?>
						<li class="fistNavCategory"><a href="view.php?cat=<?=$menuItems[MAIN_NAV_MAIN_LINK]?>"><?=$name[MAIN_NAV_NAME]?></a></li>
						<?php } ?>
						
						<?php
						$navItems = $cm->getNavCat();
						foreach($navItems as $menuItems)
						{
							if(!$menuItems[MAIN_NAV_HIDE] && ($menuItems[MAIN_NAV_TYPE] == 0)){
							
						?>
						<li>						
							<a href="view.php?cat=<?=$menuItems[MAIN_NAV_MAIN_LINK]?>"><?=$menuItems[MAIN_NAV_NAME]?></a>
							<ul>
								<figure>
									<img src="<?=$menuItems[MAIN_NAV_IMG_REF]?>" title="" />
									<figcaption>
										<p><?=$menuItems[MAIN_NAV_TITLE]?></p>
										<span>
										<?php
											$desc = $menuItems[MAIN_NAV_DES];
											echo substr($desc,0,350).'...';
										?>
										</span>
										<a href="<?=$menuItems[MAIN_NAV_MAIN_LINK]?>">Confira -></a>
									</figcaption>
								</figure>
								
								<?php 
									$alinks = $cm->getNavLinks($menuItems[MAIN_NAV_LINK_ARRAY_ID]);
									foreach($alinks as $alinksrow){
								?>
								
								<li><a href="<?=$alinksrow[MAIN_NAV_ALINKS_LINK]?>"><?=$alinksrow[MAIN_NAV_ALINKS_NAME]?></a></li>
								
								<?php } ?>
							</ul>
						</li>
						<?php 
								}
							}
					
						$last = $cm->getFirstOrLast(2);
						foreach($last as $name){ ?>
						<li class="lastNavCategory"><a href="view.php?cat=<?=$menuItems[MAIN_NAV_MAIN_LINK]?>"><?=$name[MAIN_NAV_NAME]?></a></li>
						<?php } ?>
					</ul>
				</nav>
				
			</header>
			
			<main>