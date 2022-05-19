<?php

class Lutador {
    private $nome;
    private $nacionalidade;
    private $idade;
    private $altura;
    private $peso;
    private $categoria;
    private $vitorias;
    private $derrotas;
    private $empates;

    public function __construct($no, $na, $i, $a, $p, $v, $e, $d)
    {
        $this->nome = $no;
        $this->nacionalidade = $na;
        $this->idade = $i;
        $this->altura = $a;
        $this->setPeso($p);
        $this->vitorias = $v;
        $this->derrotas = $d;
        $this->empates = $e;
    }


    public function getNome(){
        return $this->nome;
    }
    public function setNome($no){
        $this->nome = $no;
    }
    public function getNacionalidade(){
        return $this->nacionalidade;
    }
    public function setNacionalidade($na){
        $this->nacionalidade = $na;
    }
    public function getIdade(){
        return $this->idade;
    }
    public function setIdade($i){
        $this->idade = $i;
    }
    public function getAltura(){
        return $this->altura;
    }
    public function setAltura($a){
        $this->altura = $a;
    }
    public function getPeso(){
        return $this->peso;
    }
    public function setPeso($p){
        $this->peso = $p;
        $this->setCategoria();
    }
    public function getCategoria(){
        return $this->categoria;
    }
    public function setCategoria(){
        if($this->getPeso() < 52.2){
            $this->categoria = 'Inválido';
        } elseif($this->getPeso() <= 70.3) {
            $this->categoria = 'Leve';
        } elseif($this->getPeso() <= 83.9){
            $this->categoria = 'Médio';
        } elseif ($this->getPeso() <= 120.2) {
            $this->categoria = 'Pesado';
        } else {
            $this->categoria = 'Inválido';
        }

    }
    public function getVitorias(){
        return $this->vitorias;
    }
    public function setVitorias($v){
        $this->vitorias = $v;
    }
    public function getDerrotas(){
        return $this->derrotas;
    }
    public function setDerrotas($d){
        $this->derrotas = $d;
    }
    public function getEmpates(){
        return $this->empates;
    }
    public function setEmpates($e){
        $this->empates = $e;
    }

    public function apresentar(){
        echo "<p>---------------------------------------------------------------------------------------------------------------------------------------------------------------------</p>";
        echo "<p>CHEGOU A HORA!!! Este é o lutador " . $this->getNome() . ", diretamente do " . $this->getNacionalidade() . ", ele tem " . $this->getIdade() . " anos, medindo " . $this->getAltura() . " de altura e pesando " . $this->getPeso() . "Kg</p>";
        echo "<p>com um cartel de: " . $this->getVitorias() . " vitórias, " . $this->getEmpates() . " empates e " . $this->getDerrotas() . " derrotas. </p>";
        echo "<br>";
    }
    public function status(){
        echo "<p>Lutador: " . $this->getNome() . "</p>";
        echo "<p>Origem: " . $this->getNacionalidade() . "</p>";
        echo "<p>" . $this->getIdade() . " anos</p>";
        echo "<p>" . $this->getAltura() . " m de altura</p>";
        echo "<p>pesando " . $this->getPeso() . "Kg</p>";
        echo "<p>Ganhou: " . $this->getVitorias() . "</p>";
        echo "<p>Empatou:"  . $this->getEmpates() . "</p>";
        echo "<p>Perdeu: " . $this->getDerrotas() . "</p>";
    }
    public function ganharLuta(){
        $this->setVitorias($this->getVitorias() + 1);
    }
    public function empatarLuta(){
        $this->setEmpates($this->getEmpates() + 1);
    }
    public function perderLuta(){
        $this->setDerrotas($this->getDerrotas() + 1);
    }




}
