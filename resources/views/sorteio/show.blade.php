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
       
        <!------------------------------------------------------------
          ------------------------------------------------------------
          AQUI EU CRIO UMA LINHA (ROW) DO BOOTSTRAP
          E COLOCO UM TÍTULO DA PÁGINA
          ------------------------------------------------------------
          ------------------------------------------------------------ 
        -->
        <div class="row mt-5">
            <div class="col-md-12 mb-5">
                <h2 class="pb-2 border-bottom">Ranking para o sorteio</h2>
            </div>
        </div> <!-- FIM DA ROW -->

        
        <!------------------------------------------------------------
          ------------------------------------------------------------
          AQUI EU CRIO UMA LINHA (ROW) DO BOOTSTRAP
          AQUI EU VOU EXIBIR OS ITENS UTILIZANDO ELEMENTOS DO TIPO CARD
          DO BOOTSTRAP
          ------------------------------------------------------------
          ------------------------------------------------------------ 
        -->
    <div class="row">
        <div class="col-md-12 col-sm-12">
        <table class="table caption-top">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Avatar</th>
                <th scope="col">Nome</th>
                <th scope="col">Qtd</th>
                <th scope="col">%</th>
                </tr>
            </thead>
            <tbody>
                @foreach($listaUsuarios as $user)
                <tr>
                <th scope="row">{{ $user->id }}</th>
                <td><img src="/images/{{ $user->imagem }}" alt="" width="50" height="50" class="rounded-circle"></td>
                <td>
                    {{ $user->name }} 
                    @if($user->estandes->count()*100/$listaEstandes->count() >= env('PERCENTUALSORTEIO')) 
                    <span class="badge text-bg-success">APTO</span>
                    @endif
                </td>
                <td>{{ $user->estandes->count() }}</td>
                <td>
                @if($user->estandes->count()*100/$listaEstandes->count() >= env('PERCENTUALSORTEIO'))
                <div class="progress" role="progressbar" aria-label="Success example" aria-valuenow="{{ $user->estandes->count()*100/$listaEstandes->count() }}" aria-valuemin="0" aria-valuemax="100">
                    <div class="progress-bar bg-success text-white" style='width:{{ $user->estandes->count()*100/$listaEstandes->count() }}%'>{{ $user->estandes->count()*100/$listaEstandes->count() }}%</div>
                </div>
                @else
                <div class="progress" role="progressbar" aria-label="Success example" aria-valuenow="{{ $user->estandes->count()*100/$listaEstandes->count() }}" aria-valuemin="0" aria-valuemax="100">
                    <div class="progress-bar bg-danger text-white" style='width:{{ $user->estandes->count()*100/$listaEstandes->count() }}%'>{{ $user->estandes->count()*100/$listaEstandes->count() }}%</div>
                </div>
                @endif
                </td>
                </tr>
                @endforeach
            </tbody>
            </table>
            {{ $listaUsuarios->links() }}
        </div>
        <div class="row">
            <div class="col mt-3 mb-3 text-center">
            <a class="btn btn-primary btn-lg" href="/executarsorteio" role="button">Sortear</a>
            </div>
        </div>
      </div> <!-- FIM DO CONTENT -->
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="main.js"></script>
    
  </body>
</html>
