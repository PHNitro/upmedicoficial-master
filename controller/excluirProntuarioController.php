<?php 
require_once '../dao/ProntuarioDAO.php';

$idProntuario = $_GET["id"];

$ProntuarioDAO = new ProntuarioDAO();
if ($ProntuarioDAO->deleteById( $idProntuario )) {
    header("Location: ../view/listarTodosProntuario.php");
}
