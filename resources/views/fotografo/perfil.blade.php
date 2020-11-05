@extends('templates.master')

@section('conteudo-view')
    <div id="perfil-fotografo">
        <div class="topo">
            <div class="banner">
                <img src="{{ asset(Arr::get($fotografo, 'fotoCapa.url', 'imgs/banner.jpg')) }}">
            </div>
            <div class="usuario">
                <img src="{{ asset(Arr::get($fotografo, 'fotoPerfil.url', 'imgs/foto.jpg')) }}">
                <h2>{{$fotografo['nome']}}</h2>
            </div>
        </div>

        <div class="descricao">
            {{$fotografo['descricao']}}
        </div>
    </div>
@endsection