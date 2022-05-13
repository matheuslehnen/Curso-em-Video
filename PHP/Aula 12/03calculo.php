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
        $num = $_GET["num"];
        $c = 1;
        echo "<h2> Mostrando a Tabuada de $num </h2>";
        while ($c <= 10) {
            $r = $num * $c;
            echo "$num x $c = $r </br>";
            $c++;
        }





        ?>
    </div>
</body>


</html>