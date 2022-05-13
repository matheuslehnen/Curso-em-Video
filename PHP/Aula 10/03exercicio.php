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
        $opcao = $_GET["estado"];

        switch ($opcao) {
                //região Norte
            case 1:
            case 2:
            case 3:
            case 4:
            case 5:
            case 6:
            case 7:
                echo "Você mora na região <span class='foco'>Norte</span>";
                break;
                //região Nordeste
            case 8:
            case 9:
            case 10:
            case 11:
            case 12:
            case 13:
            case 14:
            case 15:
            case 16:
                echo "Você mora na região <span class='foco'>Nordeste</span>";
                break;
                //região Centro-Oeste
            case 17:
            case 18:
            case 19:
            case 20:
                echo "Você mora na região <span class='foco'>Centro-Oeste</span>";
                break;
                //região Sudeste
            case 21:
            case 22:
            case 23:
            case 24:
                echo "Você mora na região <span class='foco'>Sudeste</span>";
                break;
                //região Sul
            case 25:
            case 26:
            case 27:
                echo "Você mora na região <span class='foco'>Sul</span>";
                break;
        }
        ?>
        <a href="javascript:history.go(-1)" class="botao">Voltar</a>
    </div>
</body>


</html>