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
    <header class="p-3 mb-3 border-bottom">
    <div class="container-fluid">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
      <a class="navbar-brand" href="{{ route('dashboard') }}">
            <img src="logo-pq-sm.png" />
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="/dashboard" class="nav-link px-2 link-secondary">Dashboard</a></li>
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
    <div class="container"> 
       
    <div class="row">
    <div class="p-2 text-center bg-body-tertiary">
        <div class="container py-5">
        <img src="/images/{{ $listaSorteada->get(0)->imagem }}" alt="" width="200" height="200" class="rounded-circle">
        <h1 class="text-body-emphasis mb-4"><i class="bi bi-trophy"></i> {{ $listaSorteada->get(0)->name }} @if($listaSorteada->get(0)->escola) - {{ $listaSorteada->get(0)->escola }} @endif</h1>
        @if($listaSorteada->get(1)) <h5 class="text-body-emphasis mb-4"><i class="bi bi-2-circle"></i> {{ $listaSorteada->get(1)->name }} @if($listaSorteada->get(1)->escola) - {{ $listaSorteada->get(1)->escola }} @endif</h5> @endif
        @if($listaSorteada->get(2)) <h5 class="text-body-emphasis mb-4"><i class="bi bi-3-circle"></i> {{ $listaSorteada->get(2)->name }} @if($listaSorteada->get(2)->escola)- {{ $listaSorteada->get(2)->escola }} @endif</h5> @endif
        </div>
    </div>
    </div>
        
    </div> <!-- FIM DO CONTENT -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="main.js"></script>
    
  </body>
</html>
