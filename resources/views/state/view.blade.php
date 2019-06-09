<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>View State</title>

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
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    {{$state->name}}
                </div>

                <div class="links">
                @foreach ($state->terms as $term)
                    <div><strong>
                        Term {{ $term->number }}
                        = {{ $term->start_date->toDateString() }}
                        - {{ $term->end_date->toDateString() }}
                    </strong></div>
                    <div>
                        @foreach ($term->weeks as $week)
                            {{ $week->number }}
                            ({{ $week->start_date->toDateString() }}
                            - {{ $week->end_date->toDateString() }})
                        @endforeach
                    </div>
                @endforeach
                </div>



                <div class="links">
                    <a href="/calendar/act.ics">ACT</a>
                    <a href="/calendar/nsw.ics">NSW</a>
                    <a href="/calendar/nt.ics">NT</a>
                    <a href="/calendar/qld.ics">QLD</a>
                    <a href="/calendar/sa.ics">SA</a>
                    <a href="/calendar/tas.ics">TAS</a>
                    <a href="/calendar/vic.ics">VIC</a>
                    <a href="/calendar/wa.ics">WA</a>
                </div>
            </div>
        </div>
    </body>
</html>
