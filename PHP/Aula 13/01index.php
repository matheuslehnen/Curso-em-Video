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
        for ($i = 1; $i <= 10; $i++) {
            echo "$i ";
        }

        echo "</br>";

        for ($i = 10; $i >= 1; $i--) {
            echo "$i ";
        }

        echo "</br>";

        for ($i = 0; $i <= 50; $i += 5) {
            echo "$i ";
        }

        echo "</br>";

        for ($i = 30; $i >= 10; $i -= 2) {
            echo "$i ";
        }


        ?>
    </div>
</body>


</html>