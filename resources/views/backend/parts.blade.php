@extends('backend.layout.main', [ 'menu_parts_active' => true ])

@section('css')
    <link href="{{ asset('plugins/select2/css/select2.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('plugins/select2-bootstrap/select2-bootstrap4.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('plugins/DataTables/datatables.min.css') }}" rel="stylesheet" />

@endsection

@section('content')
    <div class="card-group">
        <div class="card">
            <div class="card-header font-weight-bolder">
                Part List
            </div>
            <div class="card-body">
                <div class="btn-group btn-group-sm mr-1 float-right" role="group" aria-label="Export Options">
                    <button id="export_print" class="btn btn-dark"><i class="fas fa-print"></i></button>
                    <button id="export_copy" class="btn btn-dark"><i class="fas fa-copy"></i></button>
                    <button id="export_excel" class="btn btn-dark"><i class="fas fa-file-excel"></i></button>
                    <button id="export_csv" class="btn btn-dark"><i class="fas fa-file-csv"></i></button>
                    <button id="export_pdf" class="btn btn-dark"><i class="fas fa-file-pdf"></i></button>
                </div>
                <table class="table table-sm table-bordered table-hover" id="parts_table" style="font-size: 14px">
                    <thead class="thead-dark">

                    </thead>
                    <tbody style="cursor: pointer;">
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card">
            <div class="card-header font-weight-bolder">
                Part Preview
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-auto">
                        <img id="part_image" src="{{ asset('images/no-image.svg') }}" alt="Product" style="height: 300px; width: 300px" class="border-3 border-light rounded"/>
                        <div class="mt-2" style="width: 300px">
                            <div class="text-right float-left font-weight-bold" style="width: 100px">Created At:</div>
                            <div id="part_created_at" class="text-left float-right pl-1" style="width: 200px">Not Available</div>

                            <div class="text-right float-left font-weight-bold" style="width: 100px">Updated At:</div>
                            <div id="part_updated_at" class="text-left float-right pl-1" style="width: 200px">Not Available</div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="row py-2">
                            <div class="col-md-12">
                                <h4 id="part_name">Not Available</h4>
                                <p id="part_description" class="font-color-lighter">Not Available</p>
                                <dl class="row">
                                    <dt class="col-sm-3 text-right pr-1">Category:</dt>
                                    <dd id="part_category" class="col-sm-9 pl-1">Not Available</dd>
                                    <dt class="col-sm-3 text-right pr-1">Subcategory:</dt>
                                    <dd id="part_subcategory" class="col-sm-9 pl-1">Not Available</dd>
                                    <dt class="col-sm-3 text-right pr-1">Stock:</dt>
                                    <dd id="part_stock" class="col-sm-9 pl-1">Not Available</dd>
                                    <dt class="col-sm-3 text-right pr-1">Price Tag:</dt>
                                    <dd id="part_price" class="col-sm-9 pl-1">Not Available</dd>
                                    <dt class="col-sm-3 text-right pr-1">URL:</dt>
                                    <dd id="part_url" class="col-sm-9 pl-1">Not Available</dd>
                                    <dt class="col-sm-3 text-right pr-1">Location:</dt>
                                    <dd class="col-sm-9 pl-1">
                                        <span id="part_location">Not Available</span><br />
                                        <img class="border-3 border-light radius mt-1" id="part_location_image" src="{{ asset('images/HB-00-BLUE.png') }}" style="height: 80px; width: 80px" alt="Location"/>
                                        <br /><small id="part_location_description" class="font-color-lighter">Not Available</small>
                                    </dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="mt-0 pt-0"/>
                <div class="row">
                    <div class="col-md-6">
                        <h4>Attachments</h4>
                        <div id="part_attachments_none" class="text-muted">
                            No attachments.
                        </div>
                        <ul id="part_attachments" class="hide-stuff horizontal ">
                        </ul>
                    </div>

                    <div class="col-md-6">
                        <h4>Tags</h4>
                        <div id="part_tags_none" class="text-muted">
                            No tags.
                        </div>
                        <ul id="part_tags" class="hide-stuff horizontal" >
                        </ul>
                    </div>
                </div>
            </div>
            <div class="card-footer">

                <a href="{{ route('parts.create') }}" id="add-part-btn" class="btn btn-sm btn-primary btn-fixed-150">Add New Part</a>
                <a href="#" id="edit-part-btn" class="btn btn-sm btn-info btn-fixed-150 disabled" disabled>Edit Part</a>
                <button id="delete-part-btn" class="btn btn-sm btn-danger btn-fixed-150 float-right" data-toggle="modal" data-target="#delete-part-modal" disabled>Delete Part</button>
            </div>
        </div>
    </div>

    <!-- Part Delete Modal -->
    <div class="modal fade" id="delete-part-modal" tabindex="-1" role="dialog" aria-labelledby="delete-part-modal" aria-hidden="true">
        <div class="modal-dialog modal-900 modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header bg-danger text-light">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Delete Part</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="text-light">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>
                        This will delete following part. Would you like to continue?</p>
                    <input type="hidden" id="sc-del-id" />
                    <div class="card card-body p-3">
                        <div class="row align-items-center">
                            <div class="col-md-4">
                                <img id="d_image" src="{{ asset('images/no-image.svg') }}" alt="Part Image" class="border-light border-3" style="height: 225px; width: 225px"/>
                            </div>
                            <div class="col-md-8">
                                <input id="d_id" type="hidden" />
                                <dl class="row">
                                    <dt class="col-sm-3 text-right pr-1">Name:</dt>
                                    <dd id="d_name" class="col-sm-9 pl-1">Not Available</dd>

                                    <dt class="col-sm-3 text-right pr-1">Description:</dt>
                                    <dd id="d_description" class="col-sm-9 pl-1">Not Available</dd>

                                    <dt class="col-sm-3 text-right pr-1">Category:</dt>
                                    <dd id="d_category" class="col-sm-9 pl-1">Not Available</dd>

                                    <dt class="col-sm-3 text-right pr-1">Subcategory:</dt>
                                    <dd id="d_subcategory" class="col-sm-9 pl-1">Not Available</dd>

                                    <dt class="col-sm-3 text-right pr-1">Stock:</dt>
                                    <dd id="d_stock" class="col-sm-9 pl-1">Not Available</dd>

                                    <dt class="col-sm-3 text-right pr-1">Price Tag:</dt>
                                    <dd id="d_price" class="col-sm-9 pl-1">Not Available</dd>

                                    <dt class="col-sm-3 text-right pr-1">Location:</dt>
                                    <dd class="col-sm-9 pl-1">
                                        <span id="d_location">Not Available</span>
                                    </dd>
                                </dl>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer bg-light">
                    <button id="delete-part-confirm-btn" type="button" class="btn btn-danger btn-fixed-150">Delete</button>
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
    <script src="{{ asset('plugins/DataTables/datatables.min.js') }}"></script>

    <script src="{{ asset('js/parts.js') }}"></script>
@endsection