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
        $res = soma(3, 4, 8, 1, 2);
        function soma()
        {
            $p = func_get_args();
            $tot = func_num_args();
            $s = 0;
            for ($i = 0; $i < $tot; $i++) {
                $s = $s + $p[$i];
            }
            return $s;
        }
        echo "$res";

        ?>
    </div>
</body>


</html>