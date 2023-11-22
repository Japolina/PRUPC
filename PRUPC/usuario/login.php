<?php
session_start();
include '../config/config.php';
include '../classes/User.php';


$user = new User($conn);


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];


    if ($user->login($username, $password)) {
<<<<<<< HEAD
        header("realindex.php");
=======
        header("Location: realindex.php");
>>>>>>> fac5a13c2900300a095369a70672fcd874463175
        exit();
    } else {
        echo "Login falhou. Verifique suas credenciais.";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <form method="post" action="">
        <label for="username">Usuário:</label>
        <input type="text" name="username" required><br>


        <label for="password">Senha:</label>
        <input type="password" name="password" required><br>


<<<<<<< HEAD
        <a href="../realindex.php" type="submit"><button class="btn">Logue-se Aqui</button></a>
=======
        <input type="submit" value="Login">
>>>>>>> fac5a13c2900300a095369a70672fcd874463175
        <a href="register.php">Não tem cadastro, Clique aqui!!</a>
    </form>
</body>
</html>

<style>
    
</style>