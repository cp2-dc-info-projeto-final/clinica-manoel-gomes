<?php
include "autentica_paciente.php";
include "conecta_mysql.inc";

$sql = "SELECT * FROM paciente WHERE cpf = '$cpf'";
$res= mysqli_query($mysqli,$sql);
$paciente = mysqli_fetch_array ($res);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
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
        <!-- Sidebar -->
        <div class="bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom"><i
                    class="fas fa-user me-2"></i>PERFIL</div>
            <div class="list-group list-group-flush my-3">
              <a href="perfil_paciente.php" class="list-group-item list-group-item-action bg-transparent  second-text active"><i
                 class="fas fa-user me-2"></i>Perfil</a>
              <a href="calendario_paciente" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
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
                          role="button"  aria-expanded="false">
                          <i class="fas fa-arrow-left me-2"></i>Voltar
                      </a>
                        </li>
                    </ul>
                </div>
            </nav>

    <div class="container">
          <div class="registration-form">
            <form action="editar_paciente.php" method="POST">
                <input type="hidden" name="operacao" value="editar">
                <div class="form-icon">
                    <span><i class="icon far fa-user" align-self-center ></i></span>
                </div>
                
                <h5 class="text-uppercase">Editar Perfil:</h5>
                <?php
              if(isset($_SESSION['msg_paciente'])){
                  echo $_SESSION['msg_paciente'];
                  unset($_SESSION['msg_paciente']);
                }
               ?>
                <br>
                <div class="form-group">
                    <input type="text" required="required" class="form-control item" name="nome" placeholder="Nome Completo" value="<?php echo $paciente['nome']?>">
                </div>
                <div class="form-group">
                    <input type="text" required="required" class="form-control item" name="cpf" placeholder="CPF" value="<?php echo $paciente['cpf']?>" id="alt_cpf">
                    <script type="text/javascript">$("#alt_cpf").mask("000.000.000-00");</script>
                </div>
                <div class="form-group">
                    <input type="text" required="required" class="form-control item" name="telefone" placeholder="Telefone" value="<?php echo $paciente['telefone']?>" id="telefone_alt_paciente">
                    <script type="text/javascript">$("#telefone_alt_paciente").mask("(00) 00000-0000");</script>
                </div>
                <div class="form-group">
                    <input type="text" required="required" class="form-control item" name="data_nasc" placeholder="Data de Nascimento" value="<?php echo $paciente['data_nasc']?>">
                </div>
                <div class="form-group">
                    <input type="text" required="required" class="form-control item" name="email" placeholder="Email" value="<?php echo $paciente['email']?>">
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
    <script src="_js/modal.js"></script>
</body>

</html>