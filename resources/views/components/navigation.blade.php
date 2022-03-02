<header>
    <nav>
        <div class="container nav-wrapper">
            <a href="#!" class="brand-logo">Filme(s)</a>
            <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
                <li><a href="{{route('movie.created')}}">Adicionar</a></li>
                <li><a href="{{route('movie.list')}}">Lista</a></li>
            </ul>
        </div>
    </nav>

    <ul class="sidenav" id="mobile-demo">
        <li><a href="{{route('movie.created')}}">Adicionar</a></li>
        <li><a href="{{route('movie.list')}}">Lista</a></li>
    </ul>

</header>