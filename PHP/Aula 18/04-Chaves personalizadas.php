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
        <pre>
        <?php //Pode-se definir as posições em que deseja inserir um vetor. As posições não precisam nem estar em ordem.
        $v = array(
            5 => "A",
            1 => "B",
            2 => "C",
            3 => "D"
        );
        $v[] = "E"; //Ao inserir com colchetes vazios. O valor vai diretamente para o último.
        print_r($v);
        echo "<br>";
        unset($v[6]); //desaloca o valor da posição indicada!
        foreach ($v as $valor) {
            echo "$valor ";
        }

        ?>
        </pre>
    </div>
</body>


</html>