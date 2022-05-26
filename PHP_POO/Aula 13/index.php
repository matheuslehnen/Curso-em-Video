<pre>
<?php

require_once 'Lobo.php';
require_once 'Cachorro.php';



$m = new Mamifero();
$l = new Lobo();
$c = new Cachorro();

/*
$m->emitirSom();
$l->emitirSom();
$c->emitirSom();
*/

$c->reagirFrase("Olá");
$c->reagirFrase("Vai apanhar");
$c->reagirHora(19, 00);
$c->reagirDono(true);
$c->reagirIdadePeso(7,4.5);


?>
</pre>
