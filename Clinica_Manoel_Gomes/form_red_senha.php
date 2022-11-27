<?php
session_start();
?>

<!doctype html>

<html lang="pt-br">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="_css/main.css">
    <link rel="stylesheet" href="_css/form_paciente.css">

    <title>Página Inicial</title>
  </head>
  <body>

    <!-- HEADER -->
    <div id="header">
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-light justify-content-between">
        <a class="navbar-brand" href="index.php">
         CLÍNICA MANOEL GOMES
        </a>
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto align-items-center">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">Página Inicial</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Agendamento</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Login</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="form_loginpaciente.php">Paciente</a></li>
                <li><a class="dropdown-item" href="form_loginfuncionario.php">Funcionário</a></li>
                <li><a class="dropdown-item" href="form_login.php">Administrador</a></li>
              </ul>
            </ul>
          </div>
        </nav>
      </div>
    </div>
            


    <div id="cad_cliente" class="block">
        <div class="container">

          <div class="registration-form">
            <form action="editar_senha_cliente.php" method="POST">
                <input type="hidden" name="operacao" value="editar_senha">
                <div class="form-icon">
                    <span><i class="icon far fa-id-card"></i></span>
                </div>   
                <h5 class="text-uppercase">Digite sua nova senha:</h5>
                <br>
                <div class="form-group">
                    <input type="password" required="required" class="form-control item" name="nova_senha" placeholder="Nova Senha">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-block create-account">Enviar</button>
                </div>
            </form>

        </div>
      </div>
      <!-- //HEADER -->

   


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" 
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" 
    crossorigin="anonymous"></script>

    <script src="_js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="_js/main.js"></script>
  </body>
</html>

?>