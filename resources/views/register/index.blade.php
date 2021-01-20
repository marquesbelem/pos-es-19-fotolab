@extends('templates.master')

@section('css-view')
@endsection

@section('conteudo-view')
    <div id="form-session">
        <form action="{{ URL::to('/') }}" method="POST" class="panel-2">
            {{ csrf_field() }}
            <div class="d-r">
                <h2>CADASTRO</h2>
            </div>
            <div class="perfil">
                <label> Perfil</label>
                <div class="perfil-radio">
                    <div>
                        <input type="radio" id="fotografo" name="perfil" value="fotografo" checked>
                        <label for="fotografo">Fotografo</label>
                    </div>

                    <div>
                        <input type="radio" id="cliente" name="perfil" value="cliente">
                        <label for="cliente">Cliente</label>
                    </div>
                </div>
            </div>

            <div id="ft_form_novo_usuario" class="form">
                <div class="d-r">
                    <input type="text" name="nome" value="" placeholder="Nome">
                    <input type="text" name="sobrenome" value="" placeholder="Sobrenome">
                    <input type="date" name="data_nascimento" value="" placeholder="DD/MM/YYYY">
                </div>
                <div class="d-r">
                    <input type="text" name="email" value="" placeholder="Email">
                    <input type="text" name="senha" value="" placeholder="Senha">
                </div>
                <div class="d-r">
                    <input type="text" name="imagem_perfil" value="" placeholder="imagem_perfil">
                    <input type="text" name="imagem_perfil" value="" placeholder="foto_capa">
                </div>
                <div class="d-r j-ct-c">
                    <button type="submit" name="login" class="btn bg-dark w-1">Cadastrar</button>
                </div>
            </div>
        </form>
    </div>
@endsection

@section('js-view')
@endsection
