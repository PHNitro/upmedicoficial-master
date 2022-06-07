<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<center>
    <h1>Prontuário Geral</h1>
</center>
<body>
<style type="text/css">

body {
    background-color: lightblue;
}
table {
    box-shadow: 0px 0px 5px black;   
    margin-bottom: 0;
    width: 100%;
}

table th, table td {
    border: 2px solid darkblue; 
    padding-left: 0px;
}
 
.centro {
    text-align: center;
}

.direita {
    padding: 1px;
    text-align: right;
}

input[type='checkbox'] {
    text-align: center;
    float: left;
}
</style>

<table id="arquivado">
    <thead>
        <tr>
            <th class="centro" colspan="3">Pedidos por exame</th>
        </tr>
    </thead>
    <tbody>
        
    </tbody>
</table>

<table id="disponiveis">
    <thead>
        <tr>
            <th class="centro" colspan="3">Selecione os Pacientes:</th> 
        </tr>
        <tr>
            <th class="centro">Paulo</th>
            <th class="centro">Samuel</th>
            <th class="centro">Gabriel</th class="">
            <td class="">            
        </tr>
    </thead>
    <tbody>
        <tr>
            <td class="centro"><input type="checkbox" name="adicionar"  />Caso grave</td>
            <td class="centro">Infecção</td>
            <td class="centro">Necessário Cirurgia</td>
            <td class="centro">Paulo</td>     
        </tr>
        <tr>
            <td class="centro"><input type="checkbox" name="adicionar"  />Caso médio grave</td>
            <td class="centro">Braço quebrado</td>
            <td class="centro">Pontos</td>
            <td class="centro">Samuel</td>     
        </tr>
        <tr>
            <td class="centro"><input type="checkbox" name="adicionar"  />Caso menos grave</td>
            <td class="centro">Dor de cabeça</td>
            <td class="centro">A base de remédio indicado pelo médico</td>
            <td class="centro">Gabriel</td> 
    </tbody>
</table>

<script type="text/javascript">
//consultando todos os input to type checkbox na pagina
//caso a sua pagina possua mais inputs deste tipo, você deve tornar o filtro abaixo mais especifico.
var adicionar = document.querySelectorAll("input[type='checkbox']");

//consultando as tabelas que irão armazenar as disciplinas disponiveis e as que o aluno está matriculado.
var matriculado = document.querySelector("#arquivado tbody");
var disponiveis = document.querySelector("#disponiveis tbody");

//definindo o evento que irá mover a linha, é importante instanciar apenas um evento para todos os checkbox.
var adicionarOnClick = function () {
    //caso o checkbox esteja marcado, mova a linha para a tabela de matriculados, caso contrario para a tabela de disciplinas disponiveis.
    var escopo = this.checked ? matriculado : disponiveis;
    //this é o checkbox que foi clickado, o parentNode dele é a celula atual, e o parentNode da celula é a linha (arvore).
    escopo.appendChild(this.parentNode.parentNode);
};

//registrando o evento criado acima para todos os checkbox.
for (var indice in adicionar) {
    adicionar[indice].onclick = adicionarOnClick;
}
</script>
</body>
</html>