<?php

namespace App\Http\Controllers\Ajax;

use App\Category;
use App\Http\Resources\CategoryResource;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class CategoryAjaxController extends BaseAjaxController
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
            Log::error("Exception occurred while creating new category. Exception: \n" . $exception);
            return $this->sendResponse("error", "Error occurred while creating category. Please check logs.. ");
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
                Log::error("Exception occurred while updating category. Exception: \n" . $exception);
                return $this->sendResponse("error", "Error occurred while updating category. Please check logs.. ");
            }
        }else{
            return $this->sendResponse("error", "Unable to find category with id: " . $id);
        }
    }

    public function destroy($id){
        $category = Category::find($id);
        try{
            $category->delete();
            return $this->sendResponse("info", "Main category deleted successfully. Please refresh page.");
        }catch (Exception $exception){
            return $this->sendResponse("error", "Error occurred while deleting main category. Please check logs.");
        }
    }

    public function migrate($source, $target){
        try {
            DB::update('UPDATE subcategories SET category_id = ? WHERE category_id = ?', [$target, $source]);
            $this->destroy($source);
            return $this->sendResponse("info", "Main category is migrated and deleted successfully. Please refresh page.");
        }catch (Exception $exception){
            Log::error("Exception occurred while migrating main category. Exception: \n" . $exception);
            return $this->sendResponse("error", "Error occurred while migrating main category. Please check logs.");
        }
    }
}
