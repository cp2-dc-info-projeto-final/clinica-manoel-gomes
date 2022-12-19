<?php
include "autentica_paciente.php";
include "conecta_mysql.inc";
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
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="sobre.php">SOBRE</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Agendamento</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="servico_clinico.php">Clínico</a></li>
                <li><a class="dropdown-item" href="servico_odonto.php">Odontológico</a></li>
                <li><a class="dropdown-item" href="servico_pediatrico.php">Pediátrico</a></li>
                <li><a class="dropdown-item" href="servico_laboratorial.php">Laboratorial</a></li>
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
                <section class="intro">
                    <div class="gradient-custom-1 h-100">
                        <div class="mask d-flex align-items-center h-100">
                        <div class="container">
                            <div class="row justify-content-center">
                            <div class="col-12">
                                <div class="table-responsive bg-white">
                                <table class="table mb-0 table-striped ">
                                    <thead class="color">
                                    <tr>
                                        <th scope="col">SERVIÇOS</th>
                                        <th scope="col"></th>                                       
                                        
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <?php

                                        $sql= "SELECT * FROM servicos WHERE tipo_servico = 'Laboratorial'";
                                        $res= mysqli_query($mysqli,$sql);
                                        $linhas= mysqli_num_rows($res);

                                        for ($i = 0; $i < $linhas; $i++){
                                            $servico = mysqli_fetch_array ($res);

                                            echo"
                                            <tr>
                                            <td>".utf8_decode($servico['nome'])."</td>
                                            <td>
                                            <a href='agenda_espec.php?servico=".$servico["cod_servico"]."' class='fas fa-calendar'></a>
                                            </td>";
                                            
                                        }

                                    ?>
                                    
                                    </tbody>
                                </table>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                 </section>
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