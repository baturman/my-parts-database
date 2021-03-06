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

    <div class="container-fluid">
        <h1 class="bd-title" >{{ $subcategory->name }}</h1>
        <hr />
        @if($subcategory->description != null)
            <p class="bd-lead text-justify">{!! $subcategory->description !!} </p>
        @else
            <p class="bd-lead">No description for this sub-category.</p>
        @endif

        <div class="card-columns" style="margin-top:50px" >
            @foreach($subcategory->parts as $part)
                <div class="card">
                    <div class="row align-items-center">
                        <div class="col-md-4">
                            <img class="card-img-top border border-2 m-3" src="{{ $part->getFirstMediaUrl('images') }}" alt="Cover">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body p-sm-1">
                                <h5 class="card-title pt-3 pb-0 mb-0 font-13">{{ $part->name }}</h5>
                                <span class="font-12" style="color: rgba(0,0,0,0.4)">{{ $part->description }}</span>

                                <dl class="row font-13 mt-4">
                                    <dt class="col-sm-3 no-x-padding no-x-margin text-right" style="padding-right: 3px;">Location: </dt>
                                    <dd class="col-sm-9 no-x-padding no-x-margin" style="padding-left: 3px">{{ $part->location->name }}</dd>
                                    <dt class="col-sm-3 no-x-padding no-x-margin text-right" style="padding-right: 3px;">URL: </dt>
                                    <dd class="col-sm-9 no-x-padding no-x-margin" style="padding-left: 3px"><a href="{{ $part->url }}" target="_blank">Visit</a></dd>
                                    <dt class="col-sm-3 no-x-padding no-x-margin text-right" style="padding-right: 3px;">Price: </dt>
                                    <dd class="col-sm-9 no-x-padding no-x-margin" style="padding-left: 3px">{{ $part->price }} ₺</dd>
                                    <dt class="col-sm-3 no-x-padding no-x-margin text-right" style="padding-right: 3px;">Stock: </dt>
                                    <dd class="col-sm-9 no-x-padding no-x-margin" style="padding-left: 3px">{{ $part->stock }}</dd>
                                    <dt class="col-sm-3 no-x-padding no-x-margin text-right" style="padding-right: 3px;">Tags: </dt>
                                    <dd class="col-sm-9 no-x-padding no-x-margin" style="padding-left: 3px">
                                        @foreach($part->tags as $tag)
                                            <span class="badge badge-secondary">{{ $tag->name }}</span>
                                        @endforeach
                                    </dd>
                                    <dt class="col-sm-3 no-x-padding no-x-margin text-right" style="padding-right: 3px;">Created At: </dt>
                                    <dd class="col-sm-9 no-x-padding no-x-margin" style="padding-left: 3px">{{ $part->created_at }}</dd>
                                    <dt class="col-sm-3 no-x-padding no-x-margin text-right" style="padding-right: 3px;">Updated At: </dt>
                                    <dd class="col-sm-9 no-x-padding no-x-margin" style="padding-left: 3px">{{ $part->updated_at }}</dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
</body>
</html>

