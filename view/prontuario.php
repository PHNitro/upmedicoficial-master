<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prontuário</title>
    <link rel="styleSheet" href="/css/prontuario.css">
    <link href='https://' rel='stylesheet'>
    <link rel="stylesheet" href="https://">
    <link rel="shortcut icon" href="/image/logoatras.png" />
    <link rel="stylesheet" href="/css/prontuario.css">
</head>

<body>

        <?php include './view/listarProntuario.php';
        include_once './dao/ProntuarioDAO.php';
        include_once './dao/PacienteDAO.php';
    ?>


    <?php
        session_start();
    ?>

<!DOCTYPE html>
<html>
<head>
	 <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Prontuário Médico</title>
</head>
	<body>
    <div>
    </div>
  <div class="container">
    <section class="main-section">
      <div class="card shadow-lg">
          <h5 class="card-header card-titulo bg-dark text-light">Prontuário Médico Eletrônico</h5>
          <div class="card-body">
            <legend  class="card-title">Filtros para Localizar Paciente:</legend>
              <form method="get" action="../view/listarPacientes.php">
                <div class="row">
                  <div class="col">
                    <div class="form-group">
                      <label for="paciente">Paciente:</label>
                      <input type="text" class="form-control" name="paciente" placeholder="Nome Paciente" autocomplete="off">
                    </div>
                  </div>
                  <div class="col">
                    <div class="form-group">
                      <label for="nascimento">Data de Nascimento:</label>
                      <input type="date" min="1900-01-01" max="2001-01-01" class="form-control" name="dtNasc" placeholder="data nascimento" autocomplete="off">
                    </div>
                  </div>
                  <div class="col-3">
                    <div class="form-group mt-2">
                      <label for="pesquisar">Pesquisar:</label>
                      <input id="searchPacient" type="submit" class="form-control btn btn-primary" value="Pesquisar">
                    </div>
                  </div>
                </div>
              </form>
          </div>
      </div>
    <link rel="stylesheet" href="/dao/ProntuarioDAO.php">
     <div>
      <script>
        $(document).ready(function () {
    $("#divCarregando").show();
    $(window).load(function () {
        // Quando a página estiver totalmente carregada, remove o id
        $('#divCarregando').fadeOut('slow');
    });
});
      </script>
      <style>
        .progresso {
    display: none;
    position: fixed;
    left: 50%;
    top: 50%;
    -webkit-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
    text-align: center;
    font-size: 16px;
    font-weight: bold;
    background-color: white;
    border: 1px solid black;
    height: 90px;
    width: 120px;
}
      </style>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js">
      <div id="divCarregando" class="progresso">
      <p>Aguarde...</p>
      </div>
  </script>
	</body>
</html>