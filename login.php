<?php require_once "require/template/header.php";  ?>
<link type="text/css" rel="stylesheet" href="require/css/login.css"/>
<script type="text/javascript" src="require/js/user.js"></script>
<title>Login - SStore</title>
<center>

	<form action="javascript:void(0);">
		<div>
			<p>Já tem uma conta?</p>
			<p>Conecte-se agora para aproveitar ao máximo!</p>
		</div>
		<div><label for="email">E-mail: </label><input type="text" id="email" placeholder="exemplo@exemplo.com"/></div>
		<div><label for="pass">Senha: </label><input type="password" id="pass" placeholder="senha" maxlength="15"/></div>
		<div><button onclick="funcLogin();">Logar-se</button></div>
		<div><span></span></div>
	</form>
	
	<form action="javascript:void(0);">
		<div>
			<p>Ainda não tem uma conta?</p>
			<p>Cadastre-se já para poder realizar suas compras da melhor maneira!</p>
		</div>
		<div><label for="email">E-mail: </label><input type="text" id="email" placeholder="exemplo@exemplo.com"/></div>
		<div><label for="pass">Senha: </label><input type="password" id="pass" placeholder="crie uma senha" maxlength="15"/></div>
		<div><label for="pass">CPF/CPNJ: </label><input type="text" id="cpfnj" placeholder="0000000000" maxlength="11"/></div>
		<div><label for="pass">CEP: </label><input type="text" id="cep" placeholder="00000000" maxlength="8"/></div>
		<div><button onclick="funcRegister();">Cadastrar</button></div>
	</form>
	
</center>
<br><br>
<?php require_once "require/template/footer.php";  ?>