<p>Adicionar Nova Categoria (menu)</p>
<form action="javascript:void(0);">	
	<div>
		<label for="nav_name" class="input">Nome </label>
		<input class="inputButton input" id="nav_name" type="text" required/>
		<p>*A acentuação será "formalizada" automaticamente para a linguagem do banco de dados.<br> Caso precise de ajuda <a href="">clique aqui</a>*</p>
	</div>
	<div>
		<div>
			<label for="hide" class="input">Esconder</label>
			<input class="input" type="radio" id="hide" value="1" name="hide" required="true"/> Sim<br>
			<input class="input" type="radio" id="hide" value="0" name="hide" required="true" checked="checked"/> Não
		</div>
		<div>
			<label for="typeA" class="input">Tipo</label>
			<input class="input" type="radio" id="typeA" value="1" name="typeA"required="true"/> Começo<br>
			<input class="input" type="radio" id="typeA" value="0" name="typeA" required="true" checked="checked"/> Normal<br>
			<input class="input" type="radio" id="typeA" value="2" name="typeA" required="true"/> Final
		</div>
	</div>
	<div>
		<label for="img_ref" class="input">Link da Imagem </label>
		<input class="inputButton input" id="img_ref" type="text" required/>
	</div>
	<div>
		<label for="title" class="input">Título </label>
		<input class="inputButton input" id="title" type="text" required/>
	</div>
	<div>
		<label for="des" class="input">Descrição </label>
		<textarea cols="30" rows="5" class="inputButton input" id="des" maxlength="500" required="true" wrap="hard"></textarea>
	</div>
	<div>
		<label for="link_array_id_" class="input">Lista de Links </label>
		<input class="inputButton input" list="true" id="link_array_id_" type="text"  required/>
	</div>
	<div>
		<button class="inputButton button input" onclick="menunavNew();">Salvar</button>
		<button class="inputButton input button" onclick="javascript:history.back();">Cancelar</button>
	</div>
	<div><span></span></div>
</form>
