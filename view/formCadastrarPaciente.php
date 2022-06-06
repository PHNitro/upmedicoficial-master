<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/cadastrarPaciente.css">
    <title>Document</title>
</head>
<body>
    <div id="formulario">
        <h1>Cadastrar Paciente</h1>
        <form action="../controller/cadastrarPacienteController.php" method="post">
            <input type="text" name="nome" id="" placeholder="Nome: ">
            <input type="email" name="email" id="" placeholder="E-mail: ">
            <input type="date" name="data" id="">
            <input type="tel" name="telefone" id="" placeholder="Telefone: ">
            <input type="text" name="cpf" id="" placeholder="CPF: ">
            <input type="text" name="cep" id="" placeholder="CEP: ">
            <select name="situacao" id="">
                <option value="a">on</option>
                <option value="d">off</option>
            </select>
            <input type="submit" value="Cadastrar">
        </form>
    </div>

    <div style="text-align: center">

        <?php
            if ( isset( $_GET['msg'] ) ) {
                echo $_GET['msg'];
            }
        ?>

</div>
</body>
</html>