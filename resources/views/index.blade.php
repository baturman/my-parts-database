@extends('master')

@section('css')
    <!-- Fonts -->
    <link href="{{ asset('css/nunito.css') }}" rel="stylesheet">
    <link href="{{ asset('css/montserrat.css') }}" rel="stylesheet">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
@endsection

@section('content')
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

        <div class="row align-items-center text-center">
            <div class="col-md-12">
                <div class="title m-b-md">
                    My Parts Database
                </div>

                <div class="search m-b-md" style="width: 100%;">
                    <div id="remote" class="form-group">
                        <input class="typeahead form-control" type="text" placeholder="Search.." autocomplete="off">
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection

@section('scripts')

@endsection


