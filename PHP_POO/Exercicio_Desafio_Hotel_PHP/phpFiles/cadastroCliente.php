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
    <link rel="stylesheet" href="../css/cadastroClientes.css">

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
            <form action="main.php" method="post" id="formularioCadastro">
                <fieldset class="fs">
                    <legend>Cadastro de Cliente</legend>
                    <label for="fNome">Nome: <input type="text" id="fNome" name="fNome" size="20" maxlength="30" placeholder="Nome Completo"></label><br>
                    <label for="fCPF">CPF: <input type="text" id="fCPF" name="fCPF" placeholder="CPF do cliente"></label><br>
                    <label for="fNascimento">Nascimento: <input type="text" id="fNascimento" name="fNascimento" placeholder="Data de Nascimento"></label><br>
                        <label for="fEmail">Email: <input type="email" id="fEmail" name="fEmail" size="20" maxlength="40" placeholder="Email"></label><br>
                        <label for="fTelefone">Telefone<input type="tel" id="fTelefone" name="fTelefone" placeholder="(xx)xxxx-xxxx"></label><br>
                        <label for="fCidade">Cidade: <input type="text" id="fCidade" name="fCidade" placeholder="Cidade"></label><br>
                        <label for="fUF">UF:</label>
                            <select id="fUF" name="fUF">
                                <option value="AC">Acre</option>
                                <option value="AL">Alagoas</option>
                                <option value="AP">Amapá</option>
                                <option value="AM">Amazonas</option>
                                <option value="BA">Bahia</option>
                                <option value="CE">Ceará</option>
                                <option value="ES">Espírito Santo</option>
                                <option value="GO">Goiás</option>
                                <option value="MA">Maranhão</option>
                                <option value="MT">Mato Grosso</option>
                                <option value="MS">Mato Grosso do Sul</option>
                                <option value="MG">Minas Gerais</option>
                                <option value="PA">Pará</option>
                                <option value="PB">Paraíba</option>
                                <option value="PR">Paraná</option>
                                <option value="PE">Pernambuco</option>
                                <option value="PI">Piauí</option>
                                <option value="RJ">Rio de Janeiro</option>
                                <option value="RN">Rio Grande do Norte</option>
                                <option value="RS">Rio Grande do Sul</option>
                                <option value="RO">Rondônia</option>
                                <option value="RR">Roraima</option>
                                <option value="SC" selected="selected">Santa Catarina</option>
                                <option value="SP">São Paulo</option>
                                <option value="SE">Sergipe</option>
                                <option value="TO">Tocantins</option>
                                <option value="DF">Distrito Federal</option>
                        </select>
                            <fieldset class="fieldsetinterno"><legend>Fumante:</legend>
                                <label for="fumante">Sim<input type="radio" id="fumante" name="fFuma" class="fFuma" value="1"></label>
                                <label for="Nao-fumante">Não<input type="radio" id="Nao-fumante" name="fFuma" class="fFuma" value="0"></label>
                            </fieldset>
                            <input id="botaoCadastroCliente" name="botaoCadastroCliente" class="botoes" type="submit">
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
