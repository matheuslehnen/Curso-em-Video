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
        //Passagem de parâmetro por Valor
        function teste($x)
        {
            $x += 2;
            echo "<p>O valor de X é $x </p>";
        }
        $a = 3;
        teste($a);
        echo "<p>O valor de A é $a</p>";

        //Passagem de parâmetro por Referência. ()
        function testee(&$x)
        {
            $x += 2;
            echo "<p>O valor de X é $x </p>";
        }
        $a = 3;
        testee($a);
        echo "<p>O valor de A é $a</p>";




        ?>
    </div>
</body>


</html>