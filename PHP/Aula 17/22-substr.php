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
        $site = "Curso em Video";
        $sub = substr($site, 0, 8); // O primeiro valor é a posição inicial. O segundo valor é quantas casas a direita ele vai andar. Espaços contam.
        echo "$sub";
        ?>
    </div>
</body>


</html>