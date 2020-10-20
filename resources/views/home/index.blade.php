@extends('templates.master')

@section('css-view')
@endsection

@section('conteudo-view')
    <div id="home">
        <div class="container-carrossel">
            <div class="carrosel">
                <div class="wall wall-1" id="wall-1">
                        <div class="controles">
                                <a href="#wall-3"><</a>
                                <a href="#wall-2">></a>
                        </div>
                    <img src="{{ URL::asset('/imgs/banner.jpg') }}">
                </div>

                <div class="wall wall-2" id="wall-2">
                     <div class="controles">
                             <a href="#wall-1"><</a>
                             <a href="#wall-3">></a>
                     </div>

                    <h1>carrosel numero - 2</h1>
                </div>

                <div class="wall wall-3" id="wall-3">
                        <div class="controles">
                                <a href="#wall-2"><</a>
                                <a href="#wall-1">></a>
                        </div>
                    <h1>carrosel numero - 3</h1>
                </div>
            </div>
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
