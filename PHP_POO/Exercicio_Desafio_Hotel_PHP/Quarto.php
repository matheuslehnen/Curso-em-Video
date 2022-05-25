<?php

require_once 'Hotel.php';

class Quarto extends Hotel
{
    private $IDQuarto;
    private $fumante;
    private $valorDiaria;
    private $situacao;
    private $ocupadoPor;


    public function __construct($IDQuarto, $localizacao, $fumante, $valorDiaria, $capacidade, $situacao)
    {
        parent::__construct($localizacao, $capacidade);
        $this->IDQuarto = $IDQuarto;
        if($fumante){
            $this->fumante = 'Permitido';
        } else {
            $this->fumante = 'Proibido';
        }
        $this->valorDiaria = $valorDiaria;
        if($situacao){
            $this->situacao = 'Ocupado';
        } else {
            $this->situacao = 'Vago';
        }
    }

  // ------------------------   Métodos Getters and Setters da Classe Quarto --------------------------------------//

    public function getIDQuarto()
    {
        return $this->IDQuarto;
    }


    public function setIDQuarto($IDQuarto)
    {
        $this->IDQuarto = $IDQuarto;
    }


    public function getFumante()
    {
        return $this->fumante;
    }


    public function setFumante($fumante)
    {
        $this->fumante = $fumante;
    }



    public function getValorDiaria()
    {
        return $this->valorDiaria;
    }


    public function setValorDiaria($valorDiaria)
    {
        $this->valorDiaria = $valorDiaria;
    }


    public function getSituacao()
    {
        return $this->situacao;
    }


    public function setSituacao($situacao)
    {
        $this->situacao = $situacao;
    }


    public function getOcupadoPor()
    {
        return $this->ocupadoPor;
    }


    public function setOcupadoPor($ocupadoPor)
    {
        $this->ocupadoPor = $ocupadoPor;
    }

}