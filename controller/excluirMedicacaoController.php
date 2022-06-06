<?php require_once '../controller/excluirMedicacaoController.php'; ?>
<?php require_once '../dao/HistoricoDAO.php'; ?>

<?php

   $pacienteDAO = new PacienteDAO();
   $array = $pacienteDAO->listar();

	if (isset($_GET['medicacao'])) {
		    $idmedicacao = $_GET['medicacao'];
            //$nome =      $_GET['nome']; 
			
	        $novopaciente = new PacienteDAO();
			$novopaciente->setMedicacao($paciente);
		          
			$pacienteDAO = new PacienteDAO();
			
            $array = $MedicacaoDAO->excluir($novopaciente);
            if ($array==TRUE) {
                 header('Location:../view/listarPacientes.php');
            }else {
              echo "Erro";
			}
    }
?>
 

<?php 
require_once '../dao/MedicacaoDAO.php';

$idmedicacao = $_GET["id"];

$medicacaoDAO = new MedicacaoDAO();
if ($medicacaoDAO->deleteById( $idmedicacao )) {
    header("Location: ../view/listarTodosmedicacao.php");
}