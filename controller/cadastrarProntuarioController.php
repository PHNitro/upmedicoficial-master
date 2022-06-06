<?php
require_once '../dto/ProntuarioDTO.php';
require_once '../dao/ProntuarioDAO.php';

$id = $_POST["id"];
$numero = $_POST["numero"];
$dataCriacao = $_POST["data_criacao"];
$ativo = $_POST["ATIVO"];
$PacienteID = $_POST["paciente_id"];

$ProntuarioDTO = new ProntuarioDTO();
$ProntuarioDTO->setIdProntuario($id);
$ProntuarioDTO->setNumero($numero);
$ProntuarioDTO->setdataCriacao($dataCriacao);
$ProntuarioDTO->setativo($ativo);
$ProntuarioDTO->setrelatorioMedico($relatorioMedico);
$ProntuarioDTO->setMedicoId($MedicoID);
$ProntuarioDTO->setPacienteId($PacienteID);

$ProntuarioDAO = new ProntuarioDAO();
$error[1] = "<div class='alert alert-success mt-3' role='alert'>Cadastrado com sucesso!</div>";


if ($ProntuarioDAO->salvar($ProntuarioDTO)) {
    $msg = true;
    header("Location: ../view/formCadastrarProntuario.php?msg={$error[1]}" );
}


