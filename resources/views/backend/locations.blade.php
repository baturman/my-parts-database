@extends('backend.layout.main', [ 'menu_locations_active' => true ])

@section('css')
    <link href="{{ asset('plugins/select2/css/select2.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('plugins/select2-bootstrap/select2-bootstrap4.min.css') }}" rel="stylesheet" />
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card-columns" style="margin-top:50px" >
                @foreach($locations as $location)
                    <div class="card">
                        <div class="row align-items-center">
                            <div class="col-md-4">
                                <img class="card-img-top border border-2 m-3" src="{{ $location->getFirstMediaUrl('images') }}" alt="Cover">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body p-sm-1">
                                    <h5 class="card-title pt-3 pb-0 mb-0 font-13">{{ $location->name }}</h5>
                                    <span class="font-12" style="color: rgba(0,0,0,0.4)">{{ $location->description }}</span>
                                    <dl class="row font-13 mt-4">
                                        <dt class="col-sm-3 no-x-padding no-x-margin text-right" style="padding-right: 3px;">Created At: </dt>
                                        <dd class="col-sm-9 no-x-padding no-x-margin" style="padding-left: 3px">{{ $location->created_at }}</dd>
                                        <dt class="col-sm-3 no-x-padding no-x-margin text-right" style="padding-right: 3px;">Updated At: </dt>
                                        <dd class="col-sm-9 no-x-padding no-x-margin" style="padding-left: 3px">{{ $location->updated_at }}</dd>
                                    </dl>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <a href="/locations/{{ $location->id }}/edit" class="btn btn-info btn-sm text-light">Edit</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('plugins/tinymce/js/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('plugins/jquery-validation/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('plugins/select2/js/select2.min.js') }}"></script>

    <script src="{{ asset('js/categories.js') }}"></script>
@endsection