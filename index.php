<html>
<head>
<title>Sistema php do 0 - netocazuza@hotmail.com</title>
</head>
<body>
<?php
	if(isset($_POST['email']) && empty($_POST['email'])==false)
{
	if(isset($_POST['senha']) && empty($_POST['senha'])== false)
	{
		$email = $_POST['email'];
		$senha = $_POST['senha'];
		echo "Meu email eh: ".$email. " , e minha senha eh: ".$senha;
	}
}
?>
<hr/>
<form method="POST">
	E-mail: <br/>
	<input type="text" name="email" /><br/><br/>
	Senha:<br/>
	<input type="password" name="senha" /><br/><br/>
	<textarea name="campo"></textarea><br/><br/>
	<select name="opcoes">
		<option value="1">Campo 1</option>
		<option value="2">Campo 2</option>
		<option value="3">Campo 3</option>
	</select><br/><br/>
	<input type="radio" name="radio" value="1" />Opção 1<br/>
	<input type="radio" name="radio" value="2" />Opcao 2<br/>
	<input type="radio" name="radio" value="3" />Opcao 3<br/>
	<input type="submit" value="Enviar Dados" />
</form>
</body>
</html>
