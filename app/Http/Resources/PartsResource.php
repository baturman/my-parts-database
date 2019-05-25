<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PartsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'name' => $this->name,
            'amount' => (int) $this->amount,
            'brand' => $this->brand,
            'model' => $this->model,
            'thumb' => $this->getFirstMediaUrl('images', 'thumbs'),
            'subcategory' => new SubCategoryResource($this->whenLoaded('subcategory')),

        ];
    }
}
