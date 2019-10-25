<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                background-image: url("img/maquinaria.jpg");
                background-size: cover;
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
                font-size: 90px;
                text-shadow: 1px 0px 1px #FFB200, 0px 1px 1px #eee, 
                            2px 1px 1px #FFB200, 1px 2px 1px #eee,
                            3px 2px 1px #FFB200, 2px 3px 1px #eee,
                            4px 3px 1px #FFB200, 3px 4px 1px #eee,
                            5px 4px 1px #FFB200, 4px 5px 1px #eee,
                            6px 5px 1px #FFB200, 5px 6px 1px #eee,
                            7px 6px 1px #FFB200;  
                border-radius: 30px;
                background-color: black;
            }

            .links > a {
                color: #FFB200;
                padding: 0 25px;
                font-size: 15px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration-color: : black;
                text-transform: uppercase;
            }

            #navbar:hover{
                color: white;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            #form:hover{
                color: white;
            }


        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}" id="form">Login</a>
                        <a href="{{ route('register') }}" id="form">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    ProMachines
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs" id="navbar">Documentation</a>
                    <a href="https://laracasts.com" id="navbar">Laracasts</a>
                    <a href="https://laravel-news.com" id="navbar">News</a>
                    <a href="https://forge.laravel.com" id="navbar">Forge</a>
                    <a href="https://github.com/laravel/laravel" id="navbar">GitHub</a>
                </div>
            </div>
        </div>
        
    </body>
</html>
