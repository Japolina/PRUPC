<?php

include_once './config/config.php';
include_once './classes/produ.php';
session_start();

$produ = new Produ($conn);
$data = $produ->read();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

?>


<!DOCTYPE html>
<html>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="media.css">
<script src="script.js" defer></script>

<head>
    <title>Pelúcias & Ração </title>
</head>

<body>
    <section class="principal" id="home">
        <header class="nav">
            <a href="#"><img src="img/logo.png" alt="" class="logo"></a>
            <nav>
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#Produtos">Produtos</a></li>
                    <li><a href="#Banho&Tosa">Banho&Tosa</a></li>
                    <li><a class="btn" href="./usuario/logout.php">Logout</a></li>
                </ul>
            </nav>
        </header>
    </section>
    <!-- -------------------------------------PRINCIPAL---------------------------------------------------- -->
    <section class="content">
        <div class="fundoPrincipal">
            <div class="text">
                <h2>Pelúcia & Ração <br><span>PetShop</span></h2>
                <p>Olá! Somos Pelúcias & Ração. Nascemos da alegria e do prazer que é cuidar de cães e gatos!
                    Todos os pets que recebemos são tratados assim: como se fossem nossos próprios filhos.</p>
            </div>
        </div class="icons">
        <ul>
            <li><a href="https://www.facebook.com/><img src=" img/facebook.png" alt=""></a></li>
            <li><a href="https://www.youtube.com/><img src=" img/youtube.png" alt=""></a></li>
            <li><a href="https://www.instagram.com/"><img src="img/instagram.png" alt=""></a></li>
        </ul>
        <div class="imagens">
            <div class="imagemCao">
                <img src="./img/cao.jpg" alt="">
            </div>
            <svg preserveAspectRatio="none" data-bbox="0 0 200 200" xmlns="http://www.w3.org/2000/svg" width="200" height="200" viewBox="0 0 200 200" role="img" aria-label="Veterinário Canoas | Le Malí Pet Center">
                <g>
                    <path d="M200 100c0 55.228-44.772 100-100 100S0 155.228 0 100 44.772 0 100 0s100 44.772 100 100z"></path>
                </g>
            </svg>
        </div>

    </section>


    <!-- -------------------------------------VANTAGEMS---------------------------------------------------- -->
    <section class="homeVantages">
        <div class="advantage-list">
            <div class="advantage-item">
                <div class="advantage-img">
                    <img src="https://static.petz.com.br/images/exp-facelift/express-ship.svg" alt="">
                </div>
                <div class="advantage-text">
                    <p>Entrega rápida</p>
                </div>

            </div>

            <div class="advantage-item">
                <div class="advantage-img">
                    <img src="https://static.petz.com.br/images/exp-facelift/free-freight.svg" alt="">
                </div>
                <div class="advantage-text">
                    <p>Entrega rápida</p>
                </div>

            </div>

            <div class="advantage-item">
                <div class="advantage-img">
                    <img src="https://static.petz.com.br/images/exp-facelift/installments.svg" alt="">
                </div>
                <div class="advantage-text">
                    <p>Entrega rápida</p>
                </div>

            </div>

            <div class="advantage-item">
                <div class="advantage-img">
                    <img src="https://static.petz.com.br/images/exp-facelift/pickup-store.svg" alt="">
                </div>
                <div class="advantage-text">
                    <p>Entrega rápida</p>
                </div>

            </div>

        </div>
    </section>


    <!-- -------------------------------------BANNERS---------------------------------------------------- -->
    <section class="carrosel">
        <div class="bannerCarrosel">

        </div>
    </section>


    <!-- -------------------------------------TITULO VENDIDOS ---------------------------------------------------- -->
    <div class="titulo-vendidos">
        <h2 class="texto-vendidos">Mais Vendidos</h2>
    </div>


    <!-- -------------------------------------PRODUTOS ---------------------------------------------------- -->
    <div class="carousel-produtos">
        <?php
        /*
        while ($row = $data->fetch(PDO::FETCH_ASSOC)) {
        ?>
            <tr>
                <td class="tabNome"><?php echo $row['nome']; ?></td>
                <td class="tabIdade"><?php echo $row['idade']; ?></td>
                <td class="tabAcao"> <a href="edit.php?id=<?php echo $row['id']; ?>">Editar</a> <a href="delete.php?id=<?php echo $row['id']; ?>">Excluir</a> </td>
            </tr>
        <?php } ?>
        */

        while ($row = $data->fetch(PDO::FETCH_ASSOC)) { ?>
        <i class="fa-solid fa-angle-left">
            < </i>

                <div class="boxProduto">
                    <div class="categoriaProdutos">
                        <div class="badge">
                            <h4 style="font-weight: bolder;">Hot</h4>
                        </div>
                        <a href="categoriaProdutos.php">
                            <div class="tumbnail_imagem">
                                <img src="img/prod1Mini.jpg" alt="" />
                            </div>
                            <section>
                                <header class="tituloProdtuo">
                                    <h2>Ração Hills Science Diet para Cães Adultos de Grande Porte Sabor Frango 12kg</h2>
                                </header>
                            </section>
                            <section class="preco">
                                <p>R$ 39,00</p>
                            </section>
                            <section class="preco2">
                                <p>R$ 39,00</p>
                            </section>
                        </a>
                    </div>


                    <button class="btn" style="padding: 25px 111px;margin-top: 10px;  max-height: 500px;">
                        <a style="color: rgb(48, 25, 107);">Comprar</a>
                    </button>
                </div>

                <?php } ?>


                <i class="fa-solid fa-angle-right"> > </i>
    </div>


    <!-- ------------------------------------- BANHO E TOSA ---------------------------------------------------- -->
    <div class="content-banhotosa">
        <div class="texto-banho"></div>
        <div class="banner-banho">
            <a href="./agenda copy/agendaBanho.php">
                <img class="img-banho" src="./img/banho2.jpg" alt="">
            </a>
        </div>
    </div>
</body>

</html>