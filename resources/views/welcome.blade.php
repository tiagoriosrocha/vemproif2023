@extends('layouts.convidado') 

@section('content')
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
@endsection