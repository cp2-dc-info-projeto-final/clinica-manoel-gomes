<?php 
include "autentica.php";
include "conecta_mysql.inc";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="_css/perfil.css" />
    <title>Perfil Admin</title>
</head>

<body>
<div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom"><i
                    class="fas fa-user-secret me-2"></i>Admin</div>
            <div class="list-group list-group-flush my-3">
              <a href="perfil.php" class="list-group-item list-group-item-action bg-transparent  second-text fw-bold"><i
                 class="fas fa-tachometer-alt me-2"></i>Dashboard</a>
              <a href="servicos.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                 class="fas fa-hospital me-2"></i>Serviços</a>
              <a href="espec.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                 class="fas fa-stethoscope me-2"></i>Especialidades</a>
              <a href="funcionarios.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                 class="fas fa-clipboard me-2"></i>Funcionários</a>
              <a href="adm.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                class="fas fa-user-secret me-2"></i>Administradores</a>
              <a href="clientes.php" class="list-group-item list-group-item-action bg-transparent second-text active"><i
                 class="fas fa-users me-2"></i>Pacientes</a>
              <a href="calendario.html" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i 
                 class="fas fa-calendar me-2"></i>Calendário</a>
              <a href="logout.php" class="list-group-item list-group-item-action bg-transparent text-danger fw-bold"><i
                 class="fas fa-power-off me-2"></i>Sair</a>
            </div>
        </div>
        <!-- /MENU -->

        <!-- CONTEÚDO -->
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
                            <a class="nav-link second-text fw-bold" href="perfil.php" id="navbarDropdown"
                                role="button" aria-expanded="false">
                                <i class="fas fa-arrow-left me-2"></i>Voltar
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

             <div class="buscar">
                    <form action="buscar_paciente.php" method="POST" class="buscar">
                        <input name="nome" id="search-input" type="search" id="form1" class="form-control w-25" placeholder="Buscar">
                        <input type="hidden" name="operacao" value="buscar">
                        <button  type="submit" class="btn btn-primary mx-2">
                    <i class="fas fa-search"></i>
                   </form>
            </div>


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
                                        <th scope="col">NOME</th>
                                        <th scope="col">CPF</th>
                                        <th scope="col">TELEFONE</th>
                                        <th scope="col">DATA NASC</th>
                                        <th scope="col">EMAIL</th>
                                        <th scope="col">  </th>
                                        <th scope="col">  </th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <?php



                                        $sql= "SELECT * FROM paciente";
                                        $res= mysqli_query($mysqli,$sql);
                                        $linhas= mysqli_num_rows($res);

                                        for ($i = 0; $i < $linhas; $i++){
                                            $paciente = mysqli_fetch_array ($res);

                                            echo"
                                            <tr>
                                            <td>".$paciente['nome']."</td>
                                            <td>".$paciente['cpf']."</td>
                                            <td>".$paciente['telefone']."</td>
                                            <td>".$paciente['data_nasc']."</td>
                                            <td>".$paciente['email']."</td>
                                            <td><a href='altera_cliente.php?cod_paciente=".$paciente["cod_paciente"]."' class='fas fa-edit'></a></td>
                                            <td><a href='excluir_paciente.php?cod_paciente=".$paciente["cod_paciente"]."' class='fas fa-trash text-danger'></a></td>
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



    <!-- /CONTEÚDO -->
    </div>

    <div class="modal modal_altera_paciente">
        <div class="registration-form">
            <form action="editar_cliente.php" method="POST">
                <input type="hidden" name="operacao" value="editar">
                <input type="hidden" name="cod_paciente" value="<?php echo $cod_paciente?>">
                <div class="form-icon">
                    <span><i class="icon far fa-user" align-self-center ></i></span>
                </div>
                
                <h5 class="text-uppercase">Editar Cliente:</h5>
                <br>
                <div class="form-group">
                    <input type="text" required="required" class="form-control item" name="nome" placeholder="Nome Completo" value="<?php echo $paciente['nome']?>">
                </div>
                <div class="form-group">
                    <input type="text" required="required" class="form-control item" name="cpf" placeholder="CPF" value="<?php echo $paciente['cpf']?>">
                </div>
                <div class="form-group">
                    <input type="text" required="required" class="form-control item" name="telefone" placeholder="Telefone" value="<?php echo $paciente['telefone']?>">
                </div>
                <div class="form-group">
                    <input type="text" required="required" class="form-control item" name="data_nasc" placeholder="Data de Nascimento" value="<?php echo $paciente['data_nasc']?>">
                </div>
                <div class="form-group">
                    <input type="text" required="required" class="form-control item" name="email" placeholder="Email" value="<?php echo $paciente['email']?>">
                </div>

                <div class="form-group">
                    <input type="password" required="required" class="form-control item" name="senha" placeholder="Senha" value="<?php echo $paciente['senha']?>">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-block create-account">Enviar</button>
                </div>
            </form>

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