@extends('layouts.registrado')  

@section('content')

    @if(\Session::has('success'))
      <div class="row">
        <div class="col-12">
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Parabéns!</strong> {{ \Session::get('success') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        </div>
      </div>
    @endif

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


    <livewire:progress-bar-session :percentual="$listaEstandesVisitadas->count()*100/$listaEstandes->count()" :quantidade="$listaEstandesVisitadas->count()" />


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

@endsection