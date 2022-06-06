<?php 
require_once '../dao/PacienteDAO.php';


$idpaciente = $_GET["id"];

$pacienteDAO = new PacienteDAO();
if ($pacienteDAO->deleteById($idpaciente)) {
    header("Location: ../view/listarPacientes.php");
}
