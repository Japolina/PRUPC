<?php
include '../config/config.php';
include '../classes/User.php';


$user = new User($conn);


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $email = $_POST['email'];


    $user->register($username, $password, $confirm_password, $email);
    header("refresh:1;url=login.php");
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="register.css">
    <link rel="stylesheet" href="registerMedia.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
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
        <div class="container">
            <h2 class="form__title">Faça seu cadastro abaixo</h2>

            <div class="campos">
                <form method="post" action="">
                    <input type="text" name="username" placeholder="Usuário" class="input" required><br>
                    <input type="password" name="password" placeholder="Senha" class="input" required><br>
                    <input type="password" name="confirm_password" placeholder="Confirme enha" class="input" required><br>
                    <input type="email" name="email" placeholder="E-mail" class="input" required><br>
            </div>


            <div class="containerBotoes">
                <a href="../realindex.php" type="submit"><button class="btn" value="Registrar">Registrar</button></a>
                <a href="./login.php" type="submit" class="voltar">
                    <img src="../img/Login/back.png" alt="">
                    <h1 class="textVoltar">Voltar</h1>
                </a>
            </div>
        </div>
        </form>

    </div>
</body>

</html>