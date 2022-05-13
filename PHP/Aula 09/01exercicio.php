<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Curso de PHP`- CursoemVídeo.com</title>
</head>



<body>
    <div>
        <?php
        $ano = isset($_GET["ano"]) ? $_GET["ano"] : "1900";
        echo "Você nasceu em $ano.<br/>";
        $idade = date("Y") - $ano;
        if ($idade >= 18) {
            echo "Fulano pode dirigir e votar!";
        } else {
            echo "Fulano não pode dirigir e nem votar!";
        }
        ?>
        <a href="01exercicio.html"><br>Voltar</a>
    </div>
</body>


</html>