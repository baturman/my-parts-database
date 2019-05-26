<?php

namespace App\Http\Controllers;

use App\Category;
use App\Subcategory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\ValidationException;
use Mockery\Exception;

class CategoryController extends Controller
{
    public function create()
    {
        $categories = Category::orderBy('name', 'asc')->get();
        return view('subcategory-create')->with('categories', $categories);
    }

    /**
     * @param Request $request
     * @return RedirectResponse|Redirector
     * @throws ValidationException
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'category_id' => 'required'
        ]);

        try{
            $subcategory = new Subcategory();
            $data = $request->only($subcategory->getFillable());
            $subcategory->fill($data);
            $subcategory->category_id = $request->get('category_id');
            $subcategory->save();

            return redirect(route('subcategory.create'))->with('success', 'Subcategory added successfully.');
        }catch (Exception $e){
            Log::error("Exception occurred while inserting subcategory.\n" . $e);
            return redirect(route('subcategory.create'))->with('error', 'Error occurred while adding subcategory.');
        }

    }
}
