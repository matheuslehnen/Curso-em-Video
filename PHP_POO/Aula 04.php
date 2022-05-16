<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aula 04</title>
</head>
<body>
<pre>
<?php
        require_once 'Caneta.php';

        $c1 = new Caneta("BIC", "Azul", 0.5);
        $c2 = new Caneta("Stabilo", "Vermelha", 3.0);
        print_r($c1);
        print_r($c2);


        /*
        require_once 'Caneta.php';
        $c1 = new Caneta;
        $c1->setModelo("BIC Cristal");
        $c1->setPonta(0.5);
        print "Eu tenho uma caneta {$c1->getModelo()} de ponta {$c1->getPonta()}";*/



?>
</pre>
</body>
</html>
