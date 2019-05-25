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

</head>
<body>
<div style="margin-top: 100px">
    @if (Route::has('login'))
        <div class="top-right links">
            <a href="{{ url('/') }}">Search</a>
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
        <h1 class="bd-title" >{{ $subcategory->name }}</h1>
        <hr />
        @if($subcategory->description != null)
            <p class="bd-lead text-justify">{!! $subcategory->description !!} </p>
        @else
            <p class="bd-lead">No description for this sub-category.</p>
        @endif

        <div class="card-columns"style="margin-top:50px" >
            @foreach($subcategory->parts as $part)
                <div class="card">
                    <div class="card-header font-12 open-sans-condensed">
                        {{ $part->name }}
                    </div>
                    <div class="card-body p-sm-1">
                        <div class="row align-items-center">
                            <div class="col-4">
                                <img class="card-img-top" src="{{ $part->getFirstMediaUrl('images') }}" alt="Cover">
                            </div>
                            <div class="col-8">
                                <dl class="row font-11">
                                    <dt class="col-sm-3 no-x-padding no-x-margin text-right" style="padding-right: 3px;">Brand: </dt>
                                    <dd class="col-sm-9 no-x-padding no-x-margin" style="padding-left: 3px">{{ $part->brand }}</dd>
                                    <dt class="col-sm-3 no-x-padding no-x-margin text-right" style="padding-right: 3px;">Model: </dt>
                                    <dd class="col-sm-9 no-x-padding no-x-margin" style="padding-left: 3px">{{ $part->model }}</dd>
                                    <dt class="col-sm-3 no-x-padding no-x-margin text-right" style="padding-right: 3px;">Price: </dt>
                                    <dd class="col-sm-9 no-x-padding no-x-margin" style="padding-left: 3px">{{ $part->price }}</dd>
                                    <dt class="col-sm-3 no-x-padding no-x-margin text-right" style="padding-right: 3px;">Stock: </dt>
                                    <dd class="col-sm-9 no-x-padding no-x-margin" style="padding-left: 3px">{{ $part->amount }}</dd>
                                </dl>
                            </div>
                        </div>

                    </div>
                    <div class="card-footer">
                        <button type="button" class="btn btn-secondary btn-sm">Details</button>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
</body>
</html>

