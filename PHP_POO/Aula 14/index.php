
<pre>
<?php
require_once 'Video.php';
require_once "Gafanhoto.php";

$v[0] = new Video("Aula 1 de POO");
$v[1] = new Video("Aula 12 de PHP");
$v[2] = new Video("Aula 15 de HTML");
print_r($v);

$g[0] = new Gafanhoto("Jubileu", 25, "M", "jubileu.logito");
$g[1] = new Gafanhoto("Jerusa", 29, "F", "jerusa.logito");

print_r($g);

?>
</pre>
