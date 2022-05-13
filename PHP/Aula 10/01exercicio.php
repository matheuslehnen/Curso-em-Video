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
        $n = isset($_GET["num"]) ? $_GET["num"] : 0;
        $o = isset($_GET["operacao"]) ? $_GET["operacao"] : 1;

        switch ($o) {
            case 1:
                $r = $n * 2;
                break;
            case 2:
                $r = pow($n, 3);  //$n ** 3;
                break;
            case 3:
                $r = sqrt($n); //$n ** (1/2);
        }
        echo "O resultado da operação solicitada foi <span class='foco'> $r</span>";
        ?>
        <a href="01exercicio.html" class="botao">Voltar</a>
    </div>
</body>


</html>