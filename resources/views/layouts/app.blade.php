<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Dulceado') }}</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/jquery.js') }}" ></script>
    <script src="{{ asset('js/jquery.table2excel.min.js') }}" defer></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">   
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">

{{-- <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script> --}}

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
{{-- ********************************************* style ********************************************************** --}}
       <style>
        .footer-classic a, .footer-classic a:focus, .footer-classic a:active {
        color: #ffffff;
        }
        nav{
             background-color: #ffffff;
        }
        footer {
            background-color: #D7DBDD;
        }
        #justpushtobottom {
         height: 53vh;
        }   
    </style>
</head>
{{-- *********************************************  ********************************************************** --}}
<body>
    <div id="app">
{{-- ******************************************* Navegador ******************************************************** --}}
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel" >
             {{-- Logo --}}
             <a class="navbar-brand " href="{{ url('/') }}"><img src="{{asset('img/images.png')}}" width="80px" />
                   <font face="  " size="5"> {{ config('app.name', 'Laravel') }}</font>
                   <span> : </span> <font face="Britannic Bold" size="4"> <span>Dulce & Salado</span></font>
                </a>
            <div class="container">
               
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{-- {{ config('app.name', 'Dulceado') }} --}}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">  
                                   
                    </ul>
                    <!-- Right Side Of Navbar -->

                            <!-- Authentication Links -->
                                <ul class="navbar-nav ml-auto">
                                    
                            @guest
                            {{-- Si no est logueado --}}
                                    <li class="nav-item"><a class="btn btn-outline-success btn-sm top-right"  href="{{ route('login') }}">{{ __('Acceder') }}</a></li> 
                                  
                                    @if (Route::has('register'))
                                        <li class="nav-item"><a class="btn btn-outline-success btn-sm top-right"   href="{{ route('register') }}">{{ __('Registrar') }}</a></li> 
                                    @endif
                            @else
                            {{-- si esta logueado como admin--}}
                                        <li class="nav-item"> <a  href="{{url('/')}}" class=" btn btn-outline-info btn-sm "  role ="button" ><i class="fa fa-home"></i> Inicio</a> </li> 

                                        <li class="nav-item"> <a  href="{{url('/usuario/perfil')}}" class=" btn btn-outline-info btn-sm "  role ="button" ><i class="fa fa-user"></i> {{ Auth::user()->name }}</a> </li>

                                        <li class="nav-item"> <a  href="{{url('/home')}}" class=" btn btn-outline-info btn-sm "  role ="button" ><i class="fa fa-th-list"></i> Menú</a> </li>

                                        <li class="nav-item"> <a   href="{{url('/producto/galeria')}}" class=" btn btn-outline-info btn-sm "  role ="button" ><i class="fa fa-image"></i> Galeria</a> </li>

                                        <li class="nav-item"><a   class=" btn btn-outline-danger btn-sm " href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">  <i class="fa fa-power-off"></i> {{ __('Salir') }}  
                                        </a> </li>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>

                            @endguest
                                    </ul>     
                               
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <div id="justpushtobottom">     
    </div>
{{-- style="background: #2C3E50;" --}}

{{-- ******************************************* Footer ******************************************************** --}}
    <footer class="footer p-t-1" >
        <div class="container">           
            <div class="copyright company-name text-center"> Florencia Cabrera © 2018</div>  
        </div>
    </footer>

</body>
</html>
