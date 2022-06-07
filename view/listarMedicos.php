<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Médicos | UPMedic</title>
    <link rel="stylesheet" href="../css/formCadastrarMedico.css">
    <link  href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="styleSheet" href="/css/prontuario.css">
    <link rel="shortcut icon" href="/image/pngwing.com.png">
    <link rel="stylesheet" href="/css/formCadastrarMedico.css">

    <script src="../lib/fontawesome/js/all.min.js"></script>
</head>
    <a href="/view/listarMedicos.php"></a>
    <center>
        <h1>Listar Médicos</h1>
    <style>
        table, tr, td, th{
            border-color: lightblue;
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
                        <th>Email</th>
                        <th>Data de Nascimento</th>
                        <th>Cpf</th>
                        <th>Crm</th>
                        <th>Celular</th>
                        <th>Senha</th>
                        <th>Especialidade</th>
                        <th>Excluir</th>
                        <th>Editar</th>
                    </tr>
                    </center>
                    <?php
                        require_once '../dao/MedicoDAO.php';

                        $medicoDAO = new MedicoDAO();
                        $medicos   = $medicoDAO->findAll();
                        foreach ( $medicos as $medico ) {
                            $data = date( 'd/m/Y', strtotime( $medico["datanascimento"] ) );
                        ?>
                <tr>
                <td><?=$medico['nome']?></td>
                <td><?=$medico['email']?></td>
                <td><?=$medico['datanascimento']?></td>
                <td><?=$medico['cpf']?></td>
                <td><?=$medico['crm']?></td>
                <td><?=$medico["celular"]?></td>
                <td><?=$medico["password"]?></td>
                <td><?=$medico["especialidade"]?></td>

                <td><a href="../controller/alterarMedicoController.php?id=<?=$medico["id"]?>"><i class='bx bx-edit-alt'></a></i></td>
                <td><a href="../controller/excluirMedicoController.php?id=<?=$medico["id"]?>"><i class='bx bx-trash'></a></i></td>
                </tr>
            <?php
                }
            ?>
            </table>
</div>
</body>
</html>