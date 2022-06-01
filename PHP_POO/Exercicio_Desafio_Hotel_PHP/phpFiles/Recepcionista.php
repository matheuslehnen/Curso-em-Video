<?php
session_start();
require_once 'Cliente.php';
require_once 'Hotel.php';
require_once 'Pessoa.php';
require_once 'Quarto.php';
require_once 'Recepcao.php';
require_once 'Recepcionista.php';


class Recepcionista implements Recepcao
{

    private array $cliente = array();
    private array $quarto = array();


    //----------------------------------------------- CLIENTES ------------------------------------------------------//


    public function cadastraCliente($nome, $cpf, $nascimento, $email, $telefone, $cidade, $UF, $fumante)
    {
        $conexao = mysqli_connect('localhost', 'root', '');
        $banco = mysqli_select_db($conexao, 'the_gallery_hostel');
        mysqli_set_charset($conexao, 'utf8');

        if (!($this->existeCPF($cpf)) && $this->validaCPF($cpf)) {
            if ($fumante) {
                $fuma = 'Fumante';
            } else {
                $fuma = 'Nao-fumante';
            }
            $this->cliente[] = new Cliente(count($this->cliente) + 1, $nome, $cpf, $nascimento, $email, $telefone, $cidade, $UF, $fumante);
            $sql = mysqli_query($conexao, "insert into hospedes values (default, '$nome', '$cpf', '$nascimento', '$email','$telefone', '$cidade', '$UF', '$fuma', default)");
        } else {
            echo "Erro! CPF inválido ou a pessoa já está cadastrada no sistema.";
        }
    }


    public function editaCliente($id, $nome, $cpf, $nascimento, $email, $telefone, $cidade, $UF, $fumante)
    {

        $conexao = mysqli_connect('localhost', 'root', '');
        $banco = mysqli_select_db($conexao, 'the_gallery_hostel');
        mysqli_set_charset($conexao, 'utf8');
        if ($fumante) {
            $fuma = 'Fumante';
        } else {
            $fuma = 'Nao-fumante';
        }
        $sql = mysqli_query($conexao, "update hospedes set nome = '$nome', cpf = '$cpf', nascimento = '$nascimento', email = '$email', telefone = '$telefone', cidade = '$cidade', UF = '$UF', fumante = '$fuma' where id  = $id");

    }

    public function listaClientes()
    {
        $conexao = mysqli_connect('localhost', 'root', '');
        $banco = mysqli_select_db($conexao, 'the_gallery_hostel');
        mysqli_set_charset($conexao, 'utf8');
        $sql = mysqli_query($conexao, "select * from hospedes");

        echo "<thead><tr><th class='campos'>ID</th>";
        echo "<th class='campos'>Nome</th>";
        echo "<th class='campos'>CPF</th>";
        echo "<th class='campos'>Nascimento</th>";
        echo "<th class='campos'>Email</th>";
        echo "<th class='campos'>Telefone</th>";
        echo "<th class='campos'>Cidade</th>";
        echo "<th class='campos'>UF</th>";
        echo "<th class='campos'>Fumante</th></tr></thead>";

        while ($valor = mysqli_fetch_assoc($sql)) {
            echo "<tbody><tr><td class='campos'><input type='checkbox' name='checked[]' value=" . $valor['id'] . ">[" . $valor['id'] . "]</td>";
            echo "<td class='campos'>" . $valor['nome'] . "</td>";
            echo "<td class='campos'>" . $valor['cpf'] . "</td>";
            echo "<td class='campos'>" . $valor['nascimento'] . "</td>";
            echo "<td class='campos'>" . $valor['email'] . "</td>";
            echo "<td class='campos'>" . $valor['telefone'] . "</td>";
            echo "<td class='campos'>" . $valor['cidade'] . "</td>";
            echo "<td class='campos'>" . $valor['UF'] . "</td>";
            echo "<td class='campos'>" . $valor['fumante'] . "</td></tr></tbody>";
        }

    }

    public function excluiClientes($id)
    {
        $conexao = mysqli_connect('localhost', 'root', '');
        $banco = mysqli_select_db($conexao, 'the_gallery_hostel');
        mysqli_set_charset($conexao, 'utf8');
        $sql = mysqli_query($conexao, "delete from hospedes where id = $id");
    }


    //---------------------------------------------- QUARTOS --------------------------------------------------------//


    public function cadastraQuarto($localizacao, $fumante, $valorDiaria, $capacidade, $situacao)
    {
        $conexao = mysqli_connect('localhost', 'root', '');
        $banco = mysqli_select_db($conexao, 'the_gallery_hostel');
        mysqli_set_charset($conexao, 'utf8');

        $this->quarto[] = new Quarto(count($this->quarto) + 1, $localizacao, $fumante, $valorDiaria, $capacidade, $situacao);
        $sql = mysqli_query($conexao, "insert into quartos values (default, '$localizacao', '$fumante', '$valorDiaria', '$capacidade','$situacao')");
    }


    public function editaQuarto($IDQuarto, $localizacao, $fumante, $valorDiaria, $capacidade, $situacao)
    {
        $conexao = mysqli_connect('localhost', 'root', '');
        $banco = mysqli_select_db($conexao, 'the_gallery_hostel');
        mysqli_set_charset($conexao, 'utf8');
        $sql = mysqli_query($conexao, "update quartos set localizacao = '$localizacao', fumante = '$fumante', valorDiaria = '$valorDiaria', capacidade = '$capacidade', situacao = '$situacao' where id  = $IDQuarto");

    }


    public function listaQuartos()
    {
        $conexao = mysqli_connect('localhost', 'root', '');
        $banco = mysqli_select_db($conexao, 'the_gallery_hostel');
        mysqli_set_charset($conexao, 'utf8');
        $sql = mysqli_query($conexao, "select * from quartos");

        echo "<thead><tr><th class='campos'>ID</th>";
        echo "<th class='campos'>Localização</th>";
        echo "<th class='campos'>Fumante</th>";
        echo "<th class='campos'>Valor da Diária R$</th>";
        echo "<th class='campos'>Capacidade</th>";
        echo "<th class='campos'>Situação</th></tr></thead>";

        while ($valor = mysqli_fetch_assoc($sql)) {
            echo "<tbody><tr><td class='campos'><input type='checkbox' name='checked[]' value=" . $valor['id'] . ">[" . $valor['id'] . "]</td>";
            echo "<td class='campos'>" . $valor['localizacao'] . "</td>";
            echo "<td class='campos'>" . $valor['fumante'] . "</td>";
            echo "<td class='campos'>" . $valor['valorDiaria'] . "</td>";
            echo "<td class='campos'>" . $valor['capacidade'] . "</td>";
            echo "<td class='campos'>" . $valor['situacao'] . "</td></tr></tbody>";

        }
    }

    public function listaQuartosPool()
    {
        $conexao = mysqli_connect('localhost', 'root', '');
        $banco = mysqli_select_db($conexao, 'the_gallery_hostel');
        mysqli_set_charset($conexao, 'utf8');
        $sql = mysqli_query($conexao, "select * from quartos");

            while ($valor = mysqli_fetch_assoc($sql)) {
                if($valor['situacao'] == "Vago"){
                echo "<div class='cubos'>Quarto " . $valor['id'] . "</div>";
                }
                if($valor['situacao'] == "Ocupado"){
                    echo "<div class='cubos' style='background-color:red; color:#c6c6c6;'>Quarto " . $valor['id'] . "</div>";
                }
            }
        /*echo "<div id='areaResposta'><p>Quarto [" . $this->quarto[$IDQuarto - 1]->getIDQuarto() . "]</p></div>";
        echo "<div id='areaResposta'><p>Localização: " . $this->quarto[$IDQuarto - 1]->getLocalizacao() . "</p></div>";
        echo "<div id='areaResposta'><p>Fumante: " . $this->quarto[$IDQuarto - 1]->getFumante() . "</p></div>";
        echo "<div id='areaResposta'><p>Valor da diária: R$" . $this->quarto[$IDQuarto - 1]->getValorDiaria() . "</p></div>";
        echo "<div id='areaResposta'><p>Capacidade: " . $this->quarto[$IDQuarto - 1]->getCapacidade() . "</p></div>";
        echo "<div id='areaResposta'><p>Situação: " . $this->quarto[$IDQuarto - 1]->getSituacao() . "</p></div>";
        echo "<div id='areaResposta'><p>Ocupado por: " . $this->quarto[$IDQuarto - 1]->getOcupadoPor() . "</p></div>";
        echo "<br>";*/
    }




    public function listaQuartosDisponiveis()
    {
        /*foreach ($this->quarto as $valor) {
            if ($valor->getSituacao() == 'Vago') {
                echo "<div id='areaResposta'><p>Quarto [" . $valor->getIDQuarto() . "]</p></div>";
                echo "<div id='areaResposta'><p>Localização: " . $valor->getLocalizacao() . "</p></div>";
                echo "<div id='areaResposta'><p>Fumante: " . $valor->getFumante() . "</p></div>";
                echo "<div id='areaResposta'><p>Valor da diária: R$" . $valor->getValorDiaria() . "</p></div>";
                echo "<div id='areaResposta'><p>Capacidade: " . $valor->getCapacidade() . "</p></div>";
                echo "<div id='areaResposta'><p>Situação: " . $valor->getSituacao() . "</p></div>";
                echo "<div id='areaResposta'><br>";
            }
        }*/
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

    public function excluiQuartos($IDQuarto)
    {
        //unset($this->quarto[$IDQuarto]);
        $conexao = mysqli_connect('localhost', 'root', '');
        $banco = mysqli_select_db($conexao, 'the_gallery_hostel');
        mysqli_set_charset($conexao, 'utf8');
        $sql = mysqli_query($conexao, "delete from quartos where id = $IDQuarto");
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
