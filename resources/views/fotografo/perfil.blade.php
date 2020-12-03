@extends('templates.master')

@section('conteudo-view')
    <div id="perfil-fotografo">
        <div class="carousel-center">
            <div class="carousel-photo" style="background-image: url({{ URL::asset('/imgs/banner.jpg') }})"></div>
            <div class="carousel-photo" style="background-image: url({{ URL::asset('/imgs/banner-2.jpg') }})"></div>
            <div class="carousel-photo" style="background-image: url({{ URL::asset('/imgs/banner-3.jpg') }})"></div>
            <div class="carousel-photo" style="background-image: url({{ URL::asset('/imgs/banner-2.jpg') }})"></div>
            <div class="carousel-photo" style="background-image: url({{ URL::asset('/imgs/banner-3.jpg') }})"></div>
            <div class="carousel-photo" style="background-image: url({{ URL::asset('/imgs/banner.jpg') }})"></div>
        </div>
        <div class="topo">
            <div class="usuario">
                <img src="{{ asset(Arr::get($fotografo, 'fotoPerfil.url', 'imgs/foto.jpg')) }}">
                <h2>{{$fotografo['nome']}}</h2>

                <div class="tags">
                    <p class="bg-yellow">Casamentos</p>
                    <p class="bg-yellow">Eventos esportivos</p>
                </div>
            </div>
           
        </div>

        <div class="descricao">
                <div class="painel">
                    <div class="titulo">
                        <h3>
                            Quem sou eu?
                        </h3>
                    </div>
                    <p>
                        {{$fotografo['descricao']}}
                    </p>
                </div>
        </div>
    </div>
@endsection