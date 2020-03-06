<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>bluebird</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Comfortaa&display=swap" rel="stylesheet">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" >
        <!-- Styles -->
        <style>
            html, body {

                background-image: url("../../public/background-y/fabric.jpg");
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .content{
                background-image: url("../../public/background-y/fabric.jpg");
                font-family: 'Comfortaa', cursive;
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

            .content {
                text-align: center;
                background-image: url("../../public/background-y/fabric.jpg");
                font-family: 'Comfortaa', cursive;
            }

            .title {
                color: black;
                background-image: url("../../public/background-y/fabric.jpg");
                font-size: 84px;
            }
            .back{
                 background-image: url("../../public/background-y/fabric.jpg");
            }
            .links > a {
                //color: #636b6f;
                color: black;
                font-family: 'Comfortaa', cursive;
                padding: 0 25px;
                font-size: 16px;
                font-weight: 200;
                letter-spacing: .1rem;
                text-decoration: none;

            }
            .cc{
                 font-weight: 200;
                    font-size: small;
}
            .m-b-md {
                margin-bottom: 30px;
            }

        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height back">
            <div class="content">
                <div class="title m-b-md">
                    bluebird
                </div>
                <div class="title m-b-md cc">
                    serwis koropetycji
                </div>
                <div class="links">
                    <a href="{{url('about')}}">regulamin</a>
                    <a href="{{url('noticeboard')}}">tablica ogłoszeń</a>
                    <a href="{{url('pages')}}">dodaj ogłoszenie</a>
                </div>
            </div>
        </div>
    </body>
</html>
