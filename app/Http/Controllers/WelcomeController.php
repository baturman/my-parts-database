<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Resources\PartsResource;
use App\Part;
use App\Subcategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class WelcomeController extends Controller
{
    public function index(){
        return view('index');
    }

    public function find(Request $request)
    {
        Log::info("Query: " . $request->get('q'));
        $qps = Part::search($request->get('q'))->get();
        $ids = array();
        foreach ($qps as $qp){
            array_push($ids, $qp->id);
        }
        $parts = Part::whereIn('id', $ids)->get();
        $parts->load('subcategory.category');

        return PartsResource::collection($parts);

    }

    public function browse(){
        $categories = Category::orderBy('name', 'asc')->get();
        return view('browse')->with('categories', $categories);
    }

    public function subcategory($slug){
        Log::info("Sub category..");
        $subcategory = Subcategory::where('slug', '=', $slug)->first();
        return view('subcategory')->with('subcategory', $subcategory);
    }



}
