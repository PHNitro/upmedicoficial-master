<?php
require_once '../dao/PacienteDAO.php';
require_once '../dto/PacienteDTO.php';
$id = $_GET['id'];
$pacienteDAO = new PacienteDAO();

$paciente = $pacienteDAO->findById($id);
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/alterarpaciente.css">
    <title>Alterar</title>
    <style>
        body{
            display: flex;
            justify-content: center;
            flex-direction: column;
            align-items: center;
            min-height: 90vh;
        }

        #formulario{
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        form{
            display: flex;
            flex-direction: column;
            width: fit-content;
            justify-content: center;
            align-items: center;
        }

        input, select{
            margin-bottom: 13px;
            width: 300px;
            height: 30px;
        }

        input[type="submit"]{
            width: 100px;
        }
    </style>
</head>
<body>
    <div id="formulario">
        <h1>Alterar Cadastro do Paciente</h1>
        <form action="../controller/alterarPacienteController.php" method="post">
            <input type="hidden" name="id" value="<?=$paciente['id']?>">
            <input type="text" name="nome" id="" placeholder="Nome: " value="<?=$paciente['nome']?>">
            <input type="email" name="email" id="" placeholder="E-mail: " value="<?=$paciente['email']?>">
            <input type="date" name="data" id="" value="<?=$paciente['data_nascimento']?>">
            <input type="tel" name="telefone" id="" placeholder="Telefone: " value="<?=$paciente['telefone']?>">
            <input type="text" name="cpf" id="" placeholder="CPF: " value="<?=$paciente['cpf']?>">
            <input type="text" name="cep" id="" placeholder="CEP: " value="<?=$paciente['cep']?>">
            <select name="situacao" id="">
                <option value="a" <?= $paciente['situacao']== "a" ? "selected": "" ?> >on</option>
                <option value="d" <?= $paciente['situacao']== "d" ? "selected": "" ?> >off</option>
            </select>
            <input type="submit" value="Cadastrar">
        </form>
    </div>
</body>
</html>