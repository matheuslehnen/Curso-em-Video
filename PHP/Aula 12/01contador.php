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
        //contagem progressiva
        $c = 0;
        do {
            echo "$c ";
            $c += 2;
        } while ($c <= 20);

        //contagem regressiva
        $c = 10;
        do {
            echo "$c ";
            $c--;
        } while ($c >= 1);


        /*$c = 1;
        do {
            echo "$c ";
            $c++;
            if ($c % 3 == 0 && $c % 5 == 0) {
                echo "BuzzFizz ";
                $c++;
            }
            if ($c % 3 == 0) {
                echo "Fizz ";
                $c++;
            }
            if ($c % 5 == 0) {
                echo "Buzz ";
                $c++;
            }
        } while ($c <= 50); FIZZBUZZ TEST*/

        ?>
    </div>
</body>


</html>