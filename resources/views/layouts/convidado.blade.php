<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', '#VEMPROIF-2023') }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="styles.css">
    <livewire:styles />
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

      <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="/" class="nav-link px-2 link-secondary">Home</a></li>
        </ul>

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
       @yield('content')
    </div> <!-- FIM DO CONTENT -->

    <footer class="bg-dark flex-wrap align-items-center py-3 my-4 border-top">
      <ul class="nav col-md-8 mt-4 mb-4 justify-content-end">
        <li class="nav-item"><a href="http://ifrs.edu.br" class="px-2 text-white">IFRS</a></li>
        <li class="nav-item"><a href="http://ibiruba.ifrs.edu.br" class="px-2 text-white">IFRS-Ibirubá</a></li>
        <li class="nav-item"><a href="http://inf.ibiruba.ifrs.edu.br" class="px-2 text-white">Ciência da Computação</a></li>
      </ul>
    
      <p class="mb-0 text-center text-white">Instituto Federal de Educação, Ciência e Tecnologia do Rio Grande do Sul – Câmpus Ibirubá</p>
      <p class="mb-0 text-center text-white">Rua Nelsi Ribas Fritsch, 1111 | Bairro Esperança | CEP: 98200-000 | Ibirubá/RS</p>
      <p class="mb-4 text-center text-white">E-mail: comunicacao@ibiruba.ifrs.edu.br | Telefone: (54) 3324-8100</p>
      <div class="text-center mb-4">
        <img class="img-fluid" src="/Logo-IFRS-branco-sem-fundo-horizontal.png" width="30%" />
      </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="main.js"></script>
    <livewire:scripts />
  </body>
</html>
