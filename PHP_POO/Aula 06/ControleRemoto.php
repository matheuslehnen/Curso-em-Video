<?php
    require_once 'Controlador.php';
    class ControleRemoto implements Controlador {
    // Atributos
    private $volume;
    private $ligado;
    private $tocando;

    // Métodos especiais
    public function __construct(){
        $this->volume = 50;
        $this->ligado = false;
        $this->tocando = false;
    }

    // Métodos Getters and Setters
    private function getVolume(){
        return $this->volume;
    }
    private function setVolume($v){
        $this->volume = $v;
    }
    private function getLigado(){
        return $this->ligado;
    }
    private function setLigado($l){
        $this->ligado = $l;
    }
    private function getTocando(){
        return $this->tocando;
    }
    private function setTocando($t){
        $this->tocando = $t;
    }

        public function ligar()
        {
            $this->setLigado(true);
        }

        public function desligar()
        {
            $this->setLigado(false);
        }
        public function abrirMenu()
        {
            echo "<p>------ Menu --------</p>";
            echo "<br>Está ligado?:</br>" . ($this->getLigado() ? "SIM" : "NAO");
            echo "<br>Está tocando?:</br>" . ($this->getTocando() ? "SIM" : "NAO");
            if ($this->getLigado(true)) {
                echo "<br>Volume: </br>" .
                    $this->getVolume();
                for ($i = 10; $i <= $this->getVolume(); $i += 10) {
                    echo "|";
                }
            }
            echo "<br>";
        }
        public function fecharMenu()
        {
            echo "<br>Fechando Menu...";
        }
        public function maisVolume()
        {
            if($this->getLigado()) {
                $this->setVolume($this->getVolume() + 10);
            } else{
                echo "<p>Não posso aumentar o volume porque o aparelho está desligado.</p>";
            }
        }
        public function menosVolume()
        {
            if($this->getLigado()){
                $this->setVolume($this->getVolume() - 10);
            } else {
                echo "<p>Não posso diminuir o volume porque o aparelho está desligado.</p>";
            }
        }
        public function ligarMudo()
        {
            if($this->getLigado() && $this->getVolume() > 0){
                $this->setVolume(0);
            }
        }
        public function desligarMudo()
        {
            if($this->getLigado() && $this->getVolume() == 0){
                $this->setVolume(50);
            }
        }
        public function play()
        {
            if($this->getLigado() && !$this->getTocando()){
                $this->setTocando(true);
            }
        }
        public function pause()
        {
           if($this->getLigado() && $this->getTocando()){
           $this->setTocando(false);
           }
        }
    }