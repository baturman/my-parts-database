<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link href="{{ asset('plugins/bootstrap/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('plugins/font-awesome/css/all.min.css') }}" rel="stylesheet">

    <link href="{{ asset('plugins/toastr/toastr-custom.css') }}" rel="stylesheet">

    <link href="{{ asset('css/nunito.css') }}" rel="stylesheet">
    <link href="{{ asset('css/backend.css') }}" rel="stylesheet">

    @yield('css')
</head>

<body>

<div class="d-flex" id="wrapper">

    <div id="page-content-wrapper">
        @include('backend.layout.navbar')

        <div class="container-fluid pt-3">
            <div class="pt-5 pl-3 pr-3">
                @yield('content')
            </div>
        </div>

    </div>

</div>

<script src="{{ asset('plugins/jquery/jquery-3.4.1.min.js') }}"></script>
<script src="{{ asset('plugins/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('plugins/toastr/toastr.min.js') }}"></script>

<script src="{{ asset('js/global.js') }}"></script>
<script src="{{ asset('js/backend.js') }}"></script>

@yield('scripts')

</body>

</html>
