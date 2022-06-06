<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
    <h1>Prontuário</h1>
<body>
        <tr>
            <th>Número: </th>
            <th>Data de Criação: </th>
            <th>Ativo: </th>
            <th>Relatorio Medico: </th>
            <th>Medico ID: </th>
            <th>Paciente ID: </th>
            
        </tr>

        <?php

        require_once '/dao/ProntuarioDAO.php';

        $ProntuarioDAO = new ProntuarioDAO();
        $Prontuario = $ProntuarioDAO->findAll();

        foreach ($Prontuario as $Prontuario) {
            echo "<td>{$Prontuario["id"]}</td>";
            echo "<td>{$Prontuario["numero"]}</td>";
            echo "<td>{$Prontuario["data_criacao"]}</td>";
            echo "<td>{$Prontuario["ATIVO"]}</td>";
            echo "<td>{$Prontuario["paciente_id"]}</td>";
            
            

            echo " <td align='center'><a href='../controller/excluirProntuarioController.php?id={$Prontuario["id"]}'><i class='fa-solid fa-trash-can'></a></i></td>";
            echo " <td align='center'><a href='../controller/alterarProntuarioControler.php?id={$Prontuario["id"]}'><i class='fa-solid fa-pen-to-square'></a></i></td>";
        }
        echo "</table>";
        ?>
        <a href="../controller/cadastrarProntuarioController.php">Cadastrar</a>
        <a href="">Sair</a> 

</body>
</html>