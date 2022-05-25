<?php

require_once 'Pessoa.php';

class Cliente extends Pessoa
{
    private $id;
    private $diasHospedado;
    private $totalPagar;


    function __construct($id, $nome, $cpf, $nascimento, $email, $telefone, $cidade, $UF, $fumante)
    {
        parent::__construct($nome, $cpf, $nascimento, $email, $telefone, $cidade, $UF, $fumante);
        $this->id = $id;
    }



  // ------------------------   Métodos Getters and Setters da Classe Cliente --------------------------------------//

    public function getId()
    {
        return $this->id;
    }


    public function setId($id)
    {
        $this->id = $id;
    }

    public function getDiasHospedado()
    {
        return $this->diasHospedado;
    }


    public function setDiasHospedado($diasHospedado)
    {
        $this->diasHospedado = $diasHospedado;
    }


    public function getTotalPagar()
    {
        return $this->totalPagar;
    }


    public function setTotalPagar($totalPagar)
    {
        $this->totalPagar = $totalPagar;
    }








}