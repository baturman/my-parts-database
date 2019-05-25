<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\File;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;

class Category extends Model implements HasMedia
{

    use HasMediaTrait;

    protected $fillable = [
        'name', 'description'
    ];

    public function subcategories()
    {
        return $this->hasMany('App\SubCategory')->orderBy('name');
    }

}
