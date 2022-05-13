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
        <pre>
        <?php
        $v = array("A", "J", "M", "X", "K");
        print_r($v);
        var_dump($v); //var dump fala a quantidade de elementos e o tipo dos elementos.
        echo count($v); //count também serve para quantidade de elementos.
        array_push($v, 8); //adiciona elemento no final do vetor
        array_pop($v); //desalocar o último valor do array
        array_unshift($v, 7); // Vai incluir o valor '7' no ínicio do vetor e desloca todos à direita.
        array_shift($v); // Vai eliminar o primeiro valor do vetor.
        sort($v); //ordenar vetor
        rsort($v); //ordenar na ordem "REVERSA"
        asort($v); //Ordena os valores do vetor e altera de forma associativa os índices também.
        arsort($v); // Ordena os valores do vetor de forma associativa e de forma reversa.
        ksort($v); //Ordena o array pelo índice. K é key e o índice. 
        krsort($v); //Ordena o array pelo índice. K é key e o índice. 
        ?>
        </pre>
    </div>
</body>


</html>