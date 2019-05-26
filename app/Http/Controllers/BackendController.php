<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class BackendController extends Controller
{
    public function categories(){
        $categories = Category::orderBy('name', 'asc')->get();
        return view('backend.categories')
            ->with('categories', $categories);
    }

    public function dashboard(){
        return view('backend.dashboard');
    }
}
