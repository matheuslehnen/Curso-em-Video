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

<header>
    <h1>RECEPÇÃO HOTEL</h1>

</header>
<section id="interface">
    <div class="caixa" id="caixa-1">
        <form action="index.php" method="post">
            <fieldset>
                <legend>Cadastro de Cliente</legend>
                <label for="fNome">Nome: <input type="text" name="fNome" placeholder="Nome do cliente"></label><br>
                <label for="fCPF">CPF: <input type="text" name="fCPF" placeholder="CPF do cliente"></label><br>
                <label for="fNascimento">Nascimento: <input type="date" name="fNascimento"></label><br>
                <label for="fEmail">Email: <input type="email" name="fEmail"></label><br>
                <label for="fTelefone">Telefone<input type="tel" name="fTelefone"></label><br>
                <label for="fCidade">Cidade: <input type="text" name="fCidade"></label><br>
                <label for="fUF">UF: <select name="fUF" id="fUF">
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
                        <option value="SC">Santa Catarina</option>
                        <option value="SP">São Paulo</option>
                        <option value="SE">Sergipe</option>
                        <option value="TO">Tocantins</option>
                        <option value="DF">Distrito Federal</option>
                    </select>
                        <legend>Fumante:</legend>
                        <label for="fFuma">Sim<input type="radio" id="fumante" name="fFuma"></label><br>
                        <label for="fFuma">Não<input type="radio" id="Nao-fumante" name="fFuma"></label><br>
                    <input class="botoes" type="submit">

            </fieldset>
        </form>
    </div>
    <div class="caixa" id="caixa-2">
        <form action="index.php" method="post">
            <fieldset>
                <legend>Cadastro de Quarto</legend>
                <label for="fLocalizacao">
                    Localização do quarto: <select name="fLocalizacao" id="fLocalizacao">
                        <option value="Norte">Norte</option>
                        <option value="Sul">Sul</option>
                        <option value="Leste">Leste</option>
                        <option value="Oeste">Oeste</option>
                    </select>
                </label><br>
                <label for="fValorDiaria">Valor da Diária: <input type="number" name="fValorDiaria" placeholder="Valor da diária em R$"></label><br>
                <label for="fCapacidade">Capacidade: <input type="text" name="fCapacidade"
                                                            placeholder="Capacidade do quarto"></label><br>
                <label for="fSituacao">Situação:

                    <select name="fSituacao" id="fSituacao">
                        <option value=false>Vago</option>
                        <option value=true>Ocupado</option>
                    </select>
                </label>
                    <legend>Permite fumantes:</legend>
                    <label for="fQuartoFumante">Sim<input type="radio" id="fQuartoFumante"
                                                          name="fQuartoFumante"></label><br>
                    <label for="fQuartoFumante">Não<input type="radio" id="fQuartoNao-fumante"
                                                          name="fQuartoFumante"></label><br>
                <input class="botoes" type="submit">
            </fieldset>
        </form>
    </div>
    <div class="caixa" id="caixa-3">
        <?php
        require_once 'Pessoa.php';
        require_once 'Hotel.php';
        require_once 'Recepcionista.php';
        //$localizacao, $fumante, $valorDiaria, $capacidade, $situacao

        $recepcionista = new Recepcionista(); //Apenas uma vez cria-se o objeto recepcao para poder utilizar todas as funcoes desta classe.


        //$recepcionista->cadastraCliente($_POST["fNome"], $_POST["fCPF"], $_POST["fNascimento"], $_POST["fEmail"], $_POST["fTelefone"], $_POST["fCidade"], $_POST["fUF"], $_POST["fFuma"]);
        //$recepcionista->cadastraCliente('Miguelina', '697.360.290-85', '31/07/1916', 'miguelina@hotmail.com', '9999-9999', 'Porto Alegre', 'RS', false);
        //$recepcionista->cadastraCliente('Joesley', '720.588.140-45', '31/07/1994', 'Joesley@hotmail', '9999-9999', 'Porto Alegre', 'RS', false);

        $recepcionista->cadastraQuarto($_POST["fLocalizacao"], $_POST["fQuartoFumante"], $_POST["fValorDiaria"], $_POST["fCapacidade"], $_POST["fSituacao"]);
        //$recepcionista->cadastraQuarto('Sul', false, 520, 5, false);
        //$recepcionista->cadastraQuarto('Sul', false, 250, 5, false);
        //$recepcionista->listaClientes();
        $recepcionista->listaQuartos();
        //$recepcionista->editaCliente(2,'Jocelina','99999999999','25/10/1950','jocelina@hotmail.com','(51)4006-8888','Porto Alegre','RS',false,'30');
        //$recepcionista->listaClientes();
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

    </div>
</section>

</body>
</html>
