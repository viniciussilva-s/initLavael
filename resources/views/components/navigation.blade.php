<header>
    <nav>
        <div class="container nav-wrapper">
            <a href="#!" class="brand-logo">Filme(s)</a>
            <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
                @if(Auth::guest())
                    <li><a href="{{route('login')}}">Login</a></li>
                @else
                    <li><a href="{{route('movie.created')}}">Adicionar</a></li>
                    <li><a href="{{route('movie.list')}}">Lista</a></li>
                    <li><a href="{{route('logout')}}">Logout</a></li>
                @endif
            </ul>
        </div>
    </nav>

    <ul class="sidenav" id="mobile-demo">
        @if(Auth::guest())
            <li><a href="{{route('login')}}">Login</a></li>
        @else
            <li><a href="{{route('movie.created')}}">Adicionar</a></li>
            <li><a href="{{route('movie.list')}}">Lista</a></li>
            <li><a href="{{route('logout')}}">Logout</a></li>
        @endif
    </ul>

</header>