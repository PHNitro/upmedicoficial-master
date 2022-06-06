<?php
require_once '../dto/PacienteDTO.php';
require_once '../dao/PacienteDAO.php';


$nome = $_POST["nome"];
$datanascimento = $_POST["data"];
$telefone = $_POST["telefone"];
$email = $_POST["email"];
$cpf = $_POST["cpf"];
$cep = $_POST["cep"];
$situacao = $_POST["situacao"];

$pacienteDTO = new PacienteDTO();
$pacienteDTO->setNome($nome);
$pacienteDTO->setData($datanascimento);
$pacienteDTO->setTelefone($telefone);
$pacienteDTO->setEmail( $email );
$pacienteDTO->setCpf($cpf);
$pacienteDTO->setCep($cep);
$pacienteDTO->setSituacao($situacao);

$error[1] = "<div class='alert alert-success mt-3' role='alert'>Cadastrado com sucesso!</div>";

$pacienteDAO = new PacienteDAO();

if ($pacienteDAO->salvar($pacienteDTO)) {
    header( "Location: ../view/formCadastrarPaciente.php?msg={$error[1]}" );
}
