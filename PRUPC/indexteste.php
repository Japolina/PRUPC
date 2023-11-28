<?php
include_once './config/config.php';
include_once './classes/produ.php';

$produ = new Produ($conn);
$data = $produ->read();


?>


<!DOCTYPE html>
<html>
<link rel="stylesheet" href="styleteste.css">
<!--<link rel="stylesheet" href="media.css">-->
<script src="script.js" defer></script>

<head>
    <title>Pelúcias & Ração </title>
    <style>
        #prev,
        #next {
            cursor: pointer;
            position: absolute;
            width: auto;
            margin-top: 950px;
            margin-right: 10px;
            margin-left: 50px;
            color: white;
            font-weight: bold;
            font-size: 20px;
            transition: 0.6s ease;
            border-radius: 0 3px 3px 0;
            user-select: none;
            background-color: rgb(48, 25, 107);
            ;
        }

        #next {
            right: 0;
            border-radius: 3px 0 0 3px;
        }

        #prev:hover,
        #next:hover {
            background-color: rgba(0, 0, 0, 0.8);
        }
    </style>





</head>


<body>
    <header class="nav">
        <a href="#"><img src="./img/Logo/logo2.png" alt="" class="logo"></a>
        <nav>
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#Produtos">Produtos</a></li>
                <li><a href="#Banho&Tosa">Banho&Tosa</a></li>
                <li><a class="btn" href="./usuario/login.php">Login</a></li>
            </ul>
        </nav>
    </header>
    <!-- -------------------------------------PRINCIPAL---------------------------------------------------- -->
    <section class="fundoPrincipal">
        <div class="containerInfo">
            <h2>Pelúcia & Ração <br><span>PetShop</span></h2>
            <p>Olá! Somos Pelúcias & Ração. Nascemos da alegria e do prazer que é cuidar de cães e gatos!
                Todos os pets que recebemos são tratados assim: como se fossem nossos próprios filhos.</p>
            <ul class="social">
                <li><a href="https://www.facebook.com/"><img src="./img/Social/face.png" alt=""></a></li>
                <li><a href="https://www.instagram.com/"><img src="./img/Social/insta.png" alt=""></a></li>

            </ul>

        </div>
        <div class="imagens">
            <div class="imagemCao">
                <img src="./img/cao.jpg" alt="">
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


    <div id="slider-container">




        <div id="slider-wrapper">
            <?php
            $count = 0;
            while ($row = $data->fetch(PDO::FETCH_ASSOC)) { ?>
                <div class="slide">


                    <h4 class="hot" style="font-weight: bolder;">Hot</h4>

                    <a href="./usuario/login.php">

                        <img src="<?php echo $row['imagem']; ?>" alt="" />

                        <h2 id="tituloProduto"> <?php echo $row['nome'];  ?></h2>



                        <p id="preco2">R$ <?php echo $row['preco']; ?></p>

                        <a href="./usuario/login.php" style="color: rgb(48, 25, 107);">
                            <button class="btnCompra" style="padding: 25px 111px;margin-top: 10px;  max-height: 500px;">
                                <h4>Comprar</h4>
                            </button></a>

                    </a>
                </div>
            <?php } ?>

            <!-- Add more slides as needed -->
        </div>

        <button id='prev' onclick='prevSlide()'>❮</button>
        <button id="next" onclick="nextSlide()">❯</button>








    </div>



    <script>
        let currentIndex1 = 0;

        function showSlide(index) {
            const slider = document.getElementById('slider-wrapper');
            const slideWidth = document.querySelector('.slide').offsetWidth;

            if (index >= 0 && index <= slider.children.length) {
                currentIndex1 = index;

                slider.style.transform = `translateX(${-currentIndex1 * slideWidth}px)`;

            }
        }

        function prevSlide() {
            showSlide(currentIndex1 - 1);
        }

        function nextSlide() {
            showSlide(currentIndex1 + 1);
        }
    </script>


    <!-- ------------------------------------- BANHO E TOSA ---------------------------------------------------- -->
    <section class="content-banhotosa">
        <div class="imgFundo">
            <div class="contentBanho">
                <h1>Faça seu login para acessar nossa agenda de Banho e Tosa para seu pet!</h1>
                <a href="./usuario/login.php" type="submit">
                    <button class="btn">
                        Fazer Login
                    </button>
                </a>
            </div>
        </div>
    </section>

    <!-- ----------------------------FOOTER --------------------------------------------------- -->
    <footer>
        <div class="contentFooter">
            <div class="logo">
                <a href="#"><img src="./img/Logo/logo2.png" alt="" class="logo"></a>
            </div>
            <div class="copy">
                <h1>Copyright © Pelúcias & Ração</h1>
            </div>
            <div class="social">
                <ul>
                    <li><a href="https://www.facebook.com/"><img src="./img/Social/face.png" alt=""></a></li>
                    <li><a href="https://www.instagram.com/"><img src="./img/Social/insta.png" alt=""></a></li>

                </ul>
            </div>
        </div>

    </footer>
    <script src="script.js"></script>
</body>

</html>