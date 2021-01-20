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
               <!-- <div class="d-r">
                    <input type="file" name="imagem_perfil" value="" placeholder="imagem_perfil" accept="image/*">
                    <input type="file" name="foto_capa" value="" placeholder="foto_capa" multiple accept="image/*">
                </div>-->
                <div class="d-r">
                    <label for="imagem_perfil" name="imagem_perfil" class="input-file">Selecionar foto de perfil</label>
                    <input id="imagem_perfil" accept="image/*" type='file'>
                    <span id='file_name_imagem_perfil' class="path-file"></span>
                </div>
                <div class="d-r">
                    <label for="foto_capa" name="foto_capa" class="input-file">Selecionar fotos principais</label>
                    <input id="foto_capa" accept="image/*" multiple type='file' onchange="javascript:updateList()">
                    <span id='file_name_foto_capa' class="path-file"></span>
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
