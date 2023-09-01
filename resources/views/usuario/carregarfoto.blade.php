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
            <div class="col-md-12 mb-5">
                <h2 class="pb-2 border-bottom">Faça upload da foto do seu perfil</h2>
            </div>
        </div> <!-- FIM DA ROW -->

        <div class="row">
          <div class="col-md-12 col-sm-12 mb-2 text-center">
              <livewire:upload-foto />
          </div>
        </div>
@endsection