<?php

namespace App\Models;


use App\Models\Product;
use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory, Sluggable;

    protected $fillable = [
        'title'
    ];


    // START   Категории бесконечной вложенности при помощи рекурсивных отношений hasMany
    // https://laravel.demiart.ru/recursive-hasmany-relationship-with-unlimited-subcategories/
    public function categories()
    {
        return $this->hasMany(Category::class)->with('childrenCategories');
    }

    public function childrenCategories()
    {
        return  $this->hasMany(Category::class)->with('categories');   // ->withCount('products')
    }

    public function parentCategory()
    {
        return  $this->belongsTo(Category::class, 'category_id', 'id');
    }


    public function products()
    {
        return $this->hasMany(Product::class);
    }
    // END Категории бесконечной вложенности при помощи рекурсивных отношений hasMany




// // START рекурсивный вывод товаров на странице category 
// https://ru.stackoverflow.com/questions/1383922/laravel-%d0%b2%d1%8b%d0%b2%d0%be%d0%b4-%d0%bf%d1%80%d0%be%d0%b4%d1%83%d0%ba%d1%82%d0%be%d0%b2-%d0%b8%d0%b7-%d0%b4%d0%be%d1%87%d0%b5%d1%80%d0%bd%d0%b5%d0%b9-%d0%b8-%d1%80%d0%be%d0%b4%d0%b8%d1%82%d0%b5%d0%bb%d1%8c%d1%81%d0%ba%d0%be%d0%b9-%d0%ba%d0%b0%d1%82%d0%b5%d0%b3%d0%be%d1%80%d0%b8%d0%b9

// дополнение https://stackoverflow.com/questions/38195241/how-do-i-get-all-children-that-fall-under-a-parent-in-eloquent


    public function children(): HasMany
    {
        return $this->hasMany(Category::class, 'category_id', 'id');
    }

    public function getAllChildren(): Collection
    {
        $allChildren = collect();
        $this->appendChildren($allChildren, $this);

        return $allChildren;
    }

    protected function appendChildren(Collection &$collection, $category): Collection
    {
        foreach ($category->children as $child) {
            $collection->add($child);
            $collection = $this->appendChildren($collection, $child);
        }

        return $collection;
    }

    public function getAllProducts()
    {
        $categoryIds = $this->getAllChildren()->pluck('id')->toArray();
        array_push($categoryIds, $this->id);

        return Product::whereIn('category_id', $categoryIds)->orderBy('id', 'desc')->paginate(10);
    }
// END рекурсивный вывод товаров на странице category 



    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
