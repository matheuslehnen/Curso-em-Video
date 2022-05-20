<?php
require_once 'Cliente.php';
require_once 'Recepcao.php';
class Quarto
{
    private $NumQuarto;
    private $localizacao;
    private $fumante;
    private $diaria;
    private $pax;
    private $situacao;

    public function __construct($NumQuarto, $localizacao, $fumante, $diaria, $pax, $situacao)
    {
        $this->NumQuarto = $NumQuarto;
        $this->localizacao = $localizacao;
        $this->fumante = $fumante;
        $this->diaria = $diaria;
        $this->pax = $pax;
        $this->situacao = $situacao;
    }


    public function getNumQuarto()
    {
        return $this->NumQuarto;
    }


    public function setNumQuarto($NumQuarto)
    {
        $this->NumQuarto = $NumQuarto;
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


    public function getDiaria()
    {
        return $this->diaria;
    }


    public function setDiaria($diaria)
    {
        $this->diaria = $diaria;
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


}



