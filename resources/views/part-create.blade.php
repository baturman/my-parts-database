@extends('master')

@section('page_css')
    <link href="{{ asset('plugins/select2/css/select2.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('plugins/select2-bootstrap/select2-bootstrap4.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('plugins/tagify/tagify.css') }}" rel="stylesheet" />

@endsection

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            @if(count($errors))
                <div class="col-md-12">
                    <div class="alert alert-danger" role="alert">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            @endif

            @if(session('success'))
                <div class="col-md-12">
                    <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                    </div>
                </div>
            @endif

                @if(session('error'))
                    <div class="col-md-12">
                        <div class="alert alert-danger" role="alert">
                            {{ session('error') }}
                        </div>
                    </div>
                @endif
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Add New Part</div>

                    <div class="card-body">
                        <form autocomplete="off" method="post" action="{{ route('part.store') }}" enctype=multipart/form-data>
                            @csrf
                            <div class="form-group row">
                                <label for="name" class="col-sm-2 col-form-label">Name *</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" id="name" name="name" autocomplete="new-name" autofocus value="{{ old('name') }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="brand" class="col-sm-2 col-form-label">Brand</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" id="brand" name="brand" value="{{ old('brand') }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="model" class="col-sm-2 col-form-label">Model</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" id="model" name="model" value="{{ old('model') }}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="url" class="col-sm-2 col-form-label">URL</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" id="url" name="url" value="{{ old('url') }}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="amount" class="col-sm-2 col-form-label">Stock</label>
                                <div class="col-sm-2">
                                    <input type="text" class="form-control" id="amount" name="amount" value="{{ old('amount') }}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="price" class="col-sm-2 col-form-label">Price</label>
                                <div class="col-sm-2">
                                    <input type="text" class="form-control" id="price" name="price" value="{{ old('price') }}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="location" class="col-sm-2 col-form-label">Location *</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" id="location" name="location" value="{{ old('location') }}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="sub_category_id" class="col-sm-2 col-form-label">Category *</label>
                                <div class="col-sm-6">
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
                                <label for="image" class="col-sm-2 col-form-label">Image</label>
                                <div class="col-sm-6">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="image" name="image">
                                        <label class="custom-file-label" for="image">Choose Image File..</label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="attachment" class="col-sm-2 col-form-label">Attachment</label>
                                <div class="col-sm-6">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="attachment" name="attachment">
                                        <label class="custom-file-label" for="attachment">Choose A File..</label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="tags" class="col-sm-2 col-form-label">Tags</label>
                                <div class="col-sm-6">
                                    <input id="tags" name="tags" style="width: 100%;" />
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="description" class="col-sm-2 col-form-label">Description</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" id="description" name="description" rows="15" >{{ old('description') }}</textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="notes" class="col-sm-2 col-form-label">Notes</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" id="notes" name="notes" rows="15" >{{ old('notes') }}</textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-12 text-center">
                                    <button type="submit" class="btn btn-primary">Add To Database</button>
                                </div>
                                <div class="clearfix"></div>
                            </div>


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('plugins/jquery/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('plugins/tagify/tagify.min.js') }}"></script>
    <script src="{{ asset('plugins/tinymce/js/tinymce/tinymce.min.js') }}"></script>

    <script>
        $(document).ready(function() {
            $('#sub_category_id').select2({
                theme: 'bootstrap4',
                placeholder: 'Select..',
            });

            let tags = {!! json_encode($tags) !!};

            let input = document.querySelector('input[name=tags]'),
                tagify = new Tagify(input, {
                    enforceWhitelist : false,
                    whitelist        : tags
                });

            $(document).on('change', '.custom-file-input', function (event) {
                $(this).next('.custom-file-label').html(event.target.files[0].name);
            });

            tinymce.init({
                selector: "textarea",  // change this value according to your HTML
                plugins: "link",
                toolbar: ["undo redo | styleselect | bold italic underline strikethrough",
                    'alignleft aligncenter alignright alignjustify | link image'],
                resize: false
            });

        });
    </script>
@endsection

