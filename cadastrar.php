<!DOCTYPE html>
<html>
	<head>
		<title> GameHub </title>
		<meta charset="UTF-8"/>
		<meta name="author" content="Vitor Antunes Cazella">
		<meta name="description" content="Game, Jogos Digitais"/>
		<meta name="keywords" content="games, jogos digitais, game">
		<link rel="stylesheet" type="text/css" href="css/style2.css">
		<link rel="icon" href="img/joystick.ico" type="image/x-icon" />
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	</head>

	<body>
		<header>
			<div class="container-fluid" id="header1">
				<div class="row text-white text-center" style="border-bottom: 3px solid green;">
						<div class="col-md-1 border rounded-circle px-2 py-2 mx-4 my-4" style="background: white;">
							<img class="rounded" src="img/white-controller.png" style="width: 103%;height: auto;" alt="">
						</div>
						<div class="col-md pl-5 py-5">
							<h1>GameHUB</h1>
						</div>
						<div class="col-md-3">
							
						</div>
				</div>
			</div>
		</header>	
			
			<div class="container" style="width: 30%;padding: 50px;border: solid red 1px;">
				<div>Cadastro de Usuário</div>
				<form action="controle.php" method="post">
					<label>Login</label> <input type="text" name="login" value="" /><br>
					<label>Senha</label> <input type="passoword" name="senha" value="" /><br>
					<label>Tipo de Usuário</label>
					<!--<select name="tipo_usuario">
						<option value="">Selecione</option>
						<option value="1">Usuário Comum</option>
						<option value="2">Administrador</option>
					</select><br>-->
					<input type="submit" name="cadastrar" value="cadastrar">
				</form>
			</div>


		<footer>
			<div class="container-fluid footer text-white text-center pt-5 pb-2" id="footer1">
				<h6>Vitor Antunes Cazella</h6>
			</div>
		</footer>
	</body>
</html>