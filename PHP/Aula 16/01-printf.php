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
        $p = "leite";
        $pr = 4.5;

        echo "O $p custa R$ " . number_format($pr, 2) . "<br>";
        printf("O %s custa R$ %.2f ", $p, $pr);

        /* parâmetros de printf 
                %d valor decimal (positivo ou negativo) 
                 %u valor decimal sem sinal (apenas positivos)
                 %f valor real
                 %s string
        */

        ?>
    </div>
</body>


</html>