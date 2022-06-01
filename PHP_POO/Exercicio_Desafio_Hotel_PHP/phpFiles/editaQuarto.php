<?php
require_once 'Cliente.php';
require_once 'Quarto.php';
require_once 'Recepcionista.php';

$conexao = mysqli_connect('localhost', 'root', '');
$banco = mysqli_select_db($conexao, 'the_gallery_hostel');
mysqli_set_charset($conexao, 'utf8');


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
    <link rel="stylesheet" href="../css/editaQuarto.css">


</head>
<body>
<div id="interface">
    <header>
        <div id="logo"><img src="../img/logoTheGallery2.jpg" alt=""></div>
        <nav class="menu">
            <ul>
                <li><a href="http://localhost/Curso-em-Video/PHP_POO/Exercicio_Desafio_Hotel_PHP/phpFiles/areaRecepcao.php">Recepção</a></li>
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
                <h3>Area reservada para recepção.</h3>
            </div>
            <form action="main.php" method="post" id="formularioEditaQuarto">
                <fieldset class="fs">
                    <legend>Edite o quarto </legend>
                    <label for="fID">ID do Quarto: <input type="number" id="fID" name="fID" min="1" max="100" placeholder="ID "></label><br>
                    <label for="fLocalizacao"> Localização do quarto:
                        <select name="fLocalizacao" id="fLocalizacao">
                            <option value="Norte">Norte</option>
                            <option value="Sul">Sul</option>
                            <option value="Leste">Leste</option>
                            <option value="Oeste">Oeste</option>+
                        </select>
                    </label><br>
                    <label for="fValorDiaria">Valor da Diária: <input type="number" id="fValorDiaria" name="fValorDiaria" placeholder="R$"></label><br>
                    <label for="fCapacidade">Capacidade: <input type="text" id="fCapacidade" name="fCapacidade" placeholder="Pax"></label><br>
                    <label for="fSituacao">Situação:
                        <select name="fSituacao" id="fSituacao">
                            <option value="Vago">Vago</option>
                            <option value="Ocupado">Ocupado</option>
                        </select>
                    </label>
                    <fieldset class="fieldsetinterno">
                        <legend>Permite fumantes:</legend>
                        <label for="fQuartoFumante">Sim<input type="radio" id="fQuartoFumante" name="fQuartoFumante" value="Fumante"></label>
                        <label for="fQuartoNao-fumante">Não<input type="radio" id="fQuartoNao-fumante" name="fQuartoFumante"value="Não-fumante"></label>
                    </fieldset>
                    <input id="botaoEditaQuarto" name="botaoEditaQuarto" class="botoes" type="submit">
                </fieldset>
            </form>
        </div>
    </section>
    <footer>
        <a href="https://github.com/matheuslehnen" target="_blank">&copyCopyright 2022 - by Matheus Lehnen</a> <br>
    </footer>
</div>
</body>
</html>
