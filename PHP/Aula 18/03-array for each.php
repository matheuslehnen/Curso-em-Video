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
            <table border="1"><tr>
        <?php
        $c = range(5, 20, 2); //O primeiro valor vai na posição 0. O segundo valor posição final. O terceiro número é o 'passo'. Aumenta de 2 em 2 até 20.
        foreach ($c as $valor) {
            echo "<td>$valor ";
        }
        ?>
            </table>
        </pre>
    </div>
</body>


</html>