@extends('master')

@section('content')
    <div class="container">
        <div class="row justify-content-center">


            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        You are logged in!

                        <br />
                        <br />
                        <a href="{{ route('part.create') }}" class="btn btn-primary">Add New Part</a>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
