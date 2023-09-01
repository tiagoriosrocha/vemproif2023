@extends('layouts.convidado')  

@section('content')

        <div class="row">
            <div class="col-md-12 mb-5 text-center">
                <img class="mb-4" width="250" src="logo-pq.png" />  
                <h2 class="pb-2 border-bottom">Cadastro de Visitante</h2>
            </div>
        </div> <!-- FIM DA ROW -->

        <div class="row">
          <div class="col-md-12 col-sm-12 mb-2 text-center">
            <livewire:user-form />
          </div>
        </div>
@endsection