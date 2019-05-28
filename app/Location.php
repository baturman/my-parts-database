<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Image\Exceptions\InvalidManipulation;
use Spatie\MediaLibrary\File;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;

class Location extends Model implements HasMedia
{
    use HasMediaTrait;

    protected $fillable = [
        'name', 'description'
    ];

    public function registerMediaCollections()
    {
        $this->addMediaCollection('images')
            ->acceptsFile(function (File $file) {
                return $file->mimeType === 'image/jpeg' || $file->mimeType === 'image/png' || $file->mimeType === 'image/jpg';
            })
            ->singleFile();

        try {
            $this->addMediaConversion('thumbs')
                ->width(64)
                ->height(64)
                ->sharpen(8)
                ->performOnCollections('images');
        } catch (InvalidManipulation $e) {
            Log::error("Exception thrown during media conversion. Exception: \n" . $e);
        }
    }

    public function parts()
    {
        return $this->hasMany('App\Part');
    }


}
