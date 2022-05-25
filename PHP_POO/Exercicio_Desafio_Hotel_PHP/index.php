<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercicio Desafio Hotel</title>
    <link rel="stylesheet" href="estilo.css">

</head>
<body>
<section id="interface">
    <header>
        <h1>SISTEMA HOTEL RECEPÇÃO</h1>

    </header>

    <main>

        <form action="index.php" method="post" id="form">
            <fieldset id="formFora">
                <legend>Cadastro de Cliente</legend>
                <label for="fNome">Nome: <input type="text" name="fNome" class="inputsFormulario"></label><br>
                <label for="fCPF">CPF: <input type="text" name="fCPF" class="inputsFormulario"></label><br>
                <label for="fNascimento">Nascimento: <input type="text" name="fNascimento" class="inputsFormulario"></label><br>
                <label for="fEmail">Email: <input type="text" name="fEmail" class="inputsFormulario"></label><br>
                <label for="fTelefone">Telefone<input type="text" name="fTelefone" class="inputsFormulario"></label><br>
                <label for="fCidade">Cidade: <input type="text" name="fCidade" class="inputsFormulario"></label><br>
                <label for="fUF">UF: <input type="text" name="fUF" class="inputsFormulario"></label><br>

                <fieldset>
                    <legend>Fumante:</legend>
                    <label for="fFuma">Sim<input type="radio" id="fumante" name="fFuma"></label><br>
                    <label for="fFuma">Não<input type="radio" id="Não-fumante" name="fFuma"></label>
                </fieldset>
                <input class="botoes" type="submit">

            </fieldset>
        </form>
    </main>

    <div id="areaResposta">
        <pre>
    <?php
    require_once 'Pessoa.php';
    require_once 'Hotel.php';
    require_once 'Recepcionista.php';


    $recepcionista = new Recepcionista(); //Apenas uma vez cria-se o objeto recepcao para poder utilizar todas as funcoes desta classe.


    //$recepcionista->cadastraCliente($_POST["fNome"], $_POST["fCPF"], $_POST["fNascimento"], $_POST["fEmail"], $_POST["fTelefone"], $_POST["fCidade"], $_POST["fUF"], $_POST["fFuma"]);
    $recepcionista->cadastraCliente('Miguelina', '697.360.290-85', '31/07/1916', 'miguelina@hotmail.com', '9999-9999', 'Porto Alegre', 'RS', false);
    $recepcionista->cadastraCliente('Joesley', '720.588.140-45', '31/07/1994', 'Joesley@hotmail', '9999-9999', 'Porto Alegre', 'RS', false);

    //$recepcionista->cadastraQuarto('Norte', true, 150, 3, false);
    //$recepcionista->cadastraQuarto('Sul', false, 520, 5, false);
    //$recepcionista->cadastraQuarto('Sul', false, 250, 5, false);
    //$recepcionista->listaQuartos();
    //$recepcionista->editaCliente(2,'Jocelina','99999999999','25/10/1950','jocelina@hotmail.com','(51)4006-8888','Porto Alegre','RS',false,'30');
    $recepcionista->listaClientes();
    //$recepcionista->listaCliente(1);
    //$recepcionista->fazerCheckIn(1, 1, 5);
    //$recepcionista->listaQuartosOcupados();
    //$recepcionista->listaQuartosOcupados();
    //$recepcionista->fazerCheckOut(1, 1);
    //$recepcionista->listaQuartosDisponiveis();
    //$recepcionista->fazerCheckOut(2);
    //$recepcionista->listacliente(2);
    //$recepcionista->listaQuartos();
    //$recepcionista->verificarQuartoDisponivel();


    ?>
</pre>
    </div>

</section>



</body>
</html>
