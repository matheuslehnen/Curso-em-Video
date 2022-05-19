<?php
    require_once 'Pessoa.php';
class Aluno extends Pessoa
{
    private $matricula;
    private $curso;

    /*public function __construct($n, $i, $s, $matricula, $curso)
    {
        parent::__construct($n, $i, $s);
        $this->matricula = $matricula;
        $this->curso = $curso;
    }*/

    public function getMatricula(){
        return $this->matricula;
    }
    public function setMatricula($m){
        $this->matricula= $m;
    }
    public function getCurso(){
        return $this->curso;
    }
    public function setCurso($c){
        $this->curso = $c;
    }
    public function cancelarMatricula(){
        $this->setMatricula(null);
        $this->setCurso(null);
    }
}