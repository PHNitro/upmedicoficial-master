<?php
require_once '../dto/ProntuarioDTO.php';
require_once '../dao/ProntuarioDAO.php';

$idProntuario = $_POST["idProntuario"];
$Numero = $_POST["numero"];
$dataCriacao = $_POST["dataCriacao"];
$ativo = $_POST["ativo"];
$relatorioMedico = $_POST["relatorioMedico"];

$ProntuarioDTO = new ProntuarioDTO();
$ProntuarioDTO->setNumero( $Numero );
$ProntuarioDTO->setdataCriacao( $dataCriacao );
$ProntuarioDTO->setativo( $ativo );
$ProntuarioDTO->setrelatorioMedico( $relatorioMedico );


$ProntuarioDAO = new ProntuarioDAO();

if ( $ProntuarioDAO->update( $ProntuarioDTO ) ) {
    header( "Location: ../view/listarTodosProntuario.php?msg={$error[1]}");
}