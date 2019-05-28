<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Carbon;
use stdClass;

class PartsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $attachments = array();


        foreach ($this->getMedia('attachment') as $media){
            $fob = new stdClass();
            $fob->file_name = $media->file_name;
            $fob->file_url = $media->getUrl();
            array_push($attachments, $fob);
        }

        foreach ($this->getMedia('datasheet') as $media){
            $fob = new stdClass();
            $fob->file_name = $media->file_name;
            $fob->file_url = $media->getUrl();
            array_push($attachments, $fob);
        }

        foreach ($this->getMedia('pinout') as $media){
            $fob = new stdClass();
            $fob->file_name = $media->file_name;
            $fob->file_url = $media->getUrl();
            array_push($attachments, $fob);
        }

        return [
            'id' => (int) $this->id,
            'name' => $this->name,
            'description' => $this->description,
            'stock' => (int) $this->stock,
            'url' => $this->url,
            'notes' => $this->notes,
            'price' => (double) $this->price,
            'created_at' => Carbon::parse($this->created_at)->toDateTimeString(),
            'updated_at' => Carbon::parse($this->updated_at)->toDateTimeString(),
            'thumb' => $this->getFirstMediaUrl('images', 'thumbs'),
            'image' => $this->getFirstMediaUrl('images'),
            'attachments' => $attachments,
            'tags' => $this->tagArray,
            'subcategory' => new SubcategoryDefinitionResource($this->whenLoaded('subcategory')),
            'location' => new LocationResource($this->whenLoaded('location'))
        ];
    }
}
