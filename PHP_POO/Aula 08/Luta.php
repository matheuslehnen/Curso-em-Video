<?php
    require_once 'Lutador.php';

class Luta {
    private $desafiado;
    private $desafiante;
    private $aprovada;

    public function getDesafiado(){
        return $this->desafiado;
    }
    public function getDesafiante(){
        return $this->desafiante;
    }
    public function getAprovada(){
        return $this->aprovada;
    }
    public function setDesafiado($dd){
        $this->desafiado = $dd;
    }
    public function setDesafiante($d){
        $this->desafiante = $d;
    }
    public function setAprovada($a){
        $this->aprovada = $a;
    }

    public function marcarLuta($l1, $l2){
        if($l1->getCategoria() == $l2->getCategoria() && ($l1 != $l2)) {
            $this->setAprovada(true);
            $this->setDesafiado($l1);
            $this->setDesafiante($l2);
        } else {
            $this->setAprovada(false);
            $this->setDesafiado(null);
            $this->setDesafiante(null);
        }
    }
    public function lutar(){
        if($this->getAprovada(true)){
            $this->getDesafiado()->apresentar();
            $this->getDesafiante()->apresentar();
            $vencedor = rand(0,2);
            switch($vencedor){
                case 0: //empate
                    echo "<p>Empate!</p>";
                    $this->getDesafiado()->empatarLuta();
                    $this->getDesafiante()->empatarLuta();
                    break;
                case 1: // Desafiado 1 vence.
                    echo $this->getDesafiado()->getNome() . " VENCEEEEE A LUTA!";
                    $this->getDesafiado()->ganharLuta();
                    $this->getDesafiante()->perderLuta();
                    break;
                case 2: //Desafiante 2 vence.
                    echo $this->getDesafiante()->getNome() . " VENCEEEEE A LUTA!";
                    $this->getDesafiado()->perderLuta();
                    $this->getDesafiante()->ganharLuta();
                    break;
            }
        } else {
            echo "<p>Luta não pode acontecer!</p>";
        }
    }


}