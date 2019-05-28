@extends('backend.layout.main', [ 'menu_parts_active' => true ])

@section('css')
    <link href="{{ asset('plugins/select2/css/select2.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('plugins/select2-bootstrap/select2-bootstrap4.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('plugins/tagify/tagify.css') }}" rel="stylesheet" />

@endsection

@section('content')
    <form id="part-create-form" action="{{ route('parts.store') }}" method="post" enctype="multipart/form-data" >
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

        <div class="card-group">
            <div class="card">
                <div class="card-header font-weight-bolder">
                    Create Part
                </div>
                <div class="card-body">
                    <div class="form-group row">
                        <label for="name" class="col-sm-2 col-form-label text-right">Name:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="name" name="name" autocomplete="new-name" value="{{ old('name') }}" autofocus>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="description" class="col-sm-2 col-form-label text-right">Description:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="description" name="description" value="{{ old('description') }}">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="url" class="col-sm-2 col-form-label text-right">URL:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="url" name="url" value="{{ old('url') }}" >
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="stock" class="col-sm-2 col-form-label text-right">Stock:</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="stock" name="stock" value="{{ old('stock') }}">
                        </div>
                        <label for="price" class="col-sm-2 col-form-label text-right">Price: </label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="price" name="price" value="{{ old('price') }}">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="location_id" class="col-sm-2 col-form-label text-right">Location: </label>
                        <div class="col-sm-10">
                            <select id="location_id" name="location_id" style="width: 100%">
                                <option value=""></option>
                                @foreach($locations as $location)
                                    <option value="{{ $location->id }}">{{ $location->name }} - {{ $location->description }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="sub_category_id" class="col-sm-2 col-form-label text-right">Subcategory: </label>
                        <div class="col-sm-10">
                            <select id="sub_category_id" name="sub_category_id" style="width: 100%">
                                <option value=""></option>
                                @foreach($categories as $category)
                                    <optgroup style="background-color: #e3e3e3" label="{{ $category->name }}">
                                        @foreach($category->subcategories as $subcategory)
                                            <option value="{{ $subcategory->id }}">{{ $subcategory->name }}</option>
                                        @endforeach
                                    </optgroup>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="image" class="col-sm-2 col-form-label text-right">Image:</label>
                        <div class="col-sm-10">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="image" name="image">
                                <label class="custom-file-label" for="image">Select..</label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="datasheet" class="col-sm-2 col-form-label text-right">Datasheet:</label>
                        <div class="col-sm-10">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="datasheet" name="datasheet">
                                <label class="custom-file-label" for="image">Select..</label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="pinout" class="col-sm-2 col-form-label text-right">Pinout:</label>
                        <div class="col-sm-10">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="pinout" name="pinout">
                                <label class="custom-file-label" for="image">Select..</label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="attachment" class="col-sm-2 col-form-label text-right">Attachment:</label>
                        <div class="col-sm-10">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="attachment" name="attachment">
                                <label class="custom-file-label" for="attachment">Select..</label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="tags" class="col-sm-2 col-form-label text-right">Tags:</label>
                        <div class="col-sm-10">
                            <input id="tags" type='text' name="tags" value="{{ old('tags') }}" />
                        </div>
                    </div>
                    <br /><br /><br /><br /><br /><br />
                </div>
            </div>
            <div class="card">
                <div class="card-header font-weight-bolder">
                    Part Notes
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <div class="input-group text">
                            <textarea class="form-control" id="notes" name="notes" rows="22" style="width: 100%;" ></textarea>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button id="add-part-btn" type="submit" class="btn btn-sm btn-primary btn-fixed-150 float-right">Create</button>
                </div>
            </div>
        </div>

    </form>

@endsection

@section('scripts')
    <script src="{{ asset('plugins/tinymce/js/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('plugins/jquery-validation/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('plugins/select2/js/select2.min.js') }}"></script>
    <script src="{{ asset('plugins/tagify/tagify.min.js') }}"></script>

    <script>

        window.ajaxGetRequest(
            '/ajax/tags',
            function (data) {
                let status = data['status'];

                if (status === 'info'){
                    let input = document.querySelector('input[name=tags]'),
                        tagify = new Tagify(input, {
                            enforceWhitelist : false,
                            whitelist        : data['data']
                        });
                }
            }
        );

        $(document).on('change', '.custom-file-input', function (event) {
            $(this).next('.custom-file-label').html(event.target.files[0].name);
        });

        $('#sub_category_id').select2({
            theme: 'bootstrap4',
            placeholder: 'Select..',
        });

        $('#location_id').select2({
            theme: 'bootstrap4',
            placeholder: 'Select..',
        });

        window.tinymce.init({
            selector: "textarea#notes",
            plugins: "link",
            toolbar: ["undo redo | styleselect | bold italic underline",
                'alignleft aligncenter alignright alignjustify | removeformat'],
            resize: false,
            height: 600,
            content_css: '/css/tinymce.css',
        });

    </script>
@endsection