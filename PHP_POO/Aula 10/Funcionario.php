<?php
    require_once 'PessoaAula10.php';
class Funcionario extends PessoaAula10
{
    private $setor;
    private $trabalhando;

    public function getSetor(){
        return $this->setor;
    }
    public function setSetor($s){
        $this->setor = $s;
    }
    public function getTrabalhando(){
        return $this->trabalhando;
    }
    public function setTrabalhando($t){
        $this->trabalhando = $t;
    }

    public function mudarTrabalho($mudarTrabalho){
        $this->setSetor($mudarTrabalho);
    }



}