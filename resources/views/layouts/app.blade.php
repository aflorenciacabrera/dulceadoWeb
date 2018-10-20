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
    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">   
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">

{{-- <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script> --}}
{{-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> --}}


<!------ Include the above in your HEAD tag ---------->
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
<body>
    <div id="app">
        {{-- Navegador  --}}
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel" >
            <div class="container">
                {{-- Logo --}}
                <a class="navbar-brand " href="{{ url('/') }}"><img src="{{asset('img/images.png')}}" width="70" />
                   <font face="  " size="5"> {{ config('app.name', 'Laravel') }}</font>
                   <span> : </span> <font face="Britannic Bold" size="4"> <span>Dulce & Salado</span></font>
                </a>
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{-- {{ config('app.name', 'Dulceado') }} --}}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">  
                                   
                    </ul>
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                         
                    </ul>
                            {{-- Navbar derecha --}}
                            <ul class="navbar-nav ml-auto navbar-right ">
                                <div class="row" > 
                                    
                                <div class=" col-lg-12 text-center">
                                    <div class="btn-group">
                                        <span class="pull-right"> 
                                            <!-- Authentication Links -->
                                            @guest
                                            {{-- Si no est logueado --}}
                                                    <a class="btn btn-default btn-sm pull-right"  href="{{ route('login') }}">{{ __('Acceder') }}</a>

                                                    @if (Route::has('register'))
                                                        <a class="btn btn-default btn-sm pull-right"   href="{{ route('register') }}">{{ __('Registrar') }}</a>
                                                    @endif
                                            @else
                                            {{-- si esta logueado --}}
                                             
                                                        <a class="btn btn-outline-info btn-sm pull-right">  {{ Auth::user()->rol }}   {{ Auth::user()->name }} </a>
                                                        {{-- <a  class="btn btn-sm btn-default"  role="button" href="{{url('/perfil') }}" >Perfil <i class="glyphicon glyphicon-user"></i></a>
                                                        <a  class="btn btn-sm btn-default"    role="button" href="{{url('/principal') }}" >Principal <i class="glyphicon glyphicon-folder-open"></i></a> --}}
                                                        <a  class="btn btn-outline-info btn-sm pull-right" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> {{ __('Salir') }}  
                                                        
                                                        </a>
                                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                            @csrf
                                                        </form>
                                            @endguest
                                        </span> 
                                    </div>
                                </div>
                                </div>
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
{{-- footer --}}
<footer class="footer p-t-1" >
        <div class="container">
            

            <div class="copyright company-name text-center"> Florencia Cabrera © 2018</div>
                         
          
        </div>
    </footer>


</body>
</html>
