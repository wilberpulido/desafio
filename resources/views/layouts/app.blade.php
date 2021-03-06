<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Resolucion') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Resolucion') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse row"  id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav col-10 d-flex justify-content-around">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ route('firstChallenge.solution') }}">
                                first challenge
                            </a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ route('secondChallenge.solution') }}">
                                second challenge
                            </a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ route('thirdChallenge.solution') }}">
                                third challenge
                            </a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ route('fourthChallenge.solution') }}">
                                fourth challenge
                            </a>
                        </li>
                        @guest
                        @else
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ route('tasks.index') }}">
                                fifth challenge
                            </a>
                        </li>
                        @endguest
                    </ul>
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto col-2 d-flex justify-content-end">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link text-right" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link text-right" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
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
        <main class="py-4 container">
            <div class="row justify-content-center">
                <div class="col-md-10"> 
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    @if ($errors-> any())
                    {{-- Variable global que almacena todos los errores --}}
                    <div class="alert alert-danger">
                        {{-- De esta manera rescatas todos los errores, con all(), ac?? lo recorre e imprime --}}
                        @foreach ($errors->all() as $error)
                        -{{$error}} <br>
                        @endforeach
                    </div>
                    @endif
                </div>
            </div>
            @yield('content')
        </main>
    </div>
</body>
</html>
