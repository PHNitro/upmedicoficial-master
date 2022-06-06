<?php
require_once '../dto/MedicoDTO.php';
require_once '../dao/MedicoDAO.php';

$nome = $_POST["nome"];
$data = $_POST["datanascimento"];
$email = $_POST["email"];
$password = $_POST["password"];
$cpf = preg_replace('/[^0-9]/', '', $_POST["cpf"]);
$crm = $_POST["crm"];
$esp = $_POST["especialidade"];

$medicoDTO = new MedicoDTO();
$medicoDTO->setNome($nome);
$medicoDTO->setData($data);
$medicoDTO->setEmail($email);
$medicoDTO->setPassword($password);
$medicoDTO->setCpf($cpf);
$medicoDTO->setCrm($crm);
$medicoDTO->setEsp($esp);

$medicoDAO = new MedicoDAO();

if ($medicoDAO->salvar($medicoDTO)) {
    $msg = true;
    header("Location: ../view/formCadastrarMedico.php?sucesso=$msg");
}