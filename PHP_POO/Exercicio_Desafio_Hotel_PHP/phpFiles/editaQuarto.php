<?php
require_once 'Recepcionista.php';
$recepcionista = new Recepcionista();
$connection = $recepcionista->connection();
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
<main>
    <header>
        <div id="logo"><img src="../img/logoTheGallery.jpg" alt=""></div>
        <h1><a href="index.php">The Gallery Hostel</a></h1>
        <nav class="menu">
            <ul><h1>Menu Principal</h1>
                <li><a href="index.php">Home</a></li>
                <li><a href="Acomodações.php">Acomodações</a></li>
                <li><a href="Reservas.php">Reservas</a></li>
                <li><a href="Contato.php">Contato</a></li>
                <li><a href="index.php" onclick="window.open('areaLogin.php', 'Titulo da Janela', 'STATUS=NO, TOOLBAR=NO, LOCATION=NO, DIRECTORIES=NO, RESISABLE=NO, SCROLLBARS=NO, TOP=140, LEFT=500, WIDTH=500, HEIGHT=500');">Login</a></li>
                <li><a href="areaRecepcao.php">Recepção</a></li>
            </ul>
        </nav>
    </header>
    <section id="corpo">
        <div id="fundo">
            <div id="titulo">
                <h2>The Gallery Hostel Floripa</h2>
                <h3>Area reservada para recepção.</h3>
            </div>
            <form action="Recepcionista.php" method="post" id="formularioEditaQuarto">
                <fieldset class="fs">
                    <legend>Edite o quarto </legend>
                    <label for="fID">ID do Quarto:
                        <select name="fID" id="fID">
                            <?php  //FAZER APARECER APENAS OS QUARTOS OCUPADOS
                            $sql = mysqli_query($connection, "select id from quartos order by id;");
                            while ($valor = mysqli_fetch_assoc($sql)) {
                                echo "<option value='$valor[id]'>" .  $valor['id'] . "</option>";
                            }
                            ?>
                        </select>
                    </label><br>
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
                    </label><br>
                    <fieldset class="fieldsetinterno">
                        <legend>Permite fumantes:</legend>
                        <label for="fQuartoFumante">Sim<input type="radio" id="fQuartoFumante" name="fQuartoFumante" value="Fumante"></label>
                        <label for="fQuartoNao-fumante">Não<input type="radio" id="fQuartoNao-fumante" name="fQuartoFumante"value="Não-fumante"></label>
                    </fieldset>

                    <input id="botaoEditaQuarto" name="botaoEditaQuarto" class="botoesRecepcao" type="submit">
                </fieldset>
            </form>
        </div>
    </section>
</main>
    <footer>
        <a href="https://github.com/matheuslehnen" target="_blank">&copyCopyright 2022 - by Matheus Lehnen</a> <br>
    </footer>

</body>
</html>
