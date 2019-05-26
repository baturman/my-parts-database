<?php

namespace App\Http\Controllers\Ajax;

use App\Http\Resources\SubcategoryResource;
use App\Subcategory;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class SubcategoryAjaxController extends BaseAjaxController
{
    public function index(){
        $subcategories = Subcategory::all();
        return $this->sendResponse("success", "All subcategories are retrieved successfully.", SubcategoryResource::collection($subcategories));
    }

    public function store(Request $request){
        $subcategory = new Subcategory();
        try{
            $data = $request->only($subcategory->getFillable());
            $subcategory->fill($data);
            $subcategory->category_id = $request->get('category_id');
            $subcategory->save();
            return $this->sendResponse("success", "Subcategory has been created successfully. Please refresh page to reflect changes.");
        }catch (Exception $exception){
            Log::error("Exception occurred while creating new subcategory. Exception: \n" . $exception);
            return $this->sendResponse("error", "Exception occurred while creating subcategory. Please check logs.. ");
        }
    }

    public function show($id){
        $subcategory = Subcategory::find($id);
        if ($subcategory){
            return $this->sendResponse("info", "Subcategory data retrieved successfully.", new SubcategoryResource($subcategory));
        }else{
            return $this->sendResponse("error", "Error occurred while retrieving subcategory data. Please check logs..");
        }
    }

    public function update(Request $request, $id){
        $subcategory = Subcategory::find($id);
        if ($subcategory){
            try{
                $data = $request->only($subcategory->getFillable());
                $subcategory->fill($data);
                $subcategory->save();
                return $this->sendResponse("success", "Subcategory is updated successfully.");
            }catch (Exception $exception){
                Log::error("Exception occurred while updating subcategory. Exception: \n" . $exception);
                return $this->sendResponse("error", "Exception occurred while updating subcategory. Please check logs.. ");
            }
        }else{
            return $this->sendResponse("error", "Unable to find subcategory with id: " . $id);
        }
    }

    public function destroy($id){
        $subcategory = Subcategory::find($id);
        try{
            $subcategory->delete();
            return $this->sendResponse("info", "Subcategory deleted successfully. Please refresh page.");
        }catch (Exception $exception){
            return $this->sendResponse("error", "Error occurred while deleting subcategory. Please check logs.");
        }
    }

    public function migrate($source, $target){
        try {
            DB::update('UPDATE parts SET subcategory_id = ? WHERE subcategory_id = ?', [$target, $source]);
            $this->destroy($source);
            return $this->sendResponse("info", "Subcategory is migrated and deleted successfully. Please refresh page.");
        }catch (Exception $exception){
            Log::error("Exception occurred while migrating subcategory. Exception: \n" . $exception);
            return $this->sendResponse("error", "Error occurred while migrating subcategory. Please check logs.");
        }
    }
}
