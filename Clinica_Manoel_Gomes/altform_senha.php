<?php include "autentica_paciente.php"; ?>
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
        <!-- Sidebar -->
        <div class="bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom"><i
                    class="fas fa-user me-2"></i>PERFIL</div>
            <div class="list-group list-group-flush my-3">
              <a href="perfil_paciente.php" class="list-group-item list-group-item-action bg-transparent  second-text active"><i
                 class="fas fa-user me-2"></i>Perfil</a>
              <a href="calendario_paciente.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
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
            
            <div id="cad_cliente" class="block">
         <div class="container">

          <div class="registration-form">
            <form action="editar_senha_cliente.php" method="POST">
                <input type="hidden" name="operacao" value="editar_senha">
                <div class="form-icon">
                    <span><i class="fas fa-key" align-self-center ></i></span>
                </div>
                
                <h5 class="text-uppercase">Editar Senha:</h5>
                <?php
                 if(isset($_SESSION['msg_senha'])){
                   echo $_SESSION['msg_senha'];
                   unset($_SESSION['msg_senha']);
                  }
                ?> 
                <br>
                <div class="form-group">
                    <input type="password" required="required" class="form-control item" name="senha_atual" placeholder="Digite a senha atual">
                </div>
                <div class="form-group">
                    <input type="password" required="required" class="form-control item" name="nova_senha" placeholder="Nova senha">
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
