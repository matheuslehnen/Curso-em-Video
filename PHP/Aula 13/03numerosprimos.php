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
        $n = isset($_GET["num"]) ? $_GET["num"] : 1;
        echo "<h1> Analisando o número $n ...</h1>";
        echo "Valores múltiplos: ";
        $multi = 0;
        for ($c = 1; $c <= $n; $c++) {
            if ($n % $c == 0) {
                $multi++;
                echo "$c ";
            }
        }
        echo "</br>Total de múltiplos: $multi </br>";
        echo "Resultado: ";
        if ($multi <= 2) {
            echo " $n <span class='foco'>É PRIMO</span></br></br>";
        } else {
            echo " $n <span class='foco'>NÃO É PRIMO</span></br></br>";
        }
        ?>
        <a href="javascript:history.go(-1)" class='botao'>Voltar</a>
    </div>
</body>


</html>