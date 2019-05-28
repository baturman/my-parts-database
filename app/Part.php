<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentTaggable\Taggable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;
use Laravel\Scout\Searchable;
use Spatie\Image\Exceptions\InvalidManipulation;
use Spatie\MediaLibrary\File;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;

class Part extends Model implements HasMedia
{
    use HasMediaTrait;
    use Searchable;
    use Sluggable;
    use Taggable;

    protected $fillable = [
        'name',
        'description',
        'stock',
        'url',
        'price',
        'notes'
    ];

    public function subcategory()
    {
        return $this->belongsTo('App\Subcategory', 'subcategory_id', 'id');
    }

    public function location()
    {
        return $this->belongsTo('App\Location', 'location_id', 'id');
    }

    public function registerMediaCollections()
    {
        $this->addMediaCollection('images')
            ->acceptsFile(function (File $file) {
                return $file->mimeType === 'image/jpeg' || $file->mimeType === 'image/svg+xml' || $file->mimeType === 'image/png' || $file->mimeType === 'image/jpg';
            })->singleFile();

        $this->addMediaCollection('datasheet')
            ->acceptsFile(function (File $file) {
                return $file->mimeType === 'application/zip' || $file->mimeType === 'application/pdf' || $file->mimeType === 'image/jpeg' || $file->mimeType === 'image/svg+xml' || $file->mimeType === 'image/png' || $file->mimeType === 'image/jpg';
            })->singleFile();

        $this->addMediaCollection('pinout')
            ->acceptsFile(function (File $file) {
                return $file->mimeType === 'image/jpeg' || $file->mimeType === 'image/svg+xml' || $file->mimeType === 'image/png' || $file->mimeType === 'image/jpg';
            })->singleFile();

        $this->addMediaCollection('attachments')
            ->acceptsFile(function (File $file) {
                return $file->mimeType === 'application/zip' || $file->mimeType === 'application/pdf';
            })->singleFile();

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

    public function searchableAs(){
        return 'parts_index';
    }

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }
}
