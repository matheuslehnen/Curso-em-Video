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
        <form method="get" action="03calculo.php">
            <label for="num">Número:</label>
            <select name="num" id="num">
                <?php
                $c = 1;
                do {
                    echo "<option value='$c'> $c </option>";
                    $c++;
                } while ($c <= 10);
                ?>
            </select>
            <input type="submit" value="Tabuada" class="botao">
        </form>
    </div>
</body>


</html>