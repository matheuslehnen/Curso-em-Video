<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Funções Aritméticas</title>
    <style>
        h2 {
            font: 15pt Arial;
            color: #171559;
            font-weight: bolder;
        }
    </style>
</head>

<body>
    <div>
        <?php
        $v1 = $_GET["x"];
        $v2 = $_GET["y"];
        echo "<h2> Valores recebidos: $v1 e $v2 </h2>";
        echo "O valor absoluto de $v2 é " . abs($v2);    /*abs() Valor Absoluto*/
        echo "<br/>O valor de $v1<sup>$v2</sup> é " . pow($v1, $v2); /* pow() Potenciação*/
        echo "</br>A raíz quadrada de $v1 é " . sqrt($v1); /* sqrt() Raíz Quadrada*/
        echo "</br>O valor de $v2 arredondado é " . round($v2); /* round() Arredondamento. ceil() e floor() arredondam sempre para cima e para baixo, respectivamente*/
        echo "</br>A parte inteira de $v2 é " . intval($v2); /*intval() pega o Valor Inteiro da variável*/
        echo "</br>O valor de $v1 em moeda é R$ " . number_format($v1, 2, ",", "."); /* number_format() Formatação. Similar ao "%.2f" do C++*/
        ?>
    </div>

</body>

</html>