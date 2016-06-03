<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ action('HomeController@index') }}">Gib za vse</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li>{!! link_to_action('UserController@show', "Profil", [$currentUser->id]) !!}</li>
                <li><a href="{{ action('ProgramController@index') }}">programi</a></li>
                <li>{!! link_to_action('ReservationController@index', "Moje rezervacije") !!}</li>
                {{--, [$currentUser->id]--}}
                <li><a href="{{ action('ReservationController@create') }}">rezerviraj</a></li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                @if($currentUser != null)
                    <li>{!! link_to_action('UserController@show', $currentUser->username, [$currentUser->id]) !!}</li>
                    <li><a href="{{ action('Auth\AuthController@getLogout') }}">odjava</a></li>
                @else
                    <li><a href="{{ action('Auth\AuthController@getLogin') }}">Prijava</a></li>
                    <li><a href="{{ action('Auth\AuthController@getRegister') }}">Registracija</a></li>
                @endif
            </ul>

        </div><!--/.nav-collapse -->
    </div>
</nav>