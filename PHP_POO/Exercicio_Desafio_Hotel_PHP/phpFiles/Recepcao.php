<?php

interface Recepcao
{
  //---------------------------------------------- CLIENTES -------------------------------------------------------//

    public function cadastraCliente($nome, $cpf, $nascimento, $email, $telefone, $cidade, $UF, $fumante);
    public function editaCliente($id, $nome, $cpf, $nascimento, $email, $telefone, $cidade, $UF, $fumante, $diasHospedado);
    public function listaClientes();
    public function listaCliente($id);
    public function excluiCliente($id);

  //---------------------------------------------- QUARTOS --------------------------------------------------------//

    public function cadastraQuarto($localizacao, $fumante, $valorDiaria, $capacidade, $situacao);
    public function editaQuarto($IDQuarto, $localizacao, $fumante, $valorDiaria, $capacidade, $situacao);
    public function listaQuartos();
    public function listaQuarto($IDQuarto);
    public function excluiQuarto($IDQuarto);
    public function listaQuartosDisponiveis();
    public function listaQuartosOcupados();

  //----------------------------------------------- VALIDAÇÕES ----------------------------------------------------//

    public function validaCPF($cpf);
    public function existeCPF($cpf);


  //------------------------------------- FUNCOES CHECK-IN E CHECK-OUT --------------------------------------------//

    public function fazerCheckIn($id, $IDQuarto, $diasHospedado);
    public function fazerCheckOut($id, $IDQuarto);
    public function calculaTotal($IDQuarto, $diasHospedado);


}