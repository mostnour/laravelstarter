<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

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
                font-size: 13px;
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

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <h1>{{__('messages.welcome')}}</h1>
                {{--
                <p>{{$data}}</p>
                <p>{{$string}}</p>
                <p>{{$age}}</p>
                <p>{{$obj -> name}}</p>
                <p>{{$obj -> id}}</p>
                <p>{{$obj -> gender}}</p>

                --}}
                {{-- 026 - view directives.mp4 --}}
                {{--
                @if($obj -> name == 'mostafa')
                    <p>Yes, I'm Mostafa</p>
                @else
                    <p>No, I'm her daughter</p>
                @endif
                ---}}
                {{--
                @foreach($arrData as $_arrData)
                    <p>{{$_arrData}}</p>
                @endforeach
                --}}

                {{--
                @if($obj -> name == 'mostafa')
                    <p>Yes, I'm Mostafa</p>
                @elseif($obj -> name == 'Gaber')
                    <p>Yes, I'm Mostafa</p>
                @elseif($obj -> name == 'Maha')
                    <p>Yes, I'm Mostafa</p>
                @elseif($obj -> name == 'Elsayed')
                    <p>Yes, I'm Mostafa</p>
                @elseif($obj -> name == 'Ibrahim')
                    <p>Yes, I'm Mostafa</p>
                @else
                    <p>No, I'm her daughter</p>
                @endif
                --}}

                @forelse($arrData as $_arrData)
                    <p>{{$_arrData}}</p>
                @empty
                    <p>There is no data</p>
                @endforelse

            </div>
        </div>
    </body>
</html>
