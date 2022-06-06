<?php
require_once '../dto/MedicoDTO.php';
require_once '../dao/MedicoDAO.php';

$id = $_POST["ID"];
$nome = $_POST["nome"];
$data = $_POST["datanascimento"];
$email = $_POST["email"];
$password = $_POST["password"];
$cpf = $_POST["cpf"];
$crm = $_POST["crm"];
$especialidade = $_POST["especialidade"];

$medicoDTO = new MedicoDTO();
$medicoDTO->setId( $id );
$medicoDTO->setNome( $nome );
$medicoDTO->setData( $data );
$medicoDTO->setEmail( $email );
$medicoDTO->setPassword( $password );
$medicoDTO->setCpf( $cpf );
$medicoDTO->setCrm( $crm );
$medicoDTO->setCpf( $especialidade );


$medicoDAO = new MedicoDAO();

if ( $medicoDAO->update( $medicoDTO ) ) {
    header( "Location: ../view/formAlterarMedico.php" );
}