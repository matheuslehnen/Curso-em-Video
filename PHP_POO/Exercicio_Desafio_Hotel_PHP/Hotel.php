<?php
require_once 'Pessoa.php';
require_once 'Recepcao.php';

class Hotel
{
    private $IDQuarto;
    private $localizacao;
    private $fumante;
    private $valorDiaria;
    private $pax;
    private $situacao;
    private $ocupadoPor;


    public function __construct($IDQuarto, $localizacao, $fumante, $valorDiaria, $pax, $situacao)
    {
        $this->IDQuarto = $IDQuarto;
        $this->localizacao = $localizacao;
        if($fumante){
            $this->fumante = 'Permitido';
        } else {
            $this->fumante = 'Proibido';
        }
        $this->valorDiaria = $valorDiaria;
        $this->pax = $pax;
        if($situacao){
            $this->situacao = 'Ocupado';
        } else {
            $this->situacao = 'Vago';
        }
    }


    public function getIDQuarto()
    {
        return $this->IDQuarto;
    }


    public function setIDQuarto($IDQuarto): void
    {
        $this->IDQuarto = $IDQuarto;
    }



    public function getLocalizacao()
    {
        return $this->localizacao;
    }


    public function setLocalizacao($localizacao)
    {
        $this->localizacao = $localizacao;
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


    public function getPax()
    {
        return $this->pax;
    }


    public function setPax($pax)
    {
        $this->pax = $pax;
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



