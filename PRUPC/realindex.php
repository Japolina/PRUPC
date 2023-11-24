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
<link rel="stylesheet" href="styleReal.css">
<link rel="stylesheet" href="mediaReal.css">
<script src="script.js" defer></script>

<head>
    <title>Pelúcias & Ração </title>
</head>

<body>
    <section class="principal" id="home">
        <header class="nav">
            <a href="#"><img src="./img/Logo/logo1.png" alt="" class="logo"></a>
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


    <!-- ------------------------------------- BANHO E TOSA ---------------------------------------------------- -->
    <div class="content-banhotosa">
        <div class="content">

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
                    <option >Selecione o pet</option>
                    <?php
                    while ($row = $pato->fetch(PDO::FETCH_ASSOC)) {
                        echo " <option value=" . $row['id'] . ">" . $row['nome'] . "</option>";
                    } ?>

                   <input  class="btn2" name="form2" type="submit" value="Agendar" class="salvar">
                </select>
            </form>

        </div>
    </div>
</body>

</html>