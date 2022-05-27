<?php

require_once 'Pessoa.php';
require_once 'Cliente.php';
require_once 'Hotel.php';
require_once 'Quarto.php';
require_once 'Recepcao.php';

class Recepcionista implements Recepcao
{

    private array $cliente = array();
    private array $quarto = array();


    //----------------------------------------------- CLIENTES ------------------------------------------------------//

    public function cadastraCliente($nome, $cpf, $nascimento, $email, $telefone, $cidade, $UF, $fumante)
    {
        if (!($this->existeCPF($cpf)) && $this->validaCPF($cpf)) {
            $this->cliente[] = new Cliente(count($this->cliente) + 1, $nome, $cpf, $nascimento, $email, $telefone, $cidade, $UF, $fumante);
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
            echo "<div id='areaResposta'><p>id: [" . $valor->getId() . "]</p></div>";
            echo "<div id='areaResposta'><p>Nome: " . $valor->getNome() . "</p></div>";
            echo "<div id='areaResposta'><p>Cpf: " . $valor->getCpf() . "</p></div>";
            echo "<div id='areaResposta'><p>Nascimento: " . $valor->getNascimento() . "</p></div>";
            echo "<div id='areaResposta'><p>Email: " . $valor->getEmail() . "</p></div>";
            echo "<div id='areaResposta'><p>Telefone: " . $valor->getTelefone() . "</p></div>";
            echo "<div id='areaResposta'><p>Cidade: " . $valor->getCidade() . "</p></div>";
            echo "<div id='areaResposta'><p>UF: " . $valor->getUF() . "</p></div>";
            echo "<div id='areaResposta'><p>Fumante: " . $valor->getFumante() . "</p></div>";
            echo "<div id='areaResposta'><p>Dias Hospedagem: " . $valor->getDiasHospedado() . "</p></div>";
            echo "<div id='areaResposta'><p>Total a pagar: R$ " . $valor->getTotalPagar() . "</p></div>";
            echo "<br>";
        }
    }

    public function listaCliente($id)
    {
        echo "<div id='areaResposta'><p>id: " . $this->cliente[$id - 1]->getId() . "</p></div>";
        echo "<div id='areaResposta'><p>Nome: " . $this->cliente[$id - 1]->getNome() . "</p></div>";
        echo "<div id='areaResposta'><p>Cpf: " . $this->cliente[$id - 1]->getCpf() . "</p></div>";
        echo "<div id='areaResposta'><p>Nascimento: " . $this->cliente[$id - 1]->getNascimento() . "</p></div>";
        echo "<div id='areaResposta'><p>Email: " . $this->cliente[$id - 1]->getEmail() . "</p></div>";
        echo "<div id='areaResposta'><p>Telefone: " . $this->cliente[$id - 1]->getTelefone() . "</p></div>";
        echo "<div id='areaResposta'><p>Cidade: " . $this->cliente[$id - 1]->getCidade() . "</p></div>";
        echo "<div id='areaResposta'><p>UF: " . $this->cliente[$id - 1]->getUF() . "</p></div>";
        echo "<div id='areaResposta'><p>Fumante: " . $this->cliente[$id - 1]->getFumante() . "</p></div>";
        echo "<div id='areaResposta'><p>Dias Hospedagem: " . $this->cliente[$id - 1]->getDiasHospedado() . "</p></div>";
        echo "<div id='areaResposta'><p>Total a pagar: R$ " . $this->cliente[$id - 1]->getTotalPagar() . "</p></div>";
        echo "<br>";
    }

    public function excluiCliente($id)
    {
        unset($this->cliente[$id]);
    }


    //---------------------------------------------- QUARTOS --------------------------------------------------------//


    public function cadastraQuarto($localizacao, $fumante, $valorDiaria, $capacidade, $situacao)
    {
        $this->quarto[] = new Quarto(count($this->quarto) + 1, $localizacao, $fumante, $valorDiaria, $capacidade, $situacao);
    }


    public function editaQuarto($IDQuarto, $localizacao, $fumante, $valorDiaria, $capacidade, $situacao)
    {
        $this->quarto[$IDQuarto - 1]->setLocalizacao($localizacao);
        if ($fumante) {
            $this->quarto[$IDQuarto - 1]->setFumante('Permitido');
        } else {
            $this->quarto[$IDQuarto - 1]->setFumante('Proibido');
        }
        $this->quarto[$IDQuarto - 1]->setValorDiaria($valorDiaria);
        $this->quarto[$IDQuarto - 1]->setCapacidade($capacidade);
        if ($situacao) {
            $this->quarto[$IDQuarto - 1]->setSituacao('Ocupado');
        } else {
            $this->quarto[$IDQuarto - 1]->setSituacao('Vago');
        }
    }


    public function listaQuartos()
    {
        foreach ($this->quarto as $valor) {
            echo "<div id='areaResposta'><p>Quarto [" . $valor->getIDQuarto() . "]</p></div>";
            echo "<div id='areaResposta'><p>Localização: " . $valor->getLocalizacao() . "</p></div>";
            echo "<div id='areaResposta'><p>Fumante: " . $valor->getFumante() . "</p></div>";
            echo "<div id='areaResposta'><p>Valor da diária: R$" . $valor->getValorDiaria() . "</p></div>";
            echo "<div id='areaResposta'><p>Capacidade: " . $valor->getCapacidade() . "</p></div>";
            echo "<div id='areaResposta'><p>Situação: " . $valor->getSituacao() . "</p></div>";
            echo "<div id='areaResposta'><p>Ocupado por: " . $valor->getOcupadoPor() . "</p></div>";
            echo "<br>";
        }
    }

    public function listaQuarto($IDQuarto)
    {
        echo "<div id='areaResposta'><p>Quarto [" . $this->quarto[$IDQuarto - 1]->getIDQuarto() . "]</p></div>";
        echo "<div id='areaResposta'><p>Localização: " . $this->quarto[$IDQuarto - 1]->getLocalizacao() . "</p></div>";
        echo "<div id='areaResposta'><p>Fumante: " . $this->quarto[$IDQuarto - 1]->getFumante() . "</p></div>";
        echo "<div id='areaResposta'><p>Valor da diária: R$" . $this->quarto[$IDQuarto - 1]->getValorDiaria() . "</p></div>";
        echo "<div id='areaResposta'><p>Capacidade: " . $this->quarto[$IDQuarto - 1]->getCapacidade() . "</p></div>";
        echo "<div id='areaResposta'><p>Situação: " . $this->quarto[$IDQuarto - 1]->getSituacao() . "</p></div>";
        echo "<div id='areaResposta'><p>Ocupado por: " . $this->quarto[$IDQuarto - 1]->getOcupadoPor() . "</p></div>";
        echo "<br>";
    }


    public function excluiQuarto($IDQuarto)
    {
        unset($this->quarto[$IDQuarto]);
    }


    public function listaQuartosDisponiveis()
    {
        foreach ($this->quarto as $valor) {
            if ($valor->getSituacao() == 'Vago') {
                echo "<div id='areaResposta'><p>Quarto [" . $valor->getIDQuarto() . "]</p></div>";
                echo "<div id='areaResposta'><p>Localização: " . $valor->getLocalizacao() . "</p></div>";
                echo "<div id='areaResposta'><p>Fumante: " . $valor->getFumante() . "</p></div>";
                echo "<div id='areaResposta'><p>Valor da diária: R$" . $valor->getValorDiaria() . "</p></div>";
                echo "<div id='areaResposta'><p>Capacidade: " . $valor->getCapacidade() . "</p></div>";
                echo "<div id='areaResposta'><p>Situação: " . $valor->getSituacao() . "</p></div>";
                echo "<div id='areaResposta'><br>";
            }
        }
    }

    public function listaQuartosOcupados()
    {
        foreach ($this->quarto as $valor) {
            if ($valor->getSituacao() == 'Ocupado') {
                echo "<div id='areaResposta'><p>Quarto [" . $valor->getIDQuarto() . "]</p></div>";
                echo "<div id='areaResposta'><p>Localização: " . $valor->getLocalizacao() . "</p></div>";
                echo "<div id='areaResposta'><p>Fumante: " . $valor->getFumante() . "</p></div>";
                echo "<div id='areaResposta'><p>Valor da diária: R$" . $valor->getValorDiaria() . "</p></div>";
                echo "<div id='areaResposta'><p>Capacidade: " . $valor->getCapacidade() . "</p></div>";
                echo "<div id='areaResposta'><p>Situação: " . $valor->getSituacao() . "</p></div>";
                echo "<div id='areaResposta'><p>Ocupado por: " . $valor->getOcupadoPor() . "</p></div>";
                echo "<br>";
            }
        }
    }




    //------------------------------------- FUNCOES CHECK-IN E CHECK-OUT --------------------------------------------//

    public function fazerCheckIn($id, $IDQuarto, $diasHospedado)
    {
        if ($this->quarto[$IDQuarto - 1]->getSituacao() == 'Vago') {
            if ($this->cliente[$id - 1]->getFumante() == 'Fumante' && $this->quarto[$IDQuarto - 1]->getFumante() == 'Permitido') {
                $this->quarto[$IDQuarto - 1]->setSituacao('Ocupado');
                $this->quarto[$IDQuarto - 1]->setOcupadoPor($this->cliente[$id - 1]->getNome());
                $this->cliente[$id - 1]->setDiasHospedado($diasHospedado);
                $this->cliente[$id - 1]->setTotalPagar($this->calculaTotal($IDQuarto, $diasHospedado));
                echo "Check-in realizado com sucesso!";
            } else if ($this->cliente[$id - 1]->getFumante() == 'Fumante' && $this->quarto[$IDQuarto - 1]->getFumante() == 'Proibido') {
                echo "O quarto não aceita fumante.";
            } else {
                $this->quarto[$IDQuarto - 1]->setSituacao('Ocupado');
                $this->quarto[$IDQuarto - 1]->setOcupadoPor($this->cliente[$id - 1]->getNome());
                $this->cliente[$id - 1]->setDiasHospedado($diasHospedado);
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

    public function calculaTotal($IDQuarto, $diasHospedado)
    {
        return $this->quarto[$IDQuarto - 1]->getValorDiaria() * $diasHospedado;

    }


    //----------------------------------------------- VALIDAÇÕES ---------------------------------------------------//


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


  //------------------------------------- MÉTODOS GETTERS AND SETTERS ---------------------------------------------//


    public function getCliente(): array
    {
        return $this->cliente;
    }


    public function setCliente(array $cliente): void
    {
        $this->cliente = $cliente;
    }


    public function getQuarto(): array
    {
        return $this->quarto;
    }


    public function setQuarto(array $quarto): void
    {
        $this->quarto = $quarto;
    }

}
