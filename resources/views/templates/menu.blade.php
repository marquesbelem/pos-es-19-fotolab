<nav id="menu">
    <div>
        <h1>FotoLab</h1>
    </div>
    <div class="center">
        <a href="{{URL::to('/')}}" class="active">Home</a>
        <a href="">Avaliação</a>
    </div>
    <div class="buttons">
        @if(!Auth::check())
            <a href="{{URL::to('/register')}}" class="btn bg-yellow ">Cadastre - se</a>
        @endif

        @if(!Auth::check())
            <a href="{{URL::to('/signin')}}" class="btn bg-light-purple">Acessar</a>
        @else
            <a href="{{URL::to('/signout')}}" class="btn bg-light-purple">Sair</a>
        @endif
    </div>

</nav>