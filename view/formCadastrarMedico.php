<!DOCTYPE html>
<html>
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Clínica UPMedic | Faça seu cadastro</title>
    <link rel="stylesheet" href="../lib/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="../css/padrao.css">
    <link rel="shortcut icon" href="/image/logoatras.png">
    <script src="../lib/fontawesome/js/all.min.js"></script>

</head>

<body class="white-bg">
    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div class="m-b-sm">
            <center>
                <img alt="image" class="img-circle img-responsive" src="/image/uplogo.png" style="width: 200px">
            </center>
           <div>
            <center>
            <div>
            <h3>Faça seu Cadastro</h3>
            <br>
            <p>Clínica UPMedic</p>
            <br>
            <p>Médico: Informe os dados abaixo</p>
            </center>
            </br>
            <form class="m-t" role="form" method="post" action="../controller/cadastrarMedicoController.php">
                <div class="form-group">
                    <label class="col-md-1 control-label">Nome: </label>
                    <input id="nome" name = "nome" type="name" class="form-control" placeholder="nome" required="" maxlength = "20">
                </div>
                <div class="form-group">
                    <label class="col-md-1 control-label">CPF: </label>
                    <input id="cpf" name = "cpf" type="text" class="form-control" placeholder="cpf" required="" maxlength = "20">
                </div>
                <div class="form-group">
                    <label class="col-md-1 control-label">CRM: </label>
                    <input id="crm" name = "crm" type="text" class="form-control" placeholder="crm" required="" maxlength = "20">
                </div>
                <div class="form-group">
                    <label class="col-md-1 control-label">Data de Nascimento: </label>
                    <input id="" name = "datanascimento" type="date" class="form-control" placeholder="data de nascimento" required="" maxlength="100">
                </div>
                <div class="form-group">
                    <label class="col-md-1 control-label">Celular: </label>
                    <input id="celular" name = "celular" type="text" class="form-control"  maxlength = "11" placeholder="(xx) xxxx-xxxx" required="">
                </div>
                <div class="form-group">
                    <label class="col-md-1 control-label">E-mail: </label>
                    <input id="email" name = "email" type="text" class="form-control" placeholder="email" maxlength = "255" required="">
                </div>
                <div class="form-group">
                    <label class="col-md-1 control-label">Senha: </label>
                    <input id="password" name = "password" type="password" class="form-control" onkeypress="mascara(this, password)" placeholder="sua senha" required="" maxlength = "100">
                </div>
                <td>
                        <label for="cm">Clínico  Geral</label>
                        </td>
                        <td>
                            <input type="radio" name="especialidade" id="cli" value="Clinico Geral">
                        </td>
                        <td>
                            <label for="cg">Cirurgião Geral</label>
                        </td>
                        <td>
                            <input type="radio" name="especialidade" id="cg" value="Cirurgiao Geral">
                        </td>
                    </tr>
                </table>
                <input type="submit" value="Cadastrar">
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b">Salvar</button>
                <button type="button" onClick="history.go(-1)" class="btn btn-warning block full-width m-b">Retornar</button><link href="/view/login.php">
            </form>

           </div>
        </div>
   </div>
</body>
</html>
