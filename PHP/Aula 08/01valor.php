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
        $valor = $_GET["v"];
        $raiz = sqrt($valor);
        echo "A raiz quadrada de $valor é " . number_format($raiz, 2); //2 numeros após a vírgula.
        ?>
        <a href="01exercicio.html">Voltar</a>

    </body>
</div>

</html>