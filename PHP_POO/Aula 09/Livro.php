<?php

require_once 'Pessoa.php';
require_once 'Publicacao.php';

class Livro implements Publicacao{
    private $titulo;
    private $autor;
    private $totPaginas;
    private $pagAtual;
    private $aberto;
    private $leitor;

    function __construct($t,$a, $totPg, $le){
        $this->titulo = $t;
        $this->autor = $a;
        $this->totPaginas = $totPg;
        $this->leitor = $le;
    }

    public function getTitulo(){
        return $this->titulo;
    }
    public function setTitulo($t){
        $this->titulo = $t;
    }
    public function getAutor(){
        return $this->autor;
    }
    public function setAutor($a){
        $this->autor = $a;
    }
    public function getTotPaginas(){
        return $this->totPaginas;
    }
    public function setTotPaginas($totPg){
        $this->totPaginas = $totPg;
    }
    public function getPagAtual(){
        return $this->pagAtual;
    }
    public function setPagAtual($PA){
        $this->pagAtual = $PA;
    }
    public function getAberto(){
        return $this->aberto;
    }
    public function setAberto($ab){
        $this->aberto = $ab;
    }
    public function getLeitor(){
        return $this->leitor;
    }
    public function setLeitor($le){
        $this->aberto = $le;
    }

    public function detalhes(){
        echo "<hr>Livro ". $this->getTitulo() . " escrito por " . $this->getAutor();
        echo "<br>Páginas: " . $this->getTotPaginas() . ". Atualmente na página: " . $this->getPagAtual();
        echo "<br>Sendo lido por " . $this->leitor->getNome() . ".";
    }


    public function abrir()
    {
        $this->aberto = true;
    }

    public function fechar()
    {
        $this->aberto = false;
    }

    public function folhear($p)
    {
        if($this->getTotPaginas() < $p) {
            $this->pagAtual = 0;
        } else {
            $this->pagAtual = $p;
        }
    }

    public function avancarPag()
    {
        if($this->getTotPaginas() > $this->getPagAtual()) {
        $this->setPagAtual($this->getPagAtual() + 1);
        //$this->pagAtual++;
        } else {
            echo "<p>Você está na última pagina.</p>";
        }
    }

    public function voltarPag()
    {
        if($this->getPagAtual() > 1){
        $this->setPagAtual($this->getPagAtual() - 1);
        //$this->pagAtual--;
        } else {
            echo "<p>É impossível voltar antes da primeira pagina.</p>";
        }
    }
}
