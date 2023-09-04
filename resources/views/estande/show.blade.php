@extends('layouts.registrado')

@section('content')
        
        <!-- <livewire:loading></livewire:loading>    -->

        <div class="row">
            <div class="col-md-12 mb-5">
                <h2 class="pb-2 border-bottom">Visite: {{ $umEstande->hashtag }}</h2>
            </div>
        </div> <!-- FIM DA ROW -->

        
        @if (session('status'))
        <div class="row">
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            <h4 class="alert-heading"><i class="bi bi-hand-thumbs-up"></i> Feito!</h4>
            <p>Sua presença no estande {{ $umEstande->titulo }} foi registrada com sucesso</p>
            <hr>
            <p class="mb-0">Não deixe de visitar todos nossos estandes e concorrer ao nosso sorteio.</p>
        </div>
        </div>
        @endif
        
    <div class="row "> 
        <div class="col-md-4 col-sm-12 mb-2">
            <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('/{{ $umEstande->imagem }}');">
            <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">{{ $umEstande->titulo }}</h3>
                <ul class="d-flex list-unstyled mt-auto">
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
        </div>

        <div class="col-md-8 col-sm-12 mb-2">
            <div class="card card-cover h-100 overflow-hidden bg-dark bg-opacity-90 bg-gradient text-bg-dark rounded-4 shadow-lg">
            <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                <p class="pt-1 lh-1 fw-bold">Descrição:</p>
                <p class="lh-1 fw-bold">{{ $umEstande->texto }}</p>
            </div>
            </div>
        </div>

        <div class="row">
            <div class="col mt-3 mb-3 text-center">
            <a class="btn btn-secondary btn-lg" href="/dashboard#estandes" role="button">Voltar</a>
            </div>
        </div>
  </div>
  @endsection