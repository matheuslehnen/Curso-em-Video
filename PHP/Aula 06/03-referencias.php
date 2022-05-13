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
        $a = 5;
        $b = &$a;  //& Este símbolo faz com que se crie uma referência de "a" com "b"
        $b += 5;
        echo "A variável A vale $a";
        echo "</br> A variável B vale $b";

        $site = "cursoemvideo"; //Aqui criou-se uma variável "site" e uma variável "curso em vídeo" dentro de uma variavel
        $$site = "cursoPHP";
        echo "</br>$site";
        echo "</br>$cursoemvideo";

        ?>

    </body>
</div>

</html>