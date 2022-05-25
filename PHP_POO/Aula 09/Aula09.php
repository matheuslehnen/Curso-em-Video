<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aula 09</title>
</head>
<body>
<pre>
<?php
    require_once 'Pessoa.php';
    require_once 'Livro.php';

    $p = array();
    $l = array();
    $p[0] = new PessoaAula10('John', 31, 'M');
    $p[1] = new PessoaAula10('Maria', 23, 'F' );

    $l[0] = new Livro('O Queijo e os Vermes', 'Carlo Ginzburg', 256, $p[0]);
    $l[1] = new Livro('POO com PHP', 'Maria de Souza', 500, $p[0]);
    $l[2] = new Livro('PHP Avançado', 'Ana Paula', 800, $p[1]);

    $l[0]->abrir();
    $l[0]->folhear(120);
    $l[0]->voltarPag();
    $l[0]->detalhes();

    $l[1]->avancarPag();
    $l[1]->detalhes();




?>
</pre>
</body>
</html>
