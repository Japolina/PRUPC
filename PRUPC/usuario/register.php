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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
</head>
<body>
    <h2>Registro</h2>
    <form method="post" action="">
        <label for="username">Usuário:</label>
        <input type="text" name="username" required><br>


        <label for="password">Senha:</label>
        <input type="password" name="password" required><br>


        <label for="confirm_password">Confirme a Senha:</label>
        <input type="password" name="confirm_password" required><br>


        <label for="email">E-mail:</label>
        <input type="email" name="email" required><br>


        <input type="submit" value="Registrar">
    </form>
</body>
</html>