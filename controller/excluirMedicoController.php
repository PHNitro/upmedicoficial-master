<?php 
require_once '../dao/MedicoDAO.php';

$idmedico = $_GET["id"];
$medicoDAO = new medicoDAO();
if ($medicoDAO->deleteById( $idMedico ) ) {
header("Location: ../view/listarMedicos.php?=$error[1]");
}
