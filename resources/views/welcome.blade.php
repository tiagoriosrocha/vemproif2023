<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', '#VEMPROIF-2023') }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="styles.css">
  </head>
  <body>
    
    <!------------------------------------------------------------
      ------------------------------------------------------------
      AQUI EU CRIO O MENU SUPERIOR DO SITE UTILIZANDO O ELEMENTO
      NAVBAR DO BOOTSTRAP
      ------------------------------------------------------------
      ------------------------------------------------------------ 
    -->
    <header class="p-3 border-bottom">
    <div class="container-fluid">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
      <a class="navbar-brand" href="{{ route('dashboard') }}">
            <img src="logo-pq-sm.png" />
      </a>
      </div>
    </div>
  </header>
    
    
    <!------------------------------------------------------------
      ------------------------------------------------------------
      INÍCIO DO CONTEÚDO DO BOOTSTRAP
      ------------------------------------------------------------
      ------------------------------------------------------------ 
    -->
    <div class="container-fluid"> 
       
    <div class="row">
    <div class="text-center bg-body-tertiary">
        <div class="container py-5">
        <i class="bi bi-rocket-takeoff-fill" style="font-size: 3rem; color: black;"></i>
        <h1 class="text-body-emphasis mb-4">#VEMPROIF-2023</h1>
        <p class="col-lg-8 mx-auto lead">
            Visite nossos estandes do #VEMPROIF-2023 e conheça um pouco mais dos nossos cursos <i class="text-bg-dark">Técnico Integrado em Informática</i> e <i class="text-bg-dark">Ciência da Computação</i>. Descubra as áreas da computação, as oportunidades do mercado de trabalho e muito mais e concorra a um prêmio a partir da realização de um sorteio de uma <i class="text-bg-dark">SUPER PIZZA</i> do restaurante <i class="text-bg-dark">CAPITAL 922</i>. Não esqueça de fazer um check-in no estande que você está visitando para concorrer ao nosso sorteio.<br>
            Boa Sorte!
        </p>
        <br>
        <p>
        <a class="btn btn-outline-dark btn-lg" href="/login" role="button">Login</a> 
        <a class="btn btn-outline-dark btn-lg" href="/register" role="button">Registre-se</a>
        </p>
        </div>
    </div>
    </div>
        
    </div> <!-- FIM DO CONTENT -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="main.js"></script>
    
  </body>
</html>
