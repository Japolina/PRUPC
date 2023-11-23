<?php
include_once './config/config.php';
include_once './classes/produ.php';

$produ = new Produ($conn);
$data = $produ->read();


?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pelúcias & Ração </title>
    <link rel="stylesheet" href="./css/index.css">
</head>


<body>

    <header class="nav">
        <a href="#"><img src="./img/Logo/logo2.png" alt="" id="logo"></a>
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
        <div class="text">
            <h2>Pelúcia & Ração <br><span>PetShop</span></h2>
            <p>Olá! Somos Pelúcias & Ração. Nascemos da alegria e do prazer que é cuidar de cães e gatos!
                Todos os pets que recebemos são tratados assim: como se fossem nossos próprios filhos.</p>
        </div>
        <div class="icons">
            <ul>
                <li><a href="https://www.facebook.com/><img src=" img/facebook.png" alt=""></a></li>
                <li><a href="https://www.youtube.com/><img src=" img/youtube.png" alt=""></a></li>
                <li><a href="https://www.instagram.com/"><img src="img/instagram.png" alt=""></a></li>
            </ul>
        </div>
    </section>


    <!-- -------------------------------------VANTAGEMS---------------------------------------------------- -->
    <section class="homeVantages">

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

    </section>




    <!-- -------------------------------------TITULO VENDIDOS ---------------------------------------------------- -->
    <div class="container">
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
                                        <img src="<?php echo $row['imagem']; ?>" alt="" />

                                    </div>
                                    <section>
                                        <header class="tituloProdtuo">
                                            <?php echo $row['nome']; ?>
                                        </header>
                                    </section>
                                    <section class="preco">
                                        <?php echo $row['preco']; ?>
                                    </section>
                                    <section class="preco2">
                                        <?php echo $row['preco']; ?>
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

    </div>
    <!-- ------------------------------------- BANHO E TOSA ---------------------------------------------------- -->
    <div class="content-banhotosa">
        <div class="texto-banho">Banho do cutcut</div>
        <div class="banner-banho">
            <a href="./agenda copy/agendaBanho.php">
                <img class="img-banho" src="./img/banho2.jpg" width="100px" height="100px" alt="banho">
            </a>
        </div>
    </div>
    <footer>
        <h3>Titulo do site</h3>

    </footer>

</body>

</html>