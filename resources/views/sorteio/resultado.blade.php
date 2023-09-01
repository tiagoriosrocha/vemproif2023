@extends('layouts.convidado') 

@section('content')
       
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
@endsection