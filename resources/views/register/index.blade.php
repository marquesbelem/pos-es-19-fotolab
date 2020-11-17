@extends('templates.master')

@section('css-view')
@endsection

@section('conteudo-view')
<div id="form-session">
    <div class="panel panel-2">
        <h2>CADASTRO</h2>
        <form action="{{URL::to('/')}}" method="POST">
            {{ csrf_field() }}

            <div class="perfil">
                <label> Perfil</label>
                <div class="perfil-radio">
                    <div>
                        <input type="radio" id="fotografo" name="perfil" value="fotografo"
                               checked>
                        <label for="fotografo">Fotografo</label>
                      </div>
                      
                      <div>
                        <input type="radio" id="cliente" name="perfil" value="cliente">
                        <label for="cliente">Cliente</label>
                      </div>
                </div>
            </div>
        
           <div id="ft_form_novo_usuario" class="form">
                <input type="text" name="email" value="" placeholder="Email">
                <input type="text" name="senha" value="" placeholder="Senha">
                <input type="text" name="nome" value="" placeholder="Nome">
                <input type="text" name="sobrenome" value="" placeholder="Sobrenome">
                <input type="date" name="data_nascimento" value="" placeholder="DD/MM/YYYY">
                <input type="text" name="imagem_perfil" value="" placeholder="imagem_perfil">
                <button type="submit" name="login" class="btn bg-dark">Cadastrar</button>
           </div>
        </form>
    </div>
</div>
@endsection

@section('js-view')
@endsection