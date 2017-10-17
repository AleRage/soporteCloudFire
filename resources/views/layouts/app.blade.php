<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Cloud Fire Soft</title>

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    </head>

    <body>

        <div id="app">

            <nav class="navbar navbar-expand-lg navbar-dark bg-primary navbar-static-top">

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <!-- Collapsed Hamburger Icon -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" 
                 aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">

                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="collapse navbar-collapse" id="navbarCollapse">

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @if ( Auth::guest() )

                            <li class="nav-item">

                                <a class="nav-link" href="{{ route('login') }}">Login</a>
                            </li>

                            <li class="nav-item">

                                <a class="nav-link" href="{{ route('register') }}">Registro</a>
                            </li>
                        @else
                            <li class="nav-item dropdown">

                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" 
                                 aria-expanded="false">

                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">

                                    <li class="dropdown-item">

                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">

                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" 
                                         style="display: none;">

                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </nav>
            
            @include('partials/validations')

            @yield('content')
        </div>
        
        <footer class="footer">
          <div class="container">
            <span class="text-muted">© 2017 - Sitio diseñado por Cloud Fire Soft</span>
            <a id="subir" href="" class="btn btn-outline-danger float-right" 
            role="button" aria-pressed="true">Subir</a>
          </div>
        </footer>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}"></script>
        <script src="{{ asset('js/app1.js') }}"></script>  
    </body>
</html>
