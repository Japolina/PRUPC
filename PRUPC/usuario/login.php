<?php
session_start();
include '../config/config.php';
include '../classes/User.php';


$user = new User($conn);


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];


    if ($user->login($username, $password)) {
        header("Location: ../realindex.php");
        exit();
    } else {
        echo "Login falhou. Verifique suas credenciais.";
    }
}
?>


<!DOCTYPE html>
<html lang="PT-BR">
<link rel="stylesheet" href="login.css">
<link rel="stylesheet" href="loginMedia.css">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <header class="nav">
        <a href="#"><img src="../img/Logo/logo2.png" alt="" class="logo"></a>
        <nav>
            <ul>
                <li><a href="../index.php">Home</a></li>
                <li><a href="../index.php#slider-container">Produtos</a></li>
                <li><a href="../index.php#Banho&Tosa">Banho&Tosa</a></li>
            </ul>
        </nav>
    </header>

    <section class="containerTabela">
        <h2 class="form__title">Coloque seu acesso abaixo</h2>

        <div class="campos">
            <form method="post" action="">
                <input type="text" name="username" name="username" placeholder="Usuário" class="input" required><br>
                <input type="password" name="password" type="password" placeholder="Senha" class="input" required><br>
        </div>

        <div class="containerBotoes">
            <a href="../realindex.php" type="submit"><button class="btn">Logue-se Aqui</button></a>
            <a href="register.php" class="esqueciSenha">Não tem cadastro, Clique aqui!!</a>
        </div>
    </section>
</body>

</html>

<style>

</style>