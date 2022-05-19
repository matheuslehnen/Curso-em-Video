<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>
<body>
    <h1>Projeto Controle Remoto</h1>
    <pre>
    <?php
    require_once 'ControleRemoto.php';
        $c = new ControleRemoto();
        $c->ligar();
        $c->abrirMenu();
        $c->desligar();
        $c->maisVolume();
        $c->menosVolume();
        $c->abrirMenu();
    ?>
    </pre>
</body>
</html>

