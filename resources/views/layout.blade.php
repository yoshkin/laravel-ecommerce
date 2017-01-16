<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ $title }}</title>

        <!-- Fonts -->
{{--<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">--}}
<link rel="stylesheet" href="{{ elixir('css/app.css') }}">

<!-- Styles -->
<style>
    html, body {
        background-color: #fff;
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
    @if (Route::has('login'))
        <div class="top-right links">
            @foreach ($menu as $m)
                <a href="{{ $m->url() }}">{{ $m->name }}</a>
            @endforeach
                {{--<a href="{{ url('/products') }}">Last 10 products</a>--}}
                <a href="{{ url('/admin/login') }}">Login</a>
                <a href="{{ url('/admin/register') }}">Register</a>
        </div>
    @else
        <div class="top-right links">
            @foreach ($menu as $m)
                <a href="{{ $m->url() }}">{{ $m->name }}</a>
            @endforeach
{{--                <a href="{{ url('/products') }}">Last 10 products</a>--}}
        </div>
    @endif

    @yield('content')

</div>
</body>
</html>
