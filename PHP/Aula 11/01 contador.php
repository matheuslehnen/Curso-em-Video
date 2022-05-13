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
        $c = 1;
        while ($c <= 10) {
            echo "$c" . "</br>";
            $c++;
        }

        $a = 10;
        while ($a >= 1) {
            echo "$a";
            $a--; //ou c-=1
        }


        ?>
    </div>
</body>


</html>