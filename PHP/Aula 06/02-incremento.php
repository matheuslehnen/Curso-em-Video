<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Curso de PHP- CursoemVídeo.com</title>
</head>

<div>

    <body>
        <?php
        $atual = $_GET["aa"]; # Essa linha vai pegar o ano na URL
        echo "O ano atual é $atual e o ano anterior é " . --$atual; # Essa linha vai decrementar o ano antes de mostrar a variável na tela.
        ?>

    </body>
</div>

</html>