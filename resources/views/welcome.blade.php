<!doctype html>
<html lang="{{ app()->getLocale() }}">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Dulceado</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>

    <body>
        <div class="flex-center position-ref full-height">
            {{-- Boton de inicio para login  --}}
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Menú</a>
                    @else
                        <a href="{{ route('login') }}">Acceder</a>
                        
                    @endauth
                </div>
            @endif

            <div class="content">
                {{-- Imagen de portada --}}
                <div class="title m-b-md">
                    <img src="{{asset('img/images.png')}}" width="300" />
                </div>
                {{-- Botones de menu --}}
                <div class="links">
                    <a href="{{ url('/producto/galeria') }}">Galeria</a>
                    <a href="#">Contactos</a>
                    <a href="#">Información</a>
                    
                    
                </div>
             </div> {{-- fin de content --}}

        </div> {{--  fin de flex-center --}}
    </body>
</html>
