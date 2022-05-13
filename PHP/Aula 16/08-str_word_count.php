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
        // string word count
        $frase = "Eu vou estudar PHP";
        $cont = str_word_count($frase, 0);
        // 0 - conta as palavras da frase ;
        // 1 - Cria um array com as palavras ; 
        // 2 - Cria um array guardando a posição das palavras
        print_r($cont);
        ?>
    </div>
</body>


</html>