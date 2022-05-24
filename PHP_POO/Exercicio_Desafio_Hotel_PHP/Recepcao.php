<?php

require_once 'Pessoa.php';
require_once 'Hotel.php';

class Recepcao
{

    private $cliente = [];
    private $quarto = [];


    //----------------------------------------------- CLIENTES ------------------------------------------------------//

    public function cadastraCliente($nome, $cpf, $nascimento, $email, $telefone, $cidade, $UF, $fumante)
    {
        //Testa se o CPF já foi adicionado ou se tem características de CPF.
        if (!($this->existeCPF($cpf)) && $this->validaCPF($cpf)) {
            $this->cliente[] = new Pessoa(count($this->cliente) + 1, $nome, $cpf, $nascimento, $email, $telefone, $cidade, $UF, $fumante);
        } else {
            echo "Erro! CPF inválido ou a pessoa já está cadastrada no sistema.";
        }
    }


    public function editaCliente($id, $nome, $cpf, $nascimento, $email, $telefone, $cidade, $UF, $fumante, $diasHospedado)
    {
        $this->cliente[$id - 1]->setNome($nome);
        $this->cliente[$id - 1]->setCpf($cpf);
        $this->cliente[$id - 1]->setNascimento($nascimento);
        $this->cliente[$id - 1]->setEmail($email);
        $this->cliente[$id - 1]->setTelefone($telefone);
        $this->cliente[$id - 1]->setCidade($cidade);
        $this->cliente[$id - 1]->setUF($UF);
        if ($fumante) {
            $this->cliente[$id - 1]->setFumante('Fumante');
        } else {
            $this->cliente[$id - 1]->setFumante('Nao-fumante');
        }
        $this->cliente[$id - 1]->setDiasHospedado($diasHospedado);
    }

    public function listaClientes()
    {
        foreach ($this->cliente as $valor) {
            echo "<p>id: " . $valor->getId() . "</p>";
            echo "<p>Nome: " . $valor->getNome() . "</p>";
            echo "<p>Cpf: " . $valor->getCpf() . "</p>";
            echo "<p>Nascimento: " . $valor->getNascimento() . "</p>";
            echo "<p>Email: " . $valor->getEmail() . "</p>";
            echo "<p>Telefone: " . $valor->getTelefone() . "</p>";
            echo "<p>Cidade: " . $valor->getCidade() . "</p>";
            echo "<p>UF: " . $valor->getUF() . "</p>";
            echo "<p>Fumante: " . $valor->getFumante() . "</p>";
            echo "<p>Dias Hospedagem: " . $valor->getDiasHospedado() . "</p>";
            echo "<p>Total a pagar: R$ " . $valor->getTotalPagar() . "</p>";
            echo "<br>";
        }
    }

    public function listaCliente($id)
    {
        echo "<p>id: " . $this->cliente[$id - 1]->getId() . "</p>";
        echo "<p>Nome: " . $this->cliente[$id - 1]->getNome() . "</p>";
        echo "<p>Cpf: " . $this->cliente[$id - 1]->getCpf() . "</p>";
        echo "<p>Nascimento: " . $this->cliente[$id - 1]->getNascimento() . "</p>";
        echo "<p>Email: " . $this->cliente[$id - 1]->getEmail() . "</p>";
        echo "<p>Telefone: " . $this->cliente[$id - 1]->getTelefone() . "</p>";
        echo "<p>Cidade: " . $this->cliente[$id - 1]->getCidade() . "</p>";
        echo "<p>UF: " . $this->cliente[$id - 1]->getUF() . "</p>";
        echo "<p>Fumante: " . $this->cliente[$id - 1]->getFumante() . "</p>";
        echo "<p>Dias Hospedagem: " . $this->cliente[$id - 1]->getDiasHospedado() . "</p>";
        echo "<p>Total a pagar: R$ " . $this->cliente[$id - 1]->getTotalPagar() . "</p>";
        echo "<br>";
    }

    public function excluiCliente($id)
    {
        unset($this->cliente[$id]);
    }


    //---------------------------------------------- QUARTOS --------------------------------------------------------//


    public function cadastraQuarto($localizacao, $fumante, $valorDiaria, $pax, $situacao)
    {
        $this->quarto[] = new Hotel(count($this->quarto) + 1, $localizacao, $fumante, $valorDiaria, $pax, $situacao);
    }


    public function editaQuarto($IDQuarto, $localizacao, $fumante, $valorDiaria, $pax, $situacao)
    {
        $this->quarto[$IDQuarto - 1]->setLocalizacao($localizacao);
        if ($fumante) {
            $this->quarto[$IDQuarto - 1]->setFumante('Permitido');
        } else {
            $this->quarto[$IDQuarto - 1]->setFumante('Proibido');
        }
        $this->quarto[$IDQuarto - 1]->setValorDiaria($valorDiaria);
        $this->quarto[$IDQuarto - 1]->setPax($pax);

        if ($situacao) {
            $this->quarto[$IDQuarto - 1]->setSituacao('Ocupado');
        } else {
            $this->quarto[$IDQuarto - 1]->setSituacao('Vago');
        }
    }


    public function listaQuartos()
    {
        foreach ($this->quarto as $valor) {
            echo "<p>Quarto [" . $valor->getIDQuarto() . "]</p>";
            echo "<p>Localização: " . $valor->getLocalizacao() . "</p>";
            echo "<p>Fumante: " . $valor->getFumante() . "</p>";
            echo "<p>Valor da diária: R$" . $valor->getValorDiaria() . "</p>";
            echo "<p>Capacidade: " . $valor->getPax() . "</p>";
            echo "<p>Situação: " . $valor->getSituacao() . "</p>";
            echo "<p>Ocupado por: " . $valor->getOcupadoPor() . "</p>";
            echo "<br>";
        }
    }

    public function listaQuarto($IDQuarto)
    {
        echo "<p>Quarto [" . $this->quarto[$IDQuarto - 1]->getIDQuarto() . "]</p>";
        echo "<p>Localização: " . $this->quarto[$IDQuarto - 1]->getLocalizacao() . "</p>";
        echo "<p>Fumante: " . $this->quarto[$IDQuarto - 1]->getFumante() . "</p>";
        echo "<p>Valor da diária: R$" . $this->quarto[$IDQuarto - 1]->getValorDiaria() . "</p>";
        echo "<p>Capacidade: " . $this->quarto[$IDQuarto - 1]->getPax() . "</p>";
        echo "<p>Situação: " . $this->quarto[$IDQuarto - 1]->getSituacao() . "</p>";
        echo "<p>Ocupado por: " . $this->quarto[$IDQuarto - 1]->getOcupadoPor() . "</p>";
        echo "<br>";
    }


    public function excluiQuarto($IDQuarto)
    {
        unset($this->quarto[$IDQuarto]);
    }


    public function listaQuartosDisponiveis()
    {
        foreach ($this->quarto as $valor) {
            if ($valor->getSituacao() == 'Ocupado') {
            } else {
                echo "<p>Quarto [" . $valor->getIDQuarto() . "]</p>";
                echo "<p>Localização: " . $valor->getLocalizacao() . "</p>";
                echo "<p>Fumante: " . $valor->getFumante() . "</p>";
                echo "<p>Valor da diária: R$" . $valor->getValorDiaria() . "</p>";
                echo "<p>Capacidade: " . $valor->getPax() . "</p>";
                echo "<p>Situação: " . $valor->getSituacao() . "</p>";
                echo "<br>";
            }
        }
    }

    public function listaQuartosOcupados()
    {
        foreach ($this->quarto as $valor) {
            if ($valor->getSituacao() == 'Vago') {
            } else {
                echo "<p>Quarto [" . $valor->getIDQuarto() . "]</p>";
                echo "<p>Localização: " . $valor->getLocalizacao() . "</p>";
                echo "<p>Fumante: " . $valor->getFumante() . "</p>";
                echo "<p>Valor da diária: R$" . $valor->getValorDiaria() . "</p>";
                echo "<p>Capacidade: " . $valor->getPax() . "</p>";
                echo "<p>Situação: " . $valor->getSituacao() . "</p>";
                echo "<p>Ocupado por: " . $valor->getOcupadoPor() . "</p>";
                echo "<br>";
            }
        }
    }


    //------------------------------------- FUNCOES CHECK-IN E CHECK-OUT --------------------------------------------//

    public function fazerCheckIn($id, $IDQuarto, $diasHospedado)
    {
        if ($this->quarto[$IDQuarto - 1]->getSituacao() == 'Vago') {                                                                    //O quarto está vago?
            if ($this->cliente[$id - 1]->getFumante() == 'Fumante' && $this->quarto[$IDQuarto - 1]->getFumante() == 'Permitido') {      //O quarto é para fumantes e o cliente é fumante?
                $this->quarto[$IDQuarto - 1]->setSituacao('Ocupado');  //Quarto se torna ocupado
                $this->quarto[$IDQuarto - 1]->setOcupadoPor($this->cliente[$id - 1]->getNome());                                        //Quarto recebe o nome do cliente.
                $this->cliente[$id - 1]->setDiasHospedado($diasHospedado);                                                              //Cliente recebe qtd de dias hospedado
                $this->cliente[$id - 1]->setTotalPagar($this->calculaTotal($IDQuarto, $diasHospedado));
                echo "Check-in realizado com sucesso!";
            } else if ($this->cliente[$id - 1]->getFumante() == 'Fumante' && $this->quarto[$IDQuarto - 1]->getFumante() == 'Proibido') {
                echo "O quarto não aceita fumante.";
            } else {
                $this->quarto[$IDQuarto - 1]->setSituacao('Ocupado');                                                                   //Quarto se torna ocupado
                $this->quarto[$IDQuarto - 1]->setOcupadoPor($this->cliente[$id - 1]->getNome());                                        //Quarto recebe o nome do cliente.
                $this->cliente[$id - 1]->setDiasHospedado($diasHospedado);                                                              //Cliente recebe qtd de dias hospedado
                $this->cliente[$id - 1]->setTotalPagar($this->calculaTotal($IDQuarto, $diasHospedado));
                echo "Check-in realizado com sucesso!";
            }
        } else {
            echo "O quarto está indisponível";
        }
    }


    public function fazerCheckOut($id, $IDQuarto)
    {
        if ($this->cliente[$id - 1]->getNome() == $this->quarto[$IDQuarto - 1]->getOcupadoPor() && $this->quarto[$IDQuarto - 1]->getSituacao() == 'Ocupado') {
            $this->quarto[$IDQuarto - 1]->setSituacao('Vago');  //Quarto se torna 'Vago'
            $this->quarto[$IDQuarto - 1]->setOcupadoPor(null);
            echo "O(A) cliente " . $this->cliente[$id - 1]->getNome() . " ficou " . $this->cliente[$id - 1]->getDiasHospedado() . " dias hospedados à um custo total de R$" . $this->cliente[$id - 1]->getTotalPagar();  //Cliente recebe qtd de dias hospedado
        } else {
            echo "O quarto já está vago";

        }
    }


    //----------------------------------------------- VALIDAÇÃO -----------------------------------------------------//


    public function validaCPF($cpf)
    {

        // Extrai somente os números
        $cpf = preg_replace('/[^0-9]/is', '', $cpf);

        // Verifica se foi informado todos os digitos corretamente
        if (strlen($cpf) != 11) {
            return false;
        }

        // Verifica se foi informada uma sequência de digitos repetidos. Ex: 111.111.111-11
        if (preg_match('/(\d)\1{10}/', $cpf)) {
            return false;
        }

        // Faz o calculo para validar o CPF
        for ($t = 9; $t < 11; $t++) {
            for ($d = 0, $c = 0; $c < $t; $c++) {
                $d += $cpf[$c] * (($t + 1) - $c);
            }
            $d = ((10 * $d) % 11) % 10;
            if ($cpf[$c] != $d) {
                return false;
            }
        }
        return true;

    }


    public function existeCPF($cpf)
    {
        foreach ($this->cliente as $valor) {
            if ($cpf == $valor->getCpf()) {
                return true;
            }
        }
        return false;
    }



    public function verificaQuartoDisponivel()
    {
        foreach ($this->quarto as $valor) {
            if ($valor->getSituacao() == 'Ocupado') {
                return $valor->setSituacao(true);
            } else {
                return $valor->setSituacao(false);
            }
        }
    }

    public function calculaTotal($IDQuarto, $diasHospedado)
    {
        return $this->quarto[$IDQuarto - 1]->getValorDiaria() * $diasHospedado;

    }


    //------------------------------------- MÉTODOS GETTERS AND SETTERS ---------------------------------------------//

    public function getCliente()
    {
        return $this->cliente;
    }

    public function setCliente($cliente)
    {
        $this->cliente = $cliente;
    }

    public function getQuarto()
    {
        return $this->quarto;
    }

    public function setQuarto($quarto)
    {
        $this->quarto = $quarto;
    }

}

