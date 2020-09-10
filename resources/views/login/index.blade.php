@extends('templates.master')

@section('css-view')
@endsection

@section('conteudo-view')
<div id="form-session">
    <div class="panel bg-light-purple">
        <h2>LOGIN</h2>
        <form action="{{URL::to('/')}}" method="POST">
            {{ csrf_field() }}
        
           <div class="form">
                <input type="text" name="email" value="" placeholder="Email">
                <input type="text" name="senha" value="" placeholder="Senha">
                <button type="submit" name="login" class="btn bg-dark">Entrar</button>
           </div>
        </form>
    </div>
</div>
@endsection

@section('js-view')
@endsection