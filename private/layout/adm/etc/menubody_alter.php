<?php
	$sq = new AdManager;
	$catarray = $sq->getBodyCat($_GET['cod']);
	
	foreach($catarray as $cat){
?>
<p>Alterar Categoria</p>
<form action="javascript:void(0);">
	<div>
		<label for="id" class="input">Id </label>
		<input class="inputButton input" id="id_" type="text" value="<?=$cat[DEFAULT_ID]?>" disabled="disabled"/>	
	</div>
	
	<div>
		<label for="nav_name" class="input">Nome </label>
		<input class="inputButton input" id="nav_name" type="text" value="<?=$cat[HOME_SIDE_CATEGORY_NAME]?>" required/>
		<p>*A acentuação será "formalizada" automaticamente para a linguagem do banco de dados.<br> Caso precise de ajuda <a href="">clique aqui</a>*</p>
	</div>
		<!-- <div>
			<label for="hide" class="input">Esconder</label>
			<input class="input" type="radio" id="hide" value="1" name="hide" required="true"/> Sim<br>
			<input class="input" type="radio" id="hide" value="0"name="hide" required="true"/> Não
		</div> -->
	<div>
		<label for="link_array_id_" class="input">Lista de Links </label>
		<input class="inputButton input" list="true" id="link_array_id_" type="text" value="<?=$cat[HOME_SIDE_CATEGORY_REF]?>" required/>
	</div>
	
	<div>
		<button class="inputButton button input" onclick="menubodyAlter();">Salvar</button>
		<button class="inputButton input button" onclick="javascript:history.back();">Cancelar</button>
	</div>
	<div><span></span></div>
</form>

<?php } ?>