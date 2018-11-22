<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Cadastre-se</title>
	</head>
	<body>
		<div>Cadastro de Usuário</div>
		<form action="controle.php" method="post">
			<label>Login</label> <input type="text" name="login" value="" /><br>
			<label>Senha</label> <input type="passoword" name="senha" value="" /><br>
			<label>Tipo de Usuário</label>
			<select name="tipo_usuario">
				<option value="">Selecione</option>
				<option value="1">Usuário Comum</option>
				<option value="2">Administrador</option>
			</select><br>
			<input type="submit" name="cadastrar" value="cadastrar">
		</form>
	</body>
</html>