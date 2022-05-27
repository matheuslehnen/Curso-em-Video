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
                            <li><a href="../recepcao.html">Recepção</a></li>
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
                            require_once 'Pessoa.php';
                            require_once 'Hotel.php';
                            require_once 'Recepcionista.php';

                            $recepcionista = new Recepcionista(); //Apenas uma vez cria-se o objeto recepcao para poder utilizar todas as funcoes desta classe.

                            $recepcionista->cadastraCliente($_POST["fNome"], $_POST["fCPF"], $_POST["fNascimento"], $_POST["fEmail"], $_POST["fTelefone"], $_POST["fCidade"], $_POST["fUF"], $_POST["fFuma"]);
                            //$recepcionista->cadastraCliente('Miguelina', '697.360.290-85', '31/07/1916', 'miguelina@hotmail.com', '9999-9999', 'Porto Alegre', 'RS', false);
                            //$recepcionista->cadastraCliente('Joesley', '720.588.140-45', '31/07/1994', 'Joesley@hotmail', '9999-9999', 'Porto Alegre', 'RS', false);

                            //$recepcionista->cadastraQuarto($_POST["fLocalizacao"], $_POST["fQuartoFumante"], $_POST["fValorDiaria"], $_POST["fCapacidade"], $_POST["fSituacao"]);
                            //$recepcionista->cadastraQuarto('Sul', false, 520, 5, false);
                            //$recepcionista->cadastraQuarto('Sul', false, 250, 5, false);

                            $recepcionista->listaClientes();
                            //$recepcionista->listaQuartos();
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
                    </div>
                </section>
                <footer>
                    <p><a href="https://github.com/matheuslehnen" target="_blank">&copyCopyright 2022 - by Matheus Lehnen</a>
                    </p></br>
                </footer>
            </div>
            </body>
            </html>

