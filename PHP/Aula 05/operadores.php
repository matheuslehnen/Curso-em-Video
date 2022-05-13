<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Operações Aritméticas</title>
</head>

<body>
    <div>

        <?php
        $n1 = 3;
        $n2 = 2;
        $m = ($n1 + $n2) / 2;
        $n1 = $_GET["a"];
        $n2 = $_GET["b"];
        echo "A soma vale " . ($n1 + $n2);  // Neste bloco a resposta é impressa após a frase
        echo "<br/>A subtração vale " . ($n1 - $n2);
        echo "<br/>A multiplicação vale " . ($n1 * $n2);
        echo "<br/>A divisão vale " . ($n1 / $n2);
        echo "<br/>O resto vale " . ($n1 % $n2);
        echo "<br/>A média vale $m";





        /*$soma = $n1 + $n2;     //Este bloco é criando uma variável para a resposta do operador.
        $sub = $n1 - $n2;
        $mult = $n1 * $n2;
        $divisao = $n1 / $n2;
        $resto = $n1 % $n2;
        echo "A soma entre $n1 e $n2 é $soma ";
        echo "<br/>A subtração entre $n1 e $n2 é $sub ";
        echo "<br/>A multiplicação entre $n1 e $n2 é $mult ";
        echo "<br/>A divisão entre $n1 e $n2 é $divisao ";
        echo "<br/>A resto entre $n1 e $n2 é $resto ";*/
        ?>

    </div>
</body>

</html>