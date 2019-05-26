<?php

namespace App\Http\Controllers;

use App\Category;
use App\Part;
use App\Subcategory;
use Cviebrock\EloquentTaggable\Services\TagService;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class PartController extends Controller
{

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tagService = app(TagService::class);
        $tags = $tagService->getAllTags();
        $plainTags = array();
        foreach ($tags as $tag){
            array_push($plainTags, $tag->name);
        }

        $categories = Category::orderBy('name', 'asc')->get();
        return view('part-create')->with('categories', $categories)->with('tags', $plainTags);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'location' => 'required',
            'price' => 'nullable|numeric',
            'sub_category_id' => 'required'
        ]);

        try{

            $part = new Part();
            $data = $request->only($part->getFillable());
            $part->fill($data);
            $part->sub_category_id = $request->get('sub_category_id');
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


            return redirect(route('part.create'))->with('success', 'Part added successfully.');
        }catch (Exception $e){
            Log::error("Exception occurred while saving data. Exception: \n" . $e );
            return redirect(route('part.create'))->with('error', 'Error occurred while adding part.');
        }


    }


}
