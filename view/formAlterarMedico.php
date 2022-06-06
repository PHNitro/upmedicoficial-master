<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário Alterar Médico</title>
    <link rel="stylesheet" href="../css/alterarMedico.css">
</head>
<body>
<?php
require_once '../dao/MedicoDAO.php';
$idMedico = $_GET['id'];
$medicoDAO = new MedicoDAO();
$medico = $MedicoDAO->findById( $idMedico );
?>

<div class="formContainer">
    <div id="img-login"> <img  src="/img/alterar-medico.png" alt=""></div>
    <form id="" action="/controller/medico/alterarMedicoController.php" method="post">
    <input type="hidden" name="idMedico" value="<?php echo $cliente["id"] ?>">
                    <div class="inputbox">
                        <input type="text" name="nome" id="nome" value="<?php echo $medico["nome"] ?>">
                        <label for="nome">Nome Completo</label>
                    </div>
                <br><br>
                <div class="inputbox">
                        <input type="text" name="cpf" id="cpf" value="<?php echo $medico["cpf"] ?>">
                        <label for="cpf">CPF</label>
                    </div>
                <br><br>
                <div class="inputbox">
                        <input type="text" name="crm" id="crm" value="<?php echo $medico["crm"] ?>">
                        <label for="crm">CRM</label>
                    </div>
                <br><br>
                <div class="inputbox">
                        <input type="text" name="email" id="email" value="<?php echo $medico["email"] ?>">
                        <label for="email">E-mail</label>
                    </div>
                <br><br>
                <div class="inputbox">
                        <input type="password" name="senha" id="password" value="<?php echo $medico["password"] ?>">
                        <label for="password">Senha</label>
                    </div>
                <br><br>
                 <button type="submit" onclick="return validarSenha()" class="botão">Enviar</button>
                 <br><br>
                
                    </td>
        </form>
 </div>
    <div style="text-align: center;">
    <?php
if ( isset( $_GET["sucesso"] ) && $_GET["sucesso"] == true ) {
    echo "Alterado com sucesso!!!!";
}
?>
    </div>
    
</body>

</html>