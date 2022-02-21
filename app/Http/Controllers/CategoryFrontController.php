<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class CategoryFrontController extends Controller
{

    public $subProduct;

    public function show($slug)
    {
        $category = Category::where('slug', $slug)->with('childrenCategories')->firstOrFail();

        $products = $category->products()->orderBy('id', 'desc')->get();



        foreach ($category->childrenCategories as $item) {
            $subProduct = $item->products()->orderBy('id', 'desc')->get();
            // dump($subProduct);

            $collection = collect($products);
            $products = $collection->merge($subProduct);
        }
        

        return view('category', compact('category', 'products'));
    }



    public function coll()
    {
        $collect = collect(['kley' => [
            ['name' => 'JavaScript: The Good Parts', 'pages' => 176],
            ['name' => 'JavaScript: The Definitive Guide', 'pages' => 1096],
        ]]);

        foreach ($collect as $array) {
            dump($array);
            echo '<hr>';
            foreach ($array as $x) {
                dump($x);
            }
        }
    }
}
