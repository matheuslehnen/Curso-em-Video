<?php

require_once 'Recepcionista.php';

abstract class Hotel
{

    private $localizacao;
    private $capacidade;

  // ---------------------------------   Construct da Classe Hotel -----------------------------------------------//

    public function __construct($localizacao, $capacidade)
    {

        $this->localizacao = $localizacao;
        $this->capacidade = $capacidade;
    }


  // ------------------------   Métodos Getters and Setters da Classe Hotel --------------------------------------//



    public function getLocalizacao()
    {
        return $this->localizacao;
    }


    public function setLocalizacao($localizacao)
    {
        $this->localizacao = $localizacao;
    }


    public function getCapacidade()
    {
        return $this->capacidade;
    }


    public function setCapacidade($capacidade)
    {
        $this->capacidade = $capacidade;
    }

}



