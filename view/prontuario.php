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
    <link rel="shortcut icon" href="/image/" />
    <link rel="stylesheet" href="../css/prontuario.css">
</head>

<body>

    <?php include './view/login.php/home.php';
        include_once './DAO/ProntuarioDAO.php';
        include_once './DAO/PacienteDAO.php';
        include_once './DTO/ProntuarioDTO.php';
        include_once './DTO/PacienteDTO.php';
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
    <link rel="stylesheet" href="../css/prontuario.css">
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
                      <input type="date" min="1900-01-01" max="2200-01-01" class="form-control" name="dtNasc" placeholder="data nascimento" autocomplete="off">
                    </div>
                  </div>
                  <div class="col-3">
                    <div class="form-group mt-2">
                      <label for="pesquisar">Pesquisar</label>
                      <input id="searchPacient" type="submit" class="form-control btn btn-primary" value="Pesquisar">
                    </div>
                  </div>
                </div>
              </form>
          </div>
      </div>
    </section>
    <link rel="stylesheet" href="/dao/ProntuarioDAO.php">
    <section>
      <div class="load">
         <h2 class="text-dark font-weight-bold">Aguarde</h2>
      </div>
    </section>
  </div>
	</body>
</html>