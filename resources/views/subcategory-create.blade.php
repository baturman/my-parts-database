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
                    <div class="card-header">Add New Sub Category</div>

                    <div class="card-body">
                        <form autocomplete="off" method="post" action="{{ route('subcategory.store') }}" >
                            @csrf
                            <div class="form-group row">
                                <label for="name" class="col-sm-2 col-form-label">Name *</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" id="name" name="name" autocomplete="new-name" autofocus value="{{ old('name') }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="description" class="col-sm-2 col-form-label">Description</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" id="description" name="description" rows="20" style="resize: none;">{{ old('description') }}</textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="sub_category_id" class="col-sm-2 col-form-label">Category *</label>
                                <div class="col-sm-6">
                                    <select id="category_id" name="category_id" style="width: 100%">
                                        <option value=""></option>
                                        @foreach($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
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
            $('#category_id').select2({
                theme: 'bootstrap4',
                placeholder: 'Select..',
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

