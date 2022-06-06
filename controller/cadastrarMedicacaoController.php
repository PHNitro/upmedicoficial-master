<?php
require_once '../dto/MedicaoDTO.php';
require_once '../dao/MedicaoDAO.php';

$id = $_POST["id"];
$nome = $_POST["descricao"];
$cpf = $_POST["Idhistorico"];


$medicaoDTO = new MedicaoDTO();
$medicaoDTO->setId($id);
$medicaoDTO->setdescricao($descricao);
$medicaoDTO->setIdHistorico($IdHistorico);

$medicaoDAO = new MedicaoDAO();

if ($medicaoDAO->salvar($medicaoDTO)) {
    $msg = true;
    header("Location: ../view/formCadastrarmedicao.php??msg={$error[1]}" );
}