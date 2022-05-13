<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Curso de PHP - CursoemVídeo.com</title>
</head>



<body>
    <div>
        <?php
        function soma($a, $b)
        {
            return $a + $b;
        }
        $x = 7;
        $y = 4;
        $r = soma($x, $y);
        echo "A soma entre $x e $y é igual a $r"
        ?>
    </div>
</body>


</html>