<?php
include_once './config/config.php';
include_once 'classes/CrudUsu.php';
$crud = new Crud($db);
$data = $crud->read();
?>


<!DOCTYPE html>
<html>
<link rel="stylesheet" href="style.css">

<head>
    <title>Pelúcias & Ração </title>
</head>

<body>
<section class="principal" id="home">
        <header>
            </figure>
            <a href="#"><img src="img/logo.png" alt="" class="logo"></a>
            <nav class="nav">
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#Produtos">Produtos</a></li>
                    <li><a href="#Banho&Tosa">Minhas Experiências</a></li>
                    <li><a class="btn">Login</a></li>
                </ul>
            </nav>
        </header>
        <div class="content">
            <div class="text">
                <h2>Pelúcia & Ração <br><span>PetShop</span></h2>
                <p>Teste</p>
            </div>
        </div>
        <ul class="icons">
            <li><a href="https://www.facebook.com/><img src="img/facebook.png" alt=""></a></li>
            <li><a href="https://www.youtube.com/><img src="img/youtube.png" alt=""></a></li>
            <li><a href="https://www.instagram.com/"><img src="img/instagram.png" alt=""></a></li>
        </ul>
        
    </section>
</body>

</html>
