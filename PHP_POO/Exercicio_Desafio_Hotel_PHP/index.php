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
                <label for="fNome">Nome: </label><input type="text" name="fNome" class="inputsFormulario"><br>
                <label for="fCPF">CPF: </label><input type="text" name="fCPF" class="inputsFormulario"><br>
                <label for="fNascimento">Nascimento: </label><input type="text" name="fNascimento" class="inputsFormulario"><br>
                <label for="fEmail">Email: </label><input type="text" name="fEmail" class="inputsFormulario"><br>
                <label for="fTelefone">Telefone</label><input type="text" name="fTelefone" class="inputsFormulario"><br>
                <label for="fCidade">Cidade: </label><input type="text" name="fCidade" class="inputsFormulario"><br>
                <label for="fUF">UF: </label><input type="text" name="fUF" class="inputsFormulario"><br>

                <fieldset>
                    <legend>Fumante:</legend>
                    <label for="fFuma">Sim</label><input type="radio" id="fumante" name="fFuma"><br>
                    <label for="fFuma">Não</label><input type="radio" id="Não-fumante" name="fFuma">
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
    require_once 'Recepcao.php';


    $recepcao = new Recepcao(); //Apenas uma vez cria-se o objeto recepcao para poder utilizar todas as funcoes desta classe.


    $recepcao->cadastraCliente($_POST["fNome"], $_POST["fCPF"], $_POST["fNascimento"], $_POST["fEmail"], $_POST["fTelefone"], $_POST["fCidade"], $_POST["fUF"], $_POST["fFuma"]);
    //$recepcao->cadastraCliente('Miguelina', '697.360.290-85', '31/07/1916', 'miguelina@hotmail.com', '9999-9999', 'Porto Alegre', 'RS', false);
    //$recepcao->cadastraCliente('Joesley', '720.588.140-45', '31/07/1994', 'Joesley@hotmail', '9999-9999', 'Porto Alegre', 'RS', false);

    //$recepcao->cadastraQuarto('Norte', true, 150, 3, false);
    //$recepcao->cadastraQuarto('Sul', false, 520, 5, false);
    //$recepcao->cadastraQuarto('Sul', false, 250, 5, false);

    //$recepcao->editaCliente(2,'Jocelina','99999999999','25/10/1950','jocelina@hotmail.com','(51)4006-8888','Porto Alegre','RS',false,'30');
    //$recepcao->listaClientes();
    //$recepcao->listaCliente(1);
    //$recepcao->fazerCheckIn(1, 1, 5);
    //$recepcao->listaQuartosOcupados();
    //$recepcao->listaQuartosOcupados();
    //$recepcao->fazerCheckOut(1, 1);
    //$recepcao->listaQuartosDisponiveis();
    //$recepcao->fazerCheckOut(2);
    //$recepcao->listacliente(2);
    //$recepcao->listaQuartos();
    //$recepcao->verificarQuartoDisponivel();



    ?>
</pre>
    </div>

</section>



</body>
</html>
