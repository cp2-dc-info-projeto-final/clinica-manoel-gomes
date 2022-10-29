<?php 
include "autentica.php";
include "conecta_mysql.inc";

if(isset($_SESSION['cod_funcionario'])){
    $cod_funcionario = $_SESSION["cod_funcionario"];
    $sql= "SELECT * FROM funcionario WHERE cod_funcionario = $cod_funcionario;";
    $res= mysqli_query($mysqli,$sql);
    $funcionario = mysqli_fetch_array ($res);

}
else{
    $cod_funcionario = $_REQUEST ["cod_funcionario"];
    $sql= "SELECT * FROM funcionario WHERE cod_funcionario = $cod_funcionario;";
    $res= mysqli_query($mysqli,$sql);
    $funcionario = mysqli_fetch_array ($res);

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="v  iewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="_css/perfil.css" />
    <link rel="stylesheet" href="_css/form.css" />

    <title>Perfil Admin</title>
</head>

<body>
    <div class="d-flex" id="wrapper">
        <!-- MENU -->
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
              <a href="funcionarios.php" class="list-group-item list-group-item-action bg-transparent second-text active"><i
                 class="fas fa-clipboard me-2"></i>Funcionários</a>
              <a href="adm.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                class="fas fa-user-secret me-2"></i>Administradores</a>
              <a href="clientes.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
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
                            <a class="nav-link second-text fw-bold" href="funcionarios.php" id="navbarDropdown"
                                role="button" aria-expanded="false">
                                <i class="fas fa-arrow-left me-2"></i>Voltar
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <?php
              if(isset($_SESSION['msg4'])){
                  echo $_SESSION['msg4'];
                  unset($_SESSION['msg4']);
                }
            ?> 
             
            <div id="cad_cliente" class="block">
         <div class="container">

          <div class="registration-form">
            <form action="editar_funcionario.php" method="POST">
                <input type="hidden" name="operacao" value="editar">
                <input type="hidden" name="cod_funcionario" value="<?php echo $cod_funcionario?>">
                <div class="form-icon">
                    <span><i class="icon far fa-hospital" align-self-center ></i></span>
                </div>
                
                <h5 class="text-uppercase">Editar Funcionário:</h5>
                <br>
                <div class="form-group">
                    <input type="text" required="required" class="form-control item" name="nome" placeholder="Nome Completo" value="<?php echo $funcionario['nome']?>">
                </div>
                <div class="form-group">
                    <input type="text" required="required" class="form-control item" name="crm" placeholder="CRM" value="<?php echo $funcionario['crm']?>" id="alt_crm">
                    <script type="text/javascript">$("#alt_crm").mask("000000-0");  </script>
                </div>
                <div class="form-group">
                    <select name="especialidade" required="required" class="form item" id="especialidade">
                    
                    <option value="<?php echo $funcionario['especialidade']?>"><?php echo $funcionario['especialidade']?></option>
                    <?php

                        $sql= "SELECT * FROM especialidade";
                        $res= mysqli_query($mysqli,$sql);
                        $linhas= mysqli_num_rows($res);

                        for ($i = 0; $i < $linhas; $i++){
                            $espec = mysqli_fetch_array ($res);

                            echo"
                            <option value=".$espec['especialidade'].">".$espec['especialidade']."</option>";
                            
                        }

                    ?>
                    </select>
                </div>
                <div class="form-group">
                    <input type="text" required="required" class="form-control item" name="data_nasc" placeholder="Data de Nascimento" value="<?php echo  $funcionario['data_nasc']?>">
                </div>
                <div class="form-group">
                    <input type="text" required="required" class="form-control item" name="telefone" placeholder="Telefone" value="<?php echo $funcionario['telefone']?>" id="telefone_alt_func">
                    <script type="text/javascript">$("#telefone_alt_func").mask("(00) 00000-0000");</script>
                </div>
                <div class="form-group">
                    <input type="text" required="required" class="form-control item" name="email" placeholder="Email" value="<?php echo  $funcionario['email']?>">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-block create-account">Enviar</button>
                </div>
            </form>

        </div>
      </div>



    <!-- /CONTEÚDO -->
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
