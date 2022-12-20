<?php
include "autentica_paciente.php";
?>

<!doctype html>
<html lang="pt-br">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="_css/main.css">

    <title>Página Inicial</title>
  </head>
  <body>

    <!-- HEADER -->
  <div id="header">
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-light justify-content-between">
        <a class="navbar-brand" href="#">
         CLÍNICA MANOEL GOMES
        </a>
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto align-items-center">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Página Inicial</a>
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
            <li class="nav-item">
            <a class="nav-link" href="perfil_paciente.php">Perfil</a>
            </li>
            </ul>
          </div>
        </nav>
      </div>
    </div>
      <!-- //HEADER -->

    <?php
    if(isset($_SESSION['msg'])){
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }
    ?>
    <?php
    if(isset($_SESSION['msg_login_paciente'])){
        echo $_SESSION['msg_login_paciente'];
        unset($_SESSION['msg_login_paciente']);
    }
    ?>
    
    <!--SLIDER-->
    <div id="slider" class="block">
      <div class="container pt-5">
        <div class="row">
          <div class="col-md-4 align-self-center mb-md-0 mb-4">
          <h1>SUA SAÚDE EM PRIMEIRO LUGAR</h1>
             <h4 class="mb-4">O lugar mais seguro para a sua saúde</h4>
            
          </div>
              <div class="col-md-8 align-self-center text-center">
                <img src="_img/Doctors-pana.svg" class="img-fluid"  />
              </div>
        </div>
      </div> 
    </div>
   <!-- //SLIDER-->
      
  <!-- SOBRE-->

  <div id="sobre" class="block">
    <div class="container">
      <div class="row">
        <div class="col-md-6 text-center align-self-center order-md-1 order-2">
          <img src="_img/Medical care-pana.svg" class="img-fluid" />
        </div>
        <div class="col-md-6 align-self-center mb-md-0 mb-4 order-md-2 order-1">
        <h2 class="title">Buscando a qualidade de vida que você merece	</h1>
          <h4 class="subtitle">A saúde e a alegria promovem-se uma à outra</h4>
          <p>Há 50 anos ofertando o melhor para a proteção da sua saúde e melhoria da qualidade de vida. Seguindo os princípios de nosso fundador, a Clínia Manoel Gomes prioriza o conforto de nossos pacientes, com os profissionais mais qualificados e ambientes equipados com a mais avançada tecnologia.</p>
            <a href="servico_clinico.php" class="btn btn-primary button button-primay">agende sua consulta</a>
        </div>
      </div>
    </div>
  </div>

  <!-- //SOBRE-->
    
  <!-- SERVIÇOS-->

  <div id="servicos" class="block">
  <div class="container">
    <h2 class="title text-center">Nossos Serviços</h2>
    <h4 class="subtitle text-center mb-4">Conheça nosso trabalho</h4>
    <div class="row">
      <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
        <a href="#" class="destaque">
        <div class="img-container mb-3">
          <img src="_img/Medical prescription-bro.svg" class="img-fluid">
        </div>
        <h5 class="text-uppercase">Clínico</h5>
        <p class="mb-0">Melhores serviços de proteção e recuperação da saúde</p>
       </a>
      </div>
      
      <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
        <a href="#" class="destaque">
        <div class="img-container mb-3">
          <img src="_img/Oral care-pana.svg" class="img-fluid">
        </div>
        <h5 class="text-uppercase">Odontológico</h5>
        <p class="mb-0">Os profissionais mais capacitados para cuidar da sua saúde bucal</p>
       </a>
      </div>

      <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
        <a href="#" class="destaque">
        <div class="img-container mb-3">
          <img src="_img/Pediatrician-pana.svg" class="img-fluid">
        </div>
        <h5 class="text-uppercase">Pediátrico</h5>
        <p class="mb-0">Profissionais especializados na saúde dos pequenos</p>
       </a>
      </div>

      <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
        <a href="#" class="destaque">
        <div class="img-container mb-3">
          <img src="_img/Radiography-rafiki.svg" class="img-fluid">
        </div>
        <h5 class="text-uppercase">Laboratorial</h5>
        <p class="mb-0">Laboratórios aparelhados com tecnologia avançada</p>
       </a>
      </div>

    </div>
  </div>
</div>

  <!-- //SERVIÇOS-->


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" 
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" 
    crossorigin="anonymous"></script>

    <script src="_js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="_js/main.js"></script>
  </body>
</html>