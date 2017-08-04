<?php
	$sq = new AdManager;
	$catarray = $sq->getMenuCat($_GET['cod']);
	
	foreach($catarray as $cat){
?>
<p>Alterar Categoria (menu)</p>
<form action="javascript:void(0);">
	<div>
		<label for="id" class="input">Id </label>
		<input class="inputButton input" id="id_" type="text" value="<?=$cat[DEFAULT_ID]?>" disabled="disabled"/>	
	</div>
	
	<div>
		<label for="nav_name" class="input">Nome </label>
		<input class="inputButton input" id="nav_name" type="text" value="<?=$cat[MAIN_NAV_NAME]?>" required/>
		<p>*A acentuação será "formalizada" automaticamente para a linguagem do banco de dados.<br> Caso precise de ajuda <a href="">clique aqui</a>*</p>
	</div>
	<div>
		<div>
			<label for="hide" class="input">Esconder</label>
			<input class="input" type="radio" id="hide" value="1" name="hide" required="true"/> Sim<br>
			<input class="input" type="radio" id="hide" value="0"name="hide" required="true"/> Não
		</div>
		<div>
			<label for="type" class="input">Tipo</label>
			<input class="input" type="radio" id="type" value="1" name="type" required="true"/> Começo<br>
			<input class="input" type="radio" id="type" value="0" name="type" required="true"/> Normal<br>
			<input class="input" type="radio" id="type" value="2"name="type" required="true"/> Final
		</div>
	</div>
	<div>
		<label for="img_ref" class="input">Link da Imagem </label>
		<input class="inputButton input" id="img_ref" type="text" value="<?=$cat[MAIN_NAV_IMG_REF]?>" required/>
	</div>
	<div>
		<label for="title" class="input">Título </label>
		<input class="inputButton input" id="title" type="text" value="<?=$cat[MAIN_NAV_TITLE]?>" required/>
	</div>
	<div>
		<label for="des" class="input">Descrição </label>
		<textarea cols="30" rows="5" class="inputButton input" id="des" maxlength="500" required="true" wrap="hard"><?=$cat[MAIN_NAV_DES]?></textarea>
	</div>
	<div>
		<label for="link_array_id_" class="input">Lista de Links </label>
		<input class="inputButton input" list="true" id="link_array_id_" type="text" value="<?=$cat[MAIN_NAV_LINK_ARRAY_ID]?>" required/>
	</div>
	<div>
		<button class="inputButton button input" onclick="menunavSave();">Salvar</button>
		<button class="inputButton input button" onclick="javascript:history.back();">Cancelar</button>
	</div>
	<div><span></span></div>
</form>

<?php } ?>