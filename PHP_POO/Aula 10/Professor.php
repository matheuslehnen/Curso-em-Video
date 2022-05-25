<?php
    require_once 'PessoaAula10.php';
class Professor extends PessoaAula10
{
    private $especialidade;
    private $salario;

    public function getEspecialidade(){
        return $this->especialidade;
    }
    public function setEspecialidade($e){
        $this->especialidade = $e;
    }
    public function getSalario(){
        return $this->salario;
    }
    public function setSalario($s){
        $this->salario = $s;
    }
    public function receberAumento($aumento){
        $this->setSalario($this->getSalario() + $aumento);
    }



}