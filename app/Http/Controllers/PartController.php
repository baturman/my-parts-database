<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Controllers\Ajax\BaseAjaxController;
use App\Http\Resources\PartsResource;
use App\Location;
use App\Part;
use Cviebrock\EloquentTaggable\Services\TagService;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\ValidationException;

class PartController extends BaseAjaxController
{

    public function create(){
        $categories = Category::orderBy('name', 'asc')->get();
        $locations = Location::orderBy('name', 'asc')->get();
        return view('backend.parts_create')
            ->with('categories', $categories)
            ->with('locations', $locations);
    }

    public function index(){
        $categories = Category::orderBy('name', 'asc')->get();
        $locations = Location::orderBy('name', 'asc')->get();

        return view('backend.parts')
            ->with('categories', $categories)
            ->with('locations', $locations);
    }

    public function edit($id){
        $categories = Category::orderBy('name', 'asc')->get();
        $locations = Location::orderBy('name', 'asc')->get();
        $part = Part::findOrFail($id);
        return view('backend.parts_edit')
            ->with('categories', $categories)
            ->with('locations', $locations)
            ->with('part', $part);
    }

    /**
     * @param Request $request
     * @return RedirectResponse|Redirector
     * @throws ValidationException
     */
    public function store(Request $request){

        $this->validate($request, [
            'name' => 'required|min:10|max:55',
            'description' => 'required|min:10|max:80',
            'stock' => 'required|numeric',
            'price' => 'nullable|numeric',
            'sub_category_id' => 'required',
            'location_id' => 'required',
            'tags' => 'required',
            'image' => 'required'
        ]);

        $part = new Part();
        try{
            $data = $request->only($part->getFillable());
            $part->fill($data);
            $part->subcategory_id = $request->get('sub_category_id');
            $part->location_id = $request->get('location_id');
            $part->save();

            if ($request->exists('tags')){
                $tagify = $request->get('tags');
                if (strlen($tagify)>0){
                    $tags = json_decode($tagify);
                    foreach ($tags as $tag){
                        $part->tag($tag->value);
                    }
                }
            }


            if ($request->exists('image')){
                $cover = $request->file('image');
                $part
                    ->addMedia($cover->getRealPath())
                    ->preservingOriginal()
                    ->setFileName($cover->getClientOriginalName())
                    ->toMediaCollection('images');
            }

            if ($request->exists('attachment')){
                $attachment = $request->file('attachment');
                $part
                    ->addMedia($attachment->getRealPath())
                    ->preservingOriginal()
                    ->setFileName($attachment->getClientOriginalName())
                    ->toMediaCollection('attachment');
            }

            if ($request->exists('pinout')){
                $pinout = $request->file('pinout');
                $part
                    ->addMedia($pinout->getRealPath())
                    ->preservingOriginal()
                    ->setFileName($pinout->getClientOriginalName())
                    ->toMediaCollection('pinout');
            }

            if ($request->exists('datasheet')){
                $datasheet = $request->file('datasheet');
                $part
                    ->addMedia($datasheet->getRealPath())
                    ->preservingOriginal()
                    ->setFileName($datasheet->getClientOriginalName())
                    ->toMediaCollection('datasheet');
            }

            return redirect(route('parts.create'))->with('success', 'Part added successfully.');
        }catch (Exception $exception){
            Log::error("Exception occurred while creating new part. Exception: \n" . $exception);
            return redirect(route('parts.create'))->with('error', $exception->getMessage());
        }
    }

    public function show($id){
        $part = Part::find($id);
        $part->load('subcategory');
        $part->load('location');
        if ($part){
            return $this->sendResponse("info", "Part data retrieved successfully.", new PartsResource($part));
        }else{
            return $this->sendResponse("error", "Error occurred while retrieving part data. Please check logs..");
        }
    }

    /**
     * @param Request $request
     * @param $id
     * @return RedirectResponse|Redirector
     * @throws ValidationException
     */
    public function update(Request $request, $id){
        $part = Part::findOrFail($id);

        $this->validate($request, [
            'name' => 'required|min:10|max:55',
            'description' => 'required|min:10|max:80',
            'stock' => 'required|numeric',
            'price' => 'nullable|numeric',
            'sub_category_id' => 'required',
            'location_id' => 'required',
            'tags' => 'required',
        ]);

        try{
            $data = $request->only($part->getFillable());
            $part->fill($data);
            $part->subcategory_id = $request->get('sub_category_id');
            $part->location_id = $request->get('location_id');
            $part->save();

            $part->detag();

            if ($request->exists('tags')){
                $tagify = $request->get('tags');
                if (strlen($tagify)>0){
                    $tags = json_decode($tagify);
                    foreach ($tags as $tag){
                        $part->tag($tag->value);
                    }
                }
            }


            if ($request->exists('image')){
                $cover = $request->file('image');
                $part
                    ->addMedia($cover->getRealPath())
                    ->preservingOriginal()
                    ->setFileName($cover->getClientOriginalName())
                    ->toMediaCollection('images');
            }

            if ($request->exists('attachment')){
                $attachment = $request->file('attachment');
                $part
                    ->addMedia($attachment->getRealPath())
                    ->preservingOriginal()
                    ->setFileName($attachment->getClientOriginalName())
                    ->toMediaCollection('attachment');
            }

            if ($request->exists('pinout')){
                $pinout = $request->file('pinout');
                $part
                    ->addMedia($pinout->getRealPath())
                    ->preservingOriginal()
                    ->setFileName($pinout->getClientOriginalName())
                    ->toMediaCollection('pinout');
            }

            if ($request->exists('datasheet')){
                $datasheet = $request->file('datasheet');
                $part
                    ->addMedia($datasheet->getRealPath())
                    ->preservingOriginal()
                    ->setFileName($datasheet->getClientOriginalName())
                    ->toMediaCollection('datasheet');
            }

            return redirect(route('parts.edit', [$part->id]))->with('success', 'Part saved successfully.');
        }catch (Exception $exception){
            Log::error("Exception occurred while saving part. Exception: \n" . $exception);
            return redirect(route('parts.edit', [$part->id]))->with('error', $exception->getMessage());
        }
    }

    /* Ajax Functions */
    public function destroy($id){
        $part = Part::find($id);
        try{
            $part->delete();
            return $this->sendResponse("info", "Part deleted successfully.");
        }catch (Exception $exception){
            return $this->sendResponse("error", "Error occurred while deleting part. Please check logs.");
        }
    }


    public function tags(){
        $tagService = app(TagService::class);
        $tags = $tagService->getAllTags();
        $plainTags = array();
        foreach ($tags as $tag){
            array_push($plainTags, $tag->name);
        }
        return $this->sendResponse("info", "All tags are retrieved successfully.", $plainTags);
    }

    public function all(){
        $parts = Part::all();
        $parts->load('subcategory');
        $parts->load('location');
        return $this->sendResponse("info", "All parts are retrieved successfully.", PartsResource::collection($parts));
    }
}
