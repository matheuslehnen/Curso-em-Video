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
        $nome = "Tieli Lehnen";
        $novo = str_pad($nome, 30, "#", STR_PAD_RIGHT); //STR_PAD_LEFT e STR_PAD_BOTH
        print("Minha esposa $novo é linda!");
        ?>
    </div>
</body>


</html>