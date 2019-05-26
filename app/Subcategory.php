<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{

    use Sluggable;

    protected $fillable = [
        'name', 'description'
    ];

    public function category()
    {
        return $this->belongsTo('App\Category', 'category_id', 'id');
    }

    public function parts()
    {
        return $this->hasMany('App\Part');
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
