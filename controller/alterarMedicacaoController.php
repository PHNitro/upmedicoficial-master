<?php
require_once '../dto/MedicacaoDTO.php';
require_once '../dao/MedicacaoDAO.php';

$idmedicao = $_POST["idmedicacao"];
$descricao = $_POST["descricao"];
$IdHistorico = $_POST["IdHistorico"];


$medicacaoDTO = new MedicacaoDTO();
$medicacaoDTO->setdescricao( $descricao );

$medicacaoDAO = new MedicacaoDAO();

if ( $medicacaoDAO->update( $medicacaoDTO ) ) {
    header( "Location: ../view/listarProntuario.php" );
}