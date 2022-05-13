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
        $site = "Curso em video";
        $vetor = explode(" ", $site);
        print_r($vetor);
        //Pega cada palavra e coloca em um indice do vetor. Entre aspas é o caracter que definido para indicar a "explosao"

        ?>
    </div>
</body>


</html>