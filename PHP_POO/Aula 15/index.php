
<pre>
<?php
require_once 'Video.php';
require_once 'Gafanhoto.php';
require_once 'Visualizacao.php';

$v[0] = new Video("Aula 1 de POO");
$v[1] = new Video("Aula 12 de PHP");
$v[2] = new Video("Aula 15 de HTML");
//print_r($v);

$g[0] = new Gafanhoto("Jubileu", 25, "M", "jubileu.logito");
$g[1] = new Gafanhoto("Jerusa", 29, "F", "jerusa.logito");

//print_r($g);


$vis[0] = new Visualizacao($g[0], $v[2]); // JUBILEU assiste HTML5
$vis[1] = new Visualizacao($g[0], $v[1]); // JUBILEU assiste PHP
$vis[0]->avaliar();
$vis[1]->avaliarPorcentagem(85);

print_r($vis);

?>
</pre>
