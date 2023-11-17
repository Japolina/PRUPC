<?php
include_once './config/config.php';
include_once 'classes/Crud.php';

if($_SERVER['REQUEST_METHOD']==='POST'){
    $crud = new Crud($db);
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $cpf = $_POST['cpf'];
    $senha = $_POST['senha'];
    $crud->update($id, $nome, $email, $cpf , $senha);

    echo"Editado com sucesso!!!😎👍";
    header('refresh:2,index.php');
    exit();
}
if (isset($_GET['id'])){
    $id = $_GET['id'];
    $crud = new Crud($db);
    $data = $crud->readEdit($id);
    $row = $data->fetch(PDO::FETCH_ASSOC);
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualização</title>
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

    .editar {
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: olivedrab;
        color: white;
    }

</style>

<body>
    <h1>Tela Atualização de Cadastro</h1>
    <div class="container">

        <form method="post">
            <input type="hidden" name="id" id="id" value="<?php echo$row['id'];?>">
            <input type="text" name="nome" id="nome" maxlength="24" value="<?php echo $row['nome'];?>" required>
            <input type="text" name="CPF" id="cpf" value="<?php echo $row['nome'];?>"  required>
            <input type="text" name="email" id="email" value="<?php echo $row['nome'];?>"  required>
            <input type="password" name="senha" id="senha" placeholder="Insira uma nova senha" required>
            <input type="password" name="rsenha" id="rsenha" placeholder="Repita sua senha" required>
            <input type="submit" value="Editar" class="editar">
        </form>

    </div>

</body>

</html>