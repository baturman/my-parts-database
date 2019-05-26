<?php

namespace App\Http\Controllers\Ajax;

use App\Category;
use App\Http\Resources\CategoryResource;
use Exception;
use Illuminate\Http\Request;

class CategoriesAjaxController extends BaseAjaxController
{
    public function index(){
        $categories = Category::all();
        return $this->sendResponse("info", "All categories are retrieved successfully.", CategoryResource::collection($categories));
    }

    public function store(Request $request){
        $category = new Category();
        try{
            $data = $request->only($category->getFillable());
            $category->fill($data);
            $category->save();
            return $this->sendResponse("success", "Category has been created successfully. Please refresh page to reflect changes.");
        }catch (Exception $exception){
            return $this->sendResponse("error", "Exception occurred while creating category. Please check logs.. ");
        }
    }


    public function show($id){
        $category = Category::find($id);
        if ($category){
            return $this->sendResponse("info", "Category data retrieved successfully.", new CategoryResource($category));
        }else{
            return $this->sendResponse("error", "Error occurred while retrieving category data. Please check logs..");
        }
    }

    public function update(Request $request, $id){
        $category = Category::find($id);
        if ($category){
            try{
                $data = $request->only($category->getFillable());
                $category->fill($data);
                $category->save();
                return $this->sendResponse("success", "Category is updated successfully.");
            }catch (Exception $exception){
                return $this->sendResponse("error", "Exception occurred while updating category. Please check logs.. ");
            }
        }else{
            return $this->sendResponse("error", "Unable to find category with id: " . $id);
        }
    }

    public function destroy($id){
        
    }
}
