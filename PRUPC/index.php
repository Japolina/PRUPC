<?php
include_once './config/config.php';
include_once 'classes/CrudUsu.php';
$crud = new Crud($db);
$data = $crud->read();
?>


<!DOCTYPE html>
<html>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="media.css">

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
                    <li><a class="btn" href="./usuario/login.php">Login</a></li>
                </ul>
            </nav>
        </header>
    </section>

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

    <section class="homeVantages">
        <div class="advantage">
            <div>
                <h1>Teste</h1>
            </div>
        </div>
    </section>

    <section class="carrosel">
        <div class="bannerCarrosel">

        </div>
    </section>

    <div class="titulo">
        <h2>Mais Vendidos</h2>
    </div>
            <section class="produtos">
                <div class="boxProduto">
                    <a href="categoriaProdutos.php">
                        <div class="tumbnail_imagem">
                            <img src="img/prod1Mini.jpg" alt="" />
                        </div>
                        <section >
                            <header class="tituloProdtuo">
                                <h2>Ração Dogão 25kg</h2>
                            </header>
                        </section>
                        <section class="preco">
                            <p>R$ 39,00</p>
                        </section>
                        <section class="preco2">
                            <p>R$ 39,00</p>
                        </section>
                    </a>
                    <button class="btn"> 
                        <span style="color:#fff">Comprar</span>
                    </button>
                </div>
                <div class="boxProduto">
                    <a href="categoriaProdutos.php">
                        <div class="tumbnail_imagem">
                            <img src="img/prod1Mini.jpg" alt="" />
                        </div>
                        <section>
                            <header>
                                <h2>Ração Dogão</h2>
                            </header>
                        </section>
                        <section class="preco">
                            <p>R$ 39,00</p>
                        </section>
                    </a>
                    <button>

                    </button>
                </div>
                <div class="boxProduto">
                    <a href="categoriaProdutos.php">
                        <div class="tumbnail_imagem">
                            <img src="img/prod1Mini.jpg" alt="" />
                        </div>
                        <section>
                            <header>
                                <h2>Ração Dogão</h2>
                            </header>
                        </section>
                        <section>
                            <p>R$ 39,00</p>
                        </section>
                    </a>
                    <button>

                    </button>
                </div>
            </section>



</body>

</html>