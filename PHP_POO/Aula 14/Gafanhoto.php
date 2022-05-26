<?php

require_once 'PessoaAula14.php';
class Gafanhoto extends PessoaAula15
{
    private $login;
    private $totAssistido;


    public function __construct($nome, $idade, $sexo, $login){
        parent::__construct($nome, $idade, $sexo);
        $this->login = $login;
        $this->totAssistido = 0;
    }

    public function viuMaisUm(){
        $this->totAssistido ++;
    }



    //--------------------------------------- METODO GETTERS AND SETTERS -----------------------------------------//

    public function getLogin()
    {
        return $this->login;
    }


    public function setLogin($login): void
    {
        $this->login = $login;
    }


    public function getTotAssistido()
    {
        return $this->totAssistido;
    }


    public function setTotAssistido($totAssistido): void
    {
        $this->totAssistido = $totAssistido;
    }





}