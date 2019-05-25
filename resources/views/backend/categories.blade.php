@extends('backend.layout.main')

@section('content')
    <div class="row">
        <div class="col-md-12">
            @foreach($categories as $category)
                <div class="row">
                    <div class="col-md-12 mt-3">
                        <h5 class="font-weight-bolder">{{ $category->name }}
                            <a href="#" class="badge badge-danger font-weight-normal float-right ">Delete</a>
                            <a href="#" class="badge badge-info font-weight-normal float-right mr-1">Edit</a>
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
@endsection