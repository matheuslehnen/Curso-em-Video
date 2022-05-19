<?php

class Conta
{
    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;

    public function __construct()
    {
        $this->saldo = 0;
        $this->status = false;
        echo "<p>Conta criada com sucesso!</p>";
    }

    //Getters and Setters
    public function getNumConta(){
        return $this->numConta;
    }
    public function setNumConta($n){
        $this->numConta = $n;
    }
    public function getTipo(){
        return $this->tipo;
    }
    public function setTipo($t){
        $this->tipo = $t;
    }
    public function getDono(){
        return $this->dono;
    }
    public function setDono($d){
        $this->dono = $d;
    }
    public function getSaldo(){
        return $this->saldo;
    }
    public function setSaldo($s){
        $this->saldo = $s;
    }
    public function getStatus(){
        return $this->status;
    }
    public function setStatus($stat){
        $this->status = $stat;
    }

    //Métodos ou Funções
    public function abrirConta($t){
        $this->setTipo($t);
        $this->setStatus(true);
        if($this->tipo == "CC"){
            $this->setSaldo(50);
        }
        if($this->tipo == "CP"){
            $this->setSaldo(150);
        }
    }
    public function fecharConta(){
        if($this->getSaldo() > 0){
            echo "<p>Conta com dinheiro não pode ser fechada. Saque seu dinheiro primeiro.</p>";
        } else if ($this->getSaldo() < 0){
            echo "<p>Conta em débito. Impossível encerrar</p>";
        } else {
            $this->getStatus();
            echo "<p>Conta de " . $this->getDono() . " fechada com sucesso </p>";
        }
    }

    public function depositar($s){
        if($this->getStatus(true)){
            $this->setSaldo($this->getSaldo()+$s); // a = a + s;
            echo "<p>Deposito de R$ $s autorizado na conta de " . $this->getDono() . "</p>";
        } else {
            echo "<p>A conta está encerrada.</p>";
        }
    }
    public function sacar($s){
        if($this->getStatus(true)){
            if($this->getSaldo() < 0){
                echo "<p>Impossível sacar. Seu saldo é insuficiente.</p>" ;
            } else if($this->getSaldo() < $s) {
                echo "<p>Impossível realizar o saque. Sua conta ficaria negativa.</p>";

            } else {
                $this->setSaldo($this->getSaldo() - $s);
                echo "<p>Saque de R$ $s autorizado na conta de " . $this->getDono() . "</p>";
            }
        }
    }
    public function pagarMensal(){
        if($this->getTipo() == "CC") {
            $s = 12;
        } else if ($this->getTipo() == "CP"){
            $s = 20;
        }
        if($this->getStatus(true)) {
            $this->setSaldo($this->getSaldo() - $s);
            echo "<p>Mensalidade de R$ $s debitada na conta de " . $this->getDono() . "</p>";
        } else {
            echo "<p>Problemas com a conta. Não posso cobrar.</p>";
        }
    }
}

