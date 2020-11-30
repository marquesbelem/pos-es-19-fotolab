@extends('templates.master')

@section('css-view')
@endsection

@section('conteudo-view')
    <div id="home">

        <div class="carousel">
            <div class="carousel-photo" style="background-image: url({{ URL::asset('/imgs/banner.jpg') }})"></div>
            <div class="carousel-photo" style="background-image: url({{ URL::asset('/imgs/banner-2.jpg') }})"></div>
            <div class="carousel-photo" style="background-image: url({{ URL::asset('/imgs/banner-3.jpg') }})"></div>
        </div>

        <div class="container-perfils">
            <!-- For dos usuarios cadastrados !-->
            <div class="panel-perfil">
                <div class="banner">
                    <img src="{{ URL::asset('/imgs/banner.jpg') }}">
                </div>
                <div class="informacao">
                    <div class="usuario">
                        <img src="{{ URL::asset('/imgs/foto.jpg') }}">
                        <h3>Camila</h3>
                    </div>
                    <div class="categoria">
                        <h3>Categorias</h3>
                        <div class="tag">
                            <a href="" class="btn bg-yellow ">Casamento</a>
                            <a href="" class="btn bg-yellow ">Casamento</a>
                            <a href="" class="btn bg-yellow ">Casamento</a>
                        </div>
                        <p>
                                mini apresentação
                        </p>
                        <a href="{{URL::to('/fotografo/perfil/1')}}" class="saiba-mais">Saiba mais</a>
                    </div>
                </div>
            </div>

            <div class="panel-perfil">
                <div class="banner">
                    <img src="{{ URL::asset('/imgs/banner.jpg') }}">
                </div>
                <div class="informacao">
                    <div class="usuario">
                        <img src="{{ URL::asset('/imgs/foto.jpg') }}">
                        <h3>Camila</h3>
                    </div>
                    <div class="categoria">
                        <h3>Categorias</h3>
                        <div class="tag">
                            <a href="" class="btn bg-yellow ">Casamento</a>
                            <a href="" class="btn bg-yellow ">Casamento</a>
                            <a href="" class="btn bg-yellow ">Casamento</a>
                        </div>
                        <p>
                                mini apresentação
                        </p>
                        <a href="{{URL::to('/fotografo/perfil/2')}}" class="saiba-mais">Saiba mais</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js-view')
@endsection
