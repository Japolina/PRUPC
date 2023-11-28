<?php

include_once './config/config.php';
include_once './classes/produ.php';
include_once './classes/Pet.php';
include_once './classes/Agenda.php';
session_start();

$produ = new Produ($conn);

$pet = new Pet($conn);

$agenda = new Agenda($conn);

$data = $produ->read();

$pato = $pet->readEdit($_SESSION['id']);

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}


if (isset($_POST['form2'])) {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        $data = $_POST['data'];
        $hora = $_POST['hora'];
        $fk_iddog = $_POST['petss'];
        $agenda->create($data, $hora, $fk_iddog);
        header('refresh:1, realindex.php');
        exit();
    }
}

if (isset($_POST['form1'])) {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        $nome = $_POST['nome'];
        $raca = $_POST['raca'];
        $fk_don = $_SESSION['id'];
        $idade = $_POST['idade'];
        $pet->create($nome, $raca, $fk_don, $idade);
        header('refresh:1, realindex.php');
        exit();
    }
}

?>


<!DOCTYPE html>
<html>


<head>
    <link rel="stylesheet" href="styleReal.css">
    <link rel="stylesheet" href="mediaReal.css">
    <script src="script.js" defer></script>
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
    <section class="principal" id="home">
        <header class="nav">
            <a href="#"><img src="./img/Logo/logo1.png" alt="" class="logo"></a>
            <nav>
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#slider-container">Produtos</a></li>
                    <li><a href="#Banho&Tosa">Banho&Tosa</a></li>
                    <li><a class="btn" href="./usuario/logout.php">Logout</a></li>
                </ul>
            </nav>
        </header>
    </section>
    <!-- -------------------------------------PRINCIPAL---------------------------------------------------- -->
    <section class="fundoPrincipal">
        <div class="containerInfo">
            <h2>Pelúcia & Ração <br><span>PetShop</span></h2>
            <p>Olá! Somos Pelúcias & Ração. Nascemos da alegria e do prazer que é cuidar de cães e gatos!
                Oferecemos ampla variedade de produtos para proporcionar melhor experiência à você e seu pet!</p>
            <ul class="social">
                <li><a href="https://www.facebook.com/"><img src="./img/Social/face.png" alt=""></a></li>
                <li><a href="https://www.instagram.com/"><img src="./img/Social/insta.png" alt=""></a></li>

            </ul>
        </div>
        <div class="imagens">
            <div class="imagemCao">
                <img src="./img/cao.jpg" alt="">
            </div>
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

                        <a href="https://wa.me/555197614233?text=Tenho%20interesse%20em%20comprar%20<?php echo $row['nome'] ?>%20de%20id=%20<?php echo $row['id'] ?>">
                            <button class="btn" style="padding: 25px 111px;margin-top: 10px;  max-height: 500px;">
                                Comprar
                            </button>
                        </a>

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
    <div class="content-banhotosa" id="Banho&Tosa">
        <div class="imgFundo">
            <div class="content2">

                <form method="post">
                    <h1>Cadastro Pet</h1>
                    <input type="text" name="nome" id="nome" placeholder="Insira o nome o pet" required>
                    <input type="text" name="raca" id="raca" placeholder="Insira a raca do pet" required>
                    <input type="number" name="idade" id="idade" placeholder="Insira a idade do pet" required>

                    <input class="btn2" name="form1" type="submit" value="Cadastre seu Pet aqui!" class="salvar">
                </form>

                <form method="post">
                    <h1>Faça seu agendamento de Banho e Tosa!</h1>
                    <input type="date" name="data" id="data" placeholder="Insira a data ex:2023-11-02" required>
                    <input type="time" name="hora" id="hora" placeholder="Insira a hora ex:10:35:00" required>
                    <select id="petss" name="petss">
                        <option>Selecione o pet</option>
                        <?php
                        while ($row = $pato->fetch(PDO::FETCH_ASSOC)) {
                            echo " <option value=" . $row['id'] . ">" . $row['nome'] . "</option>";
                        } ?>

                        <input class="btn2" name="form2" type="submit" value="Agendar" class="salvar">
                    </select>
                </form>

            </div>
        </div>
    </div>
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
</body>

</html>