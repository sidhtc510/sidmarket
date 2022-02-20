<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class CategoryFrontController extends Controller
{



    public function show($slug)
    {
        $category = Category::where('slug', $slug)->with('childrenCategories')->firstOrFail();

        // dd($category);
        $products = $category->products()->orderBy('id', 'desc')->get();
        
        return view('category', compact('category', 'products'));

        // $products = Product::where('id', '=', $category->id)->get();




        // $products = Product::all();
        //         $categories = Category::all();

        //     	return view('front.catalog.great-detail')->with('products', $products)->with('categories', $categories);
        //     }

        //     public function detail($slug){

        //         $product = Product::where('slug', '=', $slug)->first();
        //$category = Category::subCategory()->where('category_id', 'category_id')->where('slug', '!=' , $product->slug)->take(4)->inRandomOrder()->get();




        // $products = $category->products()->orderBy('id', 'desc')->get();

        // echo "dump CATEGORY";
        // dump($category);

        // echo"dd PRODUCTS";
        dump($products);

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
