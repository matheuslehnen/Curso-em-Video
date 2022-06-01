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
    <link rel="stylesheet" href="../css/main.css">
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
                <li><a href="../index.html">Acomodações</a></li>
                <li><a href="../index.html">Reservas</a></li>
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
            <div id="areaResposta">
                <?php
//----------------------------------------------------- CLIENTES ---------------------------------------------------//

                //Adiciona um cliente no banco de dados
                if ($_POST) {
                    if (isset($_POST["botaoCadastroCliente"])) {
                        $recepcionista->cadastraCliente($_POST["fNome"], $_POST["fCPF"], $_POST["fNascimento"], $_POST["fEmail"], $_POST["fTelefone"], $_POST["fCidade"], $_POST["fUF"], $_POST["fFuma"]);
                        header('Location: '.'areaRecepcao.php');
                    }
                }

                //Edita um cliente no banco de dados
                if($_POST){
                    if (isset($_POST["botaoEditaCliente"])) {
                        $recepcionista->editaCliente($_POST["fID"], $_POST["fNome"], $_POST["fCPF"], $_POST["fNascimento"], $_POST["fEmail"], $_POST["fTelefone"], $_POST["fCidade"], $_POST["fUF"], $_POST["fFuma"]);
                        header('Location: '.'areaRecepcao.php');
                    }
                }

                //Exclui um cliente no banco de dados
                if($_POST){
                    if (isset($_POST["excluiClientes"])) {
                        if(!empty($_POST["checked"])) {
                            foreach($_POST["checked"] as $id){
                                $recepcionista->excluiClientes($id);
                            }
                        }
                        header('Location: '.'areaRecepcao.php');
                    }
                }

//----------------------------------------------------- QUARTOS ---------------------------------------------------//

                //Adiciona um quarto no banco de dados
                if ($_POST) {
                    if (isset($_POST["botaoCadastroQuarto"])) {
                        $recepcionista->cadastraQuarto($_POST["fLocalizacao"], $_POST["fQuartoFumante"], $_POST["fValorDiaria"], $_POST["fCapacidade"], $_POST["fSituacao"]);
                        header('Location: '.'areaRecepcao.php');
                    }
                }


                //Edita um quarto no banco de dados
                if($_POST){
                    if (isset($_POST["botaoEditaQuarto"])) {
                        $recepcionista->editaQuarto($_POST["fID"], $_POST["fLocalizacao"], $_POST["fQuartoFumante"], $_POST["fValorDiaria"], $_POST["fCapacidade"], $_POST["fSituacao"]);
                        header('Location: '.'areaRecepcao.php');
                    }
                }

                //Exclui um quarto no banco de dados
                if($_POST){
                    if (isset($_POST["excluiQuartos"])) {
                        if(!empty($_POST["checked"])) {
                            foreach($_POST["checked"] as $IDQuarto){
                                $recepcionista->excluiQuartos($IDQuarto);
                            }
                        }
                        header('Location: '.'areaRecepcao.php');
                    }
                }


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

