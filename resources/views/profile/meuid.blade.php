@extends('layouts.registrado')  

@section('content')

        <div class="row">
            <div class="col-md-12 mb-5 text-center">
                <img class="mb-4" width="250" src="logo-pq.png" />  
                <h2 class="pb-2 border-bottom">Meu ID</h2>
            </div>
        </div> <!-- FIM DA ROW -->

        <div class="row">
          <div class="col-md-12 col-sm-12 mb-2 text-center">
          @if($time == "Grêmio")
            {{ QrCode::size(300)->color(0,0,205)->generate($id) }}
          @elseif($time == "Internacional")
            {{ QrCode::size(300)->color(255,0,0)->generate($id) }}
          @else
            {{ QrCode::size(300)->color(0,0,0)->generate($id) }}
          @endif
          </div>
        </div>
@endsection