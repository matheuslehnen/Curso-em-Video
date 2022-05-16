<?php

class Caneta {
    public $modelo;
    private $cor;
    private $ponta;
    protected $carga;
    protected $tampada;


    //Metodo Construtor
    /*public function __construct(){
        $this->cor = "Azul";
        $this->tampar();
    }*/
    //O próximo exemplo é o metodo construtor com passagem de parâmetros.
    public function __construct($m, $c, $p){
        $this->modelo = $m;
        //$this->setModelo($m);  Pode ser utilizado também com setter.
        $this->cor = $c;
        $this->ponta = $p;
        $this->tampar();
    }

    public function tampar(){
        $this->tampada = true;
    }

     //Metodos Getters e Setters
    public function getModelo(){
        return $this->modelo;
    }
    public function setModelo($m){
        $this->modelo = $m;
    }
    public function getPonta(){
        return $this->ponta;
    }
    public function setPonta($p){
        $this->ponta = $p;
    }


}

?>