<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="">
    <link rel="stylesheet" href="../lib/fontawesome-free-6.1.1-web/css/all.min.css">
    <script src="../lib/fontawesome-free-6.1.1-web/js/all.min.js"></script>
    <title>Listar Pacientes</title>
    <style>
        table, tr, td, th{
            border: 1px solid black;
            border-collapse: collapse;
            text-align: center;
        }

    </style>
</head>
<body>
    <div class="container mt-3">
                    <table>
                        <tr>
                        <th>Nome</th>
                        <th>Data de Nascimento</th>
                        <th>Telefone</th>
                        <th>Email</th>
                        <th>Situação</th>
                        <th>Excluir</th>
                        <th>Editar</th>
                    </tr>
        <?php
        require_once '../dao/PacienteDAO.php';

            $pacienteDAO = new PacienteDAO();
            $pacientes   = $pacienteDAO->findAll();
            foreach ($pacientes as $paciente) {
            $data = date('d/m/Y', strtotime($paciente["data_nascimento"]));
        ?>                    
                <tr>
                <td><?=$paciente['nome']?></td>
                <td><?=$data?></td>
                <td><?=$paciente["telefone"]?></td>
                <td><?=$paciente["email"]?></td>
                <td><?=$paciente["situacao"]?></td>
                
                <td><a href="../controller/excluirPacienteController.php?id=<?=$paciente["id"]?>"><i class='fa-solid fa-trash-can'></a></i></td>
                <td><a href="../view/formAlterarPaciente.php?id=<?=$paciente["id"]?>"><i class='fa-solid fa-pen-to-square' style="color: red"; ></a></i></td>
                </tr>
            <?php
            }
            ?>
            </table>
</div>
</body>
</html>