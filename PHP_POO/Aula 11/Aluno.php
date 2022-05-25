<?php

require_once 'PessoaAula11.php';
class Aluno extends PessoaAula11
{
    private $matricula;
    private $curso;


    public function PagarMensalidade(){
        echo "<p> Pagando mensalidade do aluno $this->nome   </p>>";
    }


    public function getMatricula()
    {
        return $this->matricula;
    }


    public function setMatricula($matricula): void
    {
        $this->matricula = $matricula;
    }


    public function getCurso()
    {
        return $this->curso;
    }


    public function setCurso($curso): void
    {
        $this->curso = $curso;
    }



}