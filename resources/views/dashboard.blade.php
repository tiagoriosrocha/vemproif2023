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

        <div class="dropdown text-end">
          <a href="#" class="d-block link-body-emphasis text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="/images/{{ Auth::user()->imagem }}" alt="mdo" width="32" height="32" class="rounded-circle">
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
    <div class="container-fluid"> 
       
    <div class="row">
    <div class="p-5 text-center bg-body-tertiary">
        <div class="container py-5">
        <i class="bi bi-rocket-takeoff-fill" style="font-size: 5rem; color: black;"></i>
        <h1 class="text-body-emphasis mb-4">#VEMPROIF-2023</h1>
        <p class="col-lg-8 mx-auto lead">
            Visite nossos estandes do #VEMPROIF-2023 e conheça um pouco mais dos nossos cursos <i class="text-bg-dark">Técnico Integrado em Informática</i> e <i class="text-bg-dark">Ciência da Computação</i>. Descubra as áreas da computação, as oportunidades do mercado de trabalho e muito mais e concorra a um prêmio a partir da realização de um sorteio de uma <i class="text-bg-dark">SUPER PIZZA</i> do restaurante <i class="text-bg-dark">CAPITAL 922</i>. Não esqueça de fazer um check-in no estande que você está visitando para concorrer ao nosso sorteio.<br>
            Boa Sorte!
        </p>
        </div>
    </div>
    </div>


    <div class="row">
        @if($listaEstandesVisitadas->count()*100/$listaEstandes->count() < env('PERCENTUALSORTEIO'))
        <div class="p-5 text-center bg-dark">
            <div class="container py-5">
            <i class="bi bi-balloon" style="font-size: 5rem; color: white;"></i>
            <h1 class="mb-4 text-white">Seu Progresso</h1>
            
            @if($listaEstandesVisitadas->count() == 0) 
              <p class="col-lg-8 mx-auto lead text-white">
                Você ainda não visitou nosso estandes. Não perca tempo! Estamos esperando por você!!!
              </p>
            @else 
            <p class="col-lg-8 mx-auto lead text-white">  
              Você já visitou <span class="badge bg-white text-black">{{ $listaEstandesVisitadas->count() }}</span> @if($listaEstandesVisitadas->count()>1) estandes. @else estande. @endif Boa Sorte! 
            </p>
              <br>
              <div class="progress" role="progressbar" aria-label="Success example" aria-valuenow="{{ $listaEstandesVisitadas->count()*100/$listaEstandes->count() }}" aria-valuemin="0" aria-valuemax="100">
                <div class="progress-bar-striped bg-success text-white" style='width:{{ $listaEstandesVisitadas->count()*100/$listaEstandes->count() }}%'>{{ $listaEstandesVisitadas->count()*100/$listaEstandes->count() }}%</div>
              </div>
            @endif              
            
            </div>
        </div>
        @else
        <div class="p-5 text-center bg-success">
            <div class="container py-5">
            <i class="bi bi-trophy" style="font-size: 5rem; color: white;"></i>
            <h1 class="mb-4 text-white">Parabéns!!!</h1>
            <p class="col-lg-8 mx-auto lead text-white">
                Você está concorrendo ao sorteio!<br>Você já visitou <span class="badge bg-white text-black">{{ $listaEstandesVisitadas->count() }}</span> @if($listaEstandesVisitadas->count()>1) estandes. @else estande. @endif Boa Sorte!
            </p>
            <br>
            <div class="progress" role="progressbar" aria-label="Success example" aria-valuenow="{{ $listaEstandesVisitadas->count()*100/$listaEstandes->count() }}" aria-valuemin="0" aria-valuemax="100">
                <div class="progress-bar-striped bg-success text-white" style='width:{{ $listaEstandesVisitadas->count()*100/$listaEstandes->count() }}%'>{{ $listaEstandesVisitadas->count()*100/$listaEstandes->count() }}%</div>
            </div>
            </div>
        </div>
        @endif
    </div>
    </div>

        <!------------------------------------------------------------
          ------------------------------------------------------------
          AQUI EU CRIO UMA LINHA (ROW) DO BOOTSTRAP
          E COLOCO UM TÍTULO DA PÁGINA
          ------------------------------------------------------------
          ------------------------------------------------------------ 
        -->
    <div id="estandes" class="container">
        <div class="row mt-5">
            <div class="col-md-12 mb-5">
                <h2 class="pb-2 border-bottom">Estandes do #VEMPROIF23</h2>
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
    <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
    @foreach($listaEstandes as $umEstande)  
            <div class="col">
            <a class="link-underline link-underline-opacity-0" href="/estande/{{$umEstande->id}}">
            <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('{{ $umEstande->imagem }}');">
            <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">
                    {{ $umEstande->titulo }}
                    @if($listaEstandesVisitadas->contains($umEstande))
                        <i style="font-size: 2rem; color: lightgreen;" class="bi bi-check-circle-fill"></i>
                    @endif  
                </h3>
                <ul class="d-flex list-unstyled mt-auto">
                <li class="me-auto">
                    
                </li>
                <li class="d-flex align-items-center me-3">
                <i style="font-size: 1rem; color: white;" class="bi bi-geo-alt-fill"></i>
                    <small>{{ $umEstande->localizacao }}</small>
                </li>
                <li class="d-flex align-items-center">
                    <small>{{ $umEstande->hashtag }}</small>
                </li>
                </ul>
            </div>
            </div>
            </a>
            </div>
    @endforeach 
  </div>
        
      </div> <!-- FIM DO CONTENT -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="main.js"></script>
    
  </body>
</html>
