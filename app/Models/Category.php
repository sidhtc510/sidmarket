<?php

namespace App\Models;


use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory, Sluggable;

    protected $fillable = [
        'title'
    ];


    // Категории бесконечной вложенности при помощи рекурсивных отношений hasMany
    // https://laravel.demiart.ru/recursive-hasmany-relationship-with-unlimited-subcategories/
    public function categories()
    {
        return $this->hasMany(Category::class)->with('childrenCategories');
    }

    public function childrenCategories()
    {
        return  $this->hasMany(Category::class)->with('categories');
    }

    public function parentCategory()
    {
        return  $this->belongsTo(Category::class, 'category_id', 'id');
    }


    public function products()
    {
        $ttt =  $this->hasMany(Product::class);
        // dump($ttt);
        return $ttt;
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
