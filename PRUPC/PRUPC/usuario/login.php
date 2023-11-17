<?php
include_once "../config/config.php";
include_once '../classes/CrudUsu.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $crud = new Crud($db);
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $crud->read($nome,  $cpf ,$email, $senha);
    header('refresh:2, index.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<link rel="stylesheet" href="../style.css">
<link rel="stylesheet" href="../media.css">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>

<style>
    .container {
        width: 100px;
        padding: 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        margin: 10px auto;
    }

    h1 {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    form {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
    }

    form input {
        width: 200px;
        display: flex;
        padding: 10px;
        margin-top: 20px;
        border: 1px solid black;
        border-radius: 10px;
    }

    .salvar {
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: olivedrab;
        color: white;
    }

</style>

<body>
<section class="principal" id="home">
        <header class="nav">
            <a href="#"><img src="img/logo.png" alt="" class="logo"></a>
            <nav>
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#Produtos">Produtos</a></li>
                    <li><a href="#Banho&Tosa">Banho&Tosa</a></li>
                    <li><a class="btn" href="./usuario/login.php">Login</a></li>
                </ul>
            </nav>
        </header>
    </section>

    <h1>Faça seu Login</h1>
    <div class="container">

        <form method="post">
            <input type="text" name="email" id="email" placeholder="Insira seu email" required>
            <input type="password" name="senha" id="senha" placeholder="Insira uma senha" required>
            <input type="submit" value="Logar" class="salvar">
        </form>

    </div>

</body>

</html>