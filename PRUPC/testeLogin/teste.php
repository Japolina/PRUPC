<?php
session_start();
include '../config/config.php';
include '../classes/User.php';


$user = new User($conn);


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$username = $_POST['username'];
	$password = $_POST['password'];


	if ($user->login($username, $password)) {
		header("realindex.php");
		exit();
	} else {
		echo "Login falhou. Verifique suas credenciais.";
	}
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<title>Slide Login</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
	<link rel="stylesheet" href="./style.css">

</head>

<body>
	<!-- partial:index.partial.html -->
	<div class="container right-panel-active">
		<!-- Sign Up -->
		<div class="container__form container--signup">
			<form action="#" class="form" id="form1" method="post">
				<h2 class="form__title">Faça seu cadastro abaixo:</h2>

				<input type="text" name="username" type="text" placeholder="Usuário" class="input" required><br>
				<input type="email" name="email" type="email" placeholder="E-mail" class="input" required><br>
				<input type="password" name="password" type="password" placeholder="Senha" class="input" required><br>

				<input type="submit">
				<button class="btn">Acesse neste botão</button>
				</input>
			</form>
		</div>

		<!-- Sign In -->
		<div class="container__form container--signin">
			<form action="#" class="form" id="form2">
				<h2 class="form__title">Coloque seus acessos abaixo</h2>

				<input type="text" name="username" placeholder="Usuário" class="input" required><br>
				<input type="password" name="password" required placeholder="Senha" class="input" require><br>

				<a href="#" class="link">Esqueceu a Senha? Clique Aqui</a>
				<a href="../realindex.php" type="submit"><button class="btn">Logue-se Aqui</button></a>
			</form>
		</div>

		<!-- Overlay -->
		<div class="container__overlay">
			<div class="overlay">
				<div class="overlay__panel overlay--left">
					<button class="btn" id="signIn">Acesse Aqui</button>
				</div>
				<div class="overlay__panel overlay--right">
					<button class="btn" id="signUp">Registre-se Aqui</button>
				</div>
			</div>
		</div>
	</div>
	<!-- partial -->
	<script src="./script.js"></script>

</body>

</html>