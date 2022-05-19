<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aula 08</title>
</head>
<body>
    <?php
        require_once 'Lutador.php';
        require_once 'Luta.php';

        $l = array();
        $l[0] = new Lutador('Myke Tyson', 'EUA', 35, 1.86, 95, 11, 2, 5);
        $l[1] = new Lutador('Putscript', 'francês', 29, 1.68, 63, 14, 2, 3);
        $l[2] = new Lutador('Snapshadow', 'EUA', 20, 1.65, 80.9, 13, 5, 1);
        $l[3] = new Lutador('Anderson Selva', 'brasileiro', 40, 1.80, 73, 28, 2, 2);
        $l[4] = new Lutador('Maguila', 'brasileiro', 60, 1.95, 100, 23, 15, 13);
        $l[5] = new Lutador('Lomaschenko', 'ucraniano', 25, 1.75, 65, 20, 0, 1);

        $UEC01 = new Luta();
        $UEC01->marcarLuta($l[0], $l[4]);
        $UEC01->lutar();

        $l[0]->apresentar();
        $l[4]->apresentar();

    ?>
</body>
</html>