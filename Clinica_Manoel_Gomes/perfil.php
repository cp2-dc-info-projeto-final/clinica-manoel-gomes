<?php
include "autentica.php";
include "conecta_mysql.inc";

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
                    class="fas fa-user-secret me-2"></i>Admin</div>
            <div class="list-group list-group-flush my-3">
              <a href="perfil.php" class="list-group-item list-group-item-action bg-transparent  second-text active"><i
                 class="fas fa-tachometer-alt me-2"></i>Dashboard</a>
              <a href="servicos.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                 class="fas fa-hospital me-2"></i>Serviços</a>
              <a href="espec.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                 class="fas fa-stethoscope me-2"></i>Especialidades</a>
              <a href="funcionarios.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
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
                          <a class="nav-link second-text fw-bold" href="index_adm.php" id="navbarDropdown"
                          role="button"  aria-expanded="false">
                          <i class="fas fa-arrow-left me-2"></i>Voltar
                      </a>
                        </li>
                    </ul>
                </div>
            </nav>
            
            <?php
              if(isset($_SESSION['msg1'])){
                  echo $_SESSION['msg1'];
                  unset($_SESSION['msg1']);
                }
            ?> 
            <?php
              if(isset($_SESSION['msg3'])){
                  echo $_SESSION['msg3'];
                  unset($_SESSION['msg3']);
                }
            ?>
            <?php
                if(isset($_SESSION['msg7'])){
                    echo $_SESSION['msg7'];
                    unset($_SESSION['msg7']);
                }
            ?>  
            
           <div id="servicos" class="block">
            <div class="container">
              <div class="row">
                <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                  <a href="#" onclick="acao_servico()" class="destaque">
                    <div class="img-container mb-3">
                      <img src="_img/Hospital building-cuate.svg" class="img-fluid">
                    </div>
                    <h5 class="text-uppercase">Cadastrar <br> Serviço</h5>
                  </a>
                </div>
                
                <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                  <a href="#" onclick="acao_func()" class="destaque">
                    <div class="img-container mb-3">
                      <img src="_img/Doctors-bro.svg" class="mg-fluid">
                    </div>
                    <h5 class="text-uppercase">Cadastrar<br>Funcionário</h5>
                  </a>
                </div>
                
                <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                  <a href="#" class="destaque">
                    <div class="img-container mb-3">
                      <img src="_img/Events-bro.svg" class="img-fluid">
                    </div>
                    <h5 class="text-uppercase">Cadastrar<br>Data/Horário</h5>
                  </a>
                </div>
                
                <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                  <a href="#" onclick="acao_adm()" class="destaque">
                    <div class="img-container mb-3">
                      <img src="_img/Computer troubleshooting-pana.svg" class="img-fluid">
                    </div>
                    <h5 class="text-uppercase">Cadastrar<br>Adm</h5>
                  </a>
                </div>
              
              </div>
            </div>
          </div>
    <!-- /#page-content-wrapper -->
    </div>

    <div class="modal modal_servico">
      <div class="registration-form">
        <form action="receber_servico.php" method="REQUEST">
          <input type="hidden" name="servico" value="servico">
            <div class="form-icon">
                <span><i class="icon fas fa-hospital"></i></span>
            </div>
            
            <h5 class="text-uppercase">Cadastrar Serviço:</h5>
            <br>
            <div class="form-group">
                <input type="text" required="required" class="form-control item" name="nome" placeholder="Nome">
            </div>
            <div class="form-group">
                <textarea class="textarea--style-6 form-control item" maxlength="120" name="descricao" placeholder="Descrição"></textarea>
            </div>
            <div class="form-group">
              <select name="tipo_servico" required="required" class="form item" id="tipo_servico">
              <option value=''>Tipo</option>
              <option value="Laboratorial">Laboratorial</option>
              <option value="Odontologico">Odontológico</option>
              <option value="Clinico">Clínico</option>
              <option value="Pediatrico">Pediátrico</option>
              </select>
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-block create-account">Registrar</button>
              <button type="button" onclick="fechar_servico()" class="btn btn-block create-account2">Cancelar</button>
            </div>
        </form>
      </div>
    </div>

  <div class="modal modal_func">
  <div class="registration-form">
        <form action="receber_cadfuncionario.php" method="REQUEST">
          <input type="hidden" name="cadfuncionario" value="funcionario">
            <div class="form-icon">
                <span><i class="icon fas fa-user-secret"></i></span>
            </div>
            
            <h5 class="text-uppercase">Cadastrar Funcionário:</h5>
            <br>
            <div class="form-group">
                <input type="text" required="required" class="form-control item" id="nome" name="nome" placeholder="Nome Completo">
            </div>
            <div class="form-group">
              <input type="text" required="required" class="form-control item" id="crm" name="crm" placeholder="CRM">
              <script type="text/javascript">$("#crm").mask("000000-0");  </script>
            </div>
            <div class="form-group">
              <select name="especialidade" required="required" class="form item" id="espec">
              <option value=''>Especialidade</option>
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
              <input type="text" required="required" class="form-control item" id="telefone_func" name="telefone" placeholder="Telefone">
              <script type="text/javascript">$("#telefone_func").mask("(00) 00000-0000");</script>
            </div>
            <div class="form-group">
                <input type="date" required="required" class="form-control item" id="data_nasc" name="data_nasc" placeholder="Data de Nascimento">
            </div>
            <div class="form-group">
                <input type="email" required="required" class="form-control item" id="email" name="email" placeholder="Email">
            </div>
            <div class="form-group">
                <input type="password" required="required" class="form-control item" id="senha" name="senha" placeholder="Senha">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-block create-account">Registrar</button>
                <button type="button" onclick="fechar_func()" class="btn btn-block create-account2">Cancelar</button>
            </div>
          </form>
  </div>
  </div>

  <div class="modal modal_adm">
  <div class="registration-form">
            <form action="receber_adm.php" method="REQUEST">
              <input type="hidden" name="cadadm" value="adm">
                <div class="form-icon">
                    <span><i class="icon fas fa-user-secret"></i></span>
                </div>
                
                <h5 class="text-uppercase">Cadastrar Administrador:</h5>
                <br>
                <div class="form-group">
                    <input type="text" required="required" class="form-control item" id="nome" name="nome" placeholder="Nome Completo">
                </div>
                <div class="form-group">
                  <input type="text" required="required" class="form-control item" id="telefone_adm" name="telefone" placeholder="Telefone">
                  <script type="text/javascript">$("#telefone_adm").mask("(00) 00000-0000");</script>
                </div>
                <div class="form-group">
                    <input type="date" required="required" class="form-control item" id="data_nasc" name="data_nasc" placeholder="Data de Nascimento">
                </div>
                <div class="form-group">
                    <input type="text" required="required" class="form-control item" id="username" name="username" placeholder="Nome de Usuário">
                </div>
                <div class="form-group">
                    <input type="email" required="required" class="form-control item" id="email" name="email" placeholder="Email">
                </div>
                <?php
                    if(isset($_SESSION['msg1'])){
                        echo $_SESSION['msg1'];
                        unset($_SESSION['msg1']);
                    }
                ?>
                <div class="form-group">
                    <input type="password" required="required" class="form-control item" id="senha" name="senha" placeholder="Senha">
                </div>
          <div class="form-group">
              <button type="submit" class="btn btn-block create-account">Registrar</button>
              <button type="button" onclick="fechar_adm()" class="btn btn-block create-account2">Cancelar</button>
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
