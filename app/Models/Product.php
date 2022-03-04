<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{

    protected $fillable = [
        'id_postavschika',
        'title',
        // 'slug',
        'category_id',
        'price',
        'price_new',
        'description_short',
        'description',
        'brand_id',
        'image_main',
        'keywords',
        // 'status',
        // 'newest',
        // 'hit',
        // 'related_product',
    ];

    // protected $guarded = [];

    use HasFactory, Sluggable;



    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function gallery()
    {
        return $this->hasMany(Gallery::class);
    }


    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
