<?php
require_once '../dto/PacienteDTO.php';
require_once '../dao/PacienteDAO.php';

$id = $_POST["id"];
$nome = $_POST["nome"];
$cpf = $_POST["cpf"];
$datanascimento = $_POST["data"];
$telefone = $_POST["telefone"];
$situacao = $_POST["situacao"];
$email = $_POST["email"];
$cep = $_POST["cep"];



$pacienteDTO = new PacienteDTO();
$pacienteDTO->setId( $id );
$pacienteDTO->setNome( $nome );
$pacienteDTO->setData( $datanascimento );
$pacienteDTO->setTelefone( $telefone );
$pacienteDTO->setSituacao( $situacao );
$pacienteDTO->setEmail( $email );
$pacienteDTO->setCpf( $cpf );
$pacienteDTO->setCep( $cep );

$pacienteDAO = new PacienteDAO();

if ($pacienteDAO->update($pacienteDTO)){
    header( "Location: ../view/listarPacientes.php" );
}
