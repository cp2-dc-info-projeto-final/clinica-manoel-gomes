<?php
session_start()
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
              <a class="nav-link active" aria-current="page" href="#">SOBRE</a>
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
      <!-- //HEADER -->
    
    <!--SLIDER-->
    <div id="slider">
        <div class="container block pt-1">
        </div>
    </div>
   <!-- //SLIDER-->
    <div>
        <h2 class="title text-left container pb-5">SOBRE NÓS:</h2>
    </div>
  <!-- SOBRE-->

  <div id="sobre" class="block">
    <div class="container">
      <div class="row">
        <div class="col-md-6 text-center align-self-center order-md-1 order-2">
          <img src="_img/manoel_gomes.jpg" class="img-fluid" id="foto_manoel_gomes"/>
        </div>
        <div class="col-md-6 align-self-center mb-md-0 mb-4 order-md-2 order-1">
          <h2 class="title">Quem foi Manoel Gomes?</h1>
          <h4 class="subtitle">Conheça o homem que tornou esse sonho possível</h4>
          <p>Nascido no dia 2 de dezembro de 1920 na cidade de Balsas, no Maranhão, Manoel Gomes era de origem humilde e, aos 12 anos, já trabalhava para ajudar com as despesas da casa. Criado por sua vó, já debilitada de um câncer que a afligia, Manoel criou o desejo de cuidar e a empatia para com os enfermos. Em razão das dificuldades financeiras, Manoel Gomes deixou sua cidade natal após a morte de sua avó e saiu rumo ao Rio de Janeiro. Manoel também sempre teve inclinação para a música e durante a noite como vigilante e nas tardes de domingo se apresentava em bares. Com muito esforço, conseguiu ingressar na URJ, atual UFRJ, onde cursou medicina.</p>
        </div>
      </div>
    </div>
  </div>

  <div id="sobre" class="block">
    <div class="container">
      <div class="row">
      <div class="col-md-6 text-center align-self-center order-md-1 order-2">
          <h3 class="title" align="left">Onde tudo começou</h>
          <h4 class="subtitle" align="left">O pequeno lar de um grande sonho</h4>
          <p align="left">Primeira residência da Clínica Manoel Gomes, inaugurada em 24 de março de 1972 na cidade de Duque de Caxias, Rio de Janeiro. Até sua morte, Manoel Gomes ainda guardava a caneta azul utilizada junto da escritura do imóvel inaugural e até hoje essa instituição está marcada com suas letras.</p>
        </div>
        <div class="col-md-6 align-self-center mb-md-0 mb-4 order-md-2 order-1">
          <img src="_img/clinica_manoel_gomes.jpg" class="img-fluid" id="foto_manoel_gomes"/>
        </div>
      </div>
    </div>
  </div>
  
  <!-- //SOBRE-->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" 
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" 
    crossorigin="anonymous"></script>

    <script src="_js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="_js/main.js"></script>
  </body>
</html>