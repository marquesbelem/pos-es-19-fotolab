@extends('templates.master')

@section('conteudo-view')
    <div id="perfil-fotografo">
        <div class="topo">
            <div class="banner">
                <img src="{{ URL::asset($fotografo->foto_perfil_capa) ?? URL::asset('/imgs/banner.jpg') }}">
            </div>
            <div class="usuario">
                <img src="{{ URL::asset($fotografo->foto_perfil) ?? URL::asset('/imgs/foto.jpg') }}">
                <h2>{{$fotografo->nome}}</h2>
            </div>
        </div>

        <div class="descricao">
            {{$fotografo->descricao}}
        </div>
    </div>
@endsection