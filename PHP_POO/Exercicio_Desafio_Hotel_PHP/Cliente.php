<?php

class Cliente
{
    private $nome;
    private $cpf;
    private $nascimento;
    private $email;
    private $telefone;
    private $cidade;
    private $UF;
    private $fumante;

    function __construct($nome, $cpf, $nascimento, $email, $telefone, $cidade, $UF, $fumante)
    {
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->nascimento = $nascimento;
        $this->email = $email;
        $this->telefone = $telefone;
        $this->cidade = $cidade;
        $this->UF = $UF;
        $this->fumante = $fumante;
    }


    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getCpf()
    {
        return $this->cpf;
    }

    public function setCpf($cpf)
    {
        $this->nome = $cpf;
    }

    public function getNascimento()
    {
        return $this->nascimento;
    }

    public function setNascimento($nascimento)
    {
        $this->nascimento = $nascimento;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getTelefone()
    {
        return $this->telefone;
    }

    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;
    }

    public function getCidade()
    {
        return $this->cidade;
    }

    public function setCidade($cidade)
    {
        $this->cidade = $cidade;
    }

    public function getUF()
    {
        return $this->UF;
    }

    public function setUF($UF)
    {
        $this->UF = $UF;
    }

    public function getFumante()
    {
        return $this->fumante;
    }

    public function setFumante($fumante)
    {
        $this->fumante = $fumante;
    }
    public function verificarQuartoDisponivel(){

    }

    public function fazerCheckIn()
    {

    }

    public function fazerCheckOut()
    {

    }
}

