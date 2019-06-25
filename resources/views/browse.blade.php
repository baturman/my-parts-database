<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Laravel</title>

    <!-- Fonts -->
    <link href="{{ asset('css/montserrat.css') }}" rel="stylesheet">
    <link href="{{ asset('css/nunito.css') }}" rel="stylesheet">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}"></script>

</head>
<body>
<div style="margin-top: 100px">
    @if (Route::has('login'))
        <div class="top-right links">
            <a href="{{ url('/') }}">Search</a>
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

    <div class="container-fluid">
        <h3 style="margin-bottom: 30px">Database Browser:</h3>
        <hr />
        @foreach($categories as $category)
            <div class="row mt-3">
                <div class="col-md-12" style="font-weight: bolder">{{ $category->name }}:</div>
                @foreach($category->subcategories as $subcategory)
                    <div class="col-md-3"><a href="/browse/sub-category/{{ $subcategory->slug }}">{{ $subcategory->name }}</a> ({{ count($subcategory->parts) }})</div>
                @endforeach
            </div>
            <br />
        @endforeach

    </div>
</body>
</html>

