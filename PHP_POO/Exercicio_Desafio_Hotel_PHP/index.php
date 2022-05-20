<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercicio Desafio Hotel</title>
</head>
<body>
<pre>
    <?php
    require_once 'Cliente.php';
    require_once 'Quarto.php';
    require_once 'Recepcao.php';
    $c = array();
    $c[1] = new Cliente('Matheus Lehnen', '05555', 31/07/1990, 'matheuslehnen@hotmail.com', '3225-2987', 'Florianópolis', 'SC', false);
    $c[2] = new Cliente('Tieli', '03333', '31/07/1994','tieli@hotmail','9999-9999','Porto Alegre','RS', true);
    print_r($c);


    ?>
</pre>
</body>
</html>
