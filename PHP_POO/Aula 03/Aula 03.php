<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aula 03</title>
</head>
<body>
<pre>
<?php
        require_once 'Caneta.php';
        $c1 = new Caneta;
        $c1->modelo = "BIC Cristal";
        $c1->cor = "Azul";
        // $c1->ponta = 0.5;    Não vai funcionar porque ponta está como "private".
        // $c1->carga = 99;     Não vai funcionar porque ponta está como "protected".
        // $c1->tampada = true; Não vai funcionar porque ponta está como "protected".

        $c1->rabiscar();
        $c1->tampar();          //Dentro do método é possível mexer em atributos privados e protected.
        print_r($c1);


?>
</pre>
</body>
</html>
