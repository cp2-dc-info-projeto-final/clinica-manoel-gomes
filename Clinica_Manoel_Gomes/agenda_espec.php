<?php
include "autentica_paciente.php";
include "conecta_mysql.inc";

$sql = "SELECT * FROM paciente WHERE cpf = '$cpf';";
$res= mysqli_query($mysqli,$sql);
$paciente = mysqli_fetch_array ($res);
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
    <link rel="stylesheet" href="_css/form.css" />

    <title>Página Inicial</title>
  </head>
  <body>

    <!-- HEADER -->
    <div class="block" id="header">
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
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Agendamento</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="servico_clinico.php">Clínico</a></li>
                <li><a class="dropdown-item" href="form_loginfuncionario.php">Odontológico</a></li>
                <li><a class="dropdown-item" href="form_login.php">Pediátrico</a></li>
                <li><a class="dropdown-item" href="form_login.php">Laboratorial</a></li>
              </ul>
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

    <div class="block">
    <div class="registration-form">
                <form action="registra_horario.php" method="POST">
                  <input type="hidden" name="cod_paciente" value="<?php echo $paciente['cod_paciente']?>">
                    <div class="form-icon">
                        <span><i class="icon fas fa-hospital"></i></span>
                    </div>
                    
                    <h5 class="text-uppercase">Faça o seu agendamento:</h5>
                    <br>
                    <div class="form-group">
                        <select name="agendamento" required="required" class="form item">
                            <option value=''>Data e Horário</option>
                            <?php

                            $var = $_REQUEST["servico"];

                            $sql= "SELECT * FROM agendamento WHERE nome = '$var'";
                            $res= mysqli_query($mysqli,$sql);
                            $linhas= mysqli_num_rows($res);

                            for ($i = 0; $i < $linhas; $i++){
                                $agendamento = mysqli_fetch_array ($res);

                                echo"<input type ='hidden' name ='cod_agendamento' value =".$agendamento['cod_agendamento'].">"; 
                                echo"
                                <option value=".$agendamento['cod_agendamento'].">".$agendamento['dia'].' - '.$agendamento['horario']."</option>";
                                
                            }

                           ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-block create-account">Registrar</button>
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