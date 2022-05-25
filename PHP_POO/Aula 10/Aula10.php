<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aula 10</title>
</head>
<body>
<pre>
    <?php
    require_once 'Funcionario.php';
    require_once 'PessoaAula10.php';
    require_once 'Professor.php';
    require_once 'Aluno.php';

    $p = array();
    $p[1] = new PessoaAula10();
    $p[2] = new Aluno();
    $p[3] = new Professor();
    $p[4] = new Funcionario();

    $p[1]->setNome("Pedro");
    $p[2]->setNome("Maria");
    $p[3]->setNome("Cláudio");
    $p[4]->setNome("Fabiana");

    $p[1]->setIdade(55);
    $p[2]->setIdade(20);
    $p[3]->setIdade(35);
    $p[4]->setIdade(45);
    $p[2]->setCurso("Informática");
    $p[2]->setMatricula("10203040");
    $p[3]->setSalario(2500.75);
    $p[4]->setSetor("Estoque");
    print_r($p);

    for($c=1;$c<5;$c++){
        $p[$c]->fazerAniver();
    }
    $p[2]->cancelarMatricula();
    $p[3]->receberAumento(200);
    $p[4]->mudarTrabalho('Caixa');
    print_r($p);

    ?>
</pre>
</body>
</html>
