<?php
	$sq = new AdManager;
	$products = $sq->getProducts($_GET['cod']);
	
	foreach($products as $prod){
?>
<p>Editar Produto</p>
<form action="javascript:void(0);">	
	<div>
		<label for="nav_name" class="input">Nome </label>
		<input class="inputButton input" id="nav_name" type="text" value="<?=$prod[HOME_ASIDE_NAME]?>" required/>
		<p>*A acentuação será "formalizada" automaticamente para a linguagem do banco de dados.<br> Caso precise de ajuda <a href="">clique aqui</a>*</p>
	</div>
	<div>
		<label for="hide" class="input">Esconder</label>
		<input class="input" type="radio" id="hide" value="1" name="hide" required="true"/> Sim<br>
		<input class="input" type="radio" id="hide" value="0" name="hide" required="true" checked="checked"/> Não
	</div>
	<div>
		<label for="img_ref" class="input">Link da Imagem </label>
		<input class="inputButton input" id="img_ref" type="text" value="<?=$prod[HOME_ASIDE_IMG]?>" placeholder="Se não souber deixe vazio" />
	</div>
	<div>
		<label for="des" class="input">Descrição </label>
		<textarea cols="30" rows="5" class="inputButton input" id="des" value="<?=$prod[HOME_ASIDE_DESC]?>" maxlength="500" required="true" wrap="hard"></textarea>
	</div>
	<div>
		<label for="price" class="input">Preço 1 R$: </label>
		<input class="inputButton input" id="price" value="<?=$prod[HOME_ASIDE_PRICE1]?>" type="text" required/>
		<p>*Preço anterior (se tiver desconto)</p>
	</div>
	<div>
		<label for="price2" class="input">Preço 2 R$: </label>
		<input class="inputButton input" id="price2" type="text" value="<?=$prod[HOME_ASIDE_PRICE2]?>" required/>
		<p>*Preço novo (atual ou à prazo)</p>
	</div>
	<div>
		<label for="price3" class="input">Preço 3 R$: </label>
		<input class="inputButton input" id="price3" type="text" value="<?=$prod[HOME_ASIDE_PRICE3]?>" required/>
		<p>*Preço em 10x</p>
	</div>
		<div>
		<label for="price4" class="input">Preço 4 R$: </label>
		<input class="inputButton input" id="price4" type="text" value="<?=$prod[HOME_ASIDE_PRICE4]?>" required/>
		<p>*Preço a vista (se for diferente do preço 2)</p>
	</div>
	<div>
		<button class="inputButton button input" onclick="addnewProduct();">Salvar</button>
		<button class="inputButton input button" onclick="javascript:history.back();">Cancelar</button>
	</div>
	<div><span></span></div>
</form>
<?php } ?>