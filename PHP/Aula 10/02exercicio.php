<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Curso de PHP- CursoemVídeo.com</title>
</head>



<body>
    <div>
        <?php
        $diaSemana = isset($_GET["ds"]) ? $_GET["ds"] : 0;

        switch ($diaSemana) {
            case 1:
                echo "Este dia é domingo, descanse pequeno gafanhoto!";
                break;
            case 2:
                echo "Este dia é segunda-feira e você precisa ir para a aula";
                break;
            case 3:
                echo "Este dia é terça-feira e você precisa ir para a aula";
                break;
            case 4:
                echo "Este dia é quarta-feira e você precisa ir para a aula";
                break;
            case 5:
                echo "Este dia é quinta-feira e você precisa ir para a aula";
                break;
            case 6:
                echo "Este dia é sexta-feira e você precisa ir para a aula";
                break;
            case 7:
                echo "Este dia é sábado, descanse pequeno gafanhoto!";
                break;
            default:
                echo "Este não é um dia da semana. Insira uma data válida!!";
        }
        ?>
        <br><a href="javascript:history.go(-1)" class="botao">Voltar</a>
    </div>
</body>


</html>