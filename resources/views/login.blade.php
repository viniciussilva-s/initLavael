
<html>

<head>
    <title>Filme(s) | Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    @include("components/style")
    <style>
    body {
        display: flex;
        min-height: 100vh;
       flex-direction: column;
        background: #141E30;
        background: -webkit-linear-gradient(to right, #243B55, #141E30);
        background: linear-gradient(to right, #243B55, #141E30); 
    }

    main {
      flex: 1 0 auto;
    }
    input{
        color: white;
    }
    input {
        border-bottom: 2px solid #e91e63;
        box-shadow: none;
    }
    </style>
</head>

<body>
  <main class="container">
    <div class='row'>
        <center>
            <img class="responsive-img" style="width: 150px;" src="{{asset('img/unscreen.gif')}}" />
        </center>
    </div>
    <div class="z-depth-1" style="width:50%; padding: 32px 48px 10px 48px;  margin:0 auto;">
    <div class="flash-message">
  @foreach (['danger', 'warning', 'success', 'info'] as $msg)
    @if(Session::has('alert-' . $msg))
    <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }}</p>
    @endif
  @endforeach
</div>  <form  method="post">
            @csrf
            <div class='row'>
                <div class='input-field col s12 '>
                    <input class='validate' type='email' name='email' id='email' />
                    <label for='email'>Digite seu e-mail</label>
                </div>
            </div>

            <div class='row'>
                <div class='input-field col s12 '>
                    <input class='validate' type='password' name='password' id='password' />
                    <label for='password'>Senha</label>
                </div>
            </div>

            <div class='row'>
                <button type='submit' class='col s12 btn btn-large waves-effect indigo'>Acessar</button>
            </div>
        </form>
    </div>
  </main>
  @include("components/javascript")
  @include('sweetalert::alert')

</body>

</html>