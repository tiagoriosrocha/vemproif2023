@extends('layouts.convidado') 

@section('content')
       
    <div class="row mt-5">
        <div class="col-md-12 mb-5">
            <h2 class="pb-2 border-bottom">Ranking para o sorteio</h2>
        </div>
    </div>

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
                <td>
                @if($user->imagem)
                    <img src="{{ asset('storage/images/' . $user->imagem); }}" width="50" height="50" alt="user" class="rounded-circle">
                @else
                    <img src="/user-default.png" alt="user" width="50" height="50" class="rounded-circle">
                @endif    
                </td>
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

@endsection