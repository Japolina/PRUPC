<?php
include_once './config/config.php';
include_once './classes/produ.php';

$produ = new Produ($conn);
$data = $produ->read();


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
                            <a href="./catalogo/telaprodutos.php">
                                <div class="tumbnail_imagem">
                                    <img src="<?php echo $row['imagem']; ?>" alt="" />

                                </div>
                                <section>
                                    <header class="tituloProdtuo">
                                        <?php echo $row['nome']; ?>
                                    </header>
                                </section>
                                <section class="preco">
                                    <p>R$ 59</p>
                                </section>
                                <section class="preco2">
                                    <p>R$ <?php echo $row['preco']; ?></p>
                                </section>
                            </a>
                        </div>

                        <a href="./catalogo/telaprodutos.php" style="color: rgb(48, 25, 107);">
                            <button class="btn" style="padding: 25px 111px;margin-top: 10px;  max-height: 500px;">
                                <h4>Comprar</h4>
                            </button></a>
                    </div>

                <?php } ?>


                <i class="fa-solid fa-angle-right"> > </i>
    </div>


    <!-- ------------------------------------- BANHO E TOSA ---------------------------------------------------- -->
    <section class="content-banhotosa">
        <div class="content">
            <h1>Faça seu login para acessar nossa agenda de Banho e Tosa para seu pet!</h1>
            <a href="./usuario/login.php" type="submit">
                <button class="btn" style="padding: 25px 111px; 
                margin-left: 80px; max-height: 500px;">
                    Fazer Login
                </button>
            </a>
        </div>
    </section>

    <!-- ----------------------------FOOTER --------------------------------------------------- -->
    <footer>
        <div class="contentFooter">
            <div class="logo">
            <a href="#"><img src="./img/Logo/logo2.png" alt="" class="logo"></a>
            </div>
        </div>

    </footer>
</body>

</html>