<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="shortcut icon" type="images/ico" href="{{asset('img/icono.ico')}}">
       
        <title>{{ config('Proyecto', 'Proyecto') }}</title>

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/select2.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
        <link href="{{ asset('css/estilo.css') }}" rel="stylesheet">
        <link href="{{ asset('css/estilonav.css') }}" rel="stylesheet">
       

        <link href="{{ asset('css/leaflet.css') }}" rel="stylesheet">
        <link href="{{ asset('css/Control.FullScreen.css') }}" rel="stylesheet">
        <link href="{{ asset('css/styleVisor.css') }}" rel="stylesheet">
        
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.dataTables.min.css">
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="{{ asset('js/select2.min.js') }}" defer></script>
        <script src="{{ asset('js/composicion/funciones.js') }}" defer></script>
        <script src="{{ asset('js/composicion/responsive.js') }}" defer></script>
        <script src="{{ asset('js/composicion/funcionMapa.js') }}" defer></script>
        <script src="{{ asset('js/leaflet.js') }}" defer></script>
        <script src="{{ asset('js/Control.FullScreen.js') }}" defer></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js" defer></script>
        <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js" defer></script>



        <title>Document</title>
    </head>
    <body>
        <div id="app">
           
            <nav class="navbar navbar-expand-md navbar-laravel navbar-nav nav-link">
                <div class="container">
                    <a class="navbar-brand" href="{{ url('/home') }}">
                        <img src="{{asset('img/logo.png')}}" alt="...">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav m-auto ">
                            @can('projects.index')
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('projects.index')}} ">PROYECTOS</a>
                            </li>
                            @endcan
                            @can('workers.index')
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('workers.index')}} ">TRABAJADORES</a>
                            </li>
                            @endcan
                            @can('documents.index')
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('documents.index')}} ">IMAGENES</a>
                            </li>
                            @endcan
                            @can('users.index')
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('users.index')}} ">USUARIOS</a>
                            </li>
                            @endcan
                            @can('roles.index')
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('roles.index')}} ">ROLES</a>
                            </li>
                            @endcan
                          
                        </ul>
                        
                        <ul class="navbar-nav ml-auto">
                           
                            @guest
                            <li class="nav-item">

                            </li>
                            @if (Route::has('register'))
                            <li class="nav-item">

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
            <main class="py-4">
                @yield('content')
            </main>
          
        </div>
        
    </body>
    <script src="{{ asset('js/visor.js') }}" defer></script>
</html>
