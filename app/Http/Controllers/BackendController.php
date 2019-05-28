<?php

namespace App\Http\Controllers;

use App\Category;
use App\Location;
use App\Subcategory;

class BackendController extends Controller
{
    public function categories(){
        $categories = Category::orderBy('name', 'asc')->get();
        $subcategories = Subcategory::orderBy('name', 'asc')->get();
        return view('backend.categories')
            ->with('categories', $categories)
            ->with('subcategories', $subcategories );
    }

    public function dashboard(){
        return view('backend.dashboard');
    }

    public function parts(){
        $categories = Category::orderBy('name', 'asc')->get();
        $locations = Location::orderBy('name', 'asc')->get();
        return view('backend.parts')
            ->with('categories', $categories)
            ->with('locations', $locations);
    }
}
