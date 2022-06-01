<?php

require_once 'Cliente.php';
require_once 'Quarto.php';
require_once 'Recepcionista.php';

$conexao = mysqli_connect('localhost', 'root', '');
$banco = mysqli_select_db($conexao, 'the_gallery_hostel');
mysqli_set_charset($conexao, 'utf8');
$recepcionista = new Recepcionista();

?>
<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercicio Desafio Hotel</title>
    <link rel="stylesheet" href="../css/estilo.css">
    <link rel="stylesheet" href="../css/poolQuartos.css">
</head>
<body>
<div id="interface">
    <header>
        <div id="logo"><img src="../img/logoTheGallery2.jpg" alt=""></div>
        <nav class="menu">
            <ul>
                <li><a href="areaRecepcao.php">Recepção</a></li>
            </ul>
        </nav>
        <h1><a href="../index.html">The Gallery Hostel</a></h1>
        <nav class="menu">
            <ul><h1>Menu Principal</h1>
                <li><a href="../index.html">Home</a></li>
                <li><a href="../Acomodações.html">Acomodações</a></li>
                <li><a href="../Reservas.html">Reservas</a></li>
                <li><a href="../Contato.html">Contato</a></li>
            </ul>
        </nav>
    </header>
    <section id="corpo">
        <div id="fundo">
            <div id="titulo">
                <h2>The Gallery Hostel Floripa</h2>
                <h3>Pool de quartos</h3>
            </div>
            <div id="pool">
                <?php
                //echo "<div class='cubos'>Quarto " . $id . "</div>"
                $recepcionista->listaQuartosPool();
                ?>
            </div>
        </div>
    </section>
    <footer>
        <p><a href="https://github.com/matheuslehnen" target="_blank">&copyCopyright 2022 - by Matheus Lehnen</a></p></br>
    </footer>
</div>

</body>
</html>
