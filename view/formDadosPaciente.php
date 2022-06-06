<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/dados.css">
    <title>Dados Paciente</title>
</head>
<body>
    <h1>Dados do Paciente</h1>
    <form action="../controller/cadastrarPacienteController.php" method="post">

        <table>
            <tr>
                <td>
                    <label for="nome">Nome Completo:</label>
                </td>
                <td>
                    <input type="text" id="nome" name="usuario_nome" />
                </td>
                <td>
                    <label for="datanascimento">Data de Nascimento:</label>
                </td>
                <td>
                    <input type="date" id="datanascimento" name="datanascimento" />
                </td>
            <tr>
                <td>
                    <label for="nome">Nome da Mãe:</label>
                </td>
                <td>
                    <input type="text" id="nome" name="usuario_nome" />
                </td>
                <td>
                    <label for="nome">Nome do Pai:</label>
                </td>
                <td>
                    <input type="text" id="nome" name="usuario_nome" />
                </td>
            </tr>
            <tr>
                <td>
                    <label for="email">E-mail:</label>
                </td>
                <td>
                    <input type="email" id="email" name="usuario_email" />
                </td>
                <td>
                    <label for="">CPF:</label>
                </td>
                <td>
                    <input type="text" id="text" name="CPF" />
                </td>
                <td>
                    <label for="">Sexo:</label>
                </td>
                <td>
                    <input type="radio" name="sexo" value="masculino" id="masculino" checked>
                </td>
                <td>
                    <label for="masculino">Masculino:</label>
                </td>
                <td>
                    <input type="radio" name="sexo" value="feminino" id="feminino" checked>
                </td>
                <td>
                    <label for="feminino">Feminino:</label>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="telefone">Telefone:</label>
                </td>
                <td>
                    <input type="tel" id="" class="input-padrao" required placeholder="(xx) xxxxx-xxxx">
                </td>
                <td>
                    <label for="endereco">Endereço:</label>
                </td>
                <td>
                    <input type="text" id="endereco" name="Endereço">
                </td>
                <td>
                    <label for="CEP">CEP:</label>
                </td>
                <td>
                    <input type="text" id="CEP" name="CEP">
                </td>
            <tr>
                <td>
                    <label for="">Alérgico:</label>
                    <input type="radio" name="alergico" value="sim" id="sim" checked>
                </td>
                <td>
                    <label for="masculino">Sim</label>
                    <input type="radio" name="alergico" value="Nao" id="">
                </td>
                <td>
                    <label for="feminino">Não</label>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="msg">Se sim, alérgico a qual medicamento?</label>
                </td>
                <td>
                    <textarea id="msg"></textarea>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="msg">Sintomas do paciente:</label>
                </td>
                <td>
                    <textarea id="msg"></textarea>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="msg">Relato do Médico:</label>
                </td>
                <td>
                    <textarea id="msg"></textarea>
                </td>
                <td>
                    <label for="">É caso de internação?</label>
                    <input type="radio" name="internação" value="sim" id="" checked>
                </td>
                <td>
                    <label for="internacao">Sim</label>
                </td>
                <td>
                    <input type="radio" name="internação" value="Nao" id="Nao">
                </td>
                <td>
                    <label for="internacao">Não</label>
                </td>
            </tr>


            </tr>
            </tr>
            </table>

        <div class="button">
            <button type="submit">SALVAR</button>
        </div>

    </form>
</body>

</html>