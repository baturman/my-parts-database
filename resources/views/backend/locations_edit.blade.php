@extends('backend.layout.main', [ 'menu_locations_active' => true ])

@section('css')
    <link href="{{ asset('plugins/select2/css/select2.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('plugins/select2-bootstrap/select2-bootstrap4.min.css') }}" rel="stylesheet" />
@endsection

@section('content')
    <form id="part-create-form" action="{{ route('locations.update', ['location' => $location->id]) }}" method="post" enctype="multipart/form-data" >
        @csrf
        @if(count($errors))
            <div class="alert alert-danger" role="alert">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{!! $error !!}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        {{ method_field('PUT') }}
        @if(session('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif

        @if(session('error'))
            <div class="alert alert-danger" role="alert">
                {{ session('error') }}
            </div>
        @endif

        <div class="card-group mt-3">
            <div class="card">
                <div class="card-header font-weight-bolder">
                    Edit Location
                </div>
                <div class="card-body">

                    <div class="form-group row">
                        <label for="name" class="col-sm-2 col-form-label text-right">Name:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="name" name="name" autocomplete="new-name" value="{{ $location->name }}" autofocus>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="description" class="col-sm-2 col-form-label text-right">Description:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="description" name="description" value="{{ $location->description }}">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="image" class="col-sm-2 col-form-label text-right">Image:</label>
                        <div class="col-sm-10">
                            <div class="row">
                                <div class="col-md-auto">
                                    <img src="{{ $location->getFirstMediaUrl('images') }}" class="border-light border-3" style="height: 300px; width: 300px" alt="Part Thumb"/>
                                </div>
                                <div class="col">
                                    <p class="my-1 font-color-lighter">Uploading new file will replace current image.</p>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="image" name="image">
                                        <label class="custom-file-label" for="image">Select..</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="card-footer text-right">
                    <button type="submit" class="btn btn-info ">Save</button>
                </div>
            </div>
        </div>
    </form>

@endsection

@section('scripts')
    <script src="{{ asset('plugins/tinymce/js/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('plugins/jquery-validation/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('plugins/select2/js/select2.min.js') }}"></script>

    <script src="{{ asset('js/categories.js') }}"></script>
@endsection