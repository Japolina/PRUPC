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
                <li><a href="../agenda copy/agendaBanho.php">Banho&Tosa</a></li>
            </ul>
        </nav>
    </header>

    <div class="containerTabela">

        <div class="container login">
            <h2 class="form__title">Faça seu cadastro abaixo</h2>
            <form method="post" action="">

                <input class="campos" type="text" name="username" placeholder="Usuário" required><br>
                <input class="campos" type="password" name="password" placeholder="Senha" required><br>
                <input class="campos" type="password" name="confirm_password" placeholder="Confirme a senha" required><br>
                <input class="campos" type="email" name="email" placeholder="Email" required><br>

                <div class="containerBotoes">
                    <a href="./login.php" type="submit" class="botaoCadastro"><button class="btn">Cadastre Aqui</button></a>
                </div>
            </form>
        </div>
    </div>
</body>

</html>