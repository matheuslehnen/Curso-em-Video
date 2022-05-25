<?php

require_once 'Aluno.php';
class Bolsista extends Aluno
{
    private $bolsa;


    public function RenovarBolsa(){
        echo "<p>Bolsa Renovada!</p>";
    }

    public function PagarMensalidade(){
        echo "<p>$this->nome é bolsista! Então paga com desconto!</p>";
    }


    public function getBolsa()
    {
        return $this->bolsa;
    }


    public function setBolsa($bolsa): void
    {
        $this->bolsa = $bolsa;
    }



}