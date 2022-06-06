<?php
require_once '../dao/MedicoDAO.php';
require_once '../dto/MedicoDTO.php';
require_once '../indexup.php';

$crm = $_POST['crm'];
$senha = $_POST['senha'];

$medicoDTO = new MedicoDTO();
$medicoDTO->setCrm($crm);
$medicoDTO->setPassword($senha);

$medicoDAO = new MedicoDAO();

$erro[2] = "<h1>Logado</h1>";
$erro[3] = "<h1>Não tem cadastro</h1>";

$usuario = $medicoDAO->logar($medicoDTO);
    if(!empty($usuario)){
        header("Location: /view/indexup.php?msg={$erro[2]}");
    }else{
        header("Location: /view/indexup.php?msg={$erro[3]}");
    }
