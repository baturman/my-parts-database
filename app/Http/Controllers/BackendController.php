<?php

namespace App\Http\Controllers;

use App\Category;
use App\Subcategory;
use Illuminate\Http\Request;

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
}
