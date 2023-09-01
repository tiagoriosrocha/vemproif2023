<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', '#VEMPROIF-2023') }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
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
    <header class="p-3 mb-3 border-bottom">
    <div class="container-fluid">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
      <a class="navbar-brand" href="{{ route('dashboard') }}">
            <img src="/logo-pq-sm.png" />
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="/dashboard" class="nav-link px-2 link-secondary">Dashboard</a></li>
        </ul>

        <div class="dropdown text-end">
          <a href="#" class="d-block link-body-emphasis text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="/images/user-default.png" alt="mdo" width="32" height="32" class="rounded-circle">
          </a>
          <ul class="dropdown-menu text-small">
            <li><a class="dropdown-item" href="{{ route('profile.edit') }}">Perfil</a></li>
            <li><a class="dropdown-item" href="{{ route('profile.imageform') }}">Trocar Foto</a></li>
            <li><hr class="dropdown-divider"></li>
            <form id="logout-form" action="{{ url('logout') }}" method="POST">
            {{ csrf_field() }}
            <li><button class="btn" type="submit">Logout</button></li>
            </form>
          </ul>
        </div>
      </div>
    </div>
  </header>
    
    
    <!------------------------------------------------------------
      ------------------------------------------------------------
      INÍCIO DO CONTEÚDO DO BOOTSTRAP
      ------------------------------------------------------------
      ------------------------------------------------------------ 
    -->
    <div class="container my-5"> 
         
        <!------------------------------------------------------------
          ------------------------------------------------------------
          AQUI EU CRIO UMA LINHA (ROW) DO BOOTSTRAP
          E COLOCO UM TÍTULO DA PÁGINA
          ------------------------------------------------------------
          ------------------------------------------------------------ 
        -->
        <div class="row">
            <div class="col-md-12 mb-5">
                <h2 class="pb-2 border-bottom">Faça upload da foto do seu perfil</h2>
            </div>
        </div> <!-- FIM DA ROW -->

        <div class="row">
          <div class="col-md-12 col-sm-12 mb-2 text-center">
              <livewire:upload-foto />
          </div>
        </div>

        
        
        <!-- <div class="row "> 
            <div class="col-md-12 col-sm-12 mb-2 text-center">
                    <form method="POST" action="{{ route('image.uploadfoto') }}" enctype="multipart/form-data">
                        @csrf
                        <input type="file" class="form-control" name="image" />
                        <br>
                        <br>
                        <button type="submit" class="btn btn-lg btn-primary">Enviar</button>
                    </form>
            </div>
        </div> -->
    </div> <!-- FIM DO CONTENT -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="main.js"></script>
    <livewire:scripts />
  </body>
</html>

