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
    <link rel="stylesheet" href="../css/areaRecepcao.css">
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
                <h3>Área reservada para os Recepcionistas!</h3>
            </div>
            <div id="subTitulo">
                <div id="Clientes"><a href="">Clientes</a></div>
                <div id="Quartos"><a href="poolQuartos.php">Quartos</a></div>
            </div>
            <div id="areaEscolhas">
                <div id="areaEscolhasClientes">
                    <div id="addClientes"><a href="cadastroCliente.php">addClientes</a></div>
                    <div id="editaClientes"><a href="editaCliente.php">editaClientes</a></div>
                    <div id="listaClientes"><a href='areaRecepcao.php?listaClientes'>listaClientes</a></div>
                <form action="main.php" method="post">
                    <input type="submit" class="botoesRecepcao" name="excluiClientes" id="excluiClientes" value="Excluir Clientes">
                </div>
                <div id="areaEscolhasQuartos">
                    <div id="addQuartos"><a href="cadastroQuarto.php">addQuartos</a></div>
                    <div id="editaQuartos"><a href="editaQuarto.php">editaQuartos</a></div>
                    <div id="listaQuartos"><a href='areaRecepcao.php?listaQuartos'>listaQuartos</a></div>
                    <input type="submit" class="botoesRecepcao" name="excluiQuartos" id="excluiQuartos" value="Excluir Quartos">
                </div>
                <div id="areaResposta">
                    <table id="resposta">
                        <?php
                        if (isset($_GET["listaClientes"])) {
                            $recepcionista->listaClientes();
                        }

                        if (isset($_GET["listaQuartos"])) {
                            $recepcionista->listaQuartos();
                        }
                        ?>
                    </table>
                </div>
                </form>


            </div>
    </section>
    <footer>
        <p><a href="https://github.com/matheuslehnen" target="_blank">&copyCopyright 2022 - by Matheus Lehnen</a>
        </p></br>
    </footer>
</div>

</body>
</html>
