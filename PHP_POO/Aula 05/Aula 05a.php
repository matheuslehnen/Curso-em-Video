<pre>
<?php

    require_once "Conta.php";

    $conta1 = new Conta();
    $conta1->abrirConta("CC");
    //$conta1->depositar(10);
    //$conta1->sacar(160);
    $conta1->pagarMensal();


    print_r($conta1);





?>
</pre>