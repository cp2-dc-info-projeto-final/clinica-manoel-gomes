<?php
include "autentica_paciente.php";
include "conecta_mysql.inc";

$sql = "SELECT * FROM paciente WHERE cpf = '$cpf';";
$res= mysqli_query($mysqli,$sql);
$paciente = mysqli_fetch_array ($res);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="_css/perfil.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <title>Perfil Paciente</title>
</head>

<body>
<div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom"><i
                    class="fas fa-user me-2"></i>PERFIL</div>
            <div class="list-group list-group-flush my-3">
              <a href="perfil_paciente.php" class="list-group-item list-group-item-action bg-transparent  second-text fw-bold"><i
                 class="fas fa-user me-2"></i>Perfil</a>
              <a href="#" class="list-group-item list-group-item-action bg-transparent second-text active"><i
                 class="fas fa-calendar me-2"></i>Calendário</a>
              <a href="logout_paciente.php" class="list-group-item list-group-item-action bg-transparent text-danger fw-bold"><i
                 class="fas fa-power-off me-2"></i>Sair</a>
            </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
                    <h2 class="fs-2 m-0">Dashboard</h2>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link second-text fw-bold" href="perfil_paciente.php" id="navbarDropdown"
                                role="button" aria-expanded="false">
                                <i class="fas fa-arrow-left me-2"></i>Voltar
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

    <!-- /#page-content-wrapper -->

            <div class="block">
                <section class="intro">
                    <div class="gradient-custom-1 h-100">
                        <div class="mask d-flex align-items-center h-100">
                        <div class="container">
                            <div class="row justify-content-center">
                            <div class="col-12">
                                <div class="table-responsive bg-white">
                                <table class="table mb-0  table-striped ">
                                    <thead class="color">
                                    <tr>
                                        <th scope="col">DATA</th>
                                        <th scope="col">HORÁRIO</th>
                                        <th scope="col">SERVIÇO</th>
                                        <th scope="col">RESPONSÁVEL</th>
                                        <th scope="col">CRM</th>
                                        <th scope=""></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php

                                        $cod_paciente = $paciente['cod_paciente'];

                                        $sql= "SELECT * FROM agendamento WHERE cod_paciente = '$cod_paciente'";
                                        $res= mysqli_query($mysqli,$sql);
                                        $linhas= mysqli_num_rows($res);

                                        for ($i = 0; $i < $linhas; $i++){
                                            $paciente = mysqli_fetch_array ($res);

                                            echo"<tr>
                                            <td>".$paciente['dia']."</td>
                                            <td>".$paciente['horario']."</td>
                                            <td>".utf8_decode($paciente['nome_servico'])."</td>
                                            <td>".$paciente['responsavel']."</td>
                                            <td>".$paciente['crm']."
                                            </td>
                                            <td><a href='cancela_agendamento.php?cod_agendamento=".$paciente["cod_agendamento"]."' class='fas fa-calendar-times text-danger'></a></td>
                                            </tr>";
                                            
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


    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle");

        toggleButton.onclick = function () {
            el.classList.toggle("toggled");
        };
    </script>
</body>

</html>