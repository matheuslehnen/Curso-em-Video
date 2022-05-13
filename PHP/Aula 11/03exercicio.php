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
        $i = isset($_GET["inicio"]) ? $_GET["inicio"] : 0;
        $f = isset($_GET["final"]) ? $_GET["final"] : 0;
        $c = isset($_GET["incremento"]) ? $_GET["incremento"] : 1;

        while ($i <= $f) {
            echo "$i ";
            $i += $c;
        }
        while ($i >= $f) {
            echo "$i ";
            $i -= $c;
        }




        ?>
    </div>
</body>


</html>