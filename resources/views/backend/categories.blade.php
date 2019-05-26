@extends('backend.layout.main')

@section('content')
    <div class="row">
        <div class="col-md-12">
            @foreach($categories as $category)
                <div class="row">
                    <div class="col-md-12 mt-3">
                        <h5 id="mc-{{ $category->id }}" class="font-weight-bolder">{{ $category->name }}
                            <a href="#" class="badge badge-danger font-weight-normal float-right ">Delete</a>
                            <a href="#" class="badge badge-info font-weight-normal float-right mr-1 main-category-select" data-item-id="{{ $category->id }}">Edit</a>
                        </h5>
                        <hr class="mt-1 mb-2"/>
                    </div>
                    @foreach($category->subcategories as $subcategory)
                        <div class="col-md-4 font-weight-light">{{ $subcategory->name }} (<a class="text-info" href="#">Edit</a>) (<a class="text-danger" href="#">Delete</a>)</div>
                    @endforeach
                </div>
                <br />
            @endforeach
        </div>
    </div>

    <!-- Category Edit Modal -->
    <div class="modal fade" id="main_category_edit_model" tabindex="-1" role="dialog" aria-labelledby="main_category_edit_model" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header bg-secondary text-light">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="text-light">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('scripts')
    <script src="{{ asset('js/categories.js') }}"></script>
@endsection