@extends('backend.layout.main', [ 'menu_categories_active' => true ])

@section('css')
    <link href="{{ asset('plugins/select2/css/select2.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('plugins/select2-bootstrap/select2-bootstrap4.min.css') }}" rel="stylesheet" />
@endsection

@section('content')
    <div class="row mt-4">
        <div class="col-md-12">
            <h2>Category Management</h2>
            <hr />
            <p>
                Main categories are indicated with <b>bold</b> text and button on the right side can be used for editing or delete operation.
                If you decide to delete a main category, application will ask you to move subcategories to another main category or delete them as well. Please note that if you don't assign subcategories to another
                main category, all subcategories and parts that belongs to these subcategories will also be deleted.
            </p>
            <p>You can also edit/delete subcategories. Below rule also applies to subcategories as well. If you would like to delete a subcategory, application will ask you to move parts to another subcategory or
            delete them as well. Please pay attention while deleting both main or sub categories in order to prevent data loss.</p>
        </div>
        <div class="col-md-12 my-3">
            <button id="create-main-category-btn" type="button" class="btn btn-secondary btn-fixed-200" data-toggle="modal" data-target="#main-category-create-modal" >Create Main Category</button>
            <button id="create-sub-category-btn" type="button" class="btn btn-secondary btn-fixed-200" >Create Sub Category</button>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            @foreach($categories as $category)
                <div class="row">
                    <div class="col-md-12 mt-3">
                        <h5 class="font-weight-bolder"><span id="mc-{{ $category->id }}">{{ $category->name }}</span>
                            <a href="#" class="badge badge-danger font-weight-normal float-right mc-delete-select" data-item-id="{{ $category->id }}" data-item-name="{{ $category->name }}">Delete</a>
                            <a href="#" class="badge badge-info font-weight-normal float-right mr-1 mc-edit-select" data-item-id="{{ $category->id }}">Edit</a>
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
    <div class="modal fade" id="main-category-edit-modal" tabindex="-1" role="dialog" aria-labelledby="main-category-edit-modal" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header bg-info text-light">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Edit Main Category</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="text-light">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="main-category-edit-form" autocomplete="off" >
                        @csrf
                        <div class="form-group row">
                            <label for="name" class="col-sm-2 col-form-label">Name:</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="edit-mc-name" name="name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="description" class="col-sm-2 col-form-label">Description:</label>
                            <div class="col-sm-9">
                                <textarea class="form-control" id="edit-mc-description" name="description" style="height: 350px"></textarea>
                            </div>
                        </div>
                        <input type="hidden" id="main-category-id" name="main-category-id" />
                    </form>
                </div>
                <div class="modal-footer bg-light">
                    <button id="main-category-save-btn" type="button" class="btn btn-primary btn-fixed-150">Save</button>
                    <button type="button" class="btn btn-secondary btn-fixed-150" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Category Create Modal -->
    <div class="modal fade" id="main-category-create-modal" tabindex="-1" role="dialog" aria-labelledby="main-category-create-modal" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header bg-info text-light">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Create Main Category</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="text-light">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="main-category-create-form" autocomplete="off" >
                        @csrf
                        <div class="form-group row">
                            <label for="name" class="col-sm-2 col-form-label">Name:</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="create-mc-name" name="name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="description" class="col-sm-2 col-form-label">Description:</label>
                            <div class="col-sm-9">
                                <textarea class="form-control" id="create-mc-description" name="description" style="height: 350px"></textarea>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer bg-light">
                    <button id="main-category-create-btn" type="button" class="btn btn-primary btn-fixed-150">Save</button>
                    <button type="button" class="btn btn-secondary btn-fixed-150" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Category Delete Modal -->
    <div class="modal fade" id="main-category-delete-modal" tabindex="-1" role="dialog" aria-labelledby="main-category-delete-modal" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content modal-height-400p">
                <div class="modal-header bg-danger text-light">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Delete Main Category</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="text-light">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>
                        This will delete main category <span id="main-category-name" class="font-weight-bold"></span>.
                        If you would like to delete all subcategories and parts in this main category, click <b>Delete</b> button. Optionally, you can select another
                        main category below and click <b>Move & Delete</b> button.</p>
                    <input type="hidden" id="mc-del-id" />
                    <div class="card card-body p-3 text-center">
                        <p class="font-weight-bold">Optional:</p>
                        <p>Migrate subcategories and parts to:</p>
                        <div class="row">
                            <div class="col-md-2"></div>
                            <div class="col-md-8">
                                <select id="new_category_id" name="new_category_id" style="width: 100%">
                                    <option value=""></option>
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-2"></div>
                        </div>

                    </div>

                </div>
                <div class="modal-footer bg-light">
                    <button id="main-category-delete-btn" type="button" class="btn btn-danger btn-fixed-150">Delete</button>
                    <button id="main-category-move-and-delete-btn" type="button" class="btn btn-primary btn-fixed-150">Move & Delete</button>
                    <button type="button" class="btn btn-secondary btn-fixed-150" data-dismiss="modal">Close</button>
                </div>
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