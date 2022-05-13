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
        $t = "Aqui temos um texto gigante criado pelo PHP e vai monstrar o funcionamento da função wordwrap";
        $r = wordwrap($t, 5, "<br/>\n", false); //o numero é de caracteres. O true ou false é para cortar palavras com 'x' caracteres no meio.
        echo "$r";
        ?>
    </div>
</body>


</html>