<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Laravel</title>

    <!-- Fonts -->
    <link href="{{ asset('css/nunito.css') }}" rel="stylesheet">
    <link href="{{ asset('css/montserrat.css') }}" rel="stylesheet">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="{{ asset('js/handlebars-v4.1.2.js') }}"></script>
    <script src="{{ asset('js/typeahead/typeahead.bundle.min.js') }}"></script>

</head>
<body>
<div style="margin-top: 150px">
    @if (Route::has('login'))
        <div class="top-right links">
            <a href="{{ url('/browse') }}">Browse</a>
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

    <div class="container">
        <div class="title m-b-md text-center">
            My Parts Database
        </div>

        <div class="search m-b-md" style="width: 55%; margin-left: auto; margin-right:auto">
            <div id="remote" class="form-group">
                <input class="typeahead form-control" type="text" placeholder="Search.." autocomplete="off">
            </div>
        </div>

    </div>
</div>
</body>
</html>

