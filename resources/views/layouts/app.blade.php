<!doctype html>
{{--<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">--}}
<html lang="nl">
<!-- delete dots in front of lists-->
<style>
    li {
        list-style-type: none;
    }
</style>
<!-- delete dots in front of lists-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>SDG</title>
    <link rel="icon" href="{{ asset('assets/hz-logo-shield.png') }}" type="image/icon type" style="width: 300px; height: 551px">

    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/graph.css') }}" rel="stylesheet">
    <!-- Scripts -->
    <!-- Imported libraries -->
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js" type="text/javascript"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">


</head>
<body>
<div id="app">
    <!--HZ logo-->
    <nav class="navbar navbar-expand-md navbar navbar-dark bg-light shadow-sm">
        <a href="/"><img src="{{ asset('assets/hz-logo.png') }}" height=63mm width=247mm></a>

        <!-- first 4 buttons of the navbar -->
        <div class="container col-9">
            <a class="navbar-brand font-weight-bold h1" href="{{ url('/') }}">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"  fill="currentColor" class="bi bi-house text-dark" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
                    <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
                </svg>
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav align-self-xl-center">
                    <li class="nav-item"><a class="nav-link h5 text-light text-dark btn btn-light" href="{{ url('/doelen') }}">Doelen</a></li>
                    <li class="nav-item" ><a class="nav-link h5 text-light text-dark btn btn-light" href="{{ url('/opleidingen') }}">Opleidingen</a></li>
                    <li class="nav-item" ><a class="nav-link h5 text-light text-dark btn btn-light" href="{{ url('/projecten') }}">Alle projecten</a></li>
                </ul>


                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link text-light text-dark" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link text-light text-dark" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                        <!--dropdown menu-->
                    @else
                        <li class="nav-item dropdown ">
                            <a class="btn btn-light dropdown-toggle text-dark" href="#" role="button" id="navbarDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                {{ Auth::user()->name }}
                            </a>

                            
                            <div class="dropdown-menu dropdown-menu-left drop dropdown-menu-end" aria-labelledby="navbarDropdown">


                                    <a class="dropdown-item" href="{{ url('/adminProjecten') }}">Admin projects page</a>
                                    <a class="dropdown-item" href="{{ url('/adminOpleidingen') }}">Admin educations page</a>
                                    <a class="dropdown-item" href="{{ url('/adminOpleidingen/create') }}">Voeg opleiding toe</a>
                                    <div class="dropdown-divider"></div>
                                <a class="dropdown-item text-dark" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">Uitloggen</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>

                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

    <main class="min-vh-100 bg-light">
        @yield('content')
    </main>

</div>
    {{--Bootstrap bundle with Popper--}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>

</body>
</html>
