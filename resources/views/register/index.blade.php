@extends('templates.master')

@section('css-view')
@endsection

@section('conteudo-view')
<div id="form-session">
    <div class="panel bg-light-purple">
        <h2>CADASTRO</h2>
        <form action="{{URL::to('/')}}" method="POST">
            {{ csrf_field() }}

            <div class="perfil">
                <label> Perfil</label>
                <div class="perfil-radio">
                    <div>
                        <input type="radio" id="fotografo" name="perfil" value="fotografo"
                               checked>
                        <label for="huey">Fotografo</label>
                      </div>
                      
                      <div>
                        <input type="radio" id="cliente" name="perfil" value="cliente">
                        <label for="dewey">Cliente</label>
                      </div>
                </div>
            </div>
        
           <div class="form">
                <input type="text" name="email" value="" placeholder="Email">
                <input type="text" name="senha" value="" placeholder="Senha">
                <button type="submit" name="login" class="btn bg-dark">Cadastrar</button>
           </div>
        </form>
    </div>
</div>
@endsection


@section('js-view')
@endsection