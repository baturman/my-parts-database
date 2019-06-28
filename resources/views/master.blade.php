<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link href="{{ asset('plugins/bootstrap/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('plugins/font-awesome/css/all.min.css') }}" rel="stylesheet">

    <link href="{{ asset('css/nunito.css') }}" rel="stylesheet">

    @yield('css')
</head>

<body>

<div class="container-fluid pt-3">
    <div class="pt-5 pl-3 pr-3">
        @yield('content')
    </div>
</div>

<script src="{{ asset('plugins/jquery/jquery-3.4.1.min.js') }}"></script>
<script src="{{ asset('plugins/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/handlebars-v4.1.2.js') }}"></script>
<script src="{{ asset('js/typeahead/typeahead.bundle.min.js') }}"></script>

<script src="{{ asset('js/main.js') }}"></script>
<script src="{{ asset('js/global.js') }}"></script>

@yield('scripts')

</body>

</html>
