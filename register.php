<?php require_once "require/template/header.php";  ?>
<link type="text/css" rel="stylesheet" href="require/css/registro.css"/>
<script type="text/javascript" src="require/js/user.js"></script>

<title>Cadastro - SStore</title>
<center>
<br><br>
	<form action="javascript:void(0)">
		<p>Crie sua Conta para aproveitar todos os benefícios do SStore</p>
		<div><label for="email">E-mail: </label><input type="text" id="email" placeholder="exemplo@exemplo.com"/></div>
		<div><label for="pass">Senha: </label><input type="password" id="pass" placeholder="senha" maxlength="15"/></div>
		<div><button onclick="funcLogin()">Logar-se</button></div>
		<div><span></span></div>
		<div>Não tem uma conta? <a href="register.php">Cadastre-se gratuitamente!</a></div>
	</form>
</center>
<br><br>
<?php require_once "require/template/footer.php";  ?>