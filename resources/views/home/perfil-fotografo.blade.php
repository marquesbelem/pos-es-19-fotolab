@extends('templates.master')

@section('css-view')
@endsection

@section('conteudo-view')
    <div id="perfil-fotografo">
        <div class="topo">
            <div class="usuario">
                <img src="{{ URL::asset('/imgs/foto.jpg') }}">
                <h2>Camila</h2>
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
                    ext of the printing and typesetting industry.
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer
                    took a galley of type and scramble
                    d it to make a type specimen book. It has
                </p>
            </div>

            <div class="painel">
                <div class="titulo">
                    <h3>
                        o que esperar do meu trabalho ...
                    </h3>
                </div>
                <p>
                    ext of the printing and typesetting industry.
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer
                    took a galley of type and scramble
                    d it to make a type specimen book. It has
                </p>
            </div>
        </div>
        

        <div class="btn-portifolio">
            <a href="" class="btn">Veja minhas fotos!!</a>
        </div>
    </div>
@endsection

@section('js-view')
@endsection
