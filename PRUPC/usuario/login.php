<?php
session_start();
include '../config/config.php';
include '../classes/User.php';


$user = new User($conn);


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($user->login($username, $password)) {
        header('refresh: 1; url =../realindex.php');
        exit();
    } else {
        echo "Login falhou. Verifique suas credenciais.";
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>



<body>
<header class="nav">
    <a href="#"><img src="img/logo.png" alt="" class="logo"></a>
    <nav>
        <ul>
            <li><a href="../index.php">Home</a></li>
            <li><a href="#Produtos">Produtos</a></li>
            <li><a href="#Banho&Tosa">Banho&Tosa</a></li>
        </ul>
    </nav>
</header>

<div class="containerTabela">


    <div class="container login">

        <h2 class="form__title">Coloque seu acesso abaixo</h2>
        <form method="post" action="">
            <input class="campos" type="text" name="username" placeholder="Usuário" required><br>
            <input class="campos" type="password" name="password" placeholder="Senha" required><br>

            <div class="containerBotoes">
                <a href="../realindex.php" type="submit" class="botaoLogin"><button class="btn">Logue-se Aqui</button></a>
                <a href="register.php" class="esqueciSenha">Não tem cadastro, Clique aqui!!</a>
            </div>
        </form>
    </div>
</div>
</body>

</html>

<style>

</style>